<?php

/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

?>

<?php astra_entry_before(); ?>

<article <?php
					echo astra_attr(
						'article-single',
						array(
							'id'    => 'post-' . get_the_id(),
							'class' => join(' ', get_post_class()),
						)
					);
					?>>

	<?php astra_entry_top(); ?>

	<?php astra_entry_content_single(); ?>

	<?php

	echo '<figure class="post_thumbnail"><img src="' . get_the_post_thumbnail_url(get_the_ID(), "full") . '"></figure>';

	if (get_field(('location'))) {
		echo '<p class="location">Location: ' . get_field('location') . '</p>';
	}

	if (get_field('profile_description')) {
		the_field('profile_description');
	}

	$friends = get_field('friends');
	if ($friends) {
		echo '<ul class="profile-friends">';

		$format = '<li><a href="%1$s" title="%2$s">%3$s</a></li>';

		foreach ($friends as $post) {
			setup_postdata($post);
			printf(
				$format,
				get_permalink(),
				get_the_title(),
				get_the_post_thumbnail(get_the_ID(), 'medium')
			);
		}

		wp_reset_postdata();
		echo '</ul>';
	}



	?>

	<?php astra_entry_bottom(); ?>

</article><!-- #post-## -->

<?php astra_entry_after(); ?>