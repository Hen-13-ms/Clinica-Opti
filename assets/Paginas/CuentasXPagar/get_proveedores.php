<?php
header('Content-Type: application/json');

// Configuración de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clinica_opti";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener proveedores
$sql = "SELECT IdProveedor, nombre FROM proveedores";
$result = $conn->query($sql);

$proveedores = array();

if ($result->num_rows > 0) {
    // Fetch cada fila como un array asociativo
    while($row = $result->fetch_assoc()) {
        $proveedores[] = $row;
    }
}

// Enviar los datos en formato JSON
echo json_encode($proveedores);

$conn->close();
?>