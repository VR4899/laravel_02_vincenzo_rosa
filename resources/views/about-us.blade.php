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
            <x-card-about-us :mostro="$mostro">
            </x-card-about-us>
            @endforeach

            {{-- End Card --}}


        </div>
    </div>
    
    {{-- End Header --}}
    
    
</x-layout>
    
    
    
    

   