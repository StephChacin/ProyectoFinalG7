<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<?php wp_head() ?>
</head>

<body>
	
	<!--Navbar-->
	<nav class="navbar navbar-default">
			<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button btn_collapsed" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<a class="navbar-nav navbar-brand" href="index.php"><img class="navbar_logo" src="<?php bloginfo('template_url')?>/assets/images/LOGO_SAIKYOU3.png" alt="Logo Clases de Japonés"></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
<!-- 				<li><a href="<?php bloginfo('url') ?>/index.php">HOME</a></li>
					<li><a href="<?php bloginfo('url') ?>/conocenos">CONÓCENOS</a></li>
					<li><a href="<?php bloginfo('url') ?>/clases">CLASES</a></li>
					<li><a href="<?php bloginfo('url') ?>/la_tienda">TIENDA</a></li>
					<li><a href="<?php bloginfo('url') ?>/index.php#contact">CONTACTO</a></li>
 -->
					<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
						<?php wp_nav_menu( array(
							'theme_location' => 'header-menu',
							'container' => false,
							'menu_class' => 'nav navbar-nav navbar-right'
						) ); ?>
					<?php } ?>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>