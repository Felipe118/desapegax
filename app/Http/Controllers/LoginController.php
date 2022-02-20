<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');

    }

    public function register()
    {
        return view('register.register');
    }

    public function registerPost(Request $request)
    {
       // dd($request->all());
        $rules = [
            'name' => 'required',
            'email' => 'required|email:rfc',
            'password' => 'required',
            'cep' => 'required',
            'logradouro' => 'required',
            'bairro' => 'required',
            'numero' => 'required',
            'cidade' => 'required',
        ];
        $feedback = [
            'required' => 'O campo :attribute é obrigatório',
            'name.email' => 'E-mail Inválido'
        ];
        $request->validate($rules,$feedback);
          session()->flash('message', 'Registrado com sucesso!');
          User::create($request->all());

        return redirect('/login');
    }
}
