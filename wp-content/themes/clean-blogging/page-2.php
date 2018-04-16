<?php /* Template Name: LiveFeedBlog */ ?>

<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package clean-blogging
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php

			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				$wpdb2 = new wpdb('root', '', 'digital_position_blog', 'localhost');

				// get 10 posts, assuming the other WordPress db table prefix is "wp_"
				$query = "SELECT post_title, guid, post_date
									FROM wp_ppc_posts
				          WHERE post_status = 'publish'
									AND post_type = 'post'
									UNION
									SELECT post_title, guid, post_date
									FROM wp_seo_posts
									WHERE post_status = 'publish'
									AND post_type = 'post'
				          ORDER BY post_date DESC LIMIT 10";

				$someposts = $wpdb2->get_results($query, OBJECT);
				foreach($someposts as $somepost)
				  echo "<a href=\"{$somepost->guid}\">{$somepost->post_title}</a><br />";

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
