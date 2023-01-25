<?php 
// Template Name: New Profile

acf_form_head();

get_header();

?>

<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

	<div id="primary" <?php astra_primary_class(); ?>>

		<article itemtype="https://schema.org/CreativeWork" itemscope="itemscope" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="entry-content clear" itemprop="text">

		<h1 class="entry-title" itemprop="headline"><?php the_title(); ?></h1>
		<?php the_content(); ?>

		<?php
	
			acf_form(array(
				'post_id'		=> 'new_post',
				'post_title'	=> true,
				'post_content'	=> true,
				'new_post'		=> array(
					'post_type'		=> 'post',
					'post_status'	=> 'draft',
					'post_category' => array( 2 ),
				),
			));
			
			?>

		</div><!-- .entry-content .clear -->

		</article>

	</div><!-- #primary -->

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>