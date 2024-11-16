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
<body>        <a href ="menu.php" class = "uno">Volver a menu...</a>       
    <p id ="title">Escoge una opcion
    <?php
    echo $_SESSION['name'] ;
    echo " " ;
    echo $_SESSION['apellido'];
    ?>
    </p>
<header>
		<div class = "contenedor" id = "dos"> 
			<a href = "consultaMed_laboral.php">
                            <img class = "icon2"  src = "imagen/enfermera-medico.gif" >
			<p class = "parrafo">Consulta Medicina Laboral</p>
		</a>
		</div>
		<div class = "contenedor" id = "tres"> 
                    
			<a href = "consultaMed_deportiva.php">
                            <img class = "icon2" src="imagen/deportista.gif">
			<p class = "parrafo">Consulta Medicina Deportiva</p>
			</a>
		</div>
		
</header>
</body>
</HTML>
<?php
}else{echo "Debes iniciar sesion antes de acceder a esta pagina"; } ?>
