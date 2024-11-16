

<?php 
// Actualizamos en funcion del id que recibimos 
include ("../modelo/interfazConect.php");

$documento = $_POST['num_documento'];


$tipo_doc = $_POST['tipo_doc']; 
$fecha = $_POST['fecha']; 


$genero = $_POST['genero']; 
$primer_nombre = $_POST['primer_nombre'];
$segundo_nombre = $_POST['segundo_nombre'];
$primer_apellido = $_POST['primer_apellido'];
$segundo_apellido = $_POST['segundo_apellido'];
$fch_nacimiento = $_POST['fch_nacimiento'];
$edad = $_POST['edad'];
$lugar_nacimiento = $_POST['lugar_nacimiento'];
$estado_civil = $_POST['estado_civil'];
$direccion_domicilio = $_POST['direccion_domicilio'];
$barrio = $_POST['barrio'];
$tel_domicilio = $_POST['tel_domicilio'];
$cel_domicilio = $_POST['cel_domicilio'];
$eps = $_POST['eps'];
$arl= $_POST['arl'];
$fondo_pensiones = $_POST['fondo_pensiones'];
$caja_compensacion = $_POST['caja_compensacion'];
$nom_cntcto_fmliar = $_POST['nom_cntcto_fmliar'];
$parentesco = $_POST['parentesco'];
$tel_fmliar = $_POST['tel_fmliar'];
$cel_fmliar = $_POST['cel_fmliar'];
$nombre_empresa = $_POST['nombre_empresa'];
$telefono = $_POST['telefono'];
$oficio_habitual = $_POST['oficio_habitual'];
$deporte_practicar = $_POST['deporte_practicar'];
$evaluador = $_POST['evaluador'];
$nivel_academico_actual = $_POST['nivel_academico_actual'];
$estudiando = $_POST['estudiando'];
$profesion = $_POST['profesion'];
$timp_exp_profesional = $_POST['timp_exp_profesional'];
$cargo_aspra_actl = $_POST['cargo_aspra_actl'];
$tiemp_en_cargo = $_POST['tiemp_en_cargo'];
$tipo_cargo = $_POST['tipo_cargo'];
$centro_al_que_pertene = $_POST['centro_al_que_pertene'];
$dependencia = $_POST['dependencia'];

$jornada_de_trabajo = '';
if(isset($_POST['jornada_de_trabajo'])){
 $jornada_de_trabajo=  implode('✔', $_POST['jornada_de_trabajo']); //implode agarra varias pocisiones de un array y las junta en una unica cadena de texto unida con ese caracter con dos rayitas  
 
 }

// echo 'checked="checked"';
 //if ($jornada_de_trabajo=$jornada_de_trabajo ){
     
   //  $jornada_de_trabajo = explode(',', $jornada_de_trabajo['jornada_de_trabajo']);
   //  var_dump($jornada_de_trabajo);
 //}
 
 $extra = $_POST['extra'];
 $manip_alimtos = $_POST['manip_alimtos'];
 $traba_altras = $_POST['traba_altras'];
 //$desc_car_mot_const_enfer_actu = $_POST['desc_car_mot_const_enfer_actu'];
//var_dump(htmlentities($_POST['desc_car_mot_const_enfer_actu']));
// $desc_car_mot_const_enfer_actu = '';
//if(isset($_POST['desc_car_mot_const_enfer_actu'])){
 //var_dump($_POST['desc_car_mot_const_enfer_actu']);
 $desc_car_mot_const_enfer_actu = $_POST['desc_car_mot_const_enfer_actu'];
 
 //}
 $enti_donde_a_trabj = $_POST['enti_donde_a_trabj'];
 
  $cargo_que_desempena_o_desempeno = $_POST['cargo_que_desempena_o_desempeno'];
  
  $tiempo_laborado_amos = $_POST['tiempo_laborado_amos'];
  $tiempo_laborado_meses = $_POST['tiempo_laborado_meses'];

 
 
 
            $interConexion = new interConexion(); 
$interConexion->editar($documento, $tipo_doc, $fecha, $genero, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido,
        $fch_nacimiento, $edad, $lugar_nacimiento, $estado_civil, $direccion_domicilio, $barrio, $tel_domicilio, $cel_domicilio, $eps, $arl, $fondo_pensiones, $caja_compensacion, $nom_cntcto_fmliar,
       $parentesco, $tel_fmliar, $cel_fmliar, $nombre_empresa, $telefono, $oficio_habitual, $deporte_practicar, $evaluador, $nivel_academico_actual, $estudiando, $profesion, $timp_exp_profesional,
     $cargo_aspra_actl, $tiemp_en_cargo, $tipo_cargo, $centro_al_que_pertene, $dependencia, $jornada_de_trabajo, $extra, $manip_alimtos, $traba_altras, $desc_car_mot_const_enfer_actu, $enti_donde_a_trabj, $cargo_que_desempena_o_desempeno, $tiempo_laborado_amos,
        $tiempo_laborado_meses);    
?>

 

