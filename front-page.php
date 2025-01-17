<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pawsgang
 */

get_header();
?>

<main id="primary" class="site-main">
    <section class="container pb-5 pt-4">
        <div id="carouselExampleDark" class="carousel carousel-dark slide overflow-hidden rounded">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="<?= get_template_directory_uri() ?>/img/slide1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="<?= get_template_directory_uri() ?>/img/slide2.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="container">
        <div class="row d-flex justify-content-center">
            <h1 class="text-center pt-5">
                Popular Products
            </h1>
            <p class="text-center">We Offer a lot of greate and high quality products</p>
            <div class="pt-5 pb-5">
                <?= do_shortcode('[products culumns=4 limit=4]') ?>
            </div>
        </div>
    </section>

    <section class="categories pt-5 pb-5">
        <div class="container">
            <h1 class="text-center pt-5">Categories</h1>
            <p class="text-center"> We Offer a variety choices for Watches </p>
            <div class="row pt-5">
                <div class="categories__col col-md-4 col-sm-12 mb-3">
                    <a href="#" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
                        <img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?= get_template_directory_uri() ?>/img/luxury-watches.jpg" alt="" loading="lazy">
                        <h2 class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center bg-primary-opacity-8 text-white">Luxury</h2>
                    </a>
                </div>
                <div class="categories__col col-md-4 col-sm-12 mb-3">
                    <a href="#" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
                        <img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?= get_template_directory_uri() ?>/img/sport-watches.webp" alt="" loading="lazy">
                        <h2 class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center bg-primary-opacity-8 text-white">Sports</h2>
                    </a>
                </div>
                <div class="categories__col col-md-4 col-sm-12 mb-3">
                    <a href="#" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
                        <img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?= get_template_directory_uri() ?>/img/vintage-watches.png" alt="" loading="lazy">
                        <h2 class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center bg-primary-opacity-8 text-white">Vintage</h2>
                    </a>
                </div>
            </div>
            <div class="row mb-3">
                <div class="categories__col col-md-4 col-sm-12 mb-3">
                    <a href="#" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
                        <img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?= get_template_directory_uri() ?>/img/women-watches.jpg" alt="" loading="lazy">
                        <h2 class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center bg-primary-opacity-8 text-white">Women</h2>
                    </a>
                </div>
                <div class="categories__col sale col-md-8 col-sm-12 mb-3">
                    <a href="#" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
                        <img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?= get_template_directory_uri() ?>/img/women-watches.jpg" alt="" loading="lazy">
                        <h2 class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center bg-sale text-white">Sales</h2>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="container pt-5">
        <div class="row d-flex justify-content-center">
            <h1 class="text-center pt-5">
                Special Offers
            </h1>
            <p class="text-center">We have the best offers you can ever see</p>
            <div class="pt-5 pb-5">
                <?= do_shortcode('[sale_products culumns=4 limit=4]') ?>
            </div>
        </div>
    </section>


</main><!-- #main -->

<?php
get_footer();
