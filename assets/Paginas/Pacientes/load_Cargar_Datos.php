<?php
require 'Conexion_Listado_Pacientes.php';

$columns = [' IdPaciente','Nombre','Apellido','Cedula','Celular','Direccion','Edad','Sexo','FechaNacimiento','Email','NombreYApellido','Celular1','Parentesco'];
$table="pacientes";
$campo =isset($_POST['campo']) ? $conn->real_escape_string($_POST['campo']) : null;
$where ='';

if($campo !=null){
    $where = "WHERE (";

    $cont = count($columns);
    for($i = 0; $i < $cont; $i++) {
        $where .= $columns[$i] . " LIKE '%". $campo . "%' OR ";
    }
    $where = substr_replace($where, "", -3);
    $where .=")";
} 

$sql = "SELECT" . implode(", ", $columns). "
FROM $table
$where";

$resultado = $conn->query($sql);
$num_rows = $resultado->num_rows;

$html = '';

if($num_rows > 0){
 while ($row = $resultado->fetch_assoc()) {
    $html .= '<tr>';
    // $html .= '<td>'. $row['IdPaciente'] . '</td>'; 
    $html .= '<td>'. $row['Nombre'] . '</td>';
    $html .= '<td>'. $row['Apellido'] . '</td>';
    $html .= '<td>'. $row['Cedula'] . '</td>';
    $html .= '<td>'. $row['Celular'] . '</td>';
    $html .= '<td>'. $row['Direccion'] . '</td>';
    // $html .= '<td>'. $row['Edad'] . '</td>';
    // $html .= '<td>'. $row['Sexo'] . '</td>';
    $html .= '<td>'. $row['FechaNacimiento'] . '</td>';
    $html .= '<td>'. $row['Email'] . '</td>';
    // $html .= '<td>'. $row['NombreYApellido'] . '</td>';
    // $html .= '<td>'. $row['Celular1'] . '</td>';
    // $html .= '<td>'. $row['Parentesco'] . '</td>';
    if(array_key_exists('IdPaciente', $row)) {
        $html .= '<td><a href="ModificarPaciente.php?IdPaciente='. $row['IdPaciente'] .'" style="color:#512da8; text-decoration: none;"><i class="fas fa-edit" style="font-size: smaller; border: none;"></i><strong> Editar</strong></a></td>';
    } else {
        $html .= '<td></td>'; // Otra acción si IdPaciente no está presente
    }
    $html .= '<td><a href="FacturarRapido.php?IdPaciente='.$row['IdPaciente'].'&Nombre='.$row['Nombre'].'&Apellido='.$row['Apellido'].'" style="color: green ; text-decoration: none; cursor: pointer;"><span style="font-size: 16px; text-decoration: none; font-weight: bold;"><i class="fas fa-file-invoice-dollar fa-sm" style="font-size: 16px;" ></i><strong>Facturar</strong></span></a></td>';
    $html .= '<td><a href="EliminarPaciente.php?IdPaciente='.$row['IdPaciente'].'&Nombre='.$row['Nombre'].'&Apellido='.$row['Apellido'].'" style="color:red; text-decoration: none; cursor: pointer;"><span style="font-size: 16px; text-decoration: none; font-weight: bold;"> <i class="fas fa-trash-alt" style="font-size: 15px;"></i><strong>Eliminar</strong></span></a></td>';
    $html .= '</tr>'; 
}
} else {
$html .= '<tr>';
$html .= '<td colspan="9">Sin Resultados</td>';
$html .= '</tr>';
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);
?>

