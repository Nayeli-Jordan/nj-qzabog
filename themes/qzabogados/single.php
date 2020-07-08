<?php 
	get_header();
	global $post;
	$currentPost[] = $post->ID;
	while ( have_posts() ) : the_post(); 
?>
	<section id="tmptnj-single">
		<div class="tmptnj-single_content  bg-primary-dark">
			<div class="container">
				<h2 class="wow fadeIn"><?php the_title(); ?></h2>
			</div>
		</div>
		<div class="container tmptnj-single_post">			
			<div class="row">
				<div class="col s12 m10 offset-m1 l8 offset-l2 xl6 offset-xl3">
					<div class="bg-image margin-bottom-20 wow slideInLeft" style="background-image: url(<?php the_post_thumbnail_url('large'); ?>)"></div>					
				</div>
				<div class="col s12 l10 offset-l1 margin-bottom-50">
					<div class="text-justify wow fadeIn"><?php the_content(); ?></div>
					<a href="<?php echo SITEURL; ?>" class="inline-block float-right margin-top-15">
						<div class="btn-hexagono btn-hexagono-small btn-hexagono-relleno rotate-180 inline-block align-middle">
							<div class="hexagono"><em class="icon-right-open"></em></div>
						</div>
						<span class="inline-block align-middle"> Ir a Inicio</span>
					</a>	
				</div>
			</div>	
		</div>
	</section>
<?php 
	endwhile; // end of the loop.
	get_footer(); 
?>
