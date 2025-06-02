<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Inc\AuthRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class IncController extends Controller
{
    /**
     * Summary of login
     * @param \App\Http\Requests\Api\Inc\AuthRequest $incRequest
     * @return JsonResponse|mixed
     */
    public function login(AuthRequest $incRequest): JsonResponse
    {

        if (!Auth::attempt($incRequest->validated())) {
            return response()->json([
                'message' => 'Wrong email or password'
            ], 401);
        }

        $user = Auth::user();

        return response()->json([
            'user' => $user,
            'token' => $user->createToken("Token create {$user->name}")->plainTextToken
        ]);

    }

    /**
     * Summary of logout
     * @return JsonResponse|mixed
     */
    public function logout(): JsonResponse
    {
        Auth::user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Log out',
        ]);
    }
}
