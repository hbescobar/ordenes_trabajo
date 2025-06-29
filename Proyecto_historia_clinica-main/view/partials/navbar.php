<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Historia_paciente</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        
      <!--   Usuario -->  
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuario
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo getUrl("Usuario","Usuario","getInsert"); ?>">Registrar</a></li>
            <li><a class="dropdown-item" href="<?php echo getUrl("Usuario","Usuario","consult"); ?>">Consultar</a></li>
           
           
          </ul>
        </li>

     <!--    Estratos -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Estratos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo getUrl("General","General","getInsert",array("tabla"=>"Estrato")); ?>">Registrar</a></li>
            <li><a class="dropdown-item" href="<?php echo getUrl("General","General","consult",array("tabla"=>"Estrato")); 
												?>">Consultar</a></li>
          </ul>
         <!--  Roles -->
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">

            Roles
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo getUrl("General","General","getInsert",array("tabla"=>"Role")); ?>">Registrar</a></li>
            <li><a class="dropdown-item" href="<?php echo getUrl("General","General","consult",array("tabla"=>"Role")); 
												?>">Consultar</a></li>
           
           
          </ul>
        </li>
        <!-- genero -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Genero
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo getUrl("General","General","getInsert",array("tabla"=>"Genero")); ?>">Registrar</a></li>
            <li><a class="dropdown-item" href="<?php echo getUrl("General","General","consult",array("tabla"=>"Genero")); 
												?>">Consultar</a></li>
          </ul>
        </li>
        
      
	  </ul>
      <form class="d-flex" >
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>