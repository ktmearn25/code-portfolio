<?php

$align = 'small-text-center';
if ( get_theme_mod( 'footer_bottom_align' ) == 'center' ) {
  $align = 'text-center';
}

ob_start();
do_action( 'flatsome_absolute_footer_secondary' );
$flatsome_absolute_footer_secondary = trim( ob_get_clean() );
$flatsome_footer_right_text = trim( get_theme_mod( 'footer_right_text' ) );

?>

<div class="absolute-footer <?php echo flatsome_option('footer_bottom_text'); ?> medium-text-center <?php echo $align;?>">
  <div class="container clearfix">
	
	  <div class="copyright-footer">
			<?php echo do_shortcode( get_theme_mod( 'footer_left_text', 'Copyright [ux_current_year] &copy; <strong>UX Themes</strong>' ) ); ?>  
			<a class="tsd" target="_blank" href="https://www.thaishopdesign.com"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/TSD-CC.svg"/> </a>    
	  </div>
		
      <?php do_action( 'flatsome_absolute_footer_primary' ); ?>

  </div><!-- .container -->
</div><!-- .absolute-footer -->


