<?php

/**
 * Template Name: Empty Leg Page Temp
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
                    <div class="col-12">
                        <div class="title">

                            <?php if (get_field('current_jet_title')): ?>
                                <span><?php the_field('current_jet_title') ?></span>
                            <?php endif; ?>

                            <?php if (get_field('current_jet_sub_title')): ?>
                                <h2><?php echo get_field('current_jet_sub_title') ?></h2>
                            <?php endif; ?>
                        </div>

                        <?php if (get_field('current_jet_description')): ?>
                            <p><?php the_field('current_jet_description') ?></p>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
            <div class="container mt-4">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3">

                    <?php
                    $empty_flights_posts_arr = [
                        'post_type' => 'empty_flights',
                        'posts_per_page' => 3,
                        'order_by' => 'date',
                        'order' =>  'ASC',
                    ];

                    $empty_flights_fetch_query = new WP_Query($empty_flights_posts_arr);

                    if ($empty_flights_fetch_query->have_posts()):
                        while ($empty_flights_fetch_query->have_posts()): $empty_flights_fetch_query->the_post();
                    ?>
                            <div class="col mb-4">
                                <div class="legFleetCard">
                                    <div class="position-relative">
                                        <div class="imgWhitePatch">
                                            <img src="<?php echo get_template_directory_uri() ?>/images/imgPatch.svg" alt="">
                                        </div>
                                        <div class="legFleetImg">
                                            <img src="<?php echo the_post_thumbnail_url() ?>" alt="">
                                        </div>
                                    </div>
                                    <!-- <h4>Paris - Barcelona</h4> -->
                                    <h4><?php the_title() ?></h4>
                                    <div class="row ddsRow">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-4 col-lg-3"><span>Date</span></div>
                                                <div class="col-auto">:</div>
                                                <div class="col"><?php echo get_field('date') ?></div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-4 col-lg-3"><span>Departure</span></div>
                                                <div class="col-auto">:</div>
                                                <div class="col"><?php echo get_field('departure') ?></div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-4 col-lg-3"><span>Starting From</span></div>
                                                <div class="col-auto">:</div>
                                                <div class="col"><?php echo get_field('starting_from')  ?></div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-4 col-lg-3"><span>Person</span></div>
                                                <div class="col-auto">:</div>
                                                <div class="col"><?php echo get_field('person') ?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <h6 class="price">US$3,000</h6> -->
                                    <!-- <a href="#" class="btn btn-primary">Make An Enquiry</a> -->
                                    <a href="<?php echo get_field('book_btn_page_url') ?>" class="btn btn-primary"><?php echo get_field('book_btn_txt') ?></a>
                                </div>
                            </div>

                        <?php
                        endwhile;
                        wp_reset_postdata(); // very important to reset!
                    else:
                        ?>
                        <h4>No Data Found!</h4>

                    <?php
                    endif;
                    ?>

                </div>
            </div>
        </section>


        <?php
        get_footer();
        ?>
