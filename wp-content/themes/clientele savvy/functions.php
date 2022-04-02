<?php
function scripts(){
      wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
      // enqueueing files from dist folder
      //css file
      wp_register_style('style',get_template_directory_uri(). '/dist/css/style.css',[],1,'all');
      wp_enqueue_style('style');
      //GSAP CDN
      wp_enqueue_script('gsap',"//s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js");
      // javascript file
      wp_enqueue_script('jquery');
      wp_register_script('app',get_template_directory_uri(). '/dist/js/app.js',[],1, true);
      wp_enqueue_script('app');
      
   }
   add_action('wp_enqueue_scripts','scripts');

?>