<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('userpage');
    }
    public function index1()
    {
        return view('userchart1');
    }
    public function index2()
    {
        return view('userchart2');
    }
}
