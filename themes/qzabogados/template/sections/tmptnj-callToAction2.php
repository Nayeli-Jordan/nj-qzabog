<?php 
$page_id = 81;
$post_id = get_post($page_id);
$content = $post_id->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]>', $content);
?>
<div class="triangleTopLeft bg-primary"></div>
<section class="tmptnj-callToAction bg-primary padding-bottom-60 padding-top-30">
	<div class="container">
		<div class="row row-complete">
			<div class="col s12 m7 l8 xl9 tmptnj-callToAction_content text-justify wow fadeIn">
				<h4 class="uppercase margin-bottom-20"><?php echo get_the_title($page_id); ?></h4>
				<p><?php echo $content; ?></p>
			</div>
			<div id="section-prev-contacto" class="col s12 m5 l4 xl3 tmptnj-callToAction_btn wow bounceInRight slow">
				<a id="contacto" class="item-scroll btn btn-light"><span>Contáctanos</span><em class="icon-mail-alt"></em></a>
			</div>
		</div>			
	</div>
</section>
<div class="triangleBottomRight bg-primary"></div>