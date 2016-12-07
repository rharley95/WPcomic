<?php
/*
Template Name: Archives
*/
get_header(); ?>

    <div class="container">
        <div class="main" role="main">

            <?php the_post(); ?>
            <h1 class="entry-title">Archive</h1>


            <h2>Archives by Subject:</h2>
            <ul>
                <?php //the_content(); ?>
                <?php wp_list_categories(); ?>
            </ul>



        </div><!-- #content -->
    </div><!-- #container -->

<?php //get_footer(); ?>