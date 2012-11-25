<div class="row-fluid">
	<div class=" widget">
		<div class="widget-header">
			<span class="title">Registro de Usuarios</span>
				</div>
					<div class="widget-content form-container">
				<?php echo $this->Form->create('Usuario',array('url'=>'/Administradores/agregarusuario/' ,'class'=>'form-vertical'));?>
				<?php
					echo $this->Form->input('full_nombre',array('label'=>'Nombre completo','required','div'=>'control-group','between'=>'<div class="controls">','after'=>'</div>')); 
					echo $this->Form->input('email',array('label'=>'Email','type'=>'email','required','div'=>'control-group','between'=>'<div class="controls">','after'=>'</div>'));
					echo $this->Form->input('usuario',array('label'=>'Usuario','required','div'=>'control-group','between'=>'<div class="controls">','after'=>'</div>')); 
					echo $this->Form->input('password',array('label'=>'Password','required','div'=>'control-group','between'=>'<div class="controls">','after'=>'</div>'));
					echo $this->Form->input('tipousuario_id',array('label'=>'Tipo de usuario','required','div'=>'control-group','between'=>'<div class="controls">','after'=>'</div>')); 
					echo '<div class="form-actions">';
					echo $this->Form->button('Registrar',array('type'=>'submit','class'=>'btn btn-danger btn-block btn-large'));	
					echo $this->Form->end(); 
				?>
				</div>
	</div>
</div>
