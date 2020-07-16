<?php 
$page_id = 74;
$post_id = get_post($page_id);
$content = $post_id->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]>', $content);
?>
<section id="section-nosotros" class="container tmptnj-columnsPost margin-top-bottom-60">
	<div class="row">
		<div class="col s12 l10 offset-l1 text-center margin-bottom-20">
			<h2 class="margin-bottom-20"><?php echo get_the_title($page_id); ?></h2>
			<p><?php echo $content; ?></p>			
		</div>		
	</div>
	<div class="row row-complete">
	<?php 
	$columnsPost_args = array(
		'post_type' 		=> 'nosotros',
		'posts_per_page' 	=> 3,
	);
	$columnsPost_query = new WP_Query( $columnsPost_args );
	if ( $columnsPost_query->have_posts() ) :
		while ( $columnsPost_query->have_posts() ) : $columnsPost_query->the_post(); 
			$custom_fields  = get_post_custom();
			$post_id        = get_the_ID(); ?>
			<div class="col s12 sm6 m4 margin-bottom-20 text-justify wow fadeInLeft slow">
				<a href="<?php echo get_permalink(); ?>" class="block"><div class="bg-image margin-bottom-10" style="background-image: url(<?php the_post_thumbnail_url('medium'); ?>)"></div></a>
				<a href="<?php echo get_permalink(); ?>" class="block"><h3 class="margin-bottom-10"><?php the_title(); ?></h3></a>
				<?php the_excerpt() ?>
				<a href="<?php echo get_permalink(); ?>" class="inline-block float-right margin-top-10">
					<div class="btn-hexagono btn-hexagono-small btn-hexagono-relleno">
						<div class="hexagono"><em class="icon-plus"></em></div>
					</div>
				</a>
			</div>		
		<?php endwhile; wp_reset_postdata();
	endif; ?>
	<div id="section-prev-servicios" class="col s12"></div>
	</div>
</section>