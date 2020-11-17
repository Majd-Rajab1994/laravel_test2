<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\users;

class SignupController extends Controller
{
    public function index()
    {
        return view('signup');
    }
    public function create(Request $request)
    {
        $name = $request->input('name');
        $username = $request->input('username');
        $password = $request->input('password');
        $cpassword = $request->input('cpassword');
        $email = $request->input('email');

        $checkuser = users::where('name',$name)->orwhere('username',$username)->count();
                if ($checkuser > 0) {
                    return redirect()->route('user.signup')->with('sumsg','that user already exist');
                }
                else
                {
                    $user = new users();
                    $user->name = $name;
                    $user->username = $username;
                    $user->password = Hash::make($password);
                    $user->email =$email;
                    $user->save();
                    return redirect()->route('user.signin');
                }
    }
}
