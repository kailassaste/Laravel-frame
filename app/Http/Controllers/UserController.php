<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller{

    function getUser(){
       // return "Kailas";
        return view('home');
    }
    function aboutUser(){
        return "code ttep by step";
    }
    function getUserName($name){
        echo "hello this is ".$name;
        return view('getuser',['name'=>$name]);
    }
}