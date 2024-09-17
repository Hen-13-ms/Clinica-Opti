<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $email = $_POST["email"];
    $cedula = $_POST["cedula"];
    $telefono = $_POST["telefono"];
    $nueva_contrasena = isset($_POST["nueva_contrasena"]) ? $_POST["nueva_contrasena"] : null;

    // Establecer la conexión con la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "clinica_opti";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Actualizar la contraseña en la base de datos
    $sql = "UPDATE empleados SET PassWord = '$nueva_contrasena' WHERE Email = '$email' AND Cedula = '$cedula' AND Phone = '$telefono'";
    
    if ($conn->query($sql) === TRUE) {

        $accion = "Usuario donde correo electronico es: $email Cedula: $cedula y Celular: $telefono realizó cambio de contraseña";
        $sql_actividades = "INSERT INTO actividadesrealizadas (nombreUsuario, ApellidoUsuario, CargoDeUsuario, Accion) VALUES ('','','','$accion')"; 
        $conn->query($sql_actividades);

        echo "<div style='background-color: #4CAF50; color: white;  font-size: 24px; padding: 10px; border-radius: 10px; margin-bottom: 20px;'>!Contraseña actualizada con éxito!</div>";
        echo "<script>
            setTimeout(function() {
                window.location.href = 'index.php';
            }, 3000);
        </script>";
    
    } else {
        echo "Error al actualizar la contraseña: " . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Contraseña</title>
    <style>

/* ================================================================================== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        body {
            background-color: #c9d6ff;
            background: linear-gradient(to right, #e2e2e2, #c9d6ff);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
            position: relative;
            overflow: hidden;
            width: 400px; /* Ajustado para que se vea mejor en la demo */
            max-width: 100%;
            min-height: 590px;
            padding: 20px; /* Añadido para espacio interior */
        }

        .container label {
            font-size: 14px;
            margin-bottom: 5px; /* Espacio entre etiquetas */
        }

        .container input {
            background-color: #eee;
            border: none;
            margin-bottom: 15px; /* Espacio entre inputs */
            padding: 10px 15px;
            font-size: 13px;
            border-radius: 8px;
            width: 100%;
            outline: none;
        }

        .container button {
            background-color: #512da8;
            color: #fff;
            font-size: 12px;
            padding: 10px 45px;
            border: 1px solid transparent;
            border-radius: 8px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            cursor: pointer;
        }

        .container button.hidden {
            background-color: transparent;
            border-color: #fff;
        }
    </style>
</head>
<body>
    
<script>
    // Función para verificar si las contraseñas coinciden
    function validarContrasenas() {
        var contrasena = document.getElementById("nueva_contrasena").value;
        var confirmarContrasena = document.getElementById("confirmar_contrasena").value;

        if (contrasena !== confirmarContrasena) {
            alert("Las contraseñas no coinciden. Por favor, inténtalo de nuevo.");
            
            document.getElementById("nueva_contrasena").value = "";
            document.getElementById("confirmar_contrasena").value = "";
            // Enfocar en el campo de nueva contraseña
            document.getElementById("nueva_contrasena").focus();
            return false; // Detener el envío del formulario
        }
        return true; // Permitir el envío del formulario
    }
</script>

    <div style="background-color: #fff; border-radius: 10px; padding: 20px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35); width: 600px;">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" onsubmit="return validarContrasenas();">

    <h2 style="margin: 20px 42.5px; color: #512da8; padding: 10px 109px;">Actualizar Contraseña</h2>

        
        <label for="email" style="font-weight: bold; margin: 20px 42.5px;">Email:</label><br>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>" required style="background-color: #eee; border: none; margin: 8px 42.5px; padding: 10px 15px; font-size: 17px; border-radius: 8px; width: 85%; outline: none; display: block;" readonly><br>

        <label for="cedula" style="font-weight: bold; margin: 20px 42.5px; ">Cédula:</label><br>
        <input type="text" id="cedula" name="cedula" value="<?php echo $cedula; ?>" required style="background-color: #eee; border: none; margin: 8px 42.5px; padding: 10px 15px; font-size: 17px; border-radius: 8px; width: 85%; outline: none; display: block;"readonly><br>

        <label for="telefono" style="font-weight: bold; margin: 20px 42.5px;">Teléfono:</label><br>
        <input type="tel" id="telefono" name="telefono" value="<?php echo $telefono; ?>" required style="background-color: #eee; border: none; margin: 8px 42.5px; padding: 10px 15px; font-size: 17px; border-radius: 8px; width: 85%; outline: none; display: block;"readonly><br>

        <label for="nueva_contrasena" style="font-weight: bold; margin: 20px 42.5px;">Nueva Contraseña:</label><br>
        <input type="password" id="nueva_contrasena" name="nueva_contrasena" required oninvalid="this.setCustomValidity('¡Este Campo es Requerido!')" oninput="this.setCustomValidity('')" style="background-color: #eee; border: none; margin: 8px 42.5px; padding: 10px 15px; font-size: 17px; border-radius: 8px; width: 85%; outline: none; display: block;" required><br>

        <label for="nueva_contrasena" style="font-weight: bold; margin: 20px 42.5px;">Confrmar Contraseña:</label><br>
        <input type="password" id="confirmar_contrasena" name="confirmar_contrasena" required oninvalid="this.setCustomValidity('¡Este Campo es Requerido!')" oninput="this.setCustomValidity('')"  style="background-color: #eee; border: none; margin: 8px 42.5px; padding: 10px 15px; font-size: 17px; border-radius: 8px; width: 85%; outline: none; display: block;" required><br>

        <button type="submit" style="background-color: #512da8; margin: 20px 120px; color: #fff; font-size: 15px; padding: 10px 45px; border: 1px solid transparent; border-radius: 8px; font-weight: 600; letter-spacing: 0.5px; text-transform: uppercase; cursor: pointer;">Actualizar Contraseña</button>
    </form>
    </div>

    <script>
        // Función para obtener los parámetros de la URL
        function getUrlParams() {
            const searchParams = new URLSearchParams(window.location.search);
            const params = {};
            for (const [key, value] of searchParams.entries()) {
                params[key] = value;
            }
            return params;
        }

        // Función para asignar valores a los campos de entrada desde los parámetros de la URL
        function assignUrlParamsToInputs() {
            const urlParams = getUrlParams();
            document.getElementById('email').value = urlParams['email'] || '';
            document.getElementById('cedula').value = urlParams['cedula'] || '';
            document.getElementById('telefono').value = urlParams['telefono'] || '';
        }

        // Asignar valores a los campos de entrada al cargar la página
        assignUrlParamsToInputs();
    </script>

                <script>
                function validateCode(input) {
                var validCodes = ["codigo1", "codigo2", "codigo3"]; // Aquí puedes agregar los códigos válidos
                var inputValue = input.value.trim();
                if (!validCodes.includes(inputValue)) {
                input.setCustomValidity('¡Código incorrecto!');
                } else {
                input.setCustomValidity('');
                }
                }
                function validateForm() {
                var passwordInput = document.getElementById("codigo");
                validateCode(passwordInput); // Ejecutar la validación del código antes de enviar el formulario
                return passwordInput.checkValidity(); // Devolver si el formulario es válido o no
                }
                </script>

</body>
</html>