<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php
global $page, $paged;
wp_title( '|', true, 'right' );
bloginfo( 'name' );
$site_description = get_bloginfo( 'description', 'display' );
if ( $site_description && ( is_home() || is_front_page() ) )
	echo " | $site_description";
// Add a page number if necessary:
if ( $paged >= 2 || $page >= 2 )
	echo ' | ' . sprintf( __( 'Page %s', 'cinemacity' ), max( $paged, $page ) );

?></title>
<meta name="description" content="" />
<link rel="dns-prefetch" href="//fonts.googleapis.com" />
<link rel="dns-prefetch" href="//www.facebook.com" />
<link rel="dns-prefetch" href="//www.google-analytics.com" />
<link rel="dns-prefetch" href="//apis.google.com" />
<link rel="dns-prefetch" href="//ajax.googleapis.com/" />
<link rel="prerender" href="<? echo home_url();?>/cinemap/" />
<link type="text/plain" rel="author" href="/humans.txt" />
<link rel="canonical" href="<?php echo get_site_url(); ?>"/>
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/_ico/114x114.png"/>
<link rel="shortcut icon" type="image/gif" href="<?php echo get_template_directory_uri(); ?>/images/_ico/32x32.ico" />
<!--[if lte IE 9]><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ie.css" type="text/css" media="screen" /><![endif]-->
<!--[if lt IE 9]><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ie8.css" type="text/css" media="screen" /><![endif]-->
<!--[if IE]><script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/ie.js"></script><![endif]-->
<meta name="generator" content="@_magicmorning_" />
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@_magicmorning_">
<meta name="twitter:title" content="DESORDRE">
<meta name="twitter:description" content="">
<meta name="twitter:creator" content="@_magicmorning_">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/images/logo.png">
<meta name="twitter:domain" content="<?php echo get_site_url(); ?>">

<link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/b0bf96da-b9be-49c5-8cfe-6cc1e0cf376c.css"/>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="screen" />

<?php wp_head();?>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-68786-16']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

</head>
<body>


<div id="wrapper">
	<div id="header">
	
		  <aside id="logodesordre" >
		    <div class="clearfix">
		    		    	 
		    <a href="<?php echo home_url( '/' ); ?>"><img src="/wp-content/themes/svbtle/images/icons/desordre/desordre_150x150.png" class="logo"/></a>

		    <div class="about_us"> 
		    	<a href="/">desordre</a><br/>
		    	<a href="/category/radar">radar</a> - <a href="/category/inspiration">inspiration</a> <br/>
		    	a <a href="http://www.magicmorning.net/">MagicMorning</a> project
		    </div>
		    
		    	
		    </div>
		  </aside>
		
			<aside class="social"> 
			
<div class="ids">
	<a href="https://twitter.com/_magicmorning_"><img src="http://payload84.cargocollective.com/1/8/278221/3999670/iconmonstr-twitter-4-icon 1.png" width="512" height="512" width_o="512" height_o="512" src_o="http://payload84.cargocollective.com/1/8/278221/3999670/iconmonstr-twitter-4-icon 1_o.png" data-mid="32647297" border="0" ></a>  <a href="http://www.linkedin.com/company/magic-morning"><img src="http://payload84.cargocollective.com/1/8/278221/3999670/iconmonstr-linkedin-4-icon.png" width="512" height="512" width_o="512" height_o="512" src_o="http://payload84.cargocollective.com/1/8/278221/3999670/iconmonstr-linkedin-4-icon_o.png" data-mid="32647539" border="0" ></a> <a href="https://www.facebook.com/magicmorning.net"><img src="http://payload84.cargocollective.com/1/8/278221/3999670/iconmonstr-facebook-4-icon 1.png" width="512" height="512" width_o="512" height_o="512" src_o="http://payload84.cargocollective.com/1/8/278221/3999670/iconmonstr-facebook-4-icon 1_o.png" data-mid="32647537" border="0" ></a> <a href="http://instagram.com/magicmorning"><img src="http://payload84.cargocollective.com/1/8/278221/3999670/iconmonstr-instagram-4-icon.png" width="512" height="512" width_o="512" height_o="512" src_o="http://payload84.cargocollective.com/1/8/278221/3999670/iconmonstr-instagram-4-icon_o.png" data-mid="32647536" border="0" ></a> <a href="http://desordre.fr"><img src="http://payload84.cargocollective.com/1/8/278221/3999670/iconmonstr-rss-4-icon.png" width="512" height="512" width_o="512" height_o="512" src_o="http://payload84.cargocollective.com/1/8/278221/3999670/iconmonstr-rss-4-icon_o.png" data-mid="32647688" border="0" ></a>
</div>


				<?php get_search_form(); ?>
			
		  </aside>
		  
	</div><!-- close:header -->