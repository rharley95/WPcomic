<?php get_header(); ?>
    'posts_per_page' =>
    <section class="container">
        <div class="main">

            <?php
            $args = array('post_type' => 'comic', );
            $loop = new WP_Query( $args );

            while ( $loop->have_posts() ) : $loop->the_post();

                $comic = get_field('comic');
                $title= get_field('title');


                ?>

                <div class="comic-content">

                    <?= the_content(); ?>

                    <? if($title): ?>

                        <h3> <?= $title ?> </h3>
                    <? endif; ?>

                    <? if($comic): ?>
                        <img src="<?= $comic['url'] ?>" />
                    <? endif; ?>

                </div>


            <?php endwhile;?>

        </div>
    </section>
<?php get_footer(); ?>