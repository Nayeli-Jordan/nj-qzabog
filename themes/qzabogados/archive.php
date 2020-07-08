<?php
/* 
Template Name: Archives
*/
get_header(); ?>
<section class="tmptnj-headPost margin-bottom-60">
	<div class="tmptnj-headPost_title bg-primary">
		<div class="container">
			<p class="margin-bottom-20"><?php echo get_the_archive_title(); ?></p>
		</div>
	</div>		
	<div class="container tmptnj-headPost_content">			
		<div class="row row-complete">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="col s12 m4 l3 wow zoomIn">
					<a href="<?php echo get_permalink(); ?>" class="block"><div class="bg-image margin-bottom-10" style="background-image: url(<?php the_post_thumbnail_url('medium'); ?>)"></div></a>
					<a href="<?php echo get_permalink(); ?>" class="block"><h3 class="margin-bottom-10"><?php the_title(); ?></h3></a>
				</div>							
			<?php endwhile; ?>
		</div>			
	</div>
</section>
<?php get_footer(); ?>