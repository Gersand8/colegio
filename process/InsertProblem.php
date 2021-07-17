<?php
    include("conexion1.php");
    $latitud=$_POST['latitud'];
    $altitud=$_POST['altitud'];
    $descipcion=$_POST['descripcion'];
    $imagen = $_FILES['imagen']['name'];
    $nombre= $_SESSION['name'];
    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];

       if( !(( strpos($tipo,'jpeg') || strpos($tipo,'webp') || strpos($tipo,'png') || strpos($tipo,'jpg') ))){
            
            $_SESSION['mensaje'] = 'Error en tipo de archivo o Servidor';
            $_SESSION['tipo'] = 'danger';
            echo "<script> window.location='../frmReport.php'</script>";
       }else{
       
         $query = "INSERT INTO tb_problema (descripcionp,foto,fecha,nombre,latitud,longitud) VALUES ('$descipcion','$imagen',NOW(),'$nombre','$latitud','$altitud');";
         $resultado = mysqli_query($conn,$query);
         if($resultado){
              move_uploaded_file($temp,'../imgReportes/'.$imagen);
              echo "<script> window.location='../frmReport.php'</script>";   
              
         }else{
            $_SESSION['mensaje'] = 'Error en tipo de archivo o Servidor';
            $_SESSION['tipo'] = 'danger';
            echo "<script> window.location='../frmReport.php'</script>";
            
         }
       }
    }
?>
