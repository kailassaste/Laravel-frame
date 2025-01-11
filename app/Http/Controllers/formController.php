<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    //
    function addUser(Request $request){
        echo $request->username;
        echo $request->city;
        echo $request->email;
        
    }
}
