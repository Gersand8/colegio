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
        $registros = "SELECT * FROM tb_articulo WHERE Estado='Espera' OR autor='$autor'";
        $res=$conexion->query($registros);
    ?>
    <div class="container mt-4"></div>
    <div class="container">
   

        <div class="col">

        <div class="row flex-lg-nowrap">
        <div class="col mb-3">
            <div class="e-panel card">
            <div class="card-body">
                <div class="card-title">
                <h6 class="mr-2 text-dark"><span>Articulos</span><small class="px-1">Aceptados</small></h6>
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
      <div class="col-12 col-lg-3 mb-3">
            <div class="card">
            <div class="card-body">
                <div class="text-center px-xl-3">
                <button class="btn btn-success btn-block" type="button" data-toggle="modal" data-target="#user-form-modal">Agregar Articulo</button>
                </div>
                <hr class="my-3">
                
            </div>
            </div>
        </div>
    </div>

    <!-- User Form Modal -->
    <div class="modal fade" role="dialog" tabindex="-1" id="user-form-modal">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Crear Articulo</h5>
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="py-1">
              <form class="form" novalidate="" action="process/insertArticle.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                  <div class="col">
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>Titulo del Articulo</label>
                          <input class="form-control" type="text" name="titulo" placeholder="" value="">
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label>Categoria del Articulo</label>
                          <input class="form-control" type="text" name="categoria" placeholder="" value="">
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label>Imagen 1</label>
                          <input class="form-control" type="file" name="categoria" placeholder="" value="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>Imagen 2:</label>
                          <input class="form-control" type="file" name="titulo" placeholder="" value="">
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label>Imagen 3:</label>
                          <input class="form-control" type="file" name="categoria" placeholder="" value="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Imagen Principal</label>
                                <input class="form-control" type="file" placeholder="" name="imagen" >
                            </div>
                            <div class="form-group">
                                <label>Involucrados</label>
                                <input class="form-control" type="text" placeholder="" name="autores">
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <div class="form-group">
                                <label>Contenido del Articulo</label>
                                <textarea class="form-control" rows="5" placeholder="Descripcion" name="contenido"></textarea>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col d-flex justify-content-end">
                    <button class="btn btn-primary" type="submit">Agregar</button>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
    
    
</body>
</html>