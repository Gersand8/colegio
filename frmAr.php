<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COLEGIO DE ARQUITECTOS</title>
    
    <link rel="stylesheet" href="css/Formulario.css">
</head>
    
<body>

    <?php include("include/headeradmin.php")?>
    <?php
        include("conexion.php");
        $registros = "SELECT idtipo,descripcion FROM tb_categoria";
        $res=$conexion->query($registros);
    ?>
    <div class="container"></div>
    <div class="containers">
        <div class="form__top">
            <h2>Subrir Articulo</h2> 
        </div>
        <form class="form__reg" action="process/insertArt.php" method="POST" enctype="multipart/form-data">
            Titulo:<input class="input" name="titulo" id="nombre" type="text" required>
            Contenido:<textarea name="contenido" id="apaterno" type="text" required></textarea>
            
            Imagen:<input class="input" name="imagen" type="file" required>
            Categoria:
            <select name="categoria" >  
                <?php
                    while($row=$res->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['idtipo'];?>"><?php echo $row['descripcion'];?></option>
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
</body>
</html>