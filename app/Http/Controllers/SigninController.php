<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\users;

class SigninController extends Controller
{
    public function index()
    {
        return view('signin');
    }
    public function recaptcha()
    {

    }
    public function checkuser(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $check = users::where('username',$username)->count();
        if($check > 0)
        {
            $user = users::where('username',$username)->first();
            if(Hash::check($password, $user['password']))
            {
                session(['userid' => $user['id']]);
                return redirect()->route('user.homepage');
            }
            else
            {
                return redirect()->route('user.signin')->with('simsg','wrong password');
            }
        }
        else
        {
            return redirect()->route('user.signin')->with('simsg','this username is not exist');
        }
    }
}
