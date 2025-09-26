<?php

/**
 * Template Name: Home Page Temp
 */
get_header();
?>


<div id="smooth-wrapper">
    <div id="smooth-content">
        <div id="wrapper" class="position-relative homeWrapper">
            <!-- Hero -->

            <!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Dynamic -->
            <section id="hero" class="position-relative text-white overflow-hidden">
                <!-- <img class="hero-bg w-100 h-100 object-fit-cover" src="images/hero_banner_section_1/hero_banner.jpg"
            alt="Luxury private jet on runway"> -->
                <video width="100%" height="auto" muted playsinline autoplay loop preload="none"
                    poster="./images/hero_banner_section_1/hero_banner.jpg" class="myVideo">
                    <source src="<?php echo get_template_directory_uri() ?>/videos/Banner_Vid_compressed.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="container position-relative z-2 bannerContainer d-flex align-items-end pb-xl-5">
                    <div class="w-100 z-2">
                        <div class="text-center mb-0">
                            <?php if (get_field('spotlight_title')): ?>
                                <div class="eyebrow mb-2"><?php the_field('spotlight_title') ?></div>
                            <?php endif; ?>

                            <?php if (get_field('spotlight_sub_title')): ?>
                                <h1 class="display-4 display-md-3 display-lg-2 hero-title mb-3"><?php the_field('spotlight_sub_title') ?></h1>
                            <?php endif; ?>
                        </div>

                        <div class="text-center mb-4">
                            <img class="img-fluid hero-plane" src="<?php echo get_field('plane_object_img')['url'] ?>" alt="Jet silhouette">
                        </div>

                        <div class="hero-form container">
                            <?php echo do_shortcode('[contact-form-7 id="4306482" title="Spotlight form home page" html_class="row align-items-center spotlight-form-home-pg  "]'); ?>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Luxury Charters -->

            <!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Dynamic -->
            <section id="luxury-charters" class="py-5 py-lg-6 bg-body-tertiary luxury-charters">
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-lg-8 col-xl-7">
                            <?php if (get_field('luxury_title')): ?>
                                <div class="eyebrow mb-2"><?php the_field('luxury_title') ?></div>
                            <?php endif ?>

                            <?php if (get_field('luxury_sub_title')): ?>
                                <h2 class="section-title mb-2"><?php the_field('luxury_sub_title') ?></h2>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="row g-4 align-items-center">

                        <div class="col-12 col-lg-8">
                            <div class="position-relative lc-hero-plane pt-4">
                                <img src="<?php echo get_template_directory_uri() ?>/images/luxury_charters_section_2/plane_1.png" class="img-fluid"
                                    alt="N239JT aircraft">
                            </div>

                            <div class="row g-4 pt-2 justify-content-center">

                                <?php
                                $aircrafts_posts_arr = [
                                    'post_type' => 'aircrafts',
                                    'posts_per_page' => -1,
                                    'order_by' => 'date',
                                    'order' =>  'ASC',
                                    'tax_query'      => [
                                        [
                                            'taxonomy' => 'aircraft_tag',    // or your custom taxonomy slug
                                            'field'    => 'slug',        // can be 'term_id' or 'name' too
                                            'terms'    => 'featured', // single slug or array of slugs
                                        ],
                                    ],
                                ];

                                $aircrafts_fetch_query = new WP_Query($aircrafts_posts_arr);

                                if ($aircrafts_fetch_query->have_posts()):
                                    while ($aircrafts_fetch_query->have_posts()): $aircrafts_fetch_query->the_post();
                                ?>
                                        <div class="col-5 col-md-3 col-xl-3 planeThumb  ">
                                            <div
                                                class="d-flex align-items-center justify-content-center flex-column gap-3 lc-option ">
                                                <div class="lc-circle">
                                                    <img src="<?php echo get_field('plane_object_image')['url'] ?>"
                                                        class="img-fluid" alt="N239JT">

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="128" height="128"
                                                        viewBox="0 0 128 128">
                                                        <path
                                                            d="M109.255 18.7452C98.7849 8.27522 85.0085 1.75949 70.2731 0.308176C55.5376 -1.14314 40.7548 2.55977 28.4435 10.786C16.1321 19.0121 7.05398 31.2526 2.75581 45.4218C-1.54235 59.591 -0.79458 74.8121 4.87172 88.4918C10.538 102.171 20.7722 113.463 33.8306 120.443C46.889 127.423 61.9636 129.659 76.4858 126.77C91.008 123.882 104.079 116.047 113.473 104.601C122.866 93.1554 128 78.8067 128 64L114.448 64C114.448 75.6714 110.401 86.9817 102.997 96.0039C95.5926 105.026 85.2891 111.202 73.8419 113.479C62.3948 115.756 50.5123 113.993 40.219 108.491C29.9257 102.989 21.8586 94.0886 17.3921 83.3056C12.9257 72.5227 12.3362 60.5246 15.7243 49.3557C19.1123 38.1869 26.2682 28.5383 35.9726 22.054C45.677 15.5697 57.3295 12.6509 68.9448 13.7949C80.56 14.9389 91.4192 20.0749 99.6721 28.3279L109.255 18.7452Z"
                                                            fill="#0061AF" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="fw-bold text-primary small mb-1 text-center"><?php the_title() ?></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-2 col-sm-1 stroke_cont ">
                                            <div class="stroke">

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

                        <div class="col-12 col-lg-4">
                            <div class="card b-r-radius border-0">

                                <?php
                                $aircrafts_posts_arr = [
                                    'post_type' => 'aircrafts',
                                    'posts_per_page' => -1,
                                    'order_by' => 'date',
                                    'order' =>  'ASC',
                                    'tax_query'      => [
                                        [
                                            'taxonomy' => 'aircraft_tag',    // or your custom taxonomy slug
                                            'field'    => 'slug',        // can be 'term_id' or 'name' too
                                            'terms'    => 'featured', // single slug or array of slugs
                                        ],
                                    ],
                                ];

                                $aircrafts_fetch_query = new WP_Query($aircrafts_posts_arr);

                                if ($aircrafts_fetch_query->have_posts()):
                                    while ($aircrafts_fetch_query->have_posts()): $aircrafts_fetch_query->the_post();
                                ?>
                                        <div class="card-body p-4 aircraftCard">

                                            <h5 class="text-primary fw-bold mb-3"><?php the_title(); ?></h5>
                                            <hr class="opacity-25 dashed-border">
                                            <p class="text-secondary mb-4"><?php echo get_field('description') ?></p>

                                            <div class="row aircraft_details">
                                                <div class="col-3 pe-0">
                                                    <strong>Range</strong>
                                                </div>
                                                <div class="col-1">
                                                    :
                                                </div>
                                                <div class="col-8">
                                                    <?php echo get_field('range') ?>
                                                </div>
                                            </div>

                                            <div class="row aircraft_details">
                                                <div class="col-3 pe-0">
                                                    <strong>Seating</strong>
                                                </div>
                                                <div class="col-1">
                                                    :
                                                </div>
                                                <div class="col-8">
                                                    <?php echo get_field('seating') ?>
                                                </div>
                                            </div>

                                            <div class="row aircraft_details">
                                                <div class="col-3 pe-0">
                                                    <strong>Hours</strong>
                                                </div>
                                                <div class="col-1">
                                                    :
                                                </div>
                                                <div class="col-8">
                                                    <?php echo get_field('hours') ?>
                                                </div>
                                            </div>

                                            <div class="row aircraft_details">
                                                <div class="col-3 pe-0">
                                                    <strong>Perfect For</strong>
                                                </div>
                                                <div class="col-1">
                                                    :
                                                </div>
                                                <div class="col-8">
                                                    <?php echo get_field('perfect_for') ?>
                                                </div>
                                            </div>

                                            <div class="mt-4">
                                                <a href="<?php echo get_field('enquiry_btn_page') ?>" class="btn btn-primary px-4"><?php echo get_field('enquiry_btn_txt') ?></a>
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
                    </div>

                </div>
            </section>

            <!-- What We’re Offering (Swiper) -->
            <section id="offerings" class="py-5 py-lg-6">
                <div class="px-3 px-sm-0">
                    <div class="mob-white-bg">
                        <div class="container">
                            <div class="row align-items-end mb-4 mb-lg-5 justify-content-between">
                                <div class="col-lg-8 col-xl-7">

                                    <?php if (get_field('services_title')): ?>
                                        <div class="eyebrow mb-2"><?php the_field('services_title') ?></div>
                                    <?php endif; ?>
                                    <?php if (get_field('services_sub_title')): ?>
                                        <h2 class="section-title mb-0"><?php the_field('services_sub_title') ?></h2>
                                    <?php endif; ?>

                                </div>
                                <div class="col-lg-auto text-lg-end mt-3 mt-lg-0 d-flex swiperBtns">
                                    <div class="button-next">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="31" height="13"
                                            viewBox="0 0 31 13" fill="none">
                                            <path
                                                d="M9.22363 0.504883C9.19723 0.513793 9.17858 0.524315 9.16797 0.533203C9.15839 0.541242 9.15566 0.54767 9.1543 0.550781L9.15039 0.560547L9.14551 0.569336C8.32352 2.24269 7.09593 3.68511 5.71289 4.71191C4.33401 5.73563 2.76765 6.37012 1.26758 6.37012C1.24432 6.37021 1.21059 6.38043 1.18066 6.41016C1.15206 6.43866 1.13867 6.47332 1.13867 6.50684C1.1388 6.59005 1.20005 6.6434 1.26758 6.64355C2.87182 6.64355 4.58586 7.34375 6.00781 8.38867C7.4278 9.43215 8.61832 10.8649 9.13281 12.4092C9.15072 12.4598 9.20663 12.4954 9.25098 12.498C9.25548 12.497 9.26203 12.4966 9.27148 12.4941C9.27763 12.4925 9.28777 12.4892 9.29883 12.4863C9.34053 12.4716 9.3757 12.4327 9.37988 12.3779L9.37305 12.3174C8.93653 10.9803 7.92145 9.59097 6.53125 8.47168L5.36035 7.53418L4.24805 6.64355L30.3711 6.64355C30.4386 6.64337 30.4999 6.59003 30.5 6.50684C30.5 6.4235 30.4387 6.3703 30.3711 6.37012L4.17578 6.37012L5.22949 5.48633L6.34766 4.54883L6.34863 4.54785C7.5857 3.5156 8.62802 2.17442 9.36816 0.693359C9.37406 0.681055 9.37827 0.663374 9.37988 0.643555C9.3815 0.623348 9.37897 0.605796 9.375 0.59375C9.36569 0.565645 9.35383 0.546286 9.34473 0.535156C9.33652 0.525191 9.33131 0.523013 9.33008 0.522461L9.32031 0.517578L9.30957 0.512695C9.29874 0.507216 9.2834 0.501506 9.26562 0.5C9.24805 0.498557 9.23344 0.501587 9.22363 0.504883Z"
                                                fill="white" stroke="#0061AF" />
                                        </svg>
                                    </div>
                                    <div class="button-prev">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="31" height="13"
                                            viewBox="0 0 31 13" fill="none">
                                            <path
                                                d="M21.7764 0.504883C21.8028 0.513793 21.8214 0.524315 21.832 0.533203C21.8416 0.541242 21.8443 0.54767 21.8457 0.550781L21.8496 0.560547L21.8545 0.569336C22.6765 2.24269 23.9041 3.68511 25.2871 4.71191C26.666 5.73563 28.2323 6.37012 29.7324 6.37012C29.7557 6.37021 29.7894 6.38043 29.8193 6.41016C29.8479 6.43866 29.8613 6.47332 29.8613 6.50684C29.8612 6.59005 29.8 6.6434 29.7324 6.64355C28.1282 6.64355 26.4141 7.34375 24.9922 8.38867C23.5722 9.43215 22.3817 10.8649 21.8672 12.4092C21.8493 12.4598 21.7934 12.4954 21.749 12.498C21.7445 12.497 21.738 12.4966 21.7285 12.4941C21.7224 12.4925 21.7122 12.4892 21.7012 12.4863C21.6595 12.4716 21.6243 12.4327 21.6201 12.3779L21.627 12.3174C22.0635 10.9803 23.0785 9.59097 24.4688 8.47168L25.6396 7.53418L26.752 6.64355L0.628906 6.64355C0.561389 6.64337 0.500123 6.59003 0.5 6.50684C0.5 6.4235 0.56132 6.3703 0.628906 6.37012L26.8242 6.37012L25.7705 5.48633L24.6523 4.54883L24.6514 4.54785C23.4143 3.5156 22.372 2.17442 21.6318 0.693359C21.6259 0.681055 21.6217 0.663374 21.6201 0.643555C21.6185 0.623348 21.621 0.605796 21.625 0.59375C21.6343 0.565645 21.6462 0.546286 21.6553 0.535156C21.6635 0.525191 21.6687 0.523013 21.6699 0.522461L21.6797 0.517578L21.6904 0.512695C21.7013 0.507216 21.7166 0.501506 21.7344 0.5C21.752 0.498557 21.7666 0.501587 21.7764 0.504883Z"
                                                fill="white" stroke="#0061AF" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper mySwiper offerings-swiper">
                            <div class="swiper-wrapper">

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
                                        <div class="swiper-slide">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="322" height="51"
                                                viewBox="0 0 322 51" fill="none" class="topEdge">
                                                <path
                                                    d="M0 0H322V51H54.5175C50.4408 51 48.4025 51 46.5101 50.4974C44.8332 50.052 43.2462 49.319 41.8199 48.3311C40.2102 47.2162 38.8886 45.6644 36.2455 42.5607L0 0Z"
                                                    fill="white" />
                                            </svg>
                                            <img src="<?php the_post_thumbnail_url() ?>"
                                                class="img-fluid shadow-sm" alt="Onboard luxury">
                                            <a style="text-decoration: none;" href="/services/">
                                                <h5 class="mt-4 text-primary"><?php the_title() ?></h5>
                                                <p class="text-secondary"><?php the_excerpt() ?></p>
                                            </a>
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
                    </div>
                </div>
            </section>

            <!-- Who We Are -->
            <section id="who-we-are" class="position-relative who-we-are">
                <div class="who-bg position-absolute top-0 start-0 w-100 h-100">
                    <video width="100%" height="auto" muted playsinline autoplay loop preload="none"
                        poster="./images/hero_banner_section_1/hero_banner.jpg" class="myVideo">
                        <source src="<?php echo get_template_directory_uri() ?>/videos/Banner_Vid_compressed.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="container position-relative z-2 py-5 py-lg-6">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 text-center">

                            <?php if (get_field('who_we_are_title')): ?>
                                <div class="eyebrow mb-2"><?php the_field('who_we_are_title') ?></div>
                            <?php endif; ?>

                            <?php if (get_field('who_we_are_sub_title')): ?>
                                <h2 class="section-title mb-3"><?php the_field('who_we_are_sub_title') ?></h2>
                            <?php endif; ?>

                            <?php if (get_field('who_we_are_description')): ?>
                                <p class="lead mb-4 text-secondary"><?php the_field('who_we_are_description') ?></p>
                            <?php endif; ?>

                            <a href="/about-us/" class="btn btn-primary px-4">About Us</a>

                        </div>
                    </div>
                </div>

                <div class="container py-5 px-lg-6 py-lg-6 bg-white private-flights" id="private-flights">
                    <!-- Icons Row -->
                    <div class="row g-4 align-items-center mb-4 pf-icons pb-5">

                        <?php
                        if (have_rows('who_we_are_features')):

                            while (have_rows('who_we_are_features')): the_row();
                        ?>
                                <div class="col-6 col-md-3 text-center">
                                    <!-- <img src="images/private_flights_icons/safety.svg" width="42" height="42" alt="Safety"> -->
                                    <video width="320" height="240" autoplay muted autoplay loop>
                                        <source src="<?php echo get_sub_field('feat_gif')['url'] ?>" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <div class="mt-2 small fw-semibold text-primary"><?php echo get_sub_field('feat_title') ?></div>
                                </div>

                            <?php
                            endwhile;
                        else:
                            ?>
                            <p>No Data Found!</p>
                        <?php endif; ?>

                    </div>

                    <!-- Cards + Right text column -->
                    <div class="row g-4 align-items-start">

                        <div class="col-12 col-lg-12 col-xl-5 order-xl-2">
                            <div class="ps-xl-5">
                                <?php if (get_field('pvt_flight_title')): ?>
                                    <div class="eyebrow mb-2"><?php the_field('pvt_flight_title') ?></div>
                                <?php endif; ?>

                                <?php if (get_field('pvt_flight_sub_title')): ?>
                                    <h2 class="section-title mb-3"><?php the_field('pvt_flight_sub_title') ?></h2>
                                <?php endif; ?>

                                <?php if (get_field('pvt_flight_description')): ?>
                                    <p class="text-secondary mb-4"><?php the_field('pvt_flight_description') ?></p>
                                <?php endif; ?>

                                <a href="/empty-leg-fleet/" class="btn btn-primary">Discover More</a>
                            </div>
                        </div>

                        <div class="col-12 col-lg-12 col-xl-7 order-xl-1">
                            <div class="row g-4 g-xxl-5">

                                <?php
                                $empty_flights_posts_arr = [
                                    'post_type' => 'empty_flights',
                                    'posts_per_page' => 2,
                                    'order_by' => 'date',
                                    'order' =>  'ASC'
                                ];

                                $empty_flights_fetch_query = new WP_Query($empty_flights_posts_arr);

                                if ($empty_flights_fetch_query->have_posts()):
                                    while ($empty_flights_fetch_query->have_posts()): $empty_flights_fetch_query->the_post();
                                ?>
                                        <div class="col-12 col-md-6">
                                            <article class="pf-card h-100 overflow-hidden">
                                                <div class="position-relative mb-4 pb-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="202" height="47"
                                                        viewBox="0 0 202 47" fill="none" class="curvImage">
                                                        <path
                                                            d="M0.441406 0H201.432V46.8061H41.386C36.3457 46.8061 33.8256 46.8061 31.5688 46.0739C29.5721 45.426 27.7335 44.3662 26.1721 42.963C24.4074 41.3772 23.1443 39.1965 20.6181 34.835L0.441406 0Z"
                                                            fill="white" />
                                                    </svg>
                                                    <img src="<?php the_post_thumbnail_url() ?>"
                                                        class="w-100 d-block" alt="Berlin to Prague">
                                                </div>
                                                <div class="card-body px-3 px-xl-3 px-xxl-4">
                                                    <h5 class="card-title text-primary brandBlueColor pb-2"><?php the_title() ?></h5>
                                                    <hr class="pf-dash">
                                                    <div class="row">
                                                        <div class="col-5 head mb-4">Date</div>
                                                        <div class="col-1 mb-4 px-0 text-center">:</div>
                                                        <div class="col-6 mb-4 desc"><?php echo get_field('date') ?></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-5 head mb-4">Departure</div>
                                                        <div class="col-1 mb-4 px-0 text-center">:</div>
                                                        <div class="col-6 mb-4 desc"><?php echo get_field('departure') ?></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-5 head mb-4">Starting From</div>
                                                        <div class="col-1 mb-4 px-0 text-center">:</div>
                                                        <div class="col-6 mb-4 desc"><?php echo get_field('starting_from') ?></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-5 head mb-4">Person</div>
                                                        <div class="col-1 mb-4 px-0 text-center">:</div>
                                                        <div class="col-6 mb-4 desc"><?php echo get_field('person') ?></div>
                                                    </div>
                                                </div>

                                                <div class="card-footer bg-transparent border-0">
                                                    <a href="/contact-us/"
                                                        class="btn btn-accent bookNowBtn w-100 justify-content-between d-flex align-items-center">
                                                        <span>Book Now</span> <span><svg xmlns="http://www.w3.org/2000/svg"
                                                                width="77" height="33" viewBox="0 0 77 33" fill="none">
                                                                <path
                                                                    d="M54.2109 0.612305C54.4496 0.491625 54.7503 0.463591 55.0117 0.551758C55.3059 0.651033 55.5306 0.836196 55.6377 1.08008L55.6416 1.08984L55.6465 1.09863C57.6602 5.19793 60.6684 8.73097 64.0508 11.2422C67.429 13.7502 71.2127 15.2626 74.7783 15.2627C75.3406 15.2627 75.8611 15.7538 75.8613 16.3643C75.8613 16.9839 75.3757 17.4668 74.7783 17.4668C70.9497 17.4669 66.7931 19.1453 63.3057 21.708C59.8175 24.2713 56.9361 27.7643 55.708 31.4697C55.5545 31.8933 55.1279 32.1962 54.6885 32.1963C54.5956 32.1963 54.5458 32.1775 54.3477 32.127C53.7931 31.944 53.4849 31.3459 53.6699 30.7529C54.8215 27.2179 57.4793 23.6043 61.0674 20.7158L64.0127 18.3564L65.125 17.4668H1.58301C0.985637 17.4668 0.5 16.9839 0.5 16.3643C0.50018 15.7448 0.985748 15.2627 1.58301 15.2627H65.3828L64.3291 14.3799L61.5156 12.0205H61.5146C58.3176 9.35282 55.6339 5.89274 53.7285 2.0791C53.6086 1.8348 53.5805 1.52644 53.6689 1.25781C53.7684 0.955824 53.9527 0.729986 54.1904 0.623047L54.2002 0.618164L54.2109 0.612305Z"
                                                                    fill="#01457D" />
                                                            </svg></span></a>
                                                </div>
                                            </article>
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
                    </div>
                </div>
            </section>

            <!-- Private Flights -->
            <!-- <section  class="py-5 py-lg-6 bg-body-tertiary">
        
    </section> -->


            <!-- Testimonial -->
            <section id="testimonial" class="testimonial py-5 py-lg-6">
                <div class="container">
                    <div class="row g-4 g-lg-5">
                        <div class="col-lg-6">

                            <?php if (get_field('testimonial_title')): ?>
                                <div class="eyebrow mb-2"><?php the_field('testimonial_title') ?></div>
                            <?php endif; ?>

                            <?php if (get_field('testimonial_sub_title')): ?>
                                <h2 class="section-title mb-3"><?php the_field('testimonial_sub_title') ?></h2>
                            <?php endif; ?>

                        </div>

                        <div class="col-lg-6 position-relative">
                            <div class="white-card p-3 p-md-4 p-lg-5">
                                <div class="swiper testimonialSwiper">
                                    <div class="swiper-wrapper">

                                        <?php
                                        if (have_rows('testimonial_list')):
                                            while (have_rows('testimonial_list')): the_row();
                                        ?>

                                                <div class="swiper-slide">
                                                    <div class="mb-5">
                                                        <?php if (get_sub_field('testimonial_text')): ?>
                                                            <p class="mb-3"><?php the_sub_field('testimonial_text') ?></p>
                                                        <?php endif; ?>

                                                    </div>

                                                    <p class="mb-1 fw-semibold author"><?php echo get_sub_field('author_name') ?></p>
                                                    <p class="mb-0 text-secondary designation"><?php echo get_sub_field('author_role') ?></p>
                                                </div>

                                            <?php
                                            endwhile;
                                        else:
                                            ?>
                                            <p>No Data Found!</p>
                                        <?php endif; ?>

                                    </div>

                                </div>
                            </div>

                            <div class="swiper-pagination testimonial-pagination"></div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Blog -->
            <section id="blog" class="py-5 py-lg-6">
                <div class="container">
                    <div class="row align-items-end mb-4">
                        <div class="col-lg-8 mx-auto text-center">
                            <?php if (get_field('blog_sec_title')): ?>
                                <div class="eyebrow mb-2"><?php the_field('blog_sec_title') ?></div>
                            <?php endif; ?>

                            <?php if (get_field('blog_sec_sub_title')): ?>
                                <h2 class="section-title mb-2"><?php the_field('blog_sec_sub_title') ?></h2>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="swiper blogSwiper">
                        <div class="swiper-wrapper">

                            <?php
                            $blog_posts_arr = [
                                'post_type' => 'post',
                                'posts_per_page' => -1,
                                'order_by' => 'date',
                                'order' =>  'ASC'
                            ];

                            $blog_fetch_query = new WP_Query($blog_posts_arr);

                            if ($blog_fetch_query->have_posts()):
                                while ($blog_fetch_query->have_posts()): $blog_fetch_query->the_post();
                            ?>
                                    <div class="swiper-slide">
                                        <article class="card h-100 shadow-sm hover-lift">
                                            <img src="<?php the_post_thumbnail_url() ?>" alt="Blog image">
                                            <div class="card-body eqHeight">
                                                <div class="date"><?php echo get_the_date() ?></div>
                                                <a style="text-decoration: none;" href="<?php the_permalink() ?>">
                                                    <h5 class="card-title"><?php the_title() ?></h5>
                                                </a>
                                            </div>
                                        </article>
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
                </div>
            </section>

            <?php
            get_footer();
            ?>
