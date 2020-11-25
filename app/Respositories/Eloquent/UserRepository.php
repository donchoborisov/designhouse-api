<?php
namespace App\Respositories\Eloquent;
use App\Models\User;
use App\Respositories\Contracts\IUser;

class UserRepository implements IUser
{
    public function all(){
        return User::all();
    }
}