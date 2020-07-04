<?php get_header(); ?>
<section class="tmptnj-headPost margin-bottom-60">
	<div class="tmptnj-headPost_title bg-tertiary">
		<div class="container">
			<p class="margin-bottom-20"><?php the_title(); ?></p>
		</div>
	</div>		
	<div class="container tmptnj-headPost_content">			
		<div class="row row-complete">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="col s12 m4 l3 wow zoomIn">
					<a href="<?php echo get_permalink(); ?>" class="block"><div class="bg-image margin-bottom-10" style="background-image: url(<?php the_post_thumbnail_url('medium'); ?>)"></div></a>
					<a href="<?php echo get_permalink(); ?>" class="block"><h3 class="margin-bottom-10"><?php the_title(); ?></h3></a>
					<?php the_excerpt() ?>
					<a href="<?php echo get_permalink(); ?>" class="enlaceBtn margin-top-10">Leer más <em class="icon-mail-alt"></em></a>
				</div>							
			<?php endwhile; ?>
		</div>			
	</div>
</section>
<?php get_footer(); ?>