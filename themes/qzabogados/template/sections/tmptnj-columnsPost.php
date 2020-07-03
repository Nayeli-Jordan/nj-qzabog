<section class="container tmptnj-columnsPost margin-top-bottom-60">
	<div class="text-center margin-bottom-20 max-width-600 margin-auto">
		<h2 class="margin-bottom-20">Title</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>			
	</div>
	<div class="row row-complete">
	<?php 
	$columnsPost_args = array(
		'post_type' 		=> 'postColumnsPost',
		'posts_per_page' 	=> 3,
	);
	$columnsPost_query = new WP_Query( $columnsPost_args );
	if ( $columnsPost_query->have_posts() ) :
		while ( $columnsPost_query->have_posts() ) : $columnsPost_query->the_post(); 
			$custom_fields  = get_post_custom();
			$post_id        = get_the_ID(); ?>
			<div class="col s12 sm6 m4 margin-bottom-20 wow fadeInLeft slow">
				<a href="<?php echo get_permalink(); ?>" class="block"><div class="bg-image margin-bottom-10" style="background-image: url(<?php the_post_thumbnail_url('medium'); ?>)"></div></a>
				<a href="<?php echo get_permalink(); ?>" class="block"><h3 class="margin-bottom-10"><?php the_title(); ?></h3></a>
				<?php the_excerpt() ?>
				<a href="<?php echo get_permalink(); ?>" class="enlaceBtn margin-top-10">Leer más <em class="icon-right-open"></em></a>
			</div>		
		<?php endwhile; wp_reset_postdata();
	endif; ?>
	</div>
	<div class="text-center">
		<a href="<?php echo SITEURL; ?>postColumnsPost" class="btn btn-light"><span>Ver todo</span><em class="icon-right-open"></em></a>
	</div>	
</section>