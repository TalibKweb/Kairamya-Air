<?php

/**
 * Template Name: Services Page Temp
 */
get_header();
?>


<div id="smooth-wrapper">
    <div id="smooth-content">

        <section class="section">
            <div class="innerBanner">

                <img src="<?php echo get_field('spotlight_img')['url'] ?>" alt="">

                <div class="ibTxt">
                    <div class="container">

                        <h1><?php echo the_title() ?></h1>

                        <ul class="bredcrumbList">
                            <li><a href="/">Home</a></li>
                            <li><?php echo the_title() ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Dynamic -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="title">

                            <?php if (get_field('our_flight_title')): ?>
                                <span><?php the_field('our_flight_title') ?></span>
                            <?php endif; ?>

                            <?php if (get_field('our_flight_sub_title')): ?>
                                <h2><?php the_field('our_flight_sub_title') ?></h2>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>

                <div class="flightTabWrp">
                    <div class="row">
                        <div class="col-lg-3 order-lg-last">

                            <ul class="row tabList">

                                <?php
                                $services_posts_arr = [
                                    'post_type' => 'services',
                                    'posts_per_page' => -1,
                                    'order_by' => 'date',
                                    'order' =>  'ASC'
                                ];

                                $services_fetch_query = new WP_Query($services_posts_arr);

                                if ($services_fetch_query->have_posts()):
                                    while ($services_fetch_query->have_posts()): $services_fetch_query->the_post();
                                ?>
                                        <li class="col-auto col-lg-12"><?php the_title() ?></li>

                                    <?php
                                    endwhile;
                                    wp_reset_postdata(); // very important to reset!
                                else:
                                    ?>
                                    <p>No Data Found!</p>

                                <?php
                                endif;
                                ?>

                            </ul>

                        </div>

                        <div class="col-lg-9">
                            <div class="tabContentWrp">

                                <?php
                                $services_posts_arr = [
                                    'post_type' => 'services',
                                    'posts_per_page' => -1,
                                    'order_by' => 'date',
                                    'order' =>  'ASC'
                                ];

                                $services_fetch_query = new WP_Query($services_posts_arr);

                                if ($services_fetch_query->have_posts()):
                                    while ($services_fetch_query->have_posts()): $services_fetch_query->the_post();
                                ?>
                                        <div class="tabContent">
                                            <div class="row">
                                                <div class="col-lg-6 mb-4 mb-lg-0">
                                                    <div class="position-relative">
                                                        <div class="imgWhitePatch">
                                                            <img src="./images/imgWhitePatch.svg" alt="">
                                                        </div>
                                                        <img src="<?php the_post_thumbnail_url() ?>" class="w-100 ftImg" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <h4><?php the_title() ?></h4>
                                                    <p><?php the_excerpt() ?></p>

                                                    <a href="/contact-us/" class="btn btn-primary px-4">Make An Enquiry</a>
                                                </div>
                                            </div>
                                        </div>

                                    <?php
                                    endwhile;
                                    wp_reset_postdata(); // very important to reset!
                                else:
                                    ?>
                                    <p>No Data Found!</p>

                                <?php
                                endif;
                                ?>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section>
            <div class="bookWrp">
                <div class="bookWrpTxt">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8 col-lg-6">
                                <div class="title titleWhite text-center">
                                    <!-- <span class="justify-content-center">Book instantly</span> -->
                                    <?php if (get_field('book_inst_title')): ?>
                                        <span class="justify-content-center"><?php the_field('book_inst_title') ?></span>
                                    <?php endif; ?>

                                    <!-- <h2>Private Jet Charters Services</h2> -->
                                    <?php if (get_field('book_inst_sub_title')): ?>
                                        <h2><?php the_field('book_inst_sub_title') ?></h2>
                                    <?php endif; ?>

                                </div>

                                <a href="/contact-us/"
                                    class="btn btn-primary px-4 d-table mx-auto">
                                    Make An Enquiry
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <?php
        get_footer();
        ?>