<?php get_header() ?>
	<?php the_post() ?>
	
	<?php the_post_thumbnail() ?>
	<?php the_title() ?>
	<?php the_content(); ?>

<body>

	<section class="sidebar_left">
		<h2 class="about_title">Conócenos</h2>
		
		<p class="about_info col-md-6">¡Hola! Mi nombre es Stephanie Chacin. Me dedico a la enseñanza del Idioma Japonés desde hace cinco años.</p>

		<img class="about_image_1" src="<?php bloginfo('template_url')?>/assets/images/Steph.jpg" alt="Imágen de perfil">

		<p class="about_info col-md-12">Con certificación de proficiencia del japonés nivel N3. Y experiencia profesional como profesora y coordinadora general del primer instituto de japonés en Maracaibo Venezuela, GOEN Maracaibo. Actual profesora del Instituto Cultural Chileno-Japonés y la Pontificia Universidad Católica de Chile.</p>

		<img class="about_image" src="<?php bloginfo('template_url')?>/assets/images/logo-uc-lineal-azul.png" alt="Logo Universidad Católica">
		
		<p class="about_info col-md-12">Formé parte del programa de intercambio cultural  “Ship For the World Youth”. Representante y participante de la edición 24 del Barco para los Jóvenes del Mundo. Programa patrocinado por el gobierno de Japón.</p>

		<img class="about_image" src="<?php bloginfo('template_url')?>/assets/images/swy24.jpg" alt="Barco para los Jóvenes del Mundo">

		<p class="about_info col-md-12"> Representante venezolana y líder del Comité de Presentación Nacional y ponente en la Asamblea Global, conferencia de proyectos llevada a cabo en Lima, Perú.</p>

		<img class="about_image" src="<?php bloginfo('template_url')?>/assets/images/delegation.jpg" alt="Delegación Venezolana Swy24">

		<p class="about_info col-md-12">Mi interés por continuar difundiendo la cultura japonesa a través del idioma y otras actividades como la danza, me llevó a formar Saikyou, un club de estudio de idioma japonés y una página llena de recursos para los estudiantes.</p>
	</section>

	<section class="sidebar_right">
		<h3 class="blog_title"><a href="<?php bloginfo('url') ?>/blog/">BLOG</a></h3>
		<img class="about_image" src="<?php bloginfo('template_url')?>/assets/images/swy24.jpg" alt="">

		<p class="about_info col-md-12">Capacitaciones en el Sistema Marugoto de enseñanza del japonés, por parte de la representante de la Fundación Japón en Brasil. Profesora Chisato Yoshioka.</p>

		<h3 class="blog_title"><a href="<?php bloginfo('url') ?>/blog/">JLPT</a></h3>
		<img class="about_image" src="<?php bloginfo('template_url')?>/assets/images/jlptlogo.jpg" alt="">

		<p class="about_info col-md-12">El Examen Oficial de Nivel de Lengua Japonesa se realiza a nivel mundial para evaluar y certificar la competencia en la lengua japonesa. Popularmente conocido como Nôken (JLPT en sus siglas en inglés) ha sido organizado por la Fundación Japón y la Japan Educational Exchanges and Services desde 1984 como un medio fiable para evaluar y certificar la competencia en japonés de los hablantes no nativos.</p>

		<h3 class="blog_title"><a href="<?php bloginfo('url') ?>/blog/">Minna vs Marugoto</a></h3>
		<img class="about_image" src="<?php bloginfo('template_url')?>/assets/images/Minna1.jpg" alt="">

		<p class="about_info col-md-12">Métodos de aprendizaje del Japonés. Minna no Nihongo vs Marugoto: ¿Cual es el ideal para ti?</p>

	</section>

<?php get_footer() ?>