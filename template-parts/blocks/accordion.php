<?php



?>
            <?php
                 if (have_rows('accordion')):
                     while (have_rows('accordion')) : the_row();
                         $random_num = rand(22, 556688554);
                         $accordion_title = get_sub_field('title');
                         $accordion_content = get_sub_field('content');
                         ?>
                     <div class="container" style='
                            padding-top: <?php the_field('pt'); ?>px!important; 
                            padding-bottom: <?php the_field('pb'); ?>px!important;
                            padding-right: <?php the_field('pr'); ?>px!important;
                            padding-left: <?php the_field('pl'); ?>px!important;
                            '>
                         <div class="row">
                             <div class="col-12">

                             <div class="accordion-wrapper padding-v-10">


                                 <button class="accordion"><span class="text-yellow" style="font-size: 20px;">+</span>   <?php echo $accordion_title; ?></button>
                                 <div class="panel" style='font-size: <?php the_sub_field('content_ft'); ?>px!important;'>
                                     <p><?php echo $accordion_content; ?></p>
                                 </div>
                                 </div>
                             </div>
                         </div>


                     </div>

            <?php
                     endwhile;
                 endif;
?>
