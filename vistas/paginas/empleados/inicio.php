<div class="card">
   <center><h1 class="card-header text-danger">
       Pollos de Engorde
</h1></center>
   <div class="card-body">
      
   </div>
</div>




<table class="table table-bordered border-primary">
        <thead>
        <tr>
        <th  class="table-secondary">ID</th>
        <th class="table-success">Fecha</th>
        <th class="table-success">Cantidad</th>
        <th class="table-danger">Crecedora</th>
        <th class="table-danger">Engordadora</th>
        <th class="table-warning">Inversión</th>
        <th class="table-info">Ganancias</th>
        <th class="table-dark">Datos</th>
        </tr>
        </thead>
        
        <tbody>

         <?php foreach ($engorde as $engorde){?>

            
  
         

        
        
        <tr>
        <td><?php echo $engorde->id; ?> </td>
        <td><?php echo $engorde->fecha; ?></td>
        <td><?php echo $engorde->cantidad; ?></td>
        <td><?php echo $engorde->crecedora; ?></td>
        <td><?php echo  $engorde->engordadora; ?></td>
        <td><?php echo $engorde->ganancias; ?></td>
        <td><?php echo $engorde->datos; ?></td>
        <td>

        <div class="btn-group" role="group" aria-label="">
        <a href="?controlador=empleados&accion=editar&id=<?php echo $engorde->id; ?>"  class="btn btn-info">Editar</a>
        <a href="?controlador=empleados&accion=borrar&id=<?php echo $engorde->id; ?>"  class="btn btn-danger">Borrar</a>
        </div> 
            
        </td>
        </tr>


        <?php } ?>
       </tbody>
       </table>

       <div class="card">
   <div class="card-header">
   <center><a name="" id="" class="btn btn-info" href="?controlador=empleados&accion=crear" role="button">Agregar Datos</a></center>
   </div>
   <div class="card-body">
      
   </div>
</d>

     

