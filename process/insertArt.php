<?php
    include("conexion1.php");
    $titulo=$_POST['titulo'];
    $contenido=$_POST['contenido'];
    $categoria=$_POST['categoria'];

    $imagen = $_FILES['imagen']['name'];
    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];
        $insert="INSERT INTO tb_articulo (contenido,titulo,categoria,fecha,autor,Estado) VALUES ('$contenido', '$titulo',$categoria,NOW(),1,'Aceptado');";
        $resultado = mysqli_query($conn,$insert);
        $idarticulo=$resultado['idarticulo'];

       if( !(( strpos($tipo,'jpeg') || strpos($tipo,'webp') || strpos($tipo,'png') || strpos($tipo,'jpg') ))){
            echo "<script> window.location='../frmAr.php'</script>";
            $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
            $_SESSION['tipo'] = 'danger';
       }else{
         $query = "INSERT INTO tb_imgarticulo (imgA,fidA) VALUES ('$imagen',$idarticulo);";
         $resultado = mysqli_query($conn,$query);
         if($resultado){
              move_uploaded_file($temp,'../imgArticulo/'.$imagen);   
              echo "<script> window.location='../frmAr.php'</script>";
         }else{
            $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
            $_SESSION['tipo'] = 'danger';
            echo "<script> window.location='../frmAr.php'</script>";
         }
       }
    }
?>
