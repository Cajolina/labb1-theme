<?php
get_header();
?>



<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <h1><?php wp_title('') ?></h1>
                    <img src="<?php the_post_thumbnail_url(); ?>">
                    <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();

                            the_content();
                        }
                    } ?>


                    <nav class="navigation pagination">
                        <h2 class="screen-reader-text">Inläggsnavigering</h2>

                        <?php the_posts_pagination() ?>
                    </nav>
                </div>

                <?php get_sidebar() ?>

            </div>
        </div>
    </section>
</main>

<?php get_footer() ?>