<?php

/**
 * Template Name: Contact Page Temp
 */
get_header();
?>



<div id="smooth-wrapper">
    <div id="smooth-content">

        <section class="section">
            <div class="innerBanner">
                <video autoplay muted loop>
                    <source src="<?php echo get_field('spotlight_video')['url'] ?>">
                </video>
                <div class="ibTxt">
                    <div class="container">

                        <?php if (get_field('spotlight_title')): ?>
                            <h1><?php the_field('spotlight_title') ?></h1>
                        <?php endif; ?>

                        <ul class="bredcrumbList">
                            <li><a href="">Home</a></li>
                            <li><?php echo get_field('spotlight_title') ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">

            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="title">

                            <?php if (get_field('get_in_touch_title')): ?>
                                <h2><?php the_field('get_in_touch_title') ?></h2>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="b-l-radius contactForm">
                            <div class="row addRow">
                                <div class="col-12">
                                    <h6>Head Office:</h6>
                                    <div class="row justify-content-between">
                                        <div class="col-12 col-sm">
                                            <p>
                                                <?php
                                                if (get_field('co_head_office')) {
                                                    echo the_field('co_head_office');
                                                }
                                                ?>
                                            </p>
                                        </div>
                                        <div class="col-12 col-sm-auto">
                                            <a href="<?php echo get_field('view_map_url') ?>" class="viewMap">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/map.svg" alt="">
                                                <?php echo get_field('view_map_title') ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <h6 class="mb-0">Phone:</h6>
                                    <p><a href="tel:<?php echo get_field('co_phone') ?>"><?php echo get_field('co_phone') ?></a></p>
                                </div>
                                <div class="col-sm-4">
                                    <h6 class="mb-0">Email:</h6>
                                    <p><a href="mailto:<?php echo get_field('co_email') ?>"><?php echo get_field('co_email') ?></a></p>
                                </div>
                                <div class="col-10">
                                    <h6 class="mb-0">Office Hours:</h6>
                                    <!-- <p>Monday to Saturday - 09:00 AM to 06:00 PM IST <br> Sunday - On-Call Availability</p> -->

                                    <p>
                                        <?php echo get_field('co_office_hours') ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="b-r-radius contactForm">

                            <?php if (get_field('form_title')): ?>
                                <h6><?php the_field('form_title') ?></h6>
                            <?php endif; ?>

                            <?php echo do_shortcode('[contact-form-7 id="5d4943c" title="Contact Us Form" html_class="row contact-us-pg-form " ]'); ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <?php
        get_footer();
        ?>
