<?php
/**
 * Template Name: Main Gallery Page
 */

get_header(); ?>

    <div id="main">

        <div id="content">

            <h1>Galleries</h1>

            <p>Click on the links below to view our galleries.</p>

            <?php

            $child_pages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=18&echo=0' );

            echo '<ul class="gallery-links">';

                print $child_pages;

            echo '</ul>';

            ?>


        </div>

        <?php get_sidebar(); ?>

    </div>

    <div class="delimiter"></div>

<?php get_footer(); ?>