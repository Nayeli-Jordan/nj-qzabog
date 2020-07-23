<?php 
$page_id = 79;
$post_id = get_post($page_id);
$content = $post_id->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]>', $content);
?>
<section id="nosotros" class="container tmptnj-columnsPost margin-top-bottom-30">
	<h3 class="text-center margin-bottom-20"><?php echo get_the_title($page_id); ?></h3>
	<div class="text-justify margin-bottom-20"><?php echo $content; ?></div>	
	<div class="row row-complete">
	<?php 
	$columnsPost_args = array(
		'post_type' 		=> 'servicios',
		'tax_query' 		=> array(
			array(
				'taxonomy'  => 'tipo',
				'field' 	=> 'slug',
				'terms' 	=> 'otro'
			)
		),
		'posts_per_page' 	=> 3,
	);
	$columnsPost_query = new WP_Query( $columnsPost_args );
	if ( $columnsPost_query->have_posts() ) :
		while ( $columnsPost_query->have_posts() ) : $columnsPost_query->the_post(); 
			$custom_fields  = get_post_custom();
			$post_id        = get_the_ID(); ?>
			<div class="col s12 sm6 m4 margin-bottom-20 text-center wow fadeInLeft slow">
				<div class="bg-image margin-bottom-10" style="background-image: url(<?php the_post_thumbnail_url('medium'); ?>)"></div>
				<h4 class="margin-bottom-10"><?php the_title(); ?></h4>
			</div>		
		<?php endwhile; wp_reset_postdata();
	endif; ?>
	</div>
</section>