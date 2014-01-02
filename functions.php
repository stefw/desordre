<?php 
function my_the_content_filter($content) {
	$content=str_replace('-657x492', '', $content);
	return $content;
}

add_filter( 'the_content', 'my_the_content_filter' );





/* ADD WIDGETS IN THE FOOTER */

		if ( function_exists('register_sidebar') )
		register_sidebar(array(
			'name' => 'bucket left',
			'before_widget' => '<div class="footer-widget">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
	));
		if ( function_exists('register_sidebar') )
		register_sidebar(array(
			'name' => 'bucket right',
			'before_widget' => '<div class="footer-widget">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
	));
	
?>