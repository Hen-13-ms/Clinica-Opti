<?php
session_start(); // Inicia la sesión PHP
$departmentId = isset($_SESSION['departmentId']) ? $_SESSION['departmentId'] : '';
$nombreUsuario = isset($_SESSION['nombre']) ? $_SESSION['nombre'] : '';
$apellidoUsuario = isset($_SESSION['apellido']) ? $_SESSION['apellido'] : '';
$NomApeDoctor = $nombreUsuario . ' ' . $apellidoUsuario;

if (isset($_POST['q61_ojoDerecho61_1']) || isset($_POST['q61_ojoDerecho61_2']) || isset($_POST['q61_ojoDerecho61_3']) || isset($_POST['q61_ojoDerecho61_4']) || isset($_POST['q61_ojoDerecho61_5']) || isset($_POST['q61_ojoDerecho61_6'])) {
	// Aquí pones el código para procesar los datos cuando al menos un checkbox está marcado   Validacion de CheckBox
} 

if (isset($_POST['q62_ojoIzquierdo62_1']) || isset($_POST['q62_ojoIzquierdo62_2']) || isset($_POST['q62_ojoIzquierdo62_3']) || isset($_POST['q62_ojoIzquierdo62_4']) || isset($_POST['q62_ojoIzquierdo62_5']) || isset($_POST['q62_ojoIzquierdo62_6'])) {
	// Aquí pones el código para procesar los datos cuando al menos un checkbox está marcado   Validacion de CheckBox
} 

$host = "localhost";
$user = "root";
$clave = "";
$bd = "clinica_opti";

$conectar = mysqli_connect($host,$user,$clave,$bd);

        $day = $_POST['q19_fecha']['day'];
		$month = $_POST['q19_fecha']['month'];
		$year = $_POST['q19_fecha']['year'];
        $FechaCreacionReporte = $year . '-' . $month . '-' . $day;

	    // $FechaCreacionReporte             = $_POST ['lite_mode_19'];		
		$CedulaPaciente		              = $_POST ['q4_paciente'];
		$NombrePaciente	                  = $_POST ['q4_pacienteNombre'];
		$ApellidoPaciente		          = $_POST ['q4_pacienteApellido'];
		$FechaNacimiento	              = $_POST ['q10_edadd'];
		$EdadPaciente	                  = $_POST ['q10_edad'];
		$NumeroDeTelefono	              = $_POST ['q7_numeroDeTelefono'];
		$EmailPaciente		              = $_POST ['q11_email'];
		$MotivoConsulta	                  = $_POST ['q14_motivoDe']; //no problema
		$HisDeEnfermeActuales	          = $_POST ['q16_historiasDe']; //no probleema

		$day = $_POST['q18_ultimoControl']['day'];
		$month = $_POST['q18_ultimoControl']['month'];
		$year = $_POST['q18_ultimoControl']['year'];
		$UltimoControlVisual = $year . '-' . $month . '-' . $day;
		
		$AntecePatoloPersonales	          = $_POST ['q20_antecedentesPatologicos']; // no problema
		$AntePatoloOculares	              = $_POST ['q21_antecedentesPatologicos21']; //no problema
		$AntePatoloSisYOculaFamiliares	  = $_POST ['q22_antecedentesPatologicos22']; //no problema
		$SCOjoDerechoVisionLejana	      = $_POST ['q25_sinCorreccion1'];
		$SCOjoDerechoVisionCercana	      = $_POST ['q25_sinCorreccion2'];
		$SCOjoIzquierdoVisionLejana		  = $_POST ['q25_sinCorreccion11'];
		$SCOjoIzquierdoVisionCercana	  = $_POST ['q25_sinCorreccion22'];
		$SCAmbosOjosVL	                  = $_POST ['q25_sinCorreccion111'];
		$SCAmbosOjosVC	                  = $_POST ['q25_sinCorreccion222'];
		$CCOjoDerechoVisionLejana	      = $_POST ['q48_conCorreccion1'];
		$CCOjoDerechoVisionCercana		  = $_POST ['q48_conCorreccion2'];
		$CCOjoIzquierdoVisionLejana		  = $_POST ['q48_conCorreccion11'];
		$CCOjoIzquierdoVisionCercana	  = $_POST ['q48_conCorreccion22'];
		$CCAmbosOjosVL		              = $_POST ['q48_conCorreccion111'];
		$CCAmbosOjosVC	                  = $_POST ['q48_conCorreccion222'];
		$ObservacionesExSub		          = $_POST ['q49_observaciones']; //no problema
		$ObservacionesOjoDerecho	      = $_POST ['q54_observaciones54']; //no problema
		$ObservacionesOjoIzquierdo		  = $_POST ['q65_observaciones65']; //no  problema
		$ReflejoPupilar		              = $_POST ['q63_reflejoPupilar']; //no problema
		$PosiPriDeMiraPPM		          = $_POST ['q66_posicionPrimaria66']; //no problema

		
		$OjoDerechoRM = isset($_POST['q61_ojoDerecho61_1']) ? $_POST['q61_ojoDerecho61_1'] : '';
        $OjoDerechoRL = isset($_POST['q61_ojoDerecho61_2']) ? $_POST['q61_ojoDerecho61_2'] : '';
        $OjoDerechoRI = isset($_POST['q61_ojoDerecho61_3']) ? $_POST['q61_ojoDerecho61_3'] : '';
        $OjoDerechoRS = isset($_POST['q61_ojoDerecho61_4']) ? $_POST['q61_ojoDerecho61_4'] : '';
        $OjoDerechoOI = isset($_POST['q61_ojoDerecho61_5']) ? $_POST['q61_ojoDerecho61_5'] : '';
        $OjoDerechoOS = isset($_POST['q61_ojoDerecho61_6']) ? $_POST['q61_ojoDerecho61_6'] : '';

		
		$OjoIzquierdoRM = isset($_POST['q62_ojoIzquierdo62_1']) ? $_POST['q62_ojoIzquierdo62_1'] : '';
        $OjoIzquierdoRL = isset($_POST['q62_ojoIzquierdo62_2']) ? $_POST['q62_ojoIzquierdo62_2'] : '';
        $OjoIzquierdoRI = isset($_POST['q62_ojoIzquierdo62_3']) ? $_POST['q62_ojoIzquierdo62_3'] : '';
        $OjoIzquierdoRS = isset($_POST['q62_ojoIzquierdo62_4']) ? $_POST['q62_ojoIzquierdo62_4'] : '';
        $OjoIzquierdoOI = isset($_POST['q62_ojoIzquierdo62_5']) ? $_POST['q62_ojoIzquierdo62_5'] : '';
        $OjoIzquierdoOS = isset($_POST['q62_ojoIzquierdo62_6']) ? $_POST['q62_ojoIzquierdo62_6'] : '';


		$OjoDerePapilaObservvacion	      = $_POST ['q68_ojoDerecho68_1'];
		$OjoDereExcavacionObservvacion	  = $_POST ['q68_ojoDerecho68_2'];
		$OjoDereVasosObvacion	          = $_POST ['q68_ojoDerecho68_3'];
		$OjoDereMaculaObvacion	 	      = $_POST ['q68_ojoDerecho68_4'];
		$OjoDereFoveaObvacion		      = $_POST ['q68_ojoDerecho68_5'];
		$OjoDereRenitaObvacion	          = $_POST ['q68_ojoDerecho68_6'];
		$OjoIzquiPapilaObservvacion	      = $_POST ['q70_ojoIzquierdo70_1'];
		$OjoIzquiExcavacionObservvacion   = $_POST ['q70_ojoIzquierdo70_2'];
		$OjoIzquiVasosObvacion		      = $_POST ['q70_ojoIzquierdo70_3'];
		$OjoIzquiMaculaObvacion		      = $_POST ['q70_ojoIzquierdo70_4'];
		$OjoIzquiFoveaObvacion		      = $_POST ['q70_ojoIzquierdo70_5'];
		$OjoIzquiRenitaObvacion		      = $_POST ['q70_ojoIzquierdo70_6'];
		$RXOjoDerecho	                  = $_POST ['q72_rxFinal_1'];
		$RXOjoIzquierdo		              = $_POST ['q72_rxFinal_2'];
		$RXAdd	                          = $_POST ['q72_rxFinal_3'];
		$RXDX	                          = $_POST ['q72_rxFinal_4'];
		$RXTTO	                          = $_POST ['q72_rxFinal_5'];
		$OjoDerechoAV	                  = $_POST ['q73_agudezaVisual_1'];
		$OjoIzquierdoAV                   = $_POST ['q73_agudezaVisual_2'];
        $ObservacionesOjoIzOjoDer         = $_POST ['q73_agudezaVisual_Observaciones'];

        $OjoDerechoES                     = $_POST ['OjoDerechoES'];
        $OjoDerechoCIL                    = $_POST ['OjoDerechoCIL'];
        $OjoDerechoEJE                    = $_POST ['OjoDerechoEJE'];
        $OjoDerechoADD                    = $_POST ['OjoDerechoADD'];
        $OjoDerechoAVv                    = $_POST ['OjoDerechoAVv'];
        $OjoDerechoDP                     = $_POST ['OjoDerechoDP'];
        $OjoIzquierdoES                   = $_POST ['OjoIzquierdoES'];
        $OjoIzquierdoCIL                  = $_POST ['OjoIzquierdoCIL'];
        $OjoIzquierdoEJE                  = $_POST ['OjoIzquierdoEJE'];
        $OjoIzquierdoADD                  = $_POST ['OjoIzquierdoADD'];
        $OjoIzquierdoAVv                  = $_POST ['OjoIzquierdoAVv'];
        $OjoIzquierdoDP                   = $_POST ['OjoIzquierdoDP'];

        $AFacturar	                      = $_POST ['AFacturar'];
        $ProxiControlFecha	              = $_POST ['q74_proximoControlDia'];
        $ProxiControlHora	              = $_POST ['q74_proximoControlHora'];
        $TipoDeCita	                      = $_POST ['TipoDeCita'];



 $insertar = "INSERT INTO formulariorecetar VALUES ('','$FechaCreacionReporte','$CedulaPaciente','$NombrePaciente','$ApellidoPaciente','$FechaNacimiento','$EdadPaciente','$NumeroDeTelefono', 
'$EmailPaciente', '$MotivoConsulta', '$HisDeEnfermeActuales', '$UltimoControlVisual', '$AntecePatoloPersonales', '$AntePatoloOculares','$AntePatoloSisYOculaFamiliares','$SCOjoDerechoVisionLejana',
'$SCOjoDerechoVisionCercana', '$SCOjoIzquierdoVisionLejana', '$SCOjoIzquierdoVisionCercana', '$SCAmbosOjosVL', '$SCAmbosOjosVC',
'$CCOjoDerechoVisionLejana', '$CCOjoDerechoVisionCercana', '$CCOjoIzquierdoVisionLejana', '$CCOjoIzquierdoVisionCercana', '$CCAmbosOjosVL', '$CCAmbosOjosVC', '$ObservacionesExSub', '$ObservacionesOjoDerecho', 
'$ObservacionesOjoIzquierdo', '$ReflejoPupilar', '$PosiPriDeMiraPPM', '$OjoDerechoRM', '$OjoDerechoRL', '$OjoDerechoRI', '$OjoDerechoRS', '$OjoDerechoOI', '$OjoDerechoOS', '$OjoIzquierdoRM', '$OjoIzquierdoRL', 
'$OjoIzquierdoRI', '$OjoIzquierdoRS', '$OjoIzquierdoOI', '$OjoIzquierdoOS', '$OjoDerePapilaObservvacion', '$OjoDereExcavacionObservvacion', '$OjoDereVasosObvacion', '$OjoDereMaculaObvacion', '$OjoDereFoveaObvacion', 
'$OjoDereRenitaObvacion', '$OjoIzquiPapilaObservvacion', '$OjoIzquiExcavacionObservvacion', '$OjoIzquiVasosObvacion', '$OjoIzquiMaculaObvacion', '$OjoIzquiFoveaObvacion', '$OjoIzquiRenitaObvacion', '$RXOjoDerecho', 
'$RXOjoIzquierdo', '$RXAdd', '$RXDX', '$RXTTO', '$OjoDerechoAV', '$OjoIzquierdoAV', '$ObservacionesOjoIzOjoDer', '$OjoDerechoES','$OjoDerechoCIL','$OjoDerechoEJE','$OjoDerechoADD','$OjoDerechoAVv','$OjoDerechoDP','$OjoIzquierdoES',
'$OjoIzquierdoCIL','$OjoIzquierdoEJE','$OjoIzquierdoADD','$OjoIzquierdoAVv','$OjoIzquierdoDP','$AFacturar', '$ProxiControlFecha', '$ProxiControlHora', '$TipoDeCita')";

$insertar = "INSERT INTO consultassinfacturar VALUES ('',
'$CedulaPaciente',
'$NombrePaciente',
'$ApellidoPaciente',
'$EdadPaciente',
'$FechaCreacionReporte',
'$AFacturar',
'$NomApeDoctor',
'$OjoDerechoES',
'$OjoDerechoCIL',
'$OjoDerechoEJE',
'$OjoDerechoADD',
'$OjoDerechoAVv',
'$OjoDerechoDP',
'$OjoIzquierdoES',
'$OjoIzquierdoCIL',
'$OjoIzquierdoEJE',
'$OjoIzquierdoADD',
'$OjoIzquierdoAVv',
'$OjoIzquierdoDP')";

$query= mysqli_query($conectar, $insertar);

// Alerta luego de guardar. 
if($query)
{

    $accion = "Se ha emitido una nueva receta para el paciente $NombrePaciente $ApellidoPaciente, cedula: $CedulaPaciente, por motivos de: $MotivoConsulta, Lo cual se le manda a facturar: $AFacturar";
    $sql_actividades = "INSERT INTO actividadesrealizadas (nombreUsuario, ApellidoUsuario, CargoDeUsuario, Accion) VALUES ('$nombreUsuario','$apellidoUsuario','$departmentId','$accion')"; 
    $conectar->query($sql_actividades);
    
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

echo "<div class='alert-container'>
    <div class='alert'>
        <p>Registro Guardado Correctamente</p>
    </div>
  </div>";

// Aquí agregamos la ruta deseada a la parte de location.href
echo "<script>
    setTimeout(function(){
        document.querySelector('.alert').style.animation = 'fadeOut 0.5s ease-in-out';
        document.querySelector('.alert-container').style.animation = 'fadeOut 0.5s ease-in-out';
        setTimeout(function(){
            location.href = 'Historia_Optometria.php';
        }, 500);
    }, 2000);
  </script>";
    }else{
    echo "<script> alert ('Registro no Guardado');
  location.href = '../Historia_Optometria.php';
  </script>";
}
?>