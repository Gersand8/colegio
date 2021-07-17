<?php
        session_start();
        $message="";
        $usuario=$_POST['User'];
        $password=$_POST['Pass'];

        if(count($_POST)>0) {
            $con = mysqli_connect('localhost','root','','siteaquitecto') or die('Unable To connect');
            $valid="SELECT usuario FROM tb_miembro WHERE usuario='$usuario' AND clave='$password' AND tiporol=1 AND Estadom='Aceptado';";
            $result = mysqli_query($con,$valid);
            $row  = mysqli_fetch_array($result);
            if(is_array($row)) {
                $_SESSION["idm"] = $row['idm'];
                $_SESSION["nombre"] = $row['nombre'];
            } else {
            $message = "Invalid Username or Password!";
            }
        }
        if(isset($_SESSION["idm"])) {
            echo "<script> window.location='frmadmin.php'</script>";
        }
    ?>


echo "<script>window.location='frmLogin.php'</script>";