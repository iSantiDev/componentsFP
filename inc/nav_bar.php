<nav class="nav">
    <ul class="nav-List">
        <li class="logo">
            <a href="" data-document="../frontend/stocksoft.php"></a>
        </li>
        <input type="checkbox" id="check" />
        <span class="menu">
            <li>
                <a href="javascript:void(0)" data-document="../frontend/inventario_list.php" class="menu_nav">INVENTARIO</a>
                <ul class="menu_list_items">
                    <li class="menu_item">
                        <a href="javascript:void(0)" data-document="../frontend/producto_registro.php">Nuevo Producto</a>
                    </li>
                    <li class="menu_item">
                        <a href="javascript:void(0)" data-document="../frontend/producto_actualizar">Editar Producto</a>
                    </li>
                    <li class="menu_item">
                        <a href="javascript:void(0)" data-document="../frontend/stock_adicion.php">Añadir Stock</a>
                    </li>
                    <li class="menu_item">
                        <a href="javascript:void(0)" data-document="../frontend/stock_resta.php">Disminuir Stock</a>
                    </li>
                    <li class="menu_item">
                        <a href="javascript:void(0)" data-document="../frontend/producto_eliminar.php">Eliminar Producto</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0)" data-document="../frontend/proveedor_list.php" class="menu_nav">PROVEEDORES</a>
                <ul class="menu_list_items">
                    <li class="menu_item">
                        <a href="javascript:void(0)" data-document="../frontend/proveedor_crear.php">Nuevo Proveedor</a>
                    </li>
                    <li class="menu_item">
                        <a href="javascript:void(0)" data-document="../frontend/proveedor_actualizar.php">Editar Proveedor</a>
                    </li>
                    <li class="menu_item">
                        <a href="javascript:void(0)" data-document="../frontend/proveedor_eliminar.php">Eliminar Proveedor</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0)" data-document="../frontend/usuario_list.php" class="menu_nav">USUARIOS</a>
                <ul class="menu_list_items">
                    <li class="menu_item">
                        <a href="javascript:void(0)" data-document="../frontend/usuario_crear.php">Nuevo Usuario</a>
                    </li>
                    <li class="menu_item">
                        <a href="javascript:void(0)" data-document="../frontend/usuario_actualizar.php">Editar Usuario</a>
                    </li>
                    <li class="menu_item">
                        <a href="javascript:void(0)" data-document="../frontend/usuario_eliminar.php">Eliminar Usuario</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0)" data-document="../frontend/actual_usuario.php" class="menu_nav">CUENTA</a>
            </li>
            <label for="check" class="close-menu">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-x">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M18 6l-12 12" />
                    <path d="M6 6l12 12" />
                </svg>
            </label>
        </span>
        <label for="check" class="open-menu">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-menu">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M4 8l16 0" />
                <path d="M4 16l16 0" />
            </svg>
        </label>
    </ul>
</nav>