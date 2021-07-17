<?php
    include("../conexion.php");
    $ida=$_GET['idarticulo'];
    $registros = "UPDATE tb_articulo SET Estado='Aceptado' WHERE idarticulo=$ida";
    $res=$conexion->query($registros);
    echo "<script> window.location='../frmarticulo.php'</script>";
?>