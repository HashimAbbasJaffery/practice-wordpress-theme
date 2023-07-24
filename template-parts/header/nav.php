
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
  <?php 
    if(function_exists("the_custom_logo")) {
      the_custom_logo();
    }
  ?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
    <?php   


    $menu = \PRACTICE_THEME\Inc\Menus::get_instance();
    $location = $menu->get_menu_id( "practice-header-menu" );
    $items = wp_get_nav_menu_items($location);
    // foreach($items as $item) {
    //   echo $item->menu_item_parent;
    // }
    // wp_die();
    // dd($items);
    ?>
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#"><?php  ?> <span class="sr-only">(current)</span></a>
        </li>
      
        <?php foreach($items as $item): ?>
          <?php if(!$item->menu_item_parent): ?>
            <?php 
              $child_menu = array_filter($items, function($menu) use ($item) {
                return $menu->menu_item_parent == $item->ID;
              });
              $status = "";
              if($child_menu) {
                $status = "dropdown";
              }
            ?>
            <li class="nav-item <?php echo $status ?>">
              <a 
                class="nav-link <?php echo $status ?>-toggle" 
                id="navbarDropdown-<?php echo $item->ID ?>" 
                href="<?php echo $item->url ?>"
                <?php if($child_menu): ?>
                  data-toggle="dropdown"
                  role="button"
                  aria-haspopup="true"
                  aria-expanded="false"
                <?php endif ?> 
              >
                <?php echo $item->title; ?>
              </a>
            <?php if($child_menu): ?>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown-<?php echo $item->ID ?>">
                <?php foreach($child_menu as $menu): ?>
                  <a class="dropdown-item" href="<?php echo $menu->url ?>"><?php echo $menu->title ?></a>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>
            </li>
          <?php endif; ?>
        <?php endforeach; ?>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
                </div>
</nav>


