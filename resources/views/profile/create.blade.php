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
                        <input type="text" class="form-control" name="">
                    </div>

                    <div class="form-group mb-2 p-2 col-10">
                        <label for="">E-mail</label>
                        <input type="text" class="form-control" name="" >
                    </div>

                    <div class="form-group mb-2 p-2 col-10">
                        <label for="">Senha atual</label>
                        <input type="password" name="password_atual" class="form-control" name="" >
                    </div>

                    <div class="form-group mb-2 p-2 col-10">
                        <label for="">Nova senha</label>
                        <input type="password" class="form-control" name="password" >
                    </div>
                </div>
                <div class="card col-6 card-address">
                    <div class="address_separator col-12 ">
                        <div class="form-group mb-2 p-2 col-4">
                            <label for="">Cep</label>
                            <input type="text" class="form-control" name="cep"  id="cep" onblur="getDadosEnderecoPorCEP(this.value)">
                        </div>
                        <div class="form-group mb-2 p-2 col-7">
                            <label for="">Endereço</label>
                            <input type="text" class="form-control" name="endereco" id="endereco">
                        </div>
                    </div>
                     <div class="form-group mb-2 p-2 col-10 district-class">
                        <label for="">Bairro</label>
                        <input type="text" class="form-control" name="" id="bairro">
                     </div>
                    
                     <div class="address_separator col-12 ">
                        <div class="form-group mb-2 p-2 col-3">
                            <label for="">Número</label>
                            <input type="text" class="form-control" name="">
                         </div>
                         <div class="form-group mb-2 p-2 col-8">
                            <label for="">Complemento</label>
                            <input type="text" class="form-control" name="" >
                         </div>
                     </div>
                     <div class="address_separator col-12 ">
                        <div class="form-group mb-2 p-2 col-3">
                            <label for="">UF</label>
                            <input type="text" class="form-control" name="" id="uf">
                         </div>
                         <div class="form-group mb-2 p-2 col-8">
                            <label for="">Cidade</label>
                            <input type="text" class="form-control" name="city" id="cidade">
                         </div>
                     </div>
                     <button class="btn-profile col-4">Atualizar</button>

                </div>
                


            </form>
        
    

    </section>
@endsection