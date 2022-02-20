@extends('auth.layout.base_login')
@section('titulo','Login')

@section('content')
    @if(session()->has('message'))
        <div class="text-success alert alert-success d-flex justify-content-center mt-3">
            {{session('message')}}
        </div>

    @endif
    <div class="form form_login col-5">
        <h1 class="title-login text-danger">LOGIN</h1>
        <form action="" method="">
            <div class="form-group ">
                <label for="" class="form-label label">E-mail</label>
                <input type="" class="form-control input mb-4" name=""  placeholder="E-mail" required>
            </div>



            <div class="form-group ">
                <label for="" class="form-label label">Senha</label>
                <input type="password" class="form-control input "  name=""  placeholder="Senha" required>
            </div>

            <button type="submit" class="btn btn btn-outline-success button-login col-12">Entrar</button>

            <p>Não tem conta ? <a href="{{route('desapegax.register')}}" class="link-register">Clique Aqui</a></p>

        </form>
    </div>
@endsection
