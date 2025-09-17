<?php
get_header();
?>

<?php
if (have_posts()):
    while (have_posts()): the_post();
?>


        <!-- Blog content -->

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