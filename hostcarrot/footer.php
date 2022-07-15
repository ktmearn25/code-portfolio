<?php
/**
 * The template for displaying the footer.
 *
 * @package flatsome
 */

global $flatsome_opt;
?>

</main><!-- #main -->

<footer id="footer" class="footer-wrapper">

	<?php do_action('flatsome_footer'); ?>
    <div class="container absolute-container">
        <div class="absolute-footer">
          <div class="copyright-footer">
            <?php echo do_shortcode( get_theme_mod( 'footer_left_text', '<span>&copy; [ux_current_year] <a href="http://prosupply.thaishopstudio.com/">Prosupply.co.th</a>.All Rights Reserved.</span>' ) ); ?>
                <a class="tsd" target="_blank" href="http://www.thaishopdesign.com"><img src="https://www.prosupply.co.th/wp-content/themes/prosupply/images/TSD-CC.svg"></a>
          </div>
          <?php do_action( 'flatsome_absolute_footer_primary' ); ?>
        </div><!-- .absolute-footer -->
    </div>

</footer><!-- .footer-wrapper -->

</div><!-- #wrapper -->

<?php wp_footer(); ?>

</body>
</html>
