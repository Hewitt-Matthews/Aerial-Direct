<style>
    .btn1 {
        border-radius: 50px !important;
        border: 2px solid;
        cursor: pointer;
        line-height: inherit;
        white-space: nowrap;
    }
    .text-left {text-align: left !important;}
    .text-right {text-align: right !important;}
    .text-center {text-align: center !important;}

    .btn1-color-dark {color: black;}
    .btn1-color-light {color: white;}

    .btn1-dark {background-color: #171A32;}
    .btn1-yellow {background-color: #D1DA47;}
    .btn1-light-grey {background-color: #F3F4F6;}
    .btn1-light-green {background-color: #96E462;}
    .btn1-dark-green {background-color: #448859;}

    .btn1-border-dark {border-color: #171A32;}
    .btn1-border-yellow {border-color: #D1DA47;}
    .btn1-border-light-grey {border-color: #F3F4F6;}
    .btn1-border-light-green {border-color: #96E462;}
    .btn1-border-dark-green {border-color: #448859;}

    .btn-size-medium {height: 75px;}
    .btn-size-large {height: 100px;}

    .btn1:hover {background-color: #171A32!important; border-color: white!important; color: white!important}
</style>


<?php
$button = get_field('button');
?>
<section class="bg-main-dark-blue <?php the_field('custom_class'); ?>"   
                            style='
                            padding-top: <?php the_field('pt'); ?>px!important; 
                            padding-bottom: <?php the_field('pb'); ?>px!important;
                            padding-right: <?php the_field('pr'); ?>px!important;
                            padding-left: <?php the_field('pl'); ?>px!important;
                            '>
    <div class="container">
        <div class="row">
            <div class="col-12 vertical-middle <?php the_field('button_position'); ?>">
                <div class="">
                    <?php if ($button): ?>
                        <a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>">
                            <button class="btn1 <?php the_field('button_color'); ?> <?php the_field('border_colour'); ?> <?php the_field('size'); ?> <?php the_field('text_colour') ?>" 
                            style='
                            padding-top: <?php the_field('padding_top'); ?>px!important; 
                            padding-bottom: <?php the_field('padding_bottom'); ?>px!important;
                            padding-right: <?php the_field('padding_right'); ?>px!important;
                            padding-left: <?php the_field('padding_left'); ?>px!important;
                            margin-bottom: <?php the_field('margin_out_bottom'); ?>px!important;
                            margin-top: <?php the_field('margin_out_top'); ?>px!important;
                            '>
                            <?php echo $button['title']; ?></button>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>