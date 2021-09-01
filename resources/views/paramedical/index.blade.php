@extends('psychologue.layout') 
@section('content')


<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Fonts -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
 <link rel="stylesheet" media="screen" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,700">
 
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"> 
    <style>
      body{
background:url('images/back.jpg');
}
#container{
width:400px;
margin:0 auto;
margin-top:10%;
}
/* Bordered form */
form {
width:100%;
padding: 30px;
border: 1px solid #f1f1f1;
background: #fff;
box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
#container h1{
width: 38%;
margin: 0 auto;
padding-bottom: 10px;
}

/* Full-width inputs */
input[type=text], input[type=password] {
width: 100%;
padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid #ccc;
box-sizing: border-box;
}


  .droite {
float: right;

}
.gauche{


float: left;

} 


  </style>
</head>
<body >
  <!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="sidebar-left.html">Left Sidebar</a></li>
							<li class="active"><a href="sidebar-right.html">Right Sidebar</a></li>
						</ul>
					</li>
					<li><a href="contact.html">Contact</a></li>
					<li><a class="btn" href="signin.html">SIGN IN / SIGN UP</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->
<section>
<ul class="nav nav-tabs" >
    <li style="width: 18rem;
                         margin-top:5%;
                         margin-left:10%">
<div class="card" style="width: 18rem;
                         margin-top:5%;
                         margin-left:10%;
                         height:15rem;">
  <img src="{{ asset('images/nurses.jpg') }}" class="card-img-top" alt="infirmier">
  <div class="card-body">
    <h5 class="card-title" style='color:rgb(15, 14, 94);'><a  href="{{ route('infirmier.index') }}" >Infirmier(e)s</a></h5>
    <p class="card-text" style='font-size:small;'> </p>
   
  </div>
</div>
</li>
<li style='margin-left:10%;
width: 18rem;
                         margin-top:5%;'>
<div class="card" style="width: 18rem;
 height:17rem;
                         float:right;
                         margin-top:5%;
                         margin-left:20%;">
  <img src="{{ asset('images/psy.jpg') }}" class="card-img-top" alt="psy">
  <div class="card-body">
    <h5 class="card-title" style='color:rgb(15, 14, 94);'><a  href="{{ route('psychologue.index') }}" >Psychologue</a></h5>
    <p class="card-text" style='font-size:small;'></p>
    
  </div>
</div>
</li>
<li style='margin-left:10%;
width: 18rem;
                         margin-top:5%;'>
<div class="card" style=" height:15rem;
width: 18rem;
                         margin-left:5%;
                         margin-top:5%;">
  <img src="{{ asset('images/download.jpg') }}" class="card-img-top" alt="download">
  <div class="card-body">
    <h5 class="card-title" style='color:rgb(15, 14, 94);'><a  href="{{ route('masseur.index') }}" >Masseur Kinésithérapeute</a></h5>
    <p class="card-text" style='font-size:small;'></p>
    
  </div>
</div>
</li>
</ul>
</section>
<section style='float:left;
margin-bottom:5%; 
              margin-top:5%;
              margin-left:20%;'>
<div class="card" style="width: 18rem;  
                     height:17rem;     ">
  <img src="{{ asset('images/sage.jpg') }}" class="card-img-top" alt="Aide-soignant(e)s">
  <div class="card-body">
    <h5 class="card-title" style='color:rgb(15, 14, 94);'><a  href="{{ route('sage.index') }}" >Sage Femme</a></h5>
    <p class="card-text" style='font-size:small;'> 



</p>
   
  </div>
</div>

</section>
<section>
<div class="card" style="width: 18rem;
margin-bottom:5%;
height:16rem;
                         margin-top:5%;
                         margin-left:66%;">
  <img src="{{ asset('images/prepare.jpeg') }}" class="card-img-top" alt="Préparatrice en pharmacie">
  <div class="card-body">
    <h5 class="card-title" style='color:rgb(15, 14, 94);'><a  href="{{ route('preparatrice.index') }}" >Préparatrice en pharmacie</a></h5>
    <p class="card-text" style='font-size:small;'> </p>

  </div>
</div>

</body>
</html>
@endsection
