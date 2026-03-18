<x-layout>
    
    {{-- header --}}
    
    <div class="container-fluid vh-100 bg-background p-5">
    <div class="row justify-content-center align-items-stretch">
        <div class="col-12 mb-4">
            <h1 class="text-center py-5 title text-custom">
                Articoli
            </h1>
        </div>

        {{-- Card --}}
        @foreach ($scoperte as $scoperta)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex mb-4">
                <div class="card h-100 mx-auto d-flex flex-column shadow-sm card-hover">
                    <!-- Immagine -->
                    <a href="{{ route('showArticolo', $scoperta['id']) }}">
                        <img src="{{$scoperta['img']}}" class="card-img-top" style="height:350px; object-fit:cover;" alt="immagine {{$scoperta['nome']}}">
                    </a>

                    <!-- Corpo della card -->
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{$scoperta['nome']}}</h5>
                        <h6>Mitologia: {{$scoperta['luogo']}}</h6>
                        <p class="card-text mt-auto">{{$scoperta['descrizione']}}</p>
                    </div>
                </div>
            </div>
        @endforeach
        {{-- End Card --}}
    </div>
</div>
    
    
    
</x-layout>