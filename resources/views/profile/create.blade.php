@extends('profile.layout.base')
@section('title' , 'Perfil')

@section('content')
    <section class="container-fluid container-cards">
        @if (session()->has('message_auth_erro'))
            <div class="text-danger alert alert-danger mb-3 d-flex justify-content-center mt-3">
                {{session('message_auth_erro')}}
            </div>
        @endif
        @if ($errors->has('cep'))
            <div class="text-danger alert alert-danger mb-3 d-flex justify-content-center mt-3">
                {{$errors->first('cep')}}
            </div>
        @endif
        
        <h1 class="title-profile">Meu cadastro</h1>
      
            <form action="{{route('profile.atualizar')}}" class="form-profile" method="POST">
                @csrf
                <div class="card col-6">
                    <h3>Dados da Conta</h3> 
                   

                    <div class="form-group mb-2 p-2 col-10">
                        <label for="">Nome completo</label>
                        <input type="text" class="form-control" name="name" value="{{$user->name != '' ? $user->name : ''}}">
                    </div>

                    <div class="form-group mb-2 p-2 col-10">
                        <label for="">Telefone</label>
                        <input type="text" class="form-control"  v-mask="'(##)#####-####'" name="phone" value="{{$user->phone != '' ? $user->phone : '' }}">
                    </div> 

                    {{-- <div class="form-group mb-2 p-2 col-10">
                        <label for="">E-mail</label>
                        <input type="text" class="form-control" name="email" value="{{$user->email != '' ? $user->email : ''}}">
                    </div> --}}
                    
                    <div class="form-check col-11 mb-4">
                        <input type="checkbox" name=""  v-on:click=" show_password = !show_password " id="show_password">
                        <label for="">Mudar Senha</label>
                    </div>
                    <div class="form-group mb-2 p-2 col-10" v-if="show_password">
                        <label for="">Senha atual</label>
                        <input type="password" name="password" class="form-control"  >
                    </div>

                    <div class="form-group mb-2 p-2 col-10" v-if="show_password" >
                        <label for="">Nova senha</label>
                        <input type="password" class="form-control" name="new_password" >
                    </div>
                </div>
                <div class="card col-6 card-address">
                    <div class="address_separator col-12 ">
                        <div class="form-group mb-2 p-2 col-4">
                            <label for="">Cep</label>
                            <input type="text" class="form-control" name="cep" v-mask="'#####-###'"  id="cep" onblur="getDadosEnderecoPorCEP(this.value)">
                        </div><br>
                        
                        <div class="form-group mb-2 p-2 col-7">
                            <label for="">Endere??o</label>
                            <input type="text" class="form-control" name="address" id="endereco">
                        </div>
                    </div>
                     <div class="form-group mb-2 p-2 col-10 district-class">
                        <label for="">Bairro</label>
                        <input type="text" class="form-control" name="district" id="bairro">
                     </div>
                    
                     <div class="address_separator col-12 ">
                        <div class="form-group mb-2 p-2 col-3">
                            <label for="">N??mero</label>
                            <input type="text" class="form-control" name="number">
                         </div>
                         <div class="form-group mb-2 p-2 col-8">
                            <label for="">Complemento</label>
                            <input type="text" class="form-control" name="complement" >
                         </div>
                     </div>
                     <div class="address_separator col-12 ">
                        <div class="form-group mb-2 p-2 col-3">
                            <label for="">UF</label> 
                            <select name="uf" id="uf" class="form-select">
                                <option value=""></option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amap??</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Cear??</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Esp??rito Santo</option>
                                <option value="GO">Goi??s</option>
                                <option value="MA">Maranh??o</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Par??</option>
                                <option value="PB">Para??ba</option>
                                <option value="PR">Paran??</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piau??</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rond??nia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">S??o Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select>
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