<?php

include ("../modelo/interfazConect.php");

$user = $_POST['usuario'];
$pass = $_POST['pass'];  


$interConexion = new interConexion(); 
$interConexion -> login($user , $pass); 
 


?>