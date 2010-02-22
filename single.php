<!-- Web Template: 1cdn version 0.13p -->
<? require_once("http://www.montana.edu/msucommon/php/1cdn/1cdnp1.php"); ?>
<? bloginfo('title'); ?> - <? the_title() ?>
<? require_once("http://www.montana.edu/msucommon/php/1cdn/1cdnp2.php"); ?>

<!-- You may insert necessary includes here -->
<link href="<? echo bloginfo('template_url') ?>/style.css" type="text/css" rel="stylesheet" title="styles">
<link href="feed/" rel="alternate" type="application/rss+xml" title="Sitewide RSS Feed" />
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
<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<small><?php the_time('F jS, Y') ?> - Posted by <? the_author() ?></small>

				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>
                
				<p class="postmetadata"> <?php the_tags('Tags: ', ', ', '<br />'); ?><br />Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ''); ?> </p>
			<?php comments_template(); ?>
			</div>

		<?php endwhile; ?>
         

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>

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
