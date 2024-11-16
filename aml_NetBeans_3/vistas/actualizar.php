<?php

$documento = $_POST["documento"];
$tipo_doc = $_POST["tipo_doc"]; 

$fecha = $_POST["fecha"]; 

$gen = $_POST["gen"]; 
$prinom = $_POST["nom"];
$segnom = $_POST["segg"];
$priape = $_POST["apelld"];
$segape = $_POST["segunapelld"];
$naci = $_POST["fecha1"];
$ed = $_POST["edadd"];
$lugnaci = $_POST["lugna"];
$esta = $_POST["estad"];
$didom = $_POST["dirdo"];
$ba = $_POST["bar"];
$tedom = $_POST["teldom"];
$celdom = $_POST["celdomi"];
$ep = $_POST["epss"];
$ar= $_POST["arle"];
$fonpen = $_POST["fonpenn"];
$cacom = $_POST["cajacomp"];
$nomconta = $_POST["noncont"];
$paren = $_POST["parente"];
$telf = $_POST["telrefe"];
$celf = $_POST["celrefe"];
$nomem = $_POST["nomenpr"];
$tel = $_POST["telll"];
$ofiha = $_POST["oficio"];
$depor = $_POST["deport"];
$eva = $_POST["evalu"];

include ("../modelo/interfazConect.php");


$conect = mysql_connect($this->servidor, $this->usuario, $this->password) or die ("problemas con tratar de conectar con el servidor");
if (mysql_connect_errno()){
    echo "fallo al conectar con la bd";
    exit();
    mysql_select_db($this->db , $this->conect) or die ("problemas al tratar de conectar con la base de datos");

    
    $consulta = "UPDATE registro_usuario SET documento= '$documento', tipo_doc='$tipo_doc', fecha='$fecha', genero='$gen',primer_nombre='$prinom',
            segundo_nombre= '$segnom', primer_apellido='$priape',segundo_apellido='$segape',fch_nacimiento='$naci',edad='$ed',lugar_nacimiento='$lugnaci',
            estado_civil ='$esta', direccion_domicilio='$didom',barrio='$ba',tel_domicilio='$tedom',cel_domicilio='$celdom',eps='$ep',arl='$ar',fondo_pensiones='$fonpen',caja_compensacion='$cacom',nom_cntcto_fmliar='$nomconta', 
            parentesco='$paren', tel_fmliar='$telf', cel_fmliar='$celf', nombre_empresa='$nomem', telefono='$tel',oficio_habitual='$ofiha',deporte_practicar='$depor', evaluador='$eva' WHERE documento='$documento'";
    
    
    $resultado = mysql_query($conect, $consulta);
    if ($resultado==false) {
    echo "Errorrrr";}
      else {
        echo "Registrado exitosamente";
    }
    }
        
    

?>