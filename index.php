<?php
include_once 'crud.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Refacciones Leo</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <section class="contenedor nav">
                <div class="logo">
                    <img src="img/hf.png" alt="">
                </div>
                <div class="enlaces-header">
                    <a href="#">Inicio</a>
                    <a href="inicio.php">iniciar sesion</a>
                    <a href="login.php">registrarse</a>
                    <a href="conocenos.php">Conocenos</a>
                    <a href="citas.php">Agendar Cita</a>
                    <a href="factura.php">bitacora refacciones</a>
                </div>
                <div class="hamburguer">
                    <i class="fas fa-bars"></i>
                </div>
            </section>
        </nav>
        <div class="contenedor">
            <section class="contenido-header">
                <section class="textos-header">
                    <h1>Refacciones Leo</h1>
                    <p>La mejor calidad en servicios para tu auto</p>
                    <a href="citas.php">Reserva una cita ahora!!</a>
                </section>
                <img src="img/v.jpg" alt="">
            </section>
        </div>
    </header>
    <section class="about-us">
        <div class="contenedor1">
            <h2 class="titulo">Servicios Principales</h2>
            <div class="contenedor-articulo">
                <div class="articulo" data-aos="zoom-in-right">
                    <i class="fas fa-car-battery"></i>
                    <h3>Mecanico Electrico</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus maxime eius quo consequuntur magni. Quis voluptate repudiandae soluta quod mollitia!</p>
                    <a href="citas.php">Agenda tu cita</a>
                </div>
                <div class="articulo" data-aos="zoom-in-right">
                    <i class="fas fa-business-time"></i>
                    <h3>Instalacion de alarmas</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus maxime eius quo consequuntur magni. Quis voluptate repudiandae soluta quod mollitia!</p>
                    <a href="citas.php">Agenda tu cita</a>
                </div>
                <div class="articulo" data-aos="zoom-in-right">
                    <i class="fas fa-wrench"></i>
                    <h3>Mecanica</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus maxime eius quo consequuntur magni. Quis voluptate repudiandae soluta quod mollitia!</p>
                    <a href="citas.php">Agenda tu cita</a>
                </div>
            </div>
        </div>
        </div>
    </section>



    <section class="contenedor1 services">
        <img src="img/m.jpg" alt="">
        <div class="box-skills">
            <h4><i class="far fa-check-circle"></i> Servicio Mecanico</h4>
            <h4><i class="far fa-check-circle"></i> Electricidad</h4>
            <h4><i class="far fa-check-circle"></i> Vidrios Electricos</h4>
            <h4><i class="far fa-check-circle"></i> Equipo de audio</h4>
        </div>
    </section>

    <footer>
        <div class="partFooter">
            <img src="img/logo-jordan-alexander.png" alt="">
        </div>
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
</body>

</html>