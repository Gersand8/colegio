<!DOCTYPE html>
<html lang="en">
<head>
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
    <?php include("include/headerPublic.php");?>
	<?php
		include("conexion.php");
		$registros = "SELECT * FROM tb_articulo WHERE Estado='Aceptado' LIMIT 6";
		$res=$conexion->query($registros);
	?>
    <div id="carousel1" class="carousel slide carousel-fade mt-5" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/num4.jpg" alt="" width="1700" height="600">
            </div>
            <div class="carousel-item">
                <img src="img/num2.jpeg" alt="" width="1700" height="600">
            </div>
            <div class="carousel-item">
                <img src="img/num3.jpg" alt=""  width="1700" height="600">
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

    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Lista de Artículos</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
            <div class="row">
				<?php while($row=$res->fetch_assoc()){?>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link"  href="articuloDetalle.php?id=<?php echo $row['idarticulo'];?>">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="imgArticulo/<?php echo $row['imgAr']?>" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading text-muted"><?php echo $row['titulo']?></div>
                            <div class="portfolio-caption-subheading text-muted"><?php echo $row['fecha']?></div>
                        </div>
                    </div>
                </div>
				<?php } ?>    
            </div>
        </div>
    </section>
	<!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
		<!-- /Portfolio item 1 modal popup-->
        
	<!-- Footer-->
	<footer class="footer bg-light-dark ">
        <div class="container secondary">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start"> Copyright &copy; CAIH Website 2021</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/ten_arquitectos?lang=en"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/TENArquitectos/"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/company/ten-arquitectos"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>