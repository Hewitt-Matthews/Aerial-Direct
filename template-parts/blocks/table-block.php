<?php 
$table = get_field( 'table' );
?>
<style>
    /* Table Head */
    /* Background */
    .th-bg-dark {background-color: #171A32;}
    .th-bg-yellow {background-color: #D1DA47;}
    .th-bg-light-grey {background-color: #F3F4F6;}
    .th-bg-light-green {background-color: #96E462;}
    .th-bg-dark-green {background-color: #448859;}
    .th-bg-white {background-color: #fff;}
    .th-bg-transparent {background-color: transparent;}
    /* Colour */
    .th-dark {color: #171A32;}
    .th-yellow {color: #D1DA47;}
    .th-light-grey {color: #F3F4F6;}
    .th-light-green {color: #96E462;}
    .th-dark-green {color: #448859;}
    .th-white {color: #fff;}
    .th-transparent {color: transparent;}
    /* Table Body */
    /* Background */
    .tb-bg-dark {background-color: #171A32;}
    .tb-bg-yellow {background-color: #D1DA47;}
    .tb-bg-light-grey {background-color: #F3F4F6;}
    .tb-bg-light-green {background-color: #96E462;}
    .tb-bg-dark-green {background-color: #448859;}
    .tb-bg-white {background-color: #fff;}
    .tb-bg-transparent {background-color: transparent;}
    /* Colour */
    .tb-dark {color: #171A32;}
    .tb-yellow {color: #D1DA47;}
    .tb-light-grey {color: #F3F4F6;}
    .tb-light-green {color: #96E462;}
    .tb-dark-green {color: #448859;}
    .tb-white {color: #fff;}
    .tb-transparent {color: transparent;}

    thead {height:65px!important;}
    /* tbody tr {height:45px!important;font-size: 24px!important;} */

    .text-left {text-align: left !important;}
    .text-right {text-align: right !important;}
    .text-center {text-align: center !important;}

    .table-block-th {padding: 10px;}
    .table-block-td {padding: 10px;}

    @media screen and (max-width: 991px) {
        table {width:100%!important;}
        thead {font-size: 24px!important;}
        tbody tr {font-size: 18px!important;}
    }
    @media screen and (max-width: 499px) {
        thead {font-size: 20px!important;}
        tbody tr {font-size: 15px!important;}
    }
</style>
<section class='table-section' style='
                            padding-top: <?php the_field('pt'); ?>px!important; 
                            padding-bottom: <?php the_field('pb'); ?>px!important;
                            padding-right: <?php the_field('pr'); ?>px!important;
                            padding-left: <?php the_field('pl'); ?>px!important;
                            '>
    <div class='container'>
        <div class='row'>
            <div class='col-12'>
                <?php 
                if ( ! empty ( $table ) ) { ?>

                    <table style="width:85%;margin:auto;">

                      <?php  if ( ! empty( $table['caption'] ) ) {

                            echo '<caption>' . $table['caption'] . '</caption>';
                        }

                        if ( ! empty( $table['header'] ) ) { ?>

                            <thead class="<?php the_field('table_head_bg_color'); ?> <?php the_field('table_head_color'); ?> <?php the_field('th_align'); ?>"> 

                                <tr style='font-size: <?php the_field('table_head_ft'); ?>px!important;'>
                                <?php
                                    foreach ( $table['header'] as $th ) { ?>

                                        <th class='table-block-th' style='font-weight: <?php the_field('table_head_fw'); ?>!important; font-style: <?php the_field('table_head_fs'); ?>!important;'>
                                            <?php 
                                            echo $th['c'];
                                        echo '</th>';
                                    }

                                echo '</tr>';

                            echo '</thead>';
                        } ?>

                        <tbody class='<?php the_field('table_body_bg_color'); ?> <?php the_field('table_body_color'); ?> <?php the_field('tb_align'); ?>'>

                         <?php   foreach ( $table['body'] as $tr ) { ?>

                                <tr style='font-size: <?php the_field('table_body_ft'); ?>px!important; font-weight: <?php the_field('table_body_fw'); ?>!important; font-style: <?php the_field('table_body_fs'); ?>!important;'>
                                <?php
                                    foreach ( $tr as $td ) {

                                        echo '<td class="table-block-td" style="width:33.33%; vertical-align:top;">';
                                            echo $td['c'];
                                        echo '</td>';
                                    }

                                echo '</tr>';
                            }

                        echo '</tbody>';

                    echo '</table>';
                }
                ?>
            </div>
        </div>
    </div>
</section>