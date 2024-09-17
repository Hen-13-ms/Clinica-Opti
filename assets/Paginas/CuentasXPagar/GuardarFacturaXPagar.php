<?php
session_start(); // Inicia la sesión PHP
$departmentId = isset($_SESSION['departmentId']) ? $_SESSION['departmentId'] : '';
$nombreUsuario = isset($_SESSION['nombre']) ? $_SESSION['nombre'] : '';
$apellidoUsuario = isset($_SESSION['apellido']) ? $_SESSION['apellido'] : '';

$host = "localhost";
$user = "root";
$clave = "";
$bd = "clinica_opti";

$conectar = mysqli_connect($host, $user, $clave, $bd);

$numeroFactura = $_POST['numeroFactura'];
$ProveedorId = isset($_POST['ProveedoresS']) ? $_POST['ProveedoresS'] : null;
$fechaFactura = $_POST['fechaFactura'];
$fechaParaPagar = $_POST['fechaFacturaParaPagar'];
$montoFactura = $_POST['montoFactura'];
$impuestosFactura = $_POST['impuestosFactura'];

// Verificación de que se ha seleccionado un proveedor
if ($ProveedorId) {
    // Buscar el nombre del proveedor según el ID
    $query = "SELECT nombre FROM proveedores WHERE IdProveedor = '$ProveedorId'";
    $result = $conectar->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $ProveedorNombre = $row['nombre'];

        // Ahora insertar con el nombre del proveedor
        $insertar = "INSERT INTO cuentaxpagar VALUES ('','$numeroFactura','$ProveedorNombre', '$fechaFactura', '$fechaParaPagar', '$montoFactura', '','$impuestosFactura','','','','')";
        
        if ($conectar->query($insertar) === TRUE) {
            // Registro de actividad
            $accion = "Se ingresó una nueva cuenta por pagar de: $ProveedorNombre";
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
                    <p>Por favor actualiza el módulo </p>
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
        } else {
            echo "<script>alert('Error al guardar la cuenta por pagar.'); location.href = '../Pacientes_Listado.php';</script>";
        }
    } else {
        echo "<script>alert('Error: No se pudo encontrar el nombre del proveedor.'); history.back();</script>";
    }
} else {
    // Manejo de error si no se seleccionó un proveedor
    echo "<script>alert('Error: No se ha seleccionado un proveedor.'); history.back();</script>";
}
?>