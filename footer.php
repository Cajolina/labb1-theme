<footer id="footer">
    <div class="container">
        <div class="row top">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <!-- Visar det dynamiska sidofältet 'footer1' på en webbsida och dess innehåll som definierats genom widgets.  -->
                <?php dynamic_sidebar('footer1') ?>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                <!-- Visar det dynamiska sidofältet 'footer2' på en webbsida och dess innehåll som definierats genom widgets.  -->
                <?php dynamic_sidebar('footer2') ?>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                <!-- Visar det dynamiska sidofältet 'footer3' på en webbsida och dess innehåll som definierats genom widgets.  -->
                <?php dynamic_sidebar('footer3') ?>

            </div>
        </div>
        <div class="row bottom">
            <div class="col-xs-12">
                <p>Copyright &copy; Grupp X, 2023</p>
            </div>
        </div>
    </div>

</footer>

</div>

<?php
//Används för att visa footer-sektionen och inkluderar nödvändigt innehåll som länkar till JavaScript-bibliotek och sluttaggen för HTML-dokumentet. Att inkludera koden säkerställer att alla nödvändiga element som krävs för att webbplatsen ska fungera korrekt laddas in på sidan.
wp_footer(); ?>
</body>

</html>