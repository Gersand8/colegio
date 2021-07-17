<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">     
    <link href="img/icon.jpeg" rel="icon">
    <link href="img/iconoM.jpg" rel="apple-touch-icon">
    <title> COLEGIO DE ARQUITECTOS</title>
</head>
<body>
    <?php include("include/headerUser.php");?>
    <?php
        include("conexion.php");
        $autor=$_SESSION['id'];
        $registros = "SELECT * FROM tb_articulo WHERE Estado='Aceptado' AND autor='$autor'";
        $res=$conexion->query($registros);
    ?>
    <div class="container mt-1"></div>
    <div class="container">
        <div class="col">

        <div class="row flex-lg-nowrap">
            <div class="col mb-3">
                <div class="e-panel card">
                    <div class="card-body">
                        <div class="card-title">
                            <h6 class="mr-2 text-dark"><span>Articulos</span><small class="px-1">en Espera a Aceptar</small></h6>
                        </div>
                        <div class="e-table">
                        <div class="table-responsive table-lg mt-3">
                        <table class="table table-bordered">
                   <thead>
                       <tr>
                           <th class="align-top">
                               <label class="custom-control-label" for="all-items">#</label>
                           </th>
                           <th>Imagen</th>
                           <th class="max-width">Titulo</th>
                           <th class="sortable">Contenido</th>
                           <th>Categoria</th>
                           <th>Actiones</th>
                       </tr>
                   </thead>
                   <tbody>
                       <?php
                           while($row=$res->fetch_assoc()){
                       ?>
                       <tr>
                           <td class="align-middle">
                               <label class="custom-control-label" for="item-1">1</label>
                           </td>
                           <td class="align-middle text-center">
                               <div class="bg-light d-inline-flex justify-content-center align-items-center align-top" style="width: 35px; height: 35px; border-radius: 3px;"><i class="fa fa-fw fa-photo" style="opacity: 0.8;"></i></div>
                           </td>
                           <td class="text-nowrap align-middle"><?php echo $row['titulo']?></td>
                           <td class="text-nowrap align-middle"><span><?php echo $row['contenido']?></span></td>
                           <td class="text-center align-middle"><i class=""><?php echo $row['categoria']?></i></td>
                           <td class="text-center align-middle">
                               <div class="btn-group align-top">
                                   <button class="btn btn-sm btn-outline-secondary badge" type="button"><i class="fa fa-trash"></i></button>
                               </div>
                           </td>
                       </tr>
                       <?php
                           }
                       ?> 
                   </tbody>
               </table>
           </div>
           
           </div>
     </div>
   </div>
 </div>
 
    
</body>
</html>