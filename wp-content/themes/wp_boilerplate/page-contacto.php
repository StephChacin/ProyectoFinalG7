<?php get_header() ?>
	<?php the_post() ?>

	<?php the_title() ?>
	<?php the_content(); ?>
	
	<?php if ( is_active_sidebar( 'contact_widget' ) ) : ?>
		<?php dynamic_sidebar( 'contact_widget' ); ?>            
	<?php endif; ?>

	<div class="jumbotron jumbo_contact"></div>

	<!--Aquí va el formulario-->
	<div class="contact_section container">
		<div class="row">
			<section class="contact_form col-sm-12 col-md-5">
				<h3 class="contact_head">¡ESCRÍBENOS!</h3>
				<div class="contact">
					<p>No dudes en contactarnos si tienes cualquier consulta<br> sobre las clases de japonés.</p>
				</div>
				<div class="arrow-up"></div>
				<form id="contact" class="form-horizontal" role="form">
					<div class="form-group">  
						<div class="col-sm-12 col-md-6">
							<input id="name" name="name" type="text" placeholder="NOMBRE" class="form-control">
						</div>
					</div>
					<div class="form-group">  
						<div class="col-sm-12 col-md-6">
							<input id="email" name="email" type="email" placeholder="E-MAIL" class="form-control">
						</div>
					</div>
					<div class="form-group">  
						<div class="col-sm-12 col-md-6">
							<textarea class="form-control" id="message" name="message" placeholder="MENSAJE"></textarea>
						</div>
					</div>
					<button id="send" name="send" class="btn btn-block col-md-6">Enviar</button>
				</form>
			</section>
			<!--API MAP-->
			<h3 class="contact_form">Nuestra ubicación</h3>
			<div id="map"></div>

		</div>
	</div>


	<div id="content"></div><a href="#" id="back-to-top" title="Back to top">&uarr;</a>

<?php get_footer() ?>