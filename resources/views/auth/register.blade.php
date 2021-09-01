@extends('layouts.app')

@section('content')
<html>
    <head>
    <style>
            body{
                background-image: url('{{ asset('images/site.jpg')}}');
}
.row{
    width:75%;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-size: x-large;
    margin-left: 5%;
    margin-right: 15%;
    margin-top: 5%; 
    height:60%;

    
    
}
</style>
    </head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="margin-top:10%; width:120%; height:350%; " >
                <div class=""></div>
                <div class="panel-body" style=" background-color:rgb(230, 231, 238);">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}" style="margin-right:50%; width:120%; height:350%; ">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}"style="margin-right:55%;">
                            <label for="name" class="col-md-4 control-label" style="color:rgb(79, 80, 139);">Nom</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" style="margin-left:55%;">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" style="margin-right:20%;">
                            <label for="email" class="col-md-4 control-label" style="color:rgb(79, 80, 139);"> Addresse Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" style="margin-right:27%;">
                            <label for="password" class="col-md-4 control-label" style="color:rgb(79, 80, 139);">Mot De passe </label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" style="margin-left:7%;">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}" style="margin-right:20%;">
                            <label for="password-confirm" class="col-md-4 control-label"style="color:rgb(79, 80, 139);">Confirmer MDP </label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> S'inscrire
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection
