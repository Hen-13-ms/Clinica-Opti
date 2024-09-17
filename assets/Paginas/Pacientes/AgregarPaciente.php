<?php
session_start(); // Inicia la sesión PHP
$departmentId = isset($_SESSION['departmentId']) ? $_SESSION['departmentId'] : '';
$nombreUsuario = isset($_SESSION['nombre']) ? $_SESSION['nombre'] : '';
$apellidoUsuario = isset($_SESSION['apellido']) ? $_SESSION['apellido'] : '';


$host = "localhost";
$user = "root";
$clave = "";
$bd = "clinica_opti";

$conectar = mysqli_connect($host,$user,$clave,$bd);

$nombre = $_POST ['nombre'];
$apellidos = $_POST ['apellido'];
$cedula = $_POST ['cedula'];
$celular = $_POST ['celular'];
$direccion = $_POST ['direccion'];
$edad = $_POST ['edad'];
$sexo = $_POST ['sexo'];
$fechaNacimiento = $_POST ['fechaNacimiento'];
$email = $_POST ['email'];
$nombreYApellido = $_POST ['nombreYApellido'];
$celular1 = $_POST ['celular1'];
$parentesco = $_POST ['parentesco'];

$insertar = "INSERT INTO pacientes VALUES ('','$nombre','$apellidos','$cedula','$celular','$direccion','$edad','$sexo','$fechaNacimiento', '$email', '$nombreYApellido', '$celular1', '$parentesco')";
// $query= mysqli_query($conectar, $insertar);

if ($conectar->query($insertar) === TRUE) {
    // Registro de actividad
    $accion = "Se ingresó un nuevo paciente: $nombre $apellidos";
    $sql_actividades = "INSERT INTO actividadesrealizadas (nombreUsuario, ApellidoUsuario, CargoDeUsuario, Accion) VALUES ('$nombreUsuario','$apellidoUsuario','$departmentId','$accion')"; 
    $conectar->query($sql_actividades);

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
        <p>Registro Guardado Correctamente</p>
    </div>
  </div>";

// Aquí agregamos la ruta deseada a la parte de location.href
echo "<script>
    setTimeout(function(){
        document.querySelector('.alert').style.animation = 'fadeOut 0.5s ease-in-out';
        document.querySelector('.alert-container').style.animation = 'fadeOut 0.5s ease-in-out';
        setTimeout(function(){
            location.href = 'Pacientes_Listado.html';
        }, 500);
    }, 2000);
  </script>";
    }else{
    echo "<script> alert ('Paciente no Guardado');
  location.href = '../Pacientes_Listado.php';
  </script>";
}
?>