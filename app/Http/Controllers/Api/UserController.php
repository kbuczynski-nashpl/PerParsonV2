<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\User as UserRequest;
use App\Http\Resources\User as UserResource;
use App\Models\User;
use App\Repositories\UserRepo;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response as HttpCode;

class UserController extends Controller
{
    /**
     * @param int $userId
     * @return JsonResponse
     */
    public function show(int $userId): JsonResponse
    {
        return response()->json(new UserResource(User::findOrFail($userId)));
    }

    /**
     * @param UserRequest $request
     * @return JsonResponse
     */
    public function store(UserRequest $request): JsonResponse
    {
        $request->validated();

        $user = new UserRepo();
        $data = (object) $request->only(['email', 'password']);

        DB::beginTransaction();

        try {
            $user = $user->storeOrUpdate($data);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            DB::rollBack();
            return response()->json(['msg' => 'Could not save new user'], HttpCode::HTTP_BAD_REQUEST);
        }

        DB::commit();

        return response()->json(new UserResource($user), HttpCode::HTTP_CREATED);
    }

    /**
     * @param UserRequest $request
     * @param int $userId
     * @return JsonResponse
     */
    public function update(UserRequest $request, int $userId): JsonResponse
    {
        $request->validated();

        $user = new UserRepo($userId);
        $data = (object) $request->only(['email', 'password']);

        DB::beginTransaction();

        try {
            $user = $user->storeOrUpdate($data);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            DB::rollBack();
            return response()->json(['msg' => 'Could not save user details'], HttpCode::HTTP_BAD_REQUEST);
        }

        DB::commit();

        return response()->json(new UserResource($user));
    }

}
