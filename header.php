<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Webclues Infotech">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="keywords" content="HTML,CSS,XML,JavaScript">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?></title>

	<?php wp_head(); ?>

	<script type="text/javascript"> var ajax_url = "<?php echo admin_url('admin-ajax.php'); ?>"; </script>

	<!--[if lt IE 9]>
	<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body <?php body_class(); ?> id="page-top">
	<header class="header">
		<nav class="navbar navbar-inverse navbar-fixed-top navbar-as">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="navbar-brand">
						<?php the_custom_logo(); ?>
					</div>
				</div>
				<div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
					<button type="button" class="navbar-toggle collapsed navbar-clsr" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><span class="glyphicon glyphicon-remove"></span></button>
					<?php
						wp_nav_menu(array(
							'theme_location'=> 'header-menu',
							'container'     => false,
							'menu_class'    => 'nav navbar-nav navbar-right'
						));
					?>
				</div>
			</div>
		</nav>
	</header>

