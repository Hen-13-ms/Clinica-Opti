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

$tipo = $_POST ['tipo'];
$nombre = $_POST ['nombre']; //Esto es descripcion
$categoria = $_POST ['categoria'];
$marca = $_POST ['marca'];
$modelo = $_POST ['modelo'];
$cantidad = $_POST ['cantidad'];
$preciounitario = $_POST ['preciounitario'];
$proveedor = $_POST ['proveedor'];
$fechaDeCompra = $_POST ['fechaDeCompra'];
$fechaVencimiento = $_POST ['fechaVencimiento'];
$ubicacion = $_POST ['ubicacion'];
$estadoDeProducto = $_POST ['estadoDeProducto'];
$agregauncomentario = $_POST ['agregauncomentario'];
$costoTotal = $_POST ['costoTotal'];
$precioparacliente = $_POST ['precioparacliente'];
$descuento= $_POST ['descuento'];

$insertar = "INSERT INTO inventario VALUES ('','$tipo','$nombre','$categoria','$marca','$modelo','$cantidad','$preciounitario','$proveedor', '$fechaDeCompra', '$fechaVencimiento', '$ubicacion', '$estadoDeProducto', '$agregauncomentario','', '','$costoTotal','$precioparacliente','$descuento')";
$query= mysqli_query($conectar, $insertar);

// Alerta luego de guardar. 
if($query)
{
    $accion = "Se agregó  un nuevo articulo de tipo: $tipo al inventario. Articulo: $nombre, marca: $marca, en estado: $estadoDeProducto";
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
            location.href = 'Inventario.html';
        }, 500);
    }, 2000);
  </script>";
    }else{
    echo "<script> alert ('Paciente no Guardado');
  location.href = 'Inventario.php';
  </script>";
}
?>