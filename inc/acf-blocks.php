<?php

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types()
{
    // Check function exists.
    if (function_exists('acf_register_block_type')) {
        // register image content.
        acf_register_block_type(array(
            'name'              => 'image-content',
            'title'             => __('AD Image Content'),
            'description'       => __('A custom AD Image Content.'),
            'render_template'   => 'template-parts/blocks/image-content.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Image', 'Content' ),
        ));

        // register image content.
        acf_register_block_type(array(
            'name'              => 'image-content-wysiwyg',
            'title'             => __('AD Image Content wysiwyg'),
            'description'       => __('A custom AD Image Content.'),
            'render_template'   => 'template-parts/blocks/image-content-wysiwyg.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Image', 'Content' ),
        ));

        // register image content green.
        acf_register_block_type(array(
            'name'              => 'image-content-green',
            'title'             => __('AD Image Content green'),
            'description'       => __('A custom AD Image Content green.'),
            'render_template'   => 'template-parts/blocks/image-content-green.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Image', 'Content' ),
        ));

        // register Features content.
        acf_register_block_type(array(
            'name'              => 'features-content',
            'title'             => __('AD Features 4 in row'),
            'description'       => __('A custom AD Features Content.'),
            'render_template'   => 'template-parts/blocks/features-4.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Features', 'Content' ),
        ));
        // register Features content.
        acf_register_block_type(array(
            'name'              => 'features-no-buttons',
            'title'             => __('AD Features no buttons in row'),
            'description'       => __('A custom AD Features no buttons Content.'),
            'render_template'   => 'template-parts/blocks/features-no-button.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Features', 'Content' ),
        ));
        // register Features with accordion content.
        acf_register_block_type(array(
            'name'              => 'features-4-with-accordion',
            'title'             => __('AD Features 4 with accordion in row'),
            'description'       => __('A custom AD Features with accordion Content.'),
            'render_template'   => 'template-parts/blocks/features-4-with-accordion.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Features', 'Content' ),
        ));

        // register Features content.
        acf_register_block_type(array(
            'name'              => 'features-1',
            'title'             => __('AD Features 1 in row'),
            'description'       => __('A custom AD Features Content.'),
            'render_template'   => 'template-parts/blocks/features.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Features', 'Content' ),
        ));
        // register Features with BG content.
        acf_register_block_type(array(
            'name'              => 'features-bg',
            'title'             => __('AD Features with BG'),
            'description'       => __('A custom AD Features Content.'),
            'render_template'   => 'template-parts/blocks/features-5-with-bg.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Features', 'Content' ),
        ));

        // register Features content.
        acf_register_block_type(array(
            'name'              => 'features-2',
            'title'             => __('AD Features 2 in row'),
            'description'       => __('A custom AD Features Content.'),
            'render_template'   => 'template-parts/blocks/features-2.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Features', 'Content' ),
));

        // register Features content.
        acf_register_block_type(array(
            'name'              => 'features-3',
            'title'             => __('AD Features 3 in row'),
            'description'       => __('A custom AD Features Content.'),
            'render_template'   => 'template-parts/blocks/features-3.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Features', 'Content' ),
));

        // register Features content.
        acf_register_block_type(array(
            'name'              => 'why-content',
            'title'             => __('AD Why Aerial'),
            'description'       => __('A custom AD Why Aerial Content.'),
            'render_template'   => 'template-parts/blocks/why-aerial.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Why Aerial', 'Content' ),
        ));

        // register Spacer content.
        acf_register_block_type(array(
            'name'              => 'spacer',
            'title'             => __('AD spacer'),
            'description'       => __('A custom AD spacer Content.'),
            'render_template'   => 'template-parts/blocks/spacer.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'spacer', 'Content' ),
        ));

        // register Blogs content.
        acf_register_block_type(array(
            'name'              => 'blogs-block',
            'title'             => __('AD Blogs Content'),
            'description'       => __('A custom AD Blogs Content.'),
            'render_template'   => 'template-parts/blocks/blogs.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Blogs', 'Content' ),
        ));

        // register Case studies content.
        acf_register_block_type(array(
            'name'              => 'case-studies-block',
            'title'             => __('AD Case studies Content'),
            'description'       => __('A custom AD case Studies Content.'),
            'render_template'   => 'template-parts/blocks/case-studies.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Case', 'Study' ),
        ));

        // register Green content.
        acf_register_block_type(array(
            'name'              => 'green-content',
            'title'             => __('AD Green Content'),
            'description'       => __('A custom AD Green Content.'),
            'render_template'   => 'template-parts/blocks/content-green.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Green', 'Content' ),
        ));
        // register Green content.
        acf_register_block_type(array(
            'name'              => 'content-transparent',
            'title'             => __('AD Central Header'),
            'description'       => __('A custom AD Content.'),
            'render_template'   => 'template-parts/blocks/content-transparent.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Trasparent', 'Content' ),
        ));
        // register Green content.
        acf_register_block_type(array(
            'name'              => 'green-dark',
            'title'             => __('AD Dark Content'),
            'description'       => __('A custom AD Dark Content.'),
            'render_template'   => 'template-parts/blocks/content-dark.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Dark', 'Content' ),
        ));

        // register Green content.
        acf_register_block_type(array(
            'name'              => 'green-content-2',
            'title'             => __('AD Green with 2 images'),
            'description'       => __('A custom AD Green Content.'),
            'render_template'   => 'template-parts/blocks/2-image-green.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Green', 'Content' ),
        ));

        // register Accordion content.
        acf_register_block_type(array(
            'name'              => 'accordion',
            'title'             => __('AD accordion'),
            'description'       => __('A custom AD accordion Content.'),
            'render_template'   => 'template-parts/blocks/accordion.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'accordion', 'Content' ),
        ));

        // register Social urls content.
        acf_register_block_type(array(
            'name'              => 'social',
            'title'             => __('AD social'),
            'description'       => __('A custom AD social Content.'),
            'render_template'   => 'template-parts/blocks/social-block.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'social', 'Content' ),
        ));

        // register Features with heading.
        acf_register_block_type(array(
            'name'              => 'features-heading',
            'title'             => __('AD Features with heading'),
            'description'       => __('A custom AD Features Content.'),
            'render_template'   => 'template-parts/blocks/features-with-heading.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Features', 'Content' ),
        ));

        // register Contact section.
        acf_register_block_type(array(
            'name'              => 'contact-section',
            'title'             => __('AD Contact Section'),
            'description'       => __('A custom AD Contact Section.'),
            'render_template'   => 'template-parts/blocks/contact-form.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Contact', 'Content' ),
        ));
        // register Contact section.
        acf_register_block_type(array(
            'name'              => 'contact-section-2',
            'title'             => __('AD Contact Section 2'),
            'description'       => __('A custom AD Contact Section 2.'),
            'render_template'   => 'template-parts/blocks/contact-form-2.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Contact', 'Content' ),
        ));
        // register Testimonials section.
        acf_register_block_type(array(
            'name'              => 'testimonials',
            'title'             => __('AD Testimonials'),
            'description'       => __('A custom AD Testimonials Section.'),
            'render_template'   => 'template-parts/blocks/testimonials.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Testimonials', 'Content' ),
        ));
        // register Jobs section.
        acf_register_block_type(array(
            'name'              => 'jobs',
            'title'             => __('AD Jobs'),
            'description'       => __('A custom AD Jobs Section.'),
            'render_template'   => 'template-parts/blocks/jobs.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Jobs', 'Content' ),
        ));
        // register Pricing section.
        acf_register_block_type(array(
            'name'              => 'pricing',
            'title'             => __('AD Pricing'),
            'description'       => __('A custom AD Pricing Section.'),
            'render_template'   => 'template-parts/blocks/pricing.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Pricing', 'Content' ),
        ));
        // register header content image section.
        acf_register_block_type(array(
            'name'              => 'header-content-desktop',
            'title'             => __('AD homepage header desktop'),
            'description'       => __('A custom AD homepage header desktop Section.'),
            'render_template'   => 'template-parts/blocks/homepage-header-desktop.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Header', 'Content' ),
        ));
        // register header content image section.
        acf_register_block_type(array(
            'name'              => 'header-content-desktop v2',
            'title'             => __('AD homepage header desktop v2'),
            'description'       => __('A custom AD homepage header desktop Section v2.'),
            'render_template'   => 'template-parts/blocks/homepage-header-desktop-v2.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Header', 'Content' ),
        ));

        // register header content image section.
        acf_register_block_type(array(
            'name'              => 'header-content-image',
            'title'             => __('AD header content image'),
            'description'       => __('A custom AD header content image Section.'),
            'render_template'   => 'template-parts/blocks/header-content-image.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Header', 'Content' ),
        ));
        // register homepage header mobile section.
        acf_register_block_type(array(
            'name'              => 'homepage-header-mobile',
            'title'             => __('AD homepage header mobile'),
            'description'       => __('A custom AD homepage header mobile Section.'),
            'render_template'   => 'template-parts/blocks/homepage-header-mobile.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Header', 'Content' ),
        ));
        // register header content center section.
        acf_register_block_type(array(
            'name'              => 'header-content-center',
            'title'             => __('AD header content center'),
            'description'       => __('A custom AD header content center Section.'),
            'render_template'   => 'template-parts/blocks/header-content-center.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Header', 'Content' ),
        ));
        // register header login portal section.
        acf_register_block_type(array(
            'name'              => 'header-login-portal',
            'title'             => __('AD header login portal'),
            'description'       => __('A custom AD header login portal Section.'),
            'render_template'   => 'template-parts/blocks/header-login-portal.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Header', 'Content' ),
        ));
        // register header contact us section.
        acf_register_block_type(array(
            'name'              => 'header-contact-us',
            'title'             => __('AD header contact us'),
            'description'       => __('A custom AD header contact us Section.'),
            'render_template'   => 'template-parts/blocks/header-contact-us.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Header', 'Content' ),
        ));
        // register FAQ section.
        acf_register_block_type(array(
            'name'              => 'faq',
            'title'             => __('AD FAQ'),
            'description'       => __('A custom AD FAQ Section.'),
            'render_template'   => 'template-parts/blocks/faq.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'faq', 'Content' ),
        ));
        // register FAQ With icons section.
        acf_register_block_type(array(
            'name'              => 'faq-icons',
            'title'             => __('AD FAQ with icons'),
            'description'       => __('A custom AD FAQ Section.'),
            'render_template'   => 'template-parts/blocks/faq-with-icons.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'faq', 'Content' ),
        ));
        // register button section.
        acf_register_block_type(array(
            'name'              => 'button',
            'title'             => __('AD button'),
            'description'       => __('A button.'),
            'render_template'   => 'template-parts/blocks/button.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'button', 'btn' ),
        ));
        // register button yellow section.
        acf_register_block_type(array(
            'name'              => 'button yellow',
            'title'             => __('AD yellow button'),
            'description'       => __('A yellow button.'),
            'render_template'   => 'template-parts/blocks/button-yellow.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'button', 'yellow' ),
        ));
        // register header contact section.
        acf_register_block_type(array(
            'name'              => 'header-contact-us-single',
            'title'             => __('AD header contact us single'),
            'description'       => __('A header contact us single.'),
            'render_template'   => 'template-parts/blocks/header-contact-us-single.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'contact', 'header' ),
        ));
        // register banner top section.
        acf_register_block_type(array(
            'name'              => 'banner-top',
            'title'             => __('AD banner top'),
            'description'       => __('A banner-top.'),
            'render_template'   => 'template-parts/blocks/banner-top.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'banner', 'banners' ),
        ));
        // register banner top custom content section.
        acf_register_block_type(array(
            'name'              => 'banner-top-with-button',
            'title'             => __('AD banner top with button'),
            'description'       => __('A banner-top with button.'),
            'render_template'   => 'template-parts/blocks/banner-top-with-button.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'banner', 'banners' ),
        ));
        // register swiper trustpilot section.
        acf_register_block_type(array(
            'name'              => 'trustpilot',
            'title'             => __('AD custom trustpilot'),
            'description'       => __('A custom-trustpilot.'),
            'render_template'   => 'template-parts/blocks/trustpilot.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'trustpilot', 'banners' ),
        ));
        // register swiper trustpilot section.
        acf_register_block_type(array(
            'name'              => 'request-a-quote-steps',
            'title'             => __('AD custom request a quote steps'),
            'description'       => __('A custom request a quote steps.'),
            'render_template'   => 'template-parts/blocks/request-a-quote-steps.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'quote', 'request' ),
        ));
        // register dynamic request
        acf_register_block_type(array(
            'name'              => 'request-a-quote-steps-2',
            'title'             => __('AD custom request a quote steps 2'),
            'description'       => __('A custom request a quote steps 2.'),
            'render_template'   => 'template-parts/blocks/request-a-quote-steps-2.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
        ));
       // register custom textbox
         acf_register_block_type(array(
            'name'              => 'custom-textbox',
            'title'             => __('AD custom textbox with padding'),
            'description'       => __('A custom textbox with custom padding.'),
            'render_template'   => 'template-parts/blocks/custom-textbox.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'custom', 'textbox' ),
        ));
        // register custom new button block with colours
        acf_register_block_type(array(
            'name'              => 'button-colours',
            'title'             => __('AD Button Blocks with colours'),
            'description'       => __('button with multiple colours.'),
            'render_template'   => 'template-parts/blocks/button-colours.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'button', 'colours' ),
        ));
         // register custom new table block
         acf_register_block_type(array(
            'name'              => 'table-block',
            'title'             => __('AD Table Block'),
            'description'       => __('A table block.'),
            'render_template'   => 'template-parts/blocks/table-block.php',
            'category'          => 'formatting',
            'mode'              => 'edit',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'table', 'block' ),
        ));
    }
}
