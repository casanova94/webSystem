<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Sistema de control - <?php echo $title;?></title>
	<link rel="stylesheet" type="text/css" href="styles/css/bootstrap.min.css">
    <script type="text/javascript" src="styles/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="styles/js/bootstrap.min.js"></script>
  
</head>
<body>
<header>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">CRUD</span>
					<spanclass="icon-bar"></span>
					<spanclass="icon-bar"></span>
					<spanclass="icon-bar"></span>
					</button>
					<a class="navbar-brand"  href="index.php?c=clientes&a=index">GYM SYSTEM</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Opciones<span class="caret"></span></a>
                         <ul class="dropdown-menu">
                      	<li><a href="index.php?c=clientes&a=index">Socios</a></li>
                      	<li><a href="index.php?c=pagos&a=index">Pagos</a></li>
                      	<li><a href="index.php?c=controles&a=index">Control</a></li>
                      	<li><a href="index.php?c=modalidad&a=index">Modalidad</a></li>
                      </ul>
                  </li>
				</ul>
				 <form class="navbar-form navbar-right">
        <a  href="index.php?c=login&a=logout" class="btn btn-default"> Logout (<?php session_start(); if(isset($_SESSION['nombre'])){echo $_SESSION['nombre'];}else{
        	header('Location:index.php?c=login&a=logout');
        }?>)</a>
      </form>
			</div>

		</div>
	</nav>
</header>
	
