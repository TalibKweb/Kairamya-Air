<?php

/**
 * Template Name: About Page Temp
 */
get_header();
?>


<div id="smooth-wrapper">
    <div id="smooth-content">
        <div class="aboutWrp">

            <section class=" section">
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

            <section class="section">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-6 col-xl-5">

                            <?php if (get_field('about_co_title')): ?>
                                <div class="eyebrow mb-2"><?php the_field('about_co_title') ?></div>
                            <?php endif; ?>

                            <?php if (get_field('about_co_sub_title')): ?>
                                <h2 class="section-title mb-2"><?php the_field('about_co_sub_title') ?></h2>
                            <?php endif; ?>

                            <?php if (get_field('about_co_description')): ?>
                                <p><?php the_field('about_co_description') ?></p>
                            <?php endif; ?>

                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative">
                                <div class="imgWhitePatch">
                                    <img src="<?php echo get_template_directory_uri() ?>/images/imgPatch.svg" alt="">
                                </div>

                                <img src="<?php echo get_field('about_co_side_image')['url'] ?>" class="w-100" alt="">

                                <div class="counterWrp">

                                    <?php if (get_field('absolute_patch_title')): ?>
                                        <span class="counter" data-target="25"><?php the_field('absolute_patch_title') ?></span>
                                    <?php endif; ?>
                                    +
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-0 section offeringSec">
                <div class="container">
                    <div class="row  ">
                        <div class="col-md-8 OfferingTxt">
                            <div>
                                <?php if (get_field('offer_title')): ?>
                                    <div class="eyebrow mb-2"><?php the_field('offer_title') ?></div>
                                <?php endif; ?>

                                <?php if (get_field('offer_sub_title')): ?>
                                    <h2 class="section-title mb-2"><?php the_field('offer_sub_title') ?></h2>
                                <?php endif; ?>
                            </div>

                            <ul class="row mx-0 tabList">

                                <?php
                                if (have_rows('tab_repeater')):
                                    while (have_rows('tab_repeater')): the_row();
                                ?>
                                        <li class="col-4"><?php echo get_sub_field('tab_title') ?></li>
                                    <?php
                                    endwhile;
                                else:
                                    ?>
                                    <p>No Tabs Found!</p>
                                <?php endif; ?>

                            </ul>

                            <div class="tabContentWrp">

                                <?php
                                if (have_rows('tab_repeater')):
                                    while (have_rows('tab_repeater')): the_row();
                                ?>
                                        <div class="tabContent">
                                            <p><?php echo get_sub_field('tab_desc') ?></p>
                                        </div>
                                    <?php
                                    endwhile;
                                else:
                                    ?>
                                    <p>No Tab Data Found!</p>
                                <?php endif; ?>

                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="position-relative">

                                <img src="<?php echo get_field('offer_side_image')['url'] ?>" class="w-100 d-table mx-auto missionPlain" alt="">

                                <img src="<?php echo get_template_directory_uri() ?>/images/missionCloud1.png" class="mCloudLeft" alt="">
                                <img src="<?php echo get_template_directory_uri() ?>/images/missionCloud2.png" class="mCloudRight" alt="">

                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>

        <?php
        get_footer();
        ?>