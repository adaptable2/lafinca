 <?php get_header(); ?>
<section class="banner pb-5">
 	<div class="container">
 		<div class="row vh-100">
 			<div class="col-12 flex-column justify-content-around color-white d-flex text-center uppercase">
 				<img src="<?php echo get_template_directory_uri(); ?>/img/banner/mazorca.png" alt="" class="img-banner mazorca">
 				<img src="<?php echo get_template_directory_uri(); ?>/img/banner/campecino.png" alt="" class="img-banner campecino">
 				<img src="<?php echo get_template_directory_uri(); ?>/img/banner/colibri.png" alt="" class="img-banner colibri">
 				<img src="<?php echo get_template_directory_uri(); ?>/img/banner/nube.png" alt="" class="img-banner nube">
 				<img src="<?php echo get_template_directory_uri(); ?>/img/banner/maiz.png" alt="" class="img-banner maiz">
 				<img src="<?php echo get_template_directory_uri(); ?>/img/banner/arepa1.png" alt="" class="img-banner arepa1">
 				<img src="<?php echo get_template_directory_uri(); ?>/img/banner/arepa2.png" alt="" class="img-banner arepa2">
 				<h2 class="arco" data-aos="fade-down">arepas de la</h2>
 				<h1 data-aos="fade-left">FINCA</h1>
 				<h2 data-aos="fade-up">desde 1983</h2>
 			</div>
 		</div>
 	</div>
</section>
<section class="productos py-5" id="productos" >
 	<div class="container-fluid">
 		<div class="row justify-content-center">
			<div class="col-12 col-md-10" data-aos="fade-right">
				<div class="row align-items-center">
					<div class="col-lg-4 color-verdeOscuro">
						<h2>Productos</h2>
					</div>
					<div class="col-lg-8">
						<h2 class="title-space color-celeste">
							frescos
						</h2>
					</div>
					<div class="col-lg-12">
						<a href="http://localhost/lafinca/producto" class='vermas'>Ver todas</a>
					</div>
				</div>
			</div>
 			<div class="col-12 col-md-10 py-md-5" data-aos="fade-up" >
 				<div class="swiper-container carousel">
 					<div class="swiper-wrapper">
		 				<?php 
							$arg = array(
							    'post_type' => 'producto', // Nombre del post type
							    'order' => 'ASC',
							);
							$filtros = new WP_Query($arg);
							if($filtros):
								foreach ($filtros->posts as $filtro):
									$filtro_name = $filtro->post_title;
							      	$filtro_img = wp_get_attachment_url( get_post_thumbnail_id($filtro->ID, 'full') ); // Url de la imagen en tamaño Full
				      	?>
 						<div class="poroducto-slide swiper-slide">
 							<h2><?php echo $filtro_name;?></h2>
 							<a href="http://localhost/lafinca/producto" class="d-block">
 								<img src="<?php echo $filtro_img; ?>" class="img-fluid">
 							</a>
 						</div>
					<?php
						endforeach;
						endif;
					?>
 					</div>
				    <!-- Add Pagination -->
				    <div class="swiper-pagination"></div>

				    <!-- Add Arrows -->
				    <div class="swiper-button-prev"></div>
				    <div class="swiper-button-next"></div> 					
 				</div>
 			</div>
 		</div>
 	</div>
 </section>
<section class="nuestra-empresa container py-5" id="nosotros">
 	<div class="row">
 		<?php 
			    // Argumentos para una busqueda de post type
 		$args = array(
			      'post_type' => 'historia', // Nombre del post type
			      'order' => 'ASC'
			  );
 		$historias = new WP_Query($args);
 		if ($historias->posts):
			      // Foreach para recorrer el resultado de la busqueda
 			foreach ($historias->posts as $historia):
 				$historia_name = $historia->post_title;
 				$historia_sub = $historia->sub_titulo;
 				$historia_desc = $historia->post_content;
 				$historia_firma = $historia->imagen_firma;
 				$contentHist = wpautop($historia_desc, true);
			          $historia_img = wp_get_attachment_url( get_post_thumbnail_id($historia->ID, 'full') ); // Url de la imagen en tamaño Full
			          ?>
			          <div class="col-md-12 order-1 order-lg-0" data-aos="fade-right">
			          	<h2 class="title-space color-celeste"><?php echo $historia_name;?></h2>
			          </div>
			          <div class="col-lg-2 subtitulo color-verdeOscuro order-0 order-lg-1" data-aos="fade-right">
			          	<?php echo $historia_sub;?>
			          </div>
			          <div class="col-lg-5 order-2">
			          	<p><?php echo $contentHist;?></p>
			          </div>
			          <div class="col-lg-5 imagen order-3">
			          	<div class="blue-block" data-aos="fade-up">
			          	</div>
			          	<div class="img-historia" data-aos="fade-left">
			          		<img src="<?php echo $historia_firma['guid'];?>" alt="" class="img-fluid firma">
			          		<img src="<?php echo $historia_img;?>" alt="" class="img-fluid">
			          	</div>
			          </div>
			          <?php
			      endforeach;
			  endif;
			  ?>
			</div>
		</section>
		<section id="compromiso" class="compromiso container">
			<div class="row justify-content-end">
				<?php 
		    // Argumentos para una busqueda de post type
				$args = array(
		      'post_type' => 'mision-vision', // Nombre del post type
		      'order' => 'ASC'
		  );
				$compromisos = new WP_Query($args);
				if ($compromisos->posts):
		      // Foreach para recorrer el resultado de la busqueda
					foreach ($compromisos->posts as $compromiso):
						$compromiso_name = $compromiso->post_title;
						$compromiso_namem = $compromiso->titulo_mision;
						$compromiso_descm = $compromiso->texto_mision;
						$compromiso_imgm = $compromiso->imagen_mision;
						$compromiso_desc = $compromiso->post_content;
						$contentCom = wpautop($compromiso_desc, true);
						$compromiso_namev = $compromiso->titulo_vision;
		          $compromiso_img = wp_get_attachment_url( get_post_thumbnail_id($compromiso->ID, 'full') ); // Url de la imagen en tamaño Full
		          ?>
		          <div class="col-12 p-0 bg-amarillo vision" data-aos="fade-up">
		          	<div class="col-12 text-center">
		          		<h2 class="title-space color-celeste"><?php echo $compromiso_name;?></h2>
		          	</div>
		          	<div class="col-lg-2 subtitulo color-verdeOscuro" data-aos="fade-left">
		          		<?php echo $compromiso_namev;?>
		          	</div>
		          	<div class="col-lg-5 color-amarillo" data-aos="fade-left">
		          		<p>
		          			<?php echo $contentCom;?>
		          		</p>
		          	</div>
		          </div>
		          <div class="col-lg-10 p-0 mision" data-aos="fade-right">
		          	<div class="col-lg-4 p-lg-0 img-vision py-5 text-right">
		          		<div class="blue-block" data-aos="fade-up"></div>
		          		<img src="<?php echo $compromiso_img; ?>" class="img-fluid">
		          	</div>
		          	<div class="col-lg-8 p-0 text pb-5 py-lg-5">
		          		<div class="col-lg-4 pl-0 pb-5 img-mision text-right">
		          			<img src="<?php echo $compromiso_imgm['guid']; ?>" class="img-fluid">	
		          		</div>
		          		<div class="col-lg-8">
		          			<div class="subtitulo color-verdeOscuro">
		          				<?php echo $compromiso_namem;?>
		          			</div>
		          			<p><?php echo $compromiso_descm;?></p>	
		          		</div>
		          	</div>
		          </div>
		          <?php
		      endforeach;
		  endif;
		  ?>
		</div>
</section>
<section class="recetas-container py-5 move-parallax" id="recetas">
			<div id="main" >
				<div class="move-parallax move">
					<img src="<?php echo get_template_directory_uri(); ?>/img/recetas/maiz4.png" class="images maiz1 uno">
					<img src="<?php echo get_template_directory_uri(); ?>/img/recetas/maiz3.png" class="images maiz2 uno">
					<img src="<?php echo get_template_directory_uri(); ?>/img/recetas/maiz2.png" class="images maiz3 uno">
					<img src="<?php echo get_template_directory_uri(); ?>/img/recetas/maiz.png" class="images maiz4 uno">
					<img src="<?php echo get_template_directory_uri(); ?>/img/recetas/hoja2.png" class="images hoja1 uno">
					<img src="<?php echo get_template_directory_uri(); ?>/img/recetas/hoja1.png" class="images hoja2 uno">
					<img src="<?php echo get_template_directory_uri(); ?>/img/recetas/aguacate.png" class="images aguacate uno">
					<img src="<?php echo get_template_directory_uri(); ?>/img/banner/arepa2.png" class="images arepa uno">
				</div>
			</div>
			<div class="container">
				<div class="row recetas">
					<?php 
			    // Argumentos para una busqueda de post type
					$args = array(
			      'post_type' => 'receta', // Nombre del post type
			      'order' => 'ASC'
			  );
					$recetas = new WP_Query($args);
					if ($recetas->posts):
			      // Foreach para recorrer el resultado de la busqueda
						foreach ($recetas->posts as $receta):
							$receta_name = $receta->post_title;
							$receta_sub = $receta->subtitulo;
							$receta_desc = $receta->post_content;
							$contentrece = wpautop($receta_desc, true);
							?>
							<div class="col-12">
								<div class="row">
									<div class="col-lg-4 color-verdeOscuro">
										<?php echo $receta_sub;?>
									</div>
									<div class="col-lg-8">
										<h2 class="title-space color-celeste">
											<?php echo $receta_name;?>
										</h2>
									</div>
									<div class="col-lg-12">
										<a href="" class='vermas'>Ver más</a>
									</div>
								</div>
							</div>
							<div class="offset-lg-2 col-lg-4 d-flex flex-column justify-content-end ">
								<?php echo $contentrece;?>
							</div>
							<?php
						endforeach;
					endif;
					?>
				</div>
			</div>
		</section>
<section class="title container py-2" id="contacto" data-aos="fade-right">
	<div class="row">
		<?php 
	    // Argumentos para una busqueda de post type
		$args = array(
	      'post_type' => 'contacto', // Nombre del post type
	      'order' => 'ASC'
	  );
		$contactanos = new WP_Query($args);
		if ($contactanos->posts):
	      // Foreach para recorrer el resultado de la busqueda
			foreach ($contactanos->posts as $contacto):
				$contacto_name = $contacto->post_title;
				$contacto_sub = $contacto->subtitulo;
				$contacto_code = $contacto->code;
				$contacto_desc = $contacto->post_content;
				?>
				<div class="col-6 subtitulo d-flex align-items-center color-verdeOscuro">
					<?php echo $contacto_sub;?>
				</div>
				<div class="col-6 color-celeste">
					<h2 class="title-space"><?php echo $contacto_name;?></h2>
				</div>
				<?php
			endforeach;
		endif;
		?>
	</div>
</section>
<section class="contacto bg-celeste">
	<div class="container color-verdeOscuro py-5">
		<div class="row">
			<?php 
	    // Argumentos para una busqueda de post type
			$args = array(
	      'post_type' => 'contacto', // Nombre del post type
	      'order' => 'ASC'
	  );
			$contactanos = new WP_Query($args);
			if ($contactanos->posts):
	      // Foreach para recorrer el resultado de la busqueda
				foreach ($contactanos->posts as $contacto):
					$contacto_code = $contacto->code_form;
					$contacto_desc = $contacto->post_content;
					$contentform = wpautop($contacto_desc, true);
					?>
					<div class="col-lg-3" data-aos="fade-left">
						<div class='text-form'>
							<?php echo $contentform;?>
						</div>
						<ul class="redes">
							<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/ig.svg" alt="" class="img-fluid"></a></li>
							<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/fb.svg" alt="" class="img-fluid"></a></li>
						</ul>
					</div>
					<div class="col-lg-5" data-aos="fade-left">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127258.07442651757!2d-74.16239763296394!3d4.627102641016862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f999d930f59f3%3A0x902c740fd2c9ded6!2sCl.%2022%2C%20Bogot%C3%A1%2C%20Cundinamarca!5e0!3m2!1ses-419!2sco!4v1569947170581!5m2!1ses-419!2sco" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
					<div class="col-lg-4 color-white form-contacto" data-aos="fade-left">
						<?php echo $contacto_code;?>
					</div>
					<?php
				endforeach;
			endif;
			?>
		</div>
	</div>
</section>
	<?php get_footer(); ?>