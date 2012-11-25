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

    <?php echo $this->Html->css(array('moon/icomoon/style','bootstrap','bootstrap-responsive.min','moon/mooncake.min','moon/error.min','moon/jquery.ui.all','moon/jquery.ui.autocomplete','moon/jquery.ui.base','moon/jquery.ui.button','moon/jquery.ui.core','moon/jquery.ui.datepicker','moon/jquery.ui.dialog','moon/jquery.ui.progressbar','moon/jquery.ui.resizable','moon/jquery.ui.selectable','moon/jquery.ui.slider','moon/jquery.ui.tabs','moon/jquery.ui.theme')); 
		
        echo $this->Html->script(array('jquery','bootstrap.min','moon/js/template','moon/js/setup','moon/uniform/jquery.uniform.min','moon/tweet/jquery.tweet.min','moon/validate/jquery.validate.min','moon/rating/jquery.rating.min','moon/demo/alerts','moon/demo/boxes','moon/demo/calendar','moon/demo/charts','moon/demo/contact','moon/demo/dashboard','moon/demo/form','moon/demo/form_validation','moon/demo/statistic','moon/demo/ui_comps','moon/demo/widgets','moon/datatables/jquery.dataTables.min','moon/datatables/TableTools/js/TableTools.min','moon/datatables/dataTables.bootstrap','moon/datatables/jquery.dataTables.columnFilter','funciones'));
	?>
	
	<?php echo $scripts_for_layout;?>
</head>
<body>
<?php $menu = $this->params['controller'];
	  $action = $this->params['action'];?>
    <div id="customizer">
        <div id="layoutMode" >
            <label class="checkbox" style="text-align: center;">Administración Informáticos Sin Fronteras - Latinoamerica para el Mundo</label>
        </div>
    </div>

	<div id="wrapper">
        <header id="header" class="navbar navbar-inverse">
            <div class="navbar-inner">
                <div class="container">
					<div class="brand-wrap pull-left">
						<div class="brand-img">
							<a class="brand" href="#">
								<img src="assets/images/logo.png" alt="" />
							</a>
						</div>
					</div>
                    
                    <div id="header-right" class="clearfix">
						<div id="nav-toggle" data-toggle="collapse" data-target="#navigation" class="collapsed">
							<i class="icon-caret-down"></i>
						</div>
						<div id="header-search">
							<span id="search-toggle" data-toggle="dropdown">
								<i class="icon-search"></i>
							</span>
							<form class="navbar-search" />
								<input type="text" class="search-query" placeholder="Search" />
							</form>
						</div>
						<div id="dropdown-lists">
							<a class="item" href="#">
								<span class="item-icon"><i class="icon-exclamation-sign"></i></span>
								<span class="item-label">Notificaciones</span>
								<span class="item-count">4</span>
							</a>
							<a class="item" href="mail.html">
								<span class="item-icon"><i class="icon-envelope"></i></span>
								<span class="item-label">Mensajes</span>
								<span class="item-count">16</span>
							</a>
						</div>
                        
                        <div id="header-functions" class="pull-right">
                        	<div id="user-info" class="clearfix">
                                <span class="info">
                                	Bienvenido
                                    <span class="name">Administrador</span>
                                </span>
                            	<div class="avatar">
                                	<a class="dropdown-toggle" href="#" data-toggle="dropdown">
                                    	<img src="assets/images/pp.jpg" alt="Avatar" />
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                    	<li><a href="profile.html"><i class="icol-user"></i> Mi Perfil</a></li>
                                    	<li><a href="#"><i class="icol-layout"></i> Mis mensajes</a></li>                                        
                                        <li class="divider"></li>
                                        <li><a href="../Usuarios/logout"><i class="icol-key"></i> Salir</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="logout-ribbon">
                            	<a href="../Usuarios/logout"><i class="icon-off"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <div id="content-wrap">
        	<div id="content">
            	<div id="content-outer">
                	<div id="content-inner">
                    	<aside id="sidebar">
                        	<nav id="navigation" class="collapse">
                            	<ul>
                                	<li class="active">
                                    	<span title="General">
                                    		<i class="icon-home"></i>
											<span class="nav-title">General</span>
                                        </span>
                                    	<ul class="inner-nav">
                                        	<li class="active"><a href="dashboard.html"><i class="icol-dashboard"></i> Dashboard</a></li>
                                        	<li><a href="#"><i class="icol-calendar-2"></i> Calendario</a></li>
                                            <li><a href="proyectos"><i class="icol-lifebuoy"></i> Proyectos</a></li>
                                        	<li><a href="Administradores"><i class="icol-grid"></i> Administradores</a></li>
                                        	<li><a href="#"><i class="icol-font"></i>Usuarios</a></li>
                                        </ul>
                                    </li>
                                	<li>
                                    	<span title="Table">
                                    		<i class="icon-table"></i>
											<span class="nav-title">Table</span>
                                        </span>
                                    	<ul class="inner-nav">
                                        	<li><a href="tables.html"><i class="icol-style"></i> Static Tables</a></li>
                                        	<li><a href="responsive_tables.html"><i class="icol-hammer-screwdriver"></i> Responsive Tables</a></li>
                                        	<li><a href="data_tables.html"><i class="icol-table"></i> Data Tables</a></li>
                                            <li><a href="detail_view.html"><i class="icol-eye"></i> Detail View Table</a></li>
                                        </ul>
                                    </li>
                                	<li>
                                    	<span title="Statistic">
                                        	<i class="icon-graph"></i>
											<span class="nav-title">Statistic</span>
                                        </span>
                                    	<ul class="inner-nav">
                                        	<li><a href="statistic.html"><i class="icol-chart-curve"></i> Statistical Elements</a></li>
                                        	<li><a href="charts_gallery.html"><i class="icol-chart-pie"></i> Charts Gallery</a></li>
                                        </ul>
                                    </li>
                                	<li>
                                    	<span title="Form">
                                        	<i class="icon-list"></i>
											<span class="nav-title">Form</span>
                                        </span>
                                    	<ul class="inner-nav">
                                        	<li><a href="form_layouts.html"><i class="icol-layout-select"></i> Form Layouts</a></li>
                                        	<li><a href="form_elements.html"><i class="icol-ui-text-field-password"></i> Form Elements</a></li>
											<li><a href="form_wizard.html"><i class="icol-wand"></i> Form Wizard</a></li>
                                        	<li><a href="form_validation.html"><i class="icol-accept"></i> Form Validation</a></li>
                                            <li><a href="wysiwyg.html"><i class="icol-pencil"></i> WYSIWYG</a></li>
                                        </ul>
                                    </li>
                                	<li>
                                    	<span title="Elements">
                                        	<i class="icon-cogs"></i>
											<span class="nav-title">Elements</span>
                                        </span>
                                    	<ul class="inner-nav">
                                        	<li><a href="ui_bootstrap.html"><i class="icol-ui-tab-content"></i> Bootstrap Elements</a></li>
											<li><a href="ui_components.html"><i class="icol-pipette"></i> Other Elements</a></li>
                                        	<li><a href="alerts.html"><i class="icol-error"></i> Alerts and Notifications</a></li>
											<li><a href="boxes.html"><i class="icol-cog"></i> Widget Boxes</a></li>
                                        	<li><a href="buttons.html"><i class="icol-joystick"></i> Buttons</a></li>
                                        	<li><a href="file_uploader.html"><i class="icol-computer"></i> File Uploader</a></li>
											<li><a href="file_manager.html"><i class="icol-databases"></i> File Manager</a>
                                        </li></ul>
                                    
                                	<li>
                                    	<span title="Extra">
                                        	<i class="icon-gift"></i>
											<span class="nav-title">Extra</span>
                                        </span>
                                        <ul class="inner-nav">
                                            <li><a href="profile.html"><i class="icol-user"></i> Profile Page</a></li>
                                            <li><a href="mail.html"><i class="icol-email"></i> Mail Page</a></li>
                                            <li><a href="widgets.html"><i class="icol-ruby"></i> Custom Widgets</a></li>
                                            <li><a href="gallery.html"><i class="icol-images"></i> Image Gallery</a>
                                            </li><li><a href="contacts.html"><i class="icol-vcard"></i> Contact List</a></li>
                                            <li><a href="404.html"><i class="icol-error"></i> Error Page (404)</a></li>
                                        </ul>
                                    

                                    <!-- Documentation -->
                                    <li>
                                        <a href="documentation/index.html" title="Documentation">
                                            <i class="icon-book"></i>
                                            <span class="nav-title">Docs</span>
                                        </a>
                                    </li>
                                    <!-- End -->
                                </li></li></ul>
                            </nav>
                        </aside>
                        <div id="sidebar-separator"></div>
                        
                        <section id="main" class="clearfix">
                        <div id="main-content">

                    			<?php echo $this->Session->flash(); ?>
                    			<?php echo $content_for_layout; ?>
                        </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <footer id="footer">
            <div class="footer-left">© 2012 Proyectos de Informática, Sistemas y Computación con Orientación Internacional<br />
		Copyright © Proyecto Informáticos sin fronteras - versión 2.0<br />
		Proyectos Internacionales</div>
            <div class="footer-right"><p>Copyright 2012. All Rights Reserved.</p></div>
        </footer>
        
    </div>

<?php echo $this->Html->script(array('funciones')); ?>
</body>
</html>