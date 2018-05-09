<?php
if(!function_exists('page.title')){
  function page_title($title){
    if ($title) {
      $base_title='Laracarte-List of artisans';
      if ($title=='') {
    return   $base_title;
  } else {
    return $title . ' | ' .$base_title;
  }
    }
  }
}
 ?>
