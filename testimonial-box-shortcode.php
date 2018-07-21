<?php


function stock_testimonial_box_shortcode($atts, $content = null) {
     
      extract( shortcode_atts( array(
        'title' => '',
        'position' => '', 
        'desc' => '', 
        'photo' => '', 
    ), $atts) );
   
   $phpto_array = wp_get_attachment_image_src($photo, 'large' );
     
     $stock_testimonial_box_markup = '
     <div class="single-testimonial-box">
       <img src="'.$phpto_array[0].'" alt="'.$title.'"/>

       <h3>'.$title.' <span>'.$position.'</span></h3>
       '.wpautop($desc).'
      </div>

     ';
     $stock_testimonial_box_markup .= '';
 
  
    return $stock_testimonial_box_markup;

}
add_shortcode('stock_testimonial_box', 'stock_testimonial_box_shortcode');
