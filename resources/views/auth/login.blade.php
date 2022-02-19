@extends('auth.layout.base_login')
@section('titulo','Login')

@section('content')
    <div class="form col-5">
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

            <p>Não tem conta ? <a href="">Clique Aqui</a></p>

        </form>
    </div>
@endsection
