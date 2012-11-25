<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Informáticos sin fronteras</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="Informáticos sin fronteras" />
	<meta name="author" content="" />
	<?php echo $this->Html->meta('icon', $this->Html->url('../img/favicon.ico')); ?>
	<!-- Le styles -->
    <?php echo $this->Html->css(array('bootstrap','cpanel','bootstrap-responsive.min')); 
		  echo $this->Html->script(array('jquery','bootstrap.min'));
	?>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php echo $scripts_for_layout;?>
	<style type="text/css">
	body{
		padding-top: 0px;
		background: #fff;
	}
	</style>
</head>
<body>
	<div class="header-shadow"></div>
	<div class="container">
		<div class="row-fluid">
			<div class="span12">
				<div class="navbar pull-right header-nav">
					<ul class="nav">
						<li><?php echo $this->Html->link('Ingresa',array('controller'=>'Usuarios','action'=>'login'));?></li>
						<li><?php echo $this->Html->link('Regístrate',array('controller'=>'Usuarios','action'=>'registro'));?></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="row-fluid">
			<div class="span6">
				<h3 class="titulo">INFORMÁTICOS SIN FRONTERAS</h3>
			</div>
			<div class="span6">
				<div class="row-fluid">
					<div class="span12">
						<form class="form-search header-search">
							<div class="input-append">
								<input class="input-large search-query" type="text" placeholder="Buscar...">
								<button class="btn" type="submit">search</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<br />
		<div class="row-fluid">
			<div class="span12">
				<div class="navbar main-nav">
					<div class="navbar-inner">
						<div class="container">
							<a class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse">
							</a>
							<div class="nav-collapse">
								<ul class="nav">
									<li class="active">
										<?php echo $this->Html->link('<i class="icon-home icon-white"></i>',array('controller'=>'Web','action'=>'index'),array('escape'=>false));?>
									</li>
									<li class="divider-vertical"></li>
									<li>
										<a href="#">¿Quiénes somos?</a>
									</li>
									<li>
										<?php echo $this->Html->link('Explora proyectos',array('controller'=>'Web','action'=>'proyectos'));?>
									</li>
									<li>
										<a href="#">Ingresar proyecto</a>
									</li>
									<li>
										<a href="#">¿Cómo funciona?</a>
									</li>
									<li>
										<a href="#">Tutoriales</a>
									</li>
									<li>
										<a href="#">Contacto</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php echo $this->Session->flash(); ?>
		<?php echo $content_for_layout; ?>
	</div>
	<div id="footer">
		© 2012 Proyecto Informaticos sin Fronteras <br />
		Proyectos de Informática, Sistemas y Computación con Orientación Internacional<br />
		admin@informaticos.com 
	</div>
</body>

	<script type="text/javascript">
		$('#carousel').elastislide({
			imageW 	: 180,
			minItems	: 5
		});
		
		$('#myTab a').click(function (e) {
			e.preventDefault();
			$(this).tab('show');
	    })
	</script>

</html>
