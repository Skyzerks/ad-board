<?php

namespace App\Repositories;

use DB;
use App\User;

class UserRepository
{
    public function getUsers()
    {
        $res = User::all();
        return $res;
    }
}