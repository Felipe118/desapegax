@extends('announce.layout.base')

@section('titulo', 'Criar Anuncio') 

@section('content')
    <section class="container-fluid col-12">
        <h1 class="title-announce">Criar Anuncio</h1>
        <div class="form-announce col-8">
            <form action="{{route('anuncio.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-7">
                    <label for="" class="label">Nome:</label>
                    <input type="text" class="form-control" name="name" placeholder="Nome">
                </div>
                <div class="form-group col-7 mt-3">
                    <label for="" class="label">Preço:</label>
                    <input type="text" class="form-control" name="price" placeholder="Preço">
                </div>
                <div class="col-7 mt-3">
                    <label for="" class="label">Imagem</label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>
                <div class="col-7 mt-3 ">
                    <label for="" class="label">Descrição Produto</label>
                    <textarea autocapitalize="none" class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                </div>

                <button class="btn-announce">Anunciar</button>
            </form>
        </div>
    </section>
@endsection
