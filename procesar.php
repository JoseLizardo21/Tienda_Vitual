<?php
   $db_host = "localhost";
   $db_nombre = "hola";
   $db_usuario = "root";
   $db_contra = "";
   $conexion = mysqli_connect($db_host,$db_usuario,$db_contra); 
   if(mysqli_connect_errno()){
       echo "No se a podido conectar a la base de datos";
       exit();
   };
   mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la base de datos");
   mysqli_set_charset($conexion,"utf8");
   $consulta = "SELECT * FROM `imagenes` WHERE 1";
   $resultados = mysqli_query($conexion, $consulta);
   while($fila = mysqli_fetch_row($resultados)){
       echo '<img src="data:image/jpeg; base64,'.base64_encode($fila[1]).'">'; 
   };
   mysqli_close($conexion);
?>