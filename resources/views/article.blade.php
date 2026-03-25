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
           <x-card-article :scoperta="$scoperta">
           </x-card-article>
        @endforeach
        {{-- End Card --}}
    </div>
</div>
    
    
    
</x-layout>