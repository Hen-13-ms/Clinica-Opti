<?php
require 'Conexion_Listado_CxC.php';

$columns = ['IdFacturaPorCobrar', 'Cedula', 'NombrePacientee', 'Doctor', 'NotasDelDoctor', 'FechaDeConsullta', 'FechaDeExpiracion', 'TotalApagar', 'MetodoDePago', 'PagoDePaciente', 'RestanteAPagar', 'ProductosFacturados'];
$table = "cuentasxcobrar";
$campo = isset($_POST['campo']) ? $conn->real_escape_string($_POST['campo']) : null;
$where = '';

if ($campo != null) {
    $where = " WHERE (";

    $cont = count($columns);
    for ($i = 0; $i < $cont; $i++) {
        $where .= $columns[$i] . " LIKE '%" . $campo . "%' OR ";
    }
    $where = substr_replace($where, "", -3);
    $where .= ")";
}

$sql = "SELECT " . implode(", ", $columns) . " FROM $table $where";

$resultado = $conn->query($sql);
$num_rows = $resultado->num_rows;

// Función para insertar un salto de línea cada 36 caracteres
function addLineBreaks($text, $length = 36) {
    return preg_replace('/(.{1,' . $length . '})(\s|$)/uS', '$1<br>', $text);
}

$html = '';

if ($num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $html .= '<tr>';
        
        $html .= '<td>' . $row['Cedula'] . '</td>';
        $html .= '<td>' . $row['NombrePacientee'] . '</td>';
        $html .= '<td>' . $row['Doctor'] . '</td>';
        $html .= '<td>' . addLineBreaks($row['NotasDelDoctor']) . '</td>';

        $html .= '<td>' . $row['FechaDeConsullta'] . '</td>';

        // $originalDate = $row['FechaDeConsullta'];
        // $formattedDate = date('d-m-Y', strtotime($originalDate));

        // $html .= '<td>' . $formattedDate . '</td>';

        $html .= '<td>' . $row['MetodoDePago'] . '</td>';
        $html .= '<td>' . $row['TotalApagar'] . ' Pesos</td>';
        $html .= '<td>' . $row['PagoDePaciente'] . ' Pesos</td>';
        $html .= '<td>' . $row['RestanteAPagar'] . ' Pesos</td>';
        $html .= '<td><a href="FacturarRapido.php?IdFacturaPorCobrar=' . $row['IdFacturaPorCobrar'] . '&Cedula=' . $row['Cedula'] . '&NombrePacientee=' . $row['NombrePacientee'] . '&Doctor=' . $row['Doctor'] . '&RestanteAPagar=' . $row['RestanteAPagar'] . '" style="color: green; text-decoration: none; cursor: pointer;"><span style="font-size: 16px; text-decoration: none; font-weight: bold;"><i class="fas fa-file-invoice-dollar fa-sm" style="font-size: 16px;"></i><strong>Facturar</strong></span></a></td>';
        $html .= '</tr>';
    }
} else {
    $html .= '<tr>';
    $html .= '<td colspan="10">Sin Resultados</td>'; // Ajusté el colspan al número total de columnas
    $html .= '</tr>';
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);
?>