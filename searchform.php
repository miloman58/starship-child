<form class="navbar-form navbar-right" role="search" action="<?php echo home_url( '/' ); ?>">
  <div class="form-group">
    <input type="text" class="form-control"   placeholder="<?php echo esc_attr_x( 'Поиск …', 'placeholder' ) ?>"
      value="<?php echo get_search_query() ?>" name="s"
      title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>"
     />
  </div>
  <button type="submit" class="btn btn-danger" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
</form>
