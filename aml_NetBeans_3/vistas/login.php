<?php
session_start();
session_destroy();
?>
<html>
<head>
<meta charset="UTF-8">
<title> Inicio </title>
<link href ="css/login.css" rel ="stylesheet" type ="text/css">
<img src="imagen/logo3d_sena.gif" align="left">
</head>
<body>
<section id="Formulario">
<br>
<br>	
<div class ="login">
<form action ="../controlador/login.php" method= "POST" >
    <center><h1> Iniciar Sesión </h1></center>

<center>    
    <fieldset>       
        <legend>Login</legend>	
		<p>
                    <input title = "se necesita el nombre" type = "text" name = "usuario" placeholder = "usuario" required>
                </p> 
                <p>
                    <input  title = "se necesita la contraseña" type = "password" name = "pass" placeholder = "password" required>
                </p> 
                <p>
                   <input  type = "submit" value = "Entrar"> 
                   <input  type = "reset" value = "Limpiar"> 
                </p>               
                <p>
                    <a href ="crear.html">
                        Crear cuenta
                    </a>
                </p>
</fieldset>
</center>
</form>	
</div>
</section>
</body>
</html>