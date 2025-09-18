<section id="luxury-charters" class="py-5 py-lg-6 bg-body-tertiary luxury-charters">
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-lg-8 col-xl-7">
                            <!-- <div class="eyebrow mb-2">Luxury Charters</div>
                            <h2 class="section-title mb-2">Select The Charters According To Your Need</h2> -->
                            <?php if (get_field('luxury_title')): ?>
                                <div class="eyebrow mb-2"><?php the_field('luxury_title') ?></div>
                            <?php endif ?>
                            <?php if (get_field('luxury_sub_title')): ?>
                                <h2 class="section-title mb-2"><?php the_field('luxury_sub_title') ?></h2>
                            <?php endif; ?>
                            <!-- <p class="text-secondary mb-0">Handpicked fleet delivering privacy, comfort, and speed for every
                        mission.</p> -->
                        </div>
                    </div>
                    <div class="row g-4 align-items-center">
                        <div class="col-12 col-lg-8">
                            <div class="position-relative lc-hero-plane pt-4">
                                <img src="<?php echo get_template_directory_uri() ?>/images/luxury_charters_section_2/plane_1.png" class="img-fluid"
                                    alt="N239JT aircraft">
                            </div>

                            <div class="row g-4 pt-2 justify-content-center">
                                <div class="col-5 col-md-3 col-xl-3 planeThumb active">
                                    <div
                                        class="d-flex align-items-center justify-content-center flex-column gap-3 lc-option ">
                                        <div class="lc-circle">
                                            <img src="<?php echo get_template_directory_uri() ?>/images/luxury_charters_section_2/plane_1.png"
                                                class="img-fluid" alt="N239JT">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="128" height="128"
                                                viewBox="0 0 128 128">
                                                <path
                                                    d="M109.255 18.7452C98.7849 8.27522 85.0085 1.75949 70.2731 0.308176C55.5376 -1.14314 40.7548 2.55977 28.4435 10.786C16.1321 19.0121 7.05398 31.2526 2.75581 45.4218C-1.54235 59.591 -0.79458 74.8121 4.87172 88.4918C10.538 102.171 20.7722 113.463 33.8306 120.443C46.889 127.423 61.9636 129.659 76.4858 126.77C91.008 123.882 104.079 116.047 113.473 104.601C122.866 93.1554 128 78.8067 128 64L114.448 64C114.448 75.6714 110.401 86.9817 102.997 96.0039C95.5926 105.026 85.2891 111.202 73.8419 113.479C62.3948 115.756 50.5123 113.993 40.219 108.491C29.9257 102.989 21.8586 94.0886 17.3921 83.3056C12.9257 72.5227 12.3362 60.5246 15.7243 49.3557C19.1123 38.1869 26.2682 28.5383 35.9726 22.054C45.677 15.5697 57.3295 12.6509 68.9448 13.7949C80.56 14.9389 91.4192 20.0749 99.6721 28.3279L109.255 18.7452Z"
                                                    fill="#0061AF" />
                                            </svg>
                                        </div>
                                        <div>
                                            <div class="fw-bold text-primary small mb-1 text-center">N239JT AIRCRAFT
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-2 col-sm-1">
                                    <div class="stroke">

                                    </div>
                                </div>

                                <div class="col-5 col-md-3 col-xl-3 planeThumb">
                                    <div
                                        class="d-flex align-items-center justify-content-center flex-column gap-3 lc-option">
                                        <div class="lc-circle"><img
                                                src="<?php echo get_template_directory_uri() ?>/images/luxury_charters_section_2/plane_2.png" class="img-fluid"
                                                alt="G150">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="128" height="128"
                                                viewBox="0 0 128 128">
                                                <path
                                                    d="M109.255 18.7452C98.7849 8.27522 85.0085 1.75949 70.2731 0.308176C55.5376 -1.14314 40.7548 2.55977 28.4435 10.786C16.1321 19.0121 7.05398 31.2526 2.75581 45.4218C-1.54235 59.591 -0.79458 74.8121 4.87172 88.4918C10.538 102.171 20.7722 113.463 33.8306 120.443C46.889 127.423 61.9636 129.659 76.4858 126.77C91.008 123.882 104.079 116.047 113.473 104.601C122.866 93.1554 128 78.8067 128 64L114.448 64C114.448 75.6714 110.401 86.9817 102.997 96.0039C95.5926 105.026 85.2891 111.202 73.8419 113.479C62.3948 115.756 50.5123 113.993 40.219 108.491C29.9257 102.989 21.8586 94.0886 17.3921 83.3056C12.9257 72.5227 12.3362 60.5246 15.7243 49.3557C19.1123 38.1869 26.2682 28.5383 35.9726 22.054C45.677 15.5697 57.3295 12.6509 68.9448 13.7949C80.56 14.9389 91.4192 20.0749 99.6721 28.3279L109.255 18.7452Z"
                                                    fill="#0061AF" />
                                            </svg>
                                        </div>
                                        <div>
                                            <div class="fw-bold text-primary small mb-1 text-center">G150 AIRCRAFT
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="card b-r-radius border-0">
                                <div class="card-body p-4 aircraftCard">
                                    <h5 class="text-primary fw-bold mb-3">N239JT AIRCRAFT</h5>
                                    <hr class="opacity-25 dashed-border">
                                    <p class="text-secondary mb-4">One of the most spacious and quiet aircraft in
                                        its
                                        class,
                                        perfect for meetings, relaxing, or rest, with fine dining facilities on
                                        board.
                                    </p>

                                    <div class="row aircraft_details">
                                        <div class="col-3 pe-0">
                                            <strong>Range</strong>
                                        </div>
                                        <div class="col-1">
                                            :
                                        </div>
                                        <div class="col-8">
                                            Up to 5 hours of nonstop flight
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
                                            7-8 passengers
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
                                            11 Hrs
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
                                            Business Charters, Leisure Travel, High-Altitude Routes
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <a href="#" class="btn btn-primary px-4">Make An Enquiry</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </section>