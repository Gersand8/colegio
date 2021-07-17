<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COLEGIO DE ARQUITECTOS</title>
    <link rel="shortcut icon" href="img/favicon.jpeg" type="image/x-icon">
</head>
<?php include("include/headerUser.php")  ?>
<style type="text/css">

    body{
        background-color: #8a97a0;
    }
    .form-style-5{
        max-width: 500px;
        padding: 10px 20px;
        background: #CE9B26;
        margin: 60px auto;
        padding: 10px;
        background: #CE9B26;
        border-radius: 8px;
        font-family: Georgia, "Times New Roman", Times, serif;
    }
    .form-style-5 fieldset{
        border: none;
    }
    .form-style-5 legend {
        font-size: 1.4em;
        margin-bottom: 10px;
    }
    .form-style-5 label {
        display: block;
        margin-bottom: 8px;
    }
    .form-style-5 input[type="text"],
    .form-style-5 input[type="date"],
    .form-style-5 input[type="datetime"],
    .form-style-5 input[type="email"],
    .form-style-5 input[type="number"],
    .form-style-5 input[type="search"],
    .form-style-5 input[type="time"],
    .form-style-5 input[type="url"],
    .form-style-5 textarea,
    .form-style-5 select {
        font-family: Georgia, "Times New Roman", Times, serif;
        background: rgba(255,255,255,.1);
        border: none;
        border-radius: 4px;
        font-size: 15px;
        margin: 0;
        outline: 0;
        padding: 10px;
        width: 100%;
        box-sizing: border-box; 
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box; 
        background-color: #e8eeef;
        color:#8a97a0;
        -webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
        box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
        margin-bottom: 30px;
    }
    .form-style-5 input[type="text"]:focus,
    .form-style-5 input[type="date"]:focus,
    .form-style-5 input[type="datetime"]:focus,
    .form-style-5 input[type="email"]:focus,
    .form-style-5 input[type="number"]:focus,
    .form-style-5 input[type="search"]:focus,
    .form-style-5 input[type="time"]:focus,
    .form-style-5 input[type="url"]:focus,
    .form-style-5 input[type="file"]:focus,
    .form-style-5 textarea:focus,
    .form-style-5 select:focus{
        background: #d2d9dd;
    }
    .form-style-5 select{
        -webkit-appearance: menulist-button;
        height:35px;
    }
    .form-style-5 .number {
        background: #1abc9c;
        color: #fff;
        height: 30px;
        width: 30px;
        display: inline-block;
        font-size: 0.8em;
        margin-right: 4px;
        line-height: 30px;
        text-align: center;
        text-shadow: 0 1px 0 rgba(255,255,255,0.2);
        border-radius: 15px 15px 15px 0px;
    }

    .form-style-5 input[type="submit"],
    .form-style-5 input[type="button"]
    {
        position: relative;
        display: block;
        padding: 19px 39px 18px 39px;
        color: #FFF;
        margin: 0 auto;
        background: #1abc9c;
        font-size: 18px;
        text-align: center;
        font-style: normal;
        width: 100%;
        border: 1px solid #16a085;
        border-width: 1px 1px 3px;
        margin-bottom: 10px;
    }
    .form-style-5 input[type="submit"]:hover,
    .form-style-5 input[type="button"]:hover
    {
        background: #109177;
    }
</style>
    <?php

        include("conexion.php");
        $idm=$_SESSION["id"];
        $registros = "SELECT * FROM tb_miembro WHERE idm=$idm";
        $res=$conexion->query($registros);
       
    ?>
<body>
    
    <div class=" container"></div>    
    <div class=" contanier-red mt-1 p-11"> <h3 class="text-justify text-center text-dark"> MONITOR DE SOLICITUD DE MIEMBRO</h3></div>
    <div class="row">
        <?php while($row=$res->fetch_assoc()) { ?>
        <div class="form-style-5">
            <form class="color-primary" action="process/insertDoc.php" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <legend><span class="number">1</span> Informacion de Miembro</legend>
                    Carta Motivos:  <input type="file" name="field1" placeholder="">
                    Telefono:<input type="email" name="" placeholder="<?php echo $row['telefono'];?>" disabled=disabled>
                    Nivel Estudio:<input type="text" name="" placeholder="<?php echo $row['nivelestudio'];?>" disabled=disabled>
                    Estado:<input type="text" name="" placeholder="<?php echo $row['Estadom'];?>" disabled=disabled>
                    <div class=" row">
                        Carta Motivo: <a  class=" btn btn-light h-15 enlace" target="_blank" href="cartaM/<?php echo $row['carta_motivos'];?>">Ver</a>
                        <div></div>
                        <input type="text" name="" placeholder="<?php echo $row['carta_motivos'];?>" disabled=disabled>

                    </div>  
                </fieldset>
                <input type="submit" value="Guardar" />
            </form>
        </div>
        <div class="form-style-5">
            <form>
                <fieldset>
                    <legend><span class="number">2</span> Informacion General</legend>
                    Nombre:  <input type="text" name="field1" placeholder="<?php echo $row['nombre'];?>" require disabled>
                    Apellido Paterno:<input type="text" name="field2" placeholder="<?php echo $row['apellidop'];?>" require disabled>
                    Apellido Materno:<input type="text" name="field3" placeholder="<?php echo $row['apellidom'];?>" require disabled>
                    Correo:<input type="email" name="field4" placeholder="<?php echo $row['correo'];?>"require disabled> 
                </fieldset>
                
            </form>
        </div>
        <?php }?>
    </div>
    
</body>
</html>