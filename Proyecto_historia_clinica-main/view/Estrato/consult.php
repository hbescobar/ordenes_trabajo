<div class="mt-5">
    <h3 class="display-4">Consultar Estratos</h3>
</div>
<div class="mt-5">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Estratos</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php //asi como lo estoy colocando para que le lleguen los dos valores y hay que ver si funciona.
            foreach($genericos as $estr){
                ?>
                <tr>
                <td><?php echo $estr['id']; ?></td>
                <td><?php echo $estr['nombre']; ?></td>
                <td><a href="<?=geturl("General","General", 'getUpdate', array('id'=>$estr['id'],"tabla"=>"Estrato"))?>"><button class='btn btn-info'>Editar</button></a></td>
                <td><a href="<?=geturl("General","General", 'getDelete', array('id'=>$estr['id'],"tabla"=>"Estrato"))?>"><button class='btn btn-danger'>Eliminar</button></a></td>
    
                <td></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>