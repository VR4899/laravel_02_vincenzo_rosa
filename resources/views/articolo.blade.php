<x-layout>
    
    {{-- Navbar --}}
    
    
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
    
    
</x-layout>
