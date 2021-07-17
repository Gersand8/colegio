<?php
include("conexion.php");
$nombre=$_POST['nombre'];
$apaterno=$_POST['apaterno'];
$amaterno=$_POST['amaterno'];
$telefono=$_POST['telefono'];
$usuario=$_POST['usuario'];
$correo=$_POST['correo'];
$password=$_POST['contra'];
$edad=$_POST['edad'];
$experiencia=$_POST['experiencia'];
$especialidad=$_POST['especialidad'];
$estudio=$_POST['estudio'];
$miembro=$_POST['miembro'];
$direccion=$_POST['direccion'];

$valid="SELECT usuario FROM tb_miembro WHERE usuario='$usuario' OR correo='$correo';";
$resultado=$conexion->query($valid);
$existe=mysqli_num_rows($resultado);

if ($existe>0)
{
    echo "<script>alert('El usuario o gmail ya existen :('); window.location='frmRegistro.php'</script>";
    
}
else
{

    $sql= "INSERT INTO tb_miembro (nombre, apellidop,apellidom,correo,tiporol,edad,telefono,fecham,nivelestudio,experiencia,direccion,carta_motivos,Estadom,miembro_invita,clave,usuario)
    VALUES ('$nombre','$apaterno','$amaterno','$correo',3,$edad,'$telefono',NOW(),'$estudio',$experiencia,'$direccion','Pendiente..','Espera','$miembro','$password','$usuario')";

    $resultado=$conexion->query($sql);
    echo "<script> window.location='frmLogin.php'</script>";
}
?>

 
 


 



