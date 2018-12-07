<form role="search" method="get" class="search-form" autocomplete="off" action="<?php echo home_url( '/' ); ?>">
        <input type="search" id="searchInput" onkeyup="fetchResults()" class="search-field"
            placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
            <div id="datafetch"></div>
</form>