<?php

include 'conexion.php'; 

class interConexion extends conexion {
        
        private $fine; 
	private $user ; 
	private $password;
	private $consulta ;
        	private $consultar ;

	private $conexion;
	private $row, $roww, $pas1 , $pas2;
        private $penombre, $peapellido, $peusuario, $pepassword, $verificar ; 

	public function interConexion(){

	$conect = new conexion();//instancia de conexion mejor dicho un objeto
	$this->conexion = $conect -> conectar();
	$conect -> seleccion_db();  

	}

	public  function login($usuario, $pass){
		$this->user = $usuario;
		$this->password= $pass;
		$this->consulta= mysql_query("SELECT usuario , password FROM registro_administrador where usuario = '".$this->user."' and  password = '".$this->password."'", $this->conexion); 
                if($this->row = mysql_fetch_array($this->consulta)){
                    session_start();
                    $this->consulta = mysql_query("SELECT * FROM registro_administrador where usuario = '".$this->user."' ",  $this->conexion);  
                    $this->row = mysql_fetch_array($this->consulta);
                    //Id
                    $this->id = $this->row['id'];
                    $_SESSION['id'] = $this->id;
                    $this->ini = 1;
                    //Nombre
                    $this->id = $this->row['nombres'];
                    $_SESSION['name'] = $this->id; 
                    //apellido
                    $this->id = $this->row['apellido'];
                    $_SESSION['apellido'] = $this->id; 
                         header("Location: ../vistas/menu.php");      
                }else{
                        echo " usuario o password incorrecto ";

                        
                }
                return $this->consulta ;
	}

        public function registrar($nom, $ape, $use, $pass){
            
            $this->penombre = $nom;
            $this->peapellido = $ape;
            $this->peusuario = $use;
            $this->pepassword = $pass;
            
            $this->verificar = mysql_query("SELECT usuario FROM registro_administrador where usuario = '".$this->peusuario."' " ,  $this->conexion );

            if($this->row = mysql_fetch_array($this->verificar)){
                
                echo "<h1>EL USUARIO QUE ACABA DE INGRESAR YA EXISTE</h1>";  
                
            }else if(!$this->row = mysql_fetch_array($this->verificar)){
            
                mysql_query("INSERT INTO registro_administrador(nombre, apellido, usuario, password) values('$this->penombre', '$this->peapellido', '$this->peusuario' , '$this->pepassword')", $this->conexion );
                
              
                
               header("location: ../vistas/login.php");
            
            }
            
            
            
            
            
            
        }
        
        
        public function verificar($pass1 , $pass2){
            
            $this->fine = false;
            
            $this->pas1 = $pass1;
            $this->pas2 = $pass2;
            
            
            if($this->pas1 == $this->pas2){
                
                $this->fine = true ; 
                
                
            }
            
            
            return $this->fine ; 
        }
        
        
        
public function registro_usuario($documento, $tipo_doc, $fecha, $gen, $prinom, $segnom, $priape, $segape,
        $naci, $ed, $lugnaci, $esta, $didom, $ba, $tedom, $celdom, $ep, $ar, $fonpen, $cacom, $nomconta,
                $paren, $telf, $celf, $nomem, $tel, $ofiha, $depor, $eva){
           
           
           $this->documento = $documento; 
           $this->tipo_doc = $tipo_doc; 
           $this->fechak = $fecha;
           $this->genk=$gen;
           $this->prinomk = $prinom;
            $this->segnomk = $segnom;
            $this->priapek = $priape;
            $this->segapek = $segape;
            $this->nacik = $naci;
            $this->edk = $ed;
            $this->lugnacik= $lugnaci;
            $this->estak = $esta;
            $this->didomk = $didom;
            $this->bak =$ba;
             $this->tedomk =$tedom;
             $this->celdomk =$celdom;
             $this->epk =$ep;
             $this->ark =$ar;
             $this->fonpenk =$fonpen;
             $this->cacomk =$cacom;
             $this->nomcontak =$nomconta;
             $this->parenk =$paren;
             $this->telfk =$telf;
             $this->celfk =$celf;
              $this->nomemk =$nomem;
              $this->telk =$tel;
             $this->ofihak =$ofiha;
              $this->depork =$depor;
             $this->evak =$eva;
        
          
           
           session_start();
           
           
    $this->veri = mysql_query("SELECT num_documento FROM registro_usuario where num_documento ='".$this->documento."' and  wisher_id = '".$_SESSION['id']."'" ,$this->conexion);
           

  if(mysql_num_rows($this->veri)==0){
               
      mysql_query("INSERT INTO registro_usuario(num_documento, tipo_doc, fecha, genero, primer_nombre, segundo_nombre, primer_apellido, 
          segundo_apellido, fch_nacimiento, edad, lugar_nacimiento, estado_civil, 
          direccion_domicilio, barrio, tel_domicilio, cel_domicilio, eps, arl, 
          fondo_pensiones, caja_compensacion, nom_cntcto_fmliar, parentesco, 
          tel_fmliar, cel_fmliar, nombre_empresa, telefono, oficio_habitual,  
          deporte_practicar, evaluador, wisher_id) values('$this->documento' , '$this->tipo_doc' , '$this->fechak', '$this->genk', '$this->prinomk',  '$this->segnomk', '$this->priapek', '$this->segapek',
              '$this->nacik', '$this->edk', '$this->lugnacik', '$this->estak', '$this->didomk', '$this->bak', '$this->tedomk',
              '$this->celdomk', '$this->epk', '$this->ark', '$this->fonpenk', '$this->cacomk',
              '$this->nomcontak', '$this->parenk', '$this->telfk', '$this->celfk', '$this->nomemk', '$this->telk',
              '$this->ofihak', '$this->depork', '$this->evak', '$_SESSION[id]')",  $this->conexion);
           
            header("Location: ../vistas/menu.php");
          
                 
           
  }else{
               
            echo "EL USUARIO CON EL NUMERO DE IDENTIFICACION... YA EXISTE";
  }
           
     
            
          

           
        
          
           
   }
   
   
   public function consultaUsuario($documento, $tipo_doc, $fecha, $gen, $prinom, $segnom, $priape, $segape,
        $naci, $ed, $lugnaci, $esta, $didom, $ba, $tedom, $celdom, $ep, $ar, $fonpen, $cacom, $nomconta,
                $paren, $telf, $celf, $nomem, $tel, $ofiha, $depor, $eva){
       
       
       $this->documento = $documento; 
           $this->tipo_doc = $tipo_doc; 
           $this->fechak = $fecha;
           $this->genk=$gen;
           $this->prinomk = $prinom;
            $this->segnomk = $segnom;
            $this->priapek = $priape;
            $this->segapek = $segape;
            $this->nacik = $naci;
            $this->edk = $ed;
            $this->lugnacik= $lugnaci;
            $this->estak = $esta;
            $this->didomk = $didom;
            $this->bak =$ba;
             $this->tedomk =$tedom;
             $this->celdomk =$celdom;
             $this->epk =$ep;
             $this->ark =$ar;
             $this->fonpenk =$fonpen;
             $this->cacomk =$cacom;
             $this->nomcontak =$nomconta;
             $this->parenk =$paren;
             $this->telfk =$telf;
             $this->celfk =$celf;
              $this->nomemk =$nomem;
              $this->telk =$tel;
             $this->ofihak =$ofiha;
              $this->depork =$depor;
             $this->evak =$eva;
             
             $this->consultar= mysql_query("SELECT num_documento FROM registro_usuario where num_documento = '".$this->documento."'", $this->conexion); 

                   if($this->row = mysql_fetch_array($this->consultar)){
                    session_start();
                     $this->consultar = mysql_query("SELECT * FROM resgistro_usuario where num_documento = '".$this->documento."' ",  $this->conexion);  
                    $this->row = mysql_fetch_array($this->consultar);
                     //Id
                    $this->id = $this->row['id'];
                    $_SESSION['id'] = $this->id;
                    $this->ini = 1;
                    //Numero de documento
                    $this->id = $this->row['num_documento'];
                    $_SESSION['documento'] = $this->id; 
                    //tipo documento
                    $this->id = $this->row['tipo_doc'];
                    $_SESSION['tipo_doc'] = $this->id; 
                     //fecha
                    $this->id = $this->row['fecha'];
                    $_SESSION['fechak'] = $this->id; 
                     //genero
                    $this->id = $this->row['genero'];
                    $_SESSION['genk'] = $this->id; 
                         header("Location: ../vistas/agregar_usuario.php");      
                }else{
                        echo " usuario incorrecto ";

                        
                }
                return $this->consulta ;
	
                    
                    
    /*         		$this->consulta= mysql_query("SELECT num_documento FROM registro_usuario where documento = '".$this->tipo_doc."'", $this->conexion); 

       if($this->row = mysql_fetch_array($this->consulta)){
                    session_start();
                    
                    $this->consulta = mysql_query("SELECT * FROM wisher where usuario = '".$this->user."' ",  $this->conexion);  
                    $this->row = mysql_fetch_array($this->consulta);
                    $this->consulta = mysql_query("SELECT num_documento, tipo_doc, fecha, genero, primer_nombre, segundo_nombre, primer_apellido, 
          segundo_apellido, fch_nacimiento, edad, lugar_nacimiento, estado_civil, 
          direccion_domicilio, barrio, tel_domicilio, cel_domicilio, eps, arl, 
          fondo_pensiones, caja_compensacion, nom_cntcto_fmliar, parentesco, 
          tel_fmliar, cel_fmliar, nombre_empresa, telefono, oficio_habitual,  
          deporte_practicar, evaluador FROM resistro_usuario WHERE wisher_id='".$_SESSION['id']."'" , $this->conexion);  
                    $this->row = mysql_fetch_array($this->consulta);

       
    /*   //Id
                    $this->id = $this->row['id'];
                    $_SESSION['id'] = $this->id;
                    $this->ini = 1;
                    //Nombre
                    $this->id = $this->row['num_doci'];
                    $_SESSION['name'] = $this->id; 
                    //apellido
                    $this->id = $this->row['apellido'];
                    $_SESSION['apellido'] = $this->id; 
                         header("Location: ../vistas/agregar_usuario.php");      
                }else{
                        echo " usuario o password incorrecto ";

                        
                }
                return $this->consulta ;
	}
*/
       
      /*  $this->con= mysql_query("SELECT num_documento, tipo_doc, fecha, genero, primer_nombre, segundo_nombre, primer_apellido, 
          segundo_apellido, fch_nacimiento, edad, lugar_nacimiento, estado_civil, 
          direccion_domicilio, barrio, tel_domicilio, cel_domicilio, eps, arl, 
          fondo_pensiones, caja_compensacion, nom_cntcto_fmliar, parentesco, 
          tel_fmliar, cel_fmliar, nombre_empresa, telefono, oficio_habitual,  
          deporte_practicar, evaluador FROM resistro_usuario WHERE wisher_id='".$_SESSION['id']."'" , $this->conexion);
           
           while($this->row = mysql_fetch_array($this->con)){
               
              
               echo "<tr>";
               
               echo "<td>",$this->row['documento'],"</td><td>", $this->row['tipo_doc'],"</td>
                       <td>",$this->row['fecha'],"</td><td>", $this->row['genero'],"</td>
                       <td>",$this->row['primer_nombre'],"</td><td>", $this->row['segundo_nombre'],"</td>
                       <td>",$this->row['primer_apellido'],"</td><td>", $this->row['segundo_apellido'],"</td>
                       <td>",$this->row['fch_nacimiento'],"</td><td>", $this->row['edad'],"</td>
                       <td>",$this->row['lugar_nacimiento'],"</td><td>", $this->row['estado_civil'],"</td>
                       <td>",$this->row['direccion_domicilio'],"</td><td>", $this->row['barrio'],"</td>
                       <td>",$this->row['tel_domicilio'],"</td><td>", $this->row['cel_domicilio'],"</td>
                       <td>",$this->row['eps'],"</td><td>", $this->row['arl'],"</td>
                       <td>",$this->row['fondo_pensiones'],"</td><td>", $this->row['caja_compensacion'],"</td>
                       <td>",$this->row['nom_cntcto_fmliar'],"</td><td>", $this->row['parentesco'],"</td>
                       <td>",$this->row['tel_fmliar'],"</td><td>", $this->row['cel_fmliar'],"</td>
                       <td>",$this->row['nombre_empresa'],"</td><td>", $this->row['telefono'],"</td>
                       <td>",$this->row['oficio_habitual'],"</td><td>", $this->row['deporte_practicar'],"</td>
                       <td>",$this->row['evaluador'],"</td>";


                       
               
               echo "</tr>";
              

            */   
           
   


}
public function busca_Med_laboral($documento, $pre){
    $this->documento = $documento; 
           $this->pre = $pre; 
   

  if(isset($this->pre))
  { 
          
           
        
          
           
                   //  $this->con= mysql_query("SELECT * FROM registro_usuario WHERE wisher_id='".$_SESSION['id']."'" , $this->conexion);
 
           
$this->con = mysql_query("SELECT * FROM registro_usuario where num_documento = '".$this->documento."' and wisher_id = '".$_SESSION['id']."'" ,$this->conexion);
          
          /* if(mysql_num_rows($this->veri)>0){

           $this->con= mysql_query("SELECT * FROM registro_usuario WHERE wisher_id='".$_SESSION['id']."'" , $this->conexion);
     
while($this->row = mysql_fetch_array($this->con)){
   
while($this->row = mysql_fetch_array($this->con)){
*/
if(mysql_num_rows($this->con)>0){
    
    while($this->row = mysql_fetch_array($this->con)){
        
        
        
        echo "
<div align='center'> 
        <link rel='stylesheet' type ='text/css' href='../vistas/css/add_wish.css'>

    <table border='1' class='ocho' width='600' style='font-family: Verdana; font-size: 8pt'> 
        <tr> 
            <td colspan='2'><h3 align='center'>Actualice los datos que considere</h3></td> 
        </tr> 
        <tr> 
            <td colspan='2'>En los campos del formulario puede ver los valores actuales,  
            si no se cambian los valores se mantienen iguales.</td> 
        </tr>    


        <form method='POST' action='editar.php'> 
        <tr> 
            <td width='50%'>&nbsp;</td> 
            <td width='50%'>&nbsp;</td> 
        </tr>
        <tr> 
            <td width='50%'><p align='center'><b>Numero de documento </b></td> 
            <td width='50%'><p align='center'><input class='ocho'  type='text' name='num_documento' size='20' value='".$this->row['num_documento']."'></td> 
        </tr> 
        
        <tr> 
            <td width='50%'><p align='center'><b>Tipo de documento </b></td> 
            <td width='50%'><p align='center'><input class='ocho' type='text' name='tipo_doc' size='20' value='".$this->row['tipo_doc']."'></td> 
        </tr> 
        <tr> 
            <td width='50%'><p align='center'><b>Fecha</b></td> 
            <td width='50%'><p align='center'><input class='ocho' type='text' name='fecha' size='20' value='".$this->row['fecha']."'></td> 
        </tr>
        


<tr> 
            <td width='50%'><p align='center'><b>Genero </b></td> 
            <td width='50%'><p align='center'><input class='ocho' type='text' name='genero' size='20' value='".$this->row['genero']."'></td> 
        </tr>
        
<tr> 
            <td width='50%'><p align='center'><b>Primer nombre </b></td> 
            <td width='50%'><p align='center'><input class='ocho' type='text' name='primer_nombre' size='20' value='".$this->row['primer_nombre']."'></td> 
        </tr>
        

<tr> 
            <td width='50%'><p align='center'><b>Segundo nombre</b></td> 
            <td width='50%'><p align='center'><input class='ocho' type='text' name='segundo_nombre' size='20' value='".$this->row['segundo_nombre']."'></td> 
        </tr>
        

<tr> 
            <td width='50%'><p align='center'><b>Primer apellido </b></td> 
            <td width='50%'><p align='center'><input class='ocho' type='text' name='primer_apellido' size='20' value='".$this->row['primer_apellido']."'></td> 
        </tr>
        
<tr> 
            <td width='50%'><p align='center'><b>Segundo nombre </b></td> 
            <td width='50%'><p align='center'><input class='ocho' type='text' name='segundo_apellido' size='20' value='".$this->row['segundo_apellido']."'></td> 
        </tr>
        

<tr> 
            <td width='50%'><p align='center'><b>Fecha de nacimiento </b></td> 
            <td width='50%'><p align='center'><input class='ocho' type='text' name='fch_nacimiento' size='20' value='".$this->row['fch_nacimiento']."'></td> 
        </tr>
        


<tr> 
            <td width='50%'><p align='center'><b>Edad </b></td> 
            <td width='50%'><p align='center'><input class='ocho' type='text' name='edad' size='20' value='".$this->row['edad']."'></td> 
        </tr>
        

<tr> 
            <td width='50%'><p align='center'><b>Lugar de nacimiento </b></td> 
            <td width='50%'><p align='center'><input class='ocho' type='text' name='lugar_nacimiento' size='20' value='".$this->row['lugar_nacimiento']."'></td> 
        </tr>
        

<tr> 
            <td width='50%'><p align='center'><b>Estado civil </b></td> 
            <td width='50%'><p align='center'><input class='ocho' type='text' name='estado_civil' size='20' value='".$this->row['estado_civil']."'></td> 
        </tr>
        <tr> 
            <td width='50%'><p align='center'><b>Direccion domicilio </b></td> 
            <td width='50%'><p align='center'><input class='ocho' type='text' name='direccion_domicilio' size='20' value='".$this->row['direccion_domicilio']."'></td> 
        </tr>
        <tr> 
            <td width='50%'><p align='center'><b>Barrio</b></td> 
            <td width='50%'><p align='center'><input class='ocho' type='text' name='barrio' size='20' value='".$this->row['barrio']."'></td> 
        </tr>
        <tr> 
            <td width='50%'><p align='center'><b>Telefono domicilio </b></td> 
            <td width='50%'><p align='center'><input class='ocho' type='text' name='tel_domicilio' size='20' value='".$this->row['tel_domicilio']."'></td> 
        </tr>
        <tr> 
            <td width='50%'><p align='center'><b>Celular </b></td> 
            <td width='50%'><p align='center'><input class='ocho' type='text' name='cel_domicilio' size='20' value='".$this->row['cel_domicilio']."'></td> 
        </tr>
        <tr> 
            <td width='50%'><p align='center'><b>EPS </b></td> 
            <td width='50%'><p align='center'><input class='ocho' type='text' name='eps' size='20' value='".$this->row['eps']."'></td> 
        </tr>
        <tr> 
            <td width='50%'><p align='center'><b>ARL </b></td> 
            <td width='50%'><p align='center'><input class='ocho' type='text' name='arl' size='20' value='".$this->row['arl']."'></td> 
        </tr>
        <tr> 
            <td width='50%'><p align='center'><b>Fondo de pensiones </b></td> 
            <td width='50%'><p align='center'><input class='ocho' type='text' name='fondo_pensiones' size='20' value='".$this->row['fondo_pensiones']."'></td> 
        </tr>
        <tr> 
            <td width='50%'><p align='center'><b>Caja de compensacion </b></td> 
            <td width='50%'><p align='center'><input class='ocho' type='text' name='caja_compensacion' size='20' value='".$this->row['caja_compensacion']."'></td> 
        </tr>
        <tr> 
            <td width='50%'><p align='center'><b>Nombre contacto familiar </b></td> 
            <td width='50%'><p align='center'><input class='ocho' type='text' name='nom_cntcto_fmliar' size='20' value='".$this->row['nom_cntcto_fmliar']."'></td> 
        </tr>
        <tr> 
            <td width='50%'><p align='center'><b>Parentesco </b></td> 
            <td width='50%'><p align='center'><input class='ocho' type='text' name='parentesco' size='20' value='".$this->row['parentesco']."'></td> 
        </tr>
        

 <tr> 
            <td width='50%'><p align='center'><b>Telefono familiar </b></td> 
            <td width='50%'><p align='center'><input class='ocho' type='text' name='tel_fmliar' size='20' value='".$this->row['tel_fmliar']."'></td> 
        </tr>
         <tr> 
            <td width='50%'><p align='center'><b>Celular familiar </b></td> 
            <td width='50%'><p align='center'><input class='ocho' type='text' name='cel_fmliar' size='20' value='".$this->row['cel_fmliar']."'></td> 
        </tr>
         <tr> 
            <td width='50%'><p align='center'><b>Nombre empresa </b></td> 
            <td width='50%'><p align='center'><input class='ocho' type='text' name='nombre_empresa' size='20' value='".$this->row['nombre_empresa']."'></td> 
        </tr>
         <tr> 
            <td width='50%'><p align='center'><b>telefono </b></td> 
            <td width='50%'><p align='center'><input class='ocho' type='text' name='telefono' size='20' value='".$this->row['telefono']."'></td> 
        </tr>
         <tr> 
            <td width='50%'><p align='center'><b>Oficio habitual </b></td> 
            <td width='50%'><p align='center'><input class='ocho' type='text' name='oficio_habitual' size='20' value='".$this->row['oficio_habitual']."'></td> 
        </tr>
         <tr> 
            <td width='50%'><p align='center'><b>Deporte que practica </b></td> 
            <td width='50%'><p align='center'><input class='ocho' type='text' name='deporte_practicar' size='20' value='".$this->row['deporte_practicar']."'></td> 
        </tr>
         <tr> 
            <td width='50%'><p align='center'><b>Evaluador </b></td> 
            <td width='50%'><p align='center'><input class='ocho' type='text' name='evaluador' size='20' value='".$this->row['evaluador']."'></td> 
        </tr>
        <tr> 
            
         
        <input type='hidden' name='documento'> 
        </table>
        <br>
        
            <td width='100%' colspan='10'> 
            <center> <p class='dos'>Complete INFORMACIÓN OCUPACIONAL</p></center></td></td></td> 
               
            
             
        </tr>
        
 <tr> 

    <table border='1' class='ocho' width='600' style='font-family: Verdana; font-size: 8pt'> 
 

            <td width='50%'><p align='center'><b>Click en nivel academico </b></td> 
            
        <td><input class='ocho' class='siete'  type='text'  name='nivel_academico_actual' size='12'  value='".$this->row['nivel_academico_actual']."'>&nbsp<select  class='ocho' type = 'text' name='nivel_academico_actual' value='".$this->row['nivel_academico_actual']."'>

  <option value='grado 0'>Grado 0</option>
  <option value='primaria'>Primaria</option>
  <option value='bachillerato'>Bachillerato</option>
  <option value='tecnico'>Tècnico</option >
    <option value='tecnologo'>Tecnòlogo</option >
  <option value='universitario'>Universitario</option >
  <option value='especialización'>Especialización</option >
  <option value='maestría'>Maestría</option >
  <option value='doctorado'>Doctorado</option >

</select >   </td> 


        </tr>
        


<tr> 
            <td width='50%'><p align='center'><b>Actualmente estudia </b></td> 
<td><input class='ocho'  type='text'  name='estudiando' size='5'  value='".$this->row['estudiando']."'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<select class='ocho' name='estudiando' value='".$this->row['estudiando']."'><!--La referencia para recuperar el valor de select se declara aquí en el atributo name-->
			
			<option value='si'><h1>SI<h1>	</option><!--en los option del select se definirán los valores de este-->
			<option value='no'><h1>NO<h1>	</option>
			
			
			</select></td> </tr>
                         <tr> 
            <td width='50%'><p align='center'><b>Profesión y/o oficio </b></td> 
            <td width='50%'><p align='center'><input class='ocho' type='text' name='profesion' size='20' value='".$this->row['profesion']."'></td> 
        </tr>
         <tr> 
            <td width='50%'><p align='center'><b>Tiempo de experiencia profesional </b></td> 
            <td width='50%'><p align='center'><input class='ocho' type='text' name='timp_exp_profesional' size='20' value='".$this->row['timp_exp_profesional']."'></td> 
        </tr>
 <tr> 
            <td width='50%'><p align='center'><b>Cargo al que aspira o actual </b></td> 
            <td width='50%'><p align='center'><input class='ocho' type='text' name='cargo_aspra_actl' size='20' value='".$this->row['cargo_aspra_actl']."'></td> 
        </tr>
<tr> 
            <td width='50%'><p align='center'><b>Tiempo en el cargo </b></td> 
            <td width='50%'><p align='center'><input class='ocho' type='text' name='tiemp_en_cargo' size='20' value='".$this->row['tiemp_en_cargo']."'></td> 
        </tr>
        <tr> 
            <td width='50%'><p align='center'><b>Tipo de cargo </b></td> 
<td><select class='ocho' name='tipo_cargo' value='".$this->row['tipo_cargo']."'><!--La referencia para recuperar el valor de select se declara aquí en el atributo name (1)-->
			
			<option value='Operativo'><h1>Operativo<h1>	</option><!--en los option del select se definirán los valores de este-->
			<option value='Auxiliar/tecnico'><h1>Auxiliar / Técnico<h1>	</option>
			<option value='Profesional'><h1>Profesional<h1>	</option>
			<option value='Jefatura'><h1>Jefatura<h1>	</option>
			
			
			</select></td> </tr>
                        
<tr> 
            <td width='50%'><p align='center'><b>Centro al que pertenece </b></td> 
            <td width='50%'><p align='center'><input class='ocho' type='text' name='centro_al_que_pertene' size='20' value='".$this->row['centro_al_que_pertene']."'></td> 
        </tr>
        <tr> 
            <td width='50%'><p align='center'><b>Dependencia </b></td> 
            <td width='50%'><p align='center'><input class='ocho' type='text' name='dependencia' size='20' value='".$this->row['dependencia']."'></td> 
        </tr>
        


        
<tr> 
            <td width='50%'><p align='center'><b>Jornada de trabajo </b></td>         
<td><label></label></b><input  class='ocho'  type='text' name='jornada_de_trabajo[]' size='26' value='".$this->row['jornada_de_trabajo']."'>&nbsp <INPUT class='ocho' TYPE='checkbox'  name='jornada_de_trabajo[]'    size='20'  value='manana' <?php   
    if('manana'=== '".$this->row['jornada_de_trabajo']."'){ echo 'checked='checked'';}       ?> <b>Mañana</b>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<INPUT TYPE='checkbox' name='jornada_de_trabajo[]'  size='20' value='tarde'  ><b>Tarde</b>  
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp<INPUT TYPE='checkbox' name='jornada_de_trabajo[]' size='20' value='noche'    ><b>Noche</b>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp<INPUT TYPE='checkbox' name='jornada_de_trabajo[]' size='20' value='rotativo'   ><b>Rotativo</b>

</td> 


</tr>
                    









<tr> 
            <td  width='50%' ><p align='center'><b>Extra </b></td> 
<td><input class='ocho'  type='text'  name='extra' size='5'  value='".$this->row['extra']."'><select  class='ocho' name='extra' value='".$this->row['extra']."'>
			
			<option  value='si'><h1>SI<h1>	</option>
			<option value='no'><h1>NO<h1>	</option>
</select></td></td></tr>
    









<tr> 
            <td width='50%'><p align='center'><b>Trabajo a realizar </b></td> 
<td><input class='ocho'  type='text'  name='manip_alimtos' size='5'  value='".$this->row['manip_alimtos']."'><select class='ocho' name='manip_alimtos' value='".$this->row['manip_alimtos']."'> 
			
			<option value='si'><h1>SI<h1>	</option>
			<option value='no'><h1>NO<h1>	</option>
			
			
			
			  </select><b>&nbsp Manipulación de alimentos 
                             









</p>


<input class='ocho'  type='text' name='traba_altras' size='5'  value='".$this->row['traba_altras']."'><select class='ocho' name='traba_altras' value='".$this->row['traba_altras']."'> 
			
			<option value='si'><h1>SI<h1>	</option><!--en los option del select se definirán los valores de este-->
			<option value='no'><h1>NO<h1>	</option>
			
			
			
			</select><b>&nbsp Trabajo en alturas </td> </tr>
                        
<tr>
            <td width='50%'><p align='center'><b>DESCRIPCIÓN DEL CARGO / MOTIVO DE CONSULTA / ENFERMEDAD ACTUAL </b></td> 

                <td><textarea class='ocho' name ='desc_car_mot_const_enfer_actu'     rows='5' cols='50'    required  >".$this->row['desc_car_mot_const_enfer_actu']." </textarea></td>

</tr>


<tr> <td width='50%'><p align='center'>Nombre de la entidad con la que trabaja o trabajo</td><td><input class='ocho'  type='text' name='enti_donde_a_trabj' size='35' value='".$this->row['enti_donde_a_trabj']."'></td> </tr>


</td> </tr>







<tr>
            <td width='50%'><p align='center'><b>Cargo que desempeña o desempeño </b></td> 

            <td width='50%'><p align='center'><input class='ocho' type='text' name='cargo_que_desempena_o_desempeno' size='20' value='".$this->row['cargo_que_desempena_o_desempeno']."'></td> 

</tr>


<tr> 
            <td width='50%'><p align='center'><b>Tiempo laborado </b></td> 
<td><input class='ocho'  type='text'  name='tiempo_laborado_amos' size='5'  value='".$this->row['tiempo_laborado_amos']."'><select class='ocho' name='tiempo_laborado_amos' value='".$this->row['tiempo_laborado_amos']."'> 
			
			<option value='1'><h1>1<h1>	</option>
			<option value='2'><h1>2<h1>	</option>
			<option value='3'><h1>3<h1>	</option>
			<option value='4'><h1>4<h1>	</option>
			<option value='5'><h1>5<h1>	</option>
			<option value='6'><h1>6<h1>	</option>
			<option value='7'><h1>7<h1>	</option>
			<option value='8'><h1>8<h1>	</option>
			<option value='9'><h1>9<h1>	</option>
			<option value='10'><h1>10<h1>	</option>
			<option value='11'><h1>11<h1>	</option>
			<option value='12'><h1>12<h1>	</option>
			<option value='13'><h1>13<h1>	</option>
			<option value='14'><h1>14<h1>	</option>
			<option value='15'><h1>15<h1>	</option>
			<option value='16'><h1>16<h1>	</option>
			<option value='17'><h1>17<h1>	</option>
			<option value='18'><h1>18<h1>	</option>
			<option value='19'><h1>19<h1>	</option>
			<option value='20'><h1>20<h1>	</option>
			<option value='21'><h1>21<h1>	</option>
			<option value='22'><h1>22<h1>	</option>
			<option value='23'><h1>23<h1>	</option>
			<option value='24'><h1>24<h1>	</option>
			<option value='25'><h1>25<h1>	</option>
			<option value='26'><h1>26<h1>	</option>
			
			
			
			  </select><b>&nbsp Años 
                            
</p>


<input class='ocho'  type='text' name='tiempo_laborado_meses' size='5'  value='".$this->row['tiempo_laborado_meses']."'><select class='ocho' name='tiempo_laborado_meses' value='".$this->row['tiempo_laborado_meses']."'> 
			
			<option value='1'><h1>1<h1>	</option>
			<option value='2'><h1>2<h1>	</option>
			<option value='3'><h1>3<h1>	</option>
			<option value='4'><h1>4<h1>	</option>
			<option value='5'><h1>5<h1>	</option>
			<option value='6'><h1>6<h1>	</option>
			<option value='7'><h1>7<h1>	</option>
			<option value='8'><h1>8<h1>	</option>
			<option value='9'><h1>9<h1>	</option>
			<option value='10'><h1>10<h1>	</option>
			<option value='11'><h1>11<h1>	</option>
			<option value='12'><h1>12<h1>	</option>
			<option value='13'><h1>13<h1>	</option>
			<option value='14'><h1>14<h1>	</option>
			<option value='15'><h1>15<h1>	</option>
			<option value='16'><h1>16<h1>	</option>
			<option value='17'><h1>17<h1>	</option>
			<option value='18'><h1>18<h1>	</option>
			<option value='19'><h1>19<h1>	</option>
			<option value='20'><h1>20<h1>	</option>
			<option value='21'><h1>21<h1>	</option>
			<option value='22'><h1>22<h1>	</option>
			<option value='23'><h1>23<h1>	</option>
			<option value='24'><h1>24<h1>	</option>
			<option value='25'><h1>25<h1>	</option>
			<option value='26'><h1>26<h1>	</option>
			
			
			
			</select><b>&nbsp Meses </td> </tr>

















     <tr>            <td width='100%' colspan='2'> 

         <center>  <input class='uno' type='submit' value='Actualizar datos'></center></tr>
         

        </form>  
    </table> 
</div> 
"; 
}
        
        
        
       // $var=$this->row[0];
        //$var1=$this->row[1];
       // echo $row["$documento"].", ".$row["tipo_doc"]." , ".$row["fecha"]." , ".$row["genero"]."<br>";
    /*     echo "<table border='5'  class='alexander'><form  method ='POST'>

             

<tr><td>Numero documento</td><td>Tipo de documento</td><td>Fecha</td>
         </tr><tr>";
         
  
 echo "<td>".$this->row['num_documento']."</td><td>".$this->row['tipo_doc']."</td><td>".$this->row['fecha']."</td>";
  echo "<tr><td>Genero</td><td>Primer nombre</td><td>Segundo nombre</td>
         </tr><tr>";
 echo     "<td>".$this->row['genero']."</td><td>".$this->row['primer_nombre']."</td><td>".$this->row['segundo_nombre']."</td>";
  echo "<tr><td>Primer apellido</td><td>Segundo apellido</td><td>Fecha de nacimiento</td>
         </tr><tr>";
 echo     "<td>".$this->row['primer_apellido']."</td><td>".$this->row['segundo_apellido']."</td><td>".$this->row['fch_nacimiento']."</td>";
 
 
 
 
 
   
 echo "<tr><td>Edad</td><td>Lugar de nacimiento</td><td>Estado civil</td>
         </tr><tr>";
 echo     "<td>".$this->row['edad']."</td><td>".$this->row['lugar_nacimiento']."</td><td>".$this->row['estado_civil']."</td>";
 
 
 echo "<tr><td>Direccion domicilio</td><td>Barrio</td><td>Telefono domicilio</td>
         </tr><tr>";
 echo     "<td>".$this->row['direccion_domicilio']."</td><td>".$this->row['barrio']."</td><td>".$this->row['tel_domicilio']."</td>";
 
 
 echo "<tr><td>Celular</td><td>EPS</td><td>ARL</td>
         </tr><tr>";
 echo     "<td>".$this->row['cel_domicilio']."</td><td>".$this->row['eps']."</td><td>".$this->row['arl']."</td>";
 
 
 echo "<tr><td>Fondo de pensiones</td><td>Caja de compensacion</td><td>Fecha de nacimiento</td>
         </tr><tr>";
 echo     "<td>".$this->row['fondo_pensiones']."</td><td>".$this->row['caja_compensacion']."</td><td>".$this->row['fch_nacimiento']."</td>";
 
 
 echo "<tr><td>Nombre contacto familiar</td><td>Parentesco</td><td>Telefono familiar</td>
         </tr><tr>";
 echo     "<td>".$this->row['nom_cntcto_fmliar']."</td><td>".$this->row['parentesco']."</td><td>".$this->row['tel_fmliar']."</td>";
 
 
 
 
 echo "<tr><td>Celular familiar</td><td>Nombre empresa</td><td>Telefono</td>
         </tr><tr>";
 echo     "<td>".$this->row['cel_fmliar']."</td><td>".$this->row['nombre_empresa']."</td><td>".$this->row['telefono']."</td>";
 
 
 echo "<tr><td>Oficio habitual</td><td>Deporte que practica</td><td>Evaluador</td>
         </tr><tr>";
 echo     "<td>".$this->row['oficio_habitual']."</td><td>".$this->row['deporte_practicar']."</td><td>".$this->row['evaluador']."</td>";
 

 
 
 
 
 echo "</tr></table>";

      // "<p>Numero de documento</p><input title = 'se necesita llenar' type = 'text' name = 'documento' placeholder = 'Numero documento' required/><?php echo $var>";

    }
}
  }
}
}
                

    
        /*
               echo "<tr>";
 
              echo "<td>",$this->row['num_documento'],"</td><td>", $this->row['tipo_doc'],"</td>
                       <td>",$this->row['fecha'],"</td><td>", $this->row['genero'],"</td>
                       <td>",$this->row['primer_nombre'],"</td><td>", $this->row['segundo_nombre'],"</td>
                       <td>",$this->row['primer_apellido'],"</td><td>", $this->row['segundo_apellido'],"</td>
                       <td>",$this->row['fch_nacimiento'],"</td><td>", $this->row['edad'],"</td>
                       <td>",$this->row['lugar_nacimiento'],"</td><td>", $this->row['estado_civil'],"</td>
                       <td>",$this->row['direccion_domicilio'],"</td><td>", $this->row['barrio'],"</td>
                       <td>",$this->row['tel_domicilio'],"</td><td>", $this->row['cel_domicilio'],"</td>
                       <td>",$this->row['eps'],"</td><td>", $this->row['arl'],"</td>
                       <td>",$this->row['fondo_pensiones'],"</td><td>", $this->row['caja_compensacion'],"</td>
         * 
         * 
                       <td>",$this->row['nom_cntcto_fmliar'],"</td><td>", $this->row['parentesco'],"</td>
                       <td>",$this->row['tel_fmliar'],"</td><td>", $this->row['cel_fmliar'],"</td>
         * 
         * 
         * 
                       <td>",$this->row['nombre_empresa'],"</td><td>", $this->row['telefono'],"</td>
                       <td>",$this->row['oficio_habitual'],"</td><td>", $this->row['deporte_practicar'],"</td>
                       <td>",$this->row['evaluador'],"</td>";
               
echo "</tr>";}  
       */    
    /* $this->con= mysql_query("SELECT * FROM registro_usuario WHERE wisher_id='".$_SESSION['id']."'" , $this->conexion);

         
while($this->row = mysql_fetch_array($this->con)){
               
               echo "<tr>";
               
               echo "<td>",$this->row['num_documento'],"</td><td>", $this->row['tipo_doc'],"</td>
                       <td>",$this->row['fecha'],"</td><td>", $this->row['genero'],"</td>
                       <td>",$this->row['primer_nombre'],"</td><td>", $this->row['segundo_nombre'],"</td>
                       <td>",$this->row['primer_apellido'],"</td><td>", $this->row['segundo_apellido'],"</td>
                       <td>",$this->row['fch_nacimiento'],"</td><td>", $this->row['edad'],"</td>
                       <td>",$this->row['lugar_nacimiento'],"</td><td>", $this->row['estado_civil'],"</td>
                       <td>",$this->row['direccion_domicilio'],"</td><td>", $this->row['barrio'],"</td>
                       <td>",$this->row['tel_domicilio'],"</td><td>", $this->row['cel_domicilio'],"</td>
                       <td>",$this->row['eps'],"</td><td>", $this->row['arl'],"</td>
                       <td>",$this->row['fondo_pensiones'],"</td><td>", $this->row['caja_compensacion'],"</td>
                       <td>",$this->row['nom_cntcto_fmliar'],"</td><td>", $this->row['parentesco'],"</td>
                       <td>",$this->row['tel_fmliar'],"</td><td>", $this->row['cel_fmliar'],"</td>
                       <td>",$this->row['nombre_empresa'],"</td><td>", $this->row['telefono'],"</td>
                       <td>",$this->row['oficio_habitual'],"</td><td>", $this->row['deporte_practicar'],"</td>
                       <td>",$this->row['evaluador'],"</td>";
               
               echo "</tr>";
}*/



    

  
    

    }else 
    echo "Debes escribir un numero de documento existente";
}

  }
  
  
   public function editar($documento, $tipo_doc, $fecha, $genero, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido,
        $fch_nacimiento, $edad, $lugar_nacimiento, $estado_civil, $direccion_domicilio, $barrio, $tel_domicilio, $cel_domicilio, $eps, $arl, $fondo_pensiones, $caja_compensacion, $nom_cntcto_fmliar,
                $parentesco, $tel_fmliar, $cel_fmliar, $nombre_empresa, $telefono, $oficio_habitual, $deporte_practicar, $evaluador, $nivel_academico_actual, $estudiando, $profesion, $timp_exp_profesional,
           $cargo_aspra_actl, $tiemp_en_cargo, $tipo_cargo, $centro_al_que_pertene, $dependencia, $jornada_de_trabajo, $extra, $manip_alimtos, $traba_altras, $desc_car_mot_const_enfer_actu, $enti_donde_a_trabj,
           $cargo_que_desempena_o_desempeno, $tiempo_laborado_amos, $tiempo_laborado_meses){
       
       
       $this->documento = $documento; 
           $this->tipo_doc = $tipo_doc; 
           $this->fechak = $fecha;
           
           $this->genk=$genero;
           $this->prinomk = $primer_nombre;
            $this->segnomk = $segundo_nombre;
            $this->priapek = $primer_apellido;
            $this->segapek = $segundo_apellido;
            $this->nacik = $fch_nacimiento;
            $this->edk = $edad;
            $this->lugnacik= $lugar_nacimiento;
            $this->estak = $estado_civil;
            $this->didomk = $direccion_domicilio;
            $this->bak =$barrio;
             $this->tedomk =$tel_domicilio;
             $this->celdomk =$cel_domicilio;
             $this->epk =$eps;
             $this->ark =$arl;
             $this->fonpenk =$fondo_pensiones;
             $this->cacomk =$caja_compensacion;
             $this->nomcontak =$nom_cntcto_fmliar;
             $this->parenk =$parentesco;
             $this->telfk =$tel_fmliar;
             $this->celfk =$cel_fmliar;
              $this->nomemk =$nombre_empresa;
              $this->telk =$telefono;
             $this->ofihak =$oficio_habitual;
              $this->depork =$deporte_practicar;
             $this->evak =$evaluador;
              $this->nivel_academico_actual =$nivel_academico_actual;
              $this->estudiando =$estudiando;
              $this->profesion =$profesion;
              $this->timp_exp_profesional =$timp_exp_profesional;
              $this->cargo_aspra_actl  = $cargo_aspra_actl;
              $this->tiemp_en_cargo  =$tiemp_en_cargo ;
              $this->tipo_cargo = $tipo_cargo;
              $this->centro_al_que_pertene  = $centro_al_que_pertene ;
               $this->dependencia  = $dependencia ;
                $this->jornada_de_trabajo  = $jornada_de_trabajo ;
              $this->extra  = $extra ;
               $this->manip_alimtos  = $manip_alimtos ;
                 $this->traba_altras  = $traba_altras ;
                  $this->desc_car_mot_const_enfer_actu  = $desc_car_mot_const_enfer_actu ;
               $this->enti_donde_a_trabj=$enti_donde_a_trabj;
              $this->cargo_que_desempena_o_desempeno=$cargo_que_desempena_o_desempeno;

              $this->tiempo_laborado_amos=$tiempo_laborado_amos;
              $this->tiempo_laborado_meses=$tiempo_laborado_meses;

                 

              
                     
              

           
           
    mysql_query("UPDATE registro_usuario SET tipo_doc='".$this->tipo_doc."', fecha='".$this->fechak."', genero='".$this->genk."', primer_nombre='".$this->prinomk."',segundo_nombre='".$this->segnomk."',primer_apellido='".$this->priapek."',       
    segundo_apellido='".$this->segapek."', fch_nacimiento='".$this->nacik."',edad='".$this->edk."',lugar_nacimiento='".$this->lugnacik."',estado_civil='".$this->estak."',
    direccion_domicilio='".$this->didomk."', barrio='".$this->bak."',tel_domicilio='".$this->tedomk."',cel_domicilio='".$this->celdomk."',eps='".$this->epk."',                     
    arl='".$this->ark."', fondo_pensiones='".$this->fonpenk."',caja_compensacion='".$this->cacomk."',nom_cntcto_fmliar='".$this->nomcontak."',parentesco='".$this->parenk."',tel_fmliar='".$this->telfk."', cel_fmliar='".$this->celfk."',nombre_empresa='".$this->nomemk."',telefono='".$this->telk."',
    oficio_habitual='".$this->ofihak."' ,deporte_practicar='".$this->depork."',evaluador='".$this->evak."', nivel_academico_actual='".$this->nivel_academico_actual."', estudiando='".$this->estudiando."', profesion='".$this->profesion."',
    timp_exp_profesional='".$this->timp_exp_profesional."' , cargo_aspra_actl='".$this->cargo_aspra_actl."', tiemp_en_cargo='".$this->tiemp_en_cargo."', tipo_cargo='".$this->tipo_cargo."', centro_al_que_pertene='".$this->centro_al_que_pertene."',  dependencia='".$this->dependencia."', jornada_de_trabajo='".$this->jornada_de_trabajo."',       
    extra='".$this->extra."', manip_alimtos='".$this->manip_alimtos."', traba_altras='".$this->traba_altras."', desc_car_mot_const_enfer_actu='".$this->desc_car_mot_const_enfer_actu."', enti_donde_a_trabj='".$this->enti_donde_a_trabj."', cargo_que_desempena_o_desempeno='".$this->cargo_que_desempena_o_desempeno."',
    tiempo_laborado_amos='".$this->tiempo_laborado_amos."', tiempo_laborado_meses='".$this->tiempo_laborado_meses."'   



    where num_documento = '".$this->documento."'", $this->conexion);
echo " 
<p>Los datos han sido actualizados con exito.</p>
            <a href ='../vistas/consulta.php' class = 'uno'>Volver...</a>"    

    ; 

           
              }}

      
          
                


?>