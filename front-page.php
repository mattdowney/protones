<?php 
/* Template Name: Home Page Landing */
?>

<?php get_header(); ?>

<?php include('includes/header.php'); ?>

	<div class="content">

		<div class="note">

			<div class="mask">

				<div class="gradient">
					<img src="<?php bloginfo('template_url'); ?>/images/img-note-mask.png" alt="ProTones" />
				</div>

			</div> <!-- End. mask -->

		</div> <!-- End .note -->

		<h1>Different. Sounds. Better.</h1>
		<h2>ProTones are premium iPhone ringtones and alerts that are distinct, polished, and one of a kind. This limited edition set of 20 handcrafted sounds is <span>just $2.99 through <?php echo date('F'); ?></span>.</h2>

		<div class="cta-buttons">
			
			<div class="preview">
				<?php 
				if(is_front_page()){
    		echo do_shortcode('[sc_embed_player fileurl="http://protones.co/wp-content/files/ringtone-snippets.mp3"]'); 
				}
			?>
			</div> <!-- End .preview -->

			<div class="buy-now">
				<?php echo do_shortcode('[sell_media_file item_name="protones-20pack.zip" name="ProTones" description="20 iPhone Ringtones & Alerts" amount="2.99" label="Buy for $2.99" download_link="http://protones.co/wp-content/files/protones-fall-2016.zip"]'); ?>
			</div> <!-- End .buy-now -->

		</div> <!-- End .cta-buttons -->

		<div class="share-buttons">
			<a href="http://www.facebook.com/sharer/sharer.php?u=http://protones.co" class="facebook"><span>F</span></a>
			
			<a href="https://twitter.com/intent/tweet?url=<?php echo htmlspecialchars(urlencode(html_entity_decode('http://protones.co', ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8'); ?>&amp;text=ProTones are hand-crafted iPhone ringtones and alerts that are distinct, polished, and one of a kind." target="_blank" class="twitter"><span>T</span></a>
			
			<a href="//pinterest.com/pin/create/link/?url=http%3A%2F%2Fprotones.co&media=http%3A%2F%2Fprotones.co%2Fpinterest-image.jpg&description=ProTones%20are%20hand-crafted%20iPhone%20ringtones%20that%20are%20distinct%20,%20polished,%20and%20one%20of%20a%20kind." count-layout="horizontal" target="_blank" class="pinterest"><span>B</span></a>
		</div> <!-- End .share -->

	</div> <!-- End .content -->

</div> <!-- End wrap -->

<?php get_footer(); ?>