<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // session_start();
        $profile =  DB::table('users')->select('*')->where('id',$_SESSION['id'])->get();
        $user = $profile[0];
        return view('profile.create', ['user' => $user,'profile' => $profile]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        dd($request->all());
    }
    public function atualizar(Request $request,User $user )
    {
        $rules = [
            'cep' => 'required',
            'address' => 'required',
            'number' => 'required'
        ];
         $feedback = [
             'required' => 'O campo :attribute é obrigatório'
         ];
         $request->validate($rules,$feedback);

        $email = $request->get('email');
        //$users = new User;
        $user_auth = DB::table('users')->where('email',$email)->get()->first() ;
        $password = $request->get('password');
        if(is_object($user_auth)){
            $password_user = $user_auth->password;
            $password_check = Hash::check($password, $password_user);
        }else{
            session()->flash('message_auth_erro', 'Senha Incorreta');
            return redirect()->route('profile.create');
        }


       // dd($request->all());
        DB::table('users')->where('id',$_SESSION['id'])->update(
            [
                'name'=> $request->name,
                'phone' => $request->phone,
                'password' => $request->password,
            ]
        );
        DB::table('address')->updateOrInsert(
            [
                'cep' => $request->cep,
                'address' => $request->address,
                'district' => $request->district,
                'number' => $request->number,
                'city' => $request->city,
                'uf' => $request->uf,
                'complement' => $request->complement != null ? $request->complement : '',
                'user_id' => $_SESSION['id']
                
            ]
    );

            session()->flash('message_profile_success', 'Perfil Atualizado');
            return redirect()->route('app.home');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
