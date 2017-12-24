<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * shopstar-child
 */

?>

		</div>
	</div>
</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
<div class="bottom-bar">
	<div class="container"> 
		   <div class="row cols-sm-12">
			<div id="navmenu">
<?php
 if ( has_nav_menu( 'footer' ) ) {
      wp_nav_menu( array( 'theme_location' => 'footer' ) );
 } ?>
</div>
<?php wp_nav_menu( array('menu' => 'footer' )); ?>
<div id="copyright">
				<?php printf( __( 'Built by %1$s', 'shopstar_child' ), '<a href="'. esc_url( '#' ) .'">Webmobapps</a> © 2017 Red Diamond' ); ?>
			</div>
			</div>
	</div>
		
    <div class="clearboth"></div>
	</div>
	
</footer><!-- #colophon -->

<?php wp_footer(); ?>
	
</body>
</html>
