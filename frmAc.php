<?php
    $mysqli = new mysqli("localhost", "root", "", "siteaquitecto");
    
    if($mysqli === false){
        die("ERROR: DE CONEXION. " . $mysqli->connect_error);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Miembros</title>
    <link rel="stylesheet" href="css/crudadmin.css">
    <link rel="stylesheet" href="css/crudadmin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<?php
    include("conexion.php");
    $registros = "SELECT *FROM tb_articulo  WHERE Estado='Espera'";
    $res=$conexion->query($registros);
?>
<body>
    <?php include("include/headerCreador.php")?>
    <div class="container mt-1">
    </div>
    <div class="table-title mt-2">
        <div class="row">
            <div class="col-sm-6">
                <h2>Administracion de <b>Artículos</b></h2>
            </div>
            
        </div>
    </div>
    <div class="container">
        <table  class="table">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Titulo</th>
                    <th>Fecha</th>
                    <th>Descripcion</th>
                    <th>Autor</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row=$res->fetch_assoc()){ ?>
                <tr>
                    <td scope='row'><?php echo $row['idarticulo']?></td>
                    <td><?php echo $row['titulo']?></td>
                    <td><?php echo $row['fecha']?></td>
                    <td><?php echo $row['categoria']?></td>
                    <td>te<?php echo $row['autor']?></td>
                    <td>
                        <a class='btn btn-success' href='Skepper/Accept.php?idarticulo=<?php echo $row['idarticulo'];?>' > Publicar </a>
                        <a class='btn btn-warning'href='Skepper/Delete.php?idarticulo=<?php echo $row['idarticulo'];?>'> Rechazar </a>
                    </td>
                </tr> 
                <?php}?>    
            </tbody>
        </table>
    </div>
    

</body>
</html>




