<!DOCTYPE html>
<html lang="PT-br">
	<head>
		<meta charset="UTF-8">
		<title>Sistema Login</title>
		<link rel="stylesheet" href="_css/login.css"/>
		<script type="text/javascript" src="_js/jquery-3.0.0.min.js"></script>
		<script type="text/javascript" src="require/js/login.js"></script>
	</head>

	<body>
		<div id="dvBase">
			<header>

			</header>
			<main>
				<form action="javascript:void(0)">
					<p>Login Sistema</p>
					<div><label for="eLogin">E-mail:</label><input type="text" id="eLogin" ></div>
					<div><label for="sLogin">Senha:</label><input type="text" id="sLogin" ></div>
					<div><button onclick="fctLogin()">Entrar</button></div>
					<span></span>
				</form>	
			</main>
			<footer>

			</footer>
		</div>
	</body>
</html>