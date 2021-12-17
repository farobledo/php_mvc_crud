<div class="card">
    <div class="card-header bg-light">
    
    <center><h1 class="text-danger">POLLO DE ENGORDE</h1></center>
    <p class="card-text"></p>
    <p class="card-text"></p>
    <center><img src="img/descarga.jfif" width="200" alt="s"></center> 
    <div class="card-img-overlay">

    </div>
    </div>
      
    </div>
    <div class="card-body">
    <form action="" method="post">

    <div class="card border-dark mb-6 card-header  bg-info">
      <label for="id" class="text-danger">ID:</label>
      <input readonly type="text"
        class="form-control" value="<?php echo $engorde->id;?>" name="id" id="id" aria-describedby="helpId" placeholder="ID engorde">
      
    </div>

   
    <div class=" card border-dark mb-6 card-header  bg-info">
    <label for="fecha" class="text-danger">Fecha</label>
    <input readonly type="text-danger"
    class="form-control" value="<?php echo $engorde->fecha;?>" name="fecha" id="fecha" aria-describedby="helpId" placeholder="id engorde">
    </div>

    <div class="card border-dark mb-6 card-header    bg-info">
    <label for="cantidad" class="text-danger">cantidad</label>
    <input readonly type="text"
    class="form-control" value="<?php echo $engorde->cantidad;?>" name="cantidad" id="cantidad" aria-describedby="helpId" placeholder="Insertar Datos">
    </div>

    <div class="card border-dark mb-6    card-header  bg-info">
    <label for="crecedora" class="text-danger">Crecedora</label>
    <input readonly type="text"
    class="form-control" value="<?php echo $engorde->crecedora;?>" name="crecedora" id="crecedora" aria-describedby="helpId" placeholder="Insetar Datos">
    </div>

    <div class="card border-dark mb-6  card-header bg-info">
    <label for="engordadora" class="text-danger">Engordadora</label>
    <input readonly type="text"
    class="form-control" value="<?php echo $engorde->engordadora;?>" name="engordadora" id="engordadora" aria-describedby="helpId" placeholder="Insetar Datos">
    </div>

    <div class="card border-dark mb-6  card-header bg-info">
    <label for="inversion" class="text-danger">Inversión</label>
    <input readonly type="text"
    class="form-control" value="<?php echo $engorde->inversion;?>" name="inversion" id="invesion" aria-describedby="helpId" placeholder="Insetar Datos">
    </div>

    <div class="card border-dark mb-10  card-header bg-info">
    <label for="ganancias" class="text-danger">Ganancias</label>
    <input readonly type="text"
    class="form-control" value="<?php echo $engorde->ganancias;?>" name="ganancias" id="ganancias" aria-describedby="helpId" placeholder="Insetar Datos">
    </div>
    

    <div class="card border-dark mb-10  card-header bg-info">
    <label for="datos" class="text-danger">Datos</label>
    <input readonly type="text"
    class="form-control" value="<?php echo $engorde->datos;?>" name="datos" id="datos" aria-describedby="helpId" placeholder="Insetar Datos">
    </div>
    <br>
    
    <center><div class="d-grid gap-2">
    <input name="" id="" class="btn btn-primary" type="submit" value="Editar">
    <a href="?controlador=empleados&accion=inicio" class="btn btn-danger nav-link active">Cancelar</a>
    </div></center>
    </form>
    </div>
</div>