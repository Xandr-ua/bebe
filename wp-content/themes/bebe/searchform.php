<form role="search" method="get" id="searchform" action="<?= site_url(); ?>">
    <fieldset>
        <input class="searchinput" type="text" value="<?= get_search_query(); ?>" name="s" id="s" placeholder="<?php _e(); ?>">
        <input class="headerfront" id="headerfront" type="submit" value="<?php _e('Search', 'aleyhem') ?>">
    </fieldset>
</form>
