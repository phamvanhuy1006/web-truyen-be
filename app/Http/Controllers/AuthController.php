<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Services\AuthService;
use Illuminate\Support\Facades\App;

class AuthController extends Controller
{
    protected $authService;
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function login(Request $request)
    {
        try {
            $request->validate([
                'email' => 'email|required',
                'password' => 'required'
            ]);

            $credentials = request(['email', 'password']);

            if (!Auth::attempt($credentials)) {
                return response()->json([
                    'status_code' => 500,
                    'message' => 'Unauthorized'
                ]);
            }

            $user = User::where('email', $request->email)->first();

            if (!Hash::check($request->password, $user->password, [])) {
                throw new \Exception('Error in Login');
            }

            $tokenResult = $user->createToken('authToken')->plainTextToken;

            return response()->json([
                'status_code' => 200,
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
            ]);
        } catch (\Exception $error) {
            return response()->json([
                'status_code' => 500,
                'message' => 'Error in Login',
                'error' => $error,
            ]);
        }
    }

    public function attempt($credentials)
    {
        $email = $credentials['email'];
        $password = $credentials['password'];
        $user = User::where('email', $email)
            ->whereHas('roles', function ($q) {
                $q->whereIn('name', ['super_admin', 'admin']);
            })
            ->first();
        if (!$user || !Hash::check($password, $user->getAuthPassword())) {
            return;
        }

        return $user;
    }

    public function me(Request $request)
    {
        $user = Auth::user();
        $user = User::query()
            ->where(['id' => $user->id])
            ->first();
        if ($user->company) {
            $user->setting = $user->company->setting;
        }
        $user->role = $user->getRoleNames()[0];
        $user->all_permissions = $user->getPermissionNamesByRole();
        if ($user) {
            return response()->json($user);
        }
    }

    public function refreshToken(Request $request)
    {
        $refreshToken = $request->get('refresh_token');
        $auth = $this->authService->refreshToken($refreshToken);
        return response()->json($auth->data, $auth->code ?? 200);
    }

    public function logout()
    {
        if (Auth::check()) {
            Auth::user()->token()->revoke();
            return response()->json(['message' => 'Successful logout']);
        }
        return response()->json(['message' => 'Fail logout'], 401);
    }
}
