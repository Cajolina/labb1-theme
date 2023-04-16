<?php
//Hämtar allt innehåll i header.php
get_header() ?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <!-- Kollar först om det finns några sidor tillgänliga att visa med have_posts()-funktionen. Om det finns inlägg eller sidor tillgängliga att visa så loopar koden ut titel för sidan och innehållet -->
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <h1><?php the_title(); ?></h1>
                            <?php the_content(); ?>
                    <?php endwhile;
                    endif; ?>
                </div>
                <aside id="secondary" class="col-xs-12 col-md-3">
                    <!-- Genererar en sidomeny i WordPress med ID sidebar-menu och klassen side-menu, med hjälp av menyposterna som definieras i WordPress administrationspanel.   -->
                    <?php wp_nav_menu(array(
                        'menu' => 'sidebar-menu',
                        'theme_location' => 'sidebar-menu',
                        'items_wrap' => '<ul id="" class="side-menu">%3$s</ul>'
                    )); ?>
                </aside>
            </div>
        </div>
    </section>
</main>

<?php
//Hämtar allt innehåll i footer.php
get_footer() ?>