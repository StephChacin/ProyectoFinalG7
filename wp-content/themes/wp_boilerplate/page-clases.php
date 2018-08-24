<?php get_header() ?>
	<?php the_post() ?>
	
	<?php the_post_thumbnail() ?>
	<?php the_title() ?>
	<?php the_content(); ?>

	<section class="banner_section1">
		<!--Aquí va un carrousel-->
		<div class="main-carousel">
			<div class="carousel-cell responsive"><img src="<?php bloginfo('template_url')?>/assets/images/jlptlogo.jpg" alt=""></div>
			<div class="carousel-cell responsive"><img src="<?php bloginfo('template_url')?>/assets/images/Japan.jpg" alt=""></div>
			<div class="carousel-cell responsive"><img src="<?php bloginfo('template_url')?>/assets/images/fan.jpg" alt=""></div>
			<div class="carousel-cell responsive"><img src="<?php bloginfo('template_url')?>/assets/images/totoro.jpg" alt=""></div>
		</div>
	</section>

	<section class="container">
		
		<h3>Clases de Japonés</h3>
		<h1>日本語のクラス</h2>

		<ul>
			<li class="clases_info col-md-3">
				<img class="class_image_kana" src="<?php bloginfo('template_url')?>/assets/images/icons8-hiragana-a-filled-50.png" alt="Logo Marugoto">
				<p>Las clases se proponen como una iniciación a la lengua japonesa desde el nivel más elemental para la comprensión básica del idioma.</p>
			</li>

			<li class="clases_info col-md-3">
				<img class="class_image_kana" src="<?php bloginfo('template_url')?>/assets/images/icons8-hiragana-i-filled-50.png" alt="Logo Marugoto">
				<p>Desde el comienzo, se motivará a estudiar y aprender a través de dinámicas y actividades que buscan desarrollar distintas habilidades.</p>
			</li>

			<li class="clases_info col-md-3">
				<img class="class_image_kana" src="<?php bloginfo('template_url')?>/assets/images/icons8-hiragana-u-filled-50.png" alt="Logo Marugoto">
				<p>El aprendizaje de los silabarios Hiragana y Katakana, así como los Kanji (ideogramas chinos) será imprescindible</p>
			</li>
		</ul>	

		<ul>
			<li class="clases_info col-md-3 col-md-offset-2">
				<img class="class_image_kana" src="<?php bloginfo('template_url')?>/assets/images/icons8-hiragana-e-filled-50.png" alt="Logo Marugoto">
				
				<p>Para toda persona interesada en el idioma, que desea ajustar su horario y progresar a su propio ritmo.</p>
			</li>
			
			<li class="clases_info col-md-3">
				<img class="class_image_kana" src="<?php bloginfo('template_url')?>/assets/images/icons8-hiragana-o-filled-50.png" alt="Logo Marugoto">
				
				<p>Las clases serán programadas según la disponibilidad horaria y los requerimientos de los interesados.</p>
			</li>
		</ul>
	</section>
	
	<section class="class_section_2">
		<p class="classes_objective_main">Queremos brindar mayor acceso al estudio de la lengua japonesa, facilitando herramientas e impartiendo talleres de iniciación al idioma y otras actividades culturales.</p>

		<ul  class="classes_objectives col-md-6">
			<p>Entre nuestros	objetivos está que nuestros estudiantes logren:</p>
				<li>Conocer los principios fundamentales de la lengua Japonesa</li>
				<li>Familiarizarse con la cultura al mismo tiempo que aprenden a comprender y utilizar el lenguaje Japonés básico.</li>
				<li>Adquirir vocabulario y elementos gramaticales básicos necesarios para manejar la
				lengua japonesa correctamente.</li>
		</ul>

		
	</section>		
		<!--Para mayor información: ¡contáctanos!
		agregar formulario como uno de los método de contacto. El precio de las clases no incluye el libro de texto que irá a cargo del alumno (se especificará el libro necesario para cada nivel y según las necesidades propias del alumno).
		Si no sabes cual es tu nivel, puedes realizar nuestra prueba de nivel y enviárnosla y juntos decidiremos cuáles son las mejores clases para ti.、-->
		

	<div class="center_phrase_classes">
		<h2>七転び八起き</h2>
		<h5>"Si caes siete veces, levántate ocho"</h5>		
	</div>

		<section class="container">
			<img class="class_image_logo col-md-5" src="<?php bloginfo('template_url')?>/assets/images/curso_marugoto.png" alt="Logo Marugoto">

			<div class="col-md-7">
				<h2 class="method_title">まるごと　日本のことばと文化</h2>
				<h3>Método Marugoto</h3>
				<p class="clases_info_2">Marugoto es un material didáctico dirigido a aquellas personas que están aprendiendo la lengua japonesa bajo los <strong>Estándares para la enseñanza de la Fundación Japón</strong> -Marugoto: lengua y cultura japonesa-, creado para la comprensión de  la gramática con un enfoque comunicacional. Junto a los aspectos culturales y expresiones lingüísticas.
				<strong>Los derechos de autor de estos materiales pertenecen a la Fundación Japón.</strong></p>
			</div>
				
			<h3>Talleres:</h3>	
			<p class="clases_info_2">Desarrollamos diversos talleres con el objetivo de difundir el idioma y la cultura japonesa. En busca de ser un puente de entendimiento y acercamiento entre el país nipón y América del sur.</p>
			
			<p class="col-md-2 clases_info_3">Soran Bushi</p>
			<p class="col-md-2 clases_info_3">Hanafuda</p>
			<p class="col-md-4 clases_info_3">Japonés a través del Manga</p>
			<p class="col-md-3 clases_info_3"><strong>日本語能力試験</strong></p>

			<div class="countdown_title"><p>Examen de suficiencia de Idioma Japonés</p></div>
			<div class="countdown" id="getting-started"></div>


		</section>

<?php get_footer() ?>