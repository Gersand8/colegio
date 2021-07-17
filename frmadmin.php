<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/crudadmin.css">
    <link rel="stylesheet" href="css/MODAL.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>COLEGIO DE ARQUITECTOS</title>
    <link href="img/icon.jpeg" rel="icon">
    <link href="img/iconoM.jpg" rel="apple-touch-icon">
</head>  
<body>
<?php include("include/headeradmin.php")?>
<?php
include("conexion.php");
$registros = "SELECT * FROM tb_miembro WHERE Estadom='Aceptado 1'";
$res=$conexion->query($registros);
?>
    <div class="container mt-1">
    </div>
    <div class="table-title mt-2">
        <div class="row">
            <div class="col-sm-6">
                <h2>Administracion de <b>Miembros</b></h2>
            </div>
            
        </div>
    </div>
    


    <table class="table">

        <!--Table head-->
        <thead class="thead-dark">
            <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Estudios</th>
            <th>Experiencia</th>
            <th>Carta_Motivo</th>
            <th>Invitado por</th>
            <th>Accion</th>
            </tr>
        </thead>
        <!--Table head-->

        <!--Table body-->
        <tbody>
            <?php
                while($row=$res->fetch_assoc()){
            ?>
            <tr>
                <th scope="row"><?php echo $row['idm']?></th>
                <td><textarea name="" id="" cols="29" rows="1" disabled ><?php echo $row['nombre']?> <?php echo $row['apellidop']?> <?php  echo $row['apellidom']?> </textarea></td>
                <td><?php echo $row['telefono']?></td>
                <td><?php echo $row['nivelestudio']?></td>
                <td><?php echo $row['experiencia']?></td>
                <td><?php echo $row['carta_motivos']?></td>
                <td><textarea name="" id="" cols="15" rows="1" disabled>  <?php echo $row['miembro_invita']?></textarea></td>
                <td >
                    <a href="process/adminA.php?idm=<?php echo $row['idm'];?>" class="accept" ><i class="material-icons" data-toggle="tooltip" title="Accept">&#xE876;</i></a>
                    <a href="process/adminE.php?idm=<?php echo $row['idm'];?>" class="delete" ><i class="material-icons" data-toggle="tooltip" title="Reject">&#xE5CD;</i></a>
                </td>
            </tr>
            <?php
                }
            ?> 
           
        </tbody>
    </table>

    
    
   <!-- Modal HTML -->
	<div id="myModal" class="modal fade">
		<div class="modal-dialog modal-confirm">
			<div class="modal-content">
				<div class="modal-header">
					<div class="icon-box">
						<i class="material-icons">&#xE876;</i>
					</div>				
					<h4 class="modal-title w-100">Awesome!</h4>	
				</div>
				<div class="modal-body">
					<p class="text-center">Your booking has been confirmed. Check your email for detials.</p>
				</div>
				<div class="modal-footer">
					<button class="btn btn-success btn-block" data-dismiss="modal">OK</button>
				</div>
			</div>
		</div>
	</div>  
    
    

    <!-- Modal HTML -->
    <div id="myModal2" class="modal fade">
        <div class="modal-dialog modal-confirms">
            <div class="modal-content">
                <div class="modal-header flex-column">
                    <div class="icon-box">
                        <i class="material-icons">&#xE5CD;</i>
                    </div>						
                    <h4 class="modal-title w-100 ">Are you sure?</h4>	
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Do you really want to delete these records? This process cannot be undone.</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>     

        
    
</body>
</html>
