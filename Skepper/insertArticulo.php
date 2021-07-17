<?php
    include("../process/conexion1.php");
    session_start();
    $titulo=$_POST['titulo'];
    $contenido=$_POST['contenido'];
    $categoria=$_POST['categoria'];

    $imagen = $_FILES['imagen']['name'];
    $idm=$_SESSION["id"];
    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];
        $insert="INSERT INTO tb_articulo (contenido,titulo,categoria,fecha,autor,Estado) VALUES ('$contenido', '$titulo',$categoria,NOW(),$idm,'Espera');";
        $resultado = mysqli_query($conn,$insert);

        $con = mysqli_connect('localhost','root','','siteaquitecto') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM tb_articulo WHERE titulo='$titulo'");
        $row  = mysqli_fetch_array($result);


        $idarticulo=$row['idarticulo'];

        if( !(( strpos($tipo,'jpeg') || strpos($tipo,'webp') || strpos($tipo,'png') || strpos($tipo,'jpg') ))){
            echo "<script> window.location='../frmRegiSterA.php'</script>";
           
        }else{
         $query = "INSERT INTO tb_imgarticulo (imgA,fidA) VALUES ('$imagen',$idarticulo);";
         $resultado = mysqli_query($conn,$query);
         if($resultado){
              move_uploaded_file($temp,'../imgArticulo/'.$imagen);   
              echo "<script> window.location='../frmRegiSterA.php'</script>";
         }else{
            echo "<script> window.location='../frmRegiSterA.php'</script>";
         }
       }
    }

?>
