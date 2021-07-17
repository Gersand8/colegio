<!--<table class="table">
        <thead class="thead-dark">
            <tr>
            <th >Nombre</th>
            <th >Apellido</th>
            <th >Apellido</th>
            <th>Telefono</th>
            <th >Nivel Estudio</th>
            <th >Experiencia Laboral</th>
            <th >Invitado por</th>
            <th >Acciones</th>

            </tr>
        </thead>
        <tbody>
        <?php
                while($row=$res->fetch_assoc()){
            ?>
            <tr>
                <th > <?php echo $row['nombre']?> </th>
                <td><?php echo $row['apellidop']?></td>
                <td><?php echo $row['apellidom']?></td>
                <td><?php echo $row['telefono']?></td>
                <td><?php echo $row['nivelestudio']?></td>
                <td><?php echo $row['experiencia']?></td>
                <td><?php echo $row['miembro_invita']?></td>
                <td>
                    <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                </td>
            </tr>
            <?php
                }
            ?> 
        </tbody>
    </table>-->