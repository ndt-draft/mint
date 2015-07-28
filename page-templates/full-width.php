<?php
/**
 * Template Name: Full Width
 */
get_header(); ?>

<div class="row container template-full-width">
    <div id="primary" class="content-area large-12 columns">
		<main id="main" class="content-area">
		    <?php if ( have_posts() ) {
		        while ( have_posts() ) {
		            the_post();

		            the_content();
		        }
		    } ?>
		</main> <!-- #main -->
	</div> <!-- #primary -->
</div> <!-- .row -->

<?php
get_footer();
