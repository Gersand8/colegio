<?php
    include("conexion1.php");

    $archivo = $_FILES['field1']['name'];
   
    $idm= $_SESSION['id'];

    if(isset($archivo) && $archivo != ""){
        $tipo = $_FILES['field1']['type'];
        $temp  = $_FILES['field1']['tmp_name'];
       
       

       if( !(( strpos($tipo,'pdf') || strpos($tipo,'doc')  ))){
            echo "<script> window.location='../frmUser.php'</script>";
            $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
            $_SESSION['tipo'] = 'danger';
       }else{
                $insert="UPDATE tb_miembro SET carta_motivos='$archivo' WHERE idm=$idm";
                $resultado = mysqli_query($conn,$insert);
         if($resultado){
              move_uploaded_file($temp,'../cartaM/'.$archivo);   
              echo "<script> window.location='../frmUser.php'</script>";
         }else{
            $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
            $_SESSION['tipo'] = 'danger';
         }
       }
    }
?>