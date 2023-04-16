<!-- En fallback för pages -->
<?php
//Hämtar allt innehåll i header.php
get_header();
?>



<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <!-- Hämtar titel för sidan-->
                    <h1><?php wp_title('') ?></h1>
                    <!-- Hämtar funktion som hämtar URL:en för den utvalda bilden  -->
                    <img src="<?php the_post_thumbnail_url(); ?>">
                    <?php
                    // Kollar först om det finns några sidor tillgänliga. Om det finns inlägg eller sidor tillgängliga att visa så loopar koden ut sidan och innehållet
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();

                            the_content();
                        }
                    } ?>


                    <nav class="navigation pagination">
                        <h2 class="screen-reader-text">Inläggsnavigering</h2>
                        <!-- Anropar inbyggd funktion som genererar paginerade länkar-->
                        <?php the_posts_pagination() ?>
                    </nav>
                </div>
                <!-- Hämtar innehåll från sidebar.php-->
                <?php get_sidebar() ?>

            </div>
        </div>
    </section>
</main>

<?php
//Hämtar allt innehåll i footer.php
get_footer() ?>