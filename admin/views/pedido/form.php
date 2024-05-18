<div class="container">
    <form action="pedido.php?action=<?php echo ($action == 'update') ? 'change&id_pedido=' . $datos['id_pedido'] : 'save'; ?>" method="POST" enctype="multipart/form-data">
        <h2><?php echo ($action == 'update') ? 'Editar' : 'Nuevo'; ?> Pedido</h2>
        <div class="mb-3">
            <label for="inputTotal" class="form-label">Total</label>
            <input name="total" required="required" type="text" class="form-control" id="inputTotal" placeholder="Ingresa el total" value="<?php echo (isset($datos["total"])) ? $datos["total"] : ''; ?>">
        </div>
        <div class="mb-3">
            <label for="inputFechaPedido" class="form-label">Fecha de Pedido</label>
            <input name="fecha_pedido" required="required" type="date" class="form-control" id="inputFechaPedido" value="<?php echo (isset($datos["fecha_pedido"])) ? $datos["fecha_pedido"] : ''; ?>">
        </div>
        <div class="mb-3">
            <label for="inputEstadoPedido" class="form-label">Estado del Pedido</label>
            <input name="estado_pedido" required="required" type="text" class="form-control" id="inputEstadoPedido" placeholder="Ingresa el estado del pedido" value="<?php echo (isset($datos["estado_pedido"])) ? $datos["estado_pedido"] : ''; ?>">
        </div>
        <input type="submit" class="btn btn-success" value="Guardar">
    </form>
</div>
