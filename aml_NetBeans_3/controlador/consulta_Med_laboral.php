

<?php
session_start();
if(isset ($_SESSION['id'])) {
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Modificar y Completar informacion</title>
        <link rel="stylesheet" type ="text/css" href="css/wish_list.css">
        <link rel="stylesheet" type ="text/css" href="css/tabla.css">
    </head>
    <body>
    <center>
        <a href ="..vistas/consultaMed_laboral.php" class = "uno">Volver...</a>    
        
    <div class ="maik">   
        
        
            
        
          
            
            <h3 class = "title">Usuario ...</h3>
           
             <table id="tabla">
           
                <tr>
                </tr>


<?php
include ("../modelo/interfazConect.php");
$documento = $_POST['documento'];
$pre = $_POST['pre'];



$interConexion = new interConexion(); 
$interConexion->busca_Med_laboral($documento, $pre);

?>
                
                
                
 </table>
         
            
            
   

      
           
    </div>  
    </center>
    </body>
</html>
<?php
}else{echo "Debes iniciar sesion antes de acceder a esta pagina"; } ?>