<div class="row-fluid">
	<div class="span12">
		<div id="slider-header">
			<div id="myCarousel" class="carousel slide">
				<!-- Carousel items -->
    			<div class="carousel-inner">
    				<div class="active item">
    					<?php echo $this->Html->image('estudiantes.jpg');?>
							<div class="carousel-caption">
								<h4>Proyectos</h4>
								<p>Un lugar para iniciar nuevos Proyectos Informaticos</p>
							</div>
    				</div>
    				<div class="item">
    					<?php echo $this->Html->image('jovenes.jpg');?>
							<div class="carousel-caption">
								<h4>Proyectos</h4>
								<p>Un lugar para iniciar nuevos Proyectos Informaticos</p>
							</div>
    				</div>
    			</div>
    				<!-- Carousel nav -->
    			<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    			<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    		</div>
    	</div>					
	</div>			
</div>

<div class="row-fluid">
	<div class="span8">
		<h3 class="sub">
			<span>Últimas publicaciones</span>
		</h3>
				
		<ul class="nav nav-tabs" id="myTab">
			<?php $i=1;?>
			<?php foreach ($publicaciones as $publicacion): ?>
				<?php $id = $publicacion['Publicacione']['id'];?>
				<?php if($i==1):?>
				<li class="active"><?php echo $this->Html->link('<i class="icon-star"></i> Publicación '.$id,"#publicacion-$id",array('escape'=>false));?></li>
				<?php else:?>
				<li><?php echo $this->Html->link('<i class="icon-star"></i> Publicación '.$id,"#publicacion-$id",array('escape'=>false));?></li>
				<?php endif;?>
			<?php $i=$i+1;?>
			<?php endforeach;?>
		</ul>

		<div class="tab-content">
			<?php $i=0;?>
			<?php foreach ($publicaciones as $publicacion): ?>
				<?php $id = $publicacion['Publicacione']['id'];?>
				<?php if($i==0):?>
				<div class="tab-pane active" id="publicacion-<?php echo $id ?>">
					<h4><?php echo $publicacion['Publicacione']['titulo'];?></h4>
					<span class="date">Publicado el <?php echo $publicacion['Publicacione']['fecha'];?> </span>

					<p><?php echo $publicacion['Publicacione']['descripcion'];?></p>
							
					<a class="btn btn-success" href="#">
						<span>Leer más</span>
					</a>
				</div>
				<?php else:?>
				<div class="tab-pane" id="publicacion-<?php echo $id ?>">
					<h4><?php echo $publicacion['Publicacione']['titulo'];?></h4>
					<span class="date">Publicado el <?php echo $publicacion['Publicacione']['fecha'];?> </span>
					
					<p><?php echo $publicacion['Publicacione']['descripcion'];?></p>
							
					<a class="btn btn-success" href="#">
						<span>Leer más</span>
					</a>
				</div>
				<?php endif;?>
			<?php $i=$i+1;?>
			<?php endforeach;?>
		</div>
	</div>
	
	<div class="span4">
		<h3 class="sub">
			<span>Últimos comentarios</span>
		</h3>
		
		<ul class="replies">
			<?php $i=1;?>
			<?php foreach ($comentarios as $comentario):?>
			<?php switch ($i) {
				case '1': $class='bg-color-orange'; $color='color-orange';break;
				case '2': $class='bg-color-greenLight'; $color='color-greenLight';break;
				case '3': $class='bg-color-yellow'; $color='color-yellow' ;break;
				default: break;
			}?>
			    <li class="<?php echo $class;?>">
			    <b class="sticker sticker-left sticker-<?php echo $color;?>"></b>
			    <div class="avatar"><?php echo $this->Html->image('myface.jpg');?></div>
			    <div class="reply">
				    <div class="author"><?php echo $comentario['Usuario']['full_nombre'];?></div>
				    <div class="text"><?php echo $comentario['Comentario']['comentario'];?></div>
			    </div>
			    </li>
			   <?php $i=$i+1;?>
			<?php endforeach;?>
		</ul>
	</div>	
</div>

<div class="row-fluid">
	<div class="span12 page-header">
		<h3>Últimos proyectos publicados</h3>
		<span>Conoce sus propuestas y ¡apóyalos!</span>
	</div>
</div>

<div id="proyect">
			<?php if(!empty($proyectos)):?>
				<?php foreach ($proyectos as $proyecto):?>
				<div class="proyect-box well">
					<div class="project-card">
						<?php echo $this->Html->image('photo-little.jpg');?>
						<div class="projectinfo">
							<?php $id = $proyecto['Proyecto']['id'];?>
							<a href="../Editores/proyecto_view/<?php echo $id;?>" class="titulo"><?php echo $proyecto['Proyecto']['titulo']; ?></a>
							<span class="project_owner"><?php echo $proyecto['Usuario']['full_nombre']; ?></span>
							<p>
						 		<?php echo $proyecto['Proyecto']['descripcion']; ?>
							</p>	 
						</div>
					</div>
				</div>
			
			<?php endforeach; ?>
		<?php endif; ?>

	<div align="center">
		<?php echo $this->Html->link('Explora proyectos',array('controller'=>'Web','action'=>'proyectos'),array('class'=>'btn btn-success'));?>
	</div>
</div>

	


<div class="row-fluid">
	<div class="span12 page-header">
		<h3>¿Qué es Informáticos sin Fronteras?</h3>
	</div>
</div>
<div class="row-fluid">
	<div class="span12">
		<p>Informáticos sin Fronteras es un método alternativo para financiar tus buenas ideas o proyectos. Mientras más creativo eres, más posibilidades tendrás de conseguir el financiamiento que necesitas.</p>
	</div>
</div>
<div class="row-fluid">
	<div class="span4 well">
		<span class="wic1"></span>
		<div class="blok-he">
			<h3>1. Creadores <span>comparten su idea/proyecto</span></h3>
			<p> Las personas con espíritu emprendedor ingresan su creación, para darla a conocer a la comunidad Lincipit. Cada proyecto debe tener un monto mínimo a recaudar que necesita alcanzar para ser financiado. </p>
		</div>
	</div>
	<div class="span4 well">
		<span class="wic2"></span>
		<div class="blok-he">
			<h3>2. <span>Los interesados apoyan</span> con dinero</h3>
			<p> La comunidad de colaboradores apoya los proyectos/ideas a cambio de recompensas. Éstas pueden ser de todo tipo: desde un simple gracias a un producto exclusivo que será entregado por el creador. </p>
		</div>
	</div>
	<div class="span4 well">
		<span class="wic3"></span>
		<div class="blok-he">
			<h3>3. Las ideas/proyectos <span>son financiadas </span></h3>
			<p> Si el monto mínimo establecido se logra o supera, el creador recibe el dinero de parte de los colaboradores. Si el mínimo no es completado el dinero se devuelve automáticamente a los colaboradores. </p>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div align="center">
	<?php echo $this->Html->link('Ingresar proyecto','#',array('class'=>'btn btn-success'));?>
	</div>
</div>

<div class="row-fluid">
	<div class="span12 page-header">
		<h3>Conéctate</h3>
	</div>
</div>
<div class="row-fluid">
	<div id="social-projects">
		<div class="container tout">
			<div class="connect-box">
				<div class="top">
					<div class="left">
						<h3>Puedes Unirte a varios proyectos con tu amigos!</h3>
						<p>Quiere saber como?
							<a href="/friends?ref=home_social">mas detalles aqui.</a>
						</p>
					</div>
					<div class="right">
						<div class="facebook_connect_wrap big">
							<div class="facebook_connect_wrap big">
								Connectar con Facebook
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>
</div>


<?php //print_r($comentarios);?>
<script type="text/javascript">
	$('#myTab a').click(function (e) {
    	e.preventDefault();
    	$(this).tab('show');
    })
</script>