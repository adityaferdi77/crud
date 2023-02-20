<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function login()
    {
        return view('login', [
            'title' => 'login'
        ]);
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email'     => $request->input('email'),
            'password'  => $request->input('password')
        ];

        if(Auth::attempt($data)){
            return redirect('post');
        } else {
            $request->session()->flash('error', 'Email atau Password salah');
            return redirect('/login');
        }
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        // request()->session()->invalidate();
        // request()->session()->regenerateToken();
        return redirect()->back();
    }

    public function register()
    {
        return view('register', [
            'title'     => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validasiData = $request->validate([
            'name'      => 'required|max:255',
            'email'     => 'required|email:dns|unique:users',
            'password'  => 'required|min:1|max:255'
        ]);

        $validasiData['password'] = Hash::make($validasiData['password']);

        User::create($validasiData);
        return redirect('/login')->with('success', 'Berhasil');
    }

}