<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" href="{{asset('css/announce.css')}}">
    <link rel="stylesheet" href="{{asset('css/category.css')}}">
    <link rel="stylesheet" href="{{asset('css/profile.css')}}">
    <link rel = "shortcut icon" type = "imagem/x-icon" href = "{{asset('img/logo.svg')}}"/>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="{{asset('js/vue.js')}}"></script>

    <script src="{{asset('js/cep.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-the-mask/0.11.1/vue-the-mask.min.js"></script>
    <title>Desapegax - @yield('title')</title>
</head>
<body class="body">
@include('profile.layout.header')
<section class="container-fluid container-base">
    @yield('content')
</section>
{{--    @include('layout.footer')--}}

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="{{asset('js/profile.js')}}"></script>
</body>
</html>