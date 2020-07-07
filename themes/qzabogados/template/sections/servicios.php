<!-- tmptnj-columnsimage -->
<section class="tmptnj-columnsImage margin-bottom-40">
	<div class="tmptnj-columnsImage_content bg-tertiary">
		<div class="container">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
	</div>		
	<div class="container tmptnj-columnsImage_image overflow-hide ">			
		<div class="row row-complete">
			<?php 
			$columnsServicios_args = array(
				'post_type' 		=> 'servicios',
				'posts_per_page' 	=> 3,
			);
			$columnsServicios_query = new WP_Query( $columnsServicios_args );
			if ( $columnsServicios_query->have_posts() ) :
				$i = 1;
				while ( $columnsServicios_query->have_posts() ) : $columnsServicios_query->the_post(); 
					$custom_fields  = get_post_custom();
					$post_id        = get_the_ID();
					$resumen   		= get_post_meta( $post_id, 'servicios_resumen', true ); ?>
					<div class="col s12 m4 margin-bottom-20 wow fadeInUp slow">
						<div class="bg-image margin-bottom-10 relative" style="background-image: url(<?php the_post_thumbnail_url('medium'); ?>)"><a href="<?php echo get_permalink(); ?>" class="bg-absolute"></a></div>
						<a href="<?php echo get_permalink(); ?>"><h3 class="margin-bottom-10"><?php the_title(); ?></h3></a>
						<p><?php echo $resumen; ?></p>
						<a href="<?php echo get_permalink(); ?>" class="inline-block float-right">
							<div class="btn-hexagono btn-hexagono-relleno">
								<div class="hexagono"><em class="icon-right-open"></em></div>
							</div>
						</a>
					</div>	
				<?php $i++; endwhile; wp_reset_postdata();
			endif; ?> 
		</div>	
	</div>
</section>