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
                        <a class="nav-link menu_link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu_link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu_link">Teste</a>
                    </li>
                </ul>
                <a href="{{route('desapegax.login')}}" class="btn btn-dark btn-login">ANUNCIAR</a>
{{--                <form class="d-flex">--}}
{{--                    <input class="form-control me-2 " type="text" placeholder="Search" aria-label="Search">--}}
{{--                    <button class="btn btn-outline-primary " type="submit">Search</button>--}}
{{--                </form>--}}
            </div>
        </div>
    </nav>

</header>


