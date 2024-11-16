<?php
session_start();
if(isset ($_SESSION['id'])) {
?>
<HTML>
<HEAD>
<TITLE>INICIO</TITLE>
<meta charset = "UTF-8"> 
<LINK REL = "stylesheet" type = "text/css" href = "css/menu.css" > 
<LINK REL = "stylesheet" type = "text/css" href = "css/add_wish.css" > 
</HEAD>
<body><a href ="login.php" class = "dos">Cerrar Sesion...</a>
    <p id ="title">Bievenido
    <?php
    echo $_SESSION['name'] ;
    echo " " ;
    echo $_SESSION['apellido'];
    ?>
    </p>
<header><div class = "contenedor" id = "uno"> 
        <a href = "agregar_usuario.php">
            <!--<img class="icon" src="imagen/logo3d_sena.gif" align="left">-->

            <img class = "icon" src="imagen/gestion.gif">
			<p class = "parrafo">Gestion usuario</p>
		</a>
		</div>
		<div class = "contenedor" id = "dos"> 
			<a href = "consulta.php">
                            <img class = "icon"  src = "imagen/ejecutiva.gif" >
			<p class = "parrafo">Consulta</p>
		</a>
		</div>
		<div class = "contenedor" id = "tres"> 
			<a href = "edit_wish.php">
                            <img class = "icon" src="imagen/Enfermera.gif">
			<p class = "parrafo">Agendar cita</p>
			</a>
		</div>
		<div class = "contenedor" id = "cuatro"> 
			<a href = "wish_list.php">
                            <img class = "icon" src="imagen/certificacion.gif">
			<p class = "parrafo">Certificados</p>
			</a>
		</div>
</header>
</body>
</HTML>
<?php
}else{echo "Debes iniciar sesion antes de acceder a esta pagina"; } ?>