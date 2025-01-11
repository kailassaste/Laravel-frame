<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller{

    //controller
    // function getUser(){
    //    // return "Kailas";
    //     return view('home');
    // }

    // function aboutUser(){
    //     return "code step by step";
    // }

    // function getUserName($name){
    //     echo "hello this is ".$name;
    //     return view('getuser',['name'=>$name]);
    // }


    
    //blade template
    // function homeUser(){
    //     $name="Guru";
    //     $users=['sia','onkar','shru','peter'];
    //     return view('home',["name"=>$name, "users"=>$users]);
    // }


    // for validation
    function addUser(Request $request){
        $request->validate([
            'username'=>'required | min:3 | max:10',
            'email'=>'required | email',
            'city'=>'required |max:20',
            'skills'=>'required',

        ],[
            'username.required'=>'username can not be empty',
            'username.min'=>'username should be min character 3',
            'username.max'=>'username should be min character 10',
            'email.email'=>'this email is not valid'
        ]);
        return $request;

        
    }
}
