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
                    <!-- <source src="./images/innerBanner/contact-us.mp4"> -->
                    <source src="<?php echo get_field('spotlight_video')['url'] ?>">
                </video>
                <div class="ibTxt">
                    <div class="container">
                        <!-- <h1>Contact Us</h1> -->

                        <?php if (get_field('spotlight_title')): ?>
                            <h1><?php the_field('spotlight_title') ?></h1>
                        <?php endif; ?>
                        <ul class="bredcrumbList">
                            <li><a href="index.html">Home</a></li>
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
                            <!-- <h2>Feel free to get in touch with the Kairamya Air</h2> -->

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
                                                <!-- <span>Kairamya Aviation Pvt. Ltd.</span> <br> 6th Floor, New Astral
                                                House, Opp.
                                                SatyamCorporate, Bodakdev, Ahmedabad 380059 -->
                                                <?php
                                                if (get_field('co_head_office')) {
                                                    echo the_field('co_head_office');
                                                }
                                                ?>


                                            </p>
                                        </div>
                                        <div class="col-12 col-sm-auto">
                                            <a href="" class="viewMap">
                                                <img src="./images/map.svg" alt="">
                                                View Map
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <h6 class="mb-0">Phone:</h6>
                                    <!-- <p><a href="tel:+91-7777991488">+91-7777991488</a></p> -->
                                    <p><a href="tel:<?php echo get_field('co_phone') ?>"><?php echo get_field('co_phone') ?></a></p>
                                </div>
                                <div class="col-sm-4">
                                    <h6 class="mb-0">Email:</h6>
                                    <p><a href="mailto:<?php echo get_field('co_email') ?>"><?php echo get_field('co_email') ?></a></p>
                                </div>
                                <div class="col-10">
                                    <h6 class="mb-0">Office Hours:</h6>
                                    <!-- <p>Monday to Saturday - 09:00 AM to 06:00 PM IST <br> Sunday - On-Call
                                        Availability
                                    </p> -->
                                    <p>
                                        <?php echo get_field('co_office_hours') ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="b-r-radius contactForm">
                            <h6>We are here to assist you</h6>

                            <?php if (get_field('form_title')): ?>
                                <h6><?php the_field('form_title') ?></h6>
                            <?php endif; ?>
                            <form action="" class="row">
                                <div class="col-12">
                                    <input type="text" placeholder="Your Name" class="form-control">
                                </div>
                                <div class="col-12">
                                    <input type="text" placeholder="Your Email" class="form-control">
                                </div>
                                <div class="col-12">
                                    <select name="" id="" class="form-select form-control ">
                                        <option value="Service 1">Select Services</option>
                                        <option value="Service 1">Service 1</option>
                                        <option value="Service 1">Service 2</option>
                                        <option value="Service 1">Service 3</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <input type="textarea" placeholder="Message" class="form-control">
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary">Submit</buttonc>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>




        <?php
        get_footer();
        ?>