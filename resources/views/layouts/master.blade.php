<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<title>{{ config('app.name') }} - @yield('title')</title>
		
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
		@auth
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<a class="navbar-brand" href="/">
					<img src="https://getbootstrap.com/docs/4.3/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
					{{ config('app.name') }}
				</a>
				<!-- <a class="navbar-brand" href="#">Navbar w/ text</a> -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
		
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link active" href="/">Inicio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="/clients">Clientes</a>
						</li>
						<!--
						<li class="nav-item">
							<a class="nav-link" href="/addresses">Endereços</a>
						</li>
						-->
						<!--
						<li class="nav-item">
							<a class="nav-link" href="/cars">Carros</a>
						</li>
						-->
						<!--
						<li class="nav-item">
							<a class="nav-link" href="/diagnostics">Diagnosticos</a>
						</li>
						-->
						<!--
						<li class="nav-item">
							<a class="nav-link" href="/budgets">Orçamentos</a>
						</li>
						-->
						<!--
						<li class="nav-item">
							<a class="nav-link" href="/photoDiagnostics">Fotos dos Diagnósticos</a>
						</li>
						-->
						<!--
						<li class="nav-item">
							<a class="nav-link" href="/repairs">Reparos</a>
						</li>
						-->
						<!--
						<li class="nav-item">
							<a class="nav-link" href="/repairs">Reparos</a>
						</li>
						-->
						<!--
						<li class="nav-item">
							<a class="nav-link" href="/photoRepairs">Fotos dos Reparos</a>
						</li>
						-->
						<!--
						<li class="nav-item">
							<a class="nav-link" href="/payments">Pagamentos</a>
						</li>
						-->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Administração
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="/users">Usuários</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="/typeUsers">Tipos de Usuários</a>
								<a class="dropdown-item" href="/permissions">Permissões</a>
							</div>
						</li>
					</ul>
					<form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					</form>
				</div>
			</nav>
		@else
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<a class="navbar-brand" href="/">
					<img src="https://getbootstrap.com/docs/4.3/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
					{{ config('app.name') }}
				</a>
				<!-- <a class="navbar-brand" href="#">Navbar w/ text</a> -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link active" href="/register">Registrar</a>
						</li>
					</ul>
				</div>
			</nav>
		@endauth
        <div class="container">
			<div class="row">
				@auth
					<div class="col">
						<p>
							<h1>@yield('title')</h1>
						</p>
					</div>
					<div class="col">
						&nbsp;
						<p>
							<button type="button" class="btn btn-secondary btn-lg float-right">Create</button>
						</p>
					</div>
				@else
					<div class="col">
						<p>
							<h1>@yield('title')</h1>
						</p>
					</div>
				@endauth
			</div>
            @yield('content')
        </div>
    </body>
</html>