<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$articolo['nome']}}</title>
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aboreto&family=Cinzel:wght@400..900&display=swap" rel="stylesheet">
    {{-- CSS  mio--}}
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
    
    <header>
        <div class="container-fluid  vh-100 bg-background p-5">
            <div class="row justify-content-center align-items-center ">
                <div class="col-3">
                    <h1 class="text-center py-10 title text-custom title-custom">
                        {{$articolo['nome']}}
                    </h1>
                </div>
                
                
                {{-- Card --}}
                
                <div class="col-12 col-md-3 py-5 d-flex">
                    <div class="card h-100 mx-auto d-flex flex-column border-card-custom">
                        <a href="..."> <img src="{{$articolo['img']}}" class="card-img-top" style="height:350px; object-fit:cover;" alt="immagine {{$articolo['img']}}"></a>
                        <div class="card-body d-flex flex-column">
                            <p class="card-text mt-auto">{{$articolo['descrizione']}}</p>
                        </div>
                    </div>
                </div>
                {{-- End Card --}}
                
            </div>
        </div>
    </header>  
    {{-- End Header --}}

    {{-- Section 1 --}}
    <section class="container-fluid  vh-50 bg-background p-5">
        <div class="row justify-content-center align-items-center   ">
            <div class="col-12 col-md- section-custom">
                <p>{{$articolo['articolo']}}</p>
            </div> 
        </div>
    </section>
    {{--End Section 1 --}}
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="/index.js"></script>
</body>
</html>
