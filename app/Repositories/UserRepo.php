<?php

namespace App\Repositories;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;
use stdClass;

class UserRepo
{
    protected User $user;

    public function __construct(int $userId = 0)
    {
        if (empty($userId)) {
            $this->user = new User();
            return;
        }

        $this->user = User::findOrFail($userId);
    }

    /**
     * Store or update User
     *
     * @param stdClass $data
     * @return User
     */
    public function storeOrUpdate(stdClass $data): User
    {
        $this->user->email    = $data->email;
        $this->user->password = Hash::make($data->password);

        $this->user->save();

        return $this->user;
    }

    /**
     * @throws Exception
     */
    public function destroy(): void
    {
        $this->user->delete();
    }

    /**
     * @return User
     */
    public function model(): User
    {
        return $this->user;
    }

}