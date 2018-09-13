<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js lt-ie9" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<?php global $archi_option; ?>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<!-- Favicons
    ================================================== -->
    <?php archi_custom_favicon() ?>
    
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<?php 
    if(isset($archi_option['header_layout']) and $archi_option['header_layout']!="htop_page" ){
        get_template_part('framework/headers/header-landing2'); 
    }else{ 
?>
<div id="wrapper">
    <!-- header begin -->
   
    <!-- header close -->
<?php } ?>    