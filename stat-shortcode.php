<?php


function stock_stat_shortcode($atts, $content = null) {
     
      extract( shortcode_atts( array( 
        'number' => '', 
        'after_text' => '', 
        'desc' => '', 
    ), $atts) );
  
     
     $stock_stat_markup = ' 
     <div class="stock-stat-box">
       <h1><span>'.$number.'</span> '.$after_text.'</h1>
        '.$desc.'
     </div>
    ';
    return $stock_stat_markup;

}
add_shortcode('stock_stat', 'stock_stat_shortcode');
