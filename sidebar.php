<aside id="secondary" class="col-xs-12 col-md-3">
    <div id="sidebar">
        <ul>
            <li>
                <form id="searchform" class="searchform">
                    <?php get_search_form(); ?>
                </form>
            </li>
        </ul>
        <ul role="navigation">
            <li class="pagenav">

                <?php
                //ta in sidebar
                dynamic_sidebar('sidebarWidget') ?>


            </li>
        </ul>
    </div>
</aside>