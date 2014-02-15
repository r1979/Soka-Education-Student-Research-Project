<?php get_header(); ?>

	<div class="row head-top">
		<div class="column">
<div class="column">
<h1>Vote for published articles.</h1>
		<h2><?php _e('Search Results for', 'FoundationPress'); ?> "<?php echo get_search_query(); ?>"</h2>
</div>
</div>
	</div>

	<div class="small-12 large-12 columns" role="main">


	<?php if ( have_posts() ) : ?>
	
	<ul class="large-block-grid-3 medium-block-grid-2 small-block-grid-1">
		<?php while ( have_posts() ) : the_post(); ?>
		<li>
			<?php get_template_part( 'content', get_post_format() ); ?>
		</li>		
		<?php endwhile; ?>
	</ul>
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>

	<?php endif;?>

	<?php if ( function_exists('FoundationPress_pagination') ) { FoundationPress_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'FoundationPress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'FoundationPress' ) ); ?></div>
		</nav>
	<?php } ?>

	</div>

<!-- Row for main content area -->
	<div class="row head-top">
		<div class="column">
<div class="column">
<h1>Vote for published articles.</h1>
<h2>Search by authors, titles, or conference year.</h2>
<?php get_search_form(); ?>
</div>
</div>

<?php get_footer(); ?>
