<div class="col s12 m4 l3 wow zoomIn">
	<a href="<?php echo get_permalink(); ?>" class="block"><div class="bg-image margin-bottom-10" style="background-image: url(<?php the_post_thumbnail_url('medium'); ?>)"></div></a>
	<a href="<?php echo get_permalink(); ?>" class="block"><h3 class="margin-bottom-10"><?php the_title(); ?></h3></a>
	<?php the_excerpt() ?>
	<a href="<?php echo get_permalink(); ?>" class="enlaceBtn margin-top-10">Leer más <em class="icon-mail-alt"></em></a>
</div>	