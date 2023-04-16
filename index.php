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
                        <!--funktion som hämtar och visar den utvalda bilden för det sidan.  -->
                        <?php the_post_thumbnail('full'); ?> 
                        <div class="text">

                            <?php
                            // "if"-sats som kontrollerar om det finns några inlägg eller sidor att visa. Om det finns några, fortsätter koden med en "while"-loop som hämtar och visar innehållet för varje inlägg eller sida.
                            if (have_posts()) {
                                while (have_posts()) {
                                    the_post();
                                    the_content();
                                }
                            }

                            ?>


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