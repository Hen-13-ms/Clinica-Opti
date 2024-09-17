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

$nombreProveedor = $_POST ['nombreProveedor'];
$direccionProveedor = $_POST ['direccionProveedor'];
$RNC = $_POST ['RNC'];
$Telefono = $_POST ['Telefono'];
$CorreoElectrónico = $_POST ['email'];
$contactoProveedor = $_POST ['contacto'];
$condicionesPago = $_POST ['condicionesPago'];




$insertar = "INSERT INTO proveedores VALUES ('','$nombreProveedor','$direccionProveedor', '$RNC', '$Telefono', '$CorreoElectrónico','$contactoProveedor','$condicionesPago')";
// $query= mysqli_query($conectar, $insertar);

if ($conectar->query($insertar) === TRUE) {
    // Registro de actividad
    $accion = "Se ingresó un nuevo proveedor: $nombreProveedor";
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
        <p>Proveedor Guardado Correctamente</p>
    </div>
  </div>";

// Aquí agregamos la ruta deseada a la parte de location.href
echo "<script>
    setTimeout(function(){
        document.querySelector('.alert').style.animation = 'fadeOut 0.5s ease-in-out';
        document.querySelector('.alert-container').style.animation = 'fadeOut 0.5s ease-in-out';
        setTimeout(function(){
            location.href = 'CxP.html';
        }, 500);
    }, 2000);
  </script>";
    }else{
    echo "<script> alert ('Paciente no Guardado');
  location.href = '../CxP.html';
  </script>";
}
?>