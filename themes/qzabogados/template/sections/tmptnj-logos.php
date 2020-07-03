<div class="triangleTopRight bg-tertiary margin-top--50"></div>
<section class="tmptnj-logos">	
	<div class="tmptnj-logos_content bg-tertiary padding-top-30 padding-bottom-50">
		<div class="container">
			<div class="text-center margin-bottom-20 max-width-600 margin-auto color-light">
				<h2 class="margin-bottom-20">Clientes</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<div class="row row-complete text-center">
				<?php 
				$logos_args = array(
					'post_type' 		=> 'postLogos',
					'posts_per_page' 	=> 12,
				);
				$logos_query = new WP_Query( $logos_args );
				if ( $logos_query->have_posts() ) :
					$i = 0;
					while ( $logos_query->have_posts() ) : $logos_query->the_post(); ?>
						<div class="tmptnj-logos_logo wow fadeIn delay-<?php echo $i ?>s slow">
							<div class="bg-image bg-contain" style="background-image: url(<?php the_post_thumbnail_url('medium'); ?>)"></div>
						</div>
					<?php $i++; if ($i === 2) { $i = 0; } endwhile; wp_reset_postdata();
				endif; ?>
			</div>
		</div>			
	</div>
</section>