<?php 
include('views/header.php'); 
include(__DIR__.'/sistema.class.php');
$app=new Sistema;
$sql= "SELECT ma.nombre_marca as marcas, sum(dp.cantidad*pr.precio) as monto 
        FROM marcas ma 
        JOIN productos pr ON ma.marca_id=pr.marca_id
        JOIN detalle_pedidos dp ON dp.producto_id=pr.id
        GROUP BY ma.nombre_marca 
        ORDER BY ma.nombre_marca ASC;";
$datos=$app->query($sql);
$app->checkRol('Administrador',true);
?>
    <script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
  
  </script>
  <div id="barchart_values" style="width: 900px; height: 300px;"></div>
<?php include __DIR__.'/views/footer.php'; ?>
