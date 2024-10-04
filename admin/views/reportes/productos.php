<?php
$content = "
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #fff5f5; 
        color: #9d0000; 
    }
    h1 {
        color: #ff1a75; 
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 20px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        border: 2px solid #ff1a75; 
    }
    th, td {
        border: 1px solid #ff1a75; 
        padding: 10px;
        text-align: left;
    }
    th {
        background-color: #ffd6e6; 
        font-weight: bold;
        color: #9d0000; 
    }
    td {
        background-color: #ffe6ee; 
        color: #9d0000; 
    }
</style>
<div style='text-align: center'>
    <h1>Listado de productos</h1>
    <table align='center'>
        <thead>
            <tr>
                <th width='50'>ID</th>
                <th width='150'>Marca</th>
                <th width='150'>Producto</th>
                <th width='150'>Precio</th>
            </tr>
        </thead>
        <tbody>";
foreach ($datos as $dato) {
    $content .= "
            <tr>
                <td>{$dato['id_producto']}</td>
                <td>{$dato['marca']}</td>
                <td>{$dato['producto']}</td>
                <td>$ {$dato['precio']}</td>
            </tr>";
}
$content .= "
        </tbody>
    </table>
</div>
";
?>
