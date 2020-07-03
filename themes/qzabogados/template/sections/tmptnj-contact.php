<section id="tmptnj-contacto" class="tmptnj-contact_form container margin-top-bottom-60">
	<div class="row row-complete">
		<div class="col s12 m6 offset-m3 wow slideInLeft">
			<h4 class="text-center margin-bottom-20"><strong>Contáctanos</strong></h4>
			<?php echo do_shortcode('[contact-form-7 id="48" title="Formulario de contacto 1"]'); ?>
		</div>
	</div>
</section>
<section class="tmptnj-contact">
	<div class="row bg-tertiary-dark">
		<div class="tmptnj-contact_info col s12 m6"><!--  wow slideInLeft slow -->
			<!-- <h4 class="margin-bottom-20"><strong>Contáctanos</strong></h4> -->
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vestibulum mauris ut diam vulputate, nec scelerisque magna maximus.</p>
			<p>Dirección: Suspendisse sit amet ex vestibulum, semper nunc quis, consequat arcu. Pellentesque feugiat molestie enim a aliquam. </p>
			<div class="contact-links margin-top-10">	
				<?php include (TEMPLATEPATH . '/template/contact-links.php'); ?>
			</div>
		</div>
		<div class="tmptnj-contact_map col s12 m6 bg-image relative" style="background-image: url(<?php echo THEMEPATH ?>images/mapa.png)">
			<a href="https://goo.gl/maps/bT3WcGCtJEV3wbpk7" target="_blank" class="bg-absolute"></a>
			<em class="icon-location color-primary wow zoomIn slow delay-1s"><span class="pulse"></span></em>
		</div>
	</div>
</section>