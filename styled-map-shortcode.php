<?php


function stock_styled_map_shortcode($atts, $content = null) {
     
      extract( shortcode_atts( array(
        'title' => '',  
    ), $atts) );
      
  
     $stock_styled_map_markup = '
     <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNiGuIIDDwauzXC51FVJT0pvzaBVbqKIA"></script>

     
       <div style="width:100%;height:450px" class="map"></div>
            <script>
              (function ($) {
                "use strict";

               jQuery(document).ready(function($){
                  var uluru = {lat: -25.363, lng: 131.044};
                   
                  $(".map")
                 .gmap3({
                    center:[41.850033, -87.650052],
                    zoom:13,
                    mapTypeId: "shadeOfGrey", // to select it directly
                    mapTypeControlOptions: {
                    mapTypeIds: [google.maps.MapTypeId.ROADMAP, "shadeOfGrey"]
                    }
                 })
                .styledmaptype(
                    "shadeOfGrey",
                        [
                            {"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#A4A4A4"},{"lightness":40}]}, 
                            {"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},
                            {"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#F7F7F7"},{"lightness":20}]},
                            {"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#F7F7F7"},{"lightness":17},{"weight":1.2}]},
                            {"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#F7F7F7"},{"lightness":20}]},
                            {"featureType":"poi","elementType":"geometry","stylers":[{"color":"#F7F7F7"},{"lightness":21}]},
                            {"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#FFFFFF"},{"lightness":17}]},
                            {"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#FFFFFF"},{"lightness":29},{"weight":0.2}]},
                            {"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#FFFFFF"},{"lightness":18}]},
                            {"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#FFFFFF"},{"lightness":16}]},
                            {"featureType":"transit","elementType":"geometry","stylers":[{"color":"#FFFFFF"},{"lightness":19}]},
                            {"featureType":"water","elementType":"geometry","stylers":[{"color":"#EDEDED"},{"lightness":17}]}
                        ],
                    {name: "Shades of Grey"}
                );

              });


              
          }(jQuery)); 
    </script>

     ';  
     return $stock_styled_map_markup;

}
add_shortcode('stock_styled_map', 'stock_styled_map_shortcode');
