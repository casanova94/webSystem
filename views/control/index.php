<div class="container" style="margin-top:80px;">
	
		<div class="row">
	<div class="jumbotron">
		<h2>Administración de controles</h2>
  <p><a class="btn btn-primary btn-lg" href="index.php?c=controles&a=control" role="button">Agregar control</a></p>
	</div>
	<div class="table-responsive">
	<table class="table table-striped table-hover ">
			<thead>
				<tr>
					
					<th>Nombre</th>
					<th>Peso(kg)</th>
					<th>Cintura(cm)</th>
					<th>Fecha de Control</th>
					<th>Acción</th>

				</tr>
			</thead>
			<tbody>
				<?php foreach ($query as $data): ?>
				<tr>
					
					<td><?php echo $data['nombre'].' '.$data['apellido'] ?></td>
					<td><?php echo $data['peso'] ?></td>
					<td><?php echo $data['medida_cintura'] ?></td>
					<td><?php echo $data['fecha_control'] ?></td>
				    <td>
		            <a href="index.php?c=controles&a=control&_id=<?php echo $data['control_id']?>" class="btn btn-default">Editar</a>
		             <a href="index.php?c=controles&a=delete&_id=<?php echo $data['control_id']?>" class="btn btn-danger">Eliminar</a>
				    </td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>	
	</div>
					
	</div>
</div>