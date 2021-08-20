<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .modal-header, h4, .close {
    background-color: gray;
    color:white !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-footer {
    background-color: gray;
  }
  </style>
</head>
<body>

<div class="container">
  <h2>¡Bienvenido a MeDSyS</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-default btn-lg" id="myBtn">Ingresar</button>
  <a href="#" class="btn btn-danger btn-lg">Salir al sitio Web</a>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" name="formularioingreso" method="POST" action="controlador/validariniciosesio.php">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Usuario</label>
              <input type="text" name = "login" class="form-control" id="usrname" placeholder="Ingrese Usuario">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" name="pass" class="form-control" id="psw" placeholder="Enter password">
            </div>
            <
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        
      </div>
      
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});
</script>

</body>
</html>

<?php 


if($x==1){

    echo '<br><div class="alert alert-success  text-center">Bienvenido </div>';
}

if($x==2){

    echo '<br><div class="alert alert-danger  text-center">Error de usuario y/o contraseña -- ó el usuario no está registrado en la base de datos</div>';
}

if($x==3){

    echo '<br><div class="alert alert-info  text-center">El usuario cerro la sesión de manera correcta</div>';
}

?>
