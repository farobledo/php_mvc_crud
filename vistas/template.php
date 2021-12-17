<!doctype html>
<html lang="en">
  <head>
    <title>TABLA DE POLLOS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>

  <nav class="nav nav-pills nav-fill">
  <a class="nav-link active" aria-current="page" href="?controlador=paginas&accion=inicio">HOME</a>
  <a  class="btn btn-info nav-link active" aria-current="page" href="?controlador=empleados&accion=crear">CREAR</a>
  <a class="nav-link active" aria-current="page" href="?controlador=empleados&accion=inicio">DATOS</a>
  <a class="nav-link active" aria-current="page" href="?controlador=empleados&accion=editar&id=12">EDITAR</a>
  </nav>
   

  <div class="container">
      <div class="row">
          <div class="col-xs|sm|md|lg|xl-1-12">

            <?php include_once("ruteador.php"); ?>
        
          </div>
          
      </div>
  </div>


      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>