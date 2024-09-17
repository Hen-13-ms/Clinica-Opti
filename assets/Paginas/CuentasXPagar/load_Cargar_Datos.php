<?php
require 'Conexion_Listado_CxC.php';

$columns = ['IdCuentaXPagar', 'NDeFactura', 'Proveedor', 'Fecha', 'FechaHastaPagar', 'Monto', 'Impuestos', 'Estado', 'TotalAPagar', 'PagoRealizado', 'RestanteAPagar'];
$table = "cuentaxpagar";
$campo = isset($_POST['campo']) ? $conn->real_escape_string($_POST['campo']) : null;
$where = '';

if ($campo != null) {
    $where = " WHERE (";
    $cont = count($columns);
    for ($i = 0; $i < $cont; $i++) {
        $where .= $columns[$i] . " LIKE '%" . $campo . "%' OR ";
    }
    $where = substr($where, 0, -4); // Ajustar la eliminación de 'OR'
    $where .= ")";
}

$sql = "SELECT " . implode(", ", $columns) . " FROM $table $where";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$resultado = $conn->query($sql);
if (!$resultado) {
    die("Error en la consulta: " . $conn->error);
}

$num_rows = $resultado->num_rows;

$html = '';

if ($num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {

        $totalMostrar = ($row['TotalAPagar'] == 0) ? $row['Monto'] : $row['TotalAPagar']; // Calcular TotalMostrar

        $html .= '<tr>';
        
        $html .= '<td>' . $row['NDeFactura'] . '</td>';
        $html .= '<td>' . $row['Proveedor'] . '</td>';
        
        $originalDate = $row['Fecha'];
        $formattedDate = date('d-m-Y', strtotime($originalDate));
        $html .= '<td>' . $formattedDate . '</td>';

        $originalDatee = $row['FechaHastaPagar'];
        $formattedDatee = date('d-m-Y', strtotime($originalDatee));
        $html .= '<td>' . $formattedDatee . '</td>';

        $html .= '<td>' . $row['Monto'] . '</td>';

        // $html .= '<td>' . $totalMostrar . ' Pesos</td>';

        $html .= '<td>' . $row['Impuestos'] . ' Pesos</td>';
        $html .= '<td>' . $row['Estado'] . '</td>';
        $html .= '<td>' . $row['TotalAPagar'] . ' Pesos</td>';
        $html .= '<td>' . $row['PagoRealizado'] . ' Pesos</td>';
        $html .= '<td>' . $row['RestanteAPagar'] . ' Pesos</td>';
        $html .= '<td><a href="FacturarRapido.php?IdCuentaXPagar=' . $row['IdCuentaXPagar'] .
            '&NDeFactura=' . $row['NDeFactura'] .
            '&RestanteAPagar=' . $row['RestanteAPagar'] .
            '&Proveedor=' . $row['Proveedor'] .
            '&Monto=' . $row['Monto'] .
            '&TotalMostrar=' . $totalMostrar .
            '&Fecha=' . $row['Fecha'] .
            '&FechaHastaPagar=' . $row['FechaHastaPagar'] .
            '&Impuestos=' . $row['Impuestos'] .
            '&PagoRealizado=' . $row['PagoRealizado'] .'"
            style="color: green; text-decoration: none; cursor: pointer;"><span style="font-size: 16px; text-decoration: none; font-weight: bold;"><i class="fas fa-file-invoice-dollar fa-sm" style="font-size: 16px;"></i><strong>Pagar</strong></span></a></td>';
        $html .= '</tr>';
    }
} else {
    $html .= '<tr>';
    $html .= '<td colspan="10">Sin Resultados</td>'; // Ajusté el colspan al número total de columnas
    $html .= '</tr>';
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);
?>