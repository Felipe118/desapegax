@extends('home.layout.base')

@section('titulo','Home')

@section('content')
@if (session()->has('message_profile_success'))
        <div class="text-success alert alert-success mb-3 d-flex justify-content-center mt-3">
            {{session('message_profile_success')}}
        </div>
@endif
<h1>Home Logado</h1>
@endsection