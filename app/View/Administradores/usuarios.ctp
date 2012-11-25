<div>
    <ul class="breadcrumb">
        <li><?php echo $this->Html->link('Panel','');?> <span class="divider">/</span></li>
        <li class="active">Proyectos</li>
    </ul>
</div>
<div id="main-content">
<div class="row-fluid">
	<div class="span12 widget">
		<div class="widget-header">
			<span class="title">
				<i class="icon-tag"></i>
				Gestión de Usuarios
			</span>
		</div>
			<div class="widget-content">
				<table class="table table-striped table-bordered dataTable">
					<thead>
						<th>Id</th>
						<th>Nombres</th>
						<th>Mail</th>
						<th>twitter</th>
						<th>facebbok</th>
						<th>Pais</th>
						<th>Privielgios</th>
						<th>Acciones</th>
					</thead> 
					<tbody>
						<?php foreach ($usuarios as $usuario):?>
						<tr>
							<td><?php echo $usuario['Usuario']['id']; ?></td>
							<td><?php echo $usuario['Usuario']['full_nombre']; ?></td>
							<td><?php echo $usuario['Usuario']['email']; ?></td>
							<td><?php echo $usuario['Usuario']['twitter']; ?></td>
							<td><?php echo $usuario['Usuario']['facebook']; ?></td>
							<td><?php echo $usuario['Paise']['nombre_pais']; ?></td>
							<td><?php echo $usuario['Tipousuario']['tipo_usuario']; ?></td>
							<td align="center">
								<?php 
								if($usuario['Usuario']['estado']==0) {echo $this->Html->link('<i>ACTIVAR</i>',array('action'=>'aprobarusu',$usuario['Usuario']['id'], $usuario['Usuario']['estado']),array('title'=>'Click para aprobar','escape'=>false,'class'=>'btn btn-primary'));}
								else
									{echo $this->Html->link('<i>DESACTIVAR</i>',array('action'=>'aprobarusu',$usuario['Usuario']['id'],$usuario['Usuario']['estado']),array('title'=>'Click para desaprobar','escape'=>false,'class'=>'btn btn-danger'));}
								?>
								<?php echo $this->Html->link('<i class="icon-edit"></i>',array('action'=>'editarusuario',$usuario['Usuario']['id']),array('title'=>'Editar','escape'=>false,'class'=>'btn btn-info'));?>
								<?php echo $this->Form->postLink('<i class="icon-trash"></i>',
									array('action' => 'eliminarusuario', $usuario['Usuario']['id']),
									array('class'=>'btn btn-warning','title'=>'Eliminar','escape'=>false,'confirm' => '¿Está seguro que desea eliminar?')); ?>
								<?php echo $this->Html->link('<i class="icon-zoom-in"></i>',array('action'=>'verproyecto',$usuario['Usuario']['id']),array('title'=>'Ver detallado','escape'=>false,'class'=>'btn btn-success'));?>

            				</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
	</div>
</div>
</div>

