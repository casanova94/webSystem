<div class="container" style="margin-top:80px;">
	
		<div class="row">
	<div class="jumbotron">

		<h2>Administración de pagos</h2>
  <p><a class="btn btn-primary btn-lg" href="index.php?c=pagos&a=pago" role="button">Agregar pago</a></p>

	</div>
	<div class="container">
	<div class="row" style="margin-bottom:40px;">
		<h2 class="text-center"><span class="label label-default">Ingreso mensual: $<?php echo isset($income['monto'])?$income['monto']:'0'; ?></span><h2>
		
	</div>
    </div>
	
	<div class="table-responsive">
		<table class="table table-striped table-hover ">
			<thead>
				<tr>
					
					<th>Nombre</th>
					<th>Monto</th>
					<th>Estado</th>
					<th>Fecha de Pago</th>
					<th>Acción</th>

				</tr>
			</thead>
			<tbody>
				<?php foreach ($query as $data): ?>
				<tr>
					
					<td><?php echo $data['nombre'].' '.$data['apellido'] ?></td>
					<td><?php echo $data['monto'] ?></td>
					<td><?php echo $data['estado']=="Pagado"?'<span class="label label-success">':'<span class="label label-danger">';echo $data['estado'] ?></span></td>
					<td><?php echo $data['fecha_pago'] ?></td>
				    <td>
		            <a href="index.php?c=pagos&a=pago&_id=<?php echo $data['id_pago']?>" class="btn btn-default">Editar</a>
		             <a href="index.php?c=pagos&a=delete&_id=<?php echo $data['id_pago']?>" class="btn btn-danger">Eliminar</a>
				    </td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>	
	</div>
				
	</div>
</div>