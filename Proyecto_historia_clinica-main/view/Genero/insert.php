<div class="mt-5">
    <h3 class="display-4">Registrar Genero</h3>
</div>

<div class="mt-5">

    <form action="<?php echo getUrl("General","General","postInsert",array("tabla"=>"Genero")) ?>" method="post">

        <div class="row">

            <div class="col-md-4">
                <label class="form-label">Nombre Genero</label>
                <input type="text" class="form-control" name="nombre" placeholder="Ingrese el genero">
            </div>
            <div class="col-md-4 mt-4">
                <input type="submit" value="Enviar" class="btn btn-success mt-2">
            </div>


        </div>
            
    </form>

</div>