<?php

namespace App\Http\Services;

use App\Exports\BaseArrayExport;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

abstract class BaseService
{
    /** @var $model Model */
    protected $model;

    /** @var Builder $query */
    protected $query;

    /** @var Request $request */
    protected $request;

    /**
     *
     */
    public function __construct()
    {
        $this->request = request();
        $this->setModel();
        $this->setQuery();
    }

    /**
     * @return mixed
     */
    abstract protected function setModel();

    /**
     *
     */
    protected function setQuery()
    {
        $this->query = $this->model->query();
    }

    protected function addDefaultFilter()
    {
        $data = $this->request->all();
        $table = $this->model->getTable();
        $fields = ['*'];

        foreach ($data as $key => $value) {
            if ($value || $value === '0') {
                try {
                    if (strpos($key, ':') !== false) {
                        $field = str_replace(':', '.', $key);
                        $query = $this->query;
                        if (preg_match('/(.*)_like$/', $field, $matches)) {
                            $relations = explode('.', $matches[1]);
                            if (count($relations) == 3) {
                                $query->whereHas(
                                    $relations[0],
                                    function ($query) use ($relations, $value) {
                                        $query->whereHas($relations[1], function ($query) use ($relations, $value) {
                                            $query->where($relations[2], 'like', "%$value%");
                                        });
                                    }
                                );
                            } else {
                                $query->whereHas(
                                    $relations[0],
                                    function ($query) use ($relations, $value) {
                                        $query->where($relations[1], 'like', "%$value%");
                                    }
                                );
                            }
                        }
                        if (preg_match('/(.*)_equal$/', $field, $matches)) {
                            $relations = explode('.', $matches[1]);
                            if (count($relations) == 3) {
                                $query->whereHas(
                                    $relations[0],
                                    function ($query) use ($relations, $value) {
                                        $query->whereHas($relations[1], function ($query) use ($relations, $value) {
                                            $query->where($relations[2], '=', $value);
                                        });
                                    }
                                );
                            } else {
                                $query->whereHas(
                                    $relations[0],
                                    function ($query) use ($relations, $value) {
                                        $query->where($relations[1], '=', $value);
                                    }
                                );
                            }
                            // $query->whereHas($relations[0], function ($query) use ($relations, $value) {
                            //     $query->where($relations[1], '=', $value);
                            // });
                        }
                    } else {
                        if (preg_match('/(.*)_like$/', $key, $matches)) {
                            if (config('database.default') === 'sqlsrv') {
                                //                                $value = $this->convert_vi_to_en($value);
                                $this->query->where($table . '.' . $matches[1], 'like', "%$value%");
                            } else {
                                $this->query->where($table . '.' . $matches[1], 'like', '%' . $value . '%');
                            }
                        }
                        if (preg_match('/(.*)_equal$/', $key, $matches)) {
                            $value = explode(',', $value);
                            if (sizeof($value) === 1) {
                                $this->query->where($table . '.' . $matches[1], $value);
                            } else {
                                $this->query->whereIn($table . '.' . $matches[1], $value);
                            }
                        }
                        if (preg_match('/(.*)_notEqual$/', $key, $matches)) {
                            $value = explode(',', $value);
                            if (sizeof($value) === 1) {
                                $this->query->where($table . '.' . $matches[1], "!=", $value);
                            } else {
                                $this->query->whereNotIn($table . '.' . $matches[1], $value);
                            }
                        }
                        if (preg_match('/(.*)_between$/', $key, $matches)) {
                            $this->query->whereBetween($table . '.' . $matches[1], $value);
                        }
                        if (preg_match('/(.*)_isnull$/', $key, $matches)) {
                            if ($value == 1) {
                                $this->query->whereNull($table . '.' . $matches[1]);
                            }
                            if ($value == 0) {
                                $this->query->whereNotNull($table . '.' . $matches[1]);
                            }
                        }
                    }
                    if (preg_match('/^has_(.*)/', $key, $matches)) {
                        if ($value) {
                            $this->query->whereHas($matches[1]);
                        } else {
                            $this->query->whereDoesntHave($matches[1]);
                        }
                    }
                    if ($key == 'only_trashed' && $value) {
                        $this->query->onlyTrashed();
                    }
                    if ($key == 'with_trashed' && $value) {
                        $this->query->withTrashed();
                    }

                    if ($key == 'select' && $value) {
                        $this->query->select($value);
                    }

                    if ($key == 'sort' && $value) {
                        $sorts = explode(',', $value);
                        $this->query->getQuery()->orders = null;
                        foreach ($sorts as $sort) {
                            $sortParams = explode('|', $sort);
                            if (strpos($sortParams[0], '.') !== false) {
                                $this->query->orderByJoin($sortParams[0], isset($sortParams[1]) ? $sortParams[1] : 'asc');
                            } else {
                                $this->query->orderBy($table . '.' . $sortParams[0], isset($sortParams[1]) ? $sortParams[1] : 'asc');
                            }
                        }
                    }
                } catch (\Exception $e) {
                    continue;
                }
            }
        }

        $per_page = $this->request->per_page;
        $pageIndex = $this->request->pageIndex;

        if ($per_page != -1) {
            return $this->query
                ->paginate($per_page ?: 20, ['*'] ,'page', $pageIndex ?: 1);
        }

        return $this->query->get();
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        if (method_exists($this, 'appendFilter')) {
            $this->appendFilter();
        }
        $data = $this->addDefaultFilter();

        if (method_exists($this, 'setTransformers') && $request['per_page'] != -1) {
            $data = $this->setTransformers($data);
        }
        return response()->json($data);
    }
}
