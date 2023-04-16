<?php
//Hämtar allt innehåll i header.php
get_header() ?>


<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-8 col-md-offset-2">

                    <!-- Hämtar titel för sidan -->
                    <h1><?php wp_title('') ?></h1>
                    <div class="searchform-wrap">
                        <form id="searchform" class="searchform">
                            <div>
                                <label> <?php dynamic_sidebar('SearchWidget-2') ?></label>

                                <!-- Visar sökformuläret -->
                                <?php get_search_form(); ?>
                            </div>
                        </form>
                    </div>



                    <?php
                    //Loopar ut posterna och hämtar innehåll från templateparts
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();

                            get_template_part('/template-parts/content-archive');
                        }
                    } else {
                        // Visar meddelande för tomma sökresultat
                        echo "Tyvärr hittade inget sökresultat för: \"" . get_search_query() . "\"";
                    }
                    ?>



                    <nav class="navigation pagination">
                        <h2 class="screen-reader-text">Inläggsnavigering</h2>
                        <!-- Anropar inbyggd funktion som genererar paginerade länkar-->
                        <?php the_posts_pagination() ?>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
//Hämtar allt innehåll i footer.php
get_footer() ?>