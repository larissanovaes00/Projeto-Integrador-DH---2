<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;


class adminController extends Controller
{
    public function __construct()
    {
        $this->middleware('userType');
    }

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/dashboard/dashboard';

    // public function admin()
    // {
    //     return view('admin/dashboard/dashboard');
    // }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
