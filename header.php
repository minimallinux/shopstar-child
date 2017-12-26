<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package shopstar
 */
global $woocommerce;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php
	if ( get_theme_mod( 'shopstar-header-layout', customizer_library_get_default( 'shopstar-header-layout' ) ) == 'shopstar-header-layout-centered' ) :
		get_template_part( 'library/template-parts/header', 'centered' );
	else :
		get_template_part( 'library/template-parts/header', 'left-aligned' );
    endif;
    ?>
	<div id="content" class="site-content">
		<div class="container">
			<div class="padder">
			   <?php echo do_shortcode("[aws_search_form]");?><!--AWS Search Plugin Shortcode-->
			
