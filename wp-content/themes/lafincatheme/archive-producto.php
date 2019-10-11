<?php get_header(); ?>
<div class="container" id="productos">
	<div class="row py-5">
		<div class="col-12">
			<div class="row align-items-center" data-aos="fade-right">
				<div class="col-12 color-verdeOscuro">
					<h2>Productos</h2>
				</div>
				<?php  
					$product_terms = get_terms( array(
						'taxonomy' => 'filtro-producto',
    					'hide_empty' => false,
					));
					$i=0;
				?>
				<div class="col-lg-12">
					<ul class="nav nav-tabs">
						<?php foreach ($product_terms as $product_term) { ?>
							<li class="nav-item">
								<a class="vermas <?php echo ($i == 0) ? "active" : "" ?> pl-0 p-3 d-inline-block" data-toggle="tab" href="#<?php echo $product_term->slug; ?>"><?php echo $product_term->name; ?></a>
							</li>
						<?php $i ++; } ?>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="tab-content">
		<?php
			$j=0;
			foreach ($product_terms as $product_term) {
				$product_slug = $product_term->slug;
		?>
			<div class="tab-pane container <?php echo ($j == 0) ? "active" : ""; ?> " id="<?php echo $product_slug; ?>">
				<?php 
					$arg = array(
					    'post_type' => 'producto', // Nombre del post type
					    'order' => 'ASC',
					    'filtro-producto' => $product_slug // Taxonomia nombre tax => item
					);
					$filtros = new WP_Query($arg);
					if($filtros):
						foreach ($filtros->posts as $filtro):
							$filtro_name = $filtro->post_title;
							$filtro_desc = $filtro->post_content;
							$filtro_unidad1 = $filtro->unidades_1;
							$filtro_unidad2 = $filtro->unidades_2;
							$filtro_grasa = $filtro->grasas;
							$filtro_pgrasa = $filtro->porcentaje_grasas;
							$filtro_calorias = $filtro->calorias;
							$filtro_pcalorias = $filtro->porcentaje_calorias;
							$filtro_azucares = $filtro->azucares[0];
							$filtro_pazucares = $filtro->porcentaje_azucares;
							$custom_fields = get_post_custom($filtro->ID);
					      	$filtro_img = wp_get_attachment_url( get_post_thumbnail_id($filtro->ID, 'full') ); // Url de la imagen en tamaño Full
		      	?>
			      	<div class="row pb-5">
			      		<div class="col-md-2" data-aos="fade-right">
			      			<img src="<?php echo get_template_directory_uri(); ?>/img/certificado.png" alt="" class="img-fluid w-100 certificado">
			      		</div>
			      		<div class="col-md-5" data-aos="fade-left">
			      			<img src="<?php echo $filtro_img; ?>" alt="" class="img-fluid w-100">
			      		</div>
			      		<div class="col-md-5 d-flex" data-aos="fade-left">
			      			<div class="row">
			      				<div class="col-12 color-verdeOscuro py-1">
			      					<h2><?php echo $filtro_name;?></h2>
			      				</div>
			      				<div class="col-md-6 pb-3">
			      					<?php echo $filtro_desc;?>
			      				</div>
			      				<div class="col-md-6 d-md-flex align-items-center producto-u pb-3">
			      					<div class="row w-md-100">
			      						<div class="col-12">
			      							<p class="line"><?php echo $filtro_unidad1;?></p>
			      						</div>
			      						<div class="col-12">
			      							<p><?php echo $filtro_unidad2;?></p>
			      						</div>
			      					</div>
			      				</div>
			      				<div class="col-md-12 valores d-flex justify-content-between align-items-center">
			      					<div class="porcentaje">
			      						<small>Grasas</small>
										<span class="num"><?php echo $filtro_grasa;?></span>
										<span class="val"><?php echo $filtro_pgrasa;?></span>
			      					</div>
			      					<div class="porcentaje">
			      						<small>Coresterol</small>
										<span class="num"><?php echo $filtro_calorias ? $filtro_calorias : "0";?></span>
										<span class="val"><?php echo $filtro_pcalorias;?></span>
			      					</div>
			      					<div class="porcentaje">
			      						<small>Azúcares</small>
										<span class="num"><?php echo $filtro_azucares ? $filtro_azucares : "0";?></span>
										<span class="val"><?php echo $filtro_pazucares;?></span>
			      					</div>
			      					<img src="<?php echo get_template_directory_uri(); ?>/img/maiz.png" alt="maiz" class="d-none d-md-block">
			      				</div>
			      				<div class="col-md-12 py-3">
			      					<p class="atributo">
			      						<img src="<?php echo get_template_directory_uri(); ?>/img/sin-gluten.png" alt="">
			      						Sin gluten
			      					</p>
			      					<p class="atributo">
			      						<img src="<?php echo get_template_directory_uri();?>/img/fibra.png" alt="">
			      						Buena fuente de Fibra
			      					</p>
			      				</div>
			      			</div>
			      		</div>
			      	</div>
				<?php
					$j++;
					endforeach;
					endif;
				?>
			</div>
		<?php } ?>
	</div>
</div>

<?php get_footer(); ?>