@extends('category.layout.base')

@section('title', 'Categoria')

@section('content')

<div class="container-fluid col-8 mt-5">
    <h1 class="h1 p-4 text-center"> Categorias</h1>
    <a href="{{route('categoria.create')}}" class="btn btn-outline-success btn-list-category">Adicionar Categoria</a>
<table class="table" >
    <thead class="tabela-list">
        <th style="width: 80%">Nome:</th>
        <th style="width: 20%">Ação:</th>
    </thead>

   <tbody>
   @foreach($categorias as $categoria)
        <tr>
            <td>{{$categoria->name_category}}</td>
            <td class="d-flex">
                <a href="{{route('categoria.show',['categoria' => $categoria ])}}" class="btn btn-primary me-md-3" >Editar</a>
                <form action="{{route('categoria.destroy',['categoria' => $categoria->id ])}}" method="post" >
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
   @endforeach
   </tbody>
</table>
</div>
@endsection