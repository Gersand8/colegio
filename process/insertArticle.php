<?php
    include("conexion1.php");
    $titulo=$_POST['titulo'];
    $contenido=$_POST['contenido'];
    $categoria=$_POST['categoria'];
    $autores=$_POST['autores'];
    $idm=$_SESSION['id'];
    $imagen = $_FILES['imagen']['name'];

    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];

        $insert="INSERT INTO tb_articulo (contenido,titulo,categoria,fecha,autor,autoresA,Estado) VALUES ('$contenido','$titulo',1,NOW(),'$idm','$autores','Espara');";
        $resultado = mysqli_query($conn,$insert);
        $con = mysqli_connect('localhost','root','','siteaquitecto') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM tb_articulo WHERE titulo='$titulo'");
        $row  = mysqli_fetch_array($result);
        $idarticulo=$row['idarticulo'];

       if(!(( strpos($tipo,'jpeg') || strpos($tipo,'webp') || strpos($tipo,'png') || strpos($tipo,'jpg') ))){
            
            $_SESSION['mensaje'] = 'Ocurrio un error en el tipo de Archivo';
            $_SESSION['tipo'] = 'danger';
            echo "<script> window.location='../frmListArticles.php'</script>";
        }else{
            $query = "INSERT INTO tb_imgarticulo (imgA,fidA) VALUES ('$imagen',$idarticulo);";
            $resultado = mysqli_query($conn,$query);
            if($resultado){
                $_SESSION['mensaje'] = '';
                move_uploaded_file($temp,'../imgArticulo/'.$imagen);  
                echo "<script> window.location='../frmListArticles.php'</script>"; 
               
            }else{
                $_SESSION['mensaje'] = 'Ocurrio un error en el servidor';
                $_SESSION['tipo'] = 'danger';
                echo "<script> window.location='../frmListArticles.php'</script>";
               
            }
        }
    }
?>