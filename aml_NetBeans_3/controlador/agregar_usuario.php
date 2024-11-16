<?php
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
$interConexion->registro_usuario($documento, $tipo_doc, $fecha, $gen, $prinom, $segnom, $priape, $segape,
        $naci, $ed, $lugnaci, $esta, $didom, $ba, $tedom, $celdom, $ep, $ar, $fonpen, $cacom, $nomconta,
                $paren, $telf, $celf, $nomem, $tel, $ofiha, $depor, $eva);
?>




