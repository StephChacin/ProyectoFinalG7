<?php get_header() ?>
	<?php the_post() ?>

<!--Contenido Tienda-->

	<ul class="products">
	<?php
		$arg = array(
			'post_type'		 => 'Tienda',
			'posts_per_page' => 10,
			'paged'			 => $paged
		);
	
		$get_arg = new WP_Query( $arg );
	
		while ( $get_arg->have_posts() ) {
			$get_arg->the_post();
		?>
			
		<li class="products__books">
			<a href="<?php the_permalink() ?>" class="products__thumbnail">
				<?php the_post_thumbnail(array(250,220)) ?>
				<?php the_content(); ?>
				<ul class="social">
					<div class="caption"><h4><?php the_title() ?></h4></div>
					<li class="social__element"><button class="social__btn_cart social__link" href="#"><i class="fas fa-shopping-cart"></i></i></button></li>
					<li class="social__element"><button class="social__btn social__like" href="#"><i class="fas fa-heart"></i></button></li>
				</ul>
			</a>
		</li>
	
	<?php } wp_reset_postdata(); ?>
	</ul>
	
	<?php the_pagination($get_arg); ?>

	<div id="content"></div><a href="#" id="back-to-top" title="Back to top">&uarr;</a>

	<div class="container">
		<button class="btn_phrase" id="get-another-quote-button"><strong>Nueva Frase</strong></button>
		<h2 id="#quote-title"></h2>
		<p id='quote-content'></p>
	</div>

	<div id="content"></div><a href="#" id="back-to-top" title="Back to top">&uarr;</a>

<?php get_footer() ?>


