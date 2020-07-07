<?php 
	get_header();
	global $post;
	$currentPost[] = $post->ID;
	while ( have_posts() ) : the_post(); 
?>
	<section id="tmptnj-single">
		<div class="tmptnj-single_content  bg-primary-dark">
			<div class="container">
				<p class="wow fadeIn"><?php the_title(); ?></p>
			</div>
		</div>
		<div class="container tmptnj-single_post">			
			<div class="row">
				<div class="col s12 m7 l8 margin-bottom-50">
					<div class="bg-image margin-bottom-20 wow slideInLeft" style="background-image: url(<?php the_post_thumbnail_url('large'); ?>)"></div>
					<div class="padding-left-3 padding-right-3 wow fadeIn"><?php the_content(); ?></div>
					<a href="<?php echo SITEURL; ?>" class="enlaceBtn margin-top-20 wow fadeIn"><em class="icon-right-open rotate-180"></em> Ir a Inicio</a>	
				</div>	
				<div class="col s12 m5 l4 margin-bottom-50 tmptnj-single_sidebar wow slideInUp">
					<?php get_sidebar(); ?>
				</div>		
			</div>	
		</div>
	</section>
<?php 
	endwhile; // end of the loop.
	get_footer(); 
?>
