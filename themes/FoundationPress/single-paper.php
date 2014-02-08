<?php get_header(); ?>

	<div class="small-12 large-12 columns" role="main">

	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>

			</header>
			<div class="entry-content">
				<?php the_field( "paper_abstract" ); ?>
				<span class="authors">
					<?php the_field( "authors" ); ?>
				</span>
			</div>
				<span class="pub_issue">
					<?php the_field( "published_issue" ); ?>,
				</span>
				<span class="pub_pages">
					<?php the_field( "published_pages" ); ?>
				</span>
		</article>
	<?php endwhile;?>

	</div>

<?php get_footer(); ?>
