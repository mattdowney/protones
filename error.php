<?php 
  /* Error Template */
?>

<iframe id="download" width="1" height="1" frameborder="0" src=""></iframe>

<?php get_header(); ?>

<?php include('includes/download-header.php'); ?>

  <div class="content">
    <br />
    
    <div class="note">

      <div class="mask">

        <div class="gradient">
          <img src="<?php bloginfo('template_url'); ?>/images/img-note-mask.png" alt="ProTones" />
        </div>

      </div> <!-- End. mask -->

    </div> <!-- End .note -->

    <h1>Thank you for purchasing ProTones!</h1>
    <h2>Your download should have started automatically. If you have any issues, please don't hestitate to <a href="mailto:<?php echo antispambot( 'protonesco@gmail.com' );?>"><?php echo antispambot( 'send us an email' );?></a>.</h2> 

    <p><a href="<?php bloginfo('wpurl'); ?>">Go back to the home page</a></p>

  </div> <!-- End .content -->

</div> <!-- End wrap -->

<?php get_footer(); ?>