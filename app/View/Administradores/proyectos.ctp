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
				Proyectos en curso
			</span>
		</div>
			<div class="widget-content">
				<table id="datatable" class="table table-striped table-bordered bootstrap-datatable dataTable">
					<thead>
						<th>Id</th>
						<th>Titulo</th>
						<th>Fecha</th>
						<th>Categoría</th>
						<th>Fundador</th>
						<th>Acciones</th>
					</thead> 
					<tbody>
						<?php foreach ($proyectos as $proyecto):?>
						<tr>
							<td><?php echo $proyecto['Proyecto']['id']; ?></td>
							<td><?php echo $proyecto['Proyecto']['titulo']; ?></td>
							<td><?php echo $proyecto['Proyecto']['fecha']; ?></td>
							<td><?php echo $proyecto['Categoria']['categoria']; ?></td>
							<td><?php echo $proyecto['Usuario']['full_nombre']; ?></td>

							<td align="center">
								<?php 
								if($proyecto['Proyecto']['estado']==0) {echo $this->Html->link('<i>APRUEBO</i>',array('action'=>'aprobarpy',$proyecto['Proyecto']['id'],$proyecto['Proyecto']['estado']),array('title'=>'Click para aprobar','escape'=>false,'class'=>'btn btn-primary'));}
								else
									{echo $this->Html->link('<i>DESAPRUEBO</i>',array('action'=>'aprobarpy',$proyecto['Proyecto']['id'],$proyecto['Proyecto']['estado']),array('title'=>'Click para desaprobar','escape'=>false,'class'=>'btn btn-danger'));}
								?>
								<?php echo $this->Html->link('<i class="icon-edit"></i>',array('action'=>'proyecto_edit',$proyecto['Proyecto']['id']),array('title'=>'Editar','escape'=>false,'class'=>'btn btn-info'));?>
								<?php echo $this->Form->postLink('<i class="icon-trash"></i>',
									array('action' => 'proyecto_delete', $proyecto['Proyecto']['id']),
									array('class'=>'btn btn-warning','title'=>'Eliminar','escape'=>false,'confirm' => '¿Está seguro que desea eliminar?')); ?>
								<?php echo $this->Html->link('<i class="icon-zoom-in"></i>',array('action'=>'verproyecto',$proyecto['Proyecto']['id']),array('title'=>'Ver detallado','escape'=>false,'class'=>'btn btn-success'));?>

            				</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
	</div>
</div>
</div>

