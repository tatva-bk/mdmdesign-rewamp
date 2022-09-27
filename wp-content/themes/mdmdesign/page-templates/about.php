<?php
/*
Template Name:About Page
*/
get_header();
?>
<div class="page-wrapper has-banner">
    <section class="about-section">
        <img class="about-bg"  src="<?php echo get_field('banner_desktop_image'); ?>" alt="about-banner" /> 
        <div class="container">
            <?php echo get_field('banner_content'); ?>
            <p><?php echo get_field('banner_sub_content'); ?></p>
        </div>
    </section><?php

    if(get_field('about_right_image') || get_field('about_left_image')) { ?>
        <section class="about-grid-section">
            <div class="container">
                <ul class="about-grid-wrapper"> 
                    <li>
                        <div class="about-grid-inner">
                            <img src="<?php echo get_field('about_left_image'); ?>" alt="about-left-image" /> 
                        </div>
                    </li>
                    <li>
                        <div class="about-grid-inner">
                            <img src="<?php echo get_field('about_right_image'); ?>" alt="about-right-image" /> 
                        </div>
                    </li>
                </ul> 
            </div> 
        </section><?php
    } ?><?php

    if(get_field('services_heading')|| get_field('services_content')) { ?>
    <section class="about-service-block">
        <div class="container">
            <h2><?php echo get_field('services_heading'); ?></h2>
            <p><?php echo get_field('services_content'); ?></p>
        </div>
    </section><?php
    } ?><?php

    if(have_rows('directors_details')) { ?>
        <section class="about-directors">
            <div class="container">
                <h2><?php echo get_field('directors_section_heading'); ?></h2>
                <div class="directors-grid-wrapper"><?php
                    while(have_rows('directors_details')) { 
                        the_row(); ?>
                        <div class="grid-item">
                            <div class="member-img-wrap"><img class="member-img" src="<?php echo get_sub_field('director_image'); ?>" alt="<?php echo get_sub_field('director_name'); ?> Image" /></div>
                            <h3><?php echo get_sub_field('director_name'); ?><span><?php echo get_sub_field('director_designation'); ?></span></h3>
                            <p><?php echo get_sub_field('director_details'); ?></p>
                            <a target="_blank" href="<?php echo get_sub_field('director_connect_link'); ?>" title="<?php echo get_sub_field('director_connect_label'); ?>">
                                <em><img src="<?php echo get_template_directory_uri(); ?>/public/images/linkedin.svg" alt="linkedin"></em>
                                <span><?php echo get_sub_field('director_connect_label'); ?></span>
                            </a>
                           </div>
                        <?php
                    } ?>
                </div>
            </div>
        </section><?php
    } ?>
</div> 
<?php
get_footer();
?>

