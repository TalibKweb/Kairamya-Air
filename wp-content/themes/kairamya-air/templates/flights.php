<?php

/**
 * Template Name: Flights Page Temp
 */
get_header();
?>





















<div id="smooth-wrapper">
    <div id="smooth-content">

        <main class="flights-page">

            <section class="section">
                <div class="innerBanner">
                    <video autoplay muted loop>
                        <source src="<?php echo get_template_directory_uri() ?>/images/innerBanner/flights.mp4">
                    </video>
                    <div class="ibTxt">
                        <div class="container">
                            <h1>Flight</h1>
                            <ul class="bredcrumbList">
                                <li><a href="/">Home</a></li>
                                <li>Flight</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="container">
                    <div class="title">
                        <div class="row">
                            <div class="col-lg-7">
                                <span>Our flight</span>
                                <h2>Select the charters according to your need</h2>
                            </div>
                            <div class="col-lg-5 mt-3 mt-lg-4">
                                <p>Each aircraft in our fleet is chosen for its comfort, performance, and mission
                                    capability. Whether you need to fly short-haul business hops or medium-range
                                    intercity travel, Kairamya Aviation has the right aircraft for you.</p>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative">
                        <div class="imgWhitePatch" style="width: 20%; z-index: 2;">
                            <img src="<?php echo get_template_directory_uri() ?>/images/imgPatch.svg" alt="">
                        </div>
                        <div class="swiper flightSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="position-relative">
                                        <div class="swiperBigImgWrp">
                                            <img src="<?php echo get_template_directory_uri() ?>/images/flight/01.jpg" />
                                        </div>
                                        <p>One of the most spacious and quiet aircraft in its class, with a
                                            three-zone cabin space perfect for conducting business meetings,
                                            relaxing or rest, along with facilities for fine dining on board.</p>
                                        <div class="row gx-0 gy-3 aboutFlightInfo">
                                            <div class="col-md-6">
                                                <div class="row gx-3">
                                                    <div class="col-auto"><span>Range</span></div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col">Up to 5 hours of nonstop flight </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row gx-3">
                                                    <div class="col-auto"><span>Hours</span></div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col">11 hrs</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row gx-3">
                                                    <div class="col-auto"><span>Seating</span></div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col">7–8 passengers</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row gx-3">
                                                    <div class="col-auto"><span>Perfect For</span></div>
                                                    <div class="col-auto">:</div>
                                                    <div class="col">Business Charters, Leisure Travel,
                                                        High-Altitude Routes</div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-primary">Make an Enquiry</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div thumbsSlider="" class="swiper flightThumb d-none">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="swiperSmallImgWrp">
                                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiperSmallImgWrp">
                                        <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section whiteSec">

                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="title">
                                <h2>Top Private Jet</h2>
                            </div>
                        </div>
                        <div class="col-lg-auto d-none swiperBtnWrp">
                            <button class="swiper-button-prev jet-swiper-button-prev"></button>
                            <button class="swiper-button-next jet-swiper-button-next"></button>
                        </div>
                    </div>
                    <div class="swiper jetSwiper">
                        <div class="swiper-wrapper">



                            <?php
                            $aircrafts_posts_arr = [
                                'post_type' => 'aircrafts',
                                'posts_per_page' => 3,
                                'order_by' => 'date',
                                'order' =>  'ASC',
                            ];

                            $aircrafts_fetch_query = new WP_Query($aircrafts_posts_arr);

                            if ($aircrafts_fetch_query->have_posts()):
                                while ($aircrafts_fetch_query->have_posts()): $aircrafts_fetch_query->the_post();
                            ?>

                                    <div class="swiper-slide">

                                        <div class="productCard">
                                            <div class="productImg">
                                                <img src="<?php the_post_thumbnail_url() ?>" width="500" height="400" alt="">
                                            </div>
                                            <a href="<?php the_permalink() ?>">
                                                <h6><?php the_title() ?></h6>
                                            </a>
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

                            <!-- <div class="swiper-slide">
                                <div class="productCard">
                                    <div class="productImg">
                                        <img src="<?php echo get_template_directory_uri() ?>/images/jet/01.jpg" width="500" height="400" alt="">
                                    </div>
                                    <h6>The Leopards of Jawai with Udaipur</h6>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="productCard">
                                    <div class="productImg">
                                        <img src="<?php echo get_template_directory_uri() ?>/images/jet/02.jpg" width="500" height="400" alt="">
                                    </div>
                                    <h6>Tigers of Ranthambhore</h6>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="productCard">
                                    <div class="productImg">
                                        <img src="<?php echo get_template_directory_uri() ?>/images/jet/03.jpg" width="500" height="400" alt="">
                                    </div>
                                    <h6>Best of Kambini & Bandipur</h6>
                                </div>
                            </div> -->

                        </div>
                    </div>
                </div>

            </section>

            <section class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="title">
                                <h2>Private Flying Beyond Expectations</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>


















        <?php
        get_footer();
        ?>