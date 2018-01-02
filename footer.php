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


			<div class="footer-grids">
				<div class="footer one">
					<h3>Red Diamond Chinese Restaurant</h3>
					<p> Established in 2004, Red Diamond has gained a large following and a reputation for providing finest quality Chinese, English &amp; Thai dishes for discerning customers in the area. We provide both an in-house cafe with Breakfast and Lunch served Monday to Friday, and a rapid delivery &amp; takeaway service.</p>
					<br />
				    <?php echo do_shortcode("[aws_search_form]");?>
					<div class="clear"></div>
				</div>
				<div class="footer two">
					<h3>Keep Connected</h3>
					<ul>
						<li><a class="fb1" href="#"><i></i>Follow us on Facebook</a></li>
						<li><a class="fb" href="#"><i></i>Follow us on Twitter</a></li>
						<li><a class="fb2" href="#"><i></i>Follow us on Pinterest</a></li>
					    <li><a class="fb4" href="#"><i></i>Add us on Googleplus</a></l>
					    <li><a class="fb3" href="#"><i></i>Get Updates and Promotions</a></li>	
					</ul>
				</div>
				<div class="footer three">
					<h3>Contact Us</h3>
					<ul>
						<li>Red Diamond Chinese <span>103 Carr House Road, Hyde Park</span>Doncaster DN1 2BD</li>
					    <li>+44 1302 368585 </li>
						<li><a href="mailto:esales@red-diamond-chinese.co.uk">esales@red-diamond-chinese.co.uk</a> </li>
					</ul>
                   </div>
				<div class="clear"></div>
			</div>
			<div class="copy-right-grids">
				<div class="copy-left">
						<p class="footer-gd"><?php printf( __( 'Built by %1$s', 'shopstar_child' ), '<a href="'. esc_url( '#' ) .'">Webmobapps</a> © 2018 Red Diamond' ); ?></p>
				</div>
				<div class="copy-right">
					<?php wp_nav_menu( array('menu' => 'footer' )); ?>
				</div>
				<div class="clear"></div>
			</div>
		
		
			<?php wp_footer(); ?>
</body>
</html>
