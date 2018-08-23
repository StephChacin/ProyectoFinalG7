<?php get_header() ?>
<!--<h1>Body de la página de inicio</h1>-->

	<section class="banner_section1">
		<!--Aquí va un carrousel-->
		<div class="main-carousel">
			<div class="carousel-cell responsive"><img src="<?php bloginfo('template_url')?>/assets/images/smallbanner.jpg" alt=""></div>
			<div class="carousel-cell responsive"><img src="<?php bloginfo('template_url')?>/assets/images/CABECERA SAIKYOU-01.png" alt=""></div>
			<div class="carousel-cell responsive"><img src="<?php bloginfo('template_url')?>/assets/images/imagendeprueba.jpg" alt=""></div>
			<div class="carousel-cell responsive"><img src="<?php bloginfo('template_url')?>/assets/images/tori.jpg" alt=""></div>
		</div>
	</section>

	<div class="top_phrase">
		<h2>いっしょに勉強しましょう！</h2>
		<h4>Aprende japonés con nosotros</h4>
	</div>	

	<div class="container">
		<ul class="row categories">
			<li class="category__info col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-0">
				<img class="category__icon" src="<?php bloginfo('template_url')?>/assets/images/japan.png" alt="Categoría">
				<div class="category__text">
					<p>Estas clases son ideales para ti si quieres estudiar japonés a tu ritmo.</p>
				</div>
			</li>

			<li class="category__info col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-0">
				<img class="category__icon" src="<?php bloginfo('template_url')?>/assets/images/lotus.png" alt="">
				<div class="category__text">
					<p>Material de estudio que puedes descargar. Juegos y canciones para aprender de forma liertida</p>
				</div>
			</li>
			<li class="category__info col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-0">	
				<img class="category__icon" src="<?php bloginfo('template_url')?>/assets/images/origami.png" alt="">
				<div class="category__text">
					<p>Libros originales. Y artículos importados desde Japón.</p>	
				</div>
			</li>		
			<li class="category__info col-xs-10 col-xs-offset-1 col-md-4 col-lg-4 col-md-offset-0">
				<img class="category__icon" src="<?php bloginfo('template_url')?>/assets/images/uchiwa.png" alt="">
				<div class="category__text">
					<p>Desarrollaremos las clases alrededor de un libro principal. Trabajando todos los aspectos del idioma.</p	
					</div>
				</li>

				<li class="category__info col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-0">
					<img class="category__icon" src="<?php bloginfo('template_url')?>/assets/images/koinobori.png" alt="">
					<div class="category__text">
						<p>Gramática, vocabulario, conversación, comprensión auditiva, escritura: hiragana, katakana, kanji.</p>
					</div>
				</li>

				<li class="category__info col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-0">	
					<img class="category__icon" src="<?php bloginfo('template_url')?>/assets/images/bamboo.png" alt="">
					<div class="category__text">
						<p>Examen de proficiencia del Japonés: JLPT</p>
					</div>
				</li>
			</ul>
		</div>

		<div class="center_phrase">
			<h3>早く行きたいなら一人で行け、遠くへ行きたいならみんなで行け</h3>
			<h4>Si quieres ir rápido, ve solo. Si quieres is lejos ve junto a otras personas</h4>		
		</div>

		<div class="container middle_section">
			<div class="imagen_conocenos col-md-5">
				<img src="<?php bloginfo('template_url')?>/assets/images/Steph.jpg" alt="Conocemos">
			</div>
			
			<div class="about_us col-md-7">
				<h2>Conócenos</h2>
				<p>¡Hola! Mi nombre es Stephanie Chacin. Me dedico a la enseñanza del <b>Idioma Japonés</b> como lengua extranjera desde hace cinco años. Mi experiencia, además, se centra en la creación de material didáctico, dinámicas orientadas al aprendizaje y gestión académica. Con certificación de proficiencia del japonés <b>nivel N3</b>. Y experiencia profesional como profesora y coordinadora general del primer instituto de japonés en Maracaibo Venezuela, GOEN Maracaibo. Actual profesora del Instituto Cultural Chileno-Japonés y la Pontificia Universidad Católica de Chile.

					Si quieres saber un poco más, haz click <a href="conocenos.html">aquí.</a></p>
				</div>
			</div>

			<div class="middle_phrase">
				<h2>好きこそ物の上手なれ！</h2>
				<h4>"Te volverás hábil en las cosas que te gustan"</h4>
				<!--What one likes, one will do well-->
			</div>

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

<?php get_sidebar() ?>

<?php get_footer() ?>