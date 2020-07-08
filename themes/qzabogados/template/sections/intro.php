<!-- tmptnj-slider -->
<section class="tmptnj-slider">
	<div class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-pause-on-hover="true" data-cycle-speed="600" data-cycle-slides="> div">
		<?php 
		$intro_args = array(
			'post_type' 		=> 'intro',
			'posts_per_page' 	=> 3,
		);
		$intro_query = new WP_Query( $intro_args );
		if ( $intro_query->have_posts() ) :
			while ( $intro_query->have_posts() ) : $intro_query->the_post(); 
				$custom_fields  = get_post_custom();
				$post_id        = get_the_ID();
				$slideBtnText   = get_post_meta( $post_id, 'intro_slideBtnText', true );
    			$slideBtnLink   = get_post_meta( $post_id, 'intro_slideBtnLink', true ); ?>
				<div class="tmptnj-slider_slide" style="background-image: url(<?php the_post_thumbnail_url('large'); ?>)">
					<div class="tmptnj-slider_opacity"></div>
					<div class="container relative">
						<div class="tmptnj-slider_content">
							<h2 class="fs-large font-strong margin-bottom-10"><?php the_title(); ?></h2>
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