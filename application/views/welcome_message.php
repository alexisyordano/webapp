<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Hola :)</title>
     <link rel="stylesheet" type="text/css" href="<?=base_url() ?>style/css/bootstrap.min.css" media="screen" />
	
</head>
<body>

<div id="container">

	<nav style="position: relative; width: 40%; border: 1px solid #ccc; margin :0 auto;">
		<ul>
			<li><a href="<?=base_url() ?>/Welcome/listar">Ver mis transferencias</a></li>
			<li>Alexis Lozada</li>
		</ul>
	</nav>
	
	 <form  method="post" name="form" enctype="multipart/form-data" action="<?=base_url()?>Welcome/save">
	 	
	 	<div class="col-md-7">
		 	<h4>Ingresar los datos de la transferencia</h4>
		 	<label>Ingresar el nombre de la cuenta</label>
		 	<input type="text" name="nombre_cuenta" required="" class="form-control">
		</div>
	 	<br/>
        
        <div class="col-md-7">
		 	<label>Ingresar la refencia de pago</label>
		 	<input type="number" name="referencia_pago" required="" class="form-control">
	    </div>
	 	<br/>
       
       <div class="col-md-7">
		 	<label>Ingresar el numero de cuenta</label>
		 	<input type="text" name="numero_cuenta" required="" class="form-control">
	   </div>
	 	<br/>

	   <div class="col-md-7">
		 	<label>Ingresar código</label>
		 	<input type="number" name="codigo" required="" class="form-control">
	        <br/>
	   </div>
       <br/>

       <div class="col-md-7">
       	  <input type="file" name="userfile">
       </div>


	   <div class="col-md-7">
	   	<br/>
         <input type="submit" name="a" value="Guardar" class="btn btn-info">
       </div>

	 </form>
</div>

</body>
</html>