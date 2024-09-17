<?php
require 'Conexion_Listado_Pacientes.php';

$columns = ['IdProductoServicio', 'ProductoOServicio', 'Descripcion', 'Categoria', 'Marca', 'Modelo', 'CantidadEnStock', 'PrecioUnitario', 'Proveedor', 'FechaDeCompra', 'FechaDeVencimiento', 'UbicacionEnInventario', 'EstadoDelProducto', 'NotasAdicionales', 'CostoTotal','PrecioParaCliente','Descuento'];
$table = "inventario";
$campo = isset($_POST['campo']) ? $conn->real_escape_string($_POST['campo']) : null;
$where = '';

if ($campo != null) {
    $where = "WHERE (";

    $cont = count($columns);
    for ($i = 0; $i < $cont; $i++) {
        $where .= $columns[$i] . " LIKE '%" . $campo . "%' OR ";
    }
    $where = substr_replace($where, "", -3);
    $where .= ")";
}

$sql = "SELECT " . implode(", ", $columns) . "
FROM $table
$where";

$resultado = $conn->query($sql);
$num_rows = $resultado->num_rows;

$html = '';

if ($num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $html .= '<tr>';
        // $html .= '<td>' . $row['IdProductoServicio'] . '</td>';
        $html .= '<td>';
        $html .= '<div style="white-space: nowrap; font-size: 20px;">'; // Evitar saltos de línea
        $html .= $row['ProductoOServicio'];
        $html .= '</div>';
        $html .= '</td>';
        $html .= '<td style="font-size: 20px;">' . $row['Descripcion'] . '</td>';
        $html .= '<td style="font-size: 20px;">' . $row['Categoria'] . '</td>';
        $html .= '<td style="font-size: 20px;">' . $row['Marca'] . '</td>';
        $html .= '<td style="font-size: 20px;">' . $row['Modelo'] . '</td>';
        $html .= '<td style="font-size: 20px;">' . $row['CantidadEnStock'] . '</td>';
        $html .= '<td style="font-size: 20px;">' . $row['PrecioUnitario'] . '</td>';
        $html .= '<td style="font-size: 20px;">' . $row['Proveedor'] . '</td>';
        $html .= '<td style="font-size: 20px;">' . $row['FechaDeCompra'] . '</td>';
        $html .= '<td style="font-size: 20px;">' . $row['FechaDeVencimiento'] . '</td>';
        $html .= '<td style="font-size: 20px;">' . $row['UbicacionEnInventario'] . '</td>';
        $html .= '<td style="font-size: 20px;">' . $row['EstadoDelProducto'] . '</td>';
        $html .= '<td style="font-size: 20px;">' . $row['NotasAdicionales'] . '</td>';
        $html .= '<td style="font-size: 20px;">' . $row['CostoTotal'] . '</td>';
        $html .= '<td style="font-size: 20px;">' . $row['PrecioParaCliente'] . '</td>';


        if (array_key_exists('IdProductoServicio', $row)) {
            $html .= '<td>';
        $html .= '<div style="white-space: nowrap;">'; // Evitar saltos de línea
        $html .= '<a href="ModificarRegistro.php?IdProductoServicio=' . $row['IdProductoServicio'] . '" style="color:#512da8; text-decoration: none; font-size: 20px; margin:0;">';
        $html .= '<i class="fas fa-edit" style="font-size: smaller; border: none;"></i><strong> Editar</strong>';
        $html .= '</a>';
        $html .= '</div>';
        $html .= '</td>';
        } else {
            $html .= '<td></td>'; // Otra acción si IdPaciente no está presente
        }
        $html .= '<td>';
        $html .= '<div style="white-space: nowrap;">'; // Evitar saltos de línea
        $html .= '<a href="EliminarPaciente.php?';
        $html .= 'IdProductoServicio=' . $row['IdProductoServicio'] . '&';
        $html .= 'ProductoOServicio=' . urlencode($row['ProductoOServicio']) . '&';
        $html .= 'Descripcion=' . urlencode($row['Descripcion']) . '&';
        $html .= 'Categoria=' . urlencode($row['Categoria']) . '&';
        $html .= 'Marca=' . urlencode($row['Marca']) . '" ';
        $html .= 'style="color:red; text-decoration: none; cursor: pointer; ">';
        $html .= '<span style="font-size: 20px; text-decoration: none; font-weight: bold;"><strong>Eliminar</strong></span>';
        $html .= '</a>';
        $html .= '</div>';
        $html .= '</td>';
        $html .= '</tr>';
    }
} else {
    $html .= '<tr>';
    $html .= '<td colspan="9">Sin Resultados</td>';
    $html .= '</tr>';
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);
?>

