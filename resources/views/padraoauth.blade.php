<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8" />
	<title>Site Principal</title>
	<link rel="stylesheet" href="css/normalize.css" />
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css' />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

	<link rel="stylesheet" href="css/estilo.css" />
</head>
<body>
	<div class="header">
		<div class="linha">
			<header>
				<div class="coluna col4">
					<h1 class="logo">INVENTORY CONTROL</h1>
				</div>
				<div class="coluna col8">
					<nav>
						<ul class="menu inline sem-marcador">
							<li><a type = "buttom" href="{{route('dasboardauth')}}">Inicio</a></li>
						    <li><a type = "buttom" href="{{route('listarprodutos')}}">Listar</a></li> 
							<li><a type = "buttom" href="{{route('welcome')}}">Home</a></li> 
						</ul>
					</nav>
				</div>
			</header>

            @yield('site_auth')


	<footer>
	<div class="footer">
		<div class="linha">
			<footer>
				<div class="coluna col12">
					<span>&copy; 2023 - Inventory control</span>
				</div>
			</footer>
		</div>
	</div>
</body>
</html>