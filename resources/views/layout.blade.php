<!doctype html>
<html lang="">

<head>
    <meta charset="utf-8">
    <title></title>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
</head>

<body style="background-color:#f8f9fa">
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('associados.index')}}">Associados</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('contas.importForm')}}">Importação</a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link" href="{{route('agencias.associadoPorAgencia')}}">Associados/Agencias</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <br>
    @yield('content')
</body>

</html>
