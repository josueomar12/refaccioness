<?php

include_once 'Db.php';

/* Codigo para Insertar Datos */
if(isset($_POST['Guardar']))
{
		
	 echo "Guardandoooooooooooooooooooo";
     
     $Nombre = $MySQLiconn->real_escape_string($_POST['Nombre']);
 	   $Telefono = $MySQLiconn->real_escape_string($_POST['Telefono']);
     $Fecha = $MySQLiconn->real_escape_string($_POST['Fecha']);
     $Hora = $MySQLiconn->real_escape_string($_POST['Hora']);
 	   $Tipotrabajo = $MySQLiconn->real_escape_string($_POST['Tipotrabajo']);

  $SQL = $MySQLiconn->query("INSERT INTO citas(Nombre,Telefono,Fecha,Hora,Tipotrabajo) VALUES('$Nombre','$Telefono','$Fecha','$Hora','$Tipotrabajo')");
  
  if(!$SQL)
  {
   echo $MySQLiconn->error;
  } 
  header("Location:citas.php");
}

if(isset($_GET['eliminar']))
{
 $SQL = $MySQLiconn->query("DELETE FROM citas WHERE Idcitas=".$_GET['eliminar']);
 header("Location:citas.php");
}


/* Codigo para Editar Datos */
if(isset($_GET['editar']))
{

 $SQL = $MySQLiconn->query("SELECT * FROM citas WHERE Idcitas=".$_GET['editar']);
 $getROW = $SQL->fetch_array();
}

/* Codigo para Actualizar Datos */
if(isset($_POST['actualizar']))
{
 $SQL = $MySQLiconn->query(
                          "UPDATE citas SET Idcitas='" 
                          . $_POST['Idcitas']
                          . "', Nombre='"
                          . $_POST['Nombre']
                          . "', Telefono='"
                          . $_POST['Telefono']
                          . "',Fecha='"
                          . $_POST['Fecha']
                          . "', Hora='"
                          . $_POST['Hora']
                          . "',Tipotrabajo='"
                          . $_POST['Tipotrabajo']
                          . "' WHERE Idcitas="
                          . $_GET['editar']);

 header("Location:citas.php");
}

?>