<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function getlogin() {
        return view('Admin.login');
    }
    public function dologin(Request $request) {
        $email = $request->email;
        $password = $request->password;
        $rememberme = $request->rememberme;
        if(auth()->guard('admin')->attempt(['email' => $email, 'password' => $password], $rememberme))
        {   
            return redirect('admin/index');
        }
        else {
            session()->flash('error', 'Wrong Email Or Password');
            return redirect('admin/login');
        }
    }
        public function index() {
        return view('admin.index');
    }


}
