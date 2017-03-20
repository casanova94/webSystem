<div class="container" style="margin-top:80px;">
	
		<div class="row">
	<div class="jumbotron">
		<h2>Administración de socios</h2>
  <p><a class="btn btn-primary btn-lg" href="index.php?c=clientes&a=cliente" role="button">Nuevo socio</a></p>
	</div>
	<div class="table-responsive">
	<table class="table table-striped table-hover ">
			<thead>
				<tr>
					
					<th>Nombre</th>
					<th>Edad</th>
					<th>Fecha de inscripción</th>
					<th>Modalidad</th>
					<th>Acción</th>

				</tr>
			</thead>
			<tbody>
				<?php foreach ($query as $data): ?>
				<tr>
					
					<td><?php echo $data['nombre'].' '.$data['apellido'] ?></td>
					<td><?php echo $data['edad'] ?></td>
					<td><?php echo $data['fecha_inscripcion'] ?></td>
					<td><?php echo $data['tipo'] ?></td>
				    <td>
		            <a href="index.php?c=clientes&a=cliente&_id=<?php echo $data['cliente_id']?>" class="btn btn-default">Editar</a>
		             <a href="index.php?c=clientes&a=delete&_id=<?php echo $data['cliente_id']?>" class="btn btn-danger">Eliminar</a>
				    </td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>	
	</div>					
	</div>
</div>