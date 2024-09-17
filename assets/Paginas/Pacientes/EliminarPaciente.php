<?php
require 'Conexion_Listado_Pacientes.php';

session_start(); // Inicia la sesión PHP
$departmentId = isset($_SESSION['departmentId']) ? $_SESSION['departmentId'] : '';
$nombreUsuario = isset($_SESSION['nombre']) ? $_SESSION['nombre'] : '';
$apellidoUsuario = isset($_SESSION['apellido']) ? $_SESSION['apellido'] : '';  
?>

<!DOCTYPE html> 
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Paciente</title>
    <!-- Agrega aquí tus enlaces CSS para estilos de la modal -->
    <style>

        .alert {
            padding: 20px;
            background-color: #4CAF50; /* color verde */
            color: white;
            text-align: center;
            border-radius: 10px;
            margin-top: 20px;
            font-size: 18px; /* Tamaño de fuente */
            font-family: 'Ubuntu', sans-serif; /* Familia de fuente */
        }
        /* Estilos de la modal */
        .modal {
            display: none; /* Por defecto oculta la modal */
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4); /* fondo oscuro */
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 50%;
            text-align: center;
            border-radius: 10px; /* Agrega bordes redondeados */
            font-size: 18px; /* Tamaño de fuente */
            font-family: 'Ubuntu', sans-serif; /* Familia de fuente */
        }

        .modal-btn-container {
            display: flex;
            justify-content: center; /* Centra los botones horizontalmente */
        }

        .modal-btn {
            background-color: #f44336; /* color de botón rojo */
            color: white;
            padding: 10px 20px;
            margin-top: 10px;
            border: none;
            cursor: pointer;
            margin-right: 10px; /* Añade margen entre los botones */
            border-radius: 10px; /* Agrega bordes redondeados */
        }

        .modal-btn-gray {
            background-color: gray; /* Cambia el color de fondo del botón a gris */
        }

        .modal-btn:hover {
            background-color: #cc0000; /* color de botón rojo oscuro al pasar el ratón */
        }

        .modal-btn:hover {
            background-color: gray; /* color de botón rojo oscuro al pasar el ratón */
        }
    </style>
    <!-- Enlace a la fuente Ubuntu -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap">
</head>
<body>

<?php
// Verificar si se recibió el ID del paciente a eliminar
if(isset($_GET['IdPaciente'])) {
    // Obtener el ID del paciente a eliminar
    $idPaciente = $_GET['IdPaciente'];
    $nombre = $_GET['Nombre'];
    $apellidos= $_GET['Apellido'];
    // Consulta SQL para eliminar el paciente
    $sql = "DELETE FROM pacientes WHERE IdPaciente = $idPaciente";

    // Si el formulario de confirmación ha sido enviado
    if(isset($_POST['confirmacion']) && $_POST['confirmacion'] == 'SI') {
        // Ejecutar la consulta para eliminar el paciente
        if ($conn->query($sql) === TRUE) {
            // Mostrar mensaje de éxito

            $accion = "Se eliminó paciente: $nombre $apellidos";
            $sql_actividades = "INSERT INTO actividadesrealizadas (nombreUsuario, ApellidoUsuario, CargoDeUsuario, Accion) VALUES ('$nombreUsuario','$apellidoUsuario','$departmentId','$accion')"; 
            $conn->query($sql_actividades);


        echo '<div id="alerta" class="alert">
        <strong>Éxito!</strong> El paciente ha sido eliminado correctamente.
      </div>';

// Script para redireccionar después de 5 segundos
echo '<script>
        setTimeout(function() {
            window.location.href = "Pacientes_Listado.html";
        }, 5000); // 5000 milisegundos = 5 segundos
      </script>';
        } 
        else {
            echo "<p>Error al eliminar el paciente: " . $conn->error . "</p>";
        }
    } else { // Si el formulario de confirmación no ha sido enviado, muestra el mensaje de confirmación
        echo '<div id="myModal" class="modal">
                <div class="modal-content">
                    <p>¿Estás seguro de que deseas eliminar este paciente?</p>
                    
                    <form method="post">
                        <input type="submit" name="confirmacion" value="SI" class="modal-btn">
                        <button type="button" class="modal-btn modal-btn-gray modal-btn:hover" onclick="cerrarModal()">NO</button>
                    </form>
                </div>
            </div>';

        // Mostrar la modal automáticamente con JavaScript
        echo '<script>
                // Obtener la modal
                var modal = document.getElementById("myModal");

                // Mostrar la modal
                modal.style.display = "block";

                // Función para cerrar la modal al hacer clic en "NO"
                function cerrarModal() {
                    window.location.href = "Pacientes_Listado.html";
                }
              </script>';
    }
} else {
    echo "<p>No se recibió el ID del paciente a eliminar.</p>";
}
?>

</body>
</html>