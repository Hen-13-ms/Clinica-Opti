<?php
require 'Conexion_Listado_Recetarios.php';

$columns = [' IdReporte', 'FechaCreacionReporte', 'CedulaPaciente','NombrePaciente','ApellidoPaciente','FechaNacimiento','EdadPaciente','NumeroDeTelefono','EmailPaciente',	
'MotivoConsulta','HisDeEnfermeActuales','UltimoControlVisual', 'AntecePatoloPersonales','AntePatoloOculares','AntePatoloSisYOculaFamiliares','SCOjoDerechoVisionLejana',	
'SCOjoDerechoVisionCercana',	
'SCOjoIzquierdoVisionLejana',	
'SCOjoIzquierdoVisionCercana',	
'SCAmbosOjosVL',	
'SCAmbosOjosVC',	
'CCOjoDerechoVisionLejana',	
'CCOjoDerechoVisionCercana',	
'CCOjoIzquierdoVisionLejana',	
'CCOjoIzquierdoVisionCercana',	
'CCAmbosOjosVL',	
'CCAmbosOjosVC',	
'ObservacionesExSub',	
'ObservacionesOjoDerecho',	
'ObservacionesOjoIzquierdo',	
'ReflejoPupilar',	
'PosiPriDeMiraPPM',	
'OjoDerechoRM',	
'OjoDerechoRL',	
'OjoDerechoRI',	
'OjoDerechoRS',	
'OjoDerechoOI',	
'OjoDerechoOS',	
'OjoIzquierdoRM',	
'OjoIzquierdoRL',	
'OjoIzquierdoRI',	
'OjoIzquierdoRS',	
'OjoIzquierdoOI',	
'OjoIzquierdoOS',	
'OjoDerePapilaObservvacion',	
'OjoDereExcavacionObservvacion',	
'OjoDereVasosObvacion',	
'OjoDereMaculaObvacion',	
'OjoDereFoveaObvacion',	
'OjoDereRenitaObvacion',
'OjoIzquiPapilaObservvacion',	
'OjoIzquiExcavacionObservvacion',	
'OjoIzquiVasosObvacion',	
'OjoIzquiMaculaObvacion',	
'OjoIzquiFoveaObvacion',	
'OjoIzquiRenitaObvacion',	
'RXOjoDerecho',	
'RXOjoIzquierdo',	
'RXAdd',	
'RXDX',	
'RXTTO',	
'OjoDerechoAV',	
'OjoIzquierdoAV',
'ObservacionesOjoIzOjoDer',
'OjoDerechoES',
'OjoDerechoCIL',
'OjoDerechoEJE',
'OjoDerechoADD',
'OjoDerechoAVv',
'OjoDerechoDP',
'OjoIzquierdoES',
'OjoIzquierdoCIL',
'OjoIzquierdoEJE',
'OjoIzquierdoADD',
'OjoIzquierdoAVv',
'OjoIzquierdoDP',
'AFacturar',
'ProxiControlFecha',	
'ProxiControlHora',	
'TipoDeCita'];

$table="formulariorecetar";
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

    $fecha_creacion = date('d/m/Y', strtotime($row['FechaCreacionReporte']));

    $cedula = substr_replace($row['CedulaPaciente'], '-', 3, 0); // Agrega el primer guion
    $cedula = substr_replace($cedula, '-', 11, 0); // Agrega el segundo guion

    $Telefono = substr_replace($row['NumeroDeTelefono'], '-', 3, 0); // Agrega el primer guion
    $Telefono = substr_replace($Telefono, '-', 7, 0); // Agrega el segundo guion

    
    $html .= '<tr>';
    // $html .= '<td>'. $row['IdReporte'] . '</td>';
    $html .= '<td>'. $fecha_creacion . '</td>';
    $html .= '<td>'. $cedula . '</td>';
    $html .= '<td>'. $row['NombrePaciente'] . '</td>';
    $html .= '<td>'. $row['ApellidoPaciente'] . '</td>';
    $html .= '<td>'. $Telefono . '</td>';
    $html .= '<td>'. $row['EmailPaciente'] . '</td>';
    $html .= '<td>'. $row['TipoDeCita'] . '</td>';
    $html .= '<td>'. $row['EmailPaciente'] . '</td>';
    // $html .= '<td>'. $row[''] . '</td>';
    $html .= '<td><div style="white-space: nowrap;">';
    $html .= '<a href="Editar_Historia_Optometria.php?IdReporte=' . $row['IdReporte'] . '&NombrePaciente=' . $row['NombrePaciente'] . '&ApellidoPaciente=' . $row['ApellidoPaciente'] . '" style="color:red; margin-right: 10px; text-decoration: none;"><i class="fas fa-edit" style="font-size: smaller;"></i><strong>Editar</strong></a>';
    $html .= '<a href="#" onclick="imprimir('.$row['IdReporte'].')" style="color:#512da8; margin-left: 10px; text-decoration: none; display: inline-block;"><i class="fas fa-print" style="font-size: smaller;"></i><strong>Imprimir</strong></a></div></td>';
    $html .= '</tr>';
 }
}else {
    $html .= '<tr>';
    $html .= '<td colspan="9">Sin Resultados</td>';
    $html .= '</tr>';
}


echo json_encode($html, JSON_UNESCAPED_UNICODE);
?>
