<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Registros extends Controller
{
    public function index(){
        return view('registro');
    }
    public function registrar(Request $request){
        $item = new User();
        $item->name = $request->user;
        // el Hash ayuda a tener 2 contraseñas diferentes, asi como de 2 pasos
        $item->password = Hash::make($request->pass);
        $item->save();
        return redirect()->route('login');
    }
}
