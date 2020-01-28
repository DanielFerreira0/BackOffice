<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;


class UserController extends Controller
{

    public function users(){
        return User::all();
    }

    public function getUser($id){
        $user = User::find($id);
        return $user;
    }
    
}
