<?php
require 'Conexion_Listado_Pacientes.php';
session_start(); // Inicia la sesión PHP
$departmentId = isset($_SESSION['departmentId']) ? $_SESSION['departmentId'] : '';
$nombreUsuario = isset($_SESSION['nombre']) ? $_SESSION['nombre'] : '';
$apellidoUsuario = isset($_SESSION['apellido']) ? $_SESSION['apellido'] : '';  

if(isset($_POST['btnGuardar'])) {
    // Recibir datos del formulario
    $idPaciente = $conn->real_escape_string($_POST['IdPaciente']);
    $nombre = $conn->real_escape_string($_POST['Nombre']);
    $apellido = $conn->real_escape_string($_POST['Apellido']);
    $cedula = $conn->real_escape_string($_POST['Cedula']);
    $celular = $conn->real_escape_string($_POST['Celular']);
    $direccion = $conn->real_escape_string($_POST['Direccion']);
    $edad = $conn->real_escape_string($_POST['Edad']);
    $sexo = $conn->real_escape_string($_POST['Sexo']);
    $fechaNacimiento = $conn->real_escape_string($_POST['FechaNacimiento']);
    $email = $conn->real_escape_string($_POST['Email']);
    $nombreYApellido = $conn->real_escape_string($_POST['NombreYApellido']);
    $celular1 = $conn->real_escape_string($_POST['Celular1']);
    $parentesco = $conn->real_escape_string($_POST['Parentesco']);

    // Consulta SQL para actualizar los datos del paciente
    $sql = "UPDATE pacientes SET 
            Nombre = '$nombre', 
            Apellido = '$apellido', 
            Cedula = '$cedula', 
            Celular = '$celular', 
            Direccion = '$direccion', 
            Edad = '$edad', 
            Sexo = '$sexo', 
            FechaNacimiento = '$fechaNacimiento', 
            Email = '$email', 
            NombreYApellido = '$nombreYApellido', 
            Celular1 = '$celular1', 
            Parentesco = '$parentesco'
            WHERE IdPaciente = '$idPaciente'";

if($conn->query($sql) === TRUE) {
    
    $accion = "Se editaron los datos del paciente $nombre $apellido";
    $sql_actividades = "INSERT INTO actividadesrealizadas (nombreUsuario, ApellidoUsuario, CargoDeUsuario, Accion) VALUES ('$nombreUsuario','$apellidoUsuario','$departmentId','$accion')"; 
    $conn->query($sql_actividades);

    echo "<style>
        .alert-container {
            text-align: center;
            margin-top: 20px;
            animation: fadeIn 0.5s ease-in-out;
        }

        .alert {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            border-radius: 5px;
            font-size: 2.1rem;
            animation: slideIn 0.5s ease-in-out;
        }

        .alert p {
            margin: 0;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                height: 0;
            }
            to {
                height: auto;
            }
        }
    </style>";

    echo "<div class='alert-container'>
        <div class='alert'>
            <p>Los datos del paciente se han actualizado correctamente.</p>
        </div>
    </div>";

    // Redirige a la página de listado después de 2 segundos
    echo "<script>
        setTimeout(function(){
            document.querySelector('.alert').style.animation = 'fadeOut 0.5s ease-in-out';
            document.querySelector('.alert-container').style.animation = 'fadeOut 0.5s ease-in-out';
            setTimeout(function(){
                location.href = 'Pacientes_Listado.html';
            }, 500);
        }, 2000);
    </script>";
} else {
    echo "<script>
        alert('Error al actualizar los datos del paciente: <?php echo $conn->error; ?>');
        location.href = 'Pacientes_Listado.php';
    </script>";
}}
?>