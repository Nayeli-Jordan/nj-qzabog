<?php 
$page_id = 76;
$post_id = get_post($page_id);
$content = $post_id->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]>', $content);
?>
<!-- tmptnj-columnsimage -->
<section id="section-servicios" class="tmptnj-columnsImage margin-bottom-40">
	<div class="tmptnj-columnsImage_content bg-secondary color-dark">
		<div class="container">
			<h2 class="margin-bottom-20"><?php echo get_the_title($page_id); ?></h2>
			<div class="text-justify"><?php echo $content; ?></div>
		</div>
	</div>		
	<div class="container tmptnj-columnsImage_image overflow-hide ">			
		<div class="row row-complete">
			<?php 
			$columnsServicios_args = array(
				'post_type' 		=> 'servicios',
				'tax_query' 		=> array(
					array(
						'taxonomy'  => 'tipo',
						'field' 	=> 'slug',
						'terms' 	=> 'otro',
						'operator' 	=> 'NOT IN',
					)
				),
				'posts_per_page' 	=> 3,
			);
			$columnsServicios_query = new WP_Query( $columnsServicios_args );
			if ( $columnsServicios_query->have_posts() ) :
				$i = 1;
				while ( $columnsServicios_query->have_posts() ) : $columnsServicios_query->the_post(); 
					$custom_fields  = get_post_custom();
					$post_id        = get_the_ID();
					$resumen   		= get_post_meta( $post_id, 'servicios_resumen', true ); ?>
					<div class="col s12 m4 margin-bottom-20 wow fadeIn slow">
						<div class="bg-image margin-bottom-10 relative" style="background-image: url(<?php the_post_thumbnail_url('medium'); ?>)"><a href="<?php echo get_permalink(); ?>" class="bg-absolute"></a></div>
						<a href="<?php echo get_permalink(); ?>"><h3 class="margin-bottom-10"><?php the_title(); ?></h3></a>
						<p class="text-justify"><?php echo $resumen; ?></p>
						<a href="<?php echo get_permalink(); ?>" class="inline-block float-right margin-top-10">
							<div class="btn-hexagono btn-hexagono-small btn-hexagono-relleno">
								<div class="hexagono"><em class="icon-right-open"></em></div>
							</div>
						</a>
					</div>	
				<?php $i++; endwhile; wp_reset_postdata();
			endif; ?> 
		</div>	
	</div>
</section>