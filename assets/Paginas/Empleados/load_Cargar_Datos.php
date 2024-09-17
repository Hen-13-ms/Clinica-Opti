<?php
require 'Conexion_Listado_Pacientes.php';

$columns = ['ID','DepartmentId','Cedula','Name','LastName','Phone','Address','EMail','PassWord','Sex','Age','BirthDate','NameLastName', 'PhonePerContact','RealtionShip'];
$table = "empleados";
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

// Aquí puedes imprimir la consulta SQL para depurar si es necesario
// echo $sql;

$resultado = $conn->query($sql);
$num_rows = $resultado->num_rows;

$html = '';

if ($num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $html .= '<tr>';
        // $html .= '<td>'. $row['ID'] . '</td>'; 
        $html .= '<td>'. $row['DepartmentId'] . '</td>';
        $html .= '<td>'. $row['Cedula'] . '</td>';
        $html .= '<td>'. $row['Name'] . '</td>';
        $html .= '<td>'. $row['LastName'] . '</td>';
        $html .= '<td>'. $row['Phone'] . '</td>';
        // $html .= '<td>'. $row['Address'] . '</td>';
        $html .= '<td>'. $row['EMail'] . '</td>';
        // $html .= '<td>'. $row['PassWord'] . '</td>';
        $html .= '<td>'. $row['Sex'] . '</td>';
        $html .= '<td>'. $row['Age'] . ' Años</td>';
        // $html .= '<td>'. $row['BirthDate'] . '</td>';
        // $html .= '<td>'. $row['NameLastName'] . '</td>';
        // $html .= '<td>'. $row['PhonePerContact'] . '</td>';
        // $html .= '<td>'. $row['RealtionShip'] . '</td>';
        // Los enlaces de editar y eliminar estaban basados en 'IdPaciente', los he cambiado a 'ID' para que coincidan con tus columnas
        $html .= '<td><a href="ModificarEmpleado.php?IdEmpleado='. $row['ID'] .'" style="color:#512da8; text-decoration: none;"><i class="fas fa-edit" style="font-size: smaller; border: none;"></i><strong> Editar</strong></a></td>';
        $html .= '<td>
            <form action="/CLINICA_OPTICA/generar_url.php" method="post" class="observar-form" target="_blank">
                <input type="hidden" name="nombre" value="' . htmlspecialchars($row['Name']) . '">
                <input type="hidden" name="apellido" value="' . htmlspecialchars($row['LastName']) . '">
                <button type="submit" style="background: none; border: none; color: #388e3c; cursor: pointer; text-decoration: none;">
                    <i class="fas fa-eye" style="font-size: smaller; border: none; margin-left: -45px;"></i><strong style="font-size: smaller">Observar</strong>
                </button>
            </form>
        </td>';
        $html .= '<td><div style="white-space: nowrap;"><a href="EliminarPaciente.php?IdEmpleado=' . $row['ID'] . '&DepartmentId=' . urlencode($row['DepartmentId']) . '&Cedula=' . urlencode($row['Cedula']) . '&Name=' . urlencode($row['Name']) . '&LastName=' . urlencode($row['LastName']) . '" style="color:red; text-decoration: none; cursor: pointer; margin-left: 20px;"><i class="fas fa-trash-alt" style="font-size: smaller; border: none;"></i><span style="font-weight: bold;"><strong>Eliminar</strong></span></a></div></td>';        
        $html .= '</tr>'; 
    }
} else {
    $html .= '<tr>';
    $html .= '<td colspan="15">Sin Resultados</td>'; // Ajusté el colspan al número total de columnas
    $html .= '</tr>';
}
echo json_encode($html, JSON_UNESCAPED_UNICODE);
?>

