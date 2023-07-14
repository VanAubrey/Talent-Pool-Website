<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function test1(){

        echo "Test Text From Controller";
        return view('register');
    }
}
