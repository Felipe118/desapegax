@extends('register.layout.base_register')
@section('titulo','Register')

@section('content')
    <div class="form col-5 register_form">
        <h1 class="title-login text-danger">REGISTRE-SE</h1>
        <form action="{{route('desapegax.registerPost')}}" method="POST">
            @csrf
            <div class="container_register col-8 ">
                <div class="col-12">
                    <label for="" class="form-label label">Nome</label>
                    <input type="text" name="name" class="form-control"  placeholder="Nome" >
                </div>
                <div class="text-danger mt-2"> {{$errors->has('name') ? $errors->first('name') : ''}}</div>
                <div class="col-12">
                    <label for="" class="form-label label">E-mail</label>
                    <input type="text" name="email" class="form-control" placeholder="E-mail" >
                </div>
                <div class="text-danger mt-2"> {{$errors->has('email') ? $errors->first('email') : ''}}</div>
                <div class="col-12">
                    <label for="" class="form-label label">Senha</label>
                    <input type="password" name="password" class="form-control" placeholder="Senha"  >
                </div>
                <div class="text-danger mt-2"> {{$errors->has('password') ? $errors->first('password') : ''}}</div>
                <div class="col-12 register_btn">
                    <button class="btn-register col-12" type="submit">Registrar</button>
                </div>
                <!--<h4 class="title_register">Endereço</h4>
                <div class="d-flex mt-3  form_endereco">
                    <div class="col-md-3">
                        <label for="" class="form-label">CEP</label>
                        <input type="text" name="cep" class="form-control" id="cep" placeholder="CEP" onblur="getDadosEnderecoPorCEP(this.value)" >
                    </div><br/>

                    <div class="col-md-6 ml">
                        <label for="" class="form-label">Endereço **</label>
                        <input type="text" name="address" class="form-control" placeholder="Endereco" id="endereco" >
                    </div><br/>

                </div>


                   <div class="col-md-3">
                        <label for="" class="form-label">Bairro *</label>
                        <input type="text" name="district" class="form-control" id="bairro" >
                    </div><br/>

                    <div class="col-md-3 ml">
                        <label for="" class="form-label">Cidade</label>
                        <input type="text" name="city" class="form-control" id="cidade" >
                    </div><br/>

                    <div class="col-md-1 ml">
                        <label for="" class="form-label">Número *</label>
                        <input type="text" name="number" class="form-control"  >
                    </div><br/>

                    <div class="col-1 ml">
                        <label for="" class="form-label">UF</label>
                        <input type="text" name="uf" class="form-control" id="uf">
                    </div>
                </div>-->
               
            </div>


        </form>
    </div>
@endsection
