<?php
    include("../conexion.php");


    $idm=$_GET['idm'];


    $registros = "UPDATE tb_miembro SET Estadom='Espera' WHERE idm=$idm";
    $res=$conexion->query($registros);
    echo "<script> window.location='../frmadmin.php'</script>";



?>