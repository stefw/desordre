<?php 
function my_the_content_filter($content) {
	$content=str_replace('-657x492', '', $content);
	return $content;
}

add_filter( 'the_content', 'my_the_content_filter' );

?>