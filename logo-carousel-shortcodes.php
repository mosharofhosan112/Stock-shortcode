<?php


function stock_logo_carousel_shortcode($atts, $content = null) {
     
      extract( shortcode_atts( array(
        'logos' => '',
        'desktop_count' => '5', 
        'tablet_count' => '3', 
        'mobile_count' => '2',
        'loop' => 'true', 
        'autoplay' => 'true',
        'autoplaytimeout' => 5000,
        'nav' => 'true',
        'dots' => 'true',
    ), $atts) );

     $logo_ids = explode(',', $logos);
     
     $stock_logo_carousel_markup = '
          <script>
              jQuery(window).load(function(){
                 jQuery(".stock-logo-carousel").owlCarousel({
                    margin: 30,
                    items: 5,
                    loop: '.$loop.',
                    autoplay: '.$autoplay.',
                    autoplaytimeout: '.$autoplaytimeout.',
                    nav: true,
                    dots: true,
                    navText: ["<i class=\'fa fa-angle-left\'></i>", "<i class=\'fa fa-angle-right\'></i>"]
                 });
              });   
        </script>
      ';
     $stock_logo_carousel_markup .= '
      <div class="stock-logo-carousel owl-carousel">';
       foreach($logo_ids as $logo) { 
       	 $logo_array = wp_get_attachment_image_src($logo, 'large');
           $stock_logo_carousel_markup .= '
            <div class="stock-logo-item-table">
              <div class="stock-logo-item-tablecell">
                  <img src="'.$logo_array[0].'"/>
              </div>
            </div>
           ';
       }
      
      $stock_logo_carousel_markup .= '
      </div>';

      return $stock_logo_carousel_markup ;

     

}
add_shortcode('stock_logo_carousel', 'stock_logo_carousel_shortcode');
