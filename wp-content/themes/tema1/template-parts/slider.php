<section class="slider">
  <div class ="flexslider">
   <ul class ="slides">
     <?php
     $args = array('post_type'=>'post','category_name'=>'slider','posts_per_page'=>3,);
     $slider_loop = new WP_Query($args);
     if($slider_loop->have_posts()):
       while($slider_loop->have_posts()):
         $slider_loop->the_post();
     ?>
         <li>
           <?php the_post_thumbnail('tema1-slider');?>
           <div class="container">
             <div class ="slider-details-container">
               <div class ="slider-title">
                 <h2><?php the_title();?></h2>
               </div>
               <div class="slider-description">
                 <div class="subtitle">
                   <?php the_excerpt();?>
                 </div>
                 <a class="link" href="<?php the_permalink();?>"> Leia mais... </a>
               </div>
             </div>
           </div >
         </li>
   <?php
     endwhile;
     wp_reset_postdata();
     endif;
    ?>
 </ul>
 </div>
</section>
