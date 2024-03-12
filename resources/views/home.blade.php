@extends('layouts.app')
@section('title' , 'Home-Page')
@section('main-content')
<table class="table-striped text-center">
    <thead>
        <tr>
            <th scope="col">Azienda</th>
            <th scope="col">Stazione di partenza</th>
            <th scope="col">Stazione di arrivo</th>
            <th scope="col">Orario di partenza</th>
            <th scope="col">Orario di arrivo</th>
            <th scope="col">Codice treno</th>
            <th scope="col">Numero Carrozze</th>
            <th scope="col">In Orario</th>
            <th scope="col">Cancellato</th>
        </tr>
    </thead>
    @foreach ($trains as $train )
    <tbody>
      <tr>
          <th scope="row">{{$train->agency}}</th>
          <td>{{$train->departure_station}}</td>
          <td>{{$train->arrival_station}}</td>
          <td>{{$train->departure_time}}</td>
          <td>{{$train->arrival_time}}</td>
          <td>{{$train->train_code}}</td>
          <td>{{$train->number_of_carriages}}</td>
          <td>{{$train->on_time}}</td>
          <td>{{$train->deleted}}</td>
          
         
        </tr>
    </tbody>
    @endforeach
  </table>
    
@endsection



