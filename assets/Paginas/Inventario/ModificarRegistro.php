<?php
require 'Conexion_Listado_Pacientes.php';

// Verifica si se recibió el parámetro IdPaciente en la URL
if(isset($_GET['IdProductoServicio'])) {
    $IdProductoServicio = $conn->real_escape_string($_GET['IdProductoServicio']);
    
    // Consulta para obtener los datos del paciente específico
    $sql = "SELECT * FROM inventario WHERE IdProductoServicio = '$IdProductoServicio'";
    $resultado = $conn->query($sql);

    if($resultado->num_rows == 1) {
        $registro = $resultado->fetch_assoc(); // Obtiene los datos del paciente
       
        $id = $registro['IdProductoServicio'];
        $productoOServicio = $registro['ProductoOServicio'];
        $Descripcion = $registro['Descripcion'];
        $Categoria = $registro['Categoria'];
        $Marca = $registro['Marca'];
        $Modelo = $registro['Modelo'];
        $CantidadEnStock = $registro['CantidadEnStock'];
        $PrecioUnitario = $registro['PrecioUnitario'];
        $Proveedor = $registro['Proveedor'];
        $FechaDeCompra = $registro['FechaDeCompra'];
        $FechaDeVencimiento = $registro['FechaDeVencimiento'];
        $UbicacionEnInventario = $registro['UbicacionEnInventario'];
        $EstadoDelProducto = $registro['EstadoDelProducto'];
        $NotasAdicionales = $registro['NotasAdicionales'];
        $CostoTotal = $registro['CostoTotal'];
        $PrecioParaCliente = $registro['PrecioParaCliente'];
        $descuento = $registro['Descuento'];
    } else {
        echo "No se encontró ningún registro con el Id proporcionado.";
        exit(); // Sale del script si no se encuentra ningún paciente
    }
} else {
    echo "No se proporcionó el parámetro IdPaciente.";
    exit(); // Sale del script si no se proporciona el parámetro IdPaciente
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="style_InventarioEditar.css">
            
    <!-- Iconscout CSS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <title>Modificar Paciente</title>
</head>
<body>

    <div class="container"> 
         <header>Modificar Registro</header>

         <form action="ConsultaparaModificar.php" method="POST">

            <div class="form first">
                <div class="details personal">
                    <span class="title">Datos Del Paciente</span>
                    
                    <div class="fields">

                     <input type="hidden" name="IdProductoServicio" value="<?php echo $id; ?>">

                        <div class="input-field">

                            <label for="">Selecciona el Tipo</label>
                            <select name="tipo">
                                <option selected="selected">¿Producto o Servicio?</option>
                                <option value="<?php echo $productoOServicio; ?>" hidden selected><?php echo $productoOServicio; ?></option>
                                <option>Producto</option>
                                <option>Servicio</option>
                                <option>Otro</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="">Descripcion</label>
                            <input type="text" placeholder="Nombre del Producto/Servicio" name="nombre" value="<?php echo $Descripcion; ?>" required>
                        </div>

                        <div class="input-field">
                            <label for="">Categoria</label>
                            <input type="text" placeholder="Lentes/Accesorios/Servicios..." name="categoria" value="<?php echo $Categoria; ?>" required>
                        </div>

                        <div class="input-field">
                            <label for="">Marca</label>
                            <input type="text" placeholder="Marca del producto" name="marca" value="<?php echo $Marca; ?>" required>
                        </div>

                        <div class="input-field">
                            <label for="">Modelo</label>
                            <input type="text" placeholder="Modelo del Producto" name="modelo" value="<?php echo $Modelo; ?>" required>
                        </div>

                        <div class="input-field">
                            <label for="">Cantidad En Stock</label>
                            <input type="text" placeholder="Cantidad de Productos" name="cantidad" value="<?php echo $CantidadEnStock; ?>" required>
                        </div>

                        <div class="input-field">
                            <label for="">Precio Unitario</label>
                            <input type="text" placeholder="Precio de Producto/Servicio" name="preciounitario" value="<?php echo $PrecioUnitario; ?>" required>
                        </div>

                        <div class="input-field">
                            <label for="">Proveedor</label>
                            <input type="text" placeholder="Quien Provee es..." name="proveedor" value="<?php echo $Proveedor; ?>" required>
                        </div>

                        <div class="input-field">
                            <label for="">Fecha de Compra</label>
                            <input type="date" placeholder="Fecha en la que se compro" name="fechaDeCompra" value="<?php echo $FechaDeCompra; ?>" required>
                        </div>

                        <div class="input-field">
                            <label for="">Fecha de Vencimiento</label>
                            <input type="date" placeholder="Fecha de Vencimiento" name="fechaVencimiento" value="<?php echo $FechaDeVencimiento; ?>" required>
                        </div>

                        <div class="input-field">
                            <label for="">Ubicacion En Inventario</label>
                            <input type="text" placeholder="Donde esta el producto" name="ubicacion" value="<?php echo $UbicacionEnInventario; ?>" required>
                        </div>

                        <div class="input-field">
                            <label for="">Estado Del Producto</label>
                            <select name="estadoDeProducto">
                                <option selected="selected">Selecciona Estado Del Producto...</option>
                                <option value="<?php echo $EstadoDelProducto; ?>" hidden selected><?php echo $EstadoDelProducto; ?></option>
                                <option>Nuevo</option>
                                <option>Usado</option>
                                <option>En Reparacion</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="">Notas</label>
                            <input type="text" placeholder="Comentario adicional" name="agregauncomentario" value="<?php echo $NotasAdicionales; ?>" required>
                        </div>

                        <div class="input-field">
                            <label for="">Costo Total</label>
                            <input type="text" placeholder="Multiplica cantidad por precio unitario." name="costoTotal" value="<?php echo $CostoTotal; ?>" required>
                        </div>

                        <div class="input-field">
                            <label for="">Precio Para Pacientes</label>
                            <input type="text" placeholder="Precio dirigido a clientes. (Con descuento aplicado)" name="precioparacliente" value="<?php echo $PrecioParaCliente; ?>" required>
                        </div>

                        <div class="input-field">
                            <label for="">Descuento</label>
                            <input type="number" placeholder="Descuento en el Producto/Servicio." name="descuento" value="<?php echo $descuento; ?>" required>
                        </div>
                    </div>
                    </div>
                    <button type="submit" class="saveBtn" name="btnGuardar">
                        <span class="btnText">Guardar</span>
                        <i class="uil uil-save"></i>
                    </button>
                    </div>
            </div>
        </form>
    </div> <!-- CONTAINER -->
</body>
</html>