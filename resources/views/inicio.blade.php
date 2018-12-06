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
	<div class="col-sm-12">
		<div id="carousel" class="carousel slide" data-ride="carousel" style="margin-right: -15px; margin-left: -15px;">
			<ol class="carousel-indicators">
				<li data-target="#carousel" data-slide-to="0" class="active"></li>
				<li data-target="#carousel" data-slide-to="1"></li>
				<li data-target="#carousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img width="100%" src="{{asset('img/inicio1.jpg')}}" alt="First slide">
					<div class="carousel-caption d-none d-md-block">
						<h5>Servicios</h5>
						<p>Texto de prueba texto de prueba</p>
					</div>
				</div>
				<div class="carousel-item">
					<img width="100%" src="{{asset('img/inicio2.jpg')}}" alt="Second slide">
					<div class="carousel-caption d-none d-md-block">
						<h5>Rotaciones</h5>
						<p>Texto de prueba texto de prueba</p>
					</div>
				</div>
				<div class="carousel-item">
					<img width="100%" src="{{asset('img/inicio3.jpg')}}" alt="Third slide">
					<div class="carousel-caption d-none d-md-block">
						<h5>Informacion</h5>
						<p>Texto de prueba texto de prueba</p>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</div>
@endsection