@extends('profile.layout.base')
@section('title' , 'Perfil')

@section('content')
    <section class="container-fluid container-cards">
        <h1 class="title-profile">Meu cadastro</h1>
      
            <form action="" class="form-profile">
                <div class="card col-6">
                    <h3>Dados da Conta</h3>
                    @csrf

                    <div class="form-group mb-2 p-2 col-10">
                        <label for="">Nome completo</label>
                        <input type="text" class="form-control" name="" id="">
                    </div>

                    <div class="form-group mb-2 p-2 col-10">
                        <label for="">E-mail</label>
                        <input type="text" class="form-control" name="" id="">
                    </div>

                    <div class="form-group mb-2 p-2 col-10">
                        <label for="">Senha atual</label>
                        <input type="password" name="password_atual" class="form-control" name="" id="">
                    </div>

                    <div class="form-group mb-2 p-2 col-10">
                        <label for="">Nova senha</label>
                        <input type="password" class="form-control" name="password" id="">
                    </div>
                </div>
            </form>
        
    

    </section>
@endsection