<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div class="site">
            <header id="site-header" class="site-header">
                <div id="top-header" class="top-header">
                    <div class="row container">
                        <div class="large-12 columns">top menu</div>
                    </div>
                </div> <!-- .top-header -->
                <div id="main-header" class="main-header">
                    <div class="row container">
                        <div class="logo small-12 large-3 columns">logo</div>
                        <div class="menu small-12 large-9 columns">menu</div>
                    </div>
                </div> <!-- .main-header -->
            </header> <!-- .site-header -->
            <div id="content" class="site-content">
