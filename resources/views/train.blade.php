@extends('layouts.app')

@section('main-content')
  <section class="container mt-5 mb-5">
    <h1 class="mb-2">{{$title}}</h1>
    <div class="row g-2">
        @foreach ($trains as $train)
        <div class="card mx-2 my-2 mt-2" style="width: 18rem;">
            <div class="card-header">
                Treno 🚂
              </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><strong>Azienda: </strong>{{$train->azienda}}</li>
              <li class="list-group-item"><strong>Staz. di partenza: </strong>{{$train->stazione_di_partenza}}</li>
              <li class="list-group-item"><strong>Staz. di arrivo: </strong>{{$train->stazione_di_arrivo}}</li>
              <li class="list-group-item"><strong>Partenza 🕖: </strong>{{$train->orario_di_partenza}}</li>
              <li class="list-group-item"><strong>Arrivo 🕖: </strong>{{$train->orario_di_arrivo}}</li>
              <li class="list-group-item"><strong>Codice treno: </strong>{{$train->codice_treno}}</li>
              <li class="list-group-item"><strong>Numero Carrozze: </strong>{{$train->numero_carrozze}}</li>
              <li class="list-group-item"><strong>In orario: </strong>{{$train->in_orario}}</li>
              <li class="list-group-item"><strong>Cancellato: </strong>{{$train->cancellato}}</li>
              <li class="list-group-item"><strong>Prezzo biglietto: </strong>{{$train->prezzo_biglietto}}</li>
              <li class="list-group-item"><strong>Codice biglietto: </strong>{{$train->codice_biglietto}}</li>
            </ul>
        </div>
        @endforeach
    </div>
    
  </section>
@endsection