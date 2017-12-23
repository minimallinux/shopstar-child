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
<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Red<span>Diamond</span></h3>

				<p class="footer-links">
					<?php
 if ( has_nav_menu( 'footer' ) ) {
      wp_nav_menu( array( 'theme_location' => 'footer' ) );
 } ?>
				</p>

				<p class="footer-company-name"><?php printf( __( 'Built by %1$s', 'shopstar_child' ), '<a href="'. esc_url( '#' ) .'">Webmobapps</a> © 2017 Red Diamond' ); ?></p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>103 Carr House Road, Hyde Park</span> Doncaster, Sth Yorks</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
                    <p><a href="tel:+441302368585">01302 368585</a></p>
				</div>

				<div>
					<i class="fa fa-1x fa-envelope"></i>
					<p><a href="mailto:esales@red-diamond-chinese.co.uk">esales@red-diamond-chinese.co.uk</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About Red Diamond</span>
					Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>
<!--footer id="colophon" class="site-footer" role="contentinfo">
<div class="bottom-bar">
	<div class="container"> 
		   <div class="row cols-sm-12">
			<div id="navmenu">
<?php
 if ( has_nav_menu( 'footer' ) ) {
      wp_nav_menu( array( 'theme_location' => 'footer' ) );
 } ?>
</div>
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
