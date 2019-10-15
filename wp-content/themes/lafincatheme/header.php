<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
		<link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!-- wrapper -->
			<!-- header -->
			<header class="nav-page">
			    <div class="container">
			        <div class="row">
			            <nav class="col-12 navbar navbar-expand-lg px-0">
			            	<div class="col-lg-6 first-section-nav p-0">
				                <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="img-fluid"></a>
				                <?php get_template_part('searchform'); ?>
				                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				                    <span class="bar-menu"></span>
				                    <span class="bar-menu"></span>
				                    <span class="bar-menu"></span>
				                </button>   
			            	</div>
			            	<div class="col-lg-6 second-section-nav p-0">
				                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
				                    <?php
					                    $defaults = array(
					                    	'theme_location'  => 'principal-menu',
					                        'container'       => 'false',
					                        'echo'            => true,
					                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					                        'menu_class'            => 'navbar-nav'
					                    );
				                    wp_nav_menu( $defaults );
				                    ?>
				                </div> 
			            	</div>
			            </nav>
			        </div>
			    </div>
			</header>
			<!-- /header -->
