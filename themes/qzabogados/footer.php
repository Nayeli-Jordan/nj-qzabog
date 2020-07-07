			<?php if (!is_singular( 'tarjeta' )) { ?>
				<footer>
					<div class="container padding-top-bottom-20">
						<div class="row row-complete">
							<?php include (TEMPLATEPATH . '/template/footer_large.php'); ?>
						</div>
					</div>
				</footer>				
			<?php } ?>
		</div> <!-- end main-body -->
		<?php wp_footer(); ?>
	</body>
</html>