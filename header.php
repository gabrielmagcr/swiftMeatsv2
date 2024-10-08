<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
?>

<!doctype html>
<html class="no-js"  <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<!-- Osano Cookie Consent -->
	<script src=https://cmp.osano.com/169m5QToXBlu63VAe/9c1544c8-47fb-4f1c-9688-c9f7d54a48cb/osano.js></script>
	<!-- Force IE to use the latest rendering engine available -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0">
	<!-- If Site Icon isn't set in customizer -->
	<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
	<!-- Icons & Favicons -->
	<link rel="icon" href="/favicon.png">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />	
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
	<?php } ?>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<script src="https://kit.fontawesome.com/ee01b20d7e.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
	<?php wp_head(); ?>
	<script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-PWNBCJJ');</script>
	<!-- End Google Tag Manager -->
	<script type="text/javascript">new Image(1,1).src="//ad.ipredictive.com/d/track/cvt/pixel?acct_id=53617&cache_buster="+Math.floor(Date.now()/1000);</script>
	<noscript>
	<img src="//ad.ipredictive.com/d/track/cvt/pixel?acct_id=53617&cache_buster=[timestamp]" height="1" width="1" style="display:none"></img>
	</noscript>
</head>	
<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PWNBCJJ"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<style>
#gform_submit_button_2 {
    border: none;
    background-color: #dc1111;
    color: #fff;
    padding: 10px;
    border-radius: 4px;
}
</style>
	<?php //get_template_part('inc/top', 'sticky-links'); ?>
	<?php get_template_part('inc/top', 'navigation'); ?>