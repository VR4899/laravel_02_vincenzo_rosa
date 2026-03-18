<x-layout>
    
    {{-- Navbar --}}
    
    
    
    {{-- End Navbar --}}
    {{-- header --}}
    
    <header>
        <div class="container-fluid  vh-100 bg-background p-5">
            <div class="row justify-content-center align-items-center ">
                <div class="col-3">
                    <h1 class="text-center py-10 title text-custom title-custom">
                        {{$mostro['nome']}}
                    </h1>
                </div>
                
                
                {{-- Card --}}
                
                <div class="col-12 col-md-3 py-5">
                    <div class="card  mx-auto d-flex align-items-stretch border-card-custom" >
                        <img src="{{$mostro['img']}}" class="card-img-top" style="height:350px; object-fit:cover;" alt="immagine {{$mostro['img']}}" >
                        
                        
                        
                        <div class="card-body">
                            <h6> Mitologia: {{$mostro['mitologia']}}</h6>
                            <p class="card-text">{{$mostro['descrizione']}}</p>
                            
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
            <div class="col-12 col-md-6 section-custom">
                <p class="">{{$mostro['dettagli']}}</p>
            </div> 
        </div>
    </section>
    {{-- End Section 1 --}}
    
    
    
    
</x-layout>
