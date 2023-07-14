<?php



namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use App\Http\Requests\SignUpRequest;
// use App\Models\User;
class SignUpController extends Controller
{
    public function testsignup(Request $request)
    {
        print_r($request->all());
        return view('register');
    }
}

