<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function auth(Request $request){
        $credenciais = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ], [
            'email.required' => 'Preencha o campo Email',
            'password.required' => 'Preencha o campo Senha'
        ]);

        if(Auth::attempt($credenciais, $request->remember)){
            $request->session()->regenerate();
            return redirect()->intended('/employee');
        } else {
            return redirect()->back()->with('erro', 'Invalid Email or Password');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('employee.index'));
    }
}