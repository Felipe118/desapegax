@extends('category.layout.base')

@section('title', 'Categoria')

@section('content')
  
<div class="col-5 container-form-category ">
   
    <h1 class="title-category">Categoria</h1>
    @if(session()->has('message_category'))
        <div class="text-success alert alert-success mb-5 d-flex justify-content-center mt-3">
            {{session('message_category')}}
        </div>
    @endif
    
    <form action="{{route('categoria.update',['categoria' => $categoria])}}" method="POST">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="label">Categoria</label>
            <input type="text" value="{{$categoria->name_category}}" class="form-control" name="name_category" placeholder="Categoria">
        </div>

        <div class="text-danger mt-2"> {{$errors->has('name_category') ? $errors->first('name_category') : ''}}</div>

        <button class="btn mt-5 btn-success">Editar</button>
    </form>
</div>
@endsection