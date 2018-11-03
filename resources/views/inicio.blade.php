@extends('plantillas.app')
@section('cabecera')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<a class="navbar-brand" href="#">
		<img src="{{asset('img/logo.png')}}" width="30" height="30" class="d-inline-block align-top" alt="Sigma"/> Sigma
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-iniciar-sesion" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="menu-iniciar-sesion">
		<ul class="navbar-nav mr-auto">			
		</ul>	
		<form class="form-inline">
			<input class="form-control mr-sm-2 my-2" type="search" placeholder="Correo" aria-label="Correo" />
			<input class="form-control mr-sm-2 my-2" type="search" placeholder="Contraseña" aria-label="Contraseña" />	
        	<button class="btn btn-outline-info my-2" type="submit">Iniciar Sesión</button>
        	<button class="btn btn-outline-info my-2" style="margin-left: 10px;" type="submit">Registrarse</button>
		</form>
	</div>
</nav>
@endsection
@section('contenido')
 <div class="row">
		<div class="col-sm-6">
			<h1>Prueba de seccion contenido</h1>
		</div>
		<div class="col-sm-6">
			<h1>Prueba de seccion contenido</h1>
		</div>
	</div>
@endsection