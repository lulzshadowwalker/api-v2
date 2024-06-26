<?php

namespace App\Http\Controllers\Api;

use App\ApiResponses;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\LoginRequest;
use App\Models\User;
use App\Permissions\V1\Abilities;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use ApiResponses;

    /**
     * Login
     * 
     * Authenticate a user and return a token
     * 
     * @group Auth
     * @unauthenticated
     * @response 200 {
    "data": {
        "token": "{YOUR_API_KEY}"
    },
    "message": "Authenticated",
    "status": 200
}
     */
    public function login(LoginRequest $request)
    {
        $request->validated($request->all());

        if (!Auth::attempt($request->only('email', 'password'))) {
            return $this->error('Invalid credentials', Response::HTTP_UNAUTHORIZED);
        }

        $user = User::firstWhere('email', $request->email);

        return $this->ok(
            'Authenticated',
            [
                'token' => $user->createToken(
                    "API Token for {$user->email}",
                    Abilities::getAbilities($user),
                    now()->addMonth(),
                )->plainTextToken
            ]
        );
    }

    /**
     * Logout
     * 
     * Revoke the current user's token
     * 
     * @group Auth
     * @authenticated
     * @response 200 {
    "data": [],
    "message": "Token revoked",
    "status": 200
}
     */
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return $this->ok('Token revoked');
    }
}
