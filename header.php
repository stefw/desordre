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
<link rel="dns-prefetch" href="//fast.fonts.net/" />
<link rel="dns-prefetch" href="//www.facebook.com" />
<link rel="dns-prefetch" href="//www.google-analytics.com" />
<link rel="dns-prefetch" href="//apis.google.com" />
<link rel="dns-prefetch" href="//ajax.googleapis.com/" />
<link type="text/plain" rel="author" href="/humans.txt" />

<!--[if lte IE 9]><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ie.css" type="text/css" media="screen" /><![endif]-->
<!--[if lt IE 9]><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ie8.css" type="text/css" media="screen" /><![endif]-->
<!--[if IE]><script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/ie.js"></script><![endif]-->

<link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/b0bf96da-b9be-49c5-8cfe-6cc1e0cf376c.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="screen" />

<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon-60x60.png" />
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon-76x76.png" />
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon-16x16.png" sizes="16x16" />
<meta name="msapplication-TileColor" content="#da532c" />
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/favicons/mstile-144x144.png" />

<meta name="google-site-verification" content="vi5tl_2jezsz_opeGj1CqVAkjTP3PxGmiSkf_8ZzPTI" />

<?php wp_head();?>
<meta property="fb:app_id" content="519323274755525" />

</head>
<body>

<div id="wrapper">
	<div id="header">
	
		  <aside id="logodesordre" >
		    	<div class="about_us"> 
					daily sources of graphical design, art, photography <br/>
			    	categories : <a href="/radar">radar</a> - <a href="/inspiration">inspiration</a>
			    	<?php get_search_form(); ?>
			    </div> 
			       	 
			    <a href="<?php echo home_url( '/' ); ?>"><img src="/wp-content/themes/desordre/img/desordre_150x150.png" class="logo"/></a>
		  </aside>


		  
	</div><!-- close:header -->