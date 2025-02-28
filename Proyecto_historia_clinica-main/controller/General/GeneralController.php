<?php 

	//incluir todos los modelos.
    include_once '../model/Genero/GeneroModel.php';
    include_once '../model/Role/RoleModel.php';
	include_once '../model/Estrato/EstratoModel.php';
	
    class GeneralController{

	public function getInsert(){
		$NombreTabla=$_GET['tabla'];
		include_once '../view/'.$NombreTabla.'/insert.php';        
    }

    public function postInsert(){
        
		$NombreTabla=$_GET['tabla'];
	  
		if ($NombreTabla=="Genero"){
			$obj=new GeneroModel();
		}else if ($NombreTabla=="Estrato"){
			$obj=new EstratoModel();
		}else if ($NombreTabla=="Role"){
			$obj=new RoleModel();
		}else{
			echo "Hubo error";
			exit(); 
		}
		
		
		
		
		$id=$obj->autoincrement("id",$NombreTabla."s");
        $nombre=$_POST['nombre'];
        
		$sql="INSERT INTO ".$NombreTabla."s VALUES($id,'$nombre')";
        $ejecutar=$obj->insert($sql);
        if ($ejecutar){
            echo redirect(getUrl("General","General","getInsert",array("tabla"=>$NombreTabla)));
        }else{
            echo "Estas en un error menor";
        }
    }

   
	
	public function consult(){
	
		$NombreTabla=$_GET['tabla'];
	  
		if ($NombreTabla=="Genero"){
			$obj=new GeneroModel();
		}else if ($NombreTabla=="Estrato"){
			$obj=new EstratoModel();
		}else if ($NombreTabla=="Role"){
			$obj=new RoleModel();
		}else{
			echo "Hubo error";
			exit(); 
		}
		
		//echo $NombreTabla;
		
		$sql="SELECT * FROM ".$NombreTabla."s";
		$genericos=$obj->consult($sql);
		include_once '../view/'.$NombreTabla.'/consult.php';
	}

    public function getUpdate(){
       
	   $NombreTabla=$_GET['tabla'];
	  
		if ($NombreTabla=="Genero"){
			$obj=new GeneroModel();
		}else if ($NombreTabla=="Estrato"){
			$obj=new EstratoModel();
		}else if ($NombreTabla=="Role"){
			$obj=new RoleModel();
		}else{
			echo "Hubo error";
			exit(); 
		}

		$id=$_GET['id'];
        $sql="SELECT * FROM ".$NombreTabla."s WHERE id= $id";
		//echo $sql;
        $genericos=$obj->consult($sql);
		include_once '../view/'.$NombreTabla.'/update.php';
    }

    public function postUpdate(){
        $NombreTabla=$_GET['tabla'];
		if ($NombreTabla=="Genero"){
			$obj=new GeneroModel();
		}else if ($NombreTabla=="Estrato"){
			$obj=new EstratoModel();
		}else if ($NombreTabla=="Role"){
			$obj=new RoleModel();
		}else{
			echo "Hubo error";
			exit(); 
		}
		
		$id=$_POST['id'];
        $nombre=$_POST['nombre'];
        
		$sql="UPDATE ".$NombreTabla."s SET nombre='$nombre' WHERE id = $id";
		$ejecutar=$obj->update($sql);
        if($ejecutar){
            echo redirect(getUrl("General","General","consult",array("tabla"=>$NombreTabla)));
        }else{
            echo "Estas en un error menor";
        }
    }

    public function getDelete(){
		$NombreTabla=$_GET['tabla'];
		if ($NombreTabla=="Genero"){
			$obj=new GeneroModel();
		}else if ($NombreTabla=="Estrato"){
			$obj=new EstratoModel();
		}else if ($NombreTabla=="Role"){
			$obj=new RoleModel();
		}else{
			echo "Hubo error";
			exit(); 
		}
		
		$id=$_GET['id'];
        $sql="SELECT * FROM ".$NombreTabla."s WHERE id= $id";
        $genericos=$obj->consult($sql);
        
		include_once '../view/'.$NombreTabla.'/delete.php';
    }

    public function postDelete(){
		$NombreTabla=$_GET['tabla'];
		if ($NombreTabla=="Genero"){
			$obj=new GeneroModel();
		}else if ($NombreTabla=="Estrato"){
			$obj=new EstratoModel();
		}else if ($NombreTabla=="Role"){
			$obj=new RoleModel();
		}else{
			echo "Hubo error";
			exit(); 
		}
		
        $id= $_POST['id'];
        $sql="DELETE FROM ".$NombreTabla."s  WHERE id=$id";
        $ejecutar=$obj->delete($sql);
     
        if($ejecutar){
            redirect(getUrl("General","General","consult",array("tabla"=>$NombreTabla)));
        }else{
            echo "Estas en un error menor";
        }
    }
}


?>