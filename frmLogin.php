<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
      <meta charset= "UTF-8">
        <meta name=" viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/estyle.css" rel=estylesheet>
        <link href="img/icon.jpeg" rel="icon">
        <link href="img/iconoM.jpg" rel="apple-touch-icon">
    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="css/indexlogin.css">
    
 
</head>
   
<body>
    <?php include("include/headerPublic.php")  ?>
    <div class="container mt-1"></div>
    <div class="modal-dialog text-center" >
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="img/user.jfif"/>
                    <h3>INICIAR SESION</h3>
                </div>
                <form class="col-12" name="login" action="valid.php" method="POST">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" name="User" placeholder="Nombre de usuario" required/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control"  name="Pass" placeholder="Contraseña" required/>
                    </div>
                    <div class=" p-2"><button type="submit" class="btn btn-primary mt-4 p-2" ><i class="fas fa-sign-in-alt"></i>  Ingresar </button></div>
                </form>
            </div>
        </div>
    </div>
   
</body>
</html>