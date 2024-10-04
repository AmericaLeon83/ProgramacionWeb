<?php
$content = "
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #fffde7; /* Amarillo claro */
        color: #f57f17; /* Amarillo oscuro */
    }
    .container {
        margin: 20px auto;
        max-width: 500px;
        padding: 20px;
        border: 2px solid #fbc02d; /* Amarillo brillante */
        border-radius: 10px;
        background-color: #fff9c4; /* Amarillo suave */
    }
    h2, h3 {
        color: #f57f17; 
    }
    h2 {
        font-size: 24px;
        margin-bottom: 10px;
        text-align: center;
    }
    h3 {
        font-size: 20px;
        margin-bottom: 5px;
        text-align: center;
    }
    p {
        font-size: 14px;
        color: #f57f17; /* Amarillo oscuro */
        text-align: center;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        table-layout: fixed; /* Ensure table fits in the container */
    }
    th, td {
        border: 1px solid #fbc02d; /* Amarillo brillante */
        padding: 10px;
        text-align: left;
        word-wrap: break-word; /* Ensure long words break to fit in the cell */
    }
    th {
        background-color: #fff59d; /* Amarillo pálido */
        font-weight: bold;
        color: #f57f17; /* Amarillo oscuro */
    }
    td {
        background-color: #fffde7; /* Amarillo claro */
        color: #f57f17; /* Amarillo oscuro */
    }
    .total-section {
        margin-top: 20px;
        text-align: right;
    }
    .total-section h2, .total-section h3 {
        display: inline-block;
        margin: 0;
    }
</style>
<div class='container'>
    <p>{$datos[0]['fecha']}</p>
    <table>
        <thead>
            <tr>
                <th>No. Producto</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>";
foreach ($detalles as $detalle) {
    $content .= "
            <tr>
                <td>{$detalle['id_producto']}</td>
                <td>{$detalle['producto']}</td>
                <td>{$detalle['cantidad']}</td>
                <td>{$detalle['monto']}</td>
            </tr>";
}
$content .= "
        </tbody>
    </table>
    <div class='total-section'>
        <h2>Total: </h2>
        <h3>{$datos[0]['monto']}</h3>
    </div>
</div>
";
?>
