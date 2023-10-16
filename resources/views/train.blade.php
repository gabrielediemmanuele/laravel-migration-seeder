@extends('layouts.app')

@section('main-content')
  <section class="container mt-5">
    <div class="row">
        @foreach ($trains as $train)
        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">{{$train->Azienda}}</li>
              <li class="list-group-item">{{$train->}}</li>
              <li class="list-group-item">{{$train->Azienda}}</li>
            </ul>
        </div>
        @endforeach
    </div>
    
  </section>
@endsection