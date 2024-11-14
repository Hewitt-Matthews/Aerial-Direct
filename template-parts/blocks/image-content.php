<style>
.image-wrapper {
  width: 100%;
  max-width: 355px;
}
.image-wrapper.img-wrp-1 {
  width: 100%;
  max-width: 300px;
}
.image-wrapper.no-hover {
  width: unset;
  max-width: unset;
}

.image-hover-1 {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0!important;
}
.image-hover {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0!important;
}
.image-hover-1:hover {
  opacity: 1!important;
}
.image-hover:hover {
  opacity: 1!important;
}

.image-hover:hover .below-img {
  opacity: 0!important;
}


@media screen and (max-width: 991.99px) {
  .image-hover {
    width: unset;
  }
  .image-wrapper {
  width: unset;
  max-width: unset;
}
.image-wrapper.img-wrp-1 {
  width: unset;
  max-width: unset;
}
}


</style>
<?php
$button = get_field("content_button");
if(get_field('glowing_border') === "yes") {
    $glowing = "glowing-border";
}else{
    $glowing = "";
}
$img_alt = get_field('content_image_alt');
$img_alt_hover = get_field('content_image_alt_hover');
?>
<section class="image-content container alignment-right-left <?php the_field('image_shape'); ?> <?php the_field('custom_class'); ?>" style='
                            padding-top: <?php the_field('pt'); ?>px!important; 
                            padding-bottom: <?php the_field('pb'); ?>px!important;
                            padding-right: <?php the_field('pr'); ?>px!important;
                            padding-left: <?php the_field('pl'); ?>px!important;
                            '>
    <div class="row">
        <?php if(get_field('content_alignment') === "left"): ?>
        <div class="col-md-12 col-lg-6 vertical-middle text-center padding-xs-30 padding-md-right-90 order-0 order-md-0 order-lg-0"><img loading="lazy" class="image-fluid rounded img-mobile-200 lozad <?php echo $glowing; ?> image-left-right" data-src="<?php the_field('content_image'); ?>" src="<?php the_field('content_image'); ?>" alt='<?php echo $img_alt['alt'] ?>'/></div>
        <div class="col-md-12 col-lg-6 vertical-middle order-1 order-md-1 order-lg-1">
            <div class="image-content-body">
            <h1 class="weight-normal <?php the_field('title_color'); ?>" style='font-size: <?php the_field('content_title_ft'); ?>px!important;'>
                <?php the_field('content_title'); ?>
        </h1>
            <h3 class="weight-normal <?php the_field('subtitle_color'); ?>" style='font-size: <?php the_field('content_subtitle_ft'); ?>px!important;'><?php the_field('content_subtitle', false, false); ?></h3>
            <div style='font-size: <?php the_field('content_description_ft'); ?>px!important;'>
                <p><?php the_field('content_description', false, false); ?></p>
            </div>
            </div>
            <div class="text-center text-md-left">
                <?php if($button): ?>
                    <a target="<?php echo $button['target']; ?>" href="<?php echo $button['url']; ?>"><button class="btn btn-yellow margin-top-15"><?php echo $button['title']; ?></button></a>
                <?php endif; ?>
            </div>
        </div>
        <?php else: ?>
        <div class="col-md-12 col-lg-6 vertical-middle order-1 order-md-1 order-lg-0">
        <div class="image-content-body">
            <h1 class="weight-normal <?php the_field('title_color'); ?>" style='font-size: <?php the_field('content_title_ft'); ?>px!important;'>
                <?php the_field('content_title'); ?>
        </h1>
        <?php if(get_field('content_subtitle')): ?>
            <h3 class="weight-normal margin-bottom-25 <?php the_field('subtitle_color'); ?>" style='font-size: <?php the_field('content_subtitle_ft'); ?>px!important;'><?php the_field('content_subtitle', false, false); ?></h3>
            <?php endif; ?>
            <?php if(get_field('content_description')): ?>
                <div style='font-size: <?php the_field('content_description_ft'); ?>px!important;'>
                    <p><?php the_field('content_description', false, false); ?></p>
                </div>
            <?php endif; ?>

        </div>
            <div class="text-center text-md-left">
                <?php if($button): ?>
                    <a target="<?php echo $button['target']; ?>" href="<?php echo $button['url']; ?>"><button class="btn btn-yellow margin-top-15"><?php echo $button['title']; ?></button></a>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-md-12 col-lg-6 col-md-12 vertical-middle text-center padding-xs-30 padding-md-left-90 order-0 order-md-0 order-lg-1 d-flex justify-content-center">
            <?php if (get_field('content_image_hover')) :
            list($width) = getimagesize(get_field('content_image_hover'));  
            if ($width < 355) { ?>
            <div class='image-wrapper img-wrp-1'>
                <img loading="lazy" id='below-img' class="below-img image-fluid rounded img-mobile-200 lozad <?php echo $glowing; ?> image-left-right" data-src="<?php the_field('content_image'); ?>" src="<?php the_field('content_image'); ?>" alt='<?php echo $img_alt['alt'] ?>'>
                <?php if(get_field('content_image_hover')): ?>
                    <img loading="lazy" id='image-hover-1' class="image-hover-1 image-fluid rounded img-mobile-200 lozad <?php echo $glowing; ?> image-left-right" data-src="<?php the_field('content_image_hover'); ?>" src="<?php the_field('content_image_hover'); ?>" alt='<?php echo $img_alt_hover['alt'] ?>'> 
                <?php endif; ?>
            </div>
            <?php } else {?>
            <div class='image-wrapper'>
                <img loading="lazy" id='below-img' class="below-img image-fluid rounded img-mobile-200 lozad <?php echo $glowing; ?> image-left-right" data-src="<?php the_field('content_image'); ?>" src="<?php the_field('content_image'); ?>" alt='<?php echo $img_alt['alt'] ?>'>
                <?php if(get_field('content_image_hover')): ?>
                    <img loading="lazy" id='image-hover' class="image-hover image-fluid rounded img-mobile-200 lozad <?php echo $glowing; ?> image-left-right" data-src="<?php the_field('content_image_hover'); ?>" src="<?php the_field('content_image_hover'); ?>" alt='<?php echo $img_alt_hover['alt'] ?>'>
                <?php endif; ?>
            </div>
              <?php }  endif; ?>
              <?php if (!get_field('content_image_hover')) : ?>
              <div class='image-wrapper no-hover'>
                <img loading="lazy" id='below-img' class="image-fluid rounded img-mobile-200 lozad <?php echo $glowing; ?> image-left-right" data-src="<?php the_field('content_image'); ?>" src="<?php the_field('content_image'); ?>" alt='<?php echo $img_alt['alt'] ?>'>
            </div>
            <?php endif; ?>
          </div>

        <?php endif; ?>
    </div>
</section>


