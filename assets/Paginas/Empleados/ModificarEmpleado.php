<?php
require 'Conexion_Listado_Pacientes.php';

// Verifica si se recibió el parámetro IdEmpleado en la URL
if(isset($_GET['IdEmpleado'])) {
    $idEmpleado = $conn->real_escape_string($_GET['IdEmpleado']);
    

    // Consulta para obtener los datos del empleado específico
    $sql = "SELECT ID, DepartmentId, Cedula, Name, LastName, Phone, Address, EMail, PassWord, Sex, Age, BirthDate, NameLastName, PhonePerContact, RealtionShip FROM empleados WHERE ID = '$idEmpleado'";
    $resultado = $conn->query($sql);

    if($resultado->num_rows == 1) {
        $empleado = $resultado->fetch_assoc(); // Obtiene los datos del empleado
       
        $id = $empleado['ID'];
        $departmentId = $empleado['DepartmentId'];
        $cedula = $empleado['Cedula'];
        $nombre = $empleado['Name'];
        $apellido = $empleado['LastName'];
        $celular = $empleado['Phone'];
        $direccion = $empleado['Address'];
        $email = $empleado['EMail'];
        $contrasena = $empleado['PassWord'];
        $sexo = $empleado['Sex'];
        $edad = $empleado['Age'];
        $fechaNacimiento = $empleado['BirthDate'];
        $nombreYApellido = $empleado['NameLastName'];
        $celular1 = $empleado['PhonePerContact'];
        $parentesco = $empleado['RealtionShip'];
    } else {
        echo "No se encontró ningún empleado con el Id proporcionado.";
        exit(); // Sale del script si no se encuentra ningún paciente
    }
} else {
    echo "No se proporcionó el parámetro Id de empleado.";
    exit(); // Sale del script si no se proporciona el parámetro IdPaciente
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="style_Empleados_Listado.css">
            
    <!-- Iconscout CSS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <title>Modificar Empleado</title>
</head>
<body>

    <div class="container"> 
        <header>Modificar Empleado</header>
        <form action="ConsultaparaModificar.php" method="POST">
            
            <div class="form first">
                <div class="details personal">
                    <span class="title">Datos Del Empleado</span>

                    <div class="fields">

                        <input type="hidden" name="IdEmpleado" value="<?php echo $idEmpleado; ?>">

                        <div class="input-field">
                            <label for="">Cargo</label>
                            <select name="cargo">
                                <option value="<?php echo $departmentId; ?>" hidden selected><?php echo $departmentId; ?></option>
                                <option>Doctor</option>
                                <option>Secretaria</option>
                                <option>Encargado</option>
                                <option>Gerente</option>
                                <option>Contable</option>
                            </select>
                        </div>
                        
                        <div class="input-field">
                            <label for="">Nombre</label>
                            <input type="text" placeholder="Ingrese Nombre" name="Nombre" value="<?php echo $nombre; ?>" required>
                        </div>

                        <div class="input-field">
                            <label for="">Apellido</label>
                            <input type="text" name="Apellido" value="<?php echo $apellido; ?>" required>
                        </div>

                        <div class="input-field">
                            <label for="">Cedula</label>
                            <input type="text" placeholder="Ingrese Cedula" name="Cedula" value="<?php echo $cedula; ?>" required>
                        </div>

                        <div class="input-field">
                            <label for="">Celular</label>
                            <input type="text" placeholder="Ingrese Numero Celular" name="Celular" value="<?php echo $celular; ?>" required>
                        </div>

                        <div class="input-field">
                            <label for="">Direccion</label>
                            <input type="text" placeholder="Ingrese Direccion Residencial" name="Direccion" value="<?php echo $direccion; ?>" required>
                        </div>

                        <div class="input-field">
                            <label for="">Edad</label>
                            <input type="text" placeholder="Ingrese la Edad" name="Edad" value="<?php echo $edad; ?>" required>
                        </div>

                        <div class="input-field">
                            <label for="">Sexo</label>
                            <select name="Sexo">
                                <option value="<?php echo $sexo; ?>" hidden selected><?php echo $sexo; ?></option>
                                <option>Masculino</option>
                                <option>Femenino</option>
                                <option>Prefiere no Decir</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="">Fecha de Nacimiento</label>
                            <input type="date" placeholder="" name="FechaNacimiento"  value="<?php echo $fechaNacimiento; ?>" required>
                        </div>

                        <div class="input-field">
                            <label for="">Email</label>
                            <input type="email" placeholder="Ingrese Correo Electronico" name="Email" value="<?php echo $email; ?>" required>
                        </div>

                        <div class="input-field">
                            <label for="">Contraseña</label>
                            <input type="password" placeholder="Ingrese Correo Electronico" name="Contrasena" value="<?php echo $contrasena; ?>" required>
                        </div>

                        <div class="input-field">
                            <label for=""></label>
                            <input type="hidden" placeholder="Ingrese Correo Electronico" name="">
                        </div>
                    </div>
                </div>

                <div class="details personal">
                    <span class="title">Contacto de Emergencia</span>

                    <div class="fields">
                        <div class="input-field">
                            <label for="">Nombre y Apellido</label>
                            <input type="text" placeholder="Ingrese Nombre y Apellido" name="NombreYApellido" value="<?php echo $nombreYApellido; ?>" required>
                        </div>

                        <div class="input-field">
                            <label for="">Celular</label>
                            <input type="number" placeholder="Ingrese Numero" name="Celular1" value="<?php echo $celular1; ?>" required>
                        </div>

                        <div class="input-field">
                            <label for="">Parentesco</label>
                            <input type="text" placeholder="Madre/Padre/Amigo..." name="Parentesco" value="<?php echo $parentesco; ?>" required>
                        </div>
                    </div>

                    <button type="submit" class="saveBtn" name="btnGuardar">
                        <span class="btnText">Guardar</span>
                        <i class="uil uil-save"></i>
                    </button>
                </div>
            </div>
        </form>
    </div> <!-- CONTAINER -->

</body>
</html>