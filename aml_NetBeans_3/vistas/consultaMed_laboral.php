<?php
session_start();
if(isset ($_SESSION['id'])) {
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Buscar paciente</title>
        <link rel="stylesheet" type ="text/css" href="css/add_wish.css">
    </head>
    <body>
    <center>
        <a href ="consulta.php" class = "uno">Volver ...</a>       
    <div class ="maik">   
        
        <form method ="POST" action="../controlador/consulta_Med_laboral.php">
            <h3 class = "title">Buscar paciente</h3>
            
            
            
 <p>Numero de documento</p><input title = "se necesita llenar" type = "text" name = "documento" placeholder = "Numero documento" required> 

            
             
 <!--               <table><input type="reset" value="Limpiar" class ="uno"> <input type="submit" value="Agregar usuario" class="uno">
                             <input TYPE="SUBMIT" NAME="buscar" VALUE="Buscar" class="dos">
                   <input action ="../controlador/consulta_usuario.php" method ="POST" TYPE="SUBMIT" NAME="buscar" VALUE="Buscar" ID="P" class="dos"/>
   -->
                   <input type="reset" value="Limpiar" class ="uno">
                  
                   <input type="submit" name="pre" />
</form>       

                </table>
        </form>     
    </div>                               

    </center>
    </body>
</html>
<?php
}else{
    echo"Debes iniciar sesion antes de acceder a esta pagina"; 
}
?>