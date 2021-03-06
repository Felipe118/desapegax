@extends('announce.layout.base')

@section('titulo', 'Criar Anuncio') 

@section('content')
    <section class="container-fluid col-12 container-announce">
        <h1 class="title-announce">Criar Anuncio</h1>
        <div class="form-announce col-6">
            <form action="{{route('anuncio.store')}}" method="POST">
                @csrf
                <div class="form-group col-10">
                    <label for="" class="label">Nome:</label>
                    <input type="text" class="form-control" name="name" placeholder="Nome">
                </div>
                <div class="form-group col-10 mt-3">
                    <label for="" class="label">Preço:</label>
                    <input type="text" class="form-control" name="price" placeholder="Preço">
                </div>
                <div class="form-group d-flex col-6 mt-3">
                    <label for="" class="label">Categoria:</label>
                    <select name="categoria_id" class="form-select" id="">
                        @foreach ($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{$categoria->name_category}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-10 mt-3">
                    <label for="" class="label">Imagem</label>
                    <input type="file" class="form-control" name="image[]" id="image" multiple>
                </div>
                <div class="col-10 mt-3 ">
                    <label for="" class="label">Descrição Produto</label>
                    <textarea autocapitalize="none" class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                </div>

                <button class="btn-announce col-6">Anunciar</button>
            </form>
        </div>
    </section>
@endsection
