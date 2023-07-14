<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function testsignup(Request $request)
    {
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');
        $confirmPassword = $request->input('confirm_password');

        echo "Username: " . $username . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Password: " . $password . "<br>";
        echo "Confirm Password: " . $confirmPassword . "<br>";

        // print_r($request->($username,$email,$password,$confirmPassword));

        return view('register');
    }
}
