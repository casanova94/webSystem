  <script type="text/javascript">
    </script>
<div class="container" style="margin-top:80px;">
	<div class="row">
	<div class="jumbotron">
		<h2>Registro de Modalidad</h2>
	</div>	
	</div>	
<form class="form-horizontal" action="index.php?c=modalidad&a=guardar" method="post" >
 <input type="hidden" name="txt_id" value="<?php echo $data['tipo_id']!=0? $data['tipo_id'] : "0"?>"/>

  <div class="form-group">
    <label for="tipo" class="col-sm-2 control-label">Tipo</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="tipo" placeholder="Ingrese la modalidad" value="<?php echo $data['tipo']?>" required>
    </div>
  </div>
  <div class="form-group">
    <label for="tarifa" class="col-sm-2 control-label">Tarifa</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="tarifa" placeholder="Ingrese la tarifa" value="<?php echo $data['tarifa']?>" required>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Registrar</button>
    </div>
  </div>
</form>	

</div>
