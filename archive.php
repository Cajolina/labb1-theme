<?php
//Hämtar allt innehåll i header.php
get_header() ?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <!-- Visar arkiv titel och rubrik för arkivtiteln. Eftersom arkivrubriker har som default "månad" så använder jag funktionen str_replace() för att ersätta med en tom sträng. -->
                    <h1>Arkiv: <?php echo str_replace('Månad: ', '', get_the_archive_title()); ?></h1>

                    <?php
                    //Kollar först om det finns några sidor och inlägg tillgänliga att visa med have_posts()-funktionen. Om det finns inlägg eller sidor tillgängliga att visa så loopar ut alla poster och hämtar en mall för utseendet i template-parts i arkivet. -->
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