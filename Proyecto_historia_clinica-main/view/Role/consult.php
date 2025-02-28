<div class="mt-5">
    <h3 class="display-4">Consultar Roles</h3>
</div>
<div class="mt-5">
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Roles</th>
                <th>Editar</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($genericos as $rol) {
                    echo "<tr>";
                    echo "<td>".$rol['id']."</td>";
                    echo "<td>".$rol['nombre']."</td>";
                    //boton de editar
                    echo "<td><a href='".getUrl("General","General","getUpdate",array("id"=>$rol['id'],"tabla"=>"Role"))."'><button class='btn btn-primary'>Editar</button> </a> </td>";
					//boton de eliminar
                    echo "<td> <a href='".getUrl("General","General","getDelete",array("id"=>$rol['id'],"tabla"=>"Role"))."'><button class='btn btn-danger'>Eliminar</button> </a> </td>";

                    echo"<td> </td>";
                echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</div>