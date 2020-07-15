<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nomadsun
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
	</header><!-- .entry-header -->

	<div class="entry-content">
		<!-- if we have some flexible content, let’s loop through it -->
		<?php if( have_rows('content') ): while ( have_rows('content') ) : the_row();
		
		// if it’s a header, go through the data
		if( get_row_layout() == 'header' ): ?>

			<!-- here we separate out the header into it's own component
			and call it useing get_template_part -->
			<?php get_template_part('template-parts/content-header');?>
			
			<!-- if it’s a text component, show us the data -->
			<?php elseif( get_row_layout() == 'text_block' ): ?>
				<!-- here we separate out the header into it's own component
			and call it useing get_template_part -->
				<?php get_template_part('template-parts/content-text');?>
				
			<!-- if it’s a gallery component, show us the data -->
			<?php elseif( get_row_layout() == 'gallery' ): ?>
				<!-- here we put in our gallery component -->
				<?php get_template_part('template-parts/content-gallery');?>

			<?php endif; 
		endwhile; endif; ?>

	</div><!-- .entry-content -->
	
	<footer class="entry-footer">
		<!-- here we have social link components -->
		<?php get_template_part('template-parts/content-share');?>	
		<!-- here we have explore component -->
		<?php get_template_part('template-parts/content-explore');?>	
	
	<!-- <?php nomadsun_entry_footer(); ?> -->
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
