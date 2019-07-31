<?php 
/**
 * Template Name: Полная ширина
 */

get_header();
?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main">

		<?php
        while ( have_posts() ) : the_post();
        ?>
            
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </header><!-- .entry-header -->

            <?php gorka_post_thumbnail(); ?>

            <div class="entry-content">
                <?php
                the_content();
                ?>
            </div><!-- .entry-content -->

 
            </article><!-- #post-<?php the_ID(); ?> -->
	    <?php
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
