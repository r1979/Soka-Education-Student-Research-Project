<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */
?>

<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php $authors = wp_get_post_terms( $post->ID, 'authors');  ?>
<?php $issue = wp_get_post_terms( $post->ID, 'published_issue');  ?>
<?php $postmeta = get_post_custom($post->ID)?>
	<header>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</header>
<p><strong>
<?php print($authors[0]->name); ?>
</strong>
<br/>
<span>
<a href="<?php echo bloginfo('url');?>/published_issue/<?php print($issue[0]->name); ?>"><?php print($issue[0]->name); ?></a>, 
<?php echo $postmeta['published_pages'][0];  ?>
</span>
</p>

<?php
if(function_exists('wpv_voting_display_vote'))
 wpv_voting_display_vote(get_the_ID()); 	
?>
<hr />
</li>
