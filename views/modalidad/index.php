<div class="container" style="margin-top:80px;">
	
		<div class="row">
	<div class="jumbotron">
		<h2>Administración de modalidades</h2>
  <p><a class="btn btn-primary btn-lg" href="index.php?c=modalidad&a=modalidad" role="button">Agregar modalidad</a></p>
	</div>
	<div class="table-responsive">
		<table class="table table-striped table-hover ">
			<thead>
				<tr>
					
					<th>Tipo</th>
					<th>Tarifa</th>
					<th>Acción</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($query as $data): ?>
				<tr>
					<td><?php echo $data['tipo'] ?></td>
					<td><?php echo $data['tarifa'] ?></td>
				    <td>
		            <a href="index.php?c=modalidad&a=modalidad&_id=<?php echo $data['tipo_id']?>" class="btn btn-default">Editar</a>
		             <a href="index.php?c=modalidad&a=delete&_id=<?php echo $data['tipo_id']?>" class="btn btn-danger">Eliminar</a>
				    </td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>	
	</div>
				
	</div>
</div>