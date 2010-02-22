<?php

if ( function_exists('register_sidebar') ) {
  register_sidebar(array(
    'name' => 'Pages',
      'before_widget' => '<div id="%1$s" class="widgetelement %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widgettitle">',
      'after_title' => '</h3>',
  ));
  register_sidebar(array(
    'name' => 'Blog',
      'before_widget' => '<div id="%1$s" class="widgetelement %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widgettitle">',
      'after_title' => '</h3>',
  ));
}


function msu_template_setup_admin() {
          add_theme_page('MSU Template Setup', 'MSU Template', 8, __FILE__, 'msu_template_admin');
}

function msu_template_admin() {
  $topImages = array(
    'ag.png' => 'College of Agriculture',
    'artarch.png' => 'College of Arts and Architecture',
    'bus.png' => 'College of Business',
    'ehhd.png' => 'College of Education, Health and Human Development',
    'eng.png' => 'College of Engineering',
    'sci.png' => 'College of Letters and Science',
    'nursing.png' => 'College of Nursing',
    'university.png' => 'University College'
    )
	?>
	<div class="wrap">
	<h2>MSU Template Settings</h2>
	
	<form method="post" action="options.php">
	<?php wp_nonce_field('update-options'); ?>
	
	<table class="form-table">
	
  <tr valign="top">
		<th scope="row" colspan=2><h3><?php _e('Template Options', 'msu-template') ?></h3></th>
	</tr>
	
	<tr valign="top">
		<th scope="row"><?php _e('Top Image:', 'msu-template') ?></th>
		<td>
			<select name='top-image'>
        <option value='' <? echo (get_option('top-image')=="") ? "selected" : "" ?>>Default</option>
        <? foreach($topImages as $key => $value) { ?>
          <option value='<? echo $key ?>' <? echo ($key==get_option('top-image')) ? "selected" : "" ?>><? echo $value ?></option> 
        <? } ?> 
      </select>
		</td>
	</tr>
	
  <tr valign="top">
		<th scope="row"><?php _e('Page Image:', 'msu-template') ?></th>
		<td>
			<input type="text" class="text" style="width: 400px;" name="page-image" value="<?php echo htmlspecialchars(get_option('page-image')) ?>" />
		</td>
	</tr>
	
  <tr valign="top">
		<th scope="row"><?php _e('Page Sidebar Title:', 'msu-template') ?></th>
		<td>
			<input type="text" class="text" style="width: 80px;" name="page-tab-title" value="<?php echo htmlspecialchars(get_option('page-tab-title')) ?>" />
      <small>Title of the left hand tab when viewing pages. Default: News</small>
		</td>
	</tr>
	
  <tr valign="top">
		<th scope="row"><?php _e('Blog Sidebar Title:', 'msu-template') ?></th>
		<td>
			<input type="text" class="text" style="width: 80px;" name="blog-tab-title" value="<?php echo htmlspecialchars(get_option('blog-tab-title')) ?>" />
      <small>Title of the left hand tab when viewing the blog. Default: Blog</small>
		</td>
	</tr>
	
  <tr valign="top">
		<th scope="row"><?php _e('Information Text:', 'msu-template') ?></th>
		<td>
			<textarea class="text" style="width: 400px;" name="information-text"><?php echo htmlspecialchars(get_option('information-text')) ?>
      </textarea>
		</td>
	</tr>
	
  <tr valign="top">
		<th scope="row" colspan=2><h3><?php _e('College\Department Information', 'msu-template') ?></h3></th>
	</tr>
	
	<tr valign="top">
		<th scope="row"><?php _e('Title:', 'msu-template') ?></th>
		<td>
			<input type="text" class="text" style="width: 200px;" name="college-title" value="<?php echo htmlspecialchars(get_option('college-title')) ?>" />
		</td>
	</tr>
	
	<tr valign="top">
		<th scope="row"><?php _e('MSU Tagline:', 'msu-template') ?></th>
		<td>
			<input type="text" class="text" style="width: 200px;" name="msu-tagline" value="<?php echo htmlspecialchars(get_option('msu-tagline')) ?>" /><br />
      <small>Default: Montana State University</small>
		</td>
	</tr>
	
	<tr valign="top">
		<th scope="row"><?php _e('Address:', 'msu-template') ?></th>
		<td>
			<input type="text" class="text" style="width: 200px;" name="address" value="<?php echo htmlspecialchars(get_option('address')) ?>" />
		</td>
	</tr>
	
	<tr valign="top">
		<th scope="row"><?php _e('City, State ZIP:', 'msu-template') ?></th>
		<td>
			<input type="text" class="text" style="width: 200px;" name="city-state-zip" value="<?php echo htmlspecialchars(get_option('city-state-zip')) ?>" />
		</td>
	</tr>

	<tr valign="top">
		<th scope="row"><?php _e('Telephone:', 'msu-template') ?></th>
		<td>
			<input type="text" class="text" style="width: 200px;" name="telephone" value="<?php echo htmlspecialchars(get_option('telephone')) ?>" />
		</td>
	</tr>
	
  <tr valign="top">
		<th scope="row"><?php _e('Fax:', 'msu-template') ?></th>
		<td>
			<input type="text" class="text" style="width: 200px;" name="fax" value="<?php echo htmlspecialchars(get_option('fax')) ?>" />
		</td>
	</tr>
	
  <tr valign="top">
		<th scope="row"><?php _e('Email:', 'msu-template') ?></th>
		<td>
			<input type="text" class="text" style="width: 200px;" name="email" value="<?php echo htmlspecialchars(get_option('email')) ?>" />
		</td>
	</tr>
	
  <tr valign="top">
		<th scope="row"><?php _e('Location:', 'msu-template') ?></th>
		<td>
			<input type="text" class="text" style="width: 200px;" name="location" value="<?php echo htmlspecialchars(get_option('location')) ?>" /><br />
      <small>Ex: 213 Lewis Hall</small><br />
		</td>
	</tr>
  
  <tr valign="top">
		<th scope="row"><?php _e('Dean:', 'msu-template') ?></th>
		<td>
			<input type="text" class="text" style="width: 200px;" name="dean-name" value="<?php echo htmlspecialchars(get_option('dean-name')) ?>" />
		</td>
	</tr>
	
  <tr valign="top">
		<th scope="row" colspan=2><h3><?php _e('Director Information', 'msu-template') ?></h3></th>
	</tr>
	
  <tr valign="top">
		<th scope="row"><?php _e('Name:', 'msu-template') ?></th>
		<td>
			<input type="text" class="text" style="width: 200px;" name="director-name" value="<?php echo htmlspecialchars(get_option('director-name')) ?>" />
		</td>
	</tr>
	
  <tr valign="top">
		<th scope="row"><?php _e('Phone:', 'msu-template') ?></th>
		<td>
			<input type="text" class="text" style="width: 200px;" name="director-phone" value="<?php echo htmlspecialchars(get_option('director-phone')) ?>" /><br />
		</td>
	</tr>
	
  <tr valign="top">
		<th scope="row"><?php _e('Email:', 'msu-template') ?></th>
		<td>
			<input type="text" class="text" style="width: 200px;" name="director-email" value="<?php echo htmlspecialchars(get_option('director-email')) ?>" />
		</td>
	</tr>
	
	
<!--  
  <tr valign="top">
		<th scope="row"><?php _e('Header image:', 'elegant-grunge') ?></th>
		<td>
			<input type="text" class="text" style="width: 400px;" name="header_image" value="<?php echo htmlspecialchars(get_option('header_image')) ?>" /><br/>
			 <small><?php _e('If specified, the image (typically a transparent PNG) at the above URL will be used for the header.', 'elegant-grunge') ?></small>
		</td>
	</tr>
	
	<tr valign="top">
		<th scope="row"><?php _e('RSS subscription:', 'elegant-grunge') ?></th>
		<td>
			<input type="checkbox" name="show_rss" <?php echo (get_option('show_rss') ? "checked" : ""); ?> />
			 <?php _e('Display RSS subscription link', 'elegant-grunge') ?>
		</td>
	</tr>
	
	<tr valign="top">
		<th scope="row"><?php _e('Post info:', 'elegant-grunge') ?></th>
		<td>
			<input type="checkbox" name="show_author" <?php echo (get_option('show_author') ? "checked" : ""); ?> />
			 <?php _e('Display post author', 'elegant-grunge') ?>
		</td>
	</tr>
	
	<tr valign="top">
		<th scope="row"><?php _e('Page setup:', 'elegant-grunge') ?></th>
		<td>
			<select name="page_setup">
				<option value="right-sidebar" <?php echo (get_option('page_setup')=='right-sidebar' ? 'selected' : '') ?>>Right sidebar</option>
				<option value="double-right-sidebar" <?php echo (get_option('page_setup')=='double-right-sidebar' ? 'selected' : '') ?>>Double Right sidebar</option>
				<option value="no-sidebar" <?php echo (get_option('page_setup')=='no-sidebar' ? 'selected' : '') ?>>No sidebar</option>
			</select>
		</td>
	</tr>
	
	<tr valign="top">
		<th scope="row"><?php _e('Copyright message:', 'elegant-grunge') ?></th>
		<td>
			<input type="text" class="text" style="width: 300px;" name="copyright" value="<?php echo htmlspecialchars(get_option('copyright')) ?>" />
		</td>
	</tr>
	
	<tr valign="top">
		<th scope="row"><?php _e('Image frames:', 'elegant-grunge') ?></th>
		<td>
			<input type="checkbox" name="frame_all_images" <?php echo (get_option('frame_all_images') ? "checked" : ""); ?> />
			 <?php _e('Apply frame to all images', 'elegant-grunge') ?><br/>
			<small><?php printf(__('If enabled, all images larger than %1$d x %2$d
				will have a frame with drop shadow applied. Otherwise, only images and other elements with a class
				of \'frame\' will have this style applied.<br/>
				This setting can be configured per-post and per-page, also.', 'elegant-grunge'), ELEGANT_GRUNGE_FRAME_MIN_WIDTH, ELEGANT_GRUNGE_FRAME_MIN_HEIGHT) ?></small>
		</td>
	</tr>
	
	<tr valign="top">
		<th scope="row"><?php _e("Don't frame images with class:", 'elegant-grunge') ?></th>
		<td>
			<input type="text" class="text" style="width: 300px;" name="frame_class_skip" value="<?php echo htmlspecialchars(get_option('frame_class_skip')) ?>" />
			<br/><small><?php _e('Separate multiple classes with commas \',\'', 'elegant-grunge') ?></small>
		</td>
	</tr>
	
	<tr valign="top">
		<th scope="row"><?php _e('Extra header content:', 'elegant-grunge') ?></th>
		<td>
			<textarea style="width: 300px; height: 100px;" name="extra_header"><?php echo htmlspecialchars(get_option('extra_header')) ?></textarea><br/>
			<small><?php _e('This can be used to add extra RSS feed links from your page, for example, such as a Twitter feed.', 'elegant-grunge') ?></small>
		</td>
	</tr>
	
	<tr valign="top">
		<th scope="row"><?php _e('Photoblog thumbnails:', 'elegant-grunge') ?></th>
		<td>
			<p>
			<input type="checkbox" name="create_photoblog_thumbnails" <?php echo (get_option('create_photoblog_thumbnails') ? "checked" : ""); ?> />
			 <?php _e('Create scaled thumbnails', 'elegant-grunge') ?><br/>
			<small><?php _e('If enabled, will generate thumbnail files. Otherwise, will use the original images, resulting in slower loading times.
			Note that the first photoblog page load after this is enabled will be slow, while images are being created, so you should
			<a href="/tag/photoblog" target="_blank">load this</a> yourself.', 'elegant-grunge') ?></small>
			</p>
			<p>
			<?php _e('Thumbnail size:', 'elegant-grunge') ?><br/>
			<input type="text" class="text" size="5" name="photoblog_thumb_width" value="<?php echo get_option('photoblog_thumb_width') ?>" /> x
			<input type="text" class="text" size="5" name="photoblog_thumb_height" value="<?php echo get_option('photoblog_thumb_height') ?>" /><br />
			<small><?php _e('Leave blank for flexible size', 'elegant-grunge') ?></small>
		</td>
	</tr>
	
	<tr valign="top">
		<th scope="row"><?php _e('Photoblog display:', 'elegant-grunge') ?></th>
		<td>
			<p>
			<?php _e('Number of thumbnails per page:', 'elegant-grunge') ?><br/>
			<input type="text" class="text" size="5" name="photoblog_thumb_count" value="<?php echo get_option('photoblog_thumb_count') ?>" />
			</p>
			<p>
			<input type="checkbox" name="photoblog_lightbox" <?php echo (get_option('photoblog_lightbox') ? "checked" : ""); ?> />
			 <?php _e('Use lightbox mode', 'elegant-grunge') ?><br/>
			<small><?php _e('Requires a lightbox plugin to be installed, such as <a href="http://www.stimuli.ca/lightbox/">Lightbox 2</a>.', 'elegant-grunge') ?></small>
			</p>
			<p>
			<input type="checkbox" name="photoblog_frames" <?php echo (get_option('photoblog_frames') ? "checked" : ""); ?> />
			 <?php _e('Draw frames around photoblog items', 'elegant-grunge') ?><br/>
			</p>
		</td>
	</tr>
-->	
	
	</table>
	
	<input type="hidden" name="action" value="update" />
	<input type="hidden" name="page_options" value="college-title,msu-tagline,address,city-state-zip,telephone,fax,email,location,dean-name,director-name,director-phone,director-email,top-image,page-image,information-text,page-tab-title,blog-tab-title" />
	
	<p class="submit">
	<input type="submit" name="Submit" value="<?php _e('Save Changes', 'msu-template') ?>" />
	</p>
	
	</form>
	</div>
	<?php
}

add_action( 'admin_menu', 'msu_template_setup_admin' );

?>
