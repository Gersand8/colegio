<?php
    include("conexion.php");

    session_start();
    $usuario=$_POST['User'];
    $password=$_POST['Pass'];
    $message="";
   


    $valid="SELECT usuario FROM tb_miembro WHERE usuario='$usuario' AND clave='$password' AND tiporol=1 AND Estadom='Aceptado';";
    $resultado=$conexion->query($valid);
    $existe=mysqli_num_rows($resultado);

    $con = mysqli_connect('localhost','root','','siteaquitecto') or die('Unable To connect');
    $result = mysqli_query($con,"SELECT * FROM tb_miembro WHERE usuario='" . $_POST["User"] . "' AND clave = '". $_POST["Pass"]."'");
    $row  = mysqli_fetch_array($result);

    if ($existe>0)
    {   
        if(is_array($row)) {
            $_SESSION["id"] = $row['idm'];
            $_SESSION["name"] = $row['nombre'];
            
        
        }  
        echo "<script> window.location='frmadmin.php'</script>";
       
    }
    else
    {
        
        $va="SELECT usuario FROM tb_miembro WHERE usuario='$usuario'  AND tiporol=2 AND Estadom='Aceptado'; ";
        $res=$conexion->query($va);
        $existe=mysqli_num_rows($res);
        if ($existe>0) {
            if(is_array($row)) {
                $_SESSION["id"] = $row['idm'];
                $_SESSION["name"] = $row['nombre'];
                $_SESSION["role"] = $row['tiporol'];
            }  
            echo "<script> window.location='frmcreador.php'</script>";
           
        }else{
            $va="SELECT usuario FROM tb_miembro WHERE usuario='$usuario'AND clave='$password' AND Estadom='Aceptado 1' OR Estadom='Espera'; ";
            $res=$conexion->query($va);
            $existe=mysqli_num_rows($res);
            if ($existe>0) {
                if(is_array($row)) {
                    $_SESSION["id"] = $row['idm'];
                    $_SESSION["name"] = $row['nombre'];
                    $_SESSION["role"] = $row['tiporol'];
                }  
                echo "<script>window.location='frmUser.php'</script>";
            } else{
                echo "<script>window.location='frmLogin.php'</script>";
                $message = "Invalid Username or Password!";
            }

        }
        
        
        
    }
    echo "<script>window.location='frmLogin.php'</script>";
    
    
?>
