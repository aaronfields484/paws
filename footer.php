	<footer class="pt-4">
		<section class="container">
			<div class="row g-3 mx-auto">
				<div class="col-lg-3 col-md-6 mb-2">
					<div>
						<h6 class="footer-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum possimus veniam sapiente!</h3>
					</div>
					<?php echo wp_get_attachment_image(get_theme_mod( 'custom_logo' ), 'footerLogo') ?> 		
				</div>
				<?php if ( is_active_sidebar( 'footer_widgets' ) ) : ?>
        			<?php dynamic_sidebar( 'footer_widgets' ); ?>
				<?php endif; ?>
			</div>
		</section>
		<section class="copyright-footer pt-2 pb-2">
			<div class="container">
				<div class="row">
					<div class="col text-center">
                		<p class="text-white m-0 small">Copyright &copy; <?php echo date('Y'); ?> All rights reserved.</p>
            		</div>
				</div>
			</div>
		</section>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
