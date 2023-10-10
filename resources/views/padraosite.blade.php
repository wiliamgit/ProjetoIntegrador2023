<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8" />
	<title>Site Principal</title>
	<link rel="stylesheet" href="css/normalize.css" />
	{{-- Link BootStrap --}}
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css' />
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
							<li><a type = "buttom" href="{{route('welcome')}}">INICIO</a></li>
							<li><a type = "buttom" href="{{route('oquefazemos')}}">SERVIÇOS</a></li>
							<li><a type = "buttom" href="{{route('servicos')}}">OQUE FAZEMOS?</a></li>
							<li><a type = "buttom" href="{{route('sobrenos')}}">SOBRE NOS</a></li>
							<li><a type = "buttom" href="{{route('registrarindex')}}">CADASTRE-SE</a></li>
						</ul>
					</nav>
				</div>
			</header>
		@yield('padrao_site')
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