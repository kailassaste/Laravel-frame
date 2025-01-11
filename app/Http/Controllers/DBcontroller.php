<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // database library

class DBcontroller extends Controller
{
    // for data insert 
    // function users(){
    //     return DB::select('select * from users');
    // }

    // for display data on ui
    function users(){
        $users= DB::select('select * from users');
        return view('DBview',['users'=>$users]);
    }
}
