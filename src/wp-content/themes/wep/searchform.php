<form role="search" method="get" class="form" action="<?php echo home_url( '/' ); ?>">
<div class="form-group">
    <input type="text" class="search-field form-control" placeholder="<?php echo esc_attr_x( 'Search', 'wep' ) ?>" value="<?php echo get_search_query() ?>" name="s" aria-describedby="search-form">
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-default" id="search-form"><i class="fa fa-search" aria-hidden="true"></i> <?php echo esc_attr_x( 'Search', 'submit button' ) ?></button>
  </div>
</form>