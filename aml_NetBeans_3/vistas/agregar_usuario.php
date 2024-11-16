<?php
session_start();
if(isset ($_SESSION['id'])) {
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agregar usuarios</title>
        <link rel="stylesheet" type ="text/css" href="css/add_wish.css">
    </head>
    <body>
    <center>
        <a href ="menu.php" class = "uno">Volver a menu...</a>       
    <div class ="maik">   
        <table border="5"  class="alexander">
        <form  method ="POST">
            <h3 class = "title">Registro usuario</h3>
            
                          <tr><td> <p>Numero de documento</p><input title = "se necesita llenar" type = "text" name = "documento" placeholder = "Numero documento" required> 
                          </td><td>
             <p>Tipo de identificacion</p><select type = "text" name="tipo_doc">

  <option value="nuip">NUIP</option>
  <option value="cc">CC</option>
  <option value="ti">TI</option>
  <option value="ce">CE</option >
</select >
                
      </td><td>      <p>Fecha de diligenciamiento</p><input type="date" name="fecha"  title = "Se necesita fecha" required> 
      </td></tr><tr><td>

              <p>Ingrese genero</p><input title = "Se necesita genero" type = "text" id ="jinx" name="gen" required>
</td><td>
                
                 
                         <p>Ingrese primer nombre</p><input title = "Se necesita primer nombre" type = "text" id ="jinx" name="nom" required>
 </td><td>             
                        
                         
                         <p>Ingrese segundo nombre</p><input title = "Se necesita segundo nombre" type = "text" id ="jinx" name="segg" required>
</td></tr><tr><td>                

                        <p>Ingrese primer Apellido</p><input title = "Se necesita apellido" type = "text" id ="jinx" name="apelld" required>
</td><td>

                        <p>Ingrese segundo Apellido</p><input title = "Se necesita apellido" type = "text" id ="jinx" name="segunapelld" required>
</td><td>
 

                <p>Fecha de nacimiento</p> <input type="date" name="fecha1">
</td></tr><tr><td>
                
                

                        <p>Edad</p><input title = "Se necesita edad" type = "text" id ="jinx" name="edadd" required>
</td><td>             

                        <p>Lugar de nacimiento</p><input title = "Se necesita lugar" type = "text" id ="jinx" name="lugna" required>
</td><td>
                        <p>Estado civil</p><input title = "Se necesita estado" type = "text" id ="jinx" name="estad" required>
</td></tr><tr><td>
                        <p>Direccion domicilio</p><input title = "Se necesita direccion" type = "text" id ="jinx" name="dirdo" required>
</td><td>
                        <p>Barrio</p><input title = "Se necesita barrio" type = "text" id ="jinx" name="bar" required>
</td><td>
                        <p>Telefono domicilio</p><input title = "Se necesita tel" type = "text" id ="jinx" name="teldom" required>
</td></tr><tr><td>
                        <p>Celular domicilio</p><input title = "Se necesita edad" type = "text" id ="jinx" name="celdomi" required>
</td><td>
                        <p>EPS</p><input title = "Se necesita EPS" type = "text" id ="jinx" name="epss" required>
</td><td>
                        <p>ARL</p><input title = "Se necesita arl" type = "text" id ="jinx" name="arle" required>
</td></tr><tr><td>
                        <p>Fondo de pensiones</p><input title = "Se necesita llenar" type = "text" id ="jinx" name="fonpenn" required>
</td><td>
                        <p>Caja de compensacion</p><input title = "Se necesita llenar" type = "text" id ="jinx" name="cajacomp" required>
</td><td>
                        <p>Nombre contacto</p><input title = "Se necesita llenar" type = "text" id ="jinx" name="noncont" required>
</td></tr><tr><td>
                        <p>Parentesco</p><input title = "Se necesita llenar" type = "text" id ="jinx" name="parente" required>
</td><td>
                        <p>Telefono referencia</p><input title = "Se necesita llenar" type = "text" id ="jinx" name="telrefe" required>
</td><td>
                        <p>Celular refencia</p><input title = "Se necesita llenar" type = "text" id ="jinx" name="celrefe" required>
</td></tr><tr><td>
                        <p>Nombre empresa</p><input title = "Se necesita llenar" type = "text" id ="jinx" name="nomenpr" required>
</td><td>
                        <p>Telefono</p><input title = "Se necesita llenar" type = "text" id ="jinx" name="telll" required>
</td><td>
                        <p>Oficio habitual</p><input title = "Se necesita llenar" type = "text" id ="jinx" name="oficio" required>
                 
</td></tr><tr><td>
                        <p>Deporte que practica</p><input title = "Se necesita llenar" type = "text" id ="jinx" name="deport" required>
</td><td>                 

                        <p>Evaluador</p><p><input title = "Se necesita edad" type = "text" id ="jinx" name="evalu" required></p>
   
                          </td><td> 
 <!--               <table><input type="reset" value="Limpiar" class ="uno"> <input type="submit" value="Agregar usuario" class="uno">
                             <input TYPE="SUBMIT" NAME="buscar" VALUE="Buscar" class="dos">
                   <input action ="../controlador/consulta_usuario.php" method ="POST" TYPE="SUBMIT" NAME="buscar" VALUE="Buscar" ID="P" class="dos"/>
   -->
                   <input type="reset" value="Limpiar" class ="uno">
                                             </td></tr><tr><td></table> 

        <input class="dos" type="submit" onclick = "this.form.action = '../controlador/agregar_usuario.php'" value="Agregar Usuario" />
                   <input class="dos" type="submit" onclick = "this.form.action = '../controlador/consulta_usuario.php'" name="buscar" value="Buscar Usuario" />
               

                
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
