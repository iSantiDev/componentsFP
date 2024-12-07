const getValueSelected = document.getElementById("select_proveedor_id");

document.addEventListener("DOMContentLoaded", async () => {
    let productos = [];

    try {
        const responseProductos = await fetch(
            "../php/solicitud_datos/producto_info.php"
        );
        productos = await responseProductos.json();

        getValueSelected.addEventListener("change", () => {
            const currentProveedorId = getValueSelected.value || 0;

            const selectProductos = document.getElementById(
                "select_producto_pedido"
            );

            const currentProductos = productos.filter(
                (producto) => producto.proveedor_id == currentProveedorId
            );

            if (currentProveedorId !== 0) {
                selectProductos.innerHTML = "";
                const optionDefault = document.createElement("option");
                optionDefault.value = "";
                optionDefault.attributes = "selected disabled";
                optionDefault.textContent = "Seleccione un Producto";
                selectProductos.appendChild(optionDefault);
                for (let { producto_id, nombre } of currentProductos) {
                    const option = document.createElement("option");
                    option.value = producto_id;
                    option.textContent = nombre;

                    selectProductos.appendChild(option);
                }
            }
        });
    } catch (e) {
        console.error("No se encontraron proveedor: ", e);
    }
});
