<?php
require 'Conexion_Listado_BD.php'; // Asumiendo que este archivo contiene la conexión a tu base de datos

$columns = ['Fecha', 'Hora', 'NombreUsuario', 'ApellidoUsuario', 'CargoDeUsuario', 'Accion']; 
$table = "actividadesrealizadas";
$campo = isset($_POST['campo']) ? $conn->real_escape_string($_POST['campo']) : null;
$where = '';

if ($campo !== null && $campo !== '') {
    $where = "WHERE (";

    $cont = count($columns);
    for ($i = 0; $i < $cont; $i++) {
        $where .= $columns[$i] . " LIKE '%" . $campo . "%' OR ";
    }
    $where = substr_replace($where, "", -3);
    $where .= ")";
}

$sql = "SELECT " . implode(", ", $columns) . " FROM $table $where";

$resultado = $conn->query($sql);

$rows = [];

if ($resultado) {
    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            $rows[] = $row;
        }
    } else {
        $rows[] = ['Sin Resultados'];
    }
} else {
    $rows[] = ['Error en la consulta'];
}

echo json_encode($rows, JSON_UNESCAPED_UNICODE);
?>