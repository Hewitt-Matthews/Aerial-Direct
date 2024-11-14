$(document).ready(function($){
    $('body').on('click','.show-more',function(){
        var item_class = $(this).data('more');
        $('.more-'+item_class).hide(500);
        $('.show-'+item_class).show(500);
    });
    $('body').on('click','.show-less',function(){
        var less_class = $(this).data('less');
        $('.show-'+less_class).hide(500);
        $('.more-'+less_class).show(500);
    });
    $('.menu-depth-1 li').removeClass('nav-item');
    
    $('.request-a-quote-steps-2 .custom-card').click(function(){
        const the_step = $('.request-a-quote-steps-2 #current-step').text();
        const input_type = $('input[name="step-'+the_step+'"]').attr('type');
        console.log(input_type);
        if(input_type == 'checkbox'){
            $(this).toggleClass('active'); 
        }else{
            $('.request-a-quote-steps-2 .step-'+the_step+' .custom-card').removeClass('active');
            $(this).addClass('active');
        }
        
        if($(this).hasClass('active')){
            $('.continue-button').removeAttr('disabled');
            const input_name = $(this).data('target');
            $('input[value="'+input_name+'"]').prop('checked',true);
        }else{
            const input_name = $(this).data('target');
            $(this).find('.continue-button').attr('disabled');
            $(this).children('input[value="'+input_name+'"]').prop('checked',false);
        }
        var checked = $('.request-a-quote-steps-2 .step-'+the_step+' .custom-card.active').length;
        if(checked > 0){
            $('.continue-button').removeAttr('disabled');
        }else{
            $('.continue-button').attr('disabled','disabled');
        }
    })
    const current_step = $('.request-a-quote-steps-2 #current-step').text();
    const steps_count = parseInt($('.request-a-quote-steps-2 #steps-count').val()) + 1;
    const progress_bar = $(".request-a-quote-steps-2 .progress-bar");
    const continue_button = $('.request-a-quote-steps-2 .continue-button');
    const back_button = $('.request-a-quote-steps-2 .back-button'); // Add the back button selector
    const progress_bar_width = (100/steps_count);
    
    progress_bar.css('width',progress_bar_width+'%');
    $('.request-a-quote-steps-2 .step-1').addClass('active');
    $('.request-a-quote-steps-2 .step-1').show();
    $('.request-a-quote-steps-2 #current-step').text(1);

    $(continue_button).click(function(){
        const current_step = $('.request-a-quote-steps-2 #current-step').text();
        
        $('.step-'+current_step).hide();
        $('.step-'+current_step).removeClass('active');
        $('.step-'+current_step).addClass('done');
        continue_button.attr('disabled','disabled');
        const input_type = $('input[name="step-'+current_step+'"]').attr('type');
        if(input_type == 'checkbox'){
            $('.step-'+current_step+' input:checked').each(function(){
                const input_name = $(this).val();
                
                console.log(input_name);
                $('.request-a-quote-steps-2 .items-form input[name="'+input_name+'"]').val('✔');
            });
        }else{
            const input_name = $('input[name="step-'+current_step+'"]:checked');
            console.log(input_name);
            console.log(input_name.val());

            $('.request-a-quote-steps-2 .items-form input[name="'+input_name.val()+'"]').val('✔');
            
        }
        if(current_step < steps_count){
            const next_step = parseInt(current_step) + 1;
            $('.step-'+next_step).show();
            $('.step-'+next_step).addClass('active');
            $('.step-'+next_step).removeClass('done');
            $('.request-a-quote-steps-2 #current-step').text(next_step);
            const progress_bar_width = (100/steps_count) * next_step;
            progress_bar.css('width',progress_bar_width+'%');
            if(next_step <= 1){
                $(back_button).hide();
            }else{
                $(back_button).show();
            }
        }else{

            $('.request-a-quote-steps-2 #current-step').text(steps_count);
        }
        if((parseInt(current_step) + 1) == steps_count){
            console.log('last step');
            $('.form').show();
            $(window).scrollTop(100);
            $(continue_button).hide();
        }
    });
    $(back_button).click(function(){
        const current_step = $('.request-a-quote-steps-2 #current-step').text();

        $(continue_button).show();
        $(continue_button).removeAttr('disabled');
        $('.step-'+current_step).hide();
        $('.step-'+current_step).removeClass('active');
        $('.step-'+current_step).removeClass('done');
        if(current_step > 1){
            const prev_step = parseInt(current_step) - 1;
            $('.step-'+prev_step).show();
            $('.step-'+prev_step).addClass('active');
            $('.step-'+prev_step).removeClass('done');
            $('.request-a-quote-steps-2 #current-step').text(prev_step);
            const progress_bar_width = (100/steps_count) * prev_step;
            progress_bar.css('width',progress_bar_width+'%');
            if(prev_step <= 1){
                $(back_button).hide();
            }else if(current_step == steps_count){
                $(back_button).show();
            }else{
                $(back_button).show(); 
            }
            $('.form').hide();
            $(window).scrollTop(100);
        }

    });
    // add class when scrolltop > 0
        if($(window).scrollTop() > 0){
            $('.site-header').addClass('bg-white');
        }
});




