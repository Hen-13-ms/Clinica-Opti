<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Facturación - Clínica Óptica</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Ubuntu', sans-serif;
            scroll-behavior: auto;
        }

        .right-column {
        flex: 1;
        padding: 20px;
        display: flex;
        flex-direction: column;
        align-items: flex-end; /* Alinea el contenido al extremo derecho */
        
        }

        body {
            background-color: #c9d6ff;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
            position: relative;
            overflow: hidden;
            width: 99%;
            max-width: 100%;
            min-height: 733px;
            display: flex;
            flex-direction: row;
        }

        .left-column,
        .right-column {
            flex: 1;
            padding: 20px;
        }

        h2{
            margin-top: 0px;
        }

        #h22{
            margin-top: 35px;
        }

        form {
            max-width: 485px;
            margin: 0 auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            font-size: 14px;
            border: 0px solid #5c6bc0;
            text-align: center;
            padding: 8px;
        }

        th {
            background-color: #5c6bc0;
            color: white;
            border-radius: 110px;
        }
        td {
            border-radius: 5px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        td:hover,
        tr:hover td {
        background-color: #c5cae9;
        }

        label {
            font-size: 14px;
            margin-bottom: 5px;
            display: block;
        }

        input[type="text"],
        input[type="date"],
        input[type="number"],
        select {
            background-color: #eee;
            border: none;
            margin-bottom: 10px;
            padding: 10px 20px;
            font-size: 17px;
            border-radius: 8px;
            width: 500px;
            outline: none;
        }

        .right-column{
            margin-right: -20px;
        }

        textarea {
        margin-top: 35px;
        width: 500px;
        max-width: 500px;
        height: 180px;
        padding: 10px;
        margin-bottom: 10px;
        font-size: 15px;
        border-radius: 8px;
        border: 1px solid #ccc;
        outline: none;
        margin-left: 25px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.35);
        }

        button {
        background-color: #512da8;
        border-radius: 8px;
        width: 250px;
        color: #fff;
        font-size: 14px;
        padding: 10px 45px;
        border: 1px solid transparent;
        border-radius: 8px;
        font-weight: 600;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        cursor: pointer;
        transition: background-color 0.3s;
        position: absolute;
        bottom: 20px; /* Ajusta la distancia desde la parte inferior */
        left: 85%; /* Coloca el botón en el centro horizontalmente */
        transform: translateX(-50%); /* Centra horizontalmente el botón */
        }

        button:hover{
            background-color: #311b92;
        }

        .RecetaAnteojos {
        margin-top: 250px; /* Ajusta este valor según sea necesario */
        margin-left: -540px;
        }

/* ESTILOS DE LA MODAL */
/* Estilos para el modal */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  
  background-color: rgba(0, 0, 0, 0.4);
}

/* Contenido del modal */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 50%;
  margin-top: 50px;
  border-radius: 15px;
}

p{
    margin-bottom: 50px;
    text-align: center;
    font-size: 20px;
    font-weight: bold;
    color:     #512da8;
}

.label{
    margin-bottom: 10px;
    font-size: 15px;
    font-weight: bold;
}

#btn{
        background-color: #512da8;
        border-radius: 8px;
        width: 250px;
        color: #fff;
        font-size: 14px;
        padding: 10px 45px;
        border: 1px solid transparent;
        border-radius: 8px;
        font-weight: 600;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        cursor: pointer;
        transition: background-color 0.3s;
        position: absolute;
        bottom: 60%;
        left: 65%; /* Coloca el botón en el centro horizontalmente */
        transform: translateX(-50%);  /* Centra horizontalmente el botón */
}

/* Estilos para el botón de cerrar */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
        
</style>
</head>
<body>

<?php
require 'Conexion_Listado_CxC.php';

// Verifica si se recibió el parámetro IdPaciente en la URL
if(isset($_GET['IdCuentaXPagar'])) {
    $IdCuentaXPagar = $conn->real_escape_string($_GET['IdCuentaXPagar']);
    
    // Consulta para obtener los datos del paciente específico
    $sql = "SELECT * FROM cuentaxpagar WHERE IdCuentaXPagar = '$IdCuentaXPagar'";
    $resultado = $conn->query($sql);

    if($resultado->num_rows == 1) {
        $IdCuentaXPagar = $resultado->fetch_assoc(); // Obtiene los datos de la factura
        $NumeroFactura = $IdCuentaXPagar['NDeFactura'];
        $MontoFactura = $IdCuentaXPagar['Monto'];
        $Impuestos = $IdCuentaXPagar['Impuestos'];
        $id = $IdCuentaXPagar['IdCuentaXPagar'];
        $nombre = $IdCuentaXPagar['Proveedor'];
        $Fecha = $IdCuentaXPagar['Fecha'];
        $FechaHastaPagar = $IdCuentaXPagar['FechaHastaPagar'];
        $RestanteAPagar= $IdCuentaXPagar['RestanteAPagar'];
        $TotalMostrar = isset($_GET['TotalMostrar']) ? $_GET['TotalMostrar'] : $cuenta['TotalAPagar'];

    } else {
        echo "No se encontró ningún paciente con el IdPaciente proporcionado.";
        exit(); // Sale del script si no se encuentra ningún paciente
    }
} else {
    echo "No se proporcionó el parámetro IdPaciente.";
    exit(); // Sale del script si no se proporciona el parámetro IdPaciente
}
?>

    <div class="container">
        <div class="left-column">

        <div class="right-column"></div>      
          
            <form id="formularioFactura" action="GenerarFactura.php" method="post" style="margin-left: 200px;">
                
                <input type="hidden" name="IdCuentaXPagar" value="<?php echo $id; ?>">

                <input type="hidden" name="monto" value="<?php echo $MontoFactura; ?>">
                <input type="hidden" name="impuestos" value="<?php echo $Impuestos; ?>">
                <input type="hidden" name="fechaHastaPagar" id="fechaHastaPagar" style="font-size: 20px;" required readonly value=" <?php echo $FechaHastaPagar; ?>">


                <label for="nombre" style="font-weight: bold;">Proveedor:</label>
                <input type="text" id="nombre" name="nombre" style="font-size: 20px;" required readonly value="<?php echo $nombre;?>">

                <label for="fecha" style="font-weight: bold;">Fecha:</label>
                <input type="text" name="fecha" id="fecha" style="font-size: 20px;" required readonly value=" <?php echo $Fecha; ?>">

                <!-- Colocar monto a devolver -->
                <label for="dni" style="font-weight: bold;">Numero de Factura: <span style="color: red; font-size: 20px;"></span></label>
                <input type="text" name="Nfactura" style="font-size: 20px;" required readonly value=" <?php echo $NumeroFactura; ?>">
                
                <label style="font-weight: bold;">Pago Pendiente de:</label>
                <input type="number" id="TotalAPagar" name="TotalAPagar" style="font-size: 20px;" required readonly value="<?php echo $TotalMostrar;?>">

                <label for="metodoPago" style="font-weight: bold;">Método de Pago: <span style="color: red; font-size: 20px;">*</span></label>

                <select id="metodoPago" name="metodoPago" style="font-size: 20px;" required>
                    <option value="" disabled selected>Selecciona el método de Pago...</option>
                    <option value="Tarjeta">Tarjeta</option>
                    <option value="Efectivo">Efectivo</option>
                    <option value="Depósito">Depósito</option>
                    <option value="Efectivo-Tarjeta">Efectivo-Tajeta</option>                    
                    <option value="Efectivo-Depósito">Efectivo-Depósito</option>
                    <option value="Efectivo-Tajarjeta-Depósito">Efectivo-Tajarjeta-Depósito</option>
                    <option value="Nota de Crédito">Nota de Crédito</option>
                    <option value="Cheque">Cheque</option>
                </select>

                <label style="font-weight: bold;">Pago Relizado: <span style="color: red; font-size: 20px;">*</span></label>
                <input type="text" id="PagoRealizado" name="PagoRealizado" style="font-size: 20px;" required>
                
                  <script>
                      document.getElementById('PagoRealizado').addEventListener('input', function() {
                      const input = this;
                      let value = input.value;

                      // Solo modificar si el valor no está vacío
                      if (value) {
                      // Asegúrate de que el valor no empiece ya con un signo "-"
                      if (!value.startsWith('-')) {
                      // Quitar cualquier signo "-" existente para evitar duplicados
                      value = value.replace(/^-/, '');
                      input.value = '-' + value;
                    }
                  }
                });
                </script>

                <label style="font-weight: bold;">Monto Faltante:</label>
                <input type="number" id="PagoADevolver" name="PagoADevolver" style="font-size: 20px;" required readonly>
    <script>
    function calcularFechaExpiración() {
        var fechaCreaciónInput = document.getElementById("fechaConsulta").value;
        var fechaCreación = convertirTextoAFecha(fechaCreaciónInput);
        var fechaExpiración = new Date(fechaCreación.getTime() + (30 * 24 * 60 * 60 * 1000));

        var fechaExpiraciónTexto = formatDate(fechaExpiración);

        document.getElementById("fechaExpiracion").value = fechaExpiraciónTexto;
    }

    function convertirTextoAFecha(textoFecha) {
        // Dividir la cadena en partes por las barras
        var partesFecha = textoFecha.split('/');
        // Obtener los componentes de la fecha
        var día = parseInt(partesFecha[0]);
        var mes = parseInt(partesFecha[1]) - 1; // Los meses en JavaScript son 0-indexados
        var año = parseInt(partesFecha[2]);
        // Devolver la fecha como objeto Date
        return new Date(año, mes, día);
    }

    function formatDate(date) {
        var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        var fechaFormateada = date.toLocaleDateString('es-ES', options);
        // Convertir la primera letra de cada palabra a mayúscula
        return fechaFormateada.replace(/\b\w/g, function(l) {
            return l.toUpperCase();
        });
    }

    // Calcula la fecha de expiración al cargar la página
    window.onload = function() {
        calcularFechaExpiración();
    };
</script>

<script>
                    function generarFactura() {
                        // Obtener valores de los campos de entrada

                        var nombre = document.getElementById('nombre').value;
                        var cedula = document.getElementById('cedula').value;
                        var fechaConsulta = document.getElementById('fechaConsulta').value;
                        var metodoPago = document.getElementById('metodoPago').value;
                        var dni = document.getElementById('dni').value; //RNC 
                        var fechaExpiracion = document.getElementById('fechaExpiracion').value;
                        var TotalAPagar = document.getElementById('TotalAPagar').value;
                        var PagoRealizado = document.getElementById('PagoRealizado').value;
                        var PagoADevolver = document.getElementById('PagoADevolver').value;

                        // Asignar valores a campos de entrada ocultos
                        document.getElementById('edad').value = edad;

                        // document.getElementById("OjoDerechoESs").value = ojoDerechoES;
                        // Obtener otros valores de campos de entrada de la receta de anteojos...
                        // Enviar el formulario
                        document.getElementById('formularioFactura').submit();
                    }
                </script>
<script>
function enviarFilas() {
    // Obtener el formulario
    var formulario = document.getElementById('formularioFactura');

    // Recorrer la matriz de filas
    for (var i = 0; i < filas.length; i++) {
        // Crear una entrada oculta para cada fila
        var input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'fila' + i; // Asignar un nombre único a cada entrada oculta
        input.value = filas[i].innerHTML; // Guardar el contenido HTML de la fila en el valor del input
        formulario.appendChild(input); // Agregar la entrada oculta al formulario
    }

    // Enviar el formulario
    formulario.submit();
}
</script>

<!-- <script>
    function validarFormulario() {
        // Obtener todos los campos del formulario
        var inputs = document.querySelectorAll('#formularioFactura input, #formularioFactura select');

        // Iterar sobre cada campo
        for (var i = 0; i < inputs.length; i++) {
            // Verificar si el campo está vacío
            if (!inputs[i].value.trim()) {
                // Mostrar un mensaje de error (puedes personalizar este mensaje)
                alert('Por favor, complete todos los campos antes de enviar el formulario.');
                // Detener el envío del formulario
                return false;
            }
        }
        // Si todos los campos están llenos, enviar el formulario
        return true;
    }
</script> -->

<input type="hidden" id="sumaDescuentos" readonly>
<button type="submit" style="margin-left: -10px;" onclick="if(validarFormulario()) {  enviarFilas(); }">Generar Factura</button>
</form>

    <!-- Modal Efectivo-Tarjeta -->
    <div id="modalEfectivoTarjeta" class="modal">
    <!-- Contenido del modal -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <p>Introduce las cantidades: Tarjeta-Efectivo.</p>
      <p></p>
      <label class="label" for="">Introduce la cantidad en tarjeta:</label>
      <input name="input-tarjeta" type="number" id="input-tarjeta">
      <label class="label" for="">Introduce la cantidad en efectivo:</label>
      <input name="input-efectivo" type="number" id="input-efectivo">

      <button class="close"  id="btn">Ingresar</button>
    </div>
    </div>

        <!-- Modal Efectivo-Depósito -->
        <div id="modalEfectivoDeposito" class="modal">
            <!-- Contenido del modal -->
            <div class="modal-content">
              <span class="close">&times;</span>
              <p>Introduce las cantidades: Efectivo-Depósito</p>
              <p></p>
              <label class="label"for="">Introduce la cantidad en depósito:</label>
              <input name="input-deposito" type="number" id="input-deposito">

              <label  class="label" for="">Introduce la cantidad en efectivo:</label>
              <input name="input-efectivo" type="number" id="input-efectivo-2">

              <button class="close"  type="number" id="btn">Ingresar</button>
            </div>
            </div>

            <!-- Modal Efectivo-Tarjeta-Depósito -->
            <div id="modalEfectivoTarjetaDeposito" class="modal">
                <!-- Contenido del modal -->
                <div class="modal-content">
                  <span class="close">&times;</span>
                  <p>Introduce las cantidades: Efectivo-Tarjeta-Depósito</p>
                  <p></p>
                  <label class="label" for="">Introduce la cantidad en tarjeta:</label>
                  <input name="input-tarjeta" type="number" id="input-tarjeta-2">

                  <label class="label" for="">Introduce la cantidad en depósito:</label>
                  <input name="input-deposito" type="number" id="input-deposito-2">

                  <label class="label"  for="">Introduce la cantidad en efectivo:</label>
                  <input name="input-efectivo" type="number" id="input-efectivo-3">

                  <button class="close" id="btn" style="bottom: 50%;">Ingresar</button>
                </div>
                </div>
        </div>
        </div>  
        
        <script>
         // Función para asegurar que el valor comience con un signo negativo
          function enforceNegativeSign(input) {
            input.addEventListener('input', function() {
              if (input.value && !input.value.startsWith('-')) {
                input.value = '-' + input.value;
              }
            });
         }

          // Aplicar la función a todos los inputs relevantes
          enforceNegativeSign(document.getElementById('input-tarjeta'));
          enforceNegativeSign(document.getElementById('input-efectivo'));
          enforceNegativeSign(document.getElementById('input-deposito'));
          enforceNegativeSign(document.getElementById('input-efectivo-2'));
          enforceNegativeSign(document.getElementById('input-tarjeta-2'));
          enforceNegativeSign(document.getElementById('input-deposito-2'));
          enforceNegativeSign(document.getElementById('input-efectivo-3'));
        </script>

<script>
    // Función para manejar el evento de seleccionar una fila
    function agregarProducto(elemento) {
        // Obtener la fila padre del elemento seleccionar
        var fila = elemento.closest('tr');

        // Obtener el descuento de la fila seleccionada
        var descuento = parseFloat(fila.cells[5].innerText);

        // Verificar si ya hay una suma de descuentos existente
        var sumaActual = parseFloat(document.getElementById('sumaDescuentos').value);

        // Si no hay una suma existente, asignar el descuento de la fila seleccionada
        // Si hay una suma existente, sumar el descuento de la fila seleccionada
        var nuevaSuma = isNaN(sumaActual) ? descuento : sumaActual + descuento;

        // Mostrar la suma de descuentos en el input
        document.getElementById('sumaDescuentos').value = nuevaSuma.toFixed(2);
    }
</script>

        <script>
            // Matriz para almacenar las filas
            var filas = [];
        
            // Seleccionar el cuerpo de la tabla
            var tbody = document.getElementById("tablaFacturacionBody");
        
        // Crear un observador de mutación
        var observer = new MutationObserver(function(mutationsList) {
            for(var mutation of mutationsList) {
                if (mutation.type === 'childList') {
                    // No agregamos automáticamente las filas a la matriz
                    // para evitar duplicados
                }
            }
        });
        // Observar cambios en el cuerpo de la tabla
        observer.observe(tbody, { childList: true });
        // Función para agregar todas las filas a la matriz
        function agregarFilasAMatriz() {
            // Reiniciar la matriz
            filas = [];
            // Obtener todas las filas de la tabla
            var rows = tbody.getElementsByTagName('tr');
            // Iterar sobre las filas y agregarlas a la matriz
            for (var i = 0; i < rows.length; i++) {
                filas.push(rows[i]);
            }
            // Mostrar la matriz en la consola (para propósitos de demostración)
            console.log(filas);
        }
            // // Ejemplo de cómo agregar una fila manualmente (para propósitos de demostración)
            // function agregarFila() {
            //     var newRow = document.createElement('tr');
            //     newRow.innerHTML = '<td>Tipo</td><td>Descripción</td><td>Categoría</td><td>Precio</td><td>Cantidad</td><td>Total</td>';
            //     tbody.appendChild(newRow);
            // }
        </script>

  <script>
// Obtener el elemento select
var metodoPagoSelect = document.getElementById("metodoPago");

// Agregar un event listener para detectar cambios en el select
metodoPagoSelect.addEventListener("change", function() {
  // Obtener el valor seleccionado
  var selectedOption = metodoPagoSelect.value;
  
  // Obtener la modal correspondiente según la opción seleccionada
  var modal;
  var modalContent;
  
  if (selectedOption === "Efectivo-Tarjeta") {
    modal = document.getElementById("modalEfectivoTarjeta");
    modalContent = modal.querySelector('.modal-content');
  } else if (selectedOption === "Efectivo-Depósito") {
    modal = document.getElementById("modalEfectivoDeposito");
    modalContent = modal.querySelector('.modal-content');
  } else if (selectedOption === "Efectivo-Tajarjeta-Depósito") {
    modal = document.getElementById("modalEfectivoTarjetaDeposito");
    modalContent = modal.querySelector('.modal-content');
  }
  
  // Mostrar la ventana modal si se encontró una modal correspondiente
  if (modal) {
    modal.style.display = "block";
    // Aquí puedes agregar cualquier lógica adicional para manipular el contenido de la modal si es necesario
  }
});

// Obtener todos los elementos de cierre de las modales
var closeBtns = document.querySelectorAll(".close");

// Agregar un event listener para cerrar las modales cuando se haga clic en los botones de cierre
closeBtns.forEach(function(closeBtn) {
  closeBtn.addEventListener("click", function() {
    var modal = closeBtn.parentElement.parentElement;
    modal.style.display = "none";
  });
});
  </script>

<!-- CALCULAR LOS MONTOS INGRESADOS EN LA MODAL -->
<script>
// Esperar a que se cargue completamente el DOM
document.addEventListener("DOMContentLoaded", function() {
  // Obtener los elementos relevantes
  var totalAPagarInput = document.getElementById('TotalAPagar');
  var pagoRealizadoInput = document.getElementById('PagoRealizado');
  var pagoADevolverInput = document.getElementById('PagoADevolver');
  var modalInputs = document.querySelectorAll('.modal input[type="number"]');

  // Función para calcular el monto a devolver
  function calcularMontoADevolver() {
    var totalAPagar = parseFloat(totalAPagarInput.value) || 0;
    var pagoRealizado = parseFloat(pagoRealizadoInput.value) || 0;
    var montoADevolver = pagoRealizado + totalAPagar;

    // Mostrar el monto a devolver en el campo correspondiente
    pagoADevolverInput.value = montoADevolver.toFixed(2); // Redondear a 2 decimales

    // Cambiar el color del texto en base al monto a devolver
    if (montoADevolver < 0) {
      // Si el monto a devolver es negativo, poner el texto en rojo
      pagoADevolverInput.style.color = 'red';
    } else {
      // Si el monto a devolver es positivo, poner el texto en verde
      pagoADevolverInput.style.color = 'green';
    }
  }

  // Función para actualizar el pago realizado
  function actualizarPagoRealizado() {
    // Calcular el total pagado sumando los valores de todos los inputs dentro de las modales
    var totalPagado = 0;
    modalInputs.forEach(function(input) {
      totalPagado += parseFloat(input.value) || 0;
    });
    // Asignar el total pagado al input fuera de la modal
    pagoRealizadoInput.value = totalPagado.toFixed(2); // Redondear a 2 decimales
    // Calcular el monto a devolver
    calcularMontoADevolver();
  }

  // Escuchar eventos de entrada en los campos relevantes
  totalAPagarInput.addEventListener('input', calcularMontoADevolver);
  pagoRealizadoInput.addEventListener('input', calcularMontoADevolver);

  // Escuchar cambios en los campos de entrada dentro de las modales
  modalInputs.forEach(function(input) {
    input.addEventListener('input', function() {
      // Actualizar el pago realizado
      actualizarPagoRealizado();
    });
  });
});
  </script>
        </div>
    </div>
</body>
</html>