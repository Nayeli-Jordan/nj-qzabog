<section class="container tmptnj-gallery margin-top-bottom-60">
	<div class="text-center margin-bottom-20 max-width-600 margin-auto">
		<h2 class="margin-bottom-20">Title</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>			
	</div>
	<div class="row row-complete grid-images overflow-hide ">
		<?php 
		$gallery_args = array(
			'post_type' 		=> 'postgallery',
			'posts_per_page' 	=> 9,
		);
		$gallery_query = new WP_Query( $gallery_args );
		if ( $gallery_query->have_posts() ) :
			while ( $gallery_query->have_posts() ) : $gallery_query->the_post(); 
				$custom_fields  = get_post_custom();
				$post_id        = get_the_ID();
				include (TEMPLATEPATH . '/template/tmptnj-gallery_card.php');
			endwhile; wp_reset_postdata();
		endif; ?>
	</div>
	<div class="text-center margin-top-20">
		<a href="<?php echo SITEURL; ?>postGallery" class="btn btn-light"><span>Ver todo</span><em class="icon-right-open"></em></a>
	</div>
</section>