<?php
    session_start();
    if($_SESSION["name"]==''){
        echo "<script>window.location='frmLogin.php'</script>";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php print($titulo);?></title>        
        <link href="img/icon.jpeg" rel="icon">
        <link href="img/iconoM.jpg" rel="apple-touch-icon">
        <link rel="stylesheet" type="text/css" href="css/fotter.css"> 
        <link rel="stylesheet" type="text/css" href="css/pryEstilos.css"> 
        <?php include("include/links.php")?>
            
    </head>
    <header>
        <div id="navBar">
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark h-15 mt-2">
                <a class="navbar-brand" href="#">COLEGIO DE ARQUITECTOS</a>
                <a class="navbar-brand" href="img/lo.jpeg"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                    <li class="nav-item">
                        <a class="nav-link" href="frmRecorridos.php">Recorridos Culturales</a>
                    </li> 
                    <div class="nav-item dropdown">
                        <a href="frmcreador.php" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><i class="fa fa-users"></i> Miembros<b class="caret"></b></a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item"><i class="fa fa-address-card"></i> Solicitudes de Usuarios</a></a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i  class="fa fa-th-list"></i> Lista Mimebros Aceptados</a></a>
                        </div>
                    </div> 
 
                    <div class="nav-item dropdown">
                        <a href="frmcreador.php" data-toggle="dropdown" class="nav-link dropdown-toggle user-action">Articulos<b class="caret"></b></a>
                        <div class="dropdown-menu">
                            <a href="frmRegisterA.php" class="dropdown-item"><i class="fa fa-clipboard"></i> Registrar</a></a>
                            <div class="dropdown-divider"></div>
                            <a href="frmAc.php" class="dropdown-item"><i class="fa fa-th-list"></i> Lista Articulos</a></a>
                        </div>
                    </div>
                    </li>

                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="frmReport.php">Reporte de Problemas</a>
                    </li> 

                    
                </ul>
                    <div class="nav-item dropdown">
                        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"> <?php echo $_SESSION['name'];?> <b class="caret"></b></a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item"><i class="fa fa-user-o"></i> Rol:Colaborador</a></a>
                            <div class="dropdown-divider"></div>
                            <a href="./logout.php" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a></a>
                        </div>
                    </div>
                   
                </ul>
                <div class="optionsBar mt-3">
                    <p class="p1" align="right">  |
                    <a href="#" class="link_registro btn btn-warning"></a> </p>
                </div> 
            </nav>
        </div>  
    </header>
    <body>
</html>