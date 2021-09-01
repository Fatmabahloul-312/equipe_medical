@extends('psychologue.layout') 
@section('content')

     
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Gestion des  <b>Psychologues</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="{{ route('psychologue.create')}}" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter Un Nouveau Psychologue</span></a>
											
					</div>
				</div>
			</div>





<br><br><br>
  
 <div > 
<table class="table table-striped table-hover" border="1">
  <thead >
    <tr>
      <th scope="col"> #</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
   
      <th scope="col"  >E_Mail</th>
      
      
      <th scope="col">Genre</th>
      <th scope="col">Téléphone</th>
      <th scope="col" >Disponibilité</th>
      <th  style="width:250px " >Actions</th>
 
    </tr>
  </thead>
  <tbody>
    @php
    $id=0;
    @endphp
    
  @foreach ($psychologues as $item)
  <tr>
    <th scope="row">{{++ $id}}</th>
    <td>{{$item->nom}}</td>
    <td>{{$item->prenom}}</td>
    <td>{{$item->email}}</td>
    <td>{{$item->genre}}</td>
    <td>{{$item->telephone}}</td>
    <td>{{$item->detail}}</td>


    <td>

      <a href="{{ route('psychologue.show',['id'=>$item->id])}}" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
      <a href="{{ route('psychologue.edit',['id'=>$item->id])}}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
      <a   class="delete" href="{{ route('psychologue.delete',['id'=>$item->id])}}"  data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>

    </td>
  </tr>
  @endforeach


</tbody>
  
</table>
</div>


{!! $psychologues->links() !!}
@endsection