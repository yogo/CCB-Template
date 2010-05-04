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
  add_menu_page('MSU Template Setup', 'MSU Template', 8, __FILE__, 'msu_template_admin','http://montana.edu/favicon.ico');
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
    );
  $sidebar = array(
    '200',
    '250'
    );
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
		<th scope="row"><?php _e('Sidebar:', 'msu-template') ?></th>
		<td>
			<select name='sidebar'>
        <option value='' <? echo (get_option('sidebar')=="") ? "selected" : "" ?>>None</option>
        <? foreach($sidebar as $value) { ?>
          <option value='<? echo $value ?>' <? echo ($value==get_option('sidebar')) ? "selected" : "" ?>><? echo $value ?></option> 
        <? } ?> 
      </select>
		</td>
	</tr>
	
	<tr valign="top">
		<th scope="row"><?php _e('Header Image:', 'msu-template') ?></th>
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
			<input type="text" class="text" style="width: 400px;" name="page-image" value="<?php echo htmlspecialchars(get_option('page-image')) ?>" /><br />
        <small>If left blank, no image will be shown.</small>
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
		<th scope="row"><?php _e('Address:', 'msu-template') ?></th>
		<td>
			<input type="text" class="text" style="width: 200px;" name="address" value="<?php echo htmlspecialchars(get_option('address')) ?>" />
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
	
  </table>
	
	<input type="hidden" name="action" value="update" />
	<input type="hidden" name="page_options" value="college-title,address,telephone,fax,email,location,dean-name,director-name,director-phone,director-email,top-image,page-image,information-text,page-tab-title,blog-tab-title,sidebar" />
	
	<p class="submit">
	<input type="submit" name="Submit" value="<?php _e('Save Changes', 'msu-template') ?>" />
	</p>
	
	</form>
	</div>
	<?php
}

function breadcrumbs() {
  if(is_home() || is_404()) {
    echo '&nbsp;';
  }elseif(is_single()){
    echo '<a href="'. get_bloginfo('url').'">'.get_bloginfo('name').'</a> &gt; ';
    the_category(' - ');
    echo ' &gt; '.get_the_title();
  }elseif(is_category()){
    echo '<a href="'. get_bloginfo('url').'">'.get_bloginfo('name').'</a> &gt; Category: ';
    echo wp_title('');
  }elseif( is_day() || is_month() || is_year() ){
    echo '<a href="'. get_bloginfo('url').'">'.get_bloginfo('name').'</a> &gt; Archives: ';
    echo wp_title('');
  }elseif(is_search()){
    echo '<a href="'. get_bloginfo('url').'">'.get_bloginfo('name').'</a> &gt; Search Results: '.htmlspecialchars($_GET['s']);
  }else{
    $FullUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; $BaseUrl = get_bloginfo('url'); $SplitUrl = str_ireplace($BaseUrl,'', $FullUrl);  
    $UrlArray=explode("/",$SplitUrl);
    echo '<a href="'. get_bloginfo('url').'">'.get_bloginfo('name').'</a>';
    while (list($j,$text) = each($UrlArray)) {
      $dir='';
        if ($j > 1) {
          $i=1;
          while ($i < $j) {
            $dir .= '/' . $UrlArray[$i];
            $text = $UrlArray[$i];
            $i++;
          }
          if($j < count($UrlArray)-1) echo ' &gt; <a href="'.$PageUrl.$dir.'">' . ucwords(str_replace("-", " ", $text)) . '</a>';
        }
    }
    echo the_title(" &gt; ");
  }
}

function pageTitle() {
       if (is_home()) { echo bloginfo('name');
       } elseif (is_404()) {
       echo '404 Not Found' . " - " . get_bloginfo('name');
       } elseif (is_category()) {
       echo 'Category:'; wp_title('') . " - " . get_bloginfo('name');
       } elseif (is_search()) {
       echo 'Search Results' . " - " . get_bloginfo('name');
       } elseif ( is_day() || is_month() || is_year() ) {
       echo 'Archives:'; wp_title('') . " - " . get_bloginfo('name');
       } else {
       echo wp_title('') . " - " . get_bloginfo('name');
       }
}

add_action( 'admin_menu', 'msu_template_setup_admin' );

?>
