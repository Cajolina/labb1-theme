<?php
//Hämtar allt innehåll i header.php
get_header() ?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6">

                    <!-- Kollar först om det finns några sidor tillgänliga att visa med have_posts()-funktionen. Om det finns inlägg eller sidor tillgängliga att visa så loopar koden ut titel för sidan och innehållet -->
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <h1><?php the_title(); ?></h1>
                            <?php the_content(); ?>
                    <?php endwhile;
                    endif; ?>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-6">
                    <!-- Visar den utvalda bilden för det aktuella inlägget-->
                    <img src="<?php the_post_thumbnail_url(); ?>">
                </div>
            </div>
        </div>
    </section>
</main>

<?php
//Hämtar allt innehåll i footer.php
get_footer() ?>