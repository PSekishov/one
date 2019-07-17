<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Document</title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?> >
		
		<header class="header">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<nav class="navbar navbar-expand-lg navbar-light bg-light">
							
							<a class="navbar-brand" href="/"><?php bloginfo('name'); ?></a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
							</button>
							<?php do_action('main_menu'); ?>
						</nav>
						
					</div>
				</div>
			</div>
		</header>