<?php
get_header();
?>



<?php
if (have_posts()):
    while (have_posts()): the_post();
?>

        <div id="smooth-wrapper">
            <div id="smooth-content">
                <main>

                    <section class="section">
                        <div class="innerBanner">
                            <video autoplay muted loop>
                                <source src="<?php echo get_field('spotlight_video')['url'] ?>">
                            </video>
                            <div class="ibTxt">
                                <div class="container">
                                    <h1><?php the_title() ?></h1>

                                    <ul class="bredcrumbList">
                                        <li><a href="/">Home</a></li>
                                        <li><a href="/flights">Flights</a></li>
                                        <li><?php the_title() ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="luxury-charters" class="bg-body-tertiary luxury-charters section">
                        <div class="container">
                            <div class="row align-items-end">
                                <div class="col-lg-8 col-xl-7">
                                    <div class="title">
                                        <h2><?php the_title() ?></h2>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-4 align-items-center">

                                <div class="col-12 col-lg-8">
                                    <div class="position-relative lc-hero-plane pt-4" style="transform: translate3d(-90.4279px, 90.4279px, 0px);">
                                        <img src="<?php echo get_field('plane_object_image')['url'] ?>" class="img-fluid"
                                            alt="N239JT aircraft">
                                    </div>
                                </div>

                                <div class="col-12 col-lg-4">
                                    <div class="card b-r-radius border-0">
                                        <div class="card-body p-4 aircraftCard">

                                            <h5 class="text-primary fw-bold mb-3"><?php echo the_title() ?></h5>
                                            <hr class="opacity-25 dashed-border">

                                            <?php if (get_field('description')): ?>
                                                <p class="text-secondary mb-4"><?php the_field('description') ?></p>
                                            <?php endif; ?>

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
                                                <a href="/contact-us/" class="btn btn-primary px-4">Make An Enquiry</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>

                    <section class="whiteSec">

                        <div class="container">
                            <div class="title">

                                <?php if (get_field('top_jet_sec_title')): ?>
                                    <h2><?php the_field('top_jet_sec_title') ?></h2>
                                <?php endif; ?>

                            </div>

                            <!-- >>>>>>>>>>>>>>>>>>>> Dynamic -->
                            <div class="row jetGalleryRow">

                                <?php
                                if (have_rows('top_jet_sec_image_gallery')):
                                    while (have_rows('top_jet_sec_image_gallery')): the_row();
                                ?>
                                        <div class="col-6 col-md-4">
                                            <div class="jetGalleryCol">
                                                <img src="<?php echo get_sub_field('single_image')['url'] ?>" alt="">
                                            </div>
                                        </div>

                                    <?php
                                    endwhile;
                                else:
                                    ?>
                                    <p>No Gallery Found!</p>

                                <?php endif; ?>

                            </div>

                            <a href="/contact-us/" class="btn btn-primary d-table mx-auto">
                                Make An Enquiry</a>
                        </div>

                    </section>
                </main>

            <?php
        endwhile;
    else:
            ?>
            <h3>No Post Found!</h3>

        <?php
    endif;
        ?>



        <?php
        get_footer();
        ?>
