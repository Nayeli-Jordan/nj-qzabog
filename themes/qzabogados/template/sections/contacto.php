<!-- tmptnj-contact -->
<section id="section-contacto" class="tmptnj-contact_form padding-top-bottom-60 bg-secondary">
	<div class="container">
		<div class="row row-complete">
			<div class="col s12 m6 offset-m3 wow slideInLeft">
				<h3 class="text-center margin-bottom-20"><strong>Contáctanos</strong></h3>
				<?php echo do_shortcode('[contact-form-7 id="48" title="Formulario de contacto 1"]'); ?>
			</div>
		</div>		
	</div>
</section>
<section class="tmptnj-contact">
	<div class="row bg-tertiary-dark">
		<div class="tmptnj-contact_info col s12 m6"><!--  wow slideInLeft slow -->
			<p class="uppercase"><em class="icon-map-1"></em> World Trade Center México</p>
			<p>Montecito 38, piso 14, oficinas 17 & 18, Col. Nápoles, Alcaldía Benito Juárez, C.P.03810, Ciudad de México.</p>
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