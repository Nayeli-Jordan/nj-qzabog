<p class="fs-medium margin-bottom-10">Entradas recientes:</p>
<ul>
	<?php
	$related_args = array(
		'post_type' 		=> 'postColumnsPost',
		'posts_per_page' 	=> 5,
		'post__not_in'		=> $currentPost
	);
	$related_query = new WP_Query( $related_args );
	if ( $related_query->have_posts() ) : 
		$i = 1;
		while ( $related_query->have_posts() ) : $related_query->the_post(); ?>

			<li class="margin-bottom-10"><a href="<?php the_permalink(); ?>" class=""><?php the_title(); ?></a></li>

	<?php $i ++; endwhile; wp_reset_postdata();
	endif; ?>	
</ul>
