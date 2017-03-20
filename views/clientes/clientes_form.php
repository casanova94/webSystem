<div class="container" style="margin-top:80px;">
	<div class="row">
	<div class="jumbotron">
		<h2>Registro de socios</h2>
	</div>	
	</div>	
<form class="form-horizontal" action="index.php?c=clientes&a=guardar" method="post" >
 <input type="hidden" name="txt_id" value="<?php echo $data['cliente_id']!=0? $data['cliente_id'] : "0"?>"/>
  <div class="form-group">
    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre" value="<?php echo $data['nombre']?>" required>
    </div>
  </div>
  <div class="form-group">
    <label for="apellido" class="col-sm-2 control-label">Apellido</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="apellido" placeholder="Ingrese el apellido" value="<?php echo $data['apellido']?>" required>
    </div>
  </div>
   <div class="form-group">
    <label for="edad" class="col-sm-2 control-label">Edad</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="edad" placeholder="Ingrese la edad" value="<?php echo $data['edad']?>" required>
    </div>
  </div>
   <div class="form-group">
    <label for="fecha" class="col-sm-2 control-label">Fecha de inscripción</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" name="fecha" placeholder="Ingrese la fecha de inscripción" value="<?php $date= date("Y-m-d");echo isset($data['fecha_inscripcion'])?$data['fecha_inscripcion']:$date; ?>" required>
    </div>
  </div>
  <div class="form-group">
    <label for="modalidad" class="col-sm-2 control-label">Modalidad</label>
    <div class="col-sm-10">
    <select name="sel_modalidad" class="form-control" required>
    	<option value="0">--Seleccionar modalidad--</option>
        <?php foreach($query as $row):?>
    	<option value="<?php echo $row['tipo_id'] ?>" <?php echo $data['tipo_id']==$row['tipo_id']?'selected':" " ?> ><?php echo $row['tipo']?></option>
        <?php endforeach;?>
    </select>      
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Registrar</button>
    </div>
  </div>
</form>	

</div>
