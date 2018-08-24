<?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'header_menu' ) ); ?>
<?php } ?>

	<!--Page Footer-->
	<div class="footer">
		<div class="row">		
			<div class="col-md-3 col-md-offset-0 col-xs-8 col-xs-offset-2">
				<a href="index.html"><img class="logo_foot" src="<?php bloginfo('template_url')?>/assets/images/LOGO_SAIKYOU_BLACK.png" alt="Logo Clases de Japonés"></a>
				<p class="footer_phrase">Saikyou. Clases de idioma japonés, talleres y artículos relacionados a la cultura japonesa.</p>
			</div>

			<div class="social_networks col-md-2 col-xs-7 col-md-offset-6 col-xs-offset-3">
				<div class="social_icon">
					<a href="https://www.linkedin.com/in/stephaniechacin/"><i class="fab fa-linkedin"></i></a>
				</div>
				<div class="social_icon">
					<a href="https://www.instagram.com/saikyou.nihongo/?hl=es-la"><i class="fab fa-instagram"></i></a>
				</div>	
				<div class="social_icon">
					<a href="https://web.facebook.com/saikyou.nihongo/"><i class="fab fa-facebook-square"></i></a>
				</div>
				<div class="social_icon" id="phone_icon">
					<a href="tel:+56949858127"><i class="fas fa-mobile-alt"></i></a>
				</div>
				<p class="contact_info">saikyou.nihongo@gmail.com</p>
			</div>
		</div>

		<div class="row">
			<div class="copyright col-md-12">
				<p>最強 ©Copyright | Stephanie Power | All Rights Reserved. 2018</p>
			</div>
		</div>
	</div>

<?php get_template_part('_includes/footer', 'maps') ?>
<?php wp_footer() ?>
</body>
</html>