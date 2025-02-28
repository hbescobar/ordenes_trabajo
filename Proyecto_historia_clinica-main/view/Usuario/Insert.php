<div class="mt-5">
    <h3 class="display-4">Registrar Usuario</h3>
</div>
<div class="mt-5">
    <form action="<?php echo getUrl("Usuario","Usuario","postInsert"); ?>" method="post">

    <div class="row">
        <div class="col-md-4">
            <label for="">Documento</label>
            <input type="number" name="usu_docum" class="form-control" placeholder="Documento">
            
            <label for="">Contraseña</label>
            <input type="password" name="usu_clave" class="form-control" placeholder="Contraseña">
            
            
        </div>

        

        