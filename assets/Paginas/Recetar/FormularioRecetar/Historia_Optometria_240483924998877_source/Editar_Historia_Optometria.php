<?php
require 'Conexion_Listado_Recetarios.php';

if(isset($_GET['IdReporte'])) {
  $idReporte = $conn->real_escape_string($_GET['IdReporte']);

  $sql = "SELECT * FROM formulariorecetar WHERE IdReporte = '$idReporte'";
    $resultado = $conn->query($sql);

    if($resultado->num_rows == 1) {
      $fila = $resultado->fetch_assoc(); // Obtiene los datos del reporte
   
      $UltimoControlVisual = $fila['UltimoControlVisual'];
      $fechaFormateada = date('d-m-Y', strtotime($UltimoControlVisual));

      $ProxiControlHora = $fila['ProxiControlHora'];
      // Dividir el valor en horas, minutos y segundos
      list($horas, $minutos, $segundos) = explode(':', $ProxiControlHora);
      // Obtén el valor del campo asociado al checkbox
      $valorCheckboxRM = $fila['OjoDerechoRM']; // Reemplaza 'campo_asociado' por el nombre del campo en tu base de datos
      $valorCheckboxRL = $fila['OjoDerechoRL'];
      $valorCheckboxRI = $fila['OjoDerechoRI'];
      $valorCheckboxRS = $fila['OjoDerechoRS'];
      $valorCheckboxOI = $fila['OjoDerechoOI'];
      $valorCheckboxOS = $fila['OjoDerechoOS'];

      $valorCheckboxIzquierdoRM = $fila['OjoIzquierdoRM']; // Reemplaza 'campo_asociado' por el nombre del campo en tu base de datos
      $valorCheckboxIzquierdoRL = $fila['OjoIzquierdoRL'];
      $valorCheckboxIzquierdoRI = $fila['OjoIzquierdoRI'];
      $valorCheckboxIzquierdoRS = $fila['OjoIzquierdoRS'];
      $valorCheckboxIzquierdoOI = $fila['OjoIzquierdoOI'];
      $valorCheckboxIzquierdoOS = $fila['OjoIzquierdoOS'];


// Asignar los datos del paciente a variables (puedes acceder a ellos como $fila['NombreColumna'])
// Por ejemplo:
$CedulaPaciente = $fila['CedulaPaciente'];
$NombrePaciente = $fila['NombrePaciente'];
$ApellidoPaciente	= $fila ['ApellidoPaciente'];
$FechaNacimiento	              = $fila ['FechaNacimiento'];
$EdadPaciente	                  = $fila ['EdadPaciente'];
$NumeroDeTelefono	              = $fila ['NumeroDeTelefono'];
$EmailPaciente		              = $fila ['EmailPaciente'];

$MotivoConsulta	                  = $fila ['MotivoConsulta']; //no problema
$HisDeEnfermeActuales	          = $fila ['HisDeEnfermeActuales']; //no probleema

$fechaUltimoControl = new DateTime($fila['UltimoControlVisual']);
$day = $fechaUltimoControl->format('d');
$month = $fechaUltimoControl->format('m');
$year = $fechaUltimoControl->format('Y');
$UltimoControlVisual = $year . '-' . $month . '-' . $day;

// $day = $fila['UltimoControlVisual']['day'];
// $month = $fila['UltimoControlVisual']['month'];
// $year = $fila['UltimoControlVisual']['year'];
// $UltimoControlVisual = $year . '-' . $month . '-' . $day;

$AntecePatoloPersonales	          = $fila ['AntecePatoloPersonales']; // no problema
$AntePatoloOculares	              = $fila ['AntePatoloOculares']; //no problema
$AntePatoloSisYOculaFamiliares	  = $fila ['AntePatoloSisYOculaFamiliares']; //no problema
$SCOjoDerechoVisionLejana	      = $fila ['SCOjoDerechoVisionLejana'];
$SCOjoDerechoVisionCercana	      = $fila ['SCOjoDerechoVisionCercana'];
$SCOjoIzquierdoVisionLejana		  = $fila ['SCOjoIzquierdoVisionLejana'];
$SCOjoIzquierdoVisionCercana	  = $fila ['SCOjoIzquierdoVisionCercana'];
$SCAmbosOjosVL	                  = $fila ['SCAmbosOjosVL'];
$SCAmbosOjosVC	                  = $fila ['SCAmbosOjosVC'];
$CCOjoDerechoVisionLejana	      = $fila ['CCOjoDerechoVisionLejana'];
$CCOjoDerechoVisionCercana		  = $fila ['CCOjoDerechoVisionCercana'];
$CCOjoIzquierdoVisionLejana		  = $fila ['CCOjoIzquierdoVisionLejana'];
$CCOjoIzquierdoVisionCercana	  = $fila ['CCOjoIzquierdoVisionCercana'];
$CCAmbosOjosVL		              = $fila ['CCAmbosOjosVL'];
$CCAmbosOjosVC	                  = $fila ['CCAmbosOjosVC'];
$ObservacionesExSub		          = $fila ['ObservacionesExSub']; //no problema
$ObservacionesOjoDerecho	      = $fila ['ObservacionesOjoDerecho']; //no problema
$ObservacionesOjoIzquierdo		  = $fila ['ObservacionesOjoIzquierdo']; //no  problema
$ReflejoPupilar		              = $fila ['ReflejoPupilar']; //no problema
$PosiPriDeMiraPPM		          = $fila ['PosiPriDeMiraPPM']; //no problema


$OjoDerechoRM = isset($fila['OjoDerechoRM']) ? $fila['OjoDerechoRM'] : '';
$OjoDerechoRL = isset($_POST['OjoDerechoRL']) ? $_POST['OjoDerechoRL'] : '';
$OjoDerechoRI = isset($_POST['OjoDerechoRI']) ? $_POST['OjoDerechoRI'] : '';
$OjoDerechoRS = isset($_POST['OjoDerechoRS']) ? $_POST['OjoDerechoRS'] : '';
$OjoDerechoOI = isset($_POST['OjoDerechoOI']) ? $_POST['OjoDerechoOI'] : '';
$OjoDerechoOS = isset($_POST['OjoDerechoOS']) ? $_POST['OjoDerechoOS'] : '';


$OjoIzquierdoRM = isset($_POST['OjoIzquierdoRM']) ? $_POST['OjoIzquierdoRM'] : '';
$OjoIzquierdoRL = isset($_POST['OjoIzquierdoRL']) ? $_POST['OjoIzquierdoRL'] : '';
$OjoIzquierdoRI = isset($_POST['OjoIzquierdoRI']) ? $_POST['OjoIzquierdoRI'] : '';
$OjoIzquierdoRS = isset($_POST['OjoIzquierdoRS']) ? $_POST['OjoIzquierdoRS'] : '';
$OjoIzquierdoOI = isset($_POST['OjoIzquierdoOI']) ? $_POST['OjoIzquierdoOI'] : '';
$OjoIzquierdoOS = isset($_POST['OjoIzquierdoOS']) ? $_POST['OjoIzquierdoOS'] : '';


$OjoDerePapilaObservvacion	      = $fila ['OjoDerePapilaObservvacion'];
$OjoDereExcavacionObservvacion	  = $fila ['OjoDereExcavacionObservvacion'];
$OjoDereVasosObvacion	          = $fila ['OjoDereVasosObvacion'];
$OjoDereMaculaObvacion	 	      = $fila ['OjoDereMaculaObvacion'];
$OjoDereFoveaObvacion		      = $fila ['OjoDereFoveaObvacion'];
$OjoDereRenitaObvacion	          = $fila ['OjoDereRenitaObvacion'];
$OjoIzquiPapilaObservvacion	      = $fila ['OjoIzquiPapilaObservvacion'];
$OjoIzquiExcavacionObservvacion   = $fila ['OjoIzquiExcavacionObservvacion'];
$OjoIzquiVasosObvacion		      = $fila ['OjoIzquiVasosObvacion'];
$OjoIzquiMaculaObvacion		      = $fila ['OjoIzquiMaculaObvacion'];
$OjoIzquiFoveaObvacion		      = $fila ['OjoIzquiFoveaObvacion'];
$OjoIzquiRenitaObvacion		      = $fila ['OjoIzquiRenitaObvacion'];
$RXOjoDerecho	                  = $fila ['RXOjoDerecho'];
$RXOjoIzquierdo		              = $fila ['RXOjoIzquierdo'];
$RXAdd	                          = $fila ['RXAdd'];
$RXDX	                          = $fila ['RXDX'];
$RXTTO	                          = $fila ['RXTTO'];
$OjoDerechoAV	                  = $fila ['OjoDerechoAV'];
$OjoIzquierdoAV                   = $fila ['OjoIzquierdoAV'];
$ObservacionesOjoIzOjoDer         = $fila ['ObservacionesOjoIzOjoDer'];
$AFacturar                        = $fila ['AFacturar'];

$ProxiControlFecha	              = $fila ['ProxiControlFecha'];
$ProxiControlHora	              = $fila ['ProxiControlHora'];
$TipoDeCita	                      = $fila ['TipoDeCita'];
}else {
    echo "No se encontró ningún reporte con el IdReporte proporcionado.";
    exit(); // Sale del script si no se encuentra ningún paciente
} 
}else {
  echo "No se proporcionó el parámetro IdPaciente.";
  exit(); // Sale del script si no se proporciona el parámetro IdPaciente
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="es"  class="supernova "><head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=https%3A%2F%2Fform.jotform.com%2F240483924998877" title="oEmbed Form">
<link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=https%3A%2F%2Fform.jotform.com%2F240483924998877" title="oEmbed Form">
<meta property="og:title" content="Historia Clínicacde Optometría" >
<meta property="og:url" content="https://form.jotform.com/240483924998877" >
<meta property="og:description" content="Please click the link to complete this form." >
<meta name="slack-app-id" content="AHNMASS8M">
<meta property="og:image" content="https://cdn.jotfor.ms/assets/img/landing/opengraph.png" />
<link rel="shortcut icon" href="https://cdn.jotfor.ms/assets/img/favicons/favicon-2021-light%402x.png">
<link rel="apple-touch-icon" href="https://cdn.jotfor.ms/assets/img/favicons/favicon-2021-light%402x.png">
<script>
          var favicon = document.querySelector('link[rel="shortcut icon"]');
          window.isDarkMode = (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches);
          if(favicon && window.isDarkMode) {
              favicon.href = favicon.href.replaceAll('favicon-2021-light%402x.png', 'favicon-2021-dark%402x.png');
          }
      </script><link rel="canonical" href="https://form.jotform.com/240483924998877" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
<meta name="HandheldFriendly" content="true" />
<title>Historia Clínicacde Optometría</title>
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/stylebuilder/static/form-common.css?v=06fb5a6"/>
<!-- <style type="text/css">@media print{*{-webkit-print-color-adjust: exact !important; color-adjust: exact !important;}.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style> -->



<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?v=3.3.51430&themeRevisionID=5f6c4d5f89fb4a374f76b581"/>
<style>
        /* Sobrescribe el color de fondo para el body */
        body {
            background-color: #fff; /* Cambia el color a rojo (#FF0000) */
        }
    </style>
<link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/css/styles/payment/payment_styles.css?3.3.51430" />
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/css/styles/payment/payment_feature.css?3.3.51430" />
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/stylebuilder/static/donationBox.css?v=3.3.51430">
<script src="https://cdn03.jotfor.ms/static/prototype.forms.js?v=3.3.51430" type="text/javascript"></script>
<script src="https://cdn01.jotfor.ms/static/jotform.forms.js?v=3.3.51430" type="text/javascript"></script>
<script src="https://cdn02.jotfor.ms/js/vendor/maskedinput_5.0.9.min.js?v=3.3.51430" type="text/javascript"></script>
<script src="https://cdn03.jotfor.ms/js/punycode-1.4.1.min.js?v=3.3.51430" type="text/javascript" defer></script>
<script src="https://cdn01.jotfor.ms/s/umd/b8cc0de9769/for-widgets-server.js?v=3.3.51430" type="text/javascript"></script>
<script src="https://cdn01.jotfor.ms/s/umd/b8cc0de9769/for-appointment-field.js?v=3.3.51430" type="text/javascript"></script>
<!-- <script src="https://cdn01.jotfor.ms/s/umd/b8cc0de9769/for-form-branding-footer.js?v=3.3.51430" type="text/javascript" defer></script> -->
<script src="https://cdn01.jotfor.ms/js/vendor/smoothscroll.min.js?v=3.3.51430" type="text/javascript"></script>
<script src="https://cdn02.jotfor.ms/js/errorNavigation.js?v=3.3.51430" type="text/javascript"></script>

<script type="text/javascript">	JotForm.newDefaultTheme = true;
	JotForm.extendsNewTheme = false;
	JotForm.singleProduct = true;
	JotForm.newPaymentUIForNewCreatedForms = true;
	JotForm.texts = {"confirmEmail":"E-mail does not match","pleaseWait":"Please wait...","validateEmail":"You need to validate this e-mail","confirmClearForm":"Are you sure you want to clear the form","lessThan":"Your score should be less than or equal to","incompleteFields":"There are incomplete required fields. Please complete them.","required":"Este Campo es Requerido.","requireOne":"Al menos un campo es requerido.","requireEveryRow":"Every row is required.","requireEveryCell":"Every cell is required.","email":"Enter a valid e-mail address","alphabetic":"This field can only contain letters","numeric":"This field can only contain numeric values","alphanumeric":"This field can only contain letters and numbers.","cyrillic":"This field can only contain cyrillic characters","url":"This field can only contain a valid URL","currency":"This field can only contain currency values.","fillMask":"Field value must fill mask.","uploadExtensions":"You can only upload following files:","noUploadExtensions":"File has no extension file type (e.g. .txt, .png, .jpeg)","uploadFilesize":"File size cannot be bigger than:","uploadFilesizemin":"File size cannot be smaller than:","gradingScoreError":"Score total should only be less than or equal to","inputCarretErrorA":"Input should not be less than the minimum value:","inputCarretErrorB":"Input should not be greater than the maximum value:","maxDigitsError":"The maximum digits allowed is","minCharactersError":"The number of characters should not be less than the minimum value:","maxCharactersError":"The number of characters should not be more than the maximum value:","freeEmailError":"Free email accounts are not allowed","minSelectionsError":"The minimum required number of selections is ","maxSelectionsError":"The maximum number of selections allowed is ","pastDatesDisallowed":"Date must not be in the past.","dateLimited":"This date is unavailable.","dateInvalid":"This date is not valid. The date format is {format}","dateInvalidSeparate":"This date is not valid. Enter a valid {element}.","ageVerificationError":"You must be older than {minAge} years old to submit this form.","multipleFileUploads_typeError":"{file} has invalid extension. Only {extensions} are allowed.","multipleFileUploads_sizeError":"{file} is too large, maximum file size is {sizeLimit}.","multipleFileUploads_minSizeError":"{file} is too small, minimum file size is {minSizeLimit}.","multipleFileUploads_emptyError":"{file} is empty, please select files again without it.","multipleFileUploads_uploadFailed":"File upload failed, please remove it and upload the file again.","multipleFileUploads_onLeave":"The files are being uploaded, if you leave now the upload will be cancelled.","multipleFileUploads_fileLimitError":"Only {fileLimit} file uploads allowed.","dragAndDropFilesHere_infoMessage":"Drag and drop files here","chooseAFile_infoMessage":"Choose a file","maxFileSize_infoMessage":"Max. file size","generalError":"There are errors on the form. Please fix them before continuing.","generalPageError":"There are errors on this page. Please fix them before continuing.","wordLimitError":"Too many words. The limit is","wordMinLimitError":"Too few words.  The minimum is","characterLimitError":"Too many Characters.  The limit is","characterMinLimitError":"Too few characters. The minimum is","ccInvalidNumber":"Credit Card Number is invalid.","ccInvalidCVC":"CVC number is invalid.","ccInvalidExpireDate":"Expire date is invalid.","ccInvalidExpireMonth":"Expiration month is invalid.","ccInvalidExpireYear":"Expiration year is invalid.","ccMissingDetails":"Please fill up the credit card details.","ccMissingProduct":"Please select at least one product.","ccMissingDonation":"Please enter numeric values for donation amount.","disallowDecimals":"Please enter a whole number.","restrictedDomain":"This domain is not allowed","ccDonationMinLimitError":"Minimum amount is {minAmount} {currency}","requiredLegend":"All fields marked with * are required and must be filled.","geoPermissionTitle":"Permission Denied","geoPermissionDesc":"Check your browser's privacy settings.","geoNotAvailableTitle":"Position Unavailable","geoNotAvailableDesc":"Location provider not available. Please enter the address manually.","geoTimeoutTitle":"Timeout","geoTimeoutDesc":"Please check your internet connection and try again.","selectedTime":"Selected Time","formerSelectedTime":"Former Time","cancelAppointment":"Cancel Appointment","cancelSelection":"Cancel Selection","noSlotsAvailable":"No slots available","slotUnavailable":"{time} on {date} has been selected is unavailable. Please select another slot.","multipleError":"Hay {count} Errores en el Formulario. Corregir antes de Seguir.","oneError":"Hay {count} Error en Esta Pagina. Corrígelo antes de continuar.","doneMessage":"Bien Hecho! Todos los Errores Fueron Arreglados.","doneButton":"OK","reviewSubmitText":"Review and Submit","nextButtonText":"Next","prevButtonText":"Previous","seeErrorsButton":"Ver Errores","notEnoughStock":"Not enough stock for the current selection","notEnoughStock_remainedItems":"Not enough stock for the current selection ({count} items left)","soldOut":"Sold Out","justSoldOut":"Just Sold Out","selectionSoldOut":"Selection Sold Out","subProductItemsLeft":"({count} items left)","startButtonText":"START","submitButtonText":"Submit","submissionLimit":"Sorry! Only one entry is allowed. Multiple submissions are disabled for this form.","reviewBackText":"Back to Form","seeAllText":"See All","progressMiddleText":"of","fieldError":"field has an error.","error":"Error"};
	JotForm.newPaymentUI = true;
	JotForm.replaceTagTest = true;
	JotForm.clearFieldOnHide="disable";
	JotForm.submitError="jumpToFirstError";
	//window.addEventListener('DOMContentLoaded',function(){window.brandingFooter.init({"formID":240483924998877,"campaign":"powered_by_jotform_le","isCardForm":false,"isLegacyForm":true})});
	JotForm.init(function(){
	/*INIT-START*/

 JotForm.calendarMonths = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
 if (!JotForm.calenderViewMonths) JotForm.calenderViewMonths = {};  JotForm.calenderViewMonths[19] = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
 if (!JotForm.calenderViewDays) JotForm.calenderViewDays = {};  JotForm.calenderViewDays[19] = ["Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo"];
 JotForm.calendarDays = ["Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo"];
 JotForm.calendarOther = {"today":"Hoy"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("19", true, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":false,"past":false,"custom":false,"ranges":false,"start":"","end":"","countSelectedDaysOnly":false}); }, 0); });
 } 
 JotForm.onTranslationsFetch(function() { JotForm.setCalendar("19", true, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":false,"past":false,"custom":false,"ranges":false,"start":"","end":"","countSelectedDaysOnly":false}); });
JotForm.setFullNameAutoFocus(4)

 JotForm.calendarMonths = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
 if (!JotForm.calenderViewMonths) JotForm.calenderViewMonths = {};  JotForm.calenderViewMonths[5] = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
 if (!JotForm.calenderViewDays) JotForm.calenderViewDays = {};  JotForm.calenderViewDays[5] = ["Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo"];
 JotForm.calendarDays = ["Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo"];
 JotForm.calendarOther = {"today":"Hoy"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("5", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":false,"past":true,"custom":false,"ranges":false,"start":"","end":"","countSelectedDaysOnly":false}); }, 0); });
 } 
 JotForm.onTranslationsFetch(function() { JotForm.setCalendar("5", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":false,"past":true,"custom":false,"ranges":false,"start":"","end":"","countSelectedDaysOnly":false}); });
if (window.JotForm && JotForm.accessible) $('input_10').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_14').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_16').setAttribute('tabindex',0);

 JotForm.calendarMonths = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
 if (!JotForm.calenderViewMonths) JotForm.calenderViewMonths = {};  JotForm.calenderViewMonths[18] = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
 if (!JotForm.calenderViewDays) JotForm.calenderViewDays = {};  JotForm.calenderViewDays[18] = ["Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo"];
 JotForm.calendarDays = ["Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo"];
 JotForm.calendarOther = {"today":"Hoy"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("18", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":"","countSelectedDaysOnly":false}); }, 0); });
 } 
 JotForm.onTranslationsFetch(function() { JotForm.setCalendar("18", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":"","countSelectedDaysOnly":false}); });
if (window.JotForm && JotForm.accessible) $('input_20').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_21').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_22').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_49').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_54').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_65').setAttribute('tabindex',0);

    JotForm.calendarMonths = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
    JotForm.appointmentCalendarMonths = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
    JotForm.appointmentCalendarDays = ["Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo"];
    JotForm.calendarOther = "Today";
    window.initializeAppointment({"text":{"text":"Question","value":"Próximo control"},"labelAlign":{"text":"Label Align","value":"Top","dropdown":[["Auto","Auto"],["Left","Left"],["Right","Right"],["Top","Top"]]},"required":{"text":"Required","value":"No","dropdown":[["No","No"],["Yes","Yes"]]},"description":{"text":"Hover Text","value":"","textarea":true},"slotDuration":{"text":"Slot Duration","value":"30","dropdown":[[15,"15 min"],[30,"30 min"],[45,"45 min"],[60,"60 min"],["custom","Custom min"]],"hint":"Select how long each slot will be."},"startDate":{"text":"Start Date","value":""},"endDate":{"text":"End Date","value":""},"intervals":{"text":"Intervals","value":[{"from":"09:00","to":"19:00","days":["Mon","Tue","Wed","Thu","Fri"]}],"hint":"The hours will be applied to the selected days and repeated."},"useBlockout":{"text":"Blockout Custom Dates","value":"No","dropdown":[["No","No"],["Yes","Yes"]],"hint":"Disable certain date(s) in the calendar."},"blockoutDates":{"text":"Blockout dates","value":[{"startDate":"","endDate":""}]},"useLunchBreak":{"text":"Lunch Time","value":"Yes","dropdown":[["No","No"],["Yes","Yes"]],"hint":"Enable lunchtime in the calendar."},"lunchBreak":{"text":"Lunchtime hours","value":[{"from":"12:00","to":"14:00"}]},"timezone":{"text":"Timezone","value":"America\u002FGuayaquil (GMT-05:00)"},"timeFormat":{"text":"Time Format","value":"AM\u002FPM","dropdown":[["24 Hour","24 Hour"],["AM\u002FPM","AM\u002FPM"]],"icon":"images\u002Fblank.gif","iconClassName":"toolbar-time_format_24"},"months":{"value":["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"],"hidden":true},"days":{"value":["Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo"],"hidden":true},"startWeekOn":{"text":"Start Week On","value":"Monday","dropdown":[["Monday","Monday"],["Sunday","Sunday"]],"toolbar":false},"rollingDays":{"text":"Rolling Days","value":"","toolbar":false},"prevMonthButtonText":{"text":"Previous month","value":""},"nextMonthButtonText":{"text":"Next month","value":""},"prevYearButtonText":{"text":"Previous year","value":""},"nextYearButtonText":{"text":"Next year","value":""},"prevDayButtonText":{"text":"Previous day","value":""},"nextDayButtonText":{"text":"Next day","value":""},"appointmentType":{"hidden":true,"value":"single"},"dateFormat":{"hidden":true,"value":"dd\u002Fmm\u002Fyyyy"},"maxAttendee":{"hidden":true,"value":"5"},"minScheduleNotice":{"hidden":true,"value":"3"},"name":{"hidden":true,"value":"proximoControl"},"order":{"hidden":true,"value":"38"},"qid":{"toolbar":false,"value":"input_74"},"type":{"hidden":true,"value":"control_appointment"},"id":{"toolbar":false,"value":"74"},"qname":{"toolbar":false,"value":"q74_proximoControl"},"cdnconfig":{"CDN":"https:\u002F\u002Fcdn.jotfor.ms\u002F"},"passive":false,"formProperties":{"highlightLine":"Enabled","coupons":false,"useStripeCoupons":false,"taxes":false,"comparePaymentForm":"","paymentListSettings":false,"newPaymentUIForNewCreatedForms":"Yes","formBackground":"#fff","newAppointment":false,"isAutoCompleteEnabled":true},"formID":240483924998877,"isPaymentForm":false,"isOpenedInPortal":false,"isCheckoutForm":false,"isOfflineForms":false,"SSL_URL":"https:\u002F\u002Fwww.jotform.com\u002F","themeVersion":"v2","isEnterprise":false,"environment":"PRODUCTION"});
        JotForm.alterTexts({"ageVerificationError":"Debe ser mayor de {minAge} años para enviar este formulario.","alphabetic":"Este campo solo puede contener letras.","alphanumeric":"Este campo solo puede contener letras y números.","appointmentSelected":"Ha seleccionado {time} del {date}","ccDonationMinLimitError":"La Cantidad Mínima es {minAmount} {currency}","ccInvalidCVC":"El número CVC no es válido.","ccInvalidExpireDate":"La fecha de expiración no es válida","ccInvalidNumber":"El número de su tarjeta de crédito no es válido.","ccMissingDetails":"Please fill up the credit card details.","ccMissingDonation":"Favor ponga valores númericos en la cantidad a donar.","ccMissingProduct":"Por favor seleccione al menos un producto.","characterLimitError":"Demasiados caracteres. El límite es","characterMinLimitError":"Muy pocos caracteres. El mínimum es","confirmClearForm":"¿Está seguro que desea limpiar el formulario?","confirmEmail":"El correo electrónico no coincide","currency":"Este campo sólo puede contener valores de moneda.","cyrillic":"Este campo solo puede contener caracteres cirílicos.","dateInvalid":"Esta fecha no es valida. El formato de fecha es {format}","dateInvalidSeparate":"Esta fecha no es válida. Ponga una {element} válida","dateLimited":"Esta fecha no está disponible.","disallowDecimals":"Por favor, introduzca un número entero.","email":"Introduzca una dirección e-mail válida","fillMask":"El valor de este campo debe llenar la mascara","freeEmailError":"No se permiten cuentas de correo gratuitas","generalError":"Existen errores en el formulario, por favor corríjalos antes de continuar.","generalPageError":"Hay errores en esta página. Por favor, corríjalos antes de continuar.","gradingScoreError":"El puntaje total debería ser sólo &amp;quot;menos que&amp;quot; o &amp;quot;igual que&amp;quot;",/*"incompleteFields":"Existen campos requeridos incompletos. Por favor complételos.",*/"inputCarretErrorA":"La entrada no debe ser inferior al valor mínimo:","inputCarretErrorB":"La entrada debe ser menor al valor:","lessThan":"Tu puntuación debería ser menor o igual que","maxDigitsError":"El máximo de dígitos permitido es","maxSelectionsError":"The maximum number of selections allowed is ","minSelectionsError":"El número mínimo de opciones obligatorias es","multipleFileUploads_emptyError":"El fichero {file} está vacío; por favor, selecciona de nuevo los ficheros sin él.","multipleFileUploads_fileLimitError":"Solo {fileLimit} carga de archivos permitida.","multipleFileUploads_minSizeError":"{file} is demasiado pequeño, el tamaño mínimo de fichero es: {minSizeLimit}.","multipleFileUploads_onLeave":"Se están cargando los ficheros, si cierras ahora, se cancelará dicha carga.","multipleFileUploads_sizeError":"{file} es demasiado grande; el tamaño del archivo no debe superar los {sizeLimit}.","multipleFileUploads_typeError":"El fichero {file} posee una extensión no permitida. Sólo están permitidas las extensiones {extensions}.","multipleFileUploads_uploadFailed":"File upload failed, please remove it and upload the file again.","noSlotsAvailable":"No hay cupos disponibles","noUploadExtensions":"File has no extension file type (e.g. .txt, .png, .jpeg)","numeric":"Este campo sólo admite valores numéricos.","pastDatesDisallowed":"La fecha debe ser futura","pleaseWait":"Por favor, espere ...","required":"Campo requerido.","requireEveryCell":"Se requieren todas las celdas.","requireEveryRow":"Todas las filas son obligatorias.","requireOne":"Al menos un campo requerido.","restrictedDomain":"This domain is not allowed","slotUnavailable":"{time} del {date} ha sido tomada. Favor seleccionar otro espacio.","uploadExtensions":"Solo puede subir los siguientes archivos:","uploadFilesize":"Tamaño del archivo no puede ser mayor que:","uploadFilesizemin":"Tamañao de archivo no puede ser menos de:","url":"Este campo solo contiene una URL válida.","validateEmail":"You need to validate this e-mail","wordLimitError":"Demasiadas palabras. El límite es","wordMinLimitError":"Muy pocas palabras. El mínimo es"});
      JotForm.alterTexts({"couponApply":"Aplicar","couponBlank":"Favor ingrese un cupón.","couponChange":"","couponEnter":"Introduzca Cupón","couponExpired":"Cupón ha caducado. Por favor, intente otra.","couponInvalid":"Coupon is invalid.","couponValid":"El cupón es válido.","shippingShipping":"Envío","taxTax":"Impuesto","totalSubtotal":"Subtotal","totalTotal":"Total"}, true);
	/*INIT-END*/
	});

setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"historiaClinica","qid":"1","text":"Historia Clinica de Optometria","type":"control_head"},/*{"name":"submit2","qid":"2","text":"Enviar","type":"control_button"},*/null,{"name":"paciente","qid":"4","text":"Paciente:","type":"control_fullname"},/*{"name":"fechaDe5","qid":"5","text":"Fecha de Nacimiento","type":"control_datetime"},*/null,{"name":"numeroDe","qid":"7","text":"Numero de telefono","type":"control_phone"},null,null,{"name":"edad","qid":"10","text":"Edad","type":"control_textbox"},{"name":"email","qid":"11","text":"Email","type":"control_email"},null,null,{"mde":"No","name":"motivoDe","qid":"14","text":"Motivo de la consulta:","type":"control_textarea","wysiwyg":"Disable"},null,{"mde":"No","name":"historiasDe","qid":"16","text":"Historias de enfermedades actuales","type":"control_textarea","wysiwyg":"Disable"},null,{"name":"ultimoControl","qid":"18","text":"Ultimo control visual","type":"control_datetime"},{"name":"fecha","qid":"19","text":"Fecha","type":"control_datetime"},{"mde":"No","name":"antecedentesPatologicos","qid":"20","text":"Antecedentes patologicos personales","type":"control_textarea","wysiwyg":"Disable"},{"mde":"No","name":"antecedentesPatologicos21","qid":"21","text":"Antecedentes patologicos oculares","type":"control_textarea","wysiwyg":"Disable"},{"mde":"No","name":"antecedentesPatologicos22","qid":"22","text":"Antecedentes patologicos sistemicos y oculares familiares","type":"control_textarea","wysiwyg":"Disable"},null,null,{"name":"sinCorreccion","qid":"25","text":"Sin Correccion","type":"control_matrix"},null,null,null,null,null,null,{"name":"exploracionSubjetiva","qid":"32","text":"Exploracion Subjetiva","type":"control_collapse"},{"name":"datosGenerales","qid":"33","text":"Datos Generales","type":"control_collapse"},{"name":"anamnesis","qid":"34","text":"Anamnesis","type":"control_collapse"},null,null,{"name":"ojoDerecho","qid":"37","text":"Ojo Derecho","type":"control_widget"},/*{"name":"testDe38","qid":"38","text":"Test de Ishihara","type":"control_widget"},*/null,{"name":"firmaDel","qid":"40","text":"Firma del examinador","type":"control_widget"},null,null,null,null,null,null,null,{"name":"conCorreccion","qid":"48","text":"Con Correccion","type":"control_matrix"},{"name":"observaciones","qid":"49","text":"Observaciones:","type":"control_textbox"},null,{"name":"ojoIzquierdo","qid":"51","text":"Ojo Izquierdo","type":"control_widget"},null,null,{"name":"observaciones54","qid":"54","text":"Observaciones:","type":"control_textbox"},null,{"name":"3t5f7e514b85a4c942495125","qid":"56","text":"3t.5f7e514b85a4c9.42495125","type":"control_image"},{"name":"3t5f7e514b85a4c94249512557","qid":"57","text":"3t.5f7e514b85a4c9.42495125","type":"control_image"},null,null,null,{"name":"ojoDerecho61","qid":"61","text":"Ojo derecho","type":"control_checkbox"},{"name":"ojoIzquierdo62","qid":"62","text":"Ojo izquierdo","type":"control_checkbox"},{"name":"reflejoPupilar","qid":"63","text":"Reflejo Pupilar","type":"control_dropdown"},null,{"name":"observaciones65","qid":"65","text":"Observaciones:","type":"control_textbox"},{"name":"posicionPrimaria66","qid":"66","text":"Posicion Primaria de Mirada (PPM):","type":"control_dropdown"},{"name":"coverTest","qid":"67","text":"Cover Test","type":"control_head"},{"name":"ojoDerecho68","qid":"68","text":"Ojo Derecho","type":"control_matrix"},{"name":"oftalmoscopia","qid":"69","text":"Oftalmoscopia","type":"control_head"},{"name":"ojoIzquierdo70","qid":"70","text":"Ojo Izquierdo","type":"control_matrix"},{"name":"objetivo","qid":"71","text":"Objetivo","type":"control_collapse"},{"name":"rxFinal","qid":"72","text":"RX Final","type":"control_matrix"},{"name":"agudezaVisual","qid":"73","text":"Agudeza Visual","type":"control_matrix"},{"name":"proximoControl","qid":"74","text":"Proximo control","type":"control_appointment"}]);}, 20); 
</script>

</head>
<body>

<form class="jotform-form" action="EditarFormularioRecetar.php" method="POST" id="240483924998877" onsubmit="return validarFormulario();">

<!-- <input type="hidden" name="formID" value="240483924998877" /> -->
  <!-- <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <input type="hidden" id="jsExecutionTracker" name="jsExecutionTracker" value="build-date-1708271428158" />
  <input type="hidden" id="submitSource" name="submitSource" value="unknown" />
  <input type="hidden" id="buildDate" name="buildDate" value="1708271428158" /> -->
  
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div style="display:table;width:100%">
          <div class="form-header-group hasImage header-large" data-imagealign="Top">
            <!-- <div class="header-logo"><img src="https://www.jotform.com/uploads/albertwcero3/form_files/Transparente.5f7ccd30e30b30.46728103.png" alt="Mis Lentes" width="340" class="header-logo-top" /></div> -->
            <div class="header-text httac htvat">
              
              <h1 id="header_1" class="form-header" data-component="header">Historia Clínica de Optometría</h1>
              <h1 id="header_1" class="form-header" data-component="header">(Editar Formulario)</h1>
            </div>
          </div>
        </div>
      </li>      
      <input type="hidden" name="IdReporte" value="<?php echo $idReporte ?>">
      <!-- COMBO BOX PACIENTES -->
      <li class="form-line form-line-column form-col-6" data-type="control_dropdown" id="id_66">
        <label class="form-label form-label-top" id="label_66" for="input_66" aria-hidden="false"> Paciente: </label>
        <div id="cid_66" class="form-input-wide" data-layout="half"> 
          <select class="form-dropdown no-arrow" id="input_66" name="q66_posicionPrimaria66" style="width:310px;" data-component="dropdown" aria-label="Posición Primaria de Mirada (PPM):"  onchange="actualizarCedula()" value="<?php echo $NombrePaciente ?>" disabled>
          <option value="<?php echo htmlspecialchars($NombrePaciente . ' ' . $ApellidoPaciente); ?>"><?php echo htmlspecialchars($NombrePaciente . ' ' . $ApellidoPaciente); ?></option>
        </select> 
        </div>
      </li>
      <style>
        .no-arrow {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-image: none;
        background-color: transparent;
        }
      </style>

      <!-- FORMULARIO DE DATOS GENERALES -->
      <ul class="form-section-closed" style="height: 84px;clear:both;" id="section_33">
        <li id="cid_33" class="form-input-wide" data-type="control_collapse">
          <div class="form-collapse-table" id="collapse_33" data-component="collapse"><span class="form-collapse-mid" id="collapse-text_33">Datos Generales</span><span class="form-collapse-right form-collapse-right-hide"> </span></div>
        </li>
        <!-- Cedula-- Nombre -- Apellido -->
        <li class="form-line jf-required" data-type="control_fullname" id="id_4" data-compound-hint=",,">
          <label class="form-label form-label-top form-label-extended form-label-auto" id="label_4" for="prefix_4" aria-hidden="false"> Paciente:<span class="form-required">*</span> </label>
          <div id="cid_4" class="form-input-wide jf-required" data-layout="full">
            <div data-wrapper-react="true" class="extended"><span class="form-sub-label-container" style="vertical-align:top" data-input-type="prefix">

                <input data-component="prefix" name="q4_paciente" id="prefix_4" class="dropdown-match-height form-dropdown validate[required] no-arrow" aria-labelledby="label_4 sublabel_4_prefix" autoComplete="section-input_4 honorific-prefix" value="<?php echo $CedulaPaciente ?>" readonly>
                <label class="form-sub-label" for="prefix_4" id="sublabel_4_prefix" style="min-height:13px">Cedula</label></span><span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
                    
                <input type="text" id="first_4" name="q4_pacienteNombre" class="form-textbox validate[required]" data-defaultvalue="" autoComplete="section-input_4 given-name" size="10" data-component="first" aria-labelledby="label_4 sublabel_4_first" value="<?php echo $NombrePaciente ?>" required="" readonly/>
                <label class="form-sub-label" for="first_4" id="sublabel_4_first" style="min-height:13px">Nombre</label></span><span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
                
                <input type="text" id="last_4" name="q4_pacienteApellido" class="form-textbox validate[required]" data-defaultvalue="" autoComplete="section-input_4 family-name" size="15" data-component="last" aria-labelledby="label_4 sublabel_4_last" value="<?php echo $ApellidoPaciente ?>" required="" readonly/>
                <label class="form-sub-label" for="last_4" id="sublabel_4_last" style="min-height:13px">Apellido</label></span></div>
          </div>
        </li>


        <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_10">
          <label class="form-label form-label-top" id="label_10" for="input_10" aria-hidden="false"> Fecha </label>
          <div id="cid_10" class="form-input-wide" data-layout="half"> 
            <input type="date" id="input_100" name="q10_edadd" data-type="input-textbox" class="form-textbox validate[Numeric]" data-defaultvalue="" style="width:310px" size="310" maxLength="2" data-component="textbox" aria-labelledby="label_10" value="<?php echo $FechaNacimiento ?>" disabled/> 
            <label class="form-sub-label" for="input_7_phone" id="sublabel_7_phone" style="min-height:13px">Fecha Nacimiento</label>
          </div>
        </li>

        <!-- Edad -->
        <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_10">
          <label class="form-label form-label-top" id="label_10" for="input_10" aria-hidden="false"> Edad </label>
          <div id="cid_10" class="form-input-wide" data-layout="half"> 
            <input type="text" id="input_10" name="q10_edad" data-type="input-textbox" class="form-textbox validate[Numeric]" data-defaultvalue="" style="width:310px" size="310" maxLength="2" data-component="textbox" aria-labelledby="label_10" value="<?php echo $EdadPaciente ?>" disabled /> 
            <label class="form-sub-label" for="input_7_phone" id="sublabel_7_phone" style="min-height:13px">Edad del Paciente</label>
          </div>
        </li>

        <!-- Numero de Telefono -->
        <li class="form-line form-line-column form-col-3 jf-required" data-type="control_phone" id="id_7" data-compound-hint=",">
          <label class="form-label form-label-top" id="label_7" for="input_7_area" aria-hidden="false"> Número de teléfono<span class="form-required">*</span> </label>
          <div id="cid_7" class="form-input-wide jf-required" data-layout="half">
            <div data-wrapper-react="true"><span class="form-sub-label-container" style="vertical-align:top" data-input-type="areaCode">
              <span class="form-sub-label-container" style="vertical-align:top" data-input-type="phone">
                <input type="tel" id="input_7_phone" name="q7_numeroDeTelefono" class="form-textbox validate[required]" data-defaultvalue=""  data-component="phone" aria-labelledby="label_7 sublabel_7_phone" required="" value="<?php echo $NumeroDeTelefono ?>" disabled/>
                <label class="form-sub-label" for="input_7_phone" id="sublabel_7_phone" style="min-height:13px">Número de teléfono</label></span></div>
          </div>
        </li>
        <!-- autoComplete="section-input_7 tel-local" -->
        <!-- Email de Paciente -->
        <li class="form-line form-line-column form-col-4 jf-required" data-type="control_email" id="id_11"><label class="form-label form-label-top" id="label_11" for="input_11" aria-hidden="false"> Email<span class="form-required">*</span> </label>
          <div id="cid_11" class="form-input-wide jf-required" data-layout="half"> 
            <input type="text" id="input_11" name="q11_email" class="form-textbox validate[required, Email]" data-defaultvalue="" autoComplete="section-input_11 email" style="width:310px" size="310" data-component="email" aria-labelledby="label_11" required="" value="<?php echo $EmailPaciente ?>" disabled/> 
            <label class="form-sub-label" for="input_7_phonee" id="sublabel_7_phone" style="min-height:13px">Email del Paciente</label>
          </div>
        </li>

      </ul>

      <!--FORMULARIO DE ANAMNESIS -->
      <ul class="form-section-closed" style="height: 84px;clear:both;" id="section_34">
        <li id="cid_34" class="form-input-wide" data-type="control_collapse">
          <div class="form-collapse-table" id="collapse_34" data-component="collapse"><span class="form-collapse-mid" id="collapse-text_34">Anamnesis</span><span class="form-collapse-right form-collapse-right-hide"> </span></div>
        </li>

        <!-- Motivo de la consulta -->
        <li class="form-line jf-required" data-type="control_textarea" id="id_14">
          <label class="form-label form-label-top form-label-auto" id="label_14" for="input_14" aria-hidden="false"> Motivo de la consulta:<span class="form-required">*</span> </label>
          <div id="cid_14" class="form-input-wide jf-required" data-layout="full">
            <div class="form-textarea-limit"><span>
              <textarea id="input_14" class="form-textarea validate[required]" name="q14_motivoDe" style="width:648px;height:163px" data-component="textarea" required="" aria-labelledby="label_14"><?php echo htmlspecialchars($MotivoConsulta); ?></textarea>
                <div class="form-textarea-limit-indicator"><span data-limit="250" type="Words" data-minimum="-1" data-typeminimum="Words" id="input_14-limit">0/250</span></div>
              </span>
            </div>
          </div>
        </li>

        <!-- HISTORIAL DE ENFERMEDADES -->
        <li class="form-line jf-required" data-type="control_textarea" id="id_16"><label class="form-label form-label-top form-label-auto" id="label_16" for="input_16" aria-hidden="false"> Historias de enfermedades actuales<span class="form-required">*</span> </label>
          <div id="cid_16" class="form-input-wide jf-required" data-layout="full">
            <div class="form-textarea-limit"><span>
              <textarea id="input_16" class="form-textarea validate[required]" name="q16_historiasDe" style="width:648px;height:163px" data-component="textarea" required="" aria-labelledby="label_16"><?php echo htmlspecialchars($HisDeEnfermeActuales); ?></textarea>
                <div class="form-textarea-limit-indicator"><span data-limit="250" type="Words" data-minimum="-1" data-typeminimum="Words" id="input_16-limit">0/250</span></div>
              </span></div>
          </div>
        </li>
        
        <!-- Ultimo Control Visual -->

        <li class="form-line jf-required" data-type="control_datetime" id="id_18">
        <label class="form-label form-label-top form-label-auto" id="label_18" for="date_18" aria-hidden="false"> Último control visual<span class="form-required">*</span> </label>
        <div id="cid_18" class="form-input-wide jf-required" data-layout="half">
        <div data-wrapper-react="true">
            <input type="date" class="form-textbox validate[required]" id="date_18" name="q18_ultimoControl" required aria-labelledby="label_18" value="<?php echo htmlspecialchars($UltimoControlVisual); ?>" />
            <img src="ruta/a/imagen/calendario.png" alt="Seleccionar fecha" class="calendar-icon" />
        </div>
        </div>
        </li>
        <!-- <li class="form-line jf-required" data-type="control_datetime" id="id_18"><label class="form-label form-label-top form-label-auto" id="label_18" for="lite_mode_18" aria-hidden="false"> Último control visual<span class="form-required">*</span> </label>
          <div id="cid_18" class="form-input-wide jf-required" data-layout="half">
            <div data-wrapper-react="true">
              <div style="display:none"><span class="form-sub-label-container" style="vertical-align:top">
              <input type="tel" class="form-textbox validate[required, limitDate]" id="day_18" name="q18_ultimoControl['day']" size="2" data-maxlength="2" data-age="" maxLength="2" value="" required="" autoComplete="off" aria-labelledby="label_18 sublabel_18_day" /><span class="date-separate" aria-hidden="true"> -</span><label class="form-sub-label" for="day_18" id="sublabel_18_day" style="min-height:13px">Día</label></span><span class="form-sub-label-container" style="vertical-align:top">
              <input type="tel" class="form-textbox validate[required, limitDate]" id="month_18" name="q18_ultimoControl['month']" size="2" data-maxlength="2" data-age="" maxLength="2" value="" required="" autoComplete="off" aria-labelledby="label_18 sublabel_18_month" /><span class="date-separate" aria-hidden="true"> -</span><label class="form-sub-label" for="month_18" id="sublabel_18_month" style="min-height:13px">Mes</label></span><span class="form-sub-label-container" style="vertical-align:top">
              <input type="tel" class="form-textbox validate[required, limitDate]" id="year_18" name="q18_ultimoControl['year']" size="4" data-maxlength="4" data-age="" maxLength="4" value="" required="" autoComplete="off" aria-labelledby="label_18 sublabel_18_year" /><label class="form-sub-label" for="year_18" id="sublabel_18_year" style="min-height:13px">Año</label></span></div><span class="form-sub-label-container" style="vertical-align:top">
              <input type="text" class="form-textbox validate[required, limitDate, validateLiteDate]" id="lite_mode_18" size="12" data-maxlength="12" maxLength="12" data-age="" value="<?php echo htmlspecialchars($fechaFormateada); ?>" required="" data-format="ddmmyyyy" data-seperator="-" placeholder="DD-MM-YYYY" data-placeholder="DD-MM-YYYY" autoComplete="off" aria-labelledby="label_18 sublabel_18_litemode" /><img class=" newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date" id="input_18_pick" src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime" aria-hidden="true" data-allow-time="No" data-version="v2" /><label class="form-sub-label" for="lite_mode_18" id="sublabel_18_litemode" style="min-height:13px">Fecha</label></span>
            </div>
          </div>
        </li> -->

        <!-- Antecedentes Patológicos Personales -->
        <li class="form-line jf-required" data-type="control_textarea" id="id_20"><label class="form-label form-label-top form-label-auto" id="label_20" for="input_20" aria-hidden="false"> Antecedentes patológicos personales<span class="form-required">*</span> </label>
          <div id="cid_20" class="form-input-wide jf-required" data-layout="full">
            <div class="form-textarea-limit"><span>
              <textarea id="input_20" class="form-textarea validate[required]" name="q20_antecedentesPatologicos" style="width:648px;height:163px" data-component="textarea" required="" aria-labelledby="label_20"><?php echo htmlspecialchars($AntecePatoloPersonales); ?></textarea>
                <div class="form-textarea-limit-indicator"><span data-limit="250" type="Words" data-minimum="-1" data-typeminimum="Words" id="input_20-limit">0/250</span></div>
              </span></div>
          </div>
        </li>

        <!--Antecedentes Patológicos Oculares -->
        <li class="form-line jf-required" data-type="control_textarea" id="id_21"><label class="form-label form-label-top form-label-auto" id="label_21" for="input_21" aria-hidden="false"> Antecedentes patológicos oculares<span class="form-required">*</span> </label>
          <div id="cid_21" class="form-input-wide jf-required" data-layout="full">
            <div class="form-textarea-limit"><span>
              <textarea id="input_21" class="form-textarea validate[required]" name="q21_antecedentesPatologicos21" style="width:648px;height:163px" data-component="textarea" required="" aria-labelledby="label_21"><?php echo htmlspecialchars($AntePatoloOculares); ?></textarea>
                <div class="form-textarea-limit-indicator"><span data-limit="250" type="Words" data-minimum="-1" data-typeminimum="Words" id="input_21-limit">0/250</span></div>
              </span></div>
          </div>
        </li>

        <!--Antecedentes Patológicos Oculares -->
        <li class="form-line jf-required" data-type="control_textarea" id="id_22"><label class="form-label form-label-top form-label-auto" id="label_22" for="input_22" aria-hidden="false"> Antecedentes patológicos sistémicos y oculares familiares<span class="form-required">*</span> </label>
          <div id="cid_22" class="form-input-wide jf-required" data-layout="full">
            <div class="form-textarea-limit"><span>
              <textarea id="input_22" class="form-textarea validate[required]" name="q22_antecedentesPatologicos22" style="width:648px;height:163px" data-component="textarea" required="" aria-labelledby="label_22"><?php echo htmlspecialchars($AntePatoloSisYOculaFamiliares); ?></textarea>
                <div class="form-textarea-limit-indicator"><span data-limit="250" type="Words" data-minimum="-1" data-typeminimum="Words" id="input_22-limit">0/250</span></div>
              </span></div>
          </div>
        </li>
      </ul>
      
      <!--Antecedentes Patológicos Oculares -->
      <ul class="form-section-closed" style="height: 84px;clear:both;" id="section_32">
        <li id="cid_32" class="form-input-wide" data-type="control_collapse">
          <div class="form-collapse-table" id="collapse_32" data-component="collapse">
            <span class="form-collapse-mid" id="collapse-text_32">Exploración Subjetiva</span><span class="form-collapse-right form-collapse-right-hide"> </span></div>
        </li>

        <li class="form-line form-line-column form-col-1 jf-required" data-type="control_matrix" id="id_25"><label class="form-label form-label-top" id="label_25" for="input_25" aria-hidden="false"> Sin Corrección<span class="form-required">*</span> </label>
          <div id="cid_25" class="form-input-wide jf-required" data-layout="full">
            <table summary="" aria-labelledby="label_25" cellPadding="4" cellSpacing="0" class="form-matrix-table" data-component="matrix">
              <tr class="form-matrix-tr form-matrix-header-tr">
                <th class="form-matrix-th" style="border:none"> </th>
                <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_0"><label id="label_25_col_0">Visión Lejana</label></th>
                <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_1"><label id="label_25_col_1">Visión Cercana</label></th>
              </tr>

              
              <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_25 label_25_row_0">
                <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_25_row_0">Ojo Derecho</label></th>
                <td class="form-matrix-values"><input type="text" id="input_25_0_0" class="form-textbox validate[required, requireEveryCell]" name="q25_sinCorreccion1" style="width:100%;box-sizing:border-box" size="5" value="<?php echo $SCOjoDerechoVisionLejana ?>" aria-labelledby="label_25_col_0 label_25_row_0" step="any" aria-label="Cells Numeric Text Box" /></td>
                <td class="form-matrix-values"><input type="text" id="input_25_0_1" class="form-textbox validate[required, requireEveryCell]" name="q25_sinCorreccion2" style="width:100%;box-sizing:border-box" size="5" value="<?php echo $SCOjoDerechoVisionCercana ?>" aria-labelledby="label_25_col_1 label_25_row_0" step="any" aria-label="Cells Numeric Text Box" /></td>
              </tr>
              <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_25 label_25_row_1">
                <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_25_row_1">Ojo Izquierdo</label></th>
                <td class="form-matrix-values"><input type="text" id="input_25_1_0" class="form-textbox validate[required, requireEveryCell]" name="q25_sinCorreccion11" style="width:100%;box-sizing:border-box" size="5" value="<?php echo $SCOjoIzquierdoVisionLejana ?>" aria-labelledby="label_25_col_0 label_25_row_1" step="any" aria-label="Cells Numeric Text Box" /></td>
                <td class="form-matrix-values"><input type="text" id="input_25_1_1" class="form-textbox validate[required, requireEveryCell]" name="q25_sinCorreccion22" style="width:100%;box-sizing:border-box" size="5" value="<?php echo $SCOjoIzquierdoVisionCercana ?>" aria-labelledby="label_25_col_1 label_25_row_1" step="any" aria-label="Cells Numeric Text Box" /></td>
              </tr>
              <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_25 label_25_row_2">
                <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_25_row_2">Ambos Ojos</label></th>
                <td class="form-matrix-values"><input type="text" id="input_25_2_0" class="form-textbox validate[required, requireEveryCell]" name="q25_sinCorreccion111" style="width:100%;box-sizing:border-box" size="5" value="<?php echo $SCAmbosOjosVL ?>" aria-labelledby="label_25_col_0 label_25_row_2" step="any" aria-label="Cells Numeric Text Box" /></td>
                <td class="form-matrix-values"><input type="text" id="input_25_2_1" class="form-textbox validate[required, requireEveryCell]" name="q25_sinCorreccion222" style="width:100%;box-sizing:border-box" size="5" value="<?php echo $SCAmbosOjosVC ?>" aria-labelledby="label_25_col_1 label_25_row_2" step="any" aria-label="Cells Numeric Text Box" /></td>
              </tr>
            </table>
          </div>
        </li>

        <li class="form-line form-line-column form-col-2 jf-required" data-type="control_matrix" id="id_48"><label class="form-label form-label-top" id="label_48" for="input_48" aria-hidden="false"> Con Corrección<span class="form-required">*</span> </label>
          <div id="cid_48" class="form-input-wide jf-required" data-layout="full">
            <table summary="" aria-labelledby="label_48" cellPadding="4" cellSpacing="0" class="form-matrix-table" data-component="matrix">
              <tr class="form-matrix-tr form-matrix-header-tr">
                <th class="form-matrix-th" style="border:none"> </th>
                <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_0"><label id="label_48_col_0">Visión Lejana</label></th>
                <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_1"><label id="label_48_col_1">Visión Cercana</label></th>
              </tr>

              <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_48 label_48_row_0">
                <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_48_row_0">Ojo Derecho</label></th>
                <td class="form-matrix-values"><input type="text" id="input_48_0_0" class="form-textbox validate[required, requireEveryCell]" name="q48_conCorreccion1" style="width:100%;box-sizing:border-box" size="5" value="<?php echo $CCOjoDerechoVisionLejana ?>" aria-labelledby="label_48_col_0 label_48_row_0" step="any" aria-label="Cells Numeric Text Box" /></td>
                <td class="form-matrix-values"><input type="text" id="input_48_0_1" class="form-textbox validate[required, requireEveryCell]" name="q48_conCorreccion2" style="width:100%;box-sizing:border-box" size="5" value="<?php echo $CCOjoDerechoVisionCercana ?>" aria-labelledby="label_48_col_1 label_48_row_0" step="any" aria-label="Cells Numeric Text Box" /></td>
              </tr>
              <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_48 label_48_row_1">
                <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_48_row_1">Ojo Izquierdo</label></th>
                <td class="form-matrix-values"><input type="text" id="input_48_1_0" class="form-textbox validate[required, requireEveryCell]" name="q48_conCorreccion11" style="width:100%;box-sizing:border-box" size="5" value="<?php echo $CCOjoIzquierdoVisionLejana ?>" aria-labelledby="label_48_col_0 label_48_row_1" step="any" aria-label="Cells Numeric Text Box" /></td>
                <td class="form-matrix-values"><input type="text" id="input_48_1_1" class="form-textbox validate[required, requireEveryCell]" name="q48_conCorreccion22" style="width:100%;box-sizing:border-box" size="5" value="<?php echo $CCOjoIzquierdoVisionCercana ?>" aria-labelledby="label_48_col_1 label_48_row_1" step="any" aria-label="Cells Numeric Text Box" /></td>
              </tr>
              <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_48 label_48_row_2">
                <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_48_row_2">Ambos Ojos</label></th>
                <td class="form-matrix-values"><input type="text" id="input_48_2_0" class="form-textbox validate[required, requireEveryCell]" name="q48_conCorreccion111" style="width:100%;box-sizing:border-box" size="5" value="<?php echo $CCAmbosOjosVL ?>" aria-labelledby="label_48_col_0 label_48_row_2" step="any" aria-label="Cells Numeric Text Box" /></td>
                <td class="form-matrix-values"><input type="text" id="input_48_2_1" class="form-textbox validate[required, requireEveryCell]" name="q48_conCorreccion222" style="width:100%;box-sizing:border-box" size="5" value="<?php echo $CCAmbosOjosVC ?>" aria-labelledby="label_48_col_1 label_48_row_2" step="any" aria-label="Cells Numeric Text Box" /></td>
              </tr>
            </table>
          </div>
        </li>


        <li class="form-line" data-type="control_textbox" id="id_49"><label class="form-label form-label-top form-label-auto" id="label_49" for="input_49" aria-hidden="false"> Observaciones: </label>
          <div id="cid_49" class="form-input-wide" data-layout="half"> 
            <input type="text" id="input_49" name="q49_observaciones" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" maxLength="250" data-component="textbox" aria-labelledby="label_49" value="<?php echo $ObservacionesExSub ?>" /> </div>
        </li>
  
         <!-- <li class="form-line jf-required" data-type="control_widget" id="id_38"><label class="form-label form-label-top form-label-auto" id="label_38" for="input_38" aria-hidden="false"> Test de Ishihara<span class="form-required">*</span> </label>
           <div id="cid_38" class="form-input-wide jf-required" data-layout="full">
            <div data-widget-name="Lista Configurable" style="width:100%;text-align:Left;overflow-x:auto" data-component="widget-field"><iframe data-client-id="533946093c1ad0c45d000070" title="Lista Configurable" frameBorder="0" scrolling="no" allowtransparency="true" allow="geolocation; microphone; camera; autoplay; encrypted-media; fullscreen" data-type="iframe" class="custom-field-frame" id="customFieldFrame_38" src="" style="max-width:650px;border:none;width:100%;height:130px" data-width="650" data-height="130"></iframe>
              <div class="widget-inputs-wrapper">
                <input type="hidden" id="input_38" class="form-hidden form-widget widget-required " name="q38_testDe38" value="" />
                <input type="hidden" id="widget_settings_38" class="form-hidden form-widget-settings" value="%5B%7B%22name%22%3A%22fields%22%2C%22value%22%3A%22%5CnColor%20%3A%20dropdown%20%3A%20Normal%2C%20Monocrom%C3%A1tico%2C%20Protanop%C3%ADa%2C%20Deuteranop%C3%ADa%2C%20Tritanop%C3%ADa%20%3A%20Seleccionar%5CnAnomal%C3%ADa%20%3A%20dropdown%20%3A%20leve%2C%20media%2C%20alta%20%3A%20Seleccionar%5CnObservaci%C3%B3n%20%3A%20text%5Cn%5Cn%22%7D%2C%7B%22name%22%3A%22minRowsNumber%22%2C%22value%22%3A%221%22%7D%2C%7B%22name%22%3A%22limit%22%2C%22value%22%3A%220%22%7D%2C%7B%22name%22%3A%22customCSS%22%2C%22value%22%3A%22.checkbox%2C%20.radio%20%7B%5Cnmargin%3A%203px%200%3B%5Cnmin-width%3A%2070px%3B%5Cn%7D%22%7D%2C%7B%22name%22%3A%22labelAdd%22%2C%22value%22%3A%22%2B%22%7D%2C%7B%22name%22%3A%22labelRemove%22%2C%22value%22%3A%22x%22%7D%5D" data-version="2" /></div> -->
              
              <!-- <script type="text/javascript">
                setTimeout(function()
                {
                  var _cFieldFrame = document.getElementById("customFieldFrame_38");
                  if (_cFieldFrame)
                  {
                    _cFieldFrame.onload = function()
                    {
                      if (typeof widgetFrameLoaded !== 'undefined')
                      {
                        widgetFrameLoaded(38,
                        {
                          "formID": 240483924998877
                        })
                      }
                    };
                    _cFieldFrame.src = "//widgets.jotform.io/configurableList/?qid=38&isOpenedInPortal=undefined&align=Left&ref=" +
                      encodeURIComponent(window.location.protocol + "//" + window.location.host) + '' + '' + '' +
                      '&injectCSS=' + encodeURIComponent(window.location.search.indexOf("ndt=1") > -1);
                    _cFieldFrame.addClassName("custom-field-frame-rendered");
                  }
                }, 0);
              </script>
            </div>
          </div>
         </li> -->

        
         <!-- <li class="form-line form-line-column form-col-1" data-type="control_widget" id="id_37"><label class="form-label form-label-top form-label-auto" id="label_37" for="input_37" aria-hidden="false"> Ojo Derecho </label>
          <div id="cid_37" class="form-input-wide" data-layout="full">
            <div data-widget-name="Tomar Foto" style="width:100%;text-align:Left;overflow-x:auto" data-component="widget-field"><iframe data-client-id="529c8286a75dae5e7f000005" title="Tomar Foto" frameBorder="0" scrolling="no" allowtransparency="true" allow="geolocation; microphone; camera; autoplay; encrypted-media; fullscreen" data-type="iframe" class="custom-field-frame" id="customFieldFrame_37" src="" style="max-width:516px;border:none;width:100%;height:60px" data-width="516" data-height="60"></iframe>
              <div class="widget-inputs-wrapper"><input type="hidden" id="input_37" class="form-hidden form-widget  " name="q37_ojoDerecho" value="" /><input type="hidden" id="widget_settings_37" class="form-hidden form-widget-settings" value="%5B%7B%22name%22%3A%22cameraFacing%22%2C%22value%22%3A%22Frente%22%7D%5D" data-version="2" /></div>
              <script type="text/javascript">
                setTimeout(function()
                {
                  var _cFieldFrame = document.getElementById("customFieldFrame_37");
                  if (_cFieldFrame)
                  {
                    _cFieldFrame.onload = function()
                    {
                      if (typeof widgetFrameLoaded !== 'undefined')
                      {
                        widgetFrameLoaded(37,
                        {
                          "formID": 240483924998877
                        })
                      }
                    };
                    _cFieldFrame.src = "//widgets.jotform.io/takephoto/?qid=37&isOpenedInPortal=undefined&align=Left&ref=" +
                      encodeURIComponent(window.location.protocol + "//" + window.location.host) + '' + '' + '' +
                      '&injectCSS=' + encodeURIComponent(window.location.search.indexOf("ndt=1") > -1);
                    _cFieldFrame.addClassName("custom-field-frame-rendered");
                  }
                }, 0);
              </script>
            </div>
          </div>
        </li> -->

        <!-- <li class="form-line form-line-column form-col-2" data-type="control_widget" id="id_51"><label class="form-label form-label-top form-label-auto" id="label_51" for="input_51" aria-hidden="false"> Ojo Izquierdo </label>
          <div id="cid_51" class="form-input-wide" data-layout="full">
            <div data-widget-name="Tomar Foto" style="width:100%;text-align:Left;overflow-x:auto" data-component="widget-field"><iframe data-client-id="529c8286a75dae5e7f000005" title="Tomar Foto" frameBorder="0" scrolling="no" allowtransparency="true" allow="geolocation; microphone; camera; autoplay; encrypted-media; fullscreen" data-type="iframe" class="custom-field-frame" id="customFieldFrame_51" src="" style="max-width:516px;border:none;width:100%;height:60px" data-width="516" data-height="60"></iframe>
              <div class="widget-inputs-wrapper"><input type="hidden" id="input_51" class="form-hidden form-widget  " name="q51_ojoIzquierdo" value="" /><input type="hidden" id="widget_settings_51" class="form-hidden form-widget-settings" value="%5B%7B%22name%22%3A%22cameraFacing%22%2C%22value%22%3A%22Frente%22%7D%5D" data-version="2" /></div>
              <script type="text/javascript">
                setTimeout(function()
                {
                  var _cFieldFrame = document.getElementById("customFieldFrame_51");
                  if (_cFieldFrame)
                  {
                    _cFieldFrame.onload = function()
                    {
                      if (typeof widgetFrameLoaded !== 'undefined')
                      {
                        widgetFrameLoaded(51,
                        {
                          "formID": 240483924998877
                        })
                      }
                    };
                    _cFieldFrame.src = "//widgets.jotform.io/takephoto/?qid=51&isOpenedInPortal=undefined&align=Left&ref=" +
                      encodeURIComponent(window.location.protocol + "//" + window.location.host) + '' + '' + '' +
                      '&injectCSS=' + encodeURIComponent(window.location.search.indexOf("ndt=1") > -1);
                    _cFieldFrame.addClassName("custom-field-frame-rendered");
                  }
                }, 0);
              </script>
            </div> 
          </div> 
        </li> -->
        
        <li class="form-line form-line-column form-col-3" data-type="control_textbox" id="id_54"><label class="form-label form-label-top" id="label_54" for="input_54" aria-hidden="false"> Observaciones (Sin Corrección): </label>
          <div id="cid_54" class="form-input-wide" data-layout="half"> 
            <input type="text" id="input_54" name="q54_observaciones54" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" maxLength="250" data-component="textbox" aria-labelledby="label_54" value="<?php echo $ObservacionesOjoDerecho ?>" /> </div>
        </li>
        <li class="form-line form-line-column form-col-4" data-type="control_textbox" id="id_65"><label class="form-label form-label-top" id="label_65" for="input_65" aria-hidden="false"> Observaciones (Con Corrección): </label>
          <div id="cid_65" class="form-input-wide" data-layout="half">
             <input type="text" id="input_65" name="q65_observaciones65" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" maxLength="250" data-component="textbox" aria-labelledby="label_65" value="<?php echo $ObservacionesOjoIzquierdo ?>" /> </div>
        </li>

        <li class="form-line form-line-column form-col-5" data-type="control_dropdown" id="id_63"><label class="form-label form-label-top" id="label_63" for="input_63" aria-hidden="false"> Reflejo Pupilar </label>
          <div id="cid_63" class="form-input-wide" data-layout="half"> 
            <select class="form-dropdown" id="input_63" name="q63_reflejoPupilar" style="width:310px" data-component="dropdown" aria-label="Reflejo Pupilar">
              <option value="">Selecciona</option>
              <option value="0" <?php echo ($ReflejoPupilar == '0') ? 'selected' : ''; ?>>0</option>
              <option value="6" <?php echo ($ReflejoPupilar == '6') ? 'selected' : ''; ?>>6</option>
              <option value="12" <?php echo ($ReflejoPupilar == '12') ? 'selected' : ''; ?>>12</option>
            </select> </div>
        </li>

        <li class="form-line form-line-column form-col-6" data-type="control_dropdown" id="id_66"><label class="form-label form-label-top" id="label_66" for="input_666" aria-hidden="false"> Posición Primaria de Mirada (PPM): </label>
          <div id="cid_66" class="form-input-wide" data-layout="half"> 
            <select class="form-dropdown" id="input_666" name="q66_posicionPrimaria66" style="width:310px" data-component="dropdown" position="relative" aria-label="Posición Primaria de Mirada (PPM):">
              <option value="">Selecciona</option>
              <option value="0" <?php echo ($PosiPriDeMiraPPM == '0') ? 'selected' : ''; ?>>0</option>
              <option value="6" <?php echo ($PosiPriDeMiraPPM == '6') ? 'selected' : ''; ?>>6</option>
              <option value="12" <?php echo ($PosiPriDeMiraPPM == '12') ? 'selected' : ''; ?>>12</option>
            </select> </div>
        </li>


        <li id="cid_67" class="form-input-wide" data-type="control_head">
          <div class="form-header-group  header-default">
            <div class="header-text httal htvam">
              <h2 id="header_67" class="form-header" data-component="header">Cover Test</h2>
            </div>
          </div>
        </li>

        <li class="form-line form-line-column form-col-7" data-type="control_image" id="id_57">
          <div id="cid_57" class="form-input-wide" data-layout="full">
            <div style="text-align:center" aria-hidden="true" role="none"><img alt="Ojo Derecho" loading="lazy" class="form-image" style="border:0" src="https://www.jotform.com/uploads/albertwcero3/form_files/3t.5f7e514b85a4c9.42495125.png" height="372px" width="413px" data-component="image" role="none" aria-hidden="true" tabindex="-1" /></div>
          </div>
        </li>


        <li class="form-line form-line-column form-col-8" data-type="control_image" id="id_56">
          <div id="cid_56" class="form-input-wide" data-layout="full">
            <div style="text-align:center" aria-hidden="true" role="none"><img alt="Ojo Izquierdo" loading="lazy" class="form-image" style="border:0" src="https://www.jotform.com/uploads/albertwcero3/form_files/3t.5f7e514b85a4c9.42495125.png" height="372px" width="413px" data-component="image" role="none" aria-hidden="true" tabindex="-1" /></div>
          </div>
        </li>


        <li class="form-line form-line-column form-col-9 jf-required" data-type="control_checkbox" id="id_61"><label class="form-label form-label-top" id="label_61" aria-hidden="false"> Ojo derecho<span class="form-required">*</span> </label>
          <div id="cid_61" class="form-input-wide jf-required" data-layout="full">
            <div class="form-single-column" role="group" aria-labelledby="label_61" data-component="checkbox">
            <span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span>

            <input type="checkbox" aria-describedby="label_61" class="form-checkbox validate[required]" id="input_61_0" name="q61_ojoDerecho61_1" value="RM" <?php echo ($valorCheckboxRM == 'RM') ? 'checked' : ''; ?> required="" />
            <label id="label_input_61_0" for="input_61_0">RM</label>

            </span><span class="form-checkbox-item" style="clear:left">
            <span class="dragger-item"></span>

            <input type="checkbox" aria-describedby="label_61" class="form-checkbox validate[required]" id="input_61_1" name="q61_ojoDerecho61_2" value="RL" <?php echo ($valorCheckboxRL == 'RL') ? 'checked' : ''; ?> required="" />
            <label id="label_input_61_1" for="input_61_1">RL</label>

            </span><span class="form-checkbox-item" style="clear:left">
            <span class="dragger-item"></span>
            <input type="checkbox" aria-describedby="label_61" class="form-checkbox validate[required]" id="input_61_2" name="q61_ojoDerecho61_3" value="RI" <?php echo ($valorCheckboxRI == 'RI') ? 'checked' : ''; ?> required="" />
            <label id="label_input_61_2" for="input_61_2">RI</label>
            </span><span class="form-checkbox-item" style="clear:left">
            <span class="dragger-item"></span>

            <input type="checkbox" aria-describedby="label_61" class="form-checkbox validate[required]" id="input_61_3" name="q61_ojoDerecho61_4" value="RS" <?php echo ($valorCheckboxRS == 'RS') ? 'checked' : ''; ?> required="" />
            <label id="label_input_61_3" for="input_61_3">RS</label>
            </span><span class="form-checkbox-item" style="clear:left">
            <span class="dragger-item"></span>

            <input type="checkbox" aria-describedby="label_61" class="form-checkbox validate[required]" id="input_61_4" name="q61_ojoDerecho61_5" value="OI" <?php echo ($valorCheckboxOI == 'OI') ? 'checked' : ''; ?> required="" />
            <label id="label_input_61_4" for="input_61_4">OI</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span>

            <input type="checkbox" aria-describedby="label_61" class="form-checkbox validate[required]" id="input_61_5" name="q61_ojoDerecho61_6" value="OS" <?php echo ($valorCheckboxOS == 'OS') ? 'checked' : ''; ?> required="" />
            <label id="label_input_61_5" for="input_61_5">OS</label></span></div>
          </div>
        </li>

        
        <li class="form-line form-line-column form-col-10 jf-required" data-type="control_checkbox" id="id_62">
          <label class="form-label form-label-top" id="label_62" aria-hidden="false"> Ojo izquierdo<span class="form-required">*</span> </label>
          <div id="cid_62" class="form-input-wide jf-required" data-layout="full">
            <div class="form-single-column" role="group" aria-labelledby="label_62" data-component="checkbox">
            <span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span>
            <input type="checkbox" aria-describedby="label_62" class="form-checkbox validate[required]" id="input_62_0" name="q62_ojoIzquierdo62_1" value="RM" <?php echo ($valorCheckboxIzquierdoRM == 'RM') ? 'checked' : ''; ?> required="" />
            <label id="label_input_62_0" for="input_62_0">RM</label></span>
            <span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span>
            <input type="checkbox" aria-describedby="label_62" class="form-checkbox validate[required]" id="input_62_1" name="q62_ojoIzquierdo62_2" value="RL" <?php echo ($valorCheckboxIzquierdoRL == 'RL') ? 'checked' : ''; ?> required="" />
            <label id="label_input_62_1" for="input_62_1">RL</label></span>
            <span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span>
            <input type="checkbox" aria-describedby="label_62" class="form-checkbox validate[required]" id="input_62_2" name="q62_ojoIzquierdo62_3" value="RI" <?php echo ($valorCheckboxIzquierdoRI == 'RI') ? 'checked' : ''; ?> required="" />
            <label id="label_input_62_2" for="input_62_2">RI</label></span>
            <span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span>
            <input type="checkbox" aria-describedby="label_62" class="form-checkbox validate[required]" id="input_62_3" name="q62_ojoIzquierdo62_4" value="RS" <?php echo ($valorCheckboxIzquierdoRS == 'RS') ? 'checked' : ''; ?> required="" />
            <label id="label_input_62_3" for="input_62_3">RS</label></span>
            <span class="form-checkbox-item" style="clear:left">
            <span class="dragger-item"></span><input type="checkbox" aria-describedby="label_62" class="form-checkbox validate[required]" id="input_62_4" name="q62_ojoIzquierdo62_5" value="OI" <?php echo ($valorCheckboxIzquierdoOI == 'OI') ? 'checked' : ''; ?> required="" />
            <label id="label_input_62_4" for="input_62_4">OI</label></span>
            <span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span>
            <input type="checkbox" aria-describedby="label_62" class="form-checkbox validate[required]" id="input_62_5" name="q62_ojoIzquierdo62_6" value="OS" <?php echo ($valorCheckboxIzquierdoOS == 'OS') ? 'checked' : ''; ?> required="" />
            <label id="label_input_62_5" for="input_62_5">OS</label></span></div>
          </div>
        </li>


        <li id="cid_69" class="form-input-wide" data-type="control_head">
          <div class="form-header-group  header-default">
            <div class="header-text httal htvam">
              <h2 id="header_69" class="form-header" data-component="header">Oftalmoscopía</h2>
            </div>
          </div>
        </li>


        <li class="form-line form-line-column form-col-11 jf-required" data-type="control_matrix" id="id_68"><label class="form-label form-label-top" id="label_68" for="input_68" aria-hidden="false"> Ojo Derecho<span class="form-required">*</span> </label>
          <div id="cid_68" class="form-input-wide jf-required" data-layout="full">
            <table summary="" aria-labelledby="label_68" cellPadding="4" cellSpacing="0" class="form-matrix-table" data-component="matrix">
              <tr class="form-matrix-tr form-matrix-header-tr">
                <th class="form-matrix-th" style="border:none"> </th>
                <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_0" style="width:-4px"><label id="label_68_col_0">Observación</label></th>
              </tr>
              <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_68 label_68_row_0">
                <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_68_row_0">Papila</label></th>
                <td class="form-matrix-values">
                  <input type="text" id="input_68_0_0" class="form-textbox validate[required, requireEveryCell]" size="5" name="q68_ojoDerecho68_1" style="width:100%;box-sizing:border-box" value="<?php echo $OjoDerePapilaObservvacion ?>" aria-labelledby="label_68_col_0 label_68_row_0" aria-label="Cells Text Box" /></td>
              </tr>
              <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_68 label_68_row_1">
                <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_68_row_1">Excavación</label></th>
                <td class="form-matrix-values"><input type="text" id="input_68_1_0" class="form-textbox validate[required, requireEveryCell]" size="5" name="q68_ojoDerecho68_2" style="width:100%;box-sizing:border-box" value="<?php echo $OjoDereExcavacionObservvacion ?>" aria-labelledby="label_68_col_0 label_68_row_1" aria-label="Cells Text Box" /></td>
              </tr>
              <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_68 label_68_row_2">
                <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_68_row_2">Vasos</label></th>
                <td class="form-matrix-values"><input type="text" id="input_68_2_0" class="form-textbox validate[required, requireEveryCell]" size="5" name="q68_ojoDerecho68_3" style="width:100%;box-sizing:border-box"value="<?php echo $OjoDereVasosObvacion ?>" aria-labelledby="label_68_col_0 label_68_row_2" aria-label="Cells Text Box" /></td>
              </tr>
              <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_68 label_68_row_3">
                <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_68_row_3">Mácula</label></th>
                <td class="form-matrix-values"><input type="text" id="input_68_3_0" class="form-textbox validate[required, requireEveryCell]" size="5" name="q68_ojoDerecho68_4" style="width:100%;box-sizing:border-box" value="<?php echo $OjoDereMaculaObvacion ?>" aria-labelledby="label_68_col_0 label_68_row_3" aria-label="Cells Text Box" /></td>
              </tr>
              <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_68 label_68_row_4">
                <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_68_row_4">Fóvea</label></th>
                <td class="form-matrix-values"><input type="text" id="input_68_4_0" class="form-textbox validate[required, requireEveryCell]" size="5" name="q68_ojoDerecho68_5" style="width:100%;box-sizing:border-box" value="<?php echo $OjoDereFoveaObvacion ?>" aria-labelledby="label_68_col_0 label_68_row_4" aria-label="Cells Text Box" /></td>
              </tr>
              <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_68 label_68_row_5">
                <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_68_row_5">Renita</label></th>
                <td class="form-matrix-values"><input type="text" id="input_68_5_0" class="form-textbox validate[required, requireEveryCell]" size="5" name="q68_ojoDerecho68_6" style="width:100%;box-sizing:border-box" value="<?php echo $OjoDereRenitaObvacion ?>" aria-labelledby="label_68_col_0 label_68_row_5" aria-label="Cells Text Box" /></td>
              </tr>
            </table>
          </div>
        </li>


        <li class="form-line form-line-column form-col-12 jf-required" data-type="control_matrix" id="id_70"><label class="form-label form-label-top" id="label_70" for="input_70" aria-hidden="false"> Ojo Izquierdo<span class="form-required">*</span> </label>
          <div id="cid_70" class="form-input-wide jf-required" data-layout="full">
            <table summary="" aria-labelledby="label_70" cellPadding="4" cellSpacing="0" class="form-matrix-table" data-component="matrix">
              <tr class="form-matrix-tr form-matrix-header-tr">
                <th class="form-matrix-th" style="border:none"> </th>
                <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_0" style="width:0px"><label id="label_70_col_0">Observación</label></th>
              </tr>
              <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_70 label_70_row_0">
                <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_70_row_0">Papila</label></th>
                <td class="form-matrix-values"><input type="text" id="input_70_0_0" class="form-textbox validate[required, requireEveryCell]" size="5" name="q70_ojoIzquierdo70_1" style="width:100%;box-sizing:border-box" value="<?php echo $OjoIzquiPapilaObservvacion ?>" aria-labelledby="label_70_col_0 label_70_row_0" aria-label="Cells Text Box" /></td>
              </tr>
              <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_70 label_70_row_1">
                <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_70_row_1">Excavación</label></th>
                <td class="form-matrix-values"><input type="text" id="input_70_1_0" class="form-textbox validate[required, requireEveryCell]" size="5" name="q70_ojoIzquierdo70_2" style="width:100%;box-sizing:border-box" value="<?php echo $OjoIzquiExcavacionObservvacion ?>" aria-labelledby="label_70_col_0 label_70_row_1" aria-label="Cells Text Box" /></td>
              </tr>
              <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_70 label_70_row_2">
                <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_70_row_2">Vasos</label></th>
                <td class="form-matrix-values"><input type="text" id="input_70_2_0" class="form-textbox validate[required, requireEveryCell]" size="5" name="q70_ojoIzquierdo70_3" style="width:100%;box-sizing:border-box" value="<?php echo $OjoIzquiVasosObvacion ?>" aria-labelledby="label_70_col_0 label_70_row_2" aria-label="Cells Text Box" /></td>
              </tr>
              <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_70 label_70_row_3">
                <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_70_row_3">Mácula</label></th>
                <td class="form-matrix-values"><input type="text" id="input_70_3_0" class="form-textbox validate[required, requireEveryCell]" size="5" name="q70_ojoIzquierdo70_4" style="width:100%;box-sizing:border-box" value="<?php echo $OjoIzquiMaculaObvacion ?>" aria-labelledby="label_70_col_0 label_70_row_3" aria-label="Cells Text Box" /></td>
              </tr>
              <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_70 label_70_row_4">
                <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_70_row_4">Fóvea</label></th>
                <td class="form-matrix-values"><input type="text" id="input_70_4_0" class="form-textbox validate[required, requireEveryCell]" size="5" name="q70_ojoIzquierdo70_5" style="width:100%;box-sizing:border-box" value="<?php echo $OjoIzquiFoveaObvacion ?>" aria-labelledby="label_70_col_0 label_70_row_4" aria-label="Cells Text Box" /></td>
              </tr>
              <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_70 label_70_row_5">
                <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_70_row_5">Renita</label></th>
                <td class="form-matrix-values"><input type="text" id="input_70_5_0" class="form-textbox validate[required, requireEveryCell]" size="5" name="q70_ojoIzquierdo70_6" style="width:100%;box-sizing:border-box" value="<?php echo $OjoIzquiRenitaObvacion ?>" aria-labelledby="label_70_col_0 label_70_row_5" aria-label="Cells Text Box" /></td>
              </tr>
            </table>
          </div>
        </li>
      </ul>


      <ul class="form-section-closed" style="height: 84px;clear:both;" id="section_71">
        <li id="cid_71" class="form-input-wide" data-type="control_collapse">
          <div class="form-collapse-table" id="collapse_71" data-component="collapse"><span class="form-collapse-mid" id="collapse-text_71">Objetivo</span><span class="form-collapse-right form-collapse-right-hide"> </span></div>
        </li>

        <li class="form-line form-line-column form-col-13 jf-required" data-type="control_matrix" id="id_72"><label class="form-label form-label-top" id="label_72" for="input_72" aria-hidden="false"> RX Final<span class="form-required">*</span> </label>
          <div id="cid_72" class="form-input-wide jf-required" data-layout="full">
            <table summary="" aria-labelledby="label_72" cellPadding="4" cellSpacing="0" class="form-matrix-table" data-component="matrix">
              <tr class="form-matrix-tr form-matrix-header-tr">
                <th class="form-matrix-th" style="border:none"> </th>
                <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_0"><label id="label_72_col_0">RX</label></th>
              </tr>
              <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_72 label_72_row_0">
                <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_72_row_0">Ojo Derecho</label></th>
                <td class="form-matrix-values"><input type="text" id="input_72_0_0" class="form-textbox validate[required, requireEveryCell]" name="q72_rxFinal_1" style="width:100%;box-sizing:border-box" size="5" value="<?php echo $RXOjoDerecho ?>" aria-labelledby="label_72_col_0 label_72_row_0" step="any" aria-label="Cells Numeric Text Box" /></td>
              </tr>
              <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_72 label_72_row_1">
                <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_72_row_1">Ojo Izquierdo</label></th>
                <td class="form-matrix-values"><input type="text" id="input_72_1_0" class="form-textbox validate[required, requireEveryCell]" name="q72_rxFinal_2" style="width:100%;box-sizing:border-box" size="5" value="<?php echo $RXOjoIzquierdo?>" aria-labelledby="label_72_col_0 label_72_row_1" step="any" aria-label="Cells Numeric Text Box" /></td>
              </tr>
              <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_72 label_72_row_2">
                <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_72_row_2">Add</label></th>
                <td class="form-matrix-values"><input type="text" id="input_72_2_0" class="form-textbox validate[required, requireEveryCell]" name="q72_rxFinal_3" style="width:100%;box-sizing:border-box" size="5" value="<?php echo $RXAdd ?>" aria-labelledby="label_72_col_0 label_72_row_2" step="any" aria-label="Cells Numeric Text Box" /></td>
              </tr>
              <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_72 label_72_row_3">
                <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_72_row_3">DX</label></th>
                <td class="form-matrix-values"><input type="text" id="input_72_3_0" class="form-textbox validate[required, requireEveryCell]" name="q72_rxFinal_4" style="width:100%;box-sizing:border-box" size="5" value="<?php echo $RXDX ?>" aria-labelledby="label_72_col_0 label_72_row_3" step="any" aria-label="Cells Numeric Text Box" /></td>
              </tr>
              <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_72 label_72_row_4">
                <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_72_row_4">TTO</label></th>
                <td class="form-matrix-values"><input type="text" id="input_72_4_0" class="form-textbox validate[required, requireEveryCell]" name="q72_rxFinal_5" style="width:100%;box-sizing:border-box" size="5" value="<?php echo $RXTTO ?>" aria-labelledby="label_72_col_0 label_72_row_4" step="any" aria-label="Cells Numeric Text Box" /></td>
              </tr>
            </table>
          </div>
        </li>

        <li class="form-line form-line-column form-col-14 jf-required" data-type="control_matrix" id="id_73"><label class="form-label form-label-top" id="label_73" for="input_73" aria-hidden="false">Agudeza Visual<span class="form-required">*</span> </label>
          <div id="cid_73" class="form-input-wide jf-required" data-layout="full">
            <table summary="" aria-labelledby="label_73" cellPadding="4" cellSpacing="0" class="form-matrix-table" data-component="matrix">
              <tr class="form-matrix-tr form-matrix-header-tr">
                <th class="form-matrix-th" style="border:none"> </th>
                <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_0"><label id="label_73_col_0">AV</label></th>
              </tr>
              <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_73 label_73_row_0">
                <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_73_row_0">Ojo Derecho</label></th>
                <td class="form-matrix-values"><input type="text" id="input_73_0_0" class="form-textbox validate[required, requireEveryCell]" name="q73_agudezaVisual_1" style="width:100%;box-sizing:border-box" size="5" value="<?php echo $OjoDerechoAV ?>" aria-labelledby="label_73_col_0 label_73_row_0" step="any" aria-label="Cells Numeric Text Box" /></td>
              </tr>
              <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_73 label_73_row_1">
                <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_73_row_1">Ojo Izquierdo</label></th>
                <td class="form-matrix-values"><input type="text" id="input_73_1_0" class="form-textbox validate[required, requireEveryCell]" name="q73_agudezaVisual_2" style="width:100%;box-sizing:border-box" size="5" value="<?php echo $OjoIzquierdoAV ?>" aria-labelledby="label_73_col_0 label_73_row_1" step="any" aria-label="Cells Numeric Text Box" /></td>
              </tr>
              
              <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_73 label_73_row_2">
                <th scope="row" class="form-matrix-headers form-matrix-row-headers"><label id="label_73_row_2">Observaciones</label></th>
                <td class="form-matrix-values"><input type="text" id="input_73_2_0" class="form-number-input form-textbox validate[required, requireOneAnswer]" name="q73_agudezaVisual_Observaciones" style="width:100%;box-sizing:border-box" size="5" value="<?php echo $ObservacionesOjoIzOjoDer ?>" aria-labelledby="label_73_col_0 label_73_row_2" step="any" aria-label="Cells Numeric Text Box" /></td>
              </tr>
            </table>
          </div>
        </li>

                <!-- NOTA GENERAL DE LO QUE SE LE FACTURARA AL PACIENTE -->
                <li class="form-line jf-required" data-type="control_textarea" id="id_14">
          <label class="form-label form-label-top form-label-auto" id="label_14" for="input_14" aria-hidden="false"> Motivo de la consulta:<span class="form-required">*</span> </label>
          <div id="cid_14" class="form-input-wide jf-required" data-layout="full">
            <div class="form-textarea-limit"><span>
              <textarea id="input_14" class="form-textarea validate[required]" name="AFacturar" style="width:648px;height:163px" data-component="textarea" required="" aria-labelledby="label_14"><?php echo htmlspecialchars($AFacturar); ?></textarea>
                <div class="form-textarea-limit-indicator"><span data-limit="250" type="Words" data-minimum="-1" data-typeminimum="Words" id="input_14-limit">0/250</span></div>
              </span>
            </div>
          </div>
        </li>
      
        <!--  PROXIMO CONTROL -->
<p></p>
<p></p>
  <style>
  body {
    font-family: 'Ubuntu', sans-serif;
  }

  .container {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  label {
    display: block;
    margin-bottom: 15px;
  }

  input[type="text"],
  input[type="date"],
  input[type="time"],
  select,
  input[type="tel"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 1.10rem;
  }

  input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type="submit"]:hover {
    background-color: #45a049;
  }
</style>

    <!-- <form 
    
    action="guardar_cita.php" method="post"> -->
    <!-- <label for="nombre">Nombre del Paciente:</label>
    <input type="text" id="nombre" name="nombre" required> -->
    
    <label for="fecha">Fecha de la Cita: (Mes-Dia-Año)</label>
    <input type="date" id="fecha" name="q74_proximoControlDia" placeholder="DD-MM-YYYY" value="<?php echo $ProxiControlFecha ?>" required>
    
    <label for="hora">Hora de la Cita:</label>
    <input type="time" id="hora" name="q74_proximoControlHora" value="<?php echo "$horas:$minutos"; ?>" required>
    
    <label for="tipo">Tipo de Cita:</label>
    <select id="tipo" name="TipoDeCita" required="">
    <option value="Consulta" <?php echo ($TipoDeCita == 'Consulta') ? 'selected' : ''; ?>>Consulta Médica</option>
    <option value="Examen" <?php echo ($TipoDeCita == 'Examen') ? 'selected' : ''; ?>>Examen</option>
    <option value="Seguimiento" <?php echo ($TipoDeCita == 'Seguimiento') ? 'selected' : ''; ?>>Seguimiento</option>
    <option value="<?php echo $TipoDeCita ?>" <?php echo (!in_array($TipoDeCita, ['Consulta', 'Examen', 'Seguimiento'])) ? 'selected' : ''; ?>><?php echo $TipoDeCita ?></option>
    </select>

    <p></p>
    <p></p>
    <h2>Citas Agendadas</h2>

    <!-- MOSTRAR LAS AGENDA DE CITAS -->
    <?php
    // Paso 1: Establecer la conexión con la base de datos  
    $servername = "localhost"; // Nombre del servidor MySQL
    $username = "root"; // Nombre de usuario de MySQL
    $password = ""; // Contraseña de MySQL
    $database = "clinica_opti"; // Nombre de la base de datos

    // Crear conexión
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Verificar la conexión
    if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
    }

    // Paso 2: Ejecutar consulta SQL para seleccionar las citas guardadas
    $sql = "SELECT NombrePaciente, ApellidoPaciente, ProxiControlFecha, ProxiControlHora, TipoDeCita, NumeroDeTelefono, EmailPaciente FROM formulariorecetar";
    $result = mysqli_query($conn, $sql);

    // Paso 3: Recuperar los resultados y almacenarlos en un array
    $citas = array();
    if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $citas[] = $row;
    }
    }

    // Paso 4: Mostrar las citas en forma de lista HTML
    ?>

    <style>

    :root {
      --blue: linear-gradient(to right, #5c6bc0, #512da8); 
      --white: #fff;
    }
    .citas-container {
        max-height: 300px; /* Altura máxima del contenedor */
        overflow-y: auto; /* Habilitar el desplazamiento vertical */
        border: 1px solid #ccc; /* Borde para el contenedor */
        border-radius: 5px; /* Bordes redondeados */
        padding: 10px; /* Espacio interno */
    }

    .lista-citas {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .lista-citas li {
        background-color: #fff;
        padding: 10px;
        margin-right: 23px;
        margin-bottom: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: background-color 0.3s ease;
        display: inline-block; /* Mostrar citas en línea */
        vertical-align: top; /* Alinear citas en la parte superior */
    }

    .cita-info {
        font-weight: bold;
    }

    .cita-info span {
        color: #888;
    }

    .lista-citas li:hover {
      background: var(--blue);
    }

    .lista-citas .cita-info span {
    color: #888;
    }

    .lista-citas li:hover .cita-info span {
    color: var(--white);
    }
    
</style>


<div class="citas-container">
    <?php
    // Crear un array para almacenar las citas agrupadas por mes
    $citasPorMes = array();
    
    // Agrupar las citas por mes
    foreach ($citas as $cita) {
        // Obtener el nombre del mes
        $mes = date('F Y', strtotime($cita['ProxiControlFecha']));
        
        // Verificar si la cita está en el futuro (o en el presente)
        if (strtotime($cita['ProxiControlFecha']) >= strtotime('today')) {

        // Verificar si el mes ya existe en el array
        if (!isset($citasPorMes[$mes])) {
            // Si no existe, crear un nuevo array para ese mes
            $citasPorMes[$mes] = array();
        }
        
        // Agregar la cita al array correspondiente al mes
        $citasPorMes[$mes][] = $cita;
    }
  }
    
    // Mostrar las citas agrupadas por mes
    foreach ($citasPorMes as $mes => $citas) :
    ?>

    <h2><?= $mes ?></h2>
    <div class="hover-effect"> <!-- -->
    <ul class="lista-citas">
        <?php foreach ($citas as $cita) : ?>
            <li>
                <div class="cita-info">
                    <span>Nombre: </span><?= $cita['NombrePaciente'] ?>
                </div>
                <div class="cita-info">
                    <span>Apellido: </span><?= $cita['ApellidoPaciente'] ?>
                </div>
                <div class="cita-info">
                    <span>Fecha Próximo Control: </span><?= date('d/m/Y', strtotime($cita['ProxiControlFecha'])) ?>
                </div>
                <div class="cita-info">
                    <span>Hora Próximo Control: </span><?= date('H:i A', strtotime($cita['ProxiControlHora'])) ?>
                </div>
                <div class="cita-info">
                    <span>Tipo de Cita: </span><?= $cita['TipoDeCita'] ?>
                </div>

                <div class="cita-info">
                    <span>Número de Teléfono: </span><?= formatPhoneNumber($cita['NumeroDeTelefono'])?>
                </div>

                <div class="cita-info">
                    <span>Email: </span><?= $cita['EmailPaciente']?>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
    </div>
    <?php endforeach; ?>
</div>

<?php
function formatPhoneNumber($phoneNumber) {
    // Eliminar todos los caracteres que no sean dígitos
    $phoneNumber = preg_replace('/\D/', '', $phoneNumber);
    
    // Aplicar el formato deseado
    return substr($phoneNumber, 0, 3) . '-' . substr($phoneNumber, 3, 3) . '-' . substr($phoneNumber, 6);
}
?>

        <li class="form-line" data-type="control_widget" id="id_40"><label class="form-label form-label-top form-label-auto" id="label_40" for="input_40" aria-hidden="false"> Firma del examinador </label>
          <div id="cid_40" class="form-input-wide" data-layout="full"><div data-widget-name="Firma Suave" style="width:100%;text-align:Left;overflow-x:auto" data-component="widget-field"><iframe data-client-id="529467003477f3512000001f" title="Firma Suave" frameBorder="0" scrolling="no" allowtransparency="true" allow="geolocation; microphone; camera; autoplay; encrypted-media; fullscreen" data-type="iframe" class="custom-field-frame" id="customFieldFrame_40" src="" style="max-width:310px;border:none;width:100%;height:114px" data-width="310" data-height="114"></iframe>
              <div class="widget-inputs-wrapper"><input type="hidden" id="input_40" class="form-hidden form-widget" name="q40_firmaDel" value="" /><input type="hidden" id="widget_settings_40" class="form-hidden form-widget-settings" value="%5B%5D" data-version="2" /></div>
              
              <!-- <script type="text/javascript">
                setTimeout(function()
                {
                  var _cFieldFrame = document.getElementById("customFieldFrame_40");
                  if (_cFieldFrame)
                  {
                    _cFieldFrame.onload = function()
                    {
                      if (typeof widgetFrameLoaded !== 'undefined')
                      {
                        widgetFrameLoaded(40,
                        {
                          "formID": 240483924998877
                        })
                      }
                    };
                    _cFieldFrame.src = "//data-widgets.jotform.io/signature-pad/?qid=40&isOpenedInPortal=undefined&align=Left&ref=" +
                      encodeURIComponent(window.location.protocol + "//" + window.location.host) + '&ndt=1' + '' + '' +
                      '&injectCSS=' + encodeURIComponent(window.location.search.indexOf("ndt=1") > -1);
                    _cFieldFrame.addClassName("custom-field-frame-rendered");
                  }
                }, 0);
              </script>
            </div>
          </div>
        </li> -->

        <!-- BOTON ENVIAR -->
        <!-- <li class="form-line" data-type="control_button" id="id_2">
          <div id="cid_2" class="form-input-wide" data-layout="full">
            <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
              <button id="input_2" type="submit" class="form-submit-button form-submit-button-metal_brushed submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">Enviar</button>
            </div>
          </div>
        </li> -->

        <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide" data-layout="full">
        <div data-align="auto" class="form-buttons-wrapper form-buttons-auto jsTest-button-wrapperField" style="text-align: right;">
        <button id="input_2" type="submit"  name="btnGuardar" data-component="button" data-content="" style="background: linear-gradient(to right, #5c6bc0, #512da8); /* Azul */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
        border-radius: 8px;"> <!-- Ajuste de la margen a la derecha -->
        Guardar Reporte
      </button>
      </a>
    </div>
  </div>
</li>

        <!-- class="form-submit-button form-submit-button-metal_brushed submit-button jf-form-buttons jsTest-submitField" -->

        <li style="display:none">Should be Empty: <input type="text" name="website" value="" type="hidden" /></li>
      </ul>
  </div>
  <script>
    JotForm.showJotFormPowered = "new_footer";
  </script>
  <script>
    JotForm.poweredByText = "Powered by Jotform";
  </script><input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="240483924998877" />
  <script type="text/javascript">
    var all_spc = document.querySelectorAll("form[id='240483924998877'] .si" + "mple" + "_spc");
    for (var i = 0; i < all_spc.length; i++)
    {
      all_spc[i].value = "240483924998877-240483924998877";
    }
  </script>
</form>
</body>
</html>
<!-- <script type="text/javascript">JotForm.ownerView=true;</script><script type="text/javascript">JotForm.isNewSACL=true;</script> -->