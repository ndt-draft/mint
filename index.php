<?php get_header(); ?>

<div class="row container template-default">
    <div id="primary" class="content-area large-9 columns">
        <main id="main" class="site-main">
            <?php if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();

                    the_content();
                }
            } ?>
        </main> <!-- #main -->
    </div> <!-- #primary -->

    <div id="secondary" class="widget-area large-3 columns">
        <p>widget area</p>
    </div> <!-- #secondary -->
</div> <!-- .row -->

<?php get_footer(); ?>