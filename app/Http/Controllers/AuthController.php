<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index(){
        // return view('login');
        return Auth::check() ? redirect()->route('inicio') : view('login');
        // if(Auth::check()){
        //     return redirect()->route('inicio');
        // }else{
        //     return view('login');
        // }
    }
    public function logear(Request $request){
        $credenciales = $request->only('name','password');
        return (Auth::attempt($credenciales)) ? redirect()->route('inicio') : back()->withInput($credenciales);
    }
    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect()->route('login');
    }
}
