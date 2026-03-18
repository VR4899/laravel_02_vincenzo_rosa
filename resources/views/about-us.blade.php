<x-layout>
    {{-- Navbar --}}
    
   
    {{-- End Navbar --}}
    
    {{-- header --}}
    <div class="container-fluid  vh-100 bg-background p-5">
        <div class="row justify-content-center align-items-center ">
            <div class="col-12 ">
                <h1 class="text-center py-5 title text-custom ">
                    Chi siamo
                </h1>
            </div>
            

            {{-- Card --}}

            @foreach ($mostri as $mostro)
<div class="col-12 col-md-3 py-5">
    <div class="card mx-auto d-flex align-items-stretch">
        <a href="{{ route('mostro', $mostro['id']) }}">
            <img src="{{ $mostro['img'] }}" class="card-img-top card-custom" style="height:350px; object-fit:cover;" alt="immagine {{ $mostro['nome'] }}">
        </a>            
        <div class="card-body">
            <h5 class="card-title">{{ $mostro['nome'] }}</h5>
            <h6>Mitologia: {{ $mostro['mitologia'] }}</h6>
            <p class="card-text">{{ $mostro['descrizione'] }}</p>
        </div>
    </div>
</div>
@endforeach

            {{-- End Card --}}


        </div>
    </div>
    
    {{-- End Header --}}
    
    
</x-layout>
    
    
    
    

   