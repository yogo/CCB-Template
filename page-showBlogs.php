<?
/*
Template Name: Show All Blogs
*/
?>
<!-- Web Template: 1cdn version 0.13p -->
<? require_once("http://www.montana.edu/msucommon/php/1cdn/1cdnp1.php"); ?>
<? bloginfo('title'); ?>
<? require_once("http://www.montana.edu/msucommon/php/1cdn/1cdnp2.php"); ?>

<!-- You may insert necessary includes here -->
<link href="<? echo bloginfo('template_url') ?>/style.css" type="text/css" rel="stylesheet" title="styles">
<? require_once("http://www.montana.edu/msucommon/php/1cdn/1cdnp3.php"); ?>
<? require_once("http://www.montana.edu/msucommon/php/1cdn/1cdnp4.php"); ?>
<!---------------------------------------->
<!-- Begin Insert Left Nav Content-->
<!---------------------------------------->
<div class="sidebar" id="sidebarLeft">
<?php
// Test if Sticky Menu plugin is active, then display menu items for menu 'main'
$current_plugins = get_option('active_plugins'); 
if (in_array('stickymenu/stickymenu.php', $current_plugins)) { 
$menu = new stickymenu;
$menu->display_menu('menu=main'); # To display menu 'main' (case sensitive)
};	
?>
	<?php 	/* Widgetized sidebar, if you have the plugin installed. */
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?>
	<?php endif; ?>
</div>
<!---------------------------------------->
<!-- End Insert Other Left Nav Content  -->
<!---------------------------------------->
<? get_header(); ?>
<!---------------->
<a href="<? bloginfo('url') ?>" class="departmentTitle"><? bloginfo('name'); ?></a>&nbsp;&gt;&nbsp;<? the_title(); ?>
<!---------------->
<!-- Page Title -->
<!---------------->
<!-------------------------------->
<!-- Main Content Window Begin- -->
<!-------------------------------->
<? list_all_wpmu_blogs('', 'name', '<p>', '</p>', 'first_created');?>	
</div>

<!---------------------------->
<!-- End Main Content Window-->
<!---------------------------->
<? require_once("http://www.montana.edu/msucommon/php/1cdn/1cdnp9.php"); ?>
<!-- ###### BEGIN OPTIONAL ITEM: Text-only / Last Updated ###### -->
<!-- require_once("http://www.montana.edu/msucommon/php/1cdn/1cdnp10v2.php");-->
 
<!--require_once("http://www.montana.edu/msucommon/php/1cdn/1cdnp10v3.php"); -->
<!-- ###### END OPTIONAL ITEM: Text-only / Last Updated  ##### -->
<? require_once("http://www.montana.edu/msucommon/php/1cdn/1cdnp11.php"); ?>
<!------------------------>
<!--Insert Header2 Image-->
<!------------------------>
<!--<img src="" width="170" alt="">-->
<!---------------------------->
<!--End Insert Header2 Image-->
<!---------------------------->
<? require_once("http://www.montana.edu/msucommon/php/1cdn/1cdnp11-5.php"); ?>
<!-------------------------------->
<!-- Begin Right Nav Bar Content-->
<!-------------------------------->
<div class="sidebar" id="sidebarRight">
			<?php 	/* Widgetized sidebar, if you have the plugin installed. */
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : ?>
			<?php endif; ?>
</div>
<!-------------------------------->
<!-- End Right Nav Bar Content  -->
<!-------------------------------->
<? require_once("http://www.montana.edu/msucommon/php/1cdn/1cdnp12.php"); ?>
