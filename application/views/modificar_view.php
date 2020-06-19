<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url() ?>style/css/bootstrap.min.css" media="screen" />
	
</head>
<body>

<div id="container">
	
	 <form  method="post" name="form" action="<?=base_url()?>Welcome/save_update">
	 	

	 	<input type="hidden" name="id_transferencia"  value="<?php echo $datas->id_transferencia;?>" class="form-control">

	 	<div class="col-md-7">
		 	<h3>Actualizar los datos de la transferencia</h3>
		 	<label>Ingresar el nombre de la cuenta</label>
		 	<input type="text" name="nombre_cuenta" required="" value="<?php echo $datas->nombre_cuenta;?>" class="form-control">
		 	<br/>
	    </div>

       <div class="col-md-7">
		 	<label>Ingresar la refencia de pago</label>
		 	<input type="number" name="referencia_pago" required="" value="<?php echo $datas->referencia_pago;?>" class="form-control">
		 	<br/>
	   </div>
       
       <div class="col-md-7">
		 	<label>Ingresar el numero de cuenta</label>
		 	<input type="text" name="numero_cuenta" required="" value="<?php echo $datas->numero_cuenta;?>" class="form-control">
		 	<br/>
	   </div>
 
      <div class="col-md-7">
		 	<label>Ingresar código</label>
		 	<input type="number" name="codigo" required="" value="<?php echo $datas->codigo;?>" class="form-control">
	        <br/>
      </div>

    <div class="col-md-7">
        <input type="submit" name="a" value="Guardar" class="btn btn-info">
    </div>

	 </form>
</div>

</body>
</html>