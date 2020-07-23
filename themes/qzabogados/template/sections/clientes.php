<?php 
$page_id = 44;
$post_id = get_post($page_id);
$content = $post_id->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]>', $content);
?>
<section id="section-clientes" class="container tmptnj-PostAndImage margin-top-bottom-60">
	<div class="row">
		<div class="col s12 l6 text-center margin-bottom-20">
			<div class="text-justify">
				<h2 class="margin-bottom-20"><?php echo get_the_title($page_id); ?></h2>
				<?php echo $content; ?>			
			</div>
		</div>	
		<div class="col s12 l6 margin-bottom-20 text-center wow fadeInRight slow">
			<div class="bg-image margin-bottom-10" style="background-image: url(<?php echo get_the_post_thumbnail_url( $post_id, 'large' ); ?>)"></div>
		</div>		
	</div>
	<div id="section-prev-contacto"></div>
</section>