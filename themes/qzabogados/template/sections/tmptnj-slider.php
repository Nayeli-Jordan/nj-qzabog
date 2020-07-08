<!-- tmptnj-slider -->
<section class="tmptnj-slider">
	<div class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-pause-on-hover="true" data-cycle-speed="300" data-cycle-slides="> div">
		<?php 
		$slider_args = array(
			'post_type' 		=> 'tmptnj_slider',
			'posts_per_page' 	=> 3,
		);
		$slider_query = new WP_Query( $slider_args );
		if ( $slider_query->have_posts() ) :
			while ( $slider_query->have_posts() ) : $slider_query->the_post(); 
				$custom_fields  = get_post_custom();
				$post_id        = get_the_ID();
				$slideBtnText   = get_post_meta( $post_id, 'tmptnj_slider_slideBtnText', true );
    			$slideBtnLink   = get_post_meta( $post_id, 'tmptnj_slider_slideBtnLink', true ); ?>
				<div class="tmptnj-slider_slide" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>)">
					<div class="tmptnj-slider_opacity"></div>
					<div class="container relative">
						<div class="tmptnj-slider_content">
							<p class="fs-large font-strong margin-bottom-10"><?php the_title(); ?></p>
							<?php the_content(); ?>
							<?php if( $slideBtnLink != "" && $slideBtnText != "" ) : ?>
								<a href="<?php echo $slideBtnLink; ?>" class="btn btn-light margin-top-20"><span><?php echo $slideBtnText; ?></span><em class="icon-right-open"></em></a>
							<?php endif; ?>				
						</div>			
					</div>
				</div>		
			<?php endwhile; wp_reset_postdata();
		endif; ?>
		<span class="cycle-pager cycle-pager_left"></span>
	</div>	
</section>