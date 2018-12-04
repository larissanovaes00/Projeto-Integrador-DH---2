<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;


class adminController extends Controller
{
    public function __construct()
    {
        $this->middleware('userType');
    }

    public function admin()
    {
        return view('admin/dashboard/dashboard');
    }

    public function logout()
    {   
        Auth::logout();
        return redirect('/');
    }
}
