<?php get_header(); ?>
<?php include 'products.php'; ?>

    <div class="content">
        <div class="hero">
            <div class="row d-flex align-items-center">
                <div class="col-xl-8 col-md-12">
                    <div class="hero-content" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="500" data-aos-once="true">
                        <div>
                            <h1>
                                <span class="hero-sm-title">Refresh Your</span> <br>
                                TV EXPERIENCE
                            </h1>
                        </div>
                    </div>
                    <div class="hero-brands mt-4" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-once="true">
                        <img src="<?php bloginfo('template_url'); ?>/images/Sony-Logo-white1.png">
                        <img src="<?php bloginfo('template_url'); ?>/images/sennheiser-logo-white1.png">
                        <img src="<?php bloginfo('template_url'); ?>/images/Marshall-logo-white1.png">
                        <img src="<?php bloginfo('template_url'); ?>/images/Panasonic-logo-white2.png">
                    </div>
                </div>
                <div class="col-xl-4 col-md-12">
                    <div class="hero-img" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500" data-aos-once="true">
                        <img src="<?php bloginfo('template_url'); ?>/images/tv.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="content-body-wrapper">
                <div class="row">
                    <div class="offset-xl-0 col-xl-3 offset-lg-1 col-lg-10 offset-md-1 col-md-10 offset-sm-0 col-sm-12">
                        <div class="card" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-once="true">
                            <div class="card-header">
                                <span class="span">FILTER BY:</span>
                                <button class="skew-button"><span>Reset</span></button>
                            </div>
                            <div class="card-body p-0">
                                <div class="accordion" id="filterPrice">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Price
                                        </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#filterPrice">
                                            <div class="accordion-body price-range">
                                                <span class="price-range-selected">Price Range Selected</span> <br>
                                                <span class="range-values">€ <span id="range1">300</span> - € <span id="range2">1.500</span> </span>
                                                <div class="container px-0">
                                                    <div class="slider-track"></div>
                                                    <input type="range" min="0" max="1500" value="300" id="slider-1" oninput="slideOne()">
                                                    <input type="range" min="0" max="1500" value="1500" id="slider-2" oninput="slideTwo()">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Brand
                                        </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="all" id="all-brands" checked>
                                                    <label class="form-check-label" for="all-brands">
                                                        All
                                                    </label>
                                                </div>
                                                <?php foreach($brands as $brand) 
                                                { ?>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="<?= $brand['name'] ?>" id="<?= $brand['name'].$brand['id'] ?>">
                                                    <label class="form-check-label" for="<?= $brand['name'].$brand['id'] ?>">
                                                        <?= $brand['name'] ?>
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Product color
                                        </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse product-color-list" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="d-flex flex-wrap py-2">
                                                    <?php foreach($productColors as $color) 
                                                    { ?>
                                                    <?php if ($color['name'] == 'White'): ?>
                                                        <label for="<?= $color['name'] ?>" class="product-color" style="background-color: <?= $color['hex'] ?>; border: 1px solid rgba(0, 0, 0, 0.27)"></label>
                                                    <?php elseif ($color['name'] == 'Black' || $color['name'] == 'Grey'): ?>
                                                        <label for="<?= $color['name'] ?>" class="product-color" style="background-color: <?= $color['hex'] ?>; color: #fff;"></label>
                                                    <?php else: ?>
                                                        <label for="<?= $color['name'] ?>" class="product-color" style="background-color: <?= $color['hex'] ?>;" ></label>
                                                    <?php endif; ?>
                                                        <input type="checkbox" id="<?= $color['name'] ?>" class="d-none product-color-checkbox" data-color="<?= $color['name'] ?>" name="color_<?= $color['name'] ?>" value="<?= $color['name'] ?>">
                                                    <?php } ?>
                                                </div>
                                                <div class="select-color my-2">
                                                    <div class="mb-3">
                                                        <span>Selected Colors</span>
                                                    </div>
                                                    <div class="display-selected-colors">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="offset-xl-0 col-xl-9 offset-lg-1 col-lg-10 offset-md-1 col-md-10 offset-sm-0 col-sm-12">
                        <div class="row product-cards">
                            <?php foreach($products as $product)
                            { ?>
                                <div class="col-xl-4 col-md-6 col-sm-12 mb-4">
                                    <div class="card" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-once="true">
                                        <div class="card-custom-header mx-auto my-3">
                                            <img class="product-img" src="<?php bloginfo('template_url'); ?>/images/product-tv.png">
                                        </div>
                                        <div class="card-custom-body">
                                            <div class="title">
                                                <span>
                                                    <?= $product['title'] ?>
                                                </span>
                                            </div>
                                            <div class="reviews">
                                                <div>
                                                    <span><i class="las la-star"></i> 4.5 </span>
                                                    (15) Reviews
                                                </div>
                                                <svg class="compare-icon" width="40" height="25" viewBox="0 0 31 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path class="bottom-arrow" d="M10.8154 13.8861H0V16.9719H10.8154V21.6004L16.9714 15.429L10.8154 9.25757V13.8861Z" fill="#7F9CF5"/>
                                                    <path class="top-arrow" d="M20.0417 4.62858V0L13.8857 6.17143L20.0417 12.3429V7.71429H30.8572V4.62858H20.0417Z" fill="#7F9CF5"/>
                                                </svg>
                                            </div>
                                            <div class="characteristic">
                                                <ul>
                                                    <li>M.2 80mm</li>
                                                    <li>3d v-nand (TLC)</li>
                                                    <li>PCI-e 3.0 x4</li>
                                                </ul>
                                                <div class="wish-btn">
                                                    <i class="lar la-heart"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-custom-footer">
                                            <span>€ 321.74</span>
                                            <div class="add-to-cart">
                                                <svg width="37" height="44" viewBox="0 0 37 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g class="cart">
                                                        <path d="M26.9823 29.6058L25.0165 9.70516C24.9635 9.15691 24.4657 8.73828 23.8688 8.73828H20.412V6.61328C20.412 4.90478 19.693 3.30253 18.3909 2.10191C17.1096 0.918281 15.3258 0.238281 13.4983 0.238281C9.68658 0.238281 6.58464 3.09853 6.58464 6.61328V8.73828H3.1278C2.53092 8.73828 2.03313 9.15691 1.98013 9.70516L0.0189496 29.6037C-0.098583 30.7915 0.334675 31.9752 1.2058 32.8549C2.07692 33.7347 3.31677 34.2383 4.60963 34.2383H22.3893C23.6799 34.2383 24.9197 33.7347 25.7908 32.857C26.6643 31.9773 27.0952 30.7915 26.9823 29.6058ZM18.1074 8.73828H8.8892V6.61328C8.8892 4.26941 10.9564 2.36328 13.4983 2.36328C14.7197 2.36328 15.9089 2.81378 16.7616 3.60216C17.6304 4.40328 18.1074 5.47216 18.1074 6.61328V8.73828Z" fill="#4A5568"/>
                                                    </g>
                                                    <g class="check">
                                                        <circle cx="22.5" cy="29.5" r="14" fill="#F0FFF4" stroke="#9AE6B4"/>
                                                        <path d="M20.1313 31.8896L17.0495 28.78L16 29.8315L20.1313 34L29 25.0515L27.9579 24L20.1313 31.8896Z" fill="#2F855A"/>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="content-footer">
            <div class="row m-0 p-0 d-flex align-items-center">
                <div class="col-xl-3 px-0">
                    <div class="text">
                        <span>More than 1000 brands</span>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="brand-slider" style="position: relative">
                        <div class="swiper-icon-prev">
                            <svg class="slide-indicators" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle class="slide-icon" cx="24" cy="24" r="23.5" transform="rotate(180 24 24)" stroke="black" fill="#fff"/>
                                <path d="M27 18L21 24L27 30" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>

                        <div class="swiper slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide slide">
                                    <img src="<?php bloginfo('template_url'); ?>/images/ps4.png">
                                </div>
                                <div class="swiper-slide slide">
                                    <img src="<?php bloginfo('template_url'); ?>/images/lg.png">
                                </div>
                                <div class="swiper-slide slide">
                                    <img src="<?php bloginfo('template_url'); ?>/images/samsung.png">
                                </div>
                                <div class="swiper-slide slide">
                                    <img src="<?php bloginfo('template_url'); ?>/images/garmin.png">
                                </div>
                                <div class="swiper-slide slide">
                                    <img src="<?php bloginfo('template_url'); ?>/images/tefal.png">
                                </div>
                            </div>
                        </div>

                        <div class="swiper-icon-next">
                            <svg class="slide-indicators" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle class="slide-icon" cx="24" cy="24" r="23.5" stroke="black"/>
                                <path d="M21 30L27 24L21 18" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php bloginfo('template_url'); ?>/src/_price-range-slider.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script type="module">
        import Swiper from 'https://unpkg.com/swiper@8/swiper-bundle.esm.browser.min.js';

        var swiperTestimonials = new Swiper(".slider", {
            loop: true,
            grabCursor:true,
            pagination: {
            el: ".swiper-pagination",
            clickable: true,
            },
            preventClicks: true,
            navigation: {
                nextEl: ".swiper-icon-next",
                prevEl: ".swiper-icon-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                992: {
                    slidesPerView: 3,
                },
                1199: {
                    slidesPerView: 4,
                },
                1440: {
                    slidesPerView: 5,
                },
            },
        });
    </script>

    <script>
        function removeEl(el, color)
        {
            $(color).prev().find('.las').remove();
            $(color).prop('checked', false);
            $(color).removeAttr('checked');
            $(el).parent().remove();
        }
    </script>
    <script>
        AOS.init();
    </script>
<?php get_footer(); ?>
