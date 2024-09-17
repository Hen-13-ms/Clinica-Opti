<?php
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$apellido = isset($_POST['apellido']) ? $_POST['apellido'] : '';

$url = '/CLINICA_OPTICA/InformeAcciones.html?nombre=' . urlencode($nombre) . '&apellido=' . urlencode($apellido);

header("Location: $url");
exit;
?>