<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/crudadmin.css">
    <link href="img/icon.jpeg" rel="icon">
    <link href="img/iconoM.jpg" rel="apple-touch-icon">
    <title>COLEGIO DE ARQUITECTOS</title>
</head>
    <?php include("include/headerCreador.php")?>
<body>
    <?php
        include("conexion.php");
        $registros = "SELECT idm,nombre,apellidop,apellidom,telefono,nivelestudio,experiencia,miembro_invita FROM tb_miembro WHERE Estadom='Espera'";
        $res=$conexion->query($registros);
    ?>
   
    <div class="container mt-1">
    </div>
    <div class="table-title mt-1">
        <div class="row">
            <div class="col-sm-6">
                <h2>Administracion de <b>Miembros</b></h2>
            </div>
            
        </div>
    </div>
    <table class="table mt-3">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Apellido</th>
            <th scope="col">Telefono</th>
            <th scope="col">Nivel Estudio</th>
            <th scope="col">Experiencia Laboral</th>
            <th scope="col">Invitado por</th>
            <th scope="col">Acciones</th>

            </tr>
        </thead>
        <tbody>
            <?php
                while($row=$res->fetch_assoc()){
            ?>
            <tr>
            <th scope="row"> <?php echo $row['nombre']?> </th>
            <td><?php echo $row['apellidop']?></td>
            <td><?php echo $row['apellidom']?></td>
            <td><?php echo $row['telefono']?></td>
            <td><?php echo $row['nivelestudio']?></td>
            <td><?php echo $row['experiencia']?></td>
            <td><?php echo $row['miembro_invita']?></td>
            <td >
                    <a href="process/creadorA.php?idm=<?php echo $row['idm'];?>" class="accept" ><i class="material-icons" data-toggle="tooltip" title="Accept">&#xE876;</i></a>
                    <a href="process/creadorE.php?idm=<?php echo $row['idm'];?>" class="delete" ><i class="material-icons" data-toggle="tooltip" title="Reject">&#xE5CD;</i></a>
                </td>
            </tr>
            <?php
                }
            ?> 
        </tbody>
        </table>

        
    
</body>
</html>