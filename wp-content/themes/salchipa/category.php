<?php  get_header();  ?>

    <section class="container">
        <div class="main">

            <?php if (is_category('chapter-one')) : ?>
                <p>This is the text to describe category A</p>

            <?php elseif (is_category('chapter-two')) : ?>
                <p>This is the text to describe category B</p>
            <?php else : ?>
                <p>This is some generic text to describe all other category pages,
                    I could be left blank</p>
            <?php endif; ?>
        </div>
    </section>

<?php get_footer(); ?>