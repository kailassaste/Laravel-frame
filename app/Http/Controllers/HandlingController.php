<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HandlingController extends Controller
{
    //
    function newUser(Request $request){
        echo $request->city;
        echo "<br/>";
        echo $request->gender;
        echo "<br/>";
        echo $request->age;
        echo "<br/>";
        print_r ($request->skill);
        
    }
}
