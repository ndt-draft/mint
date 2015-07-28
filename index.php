<?php get_header(); ?>

    <main class="content-area large-9 columns">
        <?php if ( have_posts() ) {
	        while ( have_posts() ) {
	            the_post();

                the_content();
	        }
	    } ?>
    </main> <!-- .content-area -->
    <div class="widget-area large-3 columns">
        sidebar
    </div> <!-- .widget-area -->

<?php get_footer(); ?>