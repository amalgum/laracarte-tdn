<?php
if(!function_exists('page.title')){
  function page_title($title){
    if ($title) {
      $base_title=config('app.name') .'-List of artisans';
      if ($title=='') {
    return   $base_title;
  } else {
    return $title . ' | ' .$base_title;
  }
    }
  }

}
if(!function_exists('set_active_route')){
  function set_active_route($route){
    return Route::is($route) ? 'active' : '';
  }

}
 ?>
