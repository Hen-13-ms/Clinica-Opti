document.addEventListener('DOMContentLoaded', () => {
    const proveedorForm = document.getElementById('proveedorForm');
    const facturaForm = document.getElementById('facturaForm');
    const pagoForm = document.getElementById('pagoForm');
    
    const proveedoresList = document.getElementById('proveedoresList');
    const facturasList = document.getElementById('facturasList');
    const pagosList = document.getElementById('pagosList');
    const alertasList = document.getElementById('alertasList');
    
    let proveedores = [];
    let facturas = [];
    let pagos = [];
    let alertas = [];

    proveedorForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const proveedor = {
            nombre: proveedorForm.nombreProveedor.value,
            direccion: proveedorForm.direccionProveedor.value,
            contacto: proveedorForm.contactoProveedor.value,
            condicionesPago: proveedorForm.condicionesPago.value
        };
        proveedores.push(proveedor);
        actualizarProveedoresList();
        proveedorForm.reset();
    });

    facturaForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const factura = {
            numero: facturaForm.numeroFactura.value,
            fecha: facturaForm.fechaFactura.value,
            monto: facturaForm.montoFactura.value,
            impuestos: facturaForm.impuestosFactura.value
        };
        facturas.push(factura);
        actualizarFacturasList();
        facturaForm.reset();
    });

    pagoForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const pago = {
            monto: pagoForm.montoPago.value,
            fecha: pagoForm.fechaPago.value
        };
        pagos.push(pago);
        actualizarPagosList();
        pagoForm.reset();
    });

    function actualizarProveedoresList() {
        proveedoresList.innerHTML = '';
        proveedores.forEach((proveedor, index) => {
            const div = document.createElement('div');
            div.textContent = `${proveedor.nombre} - ${proveedor.direccion} - ${proveedor.contacto} - ${proveedor.condicionesPago}`;
            proveedoresList.appendChild(div);
        });
    }

    function actualizarFacturasList() {
        facturasList.innerHTML = '';
        facturas.forEach((factura, index) => {
            const div = document.createElement('div');
            div.textContent = `Factura N°${factura.numero} - Fecha: ${factura.fecha} - Monto: ${factura.monto} - Impuestos: ${factura.impuestos}`;
            facturasList.appendChild(div);
        });
    }

    function actualizarPagosList() {
        pagosList.innerHTML = '';
        pagos.forEach((pago, index) => {
            const div = document.createElement('div');
            div.textContent = `Pago de ${pago.monto} programado para el ${pago.fecha}`;
            pagosList.appendChild(div);
        });
    }

    function actualizarAlertasList() {
        alertasList.innerHTML = '';
        // Aquí podrías agregar la lógica para generar alertas basadas en las facturas y pagos.
    }
});