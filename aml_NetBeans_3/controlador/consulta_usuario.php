<?php

      


$busquedad = $_POST["buscar"];
include ("../modelo/interfazConect.php");
$this->$conect = mysql_connect($this->servidor, $this->usuario, $this->password) or die ("problemas con tratar de conectar con el servidor");
if (mysql_connect_errno()){
    
    echo "fallo al conectar con la bd";
    exit();
}
$consulta = "select * from registro_usuario where num_documento='busquedad'";
$resultado = mysql_query($this->$conect, $consulta);

while ($fila=  mysql_fetch_array($resultado, MYSQLI_ASSOC)){
    echo "<form action='../vistas/actualizar.php' method='post'>";
    echo "<input type = 'text', name= 'documento' value= '" .$fila=['documento']."'> ";
        echo "<input type = 'text', name= 'tipo_doc' value= '" .$fila=['tipo_doc']."'> ";
    echo "<input type = 'date', name= 'fecha' value= '" .$fila=['fecha']."'> ";
    echo "<input type = 'text', name= 'gen' value= '" .$fila=['genero']."'> ";
    echo "<input type = 'text', name= 'nom' value= '" .$fila=['primer_nombre']."'> ";
    echo "<input type = 'text', name= 'segg' value= '" .$fila=['segundo_nombre']."'> ";
    echo "<input type = 'text', name= 'apelld' value= '" .$fila=['primer_apellido']."'> ";
    echo "<input type = 'text', name= 'segunapelld' value= '" .$fila=['segundo_apellido']."'> ";
    echo "<input type = 'date', name= 'fecha1' value= '" .$fila=['fch_nacimiento']."'> ";
    echo "<input type = 'text', name= 'edadd' value= '" .$fila=['edad']."'> ";
    echo "<input type = 'text', name= 'lugna' value= '" .$fila=['lugar_nacimiento']."'> ";
    echo "<input type = 'text', name= 'estad' value= '" .$fila=['estado_civil']."'> ";
    echo "<input type = 'text', name= 'dirdo' value= '" .$fila=['direccion_domicilio']."'> ";
    echo "<input type = 'text', name= 'bar' value= '" .$fila=['barrio']."'> ";
    echo "<input type = 'text', name= 'teldom' value= '" .$fila=['tel_domicilio']."'> ";
    echo "<input type = 'text', name= 'celdomi' value= '" .$fila=['cel_domicilio']."'> ";
    echo "<input type = 'text', name= 'epss' value= '" .$fila=['eps']."'> ";
    echo "<input type = 'text', name= 'arle' value= '" .$fila=['arl']."'> ";
    echo "<input type = 'text', name= 'fonpenn' value= '" .$fila=['fondo_pensiones']."'> ";
    echo "<input type = 'text', name= 'cajacomp' value= '" .$fila=['caja_compensacion']."'> ";
    echo "<input type = 'text', name= 'noncont' value= '" .$fila=['nom_cntcto_fmliar']."'> ";
    echo "<input type = 'text', name= 'parente' value= '" .$fila=['parentesco']."'> ";
    echo "<input type = 'text', name= 'telrefe' value= '" .$fila=['tel_fmliar']."'> ";
    echo "<input type = 'text', name= 'celrefe' value= '" .$fila=['cel_fmliar']."'> ";
    echo "<input type = 'text', name= 'nomenpr' value= '" .$fila=['nombre_empresa']."'> ";
    echo "<input type = 'text', name= 'telll' value= '" .$fila=['telefono']."'> ";
    echo "<input type = 'text', name= 'oficio' value= '" .$fila=['oficio_habitual']."'> ";
    echo "<input type = 'text', name= 'deport' value= '" .$fila=['deporte_practicar']."'> ";
    echo "<input type = 'text', name= 'evalu' value= '" .$fila=['oficio_habitual']."'> ";

    echo "<input type = 'submit' name= 'enviando' value='actualizar'>";
    echo "</form>";
    
    
}

/*
include ("../modelo/interfazConect.php");

$documento = $_POST['documento'];
$tipo_doc = $_POST['tipo_doc']; 

$fecha = $_POST['fecha']; 

$gen = $_POST['gen']; 
$prinom = $_POST['nom'];
$segnom = $_POST['segg'];
$priape = $_POST['apelld'];
$segape = $_POST['segunapelld'];
$naci = $_POST['fecha1'];
$ed = $_POST['edadd'];
$lugnaci = $_POST['lugna'];
$esta = $_POST['estad'];
$didom = $_POST['dirdo'];
$ba = $_POST['bar'];
$tedom = $_POST['teldom'];
$celdom = $_POST['celdomi'];
$ep = $_POST['epss'];
$ar= $_POST['arle'];
$fonpen = $_POST['fonpenn'];
$cacom = $_POST['cajacomp'];
$nomconta = $_POST['noncont'];
$paren = $_POST['parente'];
$telf = $_POST['telrefe'];
$celf = $_POST['celrefe'];
$nomem = $_POST['nomenpr'];
$tel = $_POST['telll'];
$ofiha = $_POST['oficio'];
$depor = $_POST['deport'];
$eva = $_POST['evalu'];



$interConexion = new interConexion(); 
$interConexion->consultaUsuario($documento, $tipo_doc, $fecha, $gen, $prinom, $segnom, $priape, $segape,
        $naci, $ed, $lugnaci, $esta, $didom, $ba, $tedom, $celdom, $ep, $ar, $fonpen, $cacom, $nomconta,
                $paren, $telf, $celf, $nomem, $tel, $ofiha, $depor, $eva);
                
 */               
  ?>              