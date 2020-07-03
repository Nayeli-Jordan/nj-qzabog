<?php get_header(); ?>
	<section class="tmptnj-columnsImage margin-bottom-60">
		<div class="tmptnj-columnsImage_content bg-tertiary">
			<div class="container">
				<p class="margin-bottom-20">Single Post Type</p>
				<p class="fs-medium max-width-600 margin-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
		</div>		
		<div class="container tmptnj-columnsImage_image">			
			<div class="row row-complete">
				<?php if ( have_posts() ) :
					include (TEMPLATEPATH . '/template/tmptnj-columnsPost_card.php');
				endif; ?>
			</div>			
		</div>
	</section>
<?php get_footer(); ?>