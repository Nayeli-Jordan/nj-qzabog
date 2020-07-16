<?php 
$page_id = 71;
$post_id = get_post($page_id);
$content = $post_id->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]>', $content);
?>
<div class="triangleTopRight bg-primary margin-top--50"></div>
<section class="tmptnj-callToAction bg-primary padding-bottom-60 padding-top-40">
	<div class="container">
		<div class="row row-complete">
			<div class="col s12 m7 l8 xl9 tmptnj-callToAction_content text-justify wow fadeIn">
				<h4 class="uppercase margin-bottom-20"><?php echo get_the_title($page_id); ?></h4>
				<p><?php echo $content; ?></p>
			</div>
			<div id="section-prev-nosotros" class="col s12 m5 l4 xl3 tmptnj-callToAction_btn wow bounceInRight slow">
				<a id="contacto" class="item-scroll btn btn-light"><span>Contáctanos</span><em class="icon-mail-alt"></em></a>
			</div>
		</div>			
	</div>
</section>