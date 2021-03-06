<?php get_header(); ?>

	<div class="row head-top">
		<div class="column">
<div class="column">
<h1>Read about SESRP.</h1>
</div>
</div>
	</div>

	<div class="small-12 large-8 columns" role="main">
	
	<?php if ( have_posts() ) : ?>
	
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>
		
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		
	<?php endif;?>
	
	<?php if ( function_exists('FoundationPress_pagination') ) { foundationPress_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'FoundationPress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'FoundationPress' ) ); ?></div>
		</nav>
	<?php } ?>

	</div>
	<?php get_sidebar(); ?>
		
<?php get_footer(); ?>
