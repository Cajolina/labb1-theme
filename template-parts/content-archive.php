<!-- 
Template-parts är en funktion som gör det möjligt att återanvända kod i flera olika mallar i webbplatsen. 
Genererar en HTML-artikel med information om en post. Den inkluderar en bild som är kopplad till den utvalda bild-funktionen för inlägg ('the_post_thumbnail_url()'), en rubrik med länk till posten ('the_title()' och 'the_permalink()'), metadata om posten (datum, författare och kategori) och en kort utdrag av inlägget ('the_excerpt()').

 -->

<article>
    <img src="<?php the_post_thumbnail_url(); ?>">

    <h2 class="title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>
    <ul class="meta">
        <li>
            <i class="fa fa-calendar"></i> <?php the_date(); ?>
        </li>
        <li>
            <i class="fa fa-user"></i> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
        </li>
        <li>
            <i class="fa fa-tag"></i> <?php the_category(', '); ?>
        </li>
    </ul>
    <p><?php the_excerpt() ?></p>
</article>