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
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</article>
	<?php endwhile; // End the loop ?>

	</div>
		
<?php get_footer(); ?>
