<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getLogin()
    {
        return view('admin.pages.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $cre = ['email' => $request->email, 'password' => $request->password];


        if (Auth::guard('admin')->attempt($cre)) {
            return redirect('/dashboard');
        } else {
            return redirect('/login');
        }
    }
}
