<section class="container" style='
                            padding-top: <?php the_field('pt'); ?>px!important; 
                            padding-bottom: <?php the_field('pb'); ?>px!important;
                            padding-right: <?php the_field('pr'); ?>px!important;
                            padding-left: <?php the_field('pl'); ?>px!important;
                            '>
    <div class="row row-gap-50">
        <div class="col-12 text-center margin-v-40">
            <h2>Kind words from our customers</h2>
        </div>
    </div>
</section>
<section class="swiper-content slider-content">
    <div class="swiper">
        <div class="swiper-wrapper" style="justify-content: center;">
            <?php 
                $reviews = getTrustPilotReviews();
                foreach ($reviews->reviews as $review) {
                    $createdAt =  strtotime($review->createdAt);
                    $now = strtotime("now");
                    $hoursago = round(($now - $createdAt)/3600);
                    $daysago = round(($now - $createdAt)/3600/24)
            ?>
            <div class="swiper-slide card trustpilot-card">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $review->title ?></h4>
                    <p class="card-text"><?php echo $review->text ?></p>
                </div>
                <div class="card-footer">
                    <img loading="lazy" class="card-img-top" src="https://images-static.trustpilot.com/api/stars/<?php echo $review->stars ?>/128x24.png" alt='trustpilot-stars'>
                    <p class="margin-bottom-0"><?php echo $review->consumer->displayName ?><br>
                    <?php echo ($daysago < 1 ? $hoursago . " hours " : $daysago . " days ")?>ago</p>
                    
                </div>
            </div>
            <?php
                }
             ?>        
        </div>
    </div>
</section>