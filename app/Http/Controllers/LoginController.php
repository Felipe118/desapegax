<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');

    }

    public function auth(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];

        $feedback = [
            'email.email' => 'O campo email (email) é obrigatório',
            'password.required' => 'O campo senha é obrigatório'
        ];

        $request->validate($rules, $feedback );

        $email = $request->get('email');
        $user = new User;
        $user_auth = $user->where('email',$email)->get()->first();
        $password = $request->get('password');
        $password_user = $user_auth->password;
        $password_check = Hash::check($password, $password_user);


        if($password_check){
            $_SESSION['nome'] = $user_auth->name;
            $_SESSION['email'] = $user_auth->email;

            //session()->flash('message_auth', 'Registrado com sucesso!');
            dd('Logado');

        }else{
            session()->flash('message_auth_erro', 'E-mail ou senha inválidos');
            //return redirect()->route('desapegax.login');
            dd('Errado');
        }
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

          $password_hash = Hash::make($request->password);

       $user=   User::create([
              'name' => $request->name,
              'email' => $request->email,
              'password' => $password_hash,
              'cep' => $request->cep,
              'logradouro' => $request->logradouro,
              'bairro' =>$request->bairro ,
              'numero' => $request->numero,
              'cidade' => $request->cidade,
              'estado' => $request->estado

          ]);

       if($user){
           session()->flash('message', 'Registrado com sucesso!');
           return redirect('/login');
       }else{
           session()->flash('message_erro', 'ERRO');
           return redirect('/login');
       }


    }
}
