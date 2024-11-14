<section id="contact-us" class="contact-form-2" style='
                            padding-top: <?php the_field('pt'); ?>px!important; 
                            padding-bottom: <?php the_field('pb'); ?>px!important;
                            padding-right: <?php the_field('pr'); ?>px!important;
                            padding-left: <?php the_field('pl'); ?>px!important;
                            '>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-12 col-lg-4">
                <h2 style='font-size: <?php the_field('contact_title_ft'); ?>px!important;'><?php echo the_field('contact_title') ?></h2>
                <h3 class="weight-normal" style='font-size: <?php the_field('contact_subtitle_ft'); ?>px!important;'><?php echo the_field('contact_subtitle') ?></h3>
                <div class="row margin-v-60">
                    <div class="col-2">
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/chatting.svg" alt='Live Chat Icon'>
                    </div>
                    <div class="col-10">
                        <h3>Live Chat</h3>
                        <p>Support lines are open between <br>
                            Monday - Friday, 8:30am - 6:30pm</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/call-contanct.svg" alt='Phone Icon'>
                    </div>
                    <div class="col-10">
                        <h3>Call Us</h3>
                        <p>Monday – Friday: 09:00 – 17:30</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-5 offset-lg-1">
                <?php echo do_shortcode(get_field('form_shortcode')); ?>
            </div>
        </div>
    </div>
</section>