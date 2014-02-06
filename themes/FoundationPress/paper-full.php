<?php
/*
Template Name: Full Width
*/
get_header(); ?>

	<?php
		$args = array(
			'post_type'=> 'paper',
			'order'   => 'ASC'
		);

		$the_query = new WP_Query( $args );
	?>

	<div class="small-12 large-12 columns" role="main">

	<?php /* Start loop */ ?>
	<ul class="large-block-grid-6 medium-block-grid-4 small-block-grid-2">
		<?php while (have_posts()) : the_post(); ?>
			get_template_part( 'loop', 'paper' );
		<?php endwhile; // End the loop ?>
	</ul>

	</div>

<?php get_footer(); ?>
