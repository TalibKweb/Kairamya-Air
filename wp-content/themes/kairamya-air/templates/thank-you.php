<?php

/**
 * Template Name: Thank You Page
 */
get_header();
?>



<div id="smooth-wrapper">
    <div id="smooth-content">

        <section class=" thank-you-sec section d-flex align-items-center " style="margin: 80px 0 0; padding: 50px 0; min-height: 88vh; ">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center flex-column ">

                        <h1 class="search_title text-center "><?php the_title() ?></h1>
                        <p class="text-secondary "><?php the_content() ?></p>

                    </div>
                </div>
            </div>
        </section>


        <script>
            console.log('Thank You Page!');
            document.addEventListener('DOMContentLoaded', () => setTimeout(() => window.location = '/', 4000))
        </script>

        <?php
        get_footer()
        ?>