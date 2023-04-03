<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function login()
    {
        if(Auth::check()){
            return redirect('admin/surat');
        } else{
            return view('login');
        }
    }

    public function actionLogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];
        if(Auth::attempt($data)){
            Alert::success('Success', 'Success Login Berhasil');
            return redirect('admin/surat');
        } else {
            Alert::error('Failed', 'Email dan password yang anda masukan salah');
            return view('/login');
        }
    }

    public function actionLogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
