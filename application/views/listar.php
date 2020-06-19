<!DOCTYPE html>
<html>
<head>
	<title>resultado</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>style/css/bootstrap.min.css" media="screen" />
</head>
<body>
        
        <?php if (isset($_GET['msj']) and $_GET['msj'] == 1) {?>
		<div class="alert alert-success">
			<center>
				<span>Registrado Insertado Exitosamente</span>
			</center>

		<?php }?>
		</div>

		<?php if (isset($_GET['msj']) and $_GET['msj'] == 2) {?>
		<div class="alert alert-success">
			<center>
				<span>Registrado Modificado Exitosamente</span>
			</center>

		<?php }?>
		</div>

<?php if ($datas): ?>
	<center><strong>Lista de los datos</strong></center>
	<center><a class="btn btn-info" href="<?= base_url() ?>/welcome/index">Regresar</a></center>
	<br/>

	<div class="col-md-3">
         	<input class="form-control col-md-3 light-table-filter" data-table="table table-striped" type="text" placeholder="Buscar...">
         	<br/>
        </div>

	<div class="col-md-12">
		<table  class="table table-striped" align="center">
		
        <br/>
			<tr>
				<td>Nombre de la cuenta</td>
				<td>Referencia de pago</td>
				<td>Numero de la cuenta</td>
				<td>Código</td>
				<td>Capture</td>
				<td>Operaciones</td>
			</tr>

			<?php foreach ($datas as $data):?>
		        <tr>
		        	<td><?= $data->nombre_cuenta ?></td>
		        	<td><?= $data->referencia_pago ?></td>
		        	<td><?= $data->numero_cuenta ?></td>
		        	<td><?= $data->codigo ?></td>
		        	<td><img width="100" src="<?=base_url()?>/foto/<?=$data->capture?>"  /></td>
		        	<td><a class="btn btn-danger" href="<?php echo base_url();?>welcome/delete/<?php echo $data->id_transferencia;?>">Eliminar</a>
	                
	                <a class="btn btn-info" href="<?php echo base_url();?>welcome/edit/<?php echo $data->id_transferencia;?>">Editar</a>

		        	</td>
		        	
		        </tr>
	       <?php endforeach; ?>
		</table>
    </div>
		<?php else: ?>
			No se encontrarón Datos
		<?php endif; ?> 

</body>
</html>

<script type="text/javascript">
    (function(document) {
      'use strict';

      var LightTableFilter = (function(Arr) {

        var _input;

        function _onInputEvent(e) {
          _input = e.target;
          var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
          Arr.forEach.call(tables, function(table) {
            Arr.forEach.call(table.tBodies, function(tbody) {
              Arr.forEach.call(tbody.rows, _filter);
            });
          });
        }

        function _filter(row) {
          var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
          row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
        }

        return {
          init: function() {
            var inputs = document.getElementsByClassName('light-table-filter');
            Arr.forEach.call(inputs, function(input) {
              input.oninput = _onInputEvent;
            });
          }
        };
      })(Array.prototype);

      document.addEventListener('readystatechange', function() {
        if (document.readyState === 'complete') {
          LightTableFilter.init();
        }
      });

    })(document);
    </script>