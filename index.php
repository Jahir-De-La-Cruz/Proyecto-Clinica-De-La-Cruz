<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica De La Cruz</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/estilos.css?v12">
</head>
<body>
    
    <header>
        <a href="#" class="logo">
            <img src="img/logo.png" alt="logo">
            <h2 class="logo-titulo">ClínicaDLC</h2>
        </a>
        <nav>
            <ul class="enlaces">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="#Servicios">Servicios</a></li>                    
                <li><a href="#Calendario">Calendario</a></li>
                <li><a href="#AgendarCita">Agenda tu cita hoy!</a></li>
            </ul>
        </nav>
    </header>

    <section class="seccion-info">
        <div class="seccion-info__imagen">
            <img src="img/doctores.png" alt="Doctores">
        </div>
        <div class="seccion-info__textos">
            <h2 class="seccion-info__titulo">Con mas de 15 años de experiencia!</h2>
            <p class="seccion-info__descripcion">
                En Clínica "De La Cruz" hemos sido reconocidos a nivel Mundial por nuestro gran desempeño y profesionalidad
                de nuestros doctores. Con más de 15 años de experiencia y más de 50 sucursales en todo el país. Fundada por
                el Doctor Jahir De La Cruz.
            </p>
        </div>
        <div class="seccion-info__boton">
            <a href="#">Más Información</a>
        </div>
    </section>

    <section class="Servicios" id="Servicios">
        <h3>Nuestros Servicios</h3>
        <div class="servicios-contenido">
            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-hospital-user"></i>
                <h2>Pediatría</h2>
            </div>
            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-stethoscope"></i>
                <h2>Dermatología</h2>
            </div>
            <div class="servicio-1">
                <i class="fa-solid fa-hospital"></i>
                <h2>Cardiología</h2>
            </div>
            <div class="servicio-1">
                <i class="fa-solid fa-user-doctor"></i>
                <h2>Psicología</h2>
            </div>
        </div>
    </section>

    <section class="calendario-fechas" id="Calendario">
        <h3>Revisa el mini calendario para ver fechas</h3>
        <input type="date">
    </section>

    <section class="card" id="AgendarCita">
        <div class="formulario-cita">
            <form action="php/Agendar_cita.php" method="POST" autocomplete="off" id="agendar_cita_form">
                <h2>Agenda tu cita</h2>
                <div class="input-grupo">
                    <div class="input-contenedor">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="Nombre" placeholder="Nombre y Apellido" required>
                    </div>
                    <div class="input-contenedor">
                        <i class="fa-solid fa-phone"></i>
                        <input type="tel" name="Telefono" placeholder="Telefono Celular" required>
                    </div>    
                    <div class="input-contenedor">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="Correo" placeholder="Correo Electrónico" required>
                    </div>
                    <div class="input-contenedor">
                        <i class="fa-solid fa-calendar"></i>
                        <input type="date" name="FechaCita" required>
                    </div>
                    <div class="input-contenedor">
                        <i class="fa-solid fa-clock"></i>
                        <input type="time" name="Hora" required>
                    </div>
                    <div class="input-contenedor">
                        <textarea name="Mensaje" placeholder="Detalle de la Consulta" required></textarea>
                    </div>
                    <input type="submit" name="send" class="btn" value="Agendar Cita">
                </div>
            </form>
        </div>
    </section>
          
    <footer>
        <div class="footer-content">
            <div class="footer-content__titulo">
                <h2 class="titulo">Clínica De La Cruz</h2>
            </div>
            <div class="footer-content__redes">
                <a class="fab fa-facebook-f footer__icon" href="#"></a>
                <a class="fab fa-instagram footer__icon" href="#"></a>
                <a class="fab fa-twitter footer__icon" href="#"></a>
            </div>
        </div>
        <h3 class="end-title">&copy; ClínicaDLC | Todos los derechos reservados</h3>
    </footer>

</body>
</html>