<?php get_header(); ?>

	<div class="small-12 large-8 columns" role="main">

<?php $authors = wp_get_post_terms( $post->ID, 'authors');  ?>
<?php $issue = wp_get_post_terms( $post->ID, 'published_issue');  ?>
<?php $postmeta = get_post_custom($post->ID)?>

</p>


<hr />

	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
			<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			</header>
			<p><strong>
			<?php print($authors[0]->name); ?>
			</strong>
			<br/>
			<span>
			<a href="<?php echo bloginfo('url');?>/published_issue/<?php print($issue[0]->name); ?>">Published <?php print($issue[0]->name); ?></a>,
			pg. <?php echo $postmeta['published_pages'][0];  ?>
			</span>
			<footer>
				<?php
				if(function_exists('wpv_voting_display_vote'))
				 wpv_voting_display_vote(get_the_ID());
				?>
			</footer>
		</article>
	<?php endwhile;?>

	</div>
	<?php get_sidebar(); ?>

<?php get_footer(); ?>
