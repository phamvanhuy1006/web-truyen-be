<?php

namespace App\Http\Services;

use App\Http\Services\AuthBaseService;
use Illuminate\Support\Facades\DB;

class AuthService extends AuthBaseService
{
    public function accessToken($credentials)
    {
        return $this->_accessToken($credentials);
    }

    public function updateLastLoginTime($user)
    {
        $user->update(['last_login_time' => now()]);
    }

    public function refreshToken($token)
    {
        return $this->_refreshToken($token);
    }

    function getClient()
    {
        return DB::table('oauth_clients')
            ->where('provider', 'users')
            ->first();
    }
}
