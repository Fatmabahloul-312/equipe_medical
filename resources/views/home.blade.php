@extends('medecin.layout')

@section('content')
<html>
    <head>
        <meta charset="utf-8">
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

/* Set a style for all buttons */
input[type=submit] {
    background-color: #53af57;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
input[type=submit]:hover {
    background-color: white;
    color: #53af57;
    border: 1px solid #53af57;
}
        .droite {
    float: right;

}
.gauche{
   
 
    float: left;

} 
        </style>
    </head>
    <body>
    <section >
        <button type="button" class="btn btn-outline-dark" style='font-size: xx-large;
                                                             width: 50%;
                                                             height:50%;
                                                             margin-left:25%;
                                                             margin-top:5%;
                                                             '><a href="{{ route('medecin.index') }}" >Médecins</a></button>
        <button  type="button" class="btn btn-outline-dark" style='font-size: xx-large;
                                                           margin-top:5%;
                                                             width: 50%;
                                                             height:50%;
                                                             margin-left:25%;
                                                             '><a  href="{{ route('paramedical.index') }}" >Personnel paramdical</a></button>
        </section>
        <section>
            <button type="button" class="btn btn-outline-dark" style='    font-size: xx-large;
                                                             margin-top:5%;
                                                             width: 50%;
                                                             height:50%;
                                                             margin-left:25%;

                                                             '><a href="" >Personnel Administratif et Technique</a>	
            </button>
            <button type="button" class="btn btn-outline-dark"style='    font-size: xx-large;
                                                             margin-top:5%;
                                                             width: 50%;
                                                             height:50%;
                                                             margin-left:25%;
                                                             
                                                             '><a href="{{ route('ouvrier.index') }}" >Personnel Ouvrier	</a>
            </button>

</section>   
</body>
@endsection
