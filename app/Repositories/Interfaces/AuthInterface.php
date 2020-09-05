<?php


namespace App\Repositories\Interfaces;


interface AuthInterface
{
    /**
     * Validate user
     *
     * @param string $email
     * @param        $password
     *
     * @return mixed
     */
    public function validateUser(string $email, string $password)
}
