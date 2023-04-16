<aside id="secondary" class="col-xs-12 col-md-3">
    <div id="sidebar">
        <ul>
            <li>
                <form method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/')); ?>">
                    <div>
                        <!-- En funktion som hämtar och visar en dynamisk sidebar för texten "sök efter:" sidebarSearchWidget-1 är Idt för funktionen-->
                        <?php dynamic_sidebar('sidebarSearchWidget-1') ?>
                        <!-- Visar sökformuläret -->
                        <?php get_search_form(); ?>
                    </div>
                </form>
            </li>
        </ul>
        <ul role="navigation">
            <li class="pagenav">
                <!--En funktion som hämtar och visar en dynamisk sidebar för widgeten på bloggsidan. sidebarWidget är Idt för funktionen.-->
                <?php dynamic_sidebar('sidebarWidgetArea1'); ?>
            </li>

            <li>
                <?php dynamic_sidebar('sidebarWidgetArea2'); ?>
            </li>
            <li class="categories">
                <?php dynamic_sidebar('sidebarWidgetArea3'); ?>
            </li>
        </ul>


    </div>
</aside>