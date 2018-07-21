<?php


function stock_cta_shortcode($atts, $content = null) {
     
      extract( shortcode_atts( array(
        'title' => '',
        'desc' => '', 
        'type' => 1, 
        'link_to_page' => '',
        'external_link' => '', 
        'link_text' => 'See more', 
    ), $atts) );
      
   if($type == 1) {
       $link_source = get_page_link($link_to_page);
   } else {
     $link_source = $external_link;
   }
 
     
     $stock_cta_markup = '
       <div class="stock-cta-box">
          <h2>'.$title.'</h2> 
          '.wpautop($desc).' 

           <a href="'.$link_source.'" class="bordered-btn">'.$link_text.'</a  
       </div>

     ';
     $stock_cta_markup .= '';
 
  
    return $stock_cta_markup;

}
add_shortcode('stock_cta', 'stock_cta_shortcode');
