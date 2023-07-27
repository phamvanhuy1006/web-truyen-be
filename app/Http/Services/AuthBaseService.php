<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

abstract class AuthBaseService
{
    public function _refreshToken($token)
    {
        $oauthClient = $this->getClient();
        $data = [
            'grant_type' => 'refresh_token',
            'client_id' => $oauthClient->id,
            'client_secret' => $oauthClient->secret,
            'refresh_token' => $token
        ];
        $url = config('app.url') . '/oauth/token';
        request()->request->add($data);
        $request = Request::create($url, 'POST');
        $response = Route::dispatch($request);

        $statusCode = $response->status();
        $content = $response->getContent();

        if ($statusCode >= 200 && $statusCode <= 209) {
            return (object)['data' => json_decode($content, true)];
        } else {
            return (object)['data' => json_decode($content), 'code' => $statusCode];
        }
    }

    abstract public function getClient();
}
