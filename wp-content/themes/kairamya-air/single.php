<?php
get_header();
?>



<?php
if (have_posts()):
    while (have_posts()): the_post();
?>



        <!-- Blog content -->
        <section class="pt-4">
            <div class="container">
                <div class="row">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="blogContent">
                            <!-- <h6 class="mb-0">October 5, 2023</h6> -->
                            <h6 class="mb-0"><?php echo get_the_date('F j, Y') ?></h6>
                        </div>
                        <div class="share">
                            <button>Share</button>
                        </div>
                    </div>
                </div>


                <div class="row col-lg-12 mb-5">
                    <div class="blogContent">

                        <h3><?php echo the_title() ?></h3>

                        <?php echo the_content() ?>
                        <!-- 
                        <h3>What Is The Best Time To Buy A Home?</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae condimentum massa. Nunc pretium justo tortor, id commodo justo maximus nec. Proin vitae massa et libero mollis viverra. Nulla id enim eu orci tincidunt fermentum. Mauris eget varius elit, id euismod ligula. Suspendisse a viverra tellus, aliquet hendrerit dolor. Aliquam pellentesque odio quis lacus ultricies, eu sagittis elit vehicula. Duis tempor libero id turpis condimentum, vitae rhoncus nisl rutrum. Praesent aliquam tempor enim, in lacinia dolor. Sed ut risus ac nisl blandit dignissim. Ut a nisi justo. Donec quis ullamcorper eros, at placerat lorem.</p>
                        <h3>Dolor magna eget est lorem ipsum dolor sit amet consectetur.</h3>
                        <ol>
                            <li>Enim facilisis gravida neque convallis a cras semper</li>
                            <li>Tortor at auctor urna nunc</li>
                            <li>Massa sed elementum tempus venenatis</li>
                            <li>Dignissim suspendisse in est ante in nibh mauris cursus mattis</li>
                        </ol>
                        -->

                    </div>

                    <div class="blogContent">
                        <?php if (get_field('blockquote_text')): ?>
                            <blockquote><?php echo the_field('blockquote_text')  ?></blockquote>
                        <?php endif; ?>

                        <?php if (get_field('below_bq_image')): ?>
                            <div class="imgCaption">
                                <img src="<?php echo the_field('below_bq_image')  ?>" class="img-fluid w-100 mt-3" alt="">
                            </div>
                        <?php endif; ?>


                    </div>
                </div>

            </div>
        </section>


    <?php
    endwhile;
    wp_reset_postdata();
else:
    ?>
    <h4>No Post Found!</h4>

<?php
endif;
?>





<?php
get_footer();
?>