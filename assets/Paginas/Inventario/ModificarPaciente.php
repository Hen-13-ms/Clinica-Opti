<?php
require 'Conexion_Listado_Pacientes.php';

// Verifica si se recibió el parámetro IdPaciente en la URL
if(isset($_GET['IdPaciente'])) {
    $idPaciente = $conn->real_escape_string($_GET['IdPaciente']);
    
    // Consulta para obtener los datos del paciente específico
    $sql = "SELECT * FROM pacientes WHERE IdPaciente = '$idPaciente'";
    $resultado = $conn->query($sql);

    if($resultado->num_rows == 1) {
        $paciente = $resultado->fetch_assoc(); // Obtiene los datos del paciente
       
        $id = $paciente['IdPaciente'];
        $nombre = $paciente['Nombre'];
        $apellido = $paciente['Apellido'];
        $cedula = $paciente['Cedula'];
        $celular = $paciente['Celular'];
        $direccion = $paciente['Direccion'];
        $edad = $paciente['Edad'];
        $sexo = $paciente['Sexo'];
        $fechaNacimiento = $paciente['FechaNacimiento'];
        $email = $paciente['Email'];
        $nombreYApellido = $paciente['NombreYApellido'];
        $celular1 = $paciente['Celular1'];
        $parentesco = $paciente['Parentesco'];
    } else {
        echo "No se encontró ningún paciente con el IdPaciente proporcionado.";
        exit(); // Sale del script si no se encuentra ningún paciente
    }
} else {
    echo "No se proporcionó el parámetro IdPaciente.";
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
    <link rel="stylesheet" href="style_Pacientes_Listado.css">
            
    <!-- Iconscout CSS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <title>Modificar Paciente</title>
</head>
<body>

    <div class="container"> 
        <header>Modificar Paciente</header>
        <form action="ConsultaparaModificar.php" method="POST">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Datos Del Paciente</span>
                    <div class="fields">
                        <input type="hidden" name="IdPaciente" value="<?php echo $id; ?>">
                        
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