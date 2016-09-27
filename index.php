<?php 
  /* Single Page Template */
?>

<?php get_header(); ?>

	<div class="content">

    <?php 
  if (have_posts()) :
    while (have_posts()) : the_post(); ?>

    <?php the_content(); ?>

<?php endwhile;
  else :
    echo '<p>No content found.</p>';
  endif;
?>

	</div> <!-- End .content -->

</div> <!-- End wrap -->

<?php get_footer(); ?>