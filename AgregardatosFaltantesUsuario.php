<?php
session_start(); // Inicia la sesión PHP
$departamento = isset($_SESSION['departmentId']) ? $_SESSION['departmentId'] : '';

// Verificar si se ha enviado el formulario
if(isset($_POST['saveBtn'])) {
    // Recibir los datos del formulario

    $email = $_POST["eMail"];
    $cedula = $_POST["cedula"];
    $telefono = $_POST["celular"];
    $direccion =$_POST["address"];
    // $departamento=$_POST['DepartmentId'];
    // $nueva_contrasena = isset($_POST["nueva_contrasena"]) ? $_POST["nueva_contrasena"] : null;
    
    $nombre= $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $edad = isset($_POST["edad"]) ? $_POST["edad"] : null;
    $fechaNacimiento = isset($_POST["fechaNacimiento"]) ? $_POST["fechaNacimiento"] : null;
    $sexo = isset($_POST["sexo"]) ? $_POST["sexo"] : null;
    $nombreApellido = isset($_POST["nombreYApellido"]) ? $_POST["nombreYApellido"] : null;
    $celularTelefono = isset($_POST["celularTelefono"]) ? $_POST["celularTelefono"] : null;
    $parentesco = isset($_POST["parentesco"]) ? $_POST["parentesco"] : null;

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
    $sql = "UPDATE empleados SET Name = '$nombre', LastName= '$apellido',  Age = '$edad', Sex = '$sexo', BirthDate='$fechaNacimiento', NameLastName='$nombreApellido', PhonePerContact ='$celularTelefono', RealtionShip='$parentesco', Address='$direccion'  WHERE Email = '$email' AND Cedula = '$cedula' AND Phone = '$telefono'";
    
    if ($conn->query($sql) === TRUE) {

        $accion = "Usuario, $nombre $apellido, Cedula: $cedula, registrado como $departamento, actualizó sus datos.";
        $sql_actividades = "INSERT INTO actividadesrealizadas (nombreUsuario, ApellidoUsuario, CargoDeUsuario, Accion) VALUES ('$nombre','$apellido','$departamento','$accion')"; 
        $conn->query($sql_actividades);

        echo "<div style='background-color: #4CAF50; color: white; font-size: 30px; padding: 10px; border-radius: 10px; margin-bottom: 20px; text-align: center;'>!Datos actualizados con éxito!</div>";
        echo "<script>
            setTimeout(function() {
                window.location.href = 'index.php';
            }, 3000);
        </script>";
    
    } else {
        echo "<div style='background-color: #f44336; color: white; font-size: 24px; padding: 10px; border-radius: 10px; margin-bottom: 20px; text-align: center;'>Error al actualizar la contraseña: " . $conn->error . "</div>";
    }

    $conn->close();
}
?>