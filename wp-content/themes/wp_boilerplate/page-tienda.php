<?php get_header() ?>
	<?php the_post() ?>
	
	<?php 
		$arg =array (
			'post_type' =>'tienda_post_type',
			'post_per_page' =>6,
			'paged' =>$paged
		);

	$get_arg = new WP_Query($arg);
	while ($get_arg->have_post() ){
		$get_arg->the_post();
	?>
	
		<?php the_post_thumbnail() ?>
		<?php the_title() ?>
		<?php the_content(); ?>
	<?php } wp_reset_postdata();
	?>
	<?php the_pagination($get_arg); ?>
	<?php the_permalink() ?> 

	<ul class="products">
		<li class="products__books">
			<div class="products__thumbnail">
				<img src="<?php bloginfo('template_url')?>/assets/images/MarugotoA1K.jpg" alt="Producto 1" class="products__img">
				<ul class="social">
					<div class="caption"><h4>Libro Marugoto A1K</h4></div>
					<li class="social__element"><button class="social__btn_cart social__link" href="#"><i class="fas fa-shopping-cart"></i></i></button></li>
					<li class="social__element"><button class="social__btn social__like" href="#"><i class="fas fa-heart"></i></button></li>
				</ul>
			</div>
		</li>

		<li class="products__books">
			<div class="products__thumbnail">
				<img src="<?php bloginfo('template_url')?>/assets/images/MarugotoA1R.jpg" alt="Producto 1" class="products__img">
				<ul class="social">
					<div class="caption"><h4>Libro Marugoto A1R</h4></div>
					<li class="social__element"><button class="social__btn_cart social__link" href="#"><i class="fas fa-shopping-cart"></i></i></button></li>
					<li class="social__element"><button class="social__btn social__like" href="#"><i class="fas fa-heart"></i></button></li>
				</ul>
			</div>
		</li>

		<li class="products__books">
			<div class="products__thumbnail">
				<img src="<?php bloginfo('template_url')?>/assets/images/MarugotoA2.2.jpg" alt="Producto 1" class="products__img">
				<ul class="social">
					<div class="caption"><h4>Libro Marugoto A2</h4></div>
					<li class="social__element"><button class="social__btn_cart social__link" href="#"><i class="fas fa-shopping-cart"></i></i></button></li>
					<li class="social__element"><button class="social__btn social__like" href="#"><i class="fas fa-heart"></i></button></li>
				</ul>
			</div>
		</li>

		<li class="products__books">
			<div class="products__thumbnail">
				<img src="<?php bloginfo('template_url')?>/assets/images/MinnaShokyuu1.jpg" alt="Producto 1" class="products__img">
				<ul class="social">
					<div class="caption"><h4>Libro Minna no Nihongo I</h4></div>
					<li class="social__element"><button class="social__btn_cart social__link" href="#"><i class="fas fa-shopping-cart"></i></i></button></li>
					<li class="social__element"><button class="social__btn social__like" href="#"><i class="fas fa-heart"></i></button></li>
				</ul>
			</div>
		</li>

		<li class="products__books">
			<div class="products__thumbnail">
				<img src="<?php bloginfo('template_url')?>/assets/images/MinnaShokyuu2.jpg" alt="Producto 1" class="products__img">
				<ul class="social">
					<div class="caption"><h4>Libro Minna no Nihongo II</h4></div>
					<li class="social__element"><button class="social__btn_cart social__link" href="#"><i class="fas fa-shopping-cart"></i></i></button></li>
					<li class="social__element"><button class="social__btn social__like" href="#"><i class="fas fa-heart"></i></button></li>
				</ul>
			</div>
		</li>

		<li class="products__books">
			<div class="products__thumbnail">
				<img src="<?php bloginfo('template_url')?>/assets/images/TryN4.jpg" alt="Producto 1" class="products__img">
				<ul class="social">
					<div class="caption"><h4>TRY N4 JLPT</h4></div>
					<li class="social__element"><button class="social__btn_cart social__link" href="#"><i class="fas fa-shopping-cart"></i></i></button></li>
					<li class="social__element"><button class="social__btn social__like" href="#"><i class="fas fa-heart"></i></button></li>
				</ul>
			</div>
		</li>
	</ul>

	<div id="content"></div><a href="#" id="back-to-top" title="Back to top">&uarr;</a>

<?php get_footer() ?>