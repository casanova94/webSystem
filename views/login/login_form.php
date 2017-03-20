<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Sistema de administración</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="styles/css/bootstrap.min.css">
    <script type="text/javascript" src="styles/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="styles/js/bootstrap.min.js"></script>
    <style>
    html{
    	margin: 0px;
    	padding: 0px;
    }

    .boxlogin{
    	margin: 5% auto;
    	width: 35%;
      -webkit-box-shadow: 0px 1px 23px 2px rgba(0,0,0,0.41);
      -moz-box-shadow: 0px 1px 23px 2px rgba(0,0,0,0.41);
       box-shadow: 0px 1px 23px 2px rgba(0,0,0,0.41);
    }

    @media only screen and (max-width: 500px) {
    .boxlogin{
    	margin: 5% auto;
    	width: 90%;
      -webkit-box-shadow: 0px 1px 23px 2px rgba(0,0,0,0.41);
      -moz-box-shadow: 0px 1px 23px 2px rgba(0,0,0,0.41);
       box-shadow: 0px 1px 23px 2px rgba(0,0,0,0.41);
    }
}
    </style>
</head>
<body>
	<div class="container-fluid">
		<div class="row" >
			<div class="page-header text-center" >
  <h1>El Gimnasio<small> Administración de socios</small></h1>
</div>
		</div>
	</div>
	<div class="container-fluid" >
		<div class="row">
		<div class="jumbotron boxlogin">
  <form method="POST" action="index.php?c=login&a=login">
  	<div class="form-group">
    <label for="usuario">Nombre de usuario:</label>
    <div class="input-group">
    	 <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
    	 <input name="usuario" type="text" class="form-control" id="usuario" placeholder="Usuario" required>
    </div>   
  </div>
  <div class="form-group">
    <label for="contraseña">Contraseña:</label>
    <div class="input-group">
    	<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
    	<input name="password" type="password" class="form-control" id="contraseña" placeholder="Contraseña" required>
    </div>
    </div>
    <?php
    if(isset($error)){
echo '<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Error!</strong> Usuario ó contraseña incorrecto.
</div>';
    }
    ?>

  <div class="form-group">
    <div class="text-center">
      <button type="submit" name="login" class="btn btn-success">Conectarse</button>
    </div>
  </div>
  </form>
    </div>	
		</div>		
	</div>	
</body>
</html>