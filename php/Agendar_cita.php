<?php 

    //Incluye el archivo conexión a MySQL
    include 'conexion.php';

    //Declaracion de las variables
    $Nombre = $_POST['Nombre'];
    $Telefono = $_POST['Telefono'];
    $Correo = $_POST['Correo'];
    $FechaCita = $_POST['FechaCita'];
    $Hora = $_POST['Hora'];
    $Detalle = $_POST['Mensaje'];
    $FechaAgendado = date("d/m/y");

    //Verificar que la hora no se repita en la base de datos
    $verificar_hora = mysqli_query($conexion, "SELECT * FROM tabla_citas WHERE FechaCita = '$FechaCita' 
    AND Hora = '$Hora' ");
    if (mysqli_num_rows($verificar_hora) > 0) {
        echo '<script>
                alert("La hora y fecha seleccionadas están ocupadas, por favor selecciona otra");
                window.location = "../index.php";
            </script>';
        exit();
    }

    //Consulta para insertar registros en la tabla de citas
    $query = "INSERT INTO tabla_citas (NombreCompleto, Telefono, Correo, FechaCita, Hora, Detalle, FechaAgendado) VALUES 
    ('$Nombre','$Telefono', '$Correo', '$FechaCita', '$Hora', '$Detalle', '$FechaAgendado')";

    //Verificar que se haya registrado la cita
    $resultado = mysqli_query($conexion, $query);

    if ($resultado) {
        echo '<script>
            alert("Su cita ha sido asignada para el día ' . $FechaCita . ' a las ' . $Hora . '")
            window.location = "../index.php";
        </script>';
    } else {
        echo '<script>
            alert("Fallo al registrar la cita");
            window.location = "../index.php";
        </script>';
    }
    
?>