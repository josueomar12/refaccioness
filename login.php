<?php
include_once 'Crud2.php';
?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
    <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
  </script>
  
  <link rel="stylesheet" type="text/css" href="../css/estilo5.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contactanos</title>
        <link rel="stylesheet" href="css/formulario.css">
        <link rel="stylesheet" href="css/estilos.css">

    </head>

    <body>
    
    
    
        <nav>
            <section class="contenedor nav">
                <div class="logo">
                    <img src="img/hf.png" alt="">
                </div>
                <div class="enlaces-header">
                    <a href="./index.php">Inicio</a>
                    <a href="./login.php">registrarse</a>
                    <a href="./inicio.php">Iniciar sesion</a>
                    <a href="./conocenos.php">Conocenos</a>
                    <a href="citas.php">Agendar Cita</a>
                    <a href="factura.php">bitacora refacciones</a>
                    
                </div>
                <div class="hamburguer">
                    <i class="fas fa-bars"></i>
                </div>
            </section>
        </nav>
     <form method="post">
        </div>
    <form method="post">
        <form action="">
        <form method="post">
          
            <br>
            <br>
            <br>
            <br>
            <form method="post">
            <h4>registrate</h4>
            <input type="text" class="form-control text-uppercase" id='Nombre' name="Nombre" placeholder="Nombre(s)" required
           value="<?php
                      if(isset($_GET['editar']))
                        echo $getROW['Nombre'];  
                  ?>" />
            <input type="text" class="form-control text-uppercase" name="Correo" placeholder="Correo"
          required value="<?php if(isset($_GET['editar'])) echo $getROW['Correo'];  ?>"  />
          <input type="text" class="form-control text-uppercase" name="Usuario" placeholder="Usuario"
          required value="<?php if(isset($_GET['editar'])) echo $getROW['Usuario'];  ?>" />
          
            <input type="text" class="form-control text-uppercase" name="Contraseña" placeholder="Contraseña"
          required value="<?php if(isset($_GET['editar'])) echo $getROW['Contraseña'];  ?>"  
          </div>
          
          
    <div class="form-group">	      
       <?php
        if(isset($_GET['editar']))
         {
       ?>
          <div class="col-12">
            <button type="submit" class="btn btn-primary" name="actualizar">Actualizar</button>
          </div>
      <?php
         }
         else
         {
      ?>
      <div class="col-12">	
      	 
        <button type="submit" class="btn btn-primary" name="Guardar">Guardar</button>
      </div>
      <?php
     }
     ?>	      
    </div>
 </form>
 </form>


 <h3>Listado de Clientes</h3>
 <table class="table table-hover table-bordered shadow p-3 mb-5 bg-danger rounded ">
    <tr>
    <th>Idcitas</th>
       <th>Nombre(s)</th>
       <th>Correo(s)</th>
       <th>Usuario</th>
       <th>Contraseña</th>
       <th>Acciones</th> 

         
    </tr>
    <?php
     $res = $MySQLiconn->query("SELECT * FROM registro");
      while($row=$res->fetch_array())
      {
     ?>
       <tr>
         <td> <?php echo $row['Idregistro']; ?> </td>
         <td> <?php echo $row['Nombre']; ?> </td>
         <td> <?php echo $row['Correo']; ?> </td>
         <td> <?php echo $row['Usuario']; ?> </td>

         <td> <?php echo $row['Contraseña']; ?> </td>
         
         <td>
           <a href="?editar=<?php echo $row['Idregistro']; ?>" onclick="return confirm('¿Deseas Editarlo ?'); ">

             <span class="glyphicon glyphicon-pencil"></span>

           </a>

           <a href="?eliminar=<?php echo $row['Idregistro']; ?>" onclick="return confirm('¿Seguro deseas eliminarlo?'); ">
             <span class="glyphicon glyphicon-trash"></span>
           </a>

           <a href="?imprimir=<?php echo $row['Idregistro']; ?>" onclick="return confirm('¿Deseas Imprimir ?'); ">

             <span class="glyphicon glyphicon-print"></span>

           </a>
         </td> 
       </tr>
       <?php
   }
   ?>
 </table>
 
</div>
<br><br>
<footer class="container-fluid text-center">
  <p>Copyright</p>  
  <div class="partFooter">
            <h4>Acerca de</h4>
            <a href="conocenos.php">Nosotros</a>
        </div>
        <div class="partFooter">
            <h4>Redes sociales</h4>
            <div class="social-media">
                <a href="https://www.facebook.com/refacciones.leo" target="_blank" class="fab fa-facebook-f"></a>
                <a href="https://wa.me/5219851008334?text=A%20tu%20servicio%20Refacciones%20Leo" target="_blank" class="fab fa-whatsapp"></a>
            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/c15b744a04.js" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
        </form>


        </header>



    </body>

    </html>