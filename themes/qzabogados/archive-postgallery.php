<?php
/* 
Template Name: Archives
*/
get_header(); ?>
<section class="tmptnj-columnsImage margin-bottom-60">
	<div class="tmptnj-columnsImage_content bg-tertiary">
		<div class="container">
			<p class="margin-bottom-20">Post Types Gallery</p>
		</div>
	</div>		
	<div class="container tmptnj-gallery">			
		<div class="row row-complete grid-images overflow-hide">
			<?php while ( have_posts() ) : the_post();
			$post_id        = get_the_ID();
				include (TEMPLATEPATH . '/template/tmptnj-gallery_card.php');
			endwhile; ?>
		</div>
		<div class="text-center margin-top-20">
			<a href="<?php echo SITEURL; ?>" class="btn btn-light"><em class="icon-right-open rotate-180"></em><span> Ir a Inicio</span></a>
		</div>	
	</div>
</section>
<?php get_footer(); ?>