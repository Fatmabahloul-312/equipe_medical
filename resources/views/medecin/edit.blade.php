@extends('medecin.layout') 
@section('content')


      
<div class="container">
    <div class="card">
        <div class="card-body">
          <p class="card-text"> Medecin : {{ $medecins->nom}} {{$medecins->prenom}}</p>
        </div>
      </div>
    
<form action="{{route('medecin.update',$medecins->id)}}" method="POST" enctype="multipart/form-data">
 
    {{ csrf_field() }}
    {{ method_field('PUT') }}

 
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Nom</label>
  <input type="text" class="form-control" name="nom" value="{{$medecins->nom}}" id="formGroupExampleInput" placeholder="">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Prénom</label>
  <input type="text" class="form-control" name="prenom" value="{{$medecins->prenom}}" id="formGroupExampleInput2" placeholder="">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput1" class="form-label">Age</label>
  <input type="text" class="form-control" name="age" value="{{$medecins->age}}" id="formGroupExampleInput1" placeholder="">
</div>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control"name="email" value="{{$medecins->email}}" id="exampleInputEmail1" aria-describedby="emailHelp"> 
  </div>

  <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Spécialité</label>
  <select class="form-select form-select-lg mb-3" name="special" aria-label=".form-select-lg example">
  <option selected value="{{$medecins->special}}">{{$medecins->special}}</option>
  <option value="Médecine générale">Médecine générale</option>
  <option value="Endocrinologie - Diabétologie">Endocrinologie - Diabétologie</option>
  <option value="Cardiologie">Cardiologie</option>
  <option value="Pneumologie">Pneumologie</option>
  <option value="Neurologie">Neurologie</option>

  
</select>
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput3" class="form-label">Nombre d'opérations</label>
    <input type="text" class="form-control" name="operation" value="{{$medecins->operation}}" id="formGroupExampleInput3" placeholder="">
  </div>
  
  <div  class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Disponibilité</label>
  <br>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" name="detail" id="inlineCheckbox1" value="disponible">
    <label class="form-check-label" for="inlineCheckbox1">disponible</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" name="detail" id="inlineCheckbox2" value="non disponible">
    <label class="form-check-label" for="inlineCheckbox2">non disponible</label>
  </div>
  </div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">téléphone</label>
  <input type="text" class="form-control" name="telephone" value="{{$medecins->telephone}}" id="formGroupExampleInput2" placeholder="">
</div>


  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">modifier</button>
  <a class="btn btn-info " target="__blank" style="align: center;" href="{{ route('medecin.index')}}">Retour</a>
</form>
</div>


@endsection