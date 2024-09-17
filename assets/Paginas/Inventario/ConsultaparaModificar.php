<?php
require 'Conexion_Listado_Pacientes.php';
session_start(); // Inicia la sesión PHP
$departmentId = isset($_SESSION['departmentId']) ? $_SESSION['departmentId'] : '';
$nombreUsuario = isset($_SESSION['nombre']) ? $_SESSION['nombre'] : '';
$apellidoUsuario = isset($_SESSION['apellido']) ? $_SESSION['apellido'] : '';

if(isset($_POST['btnGuardar'])) {
    // Recibir datos del formulario
    $id = $conn->real_escape_string($_POST['IdProductoServicio']);
    $productoOServicio = $conn->real_escape_string($_POST['tipo']);
    $Descripcion = $conn->real_escape_string($_POST['nombre']);
    $Categoria = $conn->real_escape_string($_POST['categoria']);
    $Marca = $conn->real_escape_string($_POST['marca']);
    $Modelo = $conn->real_escape_string($_POST['modelo']);
    $CantidadEnStock = $conn->real_escape_string($_POST['cantidad']);
    $PrecioUnitario = $conn->real_escape_string($_POST['preciounitario']);
    $Proveedor = $conn->real_escape_string($_POST['proveedor']);
    $FechaDeCompra = $conn->real_escape_string($_POST['fechaDeCompra']);
    $FechaDeVencimiento = $conn->real_escape_string($_POST['fechaVencimiento']);
    $UbicacionEnInventario = $conn->real_escape_string($_POST['ubicacion']);
    $EstadoDelProducto = $conn->real_escape_string($_POST['estadoDeProducto']);
    $NotasAdicionales = $conn->real_escape_string($_POST['agregauncomentario']);
    $CostoTotal = $conn->real_escape_string($_POST['costoTotal']);
    $precioparacliente = $conn->real_escape_string($_POST['precioparacliente']);
    $descuento = $conn->real_escape_string($_POST['descuento']);

    // Consulta SQL para actualizar los datos del paciente
    $sql = "UPDATE inventario SET 
            IdProductoServicio = '$id', 
            ProductoOServicio = '$productoOServicio', 
            Descripcion = '$Descripcion', 
            Categoria = '$Categoria', 
            Marca = '$Marca', 
            Modelo = '$Modelo', 
            CantidadEnStock = '$CantidadEnStock', 
            PrecioUnitario = '$PrecioUnitario', 
            Proveedor = '$Proveedor', 
            FechaDeCompra = '$FechaDeCompra', 
            FechaDeVencimiento = '$FechaDeVencimiento', 
            UbicacionEnInventario = '$UbicacionEnInventario',
            EstadoDelProducto = '$EstadoDelProducto',
            NotasAdicionales = '$NotasAdicionales',
            CostoTotal = '$CostoTotal',
            PrecioParaCliente='$precioparacliente',
            Descuento='$descuento'
            WHERE IdProductoServicio = '$id'";

if($conn->query($sql) === TRUE) {

    $accion = "Se actualizó un nuevo articulo de tipo: $productoOServicio en inventario. Articulo: $Descripcion, marca: $Marca.";
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
            <p>Los datos del registro se han actualizado correctamente.</p>
        </div>
    </div>";

    // Redirige a la página de listado después de 2 segundos
    echo "<script>
        setTimeout(function(){
            document.querySelector('.alert').style.animation = 'fadeOut 0.5s ease-in-out';
            document.querySelector('.alert-container').style.animation = 'fadeOut 0.5s ease-in-out';
            setTimeout(function(){
                location.href = 'Inventario.html';
            }, 500);
        }, 2000);
    </script>";
} else {
    echo "<script>
        alert('Error al actualizar los datos del paciente: <?php echo $conn->error; ?>');
        location.href = 'Inventario.htm';
    </script>";
}}
?>