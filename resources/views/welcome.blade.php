@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')


<div id="search-container" class="col-md-12">
   <h1>Busque um evento</h1>
   <form > 
      <input type="text" action="text" id="search" name="search" class="form-control" placeholder="Procurar...">
   </form>
</div>
<div id="divevents-container" class="col-md-12">
   <h2>Próximos eventos</h2>
   <p>Veja os eventos dos próximos dias</p>
   <div id="cards-continer" class="row">
      @foreach($events as $event)
      <div class="card col-md-3">
         <img src="img/event_placeholder.jpg" alt="{{$event->title}}">
         <div class="card-body">
            <p class="card-date">10/06/2022</p>
            <h5 class="card-title">{{$event->title}}</h5>
            <p class="card-participants">X participantes</p>
            <a href="#" class="btn btn-primary">Saber mais</a>
         </div>
      </div>
      @endforeach
   </div>
</div>

@endsection