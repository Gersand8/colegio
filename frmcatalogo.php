<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio de Arquitectos</title>
    <link href="img/icon.jpeg" rel="icon">
    <link href="img/iconoM.jpg" rel="apple-touch-icon">
</head>
<body>

    <?php include("include/headerPublic.php")  ?>
    <?php
		include("conexion.php");
		$registros = "SELECT * FROM tb_articulo WHERE Estado='Aceptado'";
		$res=$conexion->query($registros);
	?>
    <div class="container mt-4">
        <div class="row mt-5">
            <?php while($row=$res->fetch_assoc()){?>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="imgArticulo/<?php echo $row['imgAr']?>" class="img-fluid rounded-start mw-100 mh-100"  alt="..." style="">
                        <hr class="my-2">
                        <a href="articuloDetalle.php?id=<?php echo $row['idarticulo'];?>" class="btn btn-primary align-items-center" >Saber Más</a>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['titulo']?></h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated <?php echo $row['fecha']?></small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container"></div>
            <?php } ?>   
        </div>
    </div>
    <?php include("include/footer.php")  ?>
</body>
</html>