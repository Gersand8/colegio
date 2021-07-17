<?php
    include("conexion1.php");
    $latitud=$_POST['latitud'];
    $altitud=$_POST['altitud'];
    $descipcion=$_POST['descripcion'];
    $titulo=$_POST['titulo'];
    $imagen = $_FILES['imagen']['name'];
    $nombre= $_SESSION['id'];
    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];

        if( !(( strpos($tipo,'jpeg') || strpos($tipo,'webp') || strpos($tipo,'png') || strpos($tipo,'jpg') ))){
            
            $_SESSION['mensaje'] = 'Error en tipo de archivo o Servidor';
            $_SESSION['tipo'] = 'danger';
            echo "<script> window.location='../frmRecorridos.php'</script>";
        }else{
       
            $query = "INSERT INTO tb_recorrido (titulo,descripcion,fecha_creacion,latitud,longitud,img,f_autor) VALUES ('$titulo','$descipcion',NOW(),'$latitud','$altitud','$imagen','$nombre');";
            $resultado = mysqli_query($conn,$query);
            if($resultado){
                move_uploaded_file($temp,'../imgTravels/'.$imagen);
                echo "<script> window.location='../frmRecorridos.php'</script>";   
                
            }else{
                $_SESSION['mensaje'] = 'Error en tipo de archivo o Servidor';
                $_SESSION['tipo'] = 'danger';
                echo "<script> window.location='../frmRecorridos.php'</script>";
                
            }
        }
    }
?>
