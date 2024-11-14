<section class="trustpilot-section padding-v-50 bg-gradient-bottom" style='
                            padding-top: <?php the_field('pt'); ?>px!important; 
                            padding-bottom: <?php the_field('pb'); ?>px!important;
                            padding-right: <?php the_field('pr'); ?>px!important;
                            padding-left: <?php the_field('pl'); ?>px!important;
                            '>



    <div class="container">
        <div class="row">
            <div class="col-12 text-center margin-v-40">
                <h2>Trusted by our customers</h2>
            </div>
        </div>
    </div>
    <div class="swiper-content slider-content">
        <div class="swiper padding-v-20">
            <div class="swiper-wrapper">
                <?php
                $reviews = getTrustPilotReviews();
                foreach ($reviews->reviews as $review) {
                    $createdAt =  strtotime($review->createdAt);
                    $now = strtotime("now");
                    $hoursago = round(($now - $createdAt)/3600);
                    $daysago = round(($now - $createdAt)/3600/24)
                    ?>
                    <div class="swiper-slide trustpilot-card d-flex flex-column h-100">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $review->title ?></h4>
                            <p class="card-text"><?php echo $review->text ?></p>
                        </div>
                        <div class="card-footer margin-top-auto">
                            <img loading="lazy" class="card-img-top margin-bottom-10" src="<?php echo get_template_directory_uri(); ?>/assets/images/stars-large.svg" alt='trustpilot-stars'>
                            <p class="margin-bottom-0"><?php echo $review->consumer->displayName ?><br>
                                <?php
                                if ($daysago == 1) {
                                    echo $daysago . " day ";
                                } else {
                                echo ($daysago < 1 ? $hoursago . " hours " : $daysago . " days ");
                                }
                                ?>ago</p>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <section class="container">
        <?php
        $totalreviews = getTrustPilot5starReviews();
        ?>
        <div class="row">
            <div class="col-12 text-center margin-v-40">
                <img loading="lazy" width="190px" src="<?php echo get_template_directory_uri(); ?>/assets/images/stars-large.svg" alt='trustpilot-stars'>
                <p class="margin-top-10"><small>Based on <a href="https://uk.trustpilot.com/review/www.aerial-direct.co.uk" target="_blank"><?php echo number_format($totalreviews->numberOfReviews->total);
                            ?> reviews</a></small></p>
                <img loading="lazy" width="130px" src="<?php echo get_template_directory_uri(); ?>/assets/images/trust.svg" alt='trustpilot-star'>
            </div>
        </div>
    </section>
</section>


