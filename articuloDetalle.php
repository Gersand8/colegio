<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $titulo="COLEGIO DE ARQUITECTOS";?>
	
	<!-- Font Awesome icons (free version)-->
	<script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
	<link href="img/icon.jpeg" rel="icon">
    <link href="img/iconoM.jpg" rel="apple-touch-icon">
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
</head>
<body>
<?php include("include/headerPublic.php")?>
    <div id="carousel1" class="carousel slide carousel-fade mt-5" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/num4.jpg" alt="" width="1400" height="490">
            </div>
            <div class="carousel-item">
                <img src="img/num2.jpeg" alt="" width="1400" height="490">
            </div>
            <div class="carousel-item">
                <img src="img/num3.jpg" alt=""  width="1400" height="490">
            </div>
        </div>
        <!--Controles NEXT y PREV-->
        <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--Controles de indicadores-->
        <ol class="carousel-indicators">
            <li data-target="#carousel1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel1" data-slide-to="1"></li>
            <li data-target="#carousel1" data-slide-to="2"></li>
        </ol>
    </div>
    <?php
        include("conexion.php");
        $id=$_GET['id'];
        $registros = "SELECT * FROM tb_articulo INNER JOIN tb_categoria ON tb_articulo.idarticulo=tb_categoria.idtipo WHERE idarticulo=$id";
        $res=$conexion->query($registros);
    ?>
    <?php while($row=$res->fetch_assoc()){?>
    <div class="container">
        <div class="row">
            
            <div class="col-md-12 bg-light-dark">
                <h1 class="text-center"><?php echo $row['titulo']?></h1>
                <p><?php echo $row['contenido']?></p>
            </div>
        </div>
    </div>
    <div class="container bg-gradient-light text-dark">
        <div class="row">
            <div class="col-sm-4"><span>|Proyecto: <?php echo $row['titulo']?></span> </div>
            <div class="col-sm-4">|Fecha de Registro: <?php echo $row['fecha']?></div>
            <div class="col-sm-4">|Autores: <?php echo $row['autoresA']?></div>
            <div class="col-sm-4">|Categoria: <?php echo $row['descripcion']?></div>
        </div>
    </div>
    <?php } ?> 
</body>
</html>