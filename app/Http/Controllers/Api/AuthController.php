<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\AuthRequest;
use App\Repositories\Auth;

class AuthController extends Controller
{
    /**
     * Login user threw API
     *
     * @param AuthRequest $request
     *
     * @return \Illuminate\Http\JsonResponse|object
     */
    public function login(AuthRequest $request)
    {
        $request->validated();

        $auth = new Auth();

        if ($user = $auth->validateUser($request->email, $request->password)) {
            $tokenObject = $user->createToken('PerParson Auth Token');

            return response()
                ->json(
                    (object)[
                        'token' => $tokenObject->token,
                    ]
                );
        }

        $noUserFoundResponse = ['message' => 'Wrong user provided'];

        return response()
            ->json($noUserFoundResponse)
            ->setStatusCode(400);
    }

    /**
     * Log out user threw API
     *
     * @param AuthRequest $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(AuthRequest $request)
    {
        $token = $request->user()
                         ->token();

        $token->revoke();

        return response()
            ->json(['message' => 'OK']);
    }
}
