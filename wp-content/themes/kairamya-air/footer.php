<!-- Footer (Dark) -->
<footer class="footer-dark pt-5 pb-4">
    <div class="container">
        <div class="row g-4 align-items-start justify-content-between">
            <div class="col-lg-4">

                <a href="/">
                    <img src="<?php echo get_field('footer_logo', 'option')['url'] ?>" alt="kairamya air" class="footer-logo mb-5" />
                </a>

                <?php if (get_field('footer_tagline', 'option')): ?>
                    <h3 class="mb-4 mb-sm-5"><?php the_field('footer_tagline', 'option') ?></h3>
                <?php endif; ?>

                <!-- <div class="mb-5 position-relative">
                    <input class="emailTextBox" type="email" placeholder="Enter your email id" />
                    <button class="btn rounded-circle cir_btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                            viewBox="0 0 19 19" fill="none">
                            <g clip-path="url(#clip0_889_3179)">
                                <path
                                    d="M12.414 4.34082C12.414 4.88773 12.9543 5.7044 13.5012 6.38987C14.2043 7.27436 15.0446 8.04607 16.0079 8.63499C16.7303 9.07649 17.6059 9.5003 18.3105 9.5003M18.3105 9.5003C17.6059 9.5003 16.7295 9.92412 16.0079 10.3656C15.0446 10.9553 14.2043 11.727 13.5012 12.61C12.9543 13.2962 12.414 14.1144 12.414 14.6598M18.3105 9.5003L0.620888 9.50031"
                                    stroke="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_889_3179">
                                    <rect width="17.6897" height="17.6897" fill="white"
                                        transform="matrix(-1 8.74228e-08 8.74228e-08 1 18.3105 0.655273)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </button>
                </div> -->

                <div class="mb-5 position-relative">

                    <?php echo do_shortcode('[contact-form-7 id="d8285ce" title="Footer newsletter form" html_class="mb-5 position-relative footer-newsletter-form "]'); ?>

                </div>

                <!-- <div class="form-line mb-3"></div> -->

                <div class="d-flex gap-3 social">

                    <?php
                    if (have_rows('socials', 'option')):
                        while (have_rows('socials', 'option')): the_row();
                    ?>
                            <a href="<?php echo get_sub_field('social_link', 'option') ?>" aria-label="<?php echo get_sub_field('aria_label_txt', 'option') ?>">
                                <?php if (get_sub_field('social_icon_svg', 'option')) {
                                    echo the_sub_field('social_icon_svg', 'option');
                                }
                                ?>
                            </a>

                        <?php
                        endwhile;
                    else:
                        ?>
                        <p>No Social Profile Found!</p>
                    <?php endif; ?>

                </div>
            </div>

            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-5 mb-4 mb-lg-0">

                        <?php if (get_field('imp_link_title', 'option')): ?>
                            <h6 class="text-uppercase"><?php the_field('imp_link_title', 'option') ?></h6>
                        <?php endif; ?>

                        <ul class="footerLinks mt-4">

                            <?php
                            if (have_rows('imp_link_list', 'option')):
                                while (have_rows('imp_link_list', 'option')): the_row();
                            ?>
                                    <li><a href="<?php echo get_sub_field('imp_link_page_url', 'option') ?>"><?php echo get_sub_field('imp_link_text', 'option') ?></a></li>
                                <?php
                                endwhile;
                            else:
                                ?>
                                <p>No links Found!</p>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="col-lg-7 ps-lg-5">

                        <?php if (get_field('cont_det_title', 'option')): ?>
                            <h6 class="text-uppercase"><?php the_field('cont_det_title', 'option') ?></h6>
                        <?php endif; ?>

                        <ul class="contactDetails mt-4 mb-0">

                            <?php
                            if (have_rows('cont_det_list', 'option')):
                                while (have_rows('cont_det_list', 'option')): the_row();
                            ?>
                                    <li>
                                        <span>
                                            <?php echo get_sub_field('cont_det_icon_svg', 'option') ?>
                                        </span>

                                        <?php if (get_sub_field('cont_det_text_url', 'option')): ?>
                                            <a href="<?php the_sub_field('cont_det_text_url', 'option') ?>"><?php echo get_sub_field('cont_det_text', 'option') ?></a>
                                        <?php else: ?>
                                            <?php echo get_sub_field('cont_det_text', 'option') ?>
                                        <?php endif; ?>
                                    </li>

                                <?php
                                endwhile;
                            else:
                                ?>
                                <p>No Data Found!</p>
                            <?php endif; ?>

                        </ul>
                    </div>
                    <div class="col-12 officeHours">
                        <div class="mt-4">

                            <!-- <h6 class="text-uppercase">Office Hours</h6> -->


                            <h6 class="text-uppercase"><?php echo get_field('office_hours_title', 'option') ?></h6>

                            <!-- <p class="small mb-0">Monday to Saturday  09:00 AM to 06:00 PM IST | Sunday
                                On Call
                                Availability
                            </p> -->

                            <p class="small mb-0"><?php echo get_field('office_hours_text', 'option') ?></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="terms_conditions d-sm-flex  align-items-center justify-content-between gap-3 mt-4 pt-3 border-top border-light-subtle">
            <p class="mb-sm-0 small">© <span id="year"></span> Kairamya Aviation . All rights reserved.
                <a class="" href="#">Privacy Policy</a> <a class="" href="#">Terms & Conditions</a>
            </p>

            <a href="https://kwebmaker.com/" style="text-decoration: none;" target="_blank">
                <p>Kwebmaker&trade;</p>
            </a>

        </div>
    </div>
</footer>

</div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- gsap -->
<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>

<!-- ScrollSmoother requires ScrollTrigger -->
<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollSmoother.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="<?php echo get_template_directory_uri() ?>/js/anim.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/common.js"></script>


<script>
    // >>>>>>>>>>>>>>> Added for WP integration
    document.addEventListener("DOMContentLoaded", function() {
        const name_input = document.querySelectorAll('input[name="your-name"]');
        const phone_input = document.querySelectorAll('input[name="your-phone"]');

        // >>>>>>>>>>>>>>>> Client side Name validation
        name_input.forEach(input => {
            input.addEventListener("input", function() {
                this.value = this.value.replace(/[0-9!@#$%^&*(),.?":{}|<>_\-\/\\\[\]`~+=;']/g, ""); // remove numbers
                console.log('Name input change')
            });
        });

        // >>>>>>>>>>>>>>>> Client side Phone validation
        phone_input.forEach(input => {
            input.addEventListener("input", function(e) {
                // this.value = this.value.replace(/[A-Za-z\s!@#$%^&*(),.?":{}|<>_\-\/\\\[\]`~+=;']/g, "")
                this.value = this.value.replace(/\D/g, "")
                if (this.value.length > 10) {
                    this.value = this.value.slice(0, 10)
                    console.log('value is greater than 10')
                }
                console.log('Phone input Change!')
            })
        })

    });
</script>

<script>
    document.getElementById('year').textContent = new Date().getFullYear();

    var swiper = new Swiper(".offerings-swiper", {
        slidesPerView: 2.5,
        spaceBetween: 30,
        navigation: {
            nextEl: ".button-next",
            prevEl: ".button-prev",
        },
        autoplay: {
            delay: 3000, // time between slides (in ms) → 3000 = 3s
            disableOnInteraction: false, // keeps autoplay running after user swipes
        },
        speed: 1800,
        // pagination: {
        //     el: ".swiper-pagination",
        //     clickable: true,
        // },
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 2.5,
                spaceBetween: 30,
            },
        },
    });
    /**********************************************/
    var testimonialSwiper = new Swiper('.testimonialSwiper', {
        slidesPerView: 1,
        spaceBetween: 16,

        pagination: {
            el: '.testimonial-pagination',
            clickable: true,
        },
    });

    /**********************************************/

    var blogSwiper = new Swiper('.blogSwiper', {
        slidesPerView: 3,
        spaceBetween: 16,

        // pagination: {
        //     el: '.testimonial-pagination',
        //     clickable: true,
        // },
        breakpoints: {
            0: {
                slidesPerView: 1.2,
                spaceBetween: 20,
            },
            480: {
                slidesPerView: 1.5,
                spaceBetween: 20,
            },
            640: {
                slidesPerView: 2.5,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },
    });

    /********************************************************************/

    // >>>>>>>>>>>>>>> Added for WP integration
    $(document).ready(function() {
        // console.log('plane Thumb', $('.planeThumb:first-child'))
        $('.planeThumb:first-child').addClass('active')
    });


    $('.planeThumb').click(function() {
        $(this).siblings('.planeThumb').removeClass('active')
        $(this).addClass('active');

        var src = $(this).find('img').attr('src');
        $('.lc-hero-plane img').attr('src', src);
    })
</script>

<!-- equal height script -->
<script>
    function setEqualHeight() {
        $(".eqHeight").on("load", function() {
            var maxHeight = 0;
            $(".eqHeight").css("height", "auto"); // reset first

            $(".eqHeight").each(function() {
                var h = $(this).outerHeight();
                if (h > maxHeight) {
                    maxHeight = h;
                }
            });

            $(".eqHeight").height(maxHeight);
        })

    }

    // Run on page load
    $(window).on("load", function() {
        setEqualHeight();
    });

    // Run on window resize
    $(window).on("resize", function() {
        setEqualHeight();
    });
</script>

<script>
    $(document).ready(function() {
        $(".hero-input").on("focus", function() {
            $(this).addClass("focus-bg");
        });

        $(".hero-input").on("blur", function() {
            if ($(this).val().trim() === "") {
                $(this).removeClass("focus-bg"); // reset if empty
            }
        });
    });
</script>

<script>
    $('.searchButton').on('click', function(e) {
        e.preventDefault();
        $('.searchBar').css({
            display: 'flex'
        });
    })

    $('.closeBtn').on('click', function(e) {
        e.preventDefault();
        $('.searchBar').css({
            display: 'none'
        });
    })

    $('.menuBtn').on('click', function(e) {
        e.stopPropagation();
        $('.primaryNav .navbar-nav').css({
            right: '0px'
        })
    })

    $('.menuClose').on('click', function(e) {
        e.stopPropagation();
        $('.primaryNav .navbar-nav').css({
            right: '-450px'
        })
    })

    $('body').on('click', function(e) {
        $('.primaryNav .navbar-nav').css({
            right: '-450px'
        })

    })

    $('.navbar-nav').on('click', function(e) {
        e.stopPropagation();
    })
</script>

<?php wp_footer() ?>
</body>

</html>