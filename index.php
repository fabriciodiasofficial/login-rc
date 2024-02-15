<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

<script src="https://kit.fontawesome.com/59b638ad9f.js" crossorigin="anonymous"></script>
</head>
<body>

	<div class="box_login">
		<div class="capa">
		</div>

		<h1>Faça seu login</h1>

		<form>
			<input type="email" name="e-mail" placeholder="NOME COMPLETO">
			<input type="password" name="password" placeholder="E-MAIL">

			<!-- {% if error != '' %}
				<p id="msg_error" style="text-align: center; font-size: 12px; margin-bottom: 5px; color: orange;">
						{{error}}<i class='fa fa-exclamation'></i>
				</p>
			{% endif %} -->

			<button class="btn-login">LOGAR</button>
			<span class="msg_error"><i class="fa-solid fa-circle-exclamation" style="font-size:16px; color:#FF6D6D; padding-right: 5px"></i><p>Tentativa Inválida</p></span>
		</form>
	</div>
</body>
</html>