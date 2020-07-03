<div id="item<?php echo $post_id; ?>" class="col s12 sm6 m4 xl3 grid-item open-modal">
	<div class="relative cursor-pointer wow fadeInUp">
		<img src="<?php the_post_thumbnail_url('medium'); ?>" class="responsive-img">
		<div class="bg-absolute"></div>
		<h5 class="wow fadeIn delay-1s"><?php the_title(); ?></h5>					
	</div>
</div>
<div id="modal-item<?php echo $post_id; ?>" class="modal tmptnj-gallery-modal">
	<div class="exit-modal"></div>
	<div class="modal-content">
		<div class="modal-body">
			<em class="icon-close close-modal"></em>
			<div class="tmptnj-gallery-modal_image">
				<img src="<?php the_post_thumbnail_url('large'); ?>" class="responsive-img">
				<div class="tmptnj-gallery-modal_degrade bg-absolute"></div>
				<h5><?php the_title(); ?></h5>								
			</div>
			<?php if( '' !== get_post()->post_content ) { ?>
				<div class="tmptnj-gallery-modal_content">
					<?php the_content(); ?>	
				</div>
			<?php } ?>
		</div>
	</div>
</div>	