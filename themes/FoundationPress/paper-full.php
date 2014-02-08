<?php
/*
Template Name: Paper Full
*/

get_template_part( 'archive', 'paper' ); ?>

	<div class="small-12 large-8 columns" role="main">

	<?php if ( have_posts() ) : ?>
		<ul class="large-block-grid-6 medium-block-grid-4 small-block-grid-2">
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		</ul>
	<?php endif; // end have_posts() check ?>

<?php get_footer(); ?>
