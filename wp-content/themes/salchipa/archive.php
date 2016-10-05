<?php
/*
Template Name: Archives
*/
get_header(); ?>

    <div class="container">
        <div class="main" role="main">

            <?php the_post(); ?>
            <h1 class="entry-title"><?php the_title(); ?></h1>


            <h2>Archives by Subject:</h2>
            <ul>
                <?php wp_list_categories(); ?>
            </ul>

        </div><!-- #content -->
    </div><!-- #container -->


<?php get_footer(); ?>