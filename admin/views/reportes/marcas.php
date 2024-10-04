<?php
$content = "
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #fff8e1; /* Naranja claro */
        color: #e65100; /* Naranja oscuro */
    }
    .container {
        margin: 20px auto;
        max-width: 800px;
    }
    h1 {
        color: #ff6f00; 
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 20px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        border: 2px solid #ff6f00; 
    }
    th, td {
        border: 1px solid #ff6f00; 
        padding: 10px;
        text-align: left;
    }
    th {
        background-color: #ffe0b2; 
        font-weight: bold;
        color: #e65100; 
    }
    td {
        background-color: #ffcc80; 
        color: #e65100;
    }
</style>
<div class='container'>
    <h1>Listado de marcas</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Marca</th>
                <th>Total de productos</th>
            </tr>
        </thead>
        <tbody>";
foreach ($datos as $dato) {
    $content .= "
            <tr>
                <td>{$dato['id_marca']}</td>
                <td>{$dato['marca']}</td>
                <td>" . ($dato['productos'] == 1 ? $dato['productos'] . ' producto' : $dato['productos'] . ' productos') . "</td>
            </tr>";
}
$content .= "
        </tbody>
    </table>
</div>
";
?>
