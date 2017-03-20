  <script type="text/javascript">
        // funcion que se ejecuta cada vez que se selecciona una empresa
        function cambioMonto()
        {
           
            var option = document.getElementById( "sel_cliente" );
            document.getElementById('monto').value= option.options[ option.selectedIndex ].dataset.monto;

        }
    </script>
<div class="container" style="margin-top:80px;">
	<div class="row">
	<div class="jumbotron">
		<h2>Registro de Pago</h2>
	</div>	
	</div>	
<form class="form-horizontal" action="index.php?c=pagos&a=guardar" method="post" >
 <input type="hidden" name="txt_id" value="<?php echo $data['id_pago']!=0? $data['id_pago'] : "0"?>"/>

 <div class="form-group">
    <label for="cliente" class="col-sm-2 control-label">Cliente</label>
    <div class="col-sm-10">
    <select name="sel_cliente" id="sel_cliente" class="form-control" required onchange="cambioMonto();">
      <option value="0">--Seleccionar cliente--</option>
        <?php foreach($query as $row):?>
      <option data-monto="<?php echo $row['tarifa'] ?>" value="<?php echo $row['cliente_id'] ?>"  <?php echo $data['id_cliente']==$row['cliente_id']?'selected':" " ?>><?php echo $row['nombre']." ".$row['apellido'];?></option>
        <?php endforeach;?>
    </select>      
    </div>
  </div>
  <div class="form-group">
    <label for="monto" class="col-sm-2 control-label">Monto</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="monto" id="monto" placeholder="Ingrese el monto" value="<?php echo $data['monto']?>" required>
    </div>
  </div>
   <div class="form-group">
    <label for="estado" class="col-sm-2 control-label">Estado</label>
    <div class="col-sm-10">
    <select name="sel_estado"  class="form-control" required>
      <option value="0">--Seleccionar estado--</option>
      <option value="Pagado" selected="selected">Pagado</option>
       <option value="Pendiente">Pendiente</option>
    </select>      
    </div>
  </div>
   <div class="form-group">
    <label for="fecha" class="col-sm-2 control-label">Fecha de pago</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" name="fecha" placeholder="Ingrese la fecha de inscripción" value="<?php $date= date("Y-m-d");echo isset($data['fecha_pago'])?$data['fecha_pago']:$date; ?>" required>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Registrar</button>
    </div>
  </div>
</form>	

</div>
