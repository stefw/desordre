<?php get_header(); ?>
	<div id="content">
		<div id="main-content">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>">
					

					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<?php the_tags(__('tags : '), ', ', ''); ?>
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
						<img src="/wp-content/themes/alliswell-min-theme-c53cba0/iconmonstr-link-icon.svg" class="link" />
					</a></span>
				</div><!-- close:post -->
			<?php endwhile; ?>
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