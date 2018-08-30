<?php get_header() ?>

<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>
		<div class="jumbotron"></div>
		<div class="container products__single">
		<?php the_post_thumbnail(array(350,350)) ?>
		<?php the_title() ?>
		<time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time>
		<?php the_content() ?>
		</div>

	<?php } ?>
<?php } else { ?>
	<!-- Content -->
<?php } wp_reset_query(); ?>

<?php get_sidebar() ?>
<?php get_footer() ?>