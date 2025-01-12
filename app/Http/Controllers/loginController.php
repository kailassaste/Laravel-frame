<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    //
    function login(Request $request){
        $request->session()->put('user',$request->input('user'));

        //2 session for store all data
        $request->session()->put('allData',$request->input());

        echo session('user'); // when we want to store data in session
        return redirect('profile');
    }

    function logout(){
        session()->pull('user');
        return redirect('profile');
    }
}
