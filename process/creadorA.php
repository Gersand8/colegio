<?php
    include("../conexion.php");


    $idm=$_GET['idm'];


    $registros = "UPDATE tb_miembro SET Estadom='Aceptado 1' WHERE idm=$idm";
    $res=$conexion->query($registros);
    echo "<script> window.location='../frmcreador.php'</script>";



?>