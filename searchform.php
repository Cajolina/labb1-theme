<form role="search" method="get" id="searchform" class="searchform" action="<? echo esc_url(home_url('/')); ?>">
    <div>

        <label class="screen-reader-text">Sök efter:</label>

        <input type="text" value="<? echo get_search_query(); ?> .  " name="s" />

        <input type="submit" value="<? echo esc_attr_x('Sök', 'submit button'); ?>" />

    </div>

</form>