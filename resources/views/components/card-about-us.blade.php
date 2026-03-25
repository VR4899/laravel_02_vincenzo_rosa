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