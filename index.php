<?php get_header(); ?>
	<div id="content">
		<div id="main-content">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>">
					

					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<?php the_tags(__(''), ', ', ''); ?>
					<span class="date"> <!-- by <?php the_author(); ?> on <?php the_time(__('m/j/Y','min')) ?> --> </span>
					<div class="clearfix"></div>
					<?

						if ( in_category( 'inspiration' )) {

					?>
					<div class="entry" >
						<?php the_content(__('Continue Reading','min').' &raquo;'); ?>
					</div>
					<?
						} else { 
					?>
					<div class="entry">
					<blockquote>	<?php the_content(__('Continue Reading','min').' &raquo;'); ?> </blockquote>
					</div>	
					<?
						}
					?>
					
					<? //echo 	 get_post_meta( get_the_ID(), 'wpe_sourcepermalink', true ); ?>
					
					
					<? $url = parse_url(get_post_meta( get_the_ID(), 'wpe_sourcepermalink', true ));
					echo $url[host]; ?>
					<span class="number-of-comments"><a href="<?php the_permalink() ?>" title="title">
						<img src="/wp-content/themes/desordre/iconmonstr-link-icon.svg" class="link" />
					</a></span>
				</div><!-- close:post -->
			<?php endwhile; ?>
			
        
<? if(is_single()) { ?>
                                                                                                      
	<div  style="clear:both" align="center">
	                                                         
	                                                         
	                                        <div class="fb-like" data-href="<? echo get_permalink($post->ID); ?>"  href="<? echo get_permalink($post->ID); ?>" data-send="false" data-layout="button_count"  data-width="40" data-show-faces="false" data-font="arial" style="z-index: 9000;"></div>
	                                                        
	                                                        
	                                        <div style="display:inline;margin-left:30px;"><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo wp_get_shortlink($post->ID); ?>" data-via="_magicmorning_" data-lang="<? echo ICL_LANGUAGE_CODE; ?>">Tweet</a></div> 
	                        
	                                   <div class="g-plusone" data-size="medium" data-annotation="none"></div>
	
	                                   
	                                   
	                                  <div style="display:inline;margin-left:30px;"> <a href="//www.pinterest.com/pin/create/button/?url=<?php echo wp_get_shortlink($post->ID); ?>" data-pin-do="buttonPin" data-pin-config="none" data-pin-color="white"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_white_20.png" /></a></div>
	                                   
	                                   
	                                   	<div class="post-nav">
								<?php previous_post_link('<div class="btn-prev">News suivantes<br/> <strong>%link</strong></div>'); ?> 
								 <?php next_post_link('<div class="btn-next">News précédentes<br/> <strong>%link</strong></div>'); ?> 
		</div>
		
		
		
	</div>
                                   
<? } ?>
          
                                           
                                           
                                           
                                           
			<div class="pagination clearfix">
				<div class="prev"><?php next_posts_link('&laquo; '.__('Previous posts','min')) ?></div>
				<div class="next"><?php previous_posts_link(__('Newer posts','min').' &raquo;') ?></div>
			</div>
		<?php else : ?>
			<p class="string"><?php _e('You broke the interwebs... wow... way to go.. no really you may want to call someone to take a look at it..','min'); ?></p>
			<a href="<?php echo get_option('home'); ?>/" class="back"><?php _e('Back home','min'); ?></a>
		<?php endif; ?>
		</div><!-- close:main-content -->
		<?php get_sidebar(); ?>
	</div><!-- close:content -->
<?php get_footer(); ?>