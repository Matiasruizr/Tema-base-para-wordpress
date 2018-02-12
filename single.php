<?php
/**
 * Aca se mostraran todos los 'single post'
 *
 * @package base
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post(); // The loop.

			// Obtiene la estructura de cada post desde el archivo "content" (en template-parts)
			get_template_part( 'template-parts/content', get_post_type() );

			// Navegacion entre post
			the_post_navigation();

			// Muestra comentarios en caso de que esten activados y que existan
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			// fin comentarios

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
