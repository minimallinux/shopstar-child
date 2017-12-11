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
	<div class="widgets">
        <div class="container">
        	<div class="padder">
        	  <?php if ( is_active_sidebar( 'footer' ) ) : ?>
	            <ul>
	                <?php dynamic_sidebar( 'footer' ); ?>
	            </ul>
	    		<?php endif; ?>
	           <div class="clearboth"></div>
			</div>
        </div>
    </div>
	<div class="bottom-bar">
	<div class="container"> 
		   <div class="row">
			<div class="col c6" id="navmenu">
<?php
 if ( has_nav_menu( 'footer' ) ) {
      wp_nav_menu( array( 'theme_location' => 'footer' ) );
 } ?>
</div>
<div class="col c6" id="copyright">
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
