<?php
include_once 'Db.php';
if(isset($_POST['Guardar']))
{
		
	 echo "Guardandoooooooooooooooooooo";
     
     $Nombre = $MySQLiconn->real_escape_string($_POST['Nombre']);
 	   $Correo = $MySQLiconn->real_escape_string($_POST['Correo']);
     $Usuario = $MySQLiconn->real_escape_string($_POST['Usuario']);
     $Contraseña = $MySQLiconn->real_escape_string($_POST['Contraseña']);
 	   

  $SQL = $MySQLiconn->query("INSERT INTO registro(Nombre,Correo,Usuario,Contraseña) VALUES('$Nombre','$Correo','$Usuario','$Contraseña')");
  
  if(!$SQL)
  {
   echo $MySQLiconn->error;
  } 
  header("Location:login.php");
}

/* Codigo para eliminar Datos */
if(isset($_GET['eliminar']))
{
 $SQL = $MySQLiconn->query("DELETE FROM registro WHERE Idregistro=".$_GET['eliminar']);
 header("Location:login.php");
}


/* Codigo para Editar Datos */
if(isset($_GET['editar']))
{

 $SQL = $MySQLiconn->query("SELECT * FROM registro WHERE Idregistro=".$_GET['editar']);
 $getROW = $SQL->fetch_array();
}

/* Codigo para Actualizar Datos */
if(isset($_POST['actualizar']))
{
 $SQL = $MySQLiconn->query(
                          "UPDATE registro SET Idregistro='" 
                          . $_POST['Idregistro']
                          . "', Nombre='"
                          . $_POST['Nombre']
                          . "', Correo='"
                          . $_POST['Correo']
                          . "',Usuario='"
                          . $_POST['Usuario']
                          . "', Contraseña='"
                          . $_POST['Contraseña']
                          . "' WHERE Idregistro="
                          . $_GET['editar']);

 header("Location:login.php");
}

?>