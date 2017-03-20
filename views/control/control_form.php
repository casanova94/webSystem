  <script type="text/javascript">
    </script>
<div class="container" style="margin-top:80px;">
	<div class="row">
	<div class="jumbotron">
		<h2>Registro de Control</h2>
	</div>	
	</div>	
<form class="form-horizontal" action="index.php?c=controles&a=guardar" method="post" >
 <input type="hidden" name="txt_id" value="<?php echo $data['control_id']!=0? $data['control_id'] : "0"?>"/>

 <div class="form-group">
    <label for="cliente" class="col-sm-2 control-label">Cliente</label>
    <div class="col-sm-10">
    <select name="sel_cliente" id="sel_cliente" class="form-control" required>
      <option value="0">--Seleccionar cliente--</option>
        <?php foreach($query as $row):?>
      <option value="<?php echo $row['cliente_id'] ?>"  <?php echo $data['cliente_id']==$row['cliente_id']?'selected':" " ?>><?php echo $row['nombre']." ".$row['apellido']?></option>
        <?php endforeach;?>
    </select>      
    </div>
  </div>
  <div class="form-group">
    <label for="peso" class="col-sm-2 control-label">Peso (kg)</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="peso" placeholder="Ingrese el peso" value="<?php echo $data['peso']?>" required>
    </div>
  </div>
  <div class="form-group">
    <label for="medida" class="col-sm-2 control-label">Medida (cm)</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="medida" placeholder="Ingrese la medida de la cintura" value="<?php echo $data['medida_cintura']?>" required>
    </div>
  </div>
   <div class="form-group">
    <label for="fecha" class="col-sm-2 control-label">Fecha de control</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" name="fecha" placeholder="Ingrese la fecha de inscripción" value= "<?php $date= date("Y-m-d");echo isset($data['fecha_control'])?$data['fecha_control']:$date; ?>"required>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Registrar</button>
    </div>
  </div>
</form>	

</div>
