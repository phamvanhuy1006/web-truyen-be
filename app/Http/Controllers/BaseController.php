<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    protected $service;

    public function index(Request $request)
    {
        return $this->service->index($request);
    }

    public function show(Request $request, $id)
    {
        return $this->service->show($request, $id);
    }

    // public function store(Request $request)
    // {
    //     return $this->service->store($request);
    // }

    // public function update(Request $request, $id)
    // {
    //     return $this->service->update($request, $id);
    // }

    public function destroy(Request $request, $id)
    {
        return $this->service->destroy($request, $id);
    }

    public function export(Request $request)
    {
        return $this->service->export($request);
    }

    public function exportTemplate()
    {
        return $this->service->exportTemplate();
    }

    public function import()
    {
        return $this->service->import();
    }
}
