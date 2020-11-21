<?php


namespace Tests\Helpers;

use App\Models\User;

trait SetUpHelper
{
    protected $standardUser;

    public function setUpApplication()
    {
        $this->standardUser = User::findOrFail(1);
    }
}
