<?php get_header(); 

	$current_user = wp_get_current_user();
	$current_user_id = $current_user->ID;

	if ($current_user_id == 1) {
		/* Templates */
		include (TEMPLATEPATH . '/template/sections/intro.php');
		include (TEMPLATEPATH . '/template/sections/tmptnj-callToAction1.php');
		include (TEMPLATEPATH . '/template/sections/nosotros.php');
		include (TEMPLATEPATH . '/template/sections/servicios.php');		
		include (TEMPLATEPATH . '/template/sections/mas-servicios.php');
		include (TEMPLATEPATH . '/template/sections/tmptnj-callToAction2.php');
		include (TEMPLATEPATH . '/template/sections/clientes.php');
		include (TEMPLATEPATH . '/template/sections/contacto.php');		
	} else {  ?>

		<section id="tmptnj-mantenimiento">
			<div class="bg-image relative" style="background-image: url(<?php echo THEMEPATH; ?>images/quiroz_abogados_fondo_5.jpeg)">
				<div class="bg-absolute"></div>
				<h2>EN MANTENIMIENTO</h2>
			</div>
			<div class="tmptnj-mantenimiento_content margin-bottom-20">
				<p class="margin-bottom-10">Este sitio se encuentra en mantenimiento para brindarte una mejor experiencia <br>Volveremos pronto</p>
				<p class="fs-18 uppercase">Contáctanos</p>
				<?php include (TEMPLATEPATH . '/template/contact-links.php'); ?>
			</div>
		</section>

	<?php }
get_footer(); ?>