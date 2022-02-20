@extends('register.layout.base_register')
@section('titulo','Register')

@section('content')
    <div class="form col-10 register_form">
        <h1 class="title-login text-danger">REGISTER</h1>
        <form action="{{route('desapegax.registerPost')}}" method="POST">
            @csrf
            <div class="container_register">
                <div class="col-md-5">
                    <label for="" class="form-label label">Nome:</label>
                    <input type="text" name="name" class="form-control"  placeholder="Nome" required>
                </div>
                <div class="col-md-5">
                    <label for="" class="form-label label">E-mail</label>
                    <input type="text" name="email" class="form-control" placeholder="E-mail" required>
                </div>
                <div class="col-md-5">
                    <label for="" class="form-label label">Senha</label>
                    <input type="password" name="password" class="form-control" placeholder="Senha"  required>
                </div>
                <h4 class="title_register">Endereço</h4>
                <div class="d-flex mt-3  form_endereco">
                    <div class="col-md-3">
                        <label for="" class="form-label">CEP</label>
                        <input type="text" name="cep" class="form-control" id="cep" placeholder="CEP" onblur="getDadosEnderecoPorCEP(this.value)" required>
                    </div>
                    <div class="col-md-6 ml">
                        <label for="" class="form-label">Endereço **</label>
                        <input type="text" name="logradouro" class="form-control" placeholder="Endereco" id="endereco" required>
                    </div>
                </div>


                <div class="d-flex  mt-3 ">
                    <div class="col-md-3">
                        <label for="" class="form-label">Bairro *</label>
                        <input type="text" name="bairro" class="form-control" id="bairro" required>
                    </div>
                    <div class="col-md-3 ml">
                        <label for="" class="form-label">Cidade</label>
                        <input type="text" name="cidade" class="form-control" id="cidade" required>
                    </div>
                    <div class="col-md-1 ml">
                        <label for="" class="form-label">Número *</label>
                        <input type="text" name="numero" class="form-control"  required>
                    </div>
                    <div class="col-1 ml">
                        <label for="" class="form-label">UF</label>
                        <input type="text" name="estado" class="form-control" id="uf">
                    </div>
                </div>
                <div class="col-6 register_btn">
                    <button class="btn btn-success col-3" type="submit">Registrar</button>
                </div>
            </div>


        </form>
    </div>
@endsection
