@extends('medecin.layout')
@section('content')
@if (isset($medecins))
      <div class="row" style="padding-top: 2%; padding-bottom:3%">

        <div class="container">
            <div class="col">
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col"> #</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Age</th>
             
      <th scope="col">Spécialité</th>
      <th scope="col" style="width:250px" >Nombre d'opération</th>
      <th scope="col" >Disponibilité</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($medecins as $item)
                        <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>{{$item->nom}}</td>
                            <td>{{$item->prenom}}</td>
                            <td>{{$item->age}}</td>    
                            <td>{{$item->special}}</td>
                            <td>{{$item->operation}}</td>                          
                            <td>{{$item->detail}}</td>

                          </tr>
                        @endforeach

                    </tbody>
                  </table>
                  @endif
 @endsection