<header class="">
    <nav class="navbar navbar-expand-sm navbar-dark bg-danger" aria-label="Third navbar example">
        <div class="container-fluid">
            {{--            <a class="navbar-brand" href="#">Expand at sm</a>--}}
            <img src="{{asset('img/logo.svg')}}" class="logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample03">
                <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                    <li class="nav-item">
                        <a class="nav-link active menu_link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu_link" href="{{route('anuncio.create')}}">Anuncios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu_link">Editar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu_link" href="{{route('categoria.list')}}">Categorias</a>
                    </li>
                </ul>
                <a href="{{route('app.logout')}}" class="btn btn-dark btn-logout">Sair</a>
            </div>
        </div>
    </nav>

</header>
