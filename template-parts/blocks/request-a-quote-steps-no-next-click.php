<pre id="debug-info" style="position: fixed; bottom: 0; right: 0; background: #f5f5f5; padding: 10px; max-height: 200px; overflow: auto; z-index: 9999;">
Debug Information:
</pre>

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
                <div class="col-12 col-lg-7 col-xl-7 d-flex flex-column align-items-center justify-content-end padding-v-10 text-center margin-top-100 margin-lg-top-140">
                    <div class="thank-you-message text-center">
                        <h2 class="weight-medium text-center weight-normal">Thank you for submitting your request</h2>
                        <p>One of our team will be in contact with you to discuss your requirements in further details.</p>
                        <a href="/"><button class="btn btn-yellow margin-top-15">Back to home</button></a>
                    </div>
                </div>
            </div>
            <?php else: ?>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-7 col-xl-7 d-flex flex-column align-items-center justify-content-end padding-v-10 text-center margin-top-100 margin-lg-top-140">
                    <h1 class="weight-normal header-heading text-white">
                        <span class="text-yellow">Request</span> a quote
                    </h1>
                    <div class="progress margin-bottom-10 margin-top-5">
                        <div class="progress-bar" style=""></div>
                    </div>
                    <div class="step-number-counter">Step <span id="current-step">1</span> of <span id="total-steps"><?php echo $count + 1; ?></span></div>
                </div>

                <?php
                $step_number = 0;
                if (have_rows('steps')):
                    while (have_rows('steps')) :
                        the_row();
                        $step_number++;
                        ?>
                        <div class="col-12 text-center">
                            <div class="row justify-content-center current-item step-<?php echo $step_number; ?>"
                                style="display: <?php echo $step_number === 1 ? 'block' : 'none'; ?>;">
                                <input type="hidden" id="steps-count" value="<?php echo $count; ?>">
                                <div class="col-12 text-center">
                                    <h2 class="headings weight-medium text-center <?php echo "step-$step_number"; ?>" 
                                        style='font-size: <?php the_sub_field('title_ft'); ?>px!important;'>
                                        <?php the_sub_field('title'); ?>
                                    </h2>
                                    <?php if (get_sub_field('subtitle')): ?>
                                        <h3 class="sub-headings weight-normal <?php echo "step-$step_number"; ?>" 
                                            style='font-size: <?php the_sub_field('subtitle_ft'); ?>px!important;'>
                                            <?php the_sub_field('subtitle'); ?>
                                        </h3>
                                    <?php endif; ?>
                                </div>

                                <div class="col-12 margin-bottom-40 request-step-options login-options-wrap margin-top-20 margin-lg-top-40 d-flex justify-content-center <?php echo "step-$step_number"; ?>">
                                    <?php
                                    if (have_rows('options')):
                                        while (have_rows('options')) :
                                            the_row();
                                            $image_alt = get_sub_field('option_image_alt');
                                            ?>
                                            <div class="col-6 col-md-6 col-lg-3 text-center margin-bottom-30">
                                                <a href="#" class="custom-card" data-target="<?php the_sub_field('data-target'); ?>">
                                                    <div class="card-steps padding-v-10 padding-lg-v-30 h-100 d-flex flex-column">
                                                        <div class="card-body">
                                                            <input type="radio" class="card-radio"
                                                                name="step-<?php echo $step_number; ?>"
                                                                value="<?php the_sub_field('data-target'); ?>" />
                                                            <?php if (get_sub_field('option_image')): ?>
                                                                <img loading="lazy" decoding="async" class="img-set-height margin-bottom-15"
                                                                    src="<?php the_sub_field('option_image'); ?>" 
                                                                    alt="<?php echo $image_alt['alt']; ?>">
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

                <div class="col-12 form margin-bottom-40 request-step-options margin-top-20 margin-lg-top-40 justify-content-center current-item"
                    style="display:none">
                    <!-- Your existing form HTML -->
                </div>

                <div class="col-12 text-center margin-bottom-30">
                    <div>
                        <button id="back-button" class="btn btn-yellow back-button" style="display: none;">
                            &lt; Back
                        </button>
                        <button id="continue-button" class="btn btn-yellow continue-button margin-left-20">Continue</button>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const debugPre = document.getElementById('debug-info');
    const continueButton = document.getElementById('continue-button');
    const backButton = document.getElementById('back-button');
    const totalSteps = parseInt(document.getElementById('steps-count').value, 10);
    let currentStep = 1;

    // Function to log debug messages
    function debug(message) {
        debugPre.innerHTML += '\n' + message;
        debugPre.scrollTop = debugPre.scrollHeight;
    }

    // Event listener for card links
    document.querySelectorAll('.custom-card').forEach(card => {
        card.addEventListener('click', function (event) {
            event.preventDefault();
            debug('Card clicked');

            // Logic to highlight the selected card
            document.querySelectorAll('.custom-card').forEach(c => {
                c.classList.remove('selected');
            });
            this.classList.add('selected');

            // Check if the card has a radio button and select it
            const radio = this.querySelector('input[type="radio"]');
            if (radio) {
                radio.checked = true;
                debug(`Radio value selected: ${radio.value}`);

                // Enable the continue button
                continueButton.disabled = false;

                // Automatically move to the next step
                const currentItem = document.querySelector(`.current-item.step-${currentStep}`);
                const nextItem = document.querySelector(`.current-item.step-${currentStep + 1}`);

                if (currentItem) {
                    currentItem.style.display = 'none'; // Hide current step
                    currentItem.style.setProperty('display', 'none', 'important'); // Force hide
                    debug(`Hidden step ${currentStep}`);
                }

                if (nextItem) {
                    nextItem.style.display = 'block'; // Show next step
                    nextItem.style.setProperty('display', 'block', 'important'); // Force show
                    debug(`Showing step ${currentStep + 1}`);
                }

                // Check visibility after changes
                console.log(`Step 1 visibility: ${document.querySelector('.current-item.step-1').style.display}`);
                console.log(`Step 2 visibility: ${document.querySelector('.current-item.step-2').style.display}`);

                // Show back button if not on the first step
                if (currentStep > 1) {
                    backButton.style.display = 'inline-block';
                }

                // Show the form only when reaching the last step
                if (currentStep === totalSteps) {
                    continueButton.style.display = 'none';
                    document.querySelector('.form.margin-bottom-40').style.display = 'block'; // Show the form
                } else {
                    document.querySelector('.form.margin-bottom-40').style.display = 'none'; // Hide the form
                }
            }
        });
    });

    continueButton.addEventListener('click', function () {
        const currentItem = document.querySelector(`.current-item.step-${currentStep}`);
        const nextItem = document.querySelector(`.current-item.step-${currentStep + 1}`);

        if (currentItem) {
            currentItem.style.display = 'none'; // Hide current step
            currentItem.style.setProperty('display', 'none', 'important'); // Force hide
            debug(`Hidden step ${currentStep}`);
        }
        if (nextItem) {
            nextItem.style.display = 'block'; // Show next step
            nextItem.style.setProperty('display', 'block', 'important'); // Force show
            currentStep++;
            debug(`Showing step ${currentStep}`);
        }

        // Show back button if not on the first step
        if (currentStep > 1) {
            backButton.style.display = 'inline-block';
        }

        // Show the form only when reaching the last step
        if (currentStep === totalSteps) {
            continueButton.style.display = 'none';
            document.querySelector('.form.margin-bottom-40').style.display = 'block'; // Show the form
        } else {
            document.querySelector('.form.margin-bottom-40').style.display = 'none'; // Hide the form
        }
    });

    backButton.addEventListener('click', function () {
        const currentItem = document.querySelector(`.current-item.step-${currentStep}`);
        const prevItem = document.querySelector(`.current-item.step-${currentStep - 1}`);

        if (currentItem) {
            currentItem.style.display = 'none'; // Hide current step
            currentItem.style.setProperty('display', 'none', 'important'); // Force hide
            debug(`Hidden step ${currentStep}`);
        }
        if (prevItem) {
            prevItem.style.display = 'block'; // Show previous step
            prevItem.style.setProperty('display', 'block', 'important'); // Force show
            currentStep--;
            debug(`Displayed step ${currentStep}`);
        }

        // Hide back button on first step
        if (currentStep === 1) {
            backButton.style.display = 'none';
        }

        // Ensure the form is hidden if not on the last step
        if (currentStep < totalSteps) {
            continueButton.style.display = 'inline-block';
            document.querySelector('.form.margin-bottom-40').style.display = 'none'; // Hide the form
        }
    });
});
</script>
