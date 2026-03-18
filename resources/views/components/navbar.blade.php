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