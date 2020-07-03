<section class="tmptnj-columnsImage margin-bottom-40">
	<div class="tmptnj-columnsImage_content bg-tertiary">
		<div class="container">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
	</div>		
	<div class="container tmptnj-columnsImage_image overflow-hide ">			
		<div class="row row-complete">
			<?php 
			$columnsImage_args = array(
				'post_type' 		=> 'postColumnsImage',
				'posts_per_page' 	=> 4,
			);
			$columnsImage_query = new WP_Query( $columnsImage_args );
			if ( $columnsImage_query->have_posts() ) :
				$i = 1;
				while ( $columnsImage_query->have_posts() ) : $columnsImage_query->the_post(); 
					$custom_fields  = get_post_custom();
					$post_id        = get_the_ID(); ?>
					<div class="col s12 m4 l3 margin-bottom-20 <?php if ($i === 4) { echo "hide-on-med"; } ?> wow fadeInUp slow">
						<div class="bg-image margin-bottom-10" style="background-image: url(<?php the_post_thumbnail_url('medium'); ?>)"></div>
						<h3 class="margin-bottom-10"><?php the_title(); ?></h3>
						<?php the_content(); ?>
					</div>	
				<?php $i++; endwhile; wp_reset_postdata();
			endif; ?> 
		</div>	
	</div>
</section>