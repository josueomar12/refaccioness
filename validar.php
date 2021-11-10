
<?php
include_once 'Db.php';
if(isset($_POST['iniciar']))
{
     $Correo= $MySQLiconn->real_escape_string($_POST['Correo']);
     $Contraseña = $MySQLiconn->real_escape_string($_POST['Contraseña']);
    $consulta="SELECT * FROM registro WHERE Correo='$Correo' and Contraseña='$Contraseña'";
    $resultado=mysqli_query($MySQLiconn,$consulta);

    $filas=mysqli_num_rows($resultado);

    if($filas>0){
        header("location:index.php");
    }
    else{
       
        echo "<script>
                alert('ERROR ,PRIMERO REGISTRATE PARA INICIAR SESION');
                window.location= 'inicio.php'
    </script>";
        
    
      
             
        
    }
} 

?>

