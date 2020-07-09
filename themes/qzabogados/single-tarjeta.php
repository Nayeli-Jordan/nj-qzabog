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
    $whatsapp   	= get_post_meta( $post_id, 'tarjeta_whatsapp', true );
    $ubicacion  	= get_post_meta( $post_id, 'tarjeta_ubicacion', true );
    $direccion  	= get_post_meta( $post_id, 'tarjeta_direccion', true );
    $redlinkedin 	= get_post_meta( $post_id, 'tarjeta_redlinkedin', true );
    $redfacebook 	= get_post_meta( $post_id, 'tarjeta_redfacebook', true );
    $redtwitter  	= get_post_meta( $post_id, 'tarjeta_redtwitter', true );
    $banner  	= get_post_meta( $post_id, 'tarjeta_banner', true );
?>
	<section id="tmptnj-tarjeta">
		<div class="tmptnj-tarjeta_header bg-image relative" style="background-image: url(<?php echo $banner; ?>)">
			<div class="bg-absolute"></div>
			<a class="tmptnj-tarjeta_linkhome" href="<?php echo SITEURL; ?>" title="Sitio web QZ ABOGADOS">
				<img src="<?php echo THEMEPATH; ?>images/tarjetas/logo.png" alt="Logo QZ ABOGADOS">
			</a>
			<a class="tmptnj-tarjeta_copy" href="javascript:getlink();" title="Copiar enlace"><em class="icon-docs"></em></a>
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
			</div>
			<div class="tmptnj-tarjeta_description">
				<div class="tmptnj-tarjeta_contacto container">
					<div class="tmptnj-tarjeta_contacto-line"></div>
					<?php if ($telefono != '') { ?>
						<a href="tel:<?php echo $telefono ?>" alt="Tel. <?php echo $telefono ?>" class="inline-block">
							<div class="btn-hexagono btn-hexagono-relleno">
								<div class="hexagono"><em class="icon-phone"></em></div>
							</div>
						</a>
					<?php } 
					if ($whatsapp != '') { ?>
						<a href="https://wa.me/<?php echo $whatsapp ?>" alt="Whatsapp <?php echo $whatsapp ?>" class="inline-block">
							<div class="btn-hexagono btn-hexagono-relleno">
								<div class="hexagono"><em class="icon-whatsapp"></em></div>
							</div>
						</a>

					<?php } 
					if ($correo != '') { ?>
					<a href="mailto:<?php echo $correo ?>" alt="Correo <?php echo $correo ?>" class="inline-block">
						<div class="btn-hexagono btn-hexagono-relleno">
							<div class="hexagono"><em class="icon-mail-alt"></em></div>
						</div>
					</a>
					<?php } ?>
					<a href="<?php echo SITEURL; ?>" alt="Sitio web QZ ABOGADOS" class="inline-block">
						<div class="btn-hexagono btn-hexagono-borde">
							<div class="hexagono"><div class="hexagono hexagono-small"></div><em class="icon-globe"></em></div>
						</div>
					</a>
				</div>
				<div class="tmptnj-tarjeta_ubicacion">
					<div id="tmptnj-tarjeta_btnubicacion"><em class="icon-map-1"></em> <?php echo $ubicacion ?></div>
					<div id="tmptnj-tarjeta_mapubicacion">
						<p class="container margin-bottom-15"><?php echo $direccion ?></p>
						<div class="bg-image relative" style="background-image: url(<?php echo THEMEPATH; ?>images/tarjetas/mapa.png)">
							<a href="https://goo.gl/maps/gwfmiagT9eWUkGEa6" target="_blank" class="bg-absolute"></a>
							<em class="icon-location color-primary wow fadeIn slow"><span class="pulse"></span></em>
						</div>						
					</div>
				</div>
				<div class="tmptnj-tarjeta_redes">
					<!-- <div class="container">
						<a href="<?php echo $redlinkedin ?>" target="_blank" alt="Linkedin"><em class="icon-linkedin"></em></a>
						<a href="<?php echo $redfacebook ?>" target="_blank" alt="Facebook"><em class="icon-facebook"></em></a>
						<a href="<?php echo $redtwitter ?>" target="_blank" alt="Twitter"><em class="icon-twitter"></em></a>						
					</div> -->
					<p><small>© <?php echo date("Y"); ?> <a href="https://www.behance.net/nayelijord22e2" target="_blank">QZABOGADOS</a></small></p>
				</div>
			</div>
		</div>
	</section>
<?php 
	endwhile; // end of the loop.
	get_footer(); 
?>
