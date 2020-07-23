			<?php if (!is_singular( 'tarjeta' )) { ?>
				<footer>
					<div class="container padding-top-bottom-10">
						<div class="row row-complete">
							<div class="col s12 text-center">
								<p><small>© <?php echo date("Y"); ?> <a href="<?php echo SITEURL; ?>">QZABOGADOS</a></small></p>
							</div>
						</div>
					</div>
				</footer>				
			<?php } ?>
		</div> <!-- end main-body -->
		<?php wp_footer(); ?>
	</body>
</html>