<?php  get_header();  ?>

    <section class="container">
        <div class="main">
            <h1>
                Category: <?php single_cat_title(); ?>
            </h1>
            <?php if (is_category('chapter-one')) : ?>


                <?php
                $args = array('post_type' => 'comic', );
                $loop = new WP_Query( $args );

                while ( $loop->have_posts()  ) : $loop->the_post();

                    $comic = get_field('comic');
                    $title= get_field('title');
                    $id = get_field('ID');

                    ?>

                    <ul>
                        <h3><a href="<?php echo get_post_permalink($id); ?>"> <?= $title ?> </a></h3>
                    </ul>

                 <?php endwhile; ?>


    <?php endif; ?>
        </div>
    </section>

<?php get_footer(); ?>