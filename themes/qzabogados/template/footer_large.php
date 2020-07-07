<div class="col s12 sm4 m3 margin-bottom-10">
	<p class="margin-bottom-10 font-strong font-title"><small>Nosotros</small></p>
	<div class="wow slideInLeft">
	<?php wp_nav_menu( array( 
		'theme_location' => 'footer_menu' 
	) ); ?>			
	</div>								
</div>	
<div class="col s12 sm4 m2 margin-bottom-10">
	<p class="margin-bottom-10 font-strong font-title"><small>Contacto</small></p>
	<div class="wow bounceIn"><?php include (TEMPLATEPATH . '/template/contact-links.php'); ?></div>
</div>
<div class="col s12 sm4 m2 margin-bottom-10">
	<p class="margin-bottom-10 font-strong font-title"><small>Síguenos</small></p>
	<div class="wow bounceIn"><?php include (TEMPLATEPATH . '/template/social-links.php'); ?></div>
</div>
<div class="col s12 m5 margin-bottom-10 ">
	<p class="margin-bottom-10 font-strong font-title"><small>Newsletter</small></p>
	<div class="wow slideInRight"><?php /* Form Mailchimp */
	include (TEMPLATEPATH . '/template/mailchimp.php'); ?></div>	
</div>
<div class="col s12 text-center">
	<p><small>© <?php echo date("Y"); ?> <a href="https://www.behance.net/nayelijord22e2" target="_blank">QZABOGADOS</a></small></p>
</div>