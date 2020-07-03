<?php
/* 
Template Name: Archives
*/
get_header(); ?>
<section class="tmptnj-headPost margin-bottom-60">
	<div class="tmptnj-headPost_title bg-tertiary">
		<div class="container">
			<p><?php the_title(); ?></p>
		</div>
	</div>		
	<div class="container tmptnj-headPost_content padding-bottom-50">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="tmptnj-headPost_block wow zoomIn">
				<?php the_content(); ?>
				<a href="<?php echo get_permalink(); ?>" class="enlaceBtn margin-top-50"><em class="icon-right-open rotate-180"></em> Ir al Inicio</a>
			</div>							
		<?php endwhile; ?>
	</div>
</section>
<?php get_footer(); ?>