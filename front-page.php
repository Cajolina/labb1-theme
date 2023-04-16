<?php
//Hämtar allt innehåll i header.php
get_header();
?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="hero">
                        <!-- Hämtar utvald bild, inläggstitel och textinnehåll/content -->
                        <?php

                        the_post_thumbnail('full'); ?> 
                        <div class="text">
                            <h1><?php the_title(); ?></h1>
                            <p> <?php the_content() ?> </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
//Hämtar allt innehåll i footer.php
get_footer(); ?>