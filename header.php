<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <!-- Hämtar titeln för sidan-->
    <title><?php wp_title() ?></title>
    <?php

    //Funktion som används  för att inkludera nödvändigt innehåll i webbsidans <head>-tagg, såsom meta-taggdata, länkar till stylesheets och scripts. 
    wp_head();
    ?>

</head>

<body>



    <div id="wrap">

        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-8 col-sm-6">
                        <!-- Visar webbplatsens namn och länka till webbplatsens startsida.
                            <a>-taggen skapar en länk, 
                            href-attributet pekar på webbplatsens startsida genom att använda funktionen home_url(), som hämtar startsidans URL-adress,
                            bloginfo('name') hämtar webbplatsens namn från WordPress-inställningarna och skriver ut det inom länken.  -->
                        <a class="logo" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
                    </div>
                    <div class="col-sm-6 hidden-xs">
                        <!-- Visar sökformuläret -->
                        <?php get_search_form(); ?>
                    </div>
                    <div class="col-xs-4 text-right visible-xs">
                        <div class="mobile-menu-wrap">
                            <i class="fa fa-search"></i>
                            <i class="fa fa-bars menu-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="mobile-search">
            <!-- Visar sökformuläret -->
            <?php get_search_form(); ?>
        </div>

        <nav id="nav">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <?php
                        //wp_nav_menu() genererar en anpassad navigeringsmeny som är definierad i WordPress-administrationen och visar den på webbsidan.
                        //'menu' => 'primary' parameter anger vilken WordPress-menyn som ska visas. "primary" är den namngivna menyn
                        //theme_location gör så menyn kan placeras i en specifik position på webbplatsen. 
                        //'container' => false parameter avlägsnar standardomslutningen för menyn i HTML-koden, vilket gör att det anpassar menyn med egna HTML- och CSS-kod.

                        wp_nav_menu(array(
                            'menu' => 'primary',
                            'theme_location' => 'primary',
                            'container'      => false,
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </nav>


    </div>