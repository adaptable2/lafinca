<?php get_header(); ?>
<section class="banner banner-receta  pb-5" id="recetas">
	<div class="container">
		<div class="row vh-100">
			<div class="col-12 flex-column justify-content-center color-white d-flex text-center uppercase">
				<img src="<?php echo get_template_directory_uri(); ?>/img/banner/mazorca.png" alt="" class="img-banner mazorca">
				<img src="<?php echo get_template_directory_uri(); ?>/img/banner/colibri.png" alt="" class="img-banner colibri">
				<img src="<?php echo get_template_directory_uri(); ?>/img/banner/nube.png" alt="" class="img-banner nuber">
				<img src="<?php echo get_template_directory_uri(); ?>/img/banner/maiz.png" alt="" class="img-banner maizr">
				<img src="<?php echo get_template_directory_uri(); ?>/img/recetas/hoja1.png" class="img-banner hojar1r">
				<img src="<?php echo get_template_directory_uri(); ?>/img/recetas/hoja1.png" class="img-banner hojar2r">
				<img src="<?php echo get_template_directory_uri(); ?>/img/banner/arepa1.png" alt="" class="img-banner arepa1r">
				<img src="<?php echo get_template_directory_uri(); ?>/img/banner/arepa2.png" alt="" class="img-banner arepa2r">
				<h2>Nosotros le ponemos</h2>
				<h1>maíz
					<span>amor, sal y agua</span></h1>
					<h2>¿tu que le pones?</h2>
				</div>
			</div>
		</div>
	</section>
	<div class="container">
		<div class="row py-5">
			<div class="col-lg-12 subtitulo color-verdeOscuro" data-aos="fade-right">
				<h4>Nuestras</h4>
				<h2>recetas</h2>
			</div>
			<?php 
		    // Argumentos para una busqueda de post type
				$args = array(
				      'post_type' => 'recetas', // Nombre del post type
				      'order' => 'ASC'
				  );
				$recetas = new WP_Query($args);
				if ($recetas->posts):
		      // Foreach para recorrer el resultado de la busqueda
					foreach ($recetas->posts as $receta):
						$receta_title = $receta->nombre_receta;
						$receta_desc = $receta->post_content;
						$receta_preparacion = $receta->preparacion;
						$receta_img = wp_get_attachment_url( get_post_thumbnail_id($receta->ID, 'full') ); // Url de la imagen en tamaño Full
						$contentrece = wpautop($receta_desc, true);
						$contentpre = wpautop($receta_preparacion, true);
			?>
			<div class="offset-lg-1 col-lg-5 text-right img-receta" data-aos="fade-right">
				<img src="<?php echo $receta_img; ?>">
			</div>
			<div class="col-lg-6" data-aos="fade-left">
				<div class="col-lg-12 subtitulo color-verdeOscuro pb-2">
					<?php echo $receta_title;?>
				</div>
				<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-3 color-verdeOscuro">
							<p>Ingredientes</p>
						</div>
						<div class="col-lg-9">
							<?php echo $contentrece;?>
						</div>
						<hr class="w-100 d-block">
						<div class="col-lg-3 color-verdeOscuro">
							<p>Preparación</p>
						</div>
						<div class="col-lg-9">
							<?php echo $contentpre;?>
						</div>
					</div>
				</div>
			</div>
			<hr class="d-block w-100">
			<?php
				endforeach;
				endif;
			?>
		</div>
	</div>
<?php get_footer(); ?>