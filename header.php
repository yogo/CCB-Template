<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
<!--Web Template3_200v1.0-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" type="text/css" href="http://www.montana.edu/msucommon/stylesv2/screen.css"  media="screen" />
    <link rel="stylesheet" type="text/css" href="http://www.montana.edu/msucommon/stylesv2/tabs200.css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" type="text/css" href="http://www.montana.edu/msucommon/stylesv2/ie6screen.css"  media="screen" /><![endif]-->
    <link rel="stylesheet" type="text/css" href="http://www.montana.edu/msucommon/stylesv2/mobile.css" media="handheld, only screen and (max-device-width: 480px)" />
    <link rel="stylesheet" type="text/css" href="http://www.montana.edu/msucommon/stylesv2/print.css" media="print" />   
    <link rel="icon" type="image/icon" href="http://montana.edu/favicon.ico">
   	<script type="text/javascript" language="JavaScript1.2" src="http://www.montana.edu/msucommon/scriptsv2/tabs200.js"></script>

<!-- END BRANDED CONTENT DO NOT EDIT -->     
<!--                                 -->   

<title><? pageTitle() ?></title>

<!-- Add custom styles here -->
    <link rel="stylesheet" type="text/css" href="<? bloginfo('stylesheet_url')?>" media="screen">
<!-- BEGIN BRANDED CONTENT DO NOT EDIT -->
<? wp_head() ?>
</head>

<body><!-- LOADS NEWS CONTAINER -->
<script type="text/javascript"> 
var _gaq = _gaq || []; 
_gaq.push(['_setAccount', '<? echo (htmlspecialchars(get_option('analytics'))!='')?'UA-4471790-1':htmlspecialchars(get_option('analytics')) ?>'); 
_gaq.push(['_trackPageview']); 
(function() { 
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; 
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js'; 
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga); 
})(); 
</script>
<div id="table">
 
<!-- HEADER INFORMATION --> 
 			<div id="header">
                <!-- Normal header--><div id="banner">

<!-- END BRANDED CONTENT DO NOT EDIT -->     
<!--                                 -->   
<!--                                                                                 -->
<!-- Use College Banners for Department and Research Centers, see the following link -->
<!-- http://www.montana.edu/web/templates/templates2/instructions.html               -->
<!--                                                                                 -->
<img src="http://www.montana.edu/msucommon/imagesv2/<?php echo (get_option('top-image')!='')?"headers/".htmlspecialchars(get_option('top-image')):"banner2.png" ?>" alt="Montana State University in Bozeman" width="960px" height="60px" border="0" align="middle" usemap="#Map" title="Montana State University in Bozeman"/><map name="Map" id="Map"><area shape="rect" coords="0,0,180,60" href="http://www.montana.edu/" target="_top" alt="Montana State University - Home" /></map>
<!--                                   -->   
<!-- BEGIN BRANDED CONTENT DO NOT EDIT -->
                    <div id="headnav"><!-- Nav links listed right to left --><div class="navlink"><a href="http://www.montana.edu/people/" title="Directories">Directories</a></div><div class="navlink" style="border-left:0;"><a href="http://www.montana.edu/siteindex" title="A-Z Index">A-Z Index</a></div></div>
                	<div class="search"><form method="get" style="display: block; display:inline" action="http://www.montana.edu/search/"><input type="hidden" name="cx" value="008992511269271655684:zana6q1rfbs" /><input type="hidden" name="cof" value="FORID:11" /><input type="text" name="q" size="15" class="searchbox" value="Search MSU" alt="Search MSU"  onfocus="if (this.value == 'Search MSU') this.value = '';" /><input class="searchbtn" type="image" src="http://www.montana.edu/msucommon/imagesv2/go.png" alt="Search" name="sa" /></form></div>
         		</div><!--End Banner-->
			</div>
<!-- END HEADER INFORMATION -->
            
            
<!--Print--><div class="printheader"><img src="http://www.montana.edu/msucommon/imagesv2/msublackhorizsm.png" height="63px" width="250px" alt="Montana State University" /></div><div class="printhr"></div>

<!-- BEGIN MAIN CONTENT --> 
		<div id="maincontent">
       	  <div id="crumbnav"><? breadcrumbs() ?></div>
<!--END BREADCRUMB NAVIGATION-->  		
        <div id="left">
          <div class="links">
            <h2><? bloginfo('title') ?></h2>
            <? wp_page_menu(array('show_home' => true)) ?>                        
<!--End Links--></div>
<!--                                   -->   
<!-- BEGIN BRANDED CONTENT DO NOT EDIT -->
<!--                    -->
<!--Begin Contact Us box-->
<!--                    -->
<div id="contact">
<!-- END BRANDED CONTENT DO NOT EDIT -->     
<!--                    --> 
<!--                                -->
<!--Begin Insert Contact Information-->
<!--                                -->
<h2><?php _e(htmlspecialchars(get_option('college-title')),'msu-template') ?></h2>
Montana State University<br />
<? if(htmlspecialchars(get_option('address'))!=""){ ?>
<?php _e(htmlspecialchars(get_option('address')),'msu-template') ?><br />
<? } ?>
Bozeman, Montana 59715<br />
<br />
Tel: <?php _e(htmlspecialchars(get_option('telephone')),'msu-template') ?><br />
Fax: <?php _e(htmlspecialchars(get_option('fax')),'msu-template') ?><br />
E-mail: <a href="mailto:<?php _e(htmlspecialchars(get_option('email')),'msu-template') ?>"><?php _e(htmlspecialchars(get_option('email')),'msu-template') ?></a><br />
Location: <?php _e(htmlspecialchars(get_option('location')),'msu-template') ?><br />
<? if(htmlspecialchars(get_option('dean-name'))!=""){ ?>
<br />
<h2>Dean</h2>
<?php _e(htmlspecialchars(get_option('dean-name')),'msu-template') ?><br />
<? } ?>
<? if(htmlspecialchars(get_option('director-name'))!=""){ ?>
<br />
<h2>Director</h2>
<?php _e(htmlspecialchars(get_option('director-name')),'msu-template') ?><br />
Phone: <?php _e(htmlspecialchars(get_option('director-phone')),'msu-template') ?><br />
E-mail: <a href="mailto:<?php _e(htmlspecialchars(get_option('director-email')),'msu-template') ?>"><?php _e(htmlspecialchars(get_option('director-email')),'msu-template') ?></a><br />
<? } ?>
<!--                                   -->
<!-- BEGIN BRANDED CONTENT DO NOT EDIT -->
</div>
</div>

<div id="rightpane">        
<? if(!is_search()){
    get_sidebar();
}
?>
<? if(htmlspecialchars(get_option('page-image'))!='') { ?>
<div id="welcomebanner">
  <img src="<? echo htmlspecialchars(get_option('page-image')) ?>" alt="<? bloginfo('name') ?>" title="<? bloginfo('name') ?>"  />
</div>
<? } ?>
<!-- BEGIN Body Content -->
<div id="content">
