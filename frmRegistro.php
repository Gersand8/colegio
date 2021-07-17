<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>REGISTRO</title>        

        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">    
        <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
        
        <script type="text/javascript" src="js/all.js"></script>
        <link rel="stylesheet" href="css/Formulario.css">
        <link rel="stylesheet" type="text/css" href="css/estilos.css" media="All">
        <link rel="stylesheet" type="text/css" href="css/fotter.css" media="All">
        <script language="Javascript" src="validaciones.js" type="text/javascript"></script>
    </head>
    <?php
        include("conexion.php");
        $registros = "SELECT nombre FROM tb_miembro WHERE tiporol=1 OR tiporol=2 AND Estadom='Aceptado'";
        $res=$conexion->query($registros);
    ?>
    <body  background="img/bg.jpg"  >
        <div id="container">
            <div id="navBar">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                   <a class="navbar-brand mt-4 w-25" href="#">COLEGIO DE ARQUITECTOS</a>
                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                   </button>

                   <div class="collapse navbar-collapse" id="navbarColor02">
                        <ul class="navbar-nav mr-auto mt-4">
                           
                           
                            <li class="nav-item ">
                                <a class="nav-link" href="index.php">INICIO</a>
                            </li> 
                            <li class="nav-item ">
                                <a class="nav-link" href="frmRegistro.php">CONTACTO</a>
                            </li>  
                            <li class="nav-item ">
                                <a class="nav-link" href="frmRegistro.php">REPORTE DE PROBLEMAS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="frmRegistro.php">RECORRIDOS CULTURALES</a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link" href="frmLogin.php">INICIO SESION</a>
                            </li>
                                   
                        </ul>
                       
                    </div>
                </nav>
            </div>
            <br>
 
    <div class="containers">
        <div class="form__top">
            <h2>Crear una cuenta</h2> 
        </div>
        <form class="form__reg" action="registro.php" method="POST" onsubmit="return validacion(this);">
            
            Nombre:<input class="input" name="nombre" id="nombre" type="text" required>
            Apellido paterno:<input class="input" name="apaterno" id="apaterno" type="text"required>
        
			Apellido amaterno:<input class="input" name="amaterno" id="amaterno" type="text"required>
            Edad:<input class="input" name="edad" id="edad" type="text"required>
			Telefono:<input class="input" name="telefono" id="telefono" type="text" required>
            Direccion:<input class="input" name="direccion" id="direccion" type="text" required>
            Tiempo de Experiencia:<input class="input" name="experiencia" id="experiencia" type="text" required>
            Especialidad:<input class="input" name="especialidad" id="especialidad" type="text" required>
            Nivel de estudio:<input class="input" name="estudio" id="estudio" type="text" required>
			Correo electronico:<input class="input" name="correo" id="correo" type="email"required>
			Nombre de usuario:<input class="input" name="usuario" id="usuario" type="text"required>
			Contraseña:<input class="input" name="contra" id="contra" type="password" required>
			Miembro Invita:
            <select name="miembro" >  
                <?php
                    while($row=$res->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['nombre'];?>"><?php echo $row['nombre'];?></option>
                <?php
                }
                ?>      
            </select>
            <div class="btn__form">
            	<input class="btn__submit" type="submit" value="REGISTRAR">
            	<input class="btn__reset" type="reset" value="LIMPIAR">	
            </div>
		</form>
	</div>
    <?php include("include/footer.php")  ?>
    </body>

</html>
