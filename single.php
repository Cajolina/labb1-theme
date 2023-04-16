<?
//Hämtar allt innehåll i header.php
get_header(); ?>


<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <!--Kollar om det finns poster och loopar ut posterna och hämtar innehåll från templateparts-->
                    <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();

                            get_template_part('/template-parts/content-article');
                        }
                    } ?>

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