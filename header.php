<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Test Assignment</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <?php wp_head(); ?>
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js" integrity="sha512-VEBjfxWUOyzl0bAwh4gdLEaQyDYPvLrZql3pw1ifgb6fhEvZl9iDDehwHZ+dsMzA0Jfww8Xt7COSZuJ/slxc4Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="navbar-brand-div">
                <div class="navbar-brand" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="500" data-aos-once="true">
                    <a href="#"></a>
                </div>
                <div class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapseContent" aria-controls="navbarCollapseContent" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </div>
            <div class="collapse navbar-collapse float-end" id="navbarCollapseContent">
                <ul class="navbar-menu navbar-icons navbar-nav ms-auto mb-2 mb-lg-0 w-100">
                    <li class="nav-item w-100 nav-custom-search-item" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500" data-aos-once="true">
                        <div class="navbar-search-input">
                            <div class="input-group">
                                <input type="text" class="form-control custom-form-control" name="query_search" placeholder="Search Here..." aria-label="Search Here...">
                                <span class="input-group-text custom-input-group-text"><i class="las la-search"></i></span>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown navbar-items" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500" data-aos-once="true">
                        <div class="navbar-button navbar-button-dropdown d-flex align-items-center" id="lang-dropdown">
                            FR <i class="las la-angle-down icon-rotates ms-1"></i>
                        </div>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first" href="#">FR</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="#">EN</a></li>
                        </ul>
                    </li>
                    <li class="navbar-items shopping-bag-icon" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500" data-aos-once="true">
                        <svg width="17" height="22" viewBox="0 0 17 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.4718 18.6178L15.2717 6.16309C15.2394 5.81997 14.9355 5.55797 14.5711 5.55797H12.4608V4.22805C12.4608 3.15879 12.0219 2.15603 11.227 1.40462C10.4448 0.663857 9.35591 0.238281 8.24027 0.238281C5.91333 0.238281 4.0197 2.02836 4.0197 4.22805V5.55797H1.90942C1.54504 5.55797 1.24116 5.81997 1.2088 6.16309L0.0115681 18.6165C-0.0601816 19.3599 0.204307 20.1007 0.736099 20.6513C1.26789 21.2019 2.02478 21.5171 2.81402 21.5171H13.6679C14.4558 21.5171 15.2126 21.2019 15.7444 20.6526C16.2776 20.102 16.5407 19.3599 16.4718 18.6178ZM11.054 5.55797H5.42656V4.22805C5.42656 2.76115 6.68851 1.5682 8.24027 1.5682C8.9859 1.5682 9.71184 1.85015 10.2324 2.34355C10.7628 2.84493 11.054 3.51388 11.054 4.22805V5.55797Z" fill="#4A5568"/>
                        </svg>
                        <span class="shopping-bag-indicator">1</span>
                    </li>
                    <li class="navbar-items account-icon" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500" data-aos-once="true">
                        <svg width="21" height="23" viewBox="0 0 21 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.072 11.3629C6.93419 11.3629 4.39052 8.81922 4.39052 5.68145C4.39052 2.54367 6.93419 0 10.072 0C13.2097 0 15.7534 2.54367 15.7534 5.68145C15.7534 8.81922 13.2097 11.3629 10.072 11.3629Z" fill="#4A5568"/>
                            <path d="M0.0925274 15.8964C-0.0260429 16.0841 -0.035923 16.3311 0.0925274 16.5288C2.19713 19.8191 5.88266 22.0027 10.0721 22.0027C14.2616 22.0027 17.9471 19.8191 20.0517 16.5288C20.1703 16.341 20.1703 16.094 20.0517 15.8964C18.787 13.9202 16.959 12.3492 14.7951 11.4105C14.5679 11.3117 14.311 11.371 14.1331 11.5488C13.1055 12.6061 11.6629 13.2582 10.0721 13.2582C8.48131 13.2582 7.03871 12.6061 6.01111 11.5488C5.84314 11.371 5.57636 11.3117 5.3491 11.4105C3.17533 12.3492 1.34739 13.9202 0.0925274 15.8964Z" fill="#4A5568"/>
                        </svg>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

