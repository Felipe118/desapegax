<?php

namespace App\Http\Controllers;

use App\Models\Address;
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
        $user_auth = $user->where('email',$email)->get()->first() ;
        $password = $request->get('password');
        $password_user = $user_auth->password;
        $password_check = Hash::check($password, $password_user);
    
            
        if($password_check){
            session_start();
            $_SESSION['id'] = $user_auth->id;
            $_SESSION['name'] = $user_auth->name;
            $_SESSION['email'] = $user_auth->email;

            return redirect()->route('app.home');

        }else{
            session()->flash('message_auth_erro', 'E-mail ou senha inválidos');
            return redirect()->route('desapegax.login');
            //dd('Errado');
        }
    }

    public function logout()
    {
        session_destroy();
        return redirect('/');
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
        ];
        $feedback = [
            'required' => 'O campo é obrigatório',
            'email.email' => 'E-mail Inválido'
        ];
        $request->validate($rules,$feedback);

        $password_hash = Hash::make($request->password);

        $user =   User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $password_hash,
                'permission' => 'user'
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
