<?php get_header() ?>

<h1><?php echo "Sökresultat för: ";
    the_search_query() ?></h1>

<?php if (have_posts()) : while (have_posts()) : the_post() ?>
        <?php get_template_part('/template-parts/content-archive') ?>

<?php endwhile;
endif; ?>

<?php get_footer() ?>