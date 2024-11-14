<div class="request-a-quote-2" style='
                            padding-top: <?php the_field('pt'); ?>px!important; 
                            padding-bottom: <?php the_field('pb'); ?>px!important;
                            padding-right: <?php the_field('pr'); ?>px!important;
                            padding-left: <?php the_field('pl'); ?>px!important;
                            '>
    <section class="request-a-quote-steps-2 contact-us-header page-header">
        <div class="container-fluid">
            <?php $count = count(get_field('steps')); 
            if($_POST['quote_page_id']): ?>
            <div class="row justify-content-center">
                <div
                    class="col-12 col-lg-7 col-xl-7 d-flex flex-column align-items-center justify-content-end padding-v-10 text-center margin-top-100 margin-lg-top-140">

                    <div class="thank-you-message text-center">
                        <h2 class="weight-medium text-center weight-normal">Thank you for submitting your request</h2>
                        <p>One of our team will be in contact with you to discuss your requirements in further details.
                        </p>
                        <a href="/"><button class="btn btn-yellow margin-top-15">Back to home</button></a>
                    </div>
                </div>
            </div>
            <?php else: ?>

            <div class="row justify-content-center">
                <div
                    class="col-12 col-lg-7 col-xl-7 d-flex flex-column align-items-center justify-content-end padding-v-10 text-center margin-top-100 margin-lg-top-140">
                    <h1 class="weight-normal header-heading text-white">
                        <?php //if(get_field('form_title')); ?>
                            <span><?php //the_field('form_title') ?></span>
                        <?php //endif; ?>
                        <span class="text-yellow">Request</span> a quote
                    </h1>
                    <div class="progress margin-bottom-10 margin-top-5">
                        <div class="progress-bar" style=""></div>
                    </div>
                    <div class="step-number-counter">Step <span id="current-step">1</span> of <span
                            id="total-steps"><?php echo $count + 1; ?></span>
                    </div>
                </div>

                <?php

            $step_number = 0;
            if (have_rows('steps')):
                while (have_rows('steps')) :
                    the_row();
                    $step_number++;
                    ?>
                <!-- hidden input with steps count -->
                <div class="col-12 text-center">
                    <div class="row justify-content-center current-item <?php echo "step-$step_number"; ?>"
                        style="display:none;">


                        <input type="hidden" id="steps-count" value="<?php echo $count; ?>">
                        <div class="col-12 col-lg-7 text-center">
                            <h2 class="headings weight-medium text-center <?php echo "step-$step_number"; ?>" style='font-size: <?php the_sub_field('title_ft'); ?>px!important;'>
                                <?php the_sub_field('title'); ?></h2>
                            <?php if (get_sub_field('subtitle')): ?>
                            <h3 class="sub-headings weight-normal <?php echo "step-$step_number"; ?>" style='font-size: <?php the_sub_field('subtitle_ft'); ?>px!important;'>
                                <?php the_sub_field('subtitle'); ?></h3>
                            <?php endif; ?>
                        </div>
                        <div class="col-12 margin-bottom-40 request-step-options login-options-wrap margin-top-20 margin-lg-top-40 d-flex justify-content-center <?php echo "step-$step_number"; ?>"
                            data-input-type="<?php echo $multi_select ? 'checkbox' : 'radio'; ?>">

                            <?php
                        $multi_select = get_sub_field('multi_select');

                            if (have_rows('options')):
                                while (have_rows('options')) :
                                    the_row();
                                    $image_alt = get_sub_field('option_image_alt');

                                    ?>
                            <div class="col-6 col-md-6 col-lg-3 text-center margin-bottom-30">
                                <a href="javascript:;" class="custom-card"
                                    data-target="<?php the_sub_field('data-target'); ?>">
                                    <div class="card-steps padding-v-10 padding-lg-v-30 h-100 d-flex flex-column">
                                        <div class="card-body">
                                            <?php if ($multi_select == true) { ?>

                                            <input type="checkbox" class="card-checkbox"
                                                name="<?php echo "step-$step_number"; ?>"
                                                value="<?php the_sub_field('data-target'); ?>" />
                                            <?php } else { ?>

                                            <input type="radio" class="card-radio"
                                                name="step-<?php echo $step_number; ?>"
                                                value="<?php the_sub_field('data-target'); ?>" />

                                            <?php } ?>


                                            <?php if (get_sub_field('option_image')): ?>
                                            <img loading="lazy" decoding="async" class="img-set-height margin-bottom-15"
                                                src="<?php the_sub_field('option_image'); ?>" alt="<?php echo $image_alt['alt']; ?>">
                                            <?php endif; ?>

                                        </div>
                                        <h3 class="margin-bottom-0 margin-top-auto">
                                            <?php the_sub_field('option_text'); ?>
                                        </h3>
                                    </div>
                                </a>
                            </div>


                            <?php
                                endwhile;
                        endif;
                    ?>

                        </div>
                    </div>
                </div>


                <?php
                endwhile;
            endif;
            ?>
            
                <div class="col-12 form margin-bottom-40 request-step-options margin-top-20 margin-lg-top-40 justify-content-center"
                    style="display: none;">

                    <form class="items-form" action="" method="POST">
                        <?php
                                        if (have_rows('steps')):
                                            while (have_rows('steps')) :
                                                the_row();
                                                if (have_rows('options')):
                                                    while (have_rows('options')) :
                                                        the_row();

                                                        ?>

                        <input type="hidden" name="<?php the_sub_field('data-target'); ?>" value="">
                        <?php
                                                    endwhile;
                                                endif;
                                                ?>
                        <?php
                                            endwhile;
                                        endif;
            ?>
                        <div class="row request-new">
                            <div class="col-12 col-lg-6">
                                <!-- Hidden input with page id -->
                                <input type="hidden" name="quote_page_id" value="<?php echo get_the_ID(); ?>">
                                <p>
                                    <input type="text" name="NAME" placeholder="Name" required />
                                </p>
                                <p>
                                    <input type="email" name="EMAIL" placeholder="Email" required />
                                </p>
                                <p>
                                    <input type="text" name="BUSINESS-ADDRESS" placeholder="Business address"
                                        required />
                                </p>
                                <p>
                                    <input type="text" name="POSTCODE" placeholder="Postcode" required />
                                </p>

                            </div>
                            <div class="col-12 col-lg-6">
                                <p>
                                    <input type="text" name="COMPANY" placeholder="Company" required />
                                </p>
                                <p>
                                    <input type="tel" name="NUMBER" placeholder="Phone Number" required />
                                </p>
                                <p>
                                    <input type="text" name="CITY" placeholder="City" required />
                                </p>
                            </div>

                            <div class="col-12 text-center margin-top-30">
                                <p>
                                    Once you’ve submitted the form, we will contact you. <br>
                                    By submitting the form, you agree to our terms of use, and <a class="text-yellow"
                                        target="_blank" href="#">privacy policy</a>.
                                </p>
                            </div>

                            <div class="col-md-12 text-center margin-top-10">
                                <button name="new-quote" class="btn-yellow" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>


                </div> 
                <!-- Here -->
                <div class="col-12 text-center margin-bottom-30">
                    <div>
                    <button class="btn btn-yellow back-button" style="display: none;">
                            < </button>
                        <button class="btn btn-yellow continue-button margin-left-20" disabled>Continue</button>

                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>
</div>

<?php
if($_POST['quote_page_id']){
    // santize the data

    $name = sanitize_text_field($_POST['NAME']);
    $email = sanitize_email($_POST['EMAIL']);
    $page_id = sanitize_text_field($_POST['quote_page_id']);
    $message = sanitize_textarea_field($_POST['MESSAGE']);
    $number = sanitize_text_field($_POST['NUMBER']);
    $business_address = sanitize_text_field($_POST['BUSINESS-ADDRESS']);
    $postcode = sanitize_text_field($_POST['POSTCODE']);
    $company = sanitize_text_field($_POST['COMPANY']);
    $city = sanitize_text_field($_POST['CITY']);
    

    $message = "";
    // have rows by page id
    
    if (have_rows('steps')):
        while (have_rows('steps')) :
            the_row();

            $step_title = get_sub_field('title', $step);
            $message .= '<h3>'.$step_title."</h3> <br>";
            if (have_rows('options')):
                while (have_rows('options')) :
                    the_row();
                    $option_name = get_sub_field('data-target');
                    $value = sanitize_text_field($_POST[$option_name]);
                    $option_text = get_sub_field('option_text');
                    $message .= $option_text." = ".$value." <br>";
                endwhile;
            endif;
        endwhile;
    endif;

    $message .= "Name: ".$name." <br>";
    $message .= "Email: ".$email." <br>";
    $message .= "Number: ".$number." <br>";
    $message .= "Company: ".$company." <br>";
    $message .= "Business Address: ".$business_address." <br>";
    $message .= "Postcode: ".$postcode." <br>";
    $message .= "City: ".$city." <br>";

    $to = ['kamilla.beal@aerial-direct.co.uk', 
    'marketing@aerial-direct.co.uk'];
    $subject = 'Request a quote form - '.$company;
    $headers[] = 'Content-Type: text/html; charset=UTF-8';
    $headers[] = 'From:' . "marketing@aerial-direct.co.uk";
    $attachments = array();

    
    wp_mail( $to, $subject, $message, $headers, $attachments );

}