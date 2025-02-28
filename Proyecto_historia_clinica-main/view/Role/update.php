<div class="mt-5">
    <h3 class="display-4">Editar Roles</h3>
</div>

<div class="mt-5">
    <?php
        foreach($genericos as $rol){
    ?>

    <form action="<?php echo getUrl("General","General","postUpdate",array("tabla"=>"Role"));?>"method="post">
    <label for="">Nombre del Rol</label>
    <br>
    <input type="hidden" name="id" value="<?php echo $rol['id'];?>">
    <input type="text" name="nombre" class="form-contol" placeholder="Nombre del Rol" value="<?php echo $rol['nombre'];?>">

</div>

<div class="col-md-4 mt-4">
    <input type="submit" value="Enviar" class="btn btn-success">
</div>

    </div>
</form>
    <?php
        }
    ?>
</div>