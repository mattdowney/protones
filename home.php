<?php 
/* Blog Page Landing */
?>

<?php get_header(); ?>

<h1 class="blog-greeting">Thoughts and observations on <a href="<?php bloginfo('wpurl'); ?>/blog/category/design/">design</a>, <a href="<?php bloginfo('wpurl'); ?>/blog/category/tech/">tech</a>, <a href="<?php bloginfo('wpurl'); ?>/blog/category/books/">books</a>, and more.</h1>

<div class="blog-container">

<?php 
	if (have_posts()) :
		while (have_posts()) : the_post(); ?>

	<div class="blog-article-content">
		<?php if ( has_post_thumbnail() ) : ?>
			<a class="blog-article-thumb" href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" /></a>
		<?php endif; ?> <!-- End post thumbnail -->
		
			<div class="blog-article-excerpt">
				<?php exclude_post_categories("1"); ?>
				<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<p><?php echo substr(get_the_excerpt(), 0,180); ?>&nbsp;&hellip;</p>
				<a class="button" href="<?php the_permalink(); ?>"><?php the_field('more-button'); ?></a>
			</div> <!-- End blog-article-excerpt -->

	</div> <!-- End blog-article-content -->

<?php endwhile;
	else :
		echo '<p>No content found.</p>';
	endif;
?>

</div> <!-- End article-container -->

<?php the_posts_pagination( array(
    'mid_size' => 2,
    'prev_text' => __( '&#8592;&nbsp; Prev', 'textdomain' ),
    'next_text' => __( 'Next &nbsp;&#8594;', 'textdomain' ),
) ); ?>

<?php get_template_part('includes/newsletter'); ?>

<?php get_template_part('includes/footer'); ?>

<?php get_footer(); ?>