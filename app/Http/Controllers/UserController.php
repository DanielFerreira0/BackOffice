<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{


    public function newUser(){
        return view('newUser');
    }


    public function addUser(Request $request){

        $password = $_POST['password_form'];
        $confirm = $_POST['confirm_form'];


        if($password != $confirm){
            echo "Passwords = ". $password. ", ". $confirm; 
        }else{
            $user = new user;
            $user->name = $request->name_form;
            $user->email = $request->email_form;
            $user->password = $request->password_form;
    
            $user->save();
        }


        return back();
    }
}