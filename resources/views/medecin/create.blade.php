@extends('medecin.layout') 
@section('content')
     
<div class="container">
    
<form action="{{route('medecin.store')}}" method="POST" enctype="multipart/form-data">
 
    {{ csrf_field() }}
 
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Nom</label>
  <input type="text" class="form-control" name="nom" id="formGroupExampleInput" placeholder="">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Prénom</label>
  <input type="text" class="form-control" name="prenom" id="formGroupExampleInput2" placeholder="">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput1" class="form-label">Age</label>
  <input type="text" class="form-control" name="age" id="formGroupExampleInput1" placeholder="">
</div>



  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control"name="email" id="exampleInputEmail1" aria-describedby="emailHelp"> 
  </div>

  <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Spécialité</label>
  <select class="form-select form-select-lg mb-3" name="special" aria-label=".form-select-lg example">
  <option selected value=""></option>
  <option value="Médecine générale">Médecine générale</option>
  <option value="Endocrinologie - Diabétologie">Endocrinologie - Diabétologie</option>
  <option value="Cardiologie">Cardiologie</option>
  <option value="Pneumologie">Pneumologie</option>
  <option value="Neurologie">Neurologie</option>

  
</select>
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput3" class="form-label">Nombre d'opérations</label>
    <input type="text" class="form-control" name="operation" id="formGroupExampleInput3" placeholder="">
  </div>
  
  <br>
  <div  class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Disponibilité</label>
  <br>
  &nbsp; &nbsp; &nbsp; &nbsp; <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" name="detail" id="inlineCheckbox1" value="disponible">
    <label class="form-check-label" for="inlineCheckbox1">disponible</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" name="detail" id="inlineCheckbox2" value=" non disponible">
    <label class="form-check-label" for="inlineCheckbox2">non disponible</label>
  </div>
  </div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">téléphone</label>
  <input type="text" class="form-control" name="telephone" id="formGroupExampleInput2" placeholder="">
</div>


  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <div class="col-sm-12">
  <button type="submit" class="btn btn-primary">enregistrer</button> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
  <a class="btn btn-info " target="__blank" href="{{ route('medecin.index')}}">Retour</a>
  </div>
</form>
</div>


@endsection