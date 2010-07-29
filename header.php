<?php
/**
 * @package PalaceCafe
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
