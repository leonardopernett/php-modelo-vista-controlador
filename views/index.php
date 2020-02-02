<?php  require_once('../controllers/UserController.php') ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>usuarios</title>
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
   
</head>
<body>
     

<div class="container mt-5">
<h4>Crud MVC</h4>
   <div class="row">
      <div class="col-md-5">
         <table class="table table-striped">
         <tr>
            <th>nombre</th>
            <th>apellido</th>
            <th>direccion</th>
            <th></th>
            <th></th>
         </tr>


         <?php foreach($matriz_user as $users): ?>
            <tr>
                  <td><?= $users['nombre']; ?> </td>
                  <td><?= $users['apellido']; ?> </td>
                  <td><?= $users['direccion']; ?> </td>
                  <td><a href="">borrar</a> </td>
                  <td><a href="">actualizar</a> </td>
            </tr>
      
         <?php   endforeach ?> 



      </table>
      </div>

        <div class="col-md-7">
        <form action="save.php" method="POST">
        <h3>formulario</h3>
                 <div class="form-group">
                   <input type="text" name="nombre" class="form-control" placeholder="nombre" autfocus>
                 </div>

                 <div class="form-group">
                   <input type="text" name="apellido" class="form-control" placeholder="apellido" autfocus>
                 </div>
                 <div class="form-group">
                   <input type="text" name="direccion" class="form-control" placeholder="descriotion" autfocus>
                 </div>
                   
                   <div class="form-group">
                     <input type="submit" class="btn btn-primary btn-block" value="guardar" name="save">
                   </div>
              </form>
        </div>
   </div>
</div>
  

</body>
</html>