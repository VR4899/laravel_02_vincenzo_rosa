<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
      
    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aboreto&family=Cinzel:wght@400..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/style.css">
</head>
<body>
    
    {{-- Navbar --}}
    
    <nav class="navbar navbar-expand-lg bg-background-nav fixed-top ">
        <div class="container-fluid text-custom">
            <a class="navbar-brand text-white" href="#">Mitologia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link text-white active" aria-current="page" href="{{ route('homepage') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('about.us') }}">Chi siamo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('service') }}">Servizi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('article') }}">Articoli</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    {{-- header --}}

    <div class="row justify-content-center align-items-center ">
            <div class="col-12 ">
                <h1 class="text-center py-5 title text-custom ">
                    Servizi
                </h1>
            </div>
   
    <div class="row">
        @foreach ($servizi as $servizio)
        <div class="col-md-4 mb-4">
            <div class="card h-100 text-center p-3">
                <i class="{{ $servizio['icona'] }} fa-2x mb-2"></i>
                <h5 class="card-title">{{ $servizio['nome'] }}</h5>
                <p class="card-text">{{ $servizio['descrizione'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
     </div>
    
    
    {{-- Script Bootsrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    
    {{-- Script Font Awesome --}}
    <script src="https://kit.fontawesome.com/8b551c4045.js" crossorigin="anonymous"></script>

    {{-- Script  --}}
    <script src="/index.js"></script>
</body>
</html>
