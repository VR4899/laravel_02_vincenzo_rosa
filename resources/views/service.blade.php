<x-layout>
    {{-- Navbar --}}
    
    
    
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
    
    
</x-layout>
