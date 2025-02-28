<div class="mt-5">
    <h3 class="display-4">Consultar Genero</h3>
</div>

<div class="mt-5">

    <table class="table">

    <thead>
        <tr>
            <th>Id</th>
            <th>Genero</th>
            <th colspan="2">Acciones</th>
        </tr>
    </thead>
    <tbody>

    <?php //cual problema?
// DONDe aparece el array, hay que incluir el otro parametro , ejemplo, cambialo en la bd p
     foreach ($genericos as $gen) {
        echo "<tr>";
            echo "<td>".$gen['id']."</td>";
            echo "<td>".$gen['nombre']."</td>";
            echo "<td> <a href='".getUrl ("General","General", "getUpdate", array("id"=>$gen['id'],"tabla"=>"Genero"))."'><button class='btn btn-primary'> Editar </button></a></td>";
            echo "<td><a href='".getUrl ("General","General", "getDelete", array("id"=>$gen['id'],"tabla"=>"Genero"))."'><button class='btn btn-danger'>Eliminar </button></a> </td>";
            echo "</tr>";
        } 



// esto es un comentario//
 


    
   
    
    ?>

    </tbody>

    </table>


</div>