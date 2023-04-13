<?php get_header() ?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9 col-md-push-3">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <h1><?php the_title(); ?></h1>
                            <?php the_content(); ?>
                    <?php endwhile;
                    endif; ?>
                </div>
                <aside id="secondary" class="col-xs-12 col-md-3 col-md-pull-9">
                    <ul class="side-menu">
                        <li>
                            <a href="undersida.html">Undersida</a>
                        </li>
                        <li>
                            <a href="undersida2.html">Undersida 2</a>
                        </li>
                        <li>
                            <a href="undersida3.html">Undersida 3</a>
                        </li>
                        <li>
                            <a href="undersida4.html">Undersida 4</a>
                        </li>
                    </ul>
                </aside>
            </div>
        </div>
    </section>
</main>

<?php get_footer() ?>