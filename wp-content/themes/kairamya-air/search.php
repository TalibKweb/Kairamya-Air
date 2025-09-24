<?php
get_header()
?>



<div id="smooth-wrapper">
    <div id="smooth-content">

        <section class="section" style="margin-top: 120px;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="search_title mb-5 ">Search Results for: <?php echo get_search_query() ?></h1>

                        <?php
                        if (have_posts()):
                            while (have_posts()): the_post();
                        ?>
                                <div class="d-flex align-items-center gap-4 mb-4 ">
                                    <img src="<?php the_post_thumbnail_url() ?>" alt="" style="width: 100%; max-width: 150px; max-height: 150px; object-fit: cover; ">
                                    <a href="<?php the_permalink() ?>">
                                        <h3 class=" m-0 "><?php the_title() ?></h3>
                                    </a>
                                </div>
                            <?php
                            endwhile;
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
        get_footer()
        ?>
