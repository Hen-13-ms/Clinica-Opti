<?php
require 'Conexion_Listado_Recetarios.php';    

session_start(); // Inicia la sesión PHP
$departmentId = isset($_SESSION['departmentId']) ? $_SESSION['departmentId'] : '';
$nombreUsuario = isset($_SESSION['nombre']) ? $_SESSION['nombre'] : '';
$apellidoUsuario = isset($_SESSION['apellido']) ? $_SESSION['apellido'] : '';

// Paso 3: Construir la consulta SQL de actualización
if (isset($_POST['btnGuardar'])) {
    $Cedula = isset($_POST['q4_paciente']) ? $conn->real_escape_string($_POST['q4_paciente']) : '';
    $NombrePaciente = isset($_POST['q4_pacienteNombre']) ? $conn->real_escape_string($_POST['q4_pacienteNombre']) : '';
    $ApellidoPaciente = isset($_POST['q4_pacienteApellido']) ? $conn->real_escape_string($_POST['q4_pacienteApellido']) : '';

    $idReporte = isset($_POST['IdReporte']) ? $conn->real_escape_string($_POST['IdReporte']) : '';

    $MotivoConsulta = isset($_POST['q14_motivoDe'])? $conn->real_escape_string($_POST['q14_motivoDe']):"";
    $HisDeEnfermeActuales = $conn->real_escape_string($_POST['q16_historiasDe']);

    $UltimoControlVisual = $conn->real_escape_string($_POST['q18_ultimoControl']);


    $AntecePatoloPersonales = $conn->real_escape_string($_POST['q20_antecedentesPatologicos']);
    $AntePatoloOculares = $conn->real_escape_string($_POST['q21_antecedentesPatologicos21']);

    $AntePatoloSisYOculaFamiliares = $conn->real_escape_string($_POST['q22_antecedentesPatologicos22']);

    $SCOjoDerechoVisionLejana = $conn->real_escape_string($_POST['q25_sinCorreccion1']);
    $SCOjoDerechoVisionCercana = $conn->real_escape_string($_POST['q25_sinCorreccion2']);

    $SCOjoIzquierdoVisionLejana = $conn->real_escape_string($_POST['q25_sinCorreccion11']);
    $SCOjoIzquierdoVisionCercana = $conn->real_escape_string($_POST['q25_sinCorreccion22']);

    $SCAmbosOjosVL = $conn->real_escape_string($_POST['q25_sinCorreccion111']);
    $SCAmbosOjosVC = $conn->real_escape_string($_POST['q25_sinCorreccion222']);


    $CCOjoDerechoVisionLejana = $conn->real_escape_string($_POST['q48_conCorreccion1']);
    $CCOjoDerechoVisionCercana = $conn->real_escape_string($_POST['q48_conCorreccion2']);

    $CCOjoIzquierdoVisionLejana = $conn->real_escape_string($_POST['q48_conCorreccion11']);
    $CCOjoIzquierdoVisionCercana = $conn->real_escape_string($_POST['q48_conCorreccion22']);

    $CCAmbosOjosVL = $conn->real_escape_string($_POST['q48_conCorreccion111']);
    $CCAmbosOjosVC = $conn->real_escape_string($_POST['q48_conCorreccion222']);

    $ObservacionesExSub = $conn->real_escape_string($_POST['q49_observaciones']);

    $ObservacionesOjoDerecho = $conn->real_escape_string($_POST['q54_observaciones54']);
    $ObservacionesOjoIzquierdo = $conn->real_escape_string($_POST['q65_observaciones65']);

    $ReflejoPupilar = $conn->real_escape_string($_POST['q63_reflejoPupilar']);
    $PosiPriDeMiraPPM = $conn->real_escape_string($_POST['q66_posicionPrimaria66']);

    // $OjoDerechoRM = $conn->real_escape_string($_POST['q61_ojoDerecho61_1']);
    // $OjoDerechoRL = $conn->real_escape_string($_POST['q61_ojoDerecho61_2']);
    // $OjoDerechoRI = $conn->real_escape_string($_POST['q61_ojoDerecho61_3']);
    // $OjoDerechoRS = $conn->real_escape_string($_POST['q61_ojoDerecho61_4']);
    // $OjoDerechoOI = $conn->real_escape_string($_POST['q61_ojoDerecho61_5']);
    // $OjoDerechoOS = $conn->real_escape_string($_POST['q61_ojoDerecho61_6']);

    $OjoDerechoRM = isset($_POST['q61_ojoDerecho61_1']) ? $conn->real_escape_string($_POST['q61_ojoDerecho61_1']) : '';
    $OjoDerechoRL = isset($_POST['q61_ojoDerecho61_2']) ? $conn->real_escape_string($_POST['q61_ojoDerecho61_2']) : '';
    $OjoDerechoRI = isset($_POST['q61_ojoDerecho61_3']) ? $conn->real_escape_string($_POST['q61_ojoDerecho61_3']) : '';
    $OjoDerechoRS = isset($_POST['q61_ojoDerecho61_4']) ? $conn->real_escape_string($_POST['q61_ojoDerecho61_4']) : '';
    $OjoDerechoOI = isset($_POST['q61_ojoDerecho61_5']) ? $conn->real_escape_string($_POST['q61_ojoDerecho61_5']) : '';
    $OjoDerechoOS = isset($_POST['q61_ojoDerecho61_6']) ? $conn->real_escape_string($_POST['q61_ojoDerecho61_6']) : '';

    $OjoIzquierdoRM = isset($_POST['q62_ojoIzquierdo62_1']) ? $conn->real_escape_string($_POST['q62_ojoIzquierdo62_1']) : '';
    $OjoIzquierdoRL = isset($_POST['q62_ojoIzquierdo62_2']) ? $conn->real_escape_string($_POST['q62_ojoIzquierdo62_2']) : '';
    $OjoIzquierdoRI = isset($_POST['q62_ojoIzquierdo62_3']) ? $conn->real_escape_string($_POST['q62_ojoIzquierdo62_3']) : '';
    $OjoIzquierdoRS = isset($_POST['q62_ojoIzquierdo62_4']) ? $conn->real_escape_string($_POST['q62_ojoIzquierdo62_4']) : '';
    $OjoIzquierdoOI = isset($_POST['q62_ojoIzquierdo62_5']) ? $conn->real_escape_string($_POST['q62_ojoIzquierdo62_5']) : '';
    $OjoIzquierdoOS = isset($_POST['q62_ojoIzquierdo62_6']) ? $conn->real_escape_string($_POST['q62_ojoIzquierdo62_6']) : '';
    // $OjoIzquierdoRM = $conn->real_escape_string($_POST['q62_ojoIzquierdo62_1']);
    // $OjoIzquierdoRL = $conn->real_escape_string($_POST['q62_ojoIzquierdo62_2']);
    // $OjoIzquierdoRI = $conn->real_escape_string($_POST['q62_ojoIzquierdo62_3']);
    // $OjoIzquierdoRS = $conn->real_escape_string($_POST['q62_ojoIzquierdo62_4']);
    // $OjoIzquierdoOI = $conn->real_escape_string($_POST['q62_ojoIzquierdo62_5']);
    // $OjoIzquierdoOS = $conn->real_escape_string($_POST['q62_ojoIzquierdo62_6']);


    $OjoDerePapilaObservvacion = $conn->real_escape_string($_POST['q68_ojoDerecho68_1']);
    $OjoDereExcavacionObservvacion = $conn->real_escape_string($_POST['q68_ojoDerecho68_2']);
    $OjoDereVasosObvacion = $conn->real_escape_string($_POST['q68_ojoDerecho68_3']);
    $OjoDereMaculaObvacion = $conn->real_escape_string($_POST['q68_ojoDerecho68_4']);
    $OjoDereFoveaObvacion = $conn->real_escape_string($_POST['q68_ojoDerecho68_5']);
    $OjoDereRenitaObvacion = $conn->real_escape_string($_POST['q68_ojoDerecho68_6']);


    $OjoIzquiPapilaObservvacion = $conn->real_escape_string($_POST['q70_ojoIzquierdo70_1']);
    $OjoIzquiExcavacionObservvacion = $conn->real_escape_string($_POST['q70_ojoIzquierdo70_2']);
    $OjoIzquiVasosObvacion = $conn->real_escape_string($_POST['q70_ojoIzquierdo70_3']);
    $OjoIzquiMaculaObvacion = $conn->real_escape_string($_POST['q70_ojoIzquierdo70_4']);
    $OjoIzquiFoveaObvacion = $conn->real_escape_string($_POST['q70_ojoIzquierdo70_5']);
    $OjoIzquiRenitaObvacion = $conn->real_escape_string($_POST['q70_ojoIzquierdo70_6']);


    $RXOjoDerecho = $conn->real_escape_string($_POST['q72_rxFinal_1']);
    $RXOjoIzquierdo = $conn->real_escape_string($_POST['q72_rxFinal_2']);
    $RXAdd = $conn->real_escape_string($_POST['q72_rxFinal_3']);
    $RXDX = $conn->real_escape_string($_POST['q72_rxFinal_4']);
    $RXTTO = $conn->real_escape_string($_POST['q72_rxFinal_5']);

    $OjoDerechoAV = $conn->real_escape_string($_POST['q73_agudezaVisual_1']);
    $OjoIzquierdoAV = $conn->real_escape_string($_POST['q73_agudezaVisual_2']);
    $ObservacionesOjoIzOjoDer = $conn->real_escape_string($_POST['q73_agudezaVisual_Observaciones']);
    $AFacturar = $conn->real_escape_string($_POST['AFacturar']);

    $ProxiControlFecha = $conn->real_escape_string($_POST['q74_proximoControlDia']);
    $ProxiControlHora = $conn->real_escape_string($_POST['q74_proximoControlHora']);
    $TipoDeCita = $conn->real_escape_string($_POST['TipoDeCita']);

    $sql ="UPDATE formulariorecetar SET
        MotivoConsulta='$MotivoConsulta',
        HisDeEnfermeActuales='$HisDeEnfermeActuales', 
        UltimoControlVisual='$UltimoControlVisual',
        AntecePatoloPersonales='$AntecePatoloPersonales', 
        AntePatoloOculares='$AntePatoloOculares', 
        AntePatoloSisYOculaFamiliares='$AntePatoloSisYOculaFamiliares', 
        SCOjoDerechoVisionLejana='$SCOjoDerechoVisionLejana', 
        SCOjoDerechoVisionCercana='$SCOjoDerechoVisionCercana', 
        SCOjoIzquierdoVisionLejana='$SCOjoIzquierdoVisionLejana', 
        SCOjoIzquierdoVisionCercana='$SCOjoIzquierdoVisionCercana', 
        SCAmbosOjosVL='$SCAmbosOjosVL', 
        SCAmbosOjosVC='$SCAmbosOjosVC', 
        CCOjoDerechoVisionLejana='$CCOjoDerechoVisionLejana', 
        CCOjoDerechoVisionCercana='$CCOjoDerechoVisionCercana', 
        CCOjoIzquierdoVisionLejana='$CCOjoIzquierdoVisionLejana', 
        CCOjoIzquierdoVisionCercana='$CCOjoIzquierdoVisionCercana', 
        CCAmbosOjosVL='$CCAmbosOjosVL', 
        CCAmbosOjosVC='$CCAmbosOjosVC', 
        ObservacionesExSub='$ObservacionesExSub', 
        ObservacionesOjoDerecho='$ObservacionesOjoDerecho', 
        ObservacionesOjoIzquierdo='$ObservacionesOjoIzquierdo', 
        ReflejoPupilar='$ReflejoPupilar', 
        PosiPriDeMiraPPM='$PosiPriDeMiraPPM', 
        OjoDerechoRM='$OjoDerechoRM', 
        OjoDerechoRL='$OjoDerechoRL', 
        OjoDerechoRI='$OjoDerechoRI', 
        OjoDerechoRS='$OjoDerechoRS', 
        OjoDerechoOI='$OjoDerechoOI', 
        OjoDerechoOS='$OjoDerechoOS', 
        OjoIzquierdoRM='$OjoIzquierdoRM', 
        OjoIzquierdoRL='$OjoIzquierdoRL', 
        OjoIzquierdoRI='$OjoIzquierdoRI', 
        OjoIzquierdoRS='$OjoIzquierdoRS', 
        OjoIzquierdoOI='$OjoIzquierdoOI', 
        OjoIzquierdoOS='$OjoIzquierdoOS', 
        OjoDerePapilaObservvacion='$OjoDerePapilaObservvacion', 
        OjoDereExcavacionObservvacion='$OjoDereExcavacionObservvacion', 
        OjoDereVasosObvacion='$OjoDereVasosObvacion', 
        OjoDereMaculaObvacion='$OjoDereMaculaObvacion', 
        OjoDereFoveaObvacion='$OjoDereFoveaObvacion', 
        OjoDereRenitaObvacion='$OjoDereRenitaObvacion', 
        OjoIzquiPapilaObservvacion='$OjoIzquiPapilaObservvacion', 
        OjoIzquiExcavacionObservvacion='$OjoIzquiExcavacionObservvacion', 
        OjoIzquiVasosObvacion='$OjoIzquiVasosObvacion', 
        OjoIzquiMaculaObvacion='$OjoIzquiMaculaObvacion', 
        OjoIzquiFoveaObvacion='$OjoIzquiFoveaObvacion', 
        OjoIzquiRenitaObvacion='$OjoIzquiRenitaObvacion', 
        RXOjoDerecho='$RXOjoDerecho', 
        RXOjoIzquierdo='$RXOjoIzquierdo', 
        RXAdd='$RXAdd', 
        RXDX='$RXDX', 
        RXTTO='$RXTTO', 
        OjoDerechoAV='$OjoDerechoAV', 
        OjoIzquierdoAV='$OjoIzquierdoAV', 
        ObservacionesOjoIzOjoDer='$ObservacionesOjoIzOjoDer', 
        AFacturar='$AFacturar',
        ProxiControlFecha='$ProxiControlFecha', 
        ProxiControlHora='$ProxiControlHora', 
        TipoDeCita='$TipoDeCita' 
        WHERE IdReporte='$idReporte'";
}

    // Paso 4: Ejecutar la consulta SQL
    if (isset($sql)) {
        if (mysqli_query($conn, $sql)) {

            $accion = "Se ha modificado la receta del paciente $NombrePaciente $ApellidoPaciente, Cedula: $Cedula";
            $sql_actividades = "INSERT INTO actividadesrealizadas (nombreUsuario, ApellidoUsuario, CargoDeUsuario, Accion) VALUES ('$nombreUsuario','$apellidoUsuario','$departmentId','$accion')"; 
            $conn->query($sql_actividades);

            echo "<div class='alert-container'>
                      <div class='alert'>
                          <p>Los datos se han actualizado correctamente.</p>
                      </div>
                  </div>";
    
            echo "<style>
                      .alert-container {
                          text-align: center;
                          margin-top: 20px;
                          animation: fadeIn 0.5s ease-in-out;
                      }
    
                      .alert {
                          background-color: #4CAF50;
                          color: white;
                          padding: 20px;
                          border-radius: 5px;
                          font-size: 2.1rem;
                          animation: slideIn 0.5s ease-in-out;
                      }
    
                      .alert p {
                          margin: 0;
                      }
    
                      @keyframes fadeIn {
                          from {
                              opacity: 0;
                          }
                          to {
                              opacity: 1;
                          }
                      }
    
                      @keyframes slideIn {
                          from {
                              height: 0;
                          }
                          to {
                              height: auto;
                          }
                      }
                  </style>";
    
            echo "<script>
                      setTimeout(function(){
                          document.querySelector('.alert').style.animation = 'fadeOut 0.5s ease-in-out';
                          document.querySelector('.alert-container').style.animation = 'fadeOut 0.5s ease-in-out';
                          setTimeout(function(){
                              window.location.href = 'Listado_Reporte_Recetarios.html';
                          }, 3000); // Redirigir después de 3 segundos
                      }, 2000);
                  </script>";
        } else {
            echo "<div class='alert-container'>
                      <div class='alert'>
                          <p>Error al actualizar los datos: " . mysqli_error($conn) . "</p>
                      </div>
                  </div>";
        }
    }
// Paso 6: Cerrar la conexión a la base de datos
$conn->close();
?>