<?php 
	get_header();
	global $post;
	$currentPost[] = $post->ID;
	while ( have_posts() ) : the_post(); 

	$custom_fields  = get_post_custom();
	$post_id        = get_the_ID();

	$puesto   		= get_post_meta( $post_id, 'tarjeta_puesto', true );
    $correo   		= get_post_meta( $post_id, 'tarjeta_correo', true );
    $telefono   	= get_post_meta( $post_id, 'tarjeta_telefono', true );
    $ubicacion  	= get_post_meta( $post_id, 'tarjeta_ubicacion', true );
    $direccion  	= get_post_meta( $post_id, 'tarjeta_direccion', true );
    $redlinkedin 	= get_post_meta( $post_id, 'tarjeta_redlinkedin', true );
    $redfacebook 	= get_post_meta( $post_id, 'tarjeta_redfacebook', true );
    $redtwitter  	= get_post_meta( $post_id, 'tarjeta_redtwitter', true );
?>
	<section id="tmptnj-tarjeta">
		<div class="tmptnj-tarjeta_header bg-image relative" style="background-image: url(<?php echo THEMEPATH; ?>images/tarjetas/header.jpg)">
			<!-- <div class="bg-absolute"></div> -->
			<a class="tmptnj-tarjeta_linkhome" href="<?php echo SITEURL; ?>" title="Sitio web QZ ABOGADOS">
				<img src="<?php echo THEMEPATH; ?>images/tarjetas/logo.png" alt="Logo QZ ABOGADOS">
			</a>
			<a class="tmptnj-tarjeta_copy" href="javascript:getlink();"><em class="icon-twitter"></em></a>
			<script>//<![CDATA[
				function getlink() {
					var aux = document.createElement("input");
					aux.setAttribute("value",window.location.href);
					document.body.appendChild(aux);
					aux.select();
					document.execCommand("copy");
					document.body.removeChild(aux);
				}
			//]]></script>
		</div>
		<div class="tmptnj-tarjeta_content">
			<div class="tmptnj-tarjeta_cabecera container relative">
				<div class="bg-image wow slideInTop" style="background-image: url(<?php the_post_thumbnail_url('medium'); ?>)"></div>	
				<h2><?php the_title(); ?></h2>
				<p class="tmptnj-tarjeta_puesto uppercase"><?php echo $puesto; ?></p>
				<!-- <a class="tmptnj-tarjeta_linkhome" href="<?php echo SITEURL; ?>" title="Incio QZ ABOGADOS">
					<img src="<?php echo THEMEPATH; ?>images/tarjetas/logo.png" alt="Logo QZ ABOGADOS">
				</a>	 -->			
			</div>
			<div class="tmptnj-tarjeta_description">
				<div class="tmptnj-tarjeta_contacto container">
					<a href="tel:<?php echo $telefono ?>" title="Tel. <?php echo $telefono ?>"><em class="icon-phone"></em></a>
					<a href="https://wa.me/<?php echo $telefono ?>" title="Watsapp <?php echo $telefono ?>"><em class="icon-whatsapp"></em></a>
					<a href="mailto:<?php echo $correo ?>" title="Correo <?php echo $correo ?>"><em class="icon-mail-alt"></em></a>
				</div>
				<div class="tmptnj-tarjeta_ubicacion">
					<div id="tmptnj-tarjeta_btnubicacion"><em class="icon-location"></em> <?php echo $ubicacion ?></div>
					<div id="tmptnj-tarjeta_mapubicacion">
						<p class="container margin-bottom-15"><?php echo $direccion ?></p>
						<div class="bg-image relative" style="background-image: url(<?php echo THEMEPATH; ?>images/tarjetas/mapa.png)">
							<a href="https://goo.gl/maps/gwfmiagT9eWUkGEa6" target="_blank" class="bg-absolute"></a>
							<em class="icon-location color-primary wow fadeIn slow"><span class="pulse"></span></em>
						</div>						
					</div>
				</div>
				<div class="tmptnj-tarjeta_redes">
					<div class="container">
						<a href="<?php echo $redlinkedin ?>" target="_blank" title="Linkedin"><em class="icon-facebook"></em></a>
						<a href="<?php echo $redfacebook ?>" target="_blank" title="Facebook"><em class="icon-facebook"></em></a>
						<a href="<?php echo $redtwitter ?>" target="_blank" title="Twitter"><em class="icon-twitter"></em></a>
						<a href="<?php echo SITEURL; ?>" target="_blank" title="Sitio web QZ ABOGADOS"><em class="icon-twitter"></em></a>						
					</div>
				</div>
			</div>	
			<div class="tmptnj-tarjeta_footer container">
				<img src="<?php echo THEMEPATH; ?>images/tarjetas/logo_crowe.png" alt="Logo CROWE">
			</div>
		</div>
	</section>
<?php 
	endwhile; // end of the loop.
	get_footer(); 
?>
