<?php
include_once 'Db.php';
if(isset($_POST['Guardar']))
{
		
	 echo "Guardandoooooooooooooooooooo";
     
     $Nombre = $MySQLiconn->real_escape_string($_POST['Nombre']);
 	   $Numero = $MySQLiconn->real_escape_string($_POST['Numero']);
     $Codigo = $MySQLiconn->real_escape_string($_POST['Codigo']);
     $Descripcion = $MySQLiconn->real_escape_string($_POST['Descripcion']);
     $Cantidad = $MySQLiconn->real_escape_string($_POST['Cantidad']);
     $Precio = $MySQLiconn->real_escape_string($_POST['Precio']);
   
 	   

  $SQL = $MySQLiconn->query("INSERT INTO facturacion(Nombre,Numero,Codigo,Descripcion,Cantidad,Precio) VALUES('$Nombre','$Numero','$Codigo','$Descripcion','$Cantidad','$Precio')");
  
  if(!$SQL)
  {
   echo $MySQLiconn->error;
  } 
  header("Location:factura.php");
}

/* Codigo para eliminar Datos */
if(isset($_GET['eliminar']))
{
 $SQL = $MySQLiconn->query("DELETE FROM facturacion WHERE Idfacturacion=".$_GET['eliminar']);
 header("Location:factura.php");
}


/* Codigo para Editar Datos */
if(isset($_GET['editar']))
{

 $SQL = $MySQLiconn->query("SELECT * FROM facturacion WHERE Idfacturacion=".$_GET['editar']);
 $getROW = $SQL->fetch_array();
}

/* Codigo para Actualizar Datos */
if(isset($_POST['actualizar']))
{
 $SQL = $MySQLiconn->query(
                          "UPDATE facturacion SET Idfacturacion='" 
                          . $_POST['Idfacturacion']
                          . "', Nombre='"
                          . $_POST['Nombre']
                          . "', Numero='"
                          . $_POST['Numero']
                          . "',Codigo='"
                          . $_POST['Codigo']
                          . "', Descripcion='"
                          . $_POST['Descripcion']
                          . "', Cantidad='"
                          . $_POST['Cantidad']
                          . "', Precio='"
                          . $_POST['Precio']
                          . "' WHERE Idfacturacion="
                          . $_GET['editar']);

 header("Location:factura.php");
}

?>