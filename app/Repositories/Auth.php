<?php


namespace App\Repositories;


use App\Models\User;
use App\Repositories\Interfaces\AuthInterface;
use Illuminate\Support\Facades\Hash;

class Auth implements AuthInterface
{
    /**
     * Validate if user exists in the system.
     *
     * @param string $email
     * @param string $password
     *
     * @return mixed
     */
    public function validateUser(string $email, string $password)
    {
        $user = User::where('email', $email);

        if (empty($user)) {
            return false;
        }

        if (!Hash::check($email, $user->email)) {
            return false;
        }

        return $user;
    }

}
