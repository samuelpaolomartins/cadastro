<html>
<head>
<meta charset="utf-8">
<title>Tela de login</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="application/Javascript" src="../usuario.js"></script>
</head>

<body>
<form method="POST">
<fieldset id="vaso">

<label>Email:</label><input type="text" name="login" id="login"><br>
<label>Password:</label><input type="password" name="senha" id="senha"><br>

<input type="button" onClick="logar();" value="Entar">
<input type="hidden" name="acao" id="acao" value="logar">

</fieldset>
</form>
</body>
</html>