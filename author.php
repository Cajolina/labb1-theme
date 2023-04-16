<?php
//Hämtar allt innehåll i header.php
get_header() ?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <!-- Hämtar titeln för sidan -->
                    <h1> <?php wp_title('Författare: ') ?> </h1>

                    <?php
                    //Loopar ut alla poster och hämtar en mall för utseendet i template-parts, i just den författaren du har valt
                    if (have_posts()) {
                        while (have_posts()) {

                            the_post();

                            get_template_part('/template-parts/content-archive');
                        }
                    }
                    ?>


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