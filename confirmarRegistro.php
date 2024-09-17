<?php

$host = "localhost";
$user = "root";
$clave = "";
$bd = "clinica_opti";

$conectar = mysqli_connect($host,$user,$clave,$bd);

// $ID = $_POST['ID'];
$departamento = $_POST['departamento'];
$cedula = $_POST['cedula'];
$nombre = $_POST['nombres']; 
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$usuario = $_POST['usuario']; //este es el email
$password = $_POST['password'];
//$apellido = $_POST['apellidos'];
//$codigo = $_POST['codigo'];

$insertar = "INSERT INTO empleados VALUES ('','$departamento','$cedula','$nombre','$apellidos','$telefono','$direccion','$usuario','$password','','','','','','')";
$query= mysqli_query($conectar, $insertar);

if($query)
{
    $accion = "Nuevo Usuario, $nombre $apellidos Cedula: $cedula, registrado como $departamento ";
    $sql_actividades = "INSERT INTO actividadesrealizadas (nombreUsuario, ApellidoUsuario, CargoDeUsuario, Accion) VALUES ('','','','$accion')"; 
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
        <p>¡Registro Guardado Correctamente!</p>
    </div>
  </div>";

// Aquí agregamos la ruta deseada a la parte de location.href
echo "<script>
    setTimeout(function(){
        document.querySelector('.alert').style.animation = 'fadeOut 0.5s ease-in-out';
        document.querySelector('.alert-container').style.animation = 'fadeOut 0.5s ease-in-out';
        setTimeout(function(){
            location.href = 'index.php';
        }, 500);
    }, 2000);
  </script>";
    }else{
    echo "<script> alert ('Empleado no Guardado');
  location.href = 'index.php';
  </script>";
}
?>