<?php
function scripts(){
      wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
      wp_enqueue_script('gsap', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js');
      wp_enqueue_script('ScrollTrigger', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js');
      // enqueueing files from dist folder
      //css file
      wp_register_style('style',get_template_directory_uri(). '/dist/css/style.css',[],1,'all');
      wp_enqueue_style('style');
      // javascript file
      wp_enqueue_script('jquery');
      wp_register_script('app',get_template_directory_uri(). '/dist/js/app.js',[],1, true);
      wp_enqueue_script('app');
      
   }
   add_action('wp_enqueue_scripts','scripts');



?>
