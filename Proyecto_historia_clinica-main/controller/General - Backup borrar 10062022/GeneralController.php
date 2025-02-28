<?php 

	//incluir todos los modelos.
    include_once '../model/Genero/GeneroModel.php';
    include_once '../model/Roles/RolesModel.php';
	include_once '../model/Estrato/EstratoModel.php';
	

    class GeneralController{

    	public function getGeneral($NombreTabla){
			include_once '../view/'.$NombreTabla.'/insert.php';
		}
		
		public function postGeneral(){
          //  $obj=new GeneralModel();

            $nombre=$_POST['nombre']; //Valor del nombre o descripci0n del campo de la tabla
			$opcion=$_POST['opcion']; //Opcion: insert, update, delete
			$tabla=$_POST['tabla'];	 //Valor del nombre de la tabla
			$tabla_id_descripcion=$_POST['tabla_id_descripcion'];	//id_tabla, id_gen etc			
			$tabla_nombre_descripcion=$_POST['tabla_nombre_descripcion'];	//tabla_genero, tabla_estrato
			$view = "Genero";// ucfirst($tabla);  //la primera debe quedar en mayuscula
			
			switch ($opcion){
				case 'Insert':
					/*
					if (ISSET($_GET['tabla_id'])){
						$view = ucfirst($tabla);  //la primera debe quedar en mayuscula
						include_once '../view/'.$view.'/insert.php';
					}
					*/
					if (ISSET($_POST['tabla_id'])){
					$id=$obj->autoincrement($tabla."_id",$tabla);
					$sqlDML = "insert into ".$tabla." /* (campobd) */ values('$nombre')"; // aqui falta colocar una variable que nos traiga el campo a modificar es decir el nombre de la tabla
					$ejecutar=$obj->insert($sqlDML);
					
						if ($ejecutar) {
							redirect(getUrl($tabla,$tabla,"getGeneral(".$view.")"));  //revisar en caso de que salga error
						}else{
							echo "Recorcholis, hubo un error";
						}
					}
			
				break;
				case 'Update':
					if (ISSET($_GET['tabla_id'])){
						$obj=new GeneralModel();
						$tabla_id=$_GET ['tabla_id']; //  eliminar esta informacion, no es necesario.
						$sqlUpdate="SELECT * FROM ".$tabla." WHERE ".$tabla_id_descripcion."=$tabla_id";
						$generales=$obj-> consult($sqlUpdate);
						
						
						include_once '../view/'.$view.'/update.php';
					}
					
					if (ISSET($_POST['tabla_id'])){
						$obj= new GeneralModel();
						//$tabla_id=$_POST['tabla_id'];   la id esta auto incrementable en la base de datos y por eso no se recibe por post
						$tabla_nombre=$_POST['tabla_nombre'];
				
						$sqlUpdate="UPDATE ".$tabla." SET ".$tabla_nombre_descripcion."='$nombre' WHERE ".$tabla_id_descripcion."=$tabla_id";
						//echo $sqlUpdate;exit(); 
						$ejecutar=$obj -> update($sqlUpdate);
						
						if ($ejecutar) {
							redirect(getUrl("General","General","consult"));
						} else{
							echo "Hubo error";
						}
					}
					
				break;
				case 'Delete':

					if (ISSET($_GET['tabla_id'])){
						$obj=new GeneralModel();
						$tabla_id=$_GET ['tabla_id'];
						$sql="SELECT * FROM ".$tabla." WHERE ".$tabla_id_descripcion."=$tabla_id";
						$generales=$obj-> delete($sql);
						
						$view = ucfirst($tabla);  //la primera debe quedar en mayuscula
						include_once '../view/'.$view.'/delete.php';
					}
					
					if (ISSET($_POST['tabla_id'])){
						$obj= new GeneralModel();
						$tabla_id=$_POST['tabla_id'];
						$tabla_nombre=$_POST['tabla_nombre'];
						$sql="DELETE FROM ".$tabla." WHERE ".$tabla_id_descripcion."=$tabla_id";
						$ejecutar=$obj ->delete($sql);

						if ($ejecutar){
							redirect(getUrl("General","General","consult"));
						} else{
							echo "Hubo error";
						}
					}
										
				break;
			}
			
        }

        public function consult(){
            //$objeto1 = "GeneroModel()";
			
			$obj=new GeneroModel();
			$nombreTabla = "generos";
			$sql="SELECT * FROM generos"; //.$nombreTabla;
            $generales=$obj->consult($sql);
           // include_once '../view/'.ucfirst($nombreTabla).'/consult.php';
        include_once '../view/Genero/consult.php';
       
        }

        public function getUpdate(){
            $obj=new GeneralModel();
            $tabla_id=$_GET ['tabla_id'];
            $sql="SELECT * FROM generales WHERE tabla_id=$tabla_id";
            $generales=$obj-> consult($sql);
            include_once '../view/General/update.php';

        }
		

        public function postUpdate(){
        $obj= new GeneralModel();
        $tabla_id=$_POST['tabla_id'];
        $tabla_nombre=$_POST['tabla_nombre'];
        $sql="UPDATE generales SET tabla_nombre='$tabla_nombre' WHERE tabla_id=$tabla_id";
        $ejecutar=$obj -> update($sql);
        if ($ejecutar) {

            redirect(getUrl("General","General","consult"));
        
        } else{
            echo "Hubo error";

        }
    }

        public function getDelete(){
            $obj=new GeneralModel();
            $tabla_id=$_GET ['tabla_id'];
            $sql="SELECT* FROM generales WHERE tabla_id=$tabla_id";
            $generales=$obj-> delete($sql);
            include_once '../view/General/delete.php';

        }
        public function postDelete(){
			$obj= new GeneralModel();
			$tabla_id=$_POST['tabla_id'];
			$tabla_nombre=$_POST['tabla_nombre'];
			$sql="DELETE FROM generales WHERE tabla_id=$tabla_id";
			$ejecutar=$obj ->delete($sql);
			if ($ejecutar){

				redirect(getUrl("General","General","consult"));
			
			} else{
				echo "Hubo error";

			}
        }


    }


?>