<?php get_header(); ?>

<!-- Row for main content area -->
	<div class="row head-top">
		<div class="column">
<div class="column">
<h1>Vote for published articles.</h1>
<h2>Search by authors, titles, or conference year.</h2>
<?php get_search_form(); ?>
</div>
</div>
	</div>

	<div class="small-12 large-12 columns" role="main">
	<?php sort_query_posts_by('rand'); ?>
	<?php if ( have_posts() ) : ?>
		<ul class="large-block-grid-3 medium-block-grid-2 small-block-grid-1">
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'paper' ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		</div>
	<?php endif; // end have_posts() check ?>
	</div>
<?php get_footer(); ?>
