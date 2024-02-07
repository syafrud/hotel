<?php
session_start();
if (!isset($_SESSION['email'])) {
} else if ($_SESSION['id_T'] == 2) {
  header('location: ./action/home.php');
}
?>
<html lang="">

<head>
    <style>
    .padding {
        padding: 20px;
    }
    </style>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@easepick/bundle@1.2.1/dist/index.umd.min.js"> -->
    </script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Simple and easy to edit Bed and Breakfast site template" />
    <meta name="author" content="Ansonika" />
    <title>Bed and Breakfast Single page</title>

    <!-- Favicons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" type="image/x-icon" href="./img/apple-touch-icon-57x57-precomposed.png" />
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72"
        href="./img/apple-touch-icon-72x72-precomposed.png" />
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
        href="./img/apple-touch-icon-114x114-precomposed.png" />
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
        href="./img/apple-touch-icon-144x144-precomposed.png" />

    <!-- GOOGLE WEB FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500&family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <!-- BASE CSS -->

    <link href="./css/boot.min.css" rel="stylesheet" type="text/css" />
    <link href="./css/stl.css" rel="stylesheet" type="text/css" />
    <link href="./css/vend.min.css" rel="stylesheet" type="text/css" />
    <!-- <link href="./css/datepicker_v2.css" rel="stylesheet" type="text/css" /> -->
    <!-- YOUR CUSTOM CSS -->
    <link rel="stylesheet" type="text/css" href="./css/cus.css">
</head>

<body data-bs-spy="scroll" data-bs-offset="120" data-bs-target="#mainNav">
    <div id="preloader">
        <div data-loader="circle-side">
        </div>
    </div>
    <!-- /Page Preload -->

    <header class="fixed_header menu_v1">
        <!-- Opacity Mask -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 col-5">
                    <a href="index.php" class="logo_normal">
                        <img src="./img/phoenix.png" width="50" alt="" class="img-fluid" />
                    </a>
                    <a href="index.php" class="logo_sticky">
                        <img src="./img/phoenix.png" width="50" alt="" class="img-fluid" />
                    </a>
                </div>
                <div class="col-md-9 col-7">
                    <div class="main-menu">
                        <a href="#" class="closebt open_close_menu">
                            <i class="bi bi-x">
                            </i>
                        </a>
                        <div class="logo_panel">
                            <img src="./img/logo_sticky.svg" width="180" height="34" alt="" />
                        </div>
                        <nav id="mainNav">
                            <ul>
                                <?php
                  if (!isset($_SESSION['email'])) {
                  ?>
                                <li>
                                    <a href="#about" class="js-scroll-trigger animated_link">About</a>
                                </li>
                                <li>
                                    <a href="#rooms" class="js-scroll-trigger animated_link">Rooms</a>
                                </li>
                                <li>
                                    <a href="#gallery" class="js-scroll-trigger animated_link">Gallery</a>
                                </li>

                                <li>
                                    <a id="contact" href="#contacts"
                                        class="js-scroll-trigger animated_link">Contacts</a>
                                </li>
                                <li>
                                    <a id="Book" href="#booking_section" class="js-scroll-trigger btn_1">Book Now</a>
                                </li>

                                <?php
                  } else{
                  ?>
                                <li>
                                    <a href="#about" class="js-scroll-trigger animated_link">About</a>
                                </li>
                                <li>
                                    <a href="#rooms" class="js-scroll-trigger animated_link">Rooms</a>
                                </li>
                                <li>
                                    <a href="#gallery" class="js-scroll-trigger animated_link">Gallery</a>
                                </li>

                                <li>
                                    <a id="contact" href="#contacts"
                                        class="js-scroll-trigger animated_link">Contacts</a>
                                </li>
                                <li>
                                    <a href="./view/reservasi-list.php"
                                        class="js-scroll-trigger animated_link">Reservasion</a>
                                </li>
                                <li>
                                    <a id="Book" href="#booking_section" class="js-scroll-trigger btn_1">Book Now</a>
                                </li>
                                <img src="./img/images/user.png" class="user-pic" onclick="toggleMenu()" />
                                <div class="sub-menu-wrap" id="subMenu">
                                    <div class="sub-menu">
                                        <div class="user-info">
                                            <img src="./img/images/user.png" alt="" />
                                            <h2><?php echo $_SESSION['username'] ?></h2>
                                        </div>
                                        <hr />
                                        <a href="#" class="sub-menu-link">
                                            <img src="./img/images/profile.png" />
                                            <div class="flex justify-between w-full">
                                                <div class="m-0 hover">Edit Profil</div>
                                                <div class="transform-5">
                                                    <span class="material-icons">
                                                        keyboard_arrow_right
                                                    </span>
                                                </div>
                                            </div>

                                        </a>
                                        <a href="#" class="sub-menu-link">
                                            <img src="./img/images/setting.png">
                                            <div class="flex justify-between w-full">
                                                <div class="m-0 hover">Setting & Privacy</div>
                                                <div class="transform-5">
                                                    <span class="material-icons">
                                                        keyboard_arrow_right
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="sub-menu-link">
                                            <img src="./img/images/help.png" />
                                            <div class="flex justify-between w-full">
                                                <div class="m-0 hover">Help & Support</div>
                                                <div class="transform-5">
                                                    <span class="material-icons">
                                                        keyboard_arrow_right
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="./action/logout.php" class="sub-menu-link">
                                            <img src="./img/images/logout.png" />
                                            <div class="flex justify-between w-full">
                                                <div class="m-0 hover">Logout</div>
                                                <div class="transform-5">
                                                    <span class="material-icons">
                                                        keyboard_arrow_right
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <?php
                  }
                  ?>
                            </ul>
                        </nav>
                    </div>
                    <div class="hamburger_2 open_close_menu float-end">
                        <div class="hamburger__box">
                            <div class="hamburger__inner">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container -->
    </header>
    <!-- End Header -->

    <main>
        <div id="carousel-home">
            <div class="owl-carousel owl-theme kenburns">
                <div class="owl-slide background-image cover" data-background="url(./img/slides/slide_2.jpg)">
                    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <div class="container">
                            <div class="row justify-content-center justify-content-md-start">
                                <div class="col-lg-6 static">
                                    <div class="slide-text white">
                                        <small class="owl-slide-animated owl-slide-title">Luxury Phoenix
                                            Experience</small>
                                        <h2 class="owl-slide-animated owl-slide-title-2">
                                            A unique experience where to stay
                                        </h2>
                                        <div class="owl-slide-animated owl-slide-title-3">
                                            <a class="btn_1 outline white mt-3 btn_scrollto" href="#about">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/owl-slide-->
                <div class="owl-slide background-image cover" data-background="url(./img/slides/slide_1.jpg)">
                    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 static">
                                    <div class="slide-text white text-center">
                                        <small class="owl-slide-animated owl-slide-title">Luxury Phoenix
                                            Experience</small>
                                        <h2 class="owl-slide-animated owl-slide-title-2">
                                            A truly immersive relax place
                                        </h2>
                                        <div class="owl-slide-animated owl-slide-title-3">
                                            <a class="btn_1 outline white mt-3 btn_scrollto" href="#about">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/owl-slide-->
                <div class="owl-slide background-image cover" data-background="url(./img/slides/slide_3.jpg)">
                    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.6)">
                        <div class="container">
                            <div class="row justify-content-center justify-content-md-end">
                                <div class="col-lg-6 static">
                                    <div class="slide-text text-end white">
                                        <small class="owl-slide-animated owl-slide-title">Luxury Phoenix
                                            Experience</small>
                                        <h2 class="owl-slide-animated owl-slide-title-2">
                                            The experience of unique holidays
                                        </h2>
                                        <div class="owl-slide-animated owl-slide-title-3">
                                            <a class="btn_1 outline white mt-3 btn_scrollto" href="#about">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/owl-slide-->
                </div>
            </div>
            <!-- /lang_wp -->
        </div>
        <!--/carousel-->

        <div class="bg_white" id="about">
            <div class="container margin_120_95">
                <div class="row justify-content-between flex-lg-row-reverse align-items-center">
                    <div class="col-lg-5">
                        <div class="parallax_wrapper">
                            <img src="./img/home_2.jpg" alt="" class="img-fluid rounded-img" />
                            <div data-cue="slideInUp" class="img_over">
                                <span data-jarallax-element="-30">
                                    <img src="./img/home_1.jpg" alt="" class="rounded-img" />
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="intro">
                            <div class="title">
                                <small>About us</small>
                                <h2>Makes your self at home and enjoy a unique experience</h2>
                            </div>
                            <p class="lead">
                                Experience comfort like never before, with our plush accommodations and exceptional
                                amenities, providing the perfect retreat for your journey.
                            </p>
                            <p>
                                Experience the warmth of our hospitality and the charm of our unique offerings. We aim
                                to provide you with a memorable stay, where every moment is crafted for your comfort and
                                enjoyment. Our commitment is to make your time with us truly exceptional.
                            </p>
                            <p>
                                <em>Syahrul...the Owner</em>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /Row -->
                <hr class="more_margin" />
                <div class="row mt-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="box_facilities no-border" data-cue="slideInUp">
                            <i class="icon-hotel-parking">
                            </i>
                            <h3>Private Parking</h3>
                            <p>
                                Secure and Convenient Parking Solutions for Your Peace of Mind.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="box_facilities no-border" data-cue="slideInUp">
                            <i class="icon-hotel-disable">
                            </i>
                            <h3>Accessible</h3>
                            <p>
                                Ensuring Comfort and Convenience for All
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="box_facilities no-border" data-cue="slideInUp">
                            <i class="icon-hotel-dog">
                            </i>
                            <h3>Pet Friendly</h3>
                            <p>
                                Your Pet's Perfect Hotel Retreat.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="box_facilities no-border" data-cue="slideInUp">
                            <i class="icon-hotel-patio">
                            </i>
                            <h3>Patio Garden</h3>
                            <p>
                                Experience Relaxation in our Hotel's Beautiful Patio Gardens.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /Row -->
            </div>
        </div>
        <!-- /About  -->

        <!-- /parallax_section_1-->

        <div class="container margin_120_95" id="rooms">
            <div class="title mb-4">
                <small data-cue="slideInUp">Luxury experience</small>
                <h2 data-cue="slideInUp" data-delay="200">Our Rooms</h2>
            </div>
            <div class="row_list_version_2" data-cue="slideInUp" data-delay="300">
                <div class="row g-0 align-items-center">
                    <div class="col-xl-8">
                        <div class="owl-carousel owl-theme carousel_item_1 kenburns rounded-img">
                            <div class="item">
                                <a data-fslightbox="rooms_1" data-type="image" href="./img/rooms/1.jpg">
                                    <img src="./img/rooms/1.jpg" alt="" />
                                </a>
                            </div>
                            <div class="item">
                                <a data-fslightbox="rooms_1" data-type="image" href="./img/rooms/opt_1.jpg">
                                    <img src="./img/rooms/opt_1.jpg" alt="" />
                                </a>
                            </div>
                        </div>
                        <!-- /carousel -->
                    </div>
                    <div class="col-xl-4">
                        <div class="box_item_info" data-jarallax-element="-25">
                            <small>From Rp 100.000/night</small>
                            <h2>Single Room</h2>
                            <p>
                                Experience the allure of a Single Room with modern elegance, a stunning bay window, and
                                your very own private view of Lucerne.
                            </p>
                            <div class="facilities clearfix">
                                <ul>
                                    <li>
                                        <i class="customicon-double-bed">
                                        </i> King Size Bed
                                    </li>
                                    <li>
                                        <i class="customicon-television">
                                        </i> 32 Inc TV
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /box_item_info -->
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->
            </div>
            <!-- /row_list -->
            <div class="row_list_version_2 inverted" data-cue="slideInUp">
                <div class="row g-0 align-items-center">
                    <div class="col-xl-8 order-xl-2">
                        <div class="owl-carousel owl-theme carousel_item_1 kenburns rounded-img">
                            <div class="item">
                                <a data-fslightbox="rooms_2" data-type="image" href="./img/rooms/2.jpg">
                                    <img src="./img/rooms/2.jpg" alt="" />
                                </a>
                            </div>
                            <div class="item">
                                <a data-fslightbox="rooms_2" data-type="image" href="./img/rooms/opt_2.jpg">
                                    <img src="./img/rooms/opt_2.jpg" alt="" />
                                </a>
                            </div>
                        </div>
                        <!-- /carousel -->
                    </div>
                    <div class="col-xl-4 order-xl-1">
                        <div class="box_item_info" data-jarallax-element="-25">
                            <small>From Rp 300.000/night</small>
                            <h2>Double Room</h2>
                            <p>
                                A spacious retreat with modern furnishings and a bay window offering a private view of
                                Lucerne.
                            </p>
                            <div class="facilities clearfix">
                                <ul>
                                    <li>
                                        <i class="customicon-double-bed">
                                        </i> King Size Bed
                                    </li>
                                    <li>
                                        <i class="customicon-television">
                                        </i> 32 Inc TV
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /box_item_info -->
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->
            </div>
            <!-- /row_list -->
            <div class="title text-center mb-5">
                <small data-cue="slideInUp">Luxury Phoenix Experience</small>
                <h2 data-cue="slideInUp" data-delay="100">Main Facilities</h2>
            </div>
            <div class="row mt-4">
                <div class="col-xl-3 col-md-6">
                    <div class="box_facilities no-border" data-cue="slideInUp">
                        <i class="customicon-bath-tub">
                        </i>
                        <h3>Large Bath Room</h3>
                        <p>
                            Spacious and well-appointed, providing ample comfort and relaxation.
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="box_facilities" data-cue="slideInUp">
                        <i class="customicon-wifi">
                        </i>
                        <h3>High Speed Wifi</h3>
                        <p>
                            Experience Blazing-Fast Connectivity with High-Speed WiFi.
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="box_facilities" data-cue="slideInUp">
                        <i class="customicon-air-condition">
                        </i>
                        <h3>Air Condition</h3>
                        <p>
                            Cool Comfort Awaits with Air Conditioning.
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="box_facilities" data-cue="slideInUp">
                        <i class="customicon-washing-machine">
                        </i>
                        <h3>Wahsing Machine</h3>
                        <p>
                            Your Personal Washing Machine for Added Convenience.
                        </p>
                    </div>
                </div>
            </div>
            <!-- /Row -->
        </div>
        <!-- /container-->

        <div class="marquee">
            <div class="track">
                <div class="content">
                    &nbsp;Relax Enjoy Luxury Holiday Travel Discover Experience Relax
                    Enjoy Luxury Holiday Travel Discover Experience Relax Enjoy Luxury
                    Holiday Travel Discover Experience Relax Enjoy Luxury Holiday Travel
                    Discover Experience
                </div>
            </div>
        </div>
        <!-- /marquee-->

        <div class="bg_white">
            <div class="pinned-image pinned-image--medium">
                <div class="pinned-image__container" id="section_video">
                    <video loop="loop" muted="muted" id="video_home">
                        <source src="video/video_1.mp4" type="video/mp4" />
                        <source src="video/video_1.webm" type="video/webm" />
                        <source src="video/video_1.ogv" type="video/ogg" />
                    </video>
                    <div class="pinned-image__container-overlay">
                    </div>
                </div>
                <div class="pinned_over_content">
                    <div class="title white">
                        <small data-cue="slideInUp" data-delay="200">Luxury Phoenix Experience</small>
                        <h2 data-cue="slideInUp" data-delay="300">
                            Unique and Luxury Rooms<br />for your stay
                        </h2>
                    </div>
                </div>
            </div>
            <!-- /pinned content -->
        </div>
        <!-- /bg_white-->

        <div class="container margin_120" id="gallery">
            <div class="row">
                <div class="title col-12 text-center mb-5">
                    <small data-cue="slideInUp">Luxury Phoenix Experience</small>
                    <h2 data-cue="slideInUp" data-delay="100">Interior Gallery</h2>
                </div>
            </div>
            <div data-cues="zoomIn">
                <div class="owl-carousel owl-theme carousel_item_centered kenburns rounded-img">
                    <div class="item">
                        <img src="./img/gallery/1.jpg" alt="" />
                    </div>
                    <div class="item">
                        <img src="./img/gallery/2.jpg" alt="" />
                    </div>
                    <div class="item">
                        <img src="./img/gallery/3.jpg" alt="" />
                    </div>
                    <div class="item">
                        <img src="./img/gallery/4.jpg" alt="" />
                    </div>
                    <div class="item">
                        <img src="./img/gallery/5.jpg" alt="" />
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a data-fslightbox="gallery_1" data-type="image" href="./img/gallery/1.jpg" class="btn_1 outline">
                    FullScreen Gallery
                </a>
                <a data-fslightbox="gallery_1" data-type="image" href="./img/gallery/2.jpg">
                </a>
                <a data-fslightbox="gallery_1" data-type="image" href="./img/gallery/3.jpg">
                </a>
                <a data-fslightbox="gallery_1" data-type="image" href="./img/gallery/4.jpg">
                </a>
                <a data-fslightbox="gallery_1" data-type="image" href="./img/gallery/5.jpg">
                </a>
            </div>
        </div>
        <!-- /container gallery-->

        <!-- /bg_white -->

        <div class="container margin_120_95" id="contacts">
            <div class="row justify-content-between">
                <div class="col-xl-4">
                    <div data-cue="slideInUp">
                        <div class="title">
                            <small>Luxury Phoenix Experience</small>
                            <h2>Address</h2>
                        </div>
                        <p>Sawit Panggungharjo Sewon Bantul<br />Yogyakarta - Indonesia</p>
                        <div class="phone_element no_borders">
                            <a href="tel://423424234">
                                <span class="material-icons md-36"> call
                                </span>
                                <span>
                                    <em>Bookings</em>+62 8591 0690 4780</span>
                            </a>
                        </div>
                        <div class="phone_element no_borders">
                            <a href="mailto:info@domain.com">
                                <span class="material-icons md-36"> email </span>
                                <span>
                                    <em>Questions</em>syafruddin0234@.com</span>
                            </a>
                        </div>
                        <div class="social mt-1">
                            <ul>
                                <li>
                                    <a href="#0">
                                        <img src="./img/instagram.png" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <img src="./img/whatsapp.png" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <img src="./img/facebook.png" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <img src="./img/twitter.png" alt="" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7" id="booking_section">
                    <ul class="nav nav-tabs" id="customTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="first_tab" data-bs-toggle="tab"
                                data-bs-target="#first_tab_pane" type="button" role="tab" aria-controls="first_tab_pane"
                                aria-selected="false">
                                Check Availability
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="second_tab" data-bs-toggle="tab"
                                data-bs-target="#second_tab_pane" type="button" role="tab"
                                aria-controls="second_tab_pane" aria-selected="true">
                                Contact Us
                            </button>
                        </li>
                    </ul>
                    <!-- /tabs -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="first_tab_pane" role="tabpanel"
                            aria-labelledby="first_tab" tabindex="0">
                            <div class="booking_wrapper">
                                <div id="message-booking">
                                </div>
                                <form method="post" id="bookingform" class="padding">

                                    <?php                            
                include "./action/koneksi.php";
                if (!isset($_SESSION['email'])) {
                        ?>
                                    <input type="hidden" name="tgl" id="date_booking" />
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="custom_select" onchange="hitungHasil()">
                                                <select class="wide" id="rooms_booking" name="kasur">
                                                    <option value="" disabled selected>Select Room</option>
                                                    <?php
                                                     // Koneksi ke database
                                                    include "./action/koneksi.php";

                                                    // Query untuk mengambil data id_bed, jenis, dan harga dari bed
                                                    $query = "SELECT id_bed, jenis, harga FROM bed";
                                                    $result = mysqli_query($koneksi, $query);
                                                    $jenisSelec = "";
                                                    if (!empty($_GET['id'])) {
                                                    $jenisSelec = $_GET['id'];
                                                    }
                                                    // Loop untuk membuat opsi dropdown
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                            $id_bed = $row['id_bed'];
                                                                    $jenis = $row['jenis'];
                                                            $harga = $row['harga'];
                                                            $selected = " ";
                                                            if ($id_bed == $jenisSelec)
                                                            $selected = "selected";
                                                            // Masukkan nilai harga ke dalam atribut data-harga
                                                            echo "<option value='$id_bed' data-harga='$harga' " . $selected . ">$jenis</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="custom_select" id="kamarDropdown">
                                                <select class="wide">
                                                    <option value="" disabled selected>Pilih Kamar</option>
                                                    <?php
                                if (!empty($_GET['id'])) {

                                $id_bed = $_GET['id'];

                                $query = "SELECT bed.id_bed, kamar.id_k, kamar.no_kamar FROM kamar INNER JOIN bed ON bed.id_bed = kamar.id_bed LEFT JOIN reserfasi ON kamar.id_k = reserfasi.id_k LEFT JOIN checkout ON checkout.id_RS=reserfasi.id_RS WHERE checkout.id_RS IS NULL and bed.id_bed=" . $id_bed;
                                $result = mysqli_query($koneksi, $query);
                                while ($row = mysqli_fetch_assoc($result)) {
                                $id_k = $row['id_k'];
                                $nama = $row['no_kamar'];
                                $selected = " ";
                                
                                if ($_GET['id_1'] == $row['id_k']) {
                                        $selected = "selected";
                                }

                                // Masukkan nilai harga ke dalam atribut data-harga
                                echo "<option value='$id_k'  " . $selected . ">$nama</option>";
                                }
                                } 
                                ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="number" id="lama" oninput="hitungHasil()"
                                                    class="form-control" placeholder="Stay" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="number" id="harga" class="form-control" placeholder="Price"
                                                    disabled />
                                            </div>
                                        </div>
                                    </div>

                                    <hr />
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="row align-items-center">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12" align="center">
                                                <a class="btn_1 outline" href="./view/login.php">Login</a>
                                            </div>
                                        </div>
                                        <?php
                }
                else{
                        include "./action/koneksi.php";
                                ?>
                                        <input type="hidden" name="tgl" id="date_booking" />
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="custom_select" onchange="hitungHasil()">
                                                    <select class="wide" id="rooms_booking" name="kasur">
                                                        <option value="" disabled selected>Select Room</option>
                                                        <?php
                                                     // Koneksi ke database
                                                    include "./action/koneksi.php";

                                                    // Query untuk mengambil data id_bed, jenis, dan harga dari bed
                                                    $query = "SELECT id_bed, jenis, harga FROM bed";
                                                    $result = mysqli_query($koneksi, $query);
                                                    $jenisSelec = "";
                                                    if (!empty($_GET['id'])) {
                                                    $jenisSelec = $_GET['id'];
                                                    }
                                                    // Loop untuk membuat opsi dropdown
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                            $id_bed = $row['id_bed'];
                                                                    $jenis = $row['jenis'];
                                                            $harga = $row['harga'];
                                                            $selected = " ";
                                                            if ($id_bed == $jenisSelec)
                                                            $selected = "selected";
                                                            // Masukkan nilai harga ke dalam atribut data-harga
                                                            echo "<option value='$id_bed' data-harga='$harga' " . $selected . ">$jenis</option>";
                                                    }
                                                    ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="custom_select" id="kamarDropdown">
                                                    <select class="wide">
                                                        <option value="" disabled selected>Pilih Kamar</option>
                                                        <?php
                                if (!empty($_GET['id'])) {

                                $id_bed = $_GET['id'];

                                $query = "SELECT bed.id_bed, kamar.id_k, kamar.no_kamar FROM kamar INNER JOIN bed ON bed.id_bed = kamar.id_bed LEFT JOIN reserfasi ON kamar.id_k = reserfasi.id_k LEFT JOIN checkout ON checkout.id_RS=reserfasi.id_RS WHERE checkout.id_RS IS NULL and bed.id_bed=" . $id_bed;
                                $result = mysqli_query($koneksi, $query);
                                while ($row = mysqli_fetch_assoc($result)) {
                                $id_k = $row['id_k'];
                                $nama = $row['no_kamar'];
                                $selected = " ";
                                
                                if ($_GET['id_1'] == $row['id_k']) {
                                        $selected = "selected";
                                }

                                // Masukkan nilai harga ke dalam atribut data-harga
                                echo "<option value='$id_k'  " . $selected . ">$nama</option>";
                                }
                                } 
                                ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="number" id="lama" oninput="hitungHasil()"
                                                        class="form-control" placeholder="Stay" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="number" id="harga" class="form-control"
                                                        placeholder="Price" disabled />
                                                </div>
                                            </div>
                                        </div>

                                        <hr />
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="row align-items-center">
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <p class="text-end">
                                                    <input class="btn_1 outline" type="submit" value="Book Now"
                                                        id="submit-booking" />
                                                </p>
                                            </div>
                                        </div>
                                        <?php
                        }
                        
        ?>

                                </form>
                            </div>
                            <!-- / booking_wrapper -->
                        </div>
                        <!-- /tab_booking-->
                        <div class="tab-pane fade" id="second_tab_pane" role="tabpanel" aria-labelledby="second_tab"
                            tabindex="0">
                            <div class="contacts_wrapper">
                                <div id="message-contact">
                                </div>
                                <form method="post" action="" id="contactform" autocomplete="off">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-floating mb-4">
                                                <input class="form-control" type="text" id="name_contact"
                                                    name="name_contact" placeholder="Name" />
                                                <label for="name_contact">Name</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating mb-4">
                                                <input class="form-control" type="text" id="lastname_contact"
                                                    name="lastname_contact" placeholder="Last Name" />
                                                <label for="lastname_contact">Last name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-floating mb-4">
                                                <input class="form-control" type="email" id="email_contact"
                                                    name="email_contact" placeholder="Email" />
                                                <label for="email_contact">Email</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating mb-4">
                                                <input class="form-control" type="text" id="phone_contact"
                                                    name="phone_contact" placeholder="Telephone" />
                                                <label for="phone_contact">Telephone</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                    <div class="form-floating mb-4">
                                        <textarea class="form-control" placeholder="Message" id="message_contact"
                                            name="message_contact">
                                                    </textarea>
                                        <label for="message_contact">Message</label>
                                    </div>
                                    <hr />
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="row align-items-center">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <p class="text-end">
                                                <input class="btn_1 outline" type="submit" value="Contact"
                                                    id="submit-contact" />
                                            </p>
                                        </div>
                                    </div>
                                    <!--  -->
                                </form>
                            </div>
                            <!-- /tab_contacts-->
                        </div>
                        <!-- /contacts_wrapper-->
                    </div>
                    <!-- /tab_content-->
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </main>

    <!--/map_contact -->
    <div class="copy">
        <div class="container">© PHOENIX - by <a href="#">Syahrul</a>
        </div>
    </div>
    <!--/copyright line -->

    <!-- COMMON SCRIPTS -->
    <script src="./js/scripts.js">
    </script>
    <script src="./js/function.js">
    </script>
    <script src="./dd.js">
    </script>
    <script src="./js/jq.easing.min.js">
    </script>
    <script src="./js/scroll.js">
    </script>
    <!-- SPECIFIC SCRIPTS -->
    <script src="./js/slider.js">
    </script>
    <script>
    // Menambahkan event listener untuk perubahan pada dropdown NIS
    $("#rooms_booking").change(function() {
        var selectedNIS = this.value;
        <?php
        include "./action/koneksi.php";
        $data = "var guruData = [";
        $query = "SELECT DISTINCT bed.id_bed, bed.harga, kamar.id_k, kamar.no_kamar
        FROM kamar
        LEFT JOIN bed ON bed.id_bed = kamar.id_bed
        LEFT JOIN reserfasi ON kamar.id_k = reserfasi.id_k
        LEFT JOIN transaksi ON transaksi.id_RS = reserfasi.id_RS
        LEFT JOIN checkout ON checkout.id_transaksi = transaksi.id_transaksi
        LEFT JOIN history ON checkout.id_C = history.id_C
        WHERE reserfasi.id_k IS NULL AND history.id_C IS NULL OR history.id_C IS NOT null
         ;";
        $result = mysqli_query($koneksi, $query);
        $first = true;
        $jenisSelec = "";
        if (!empty($_GET['id_1'])) {
            $jenisSelec = $_GET['id_1'];
        }
        while ($row = mysqli_fetch_assoc($result)) {
            if (!$first) {
                $data .= ",";
            }
            $data .= "{ id_bed: '" . $row['id_bed'] . "', harga: '" . $row['harga'] . "', id_k: '" . $row['id_k'] . "', no_kamar: '" . $row['no_kamar'] . "', selected:'" . $jenisSelec . "' }";
            $first = false;
        }
        $data .= "];";
        echo $data;
        ?>

        var select = $('<select  class="wide" id="kamar1"  >');
        select.append(
            $("<option>", {
                value: "",
                text: "Pilih Kamar",
                selected: true,
                disabled: true,
            })
        );
        $.each(guruData, function(index, option) {
            if (option.id_bed === selectedNIS) {
                select.append(
                    $("<option>", {
                        value: option.id_k,
                        text: option.no_kamar,
                    })
                );
            }
        });
        $("#kamarDropdown").empty();
        // // Append the select element to the target element with ID "kamarDropdown"
        $("#kamarDropdown").append(select);
        $("select").niceSelect();

        $("select").niceSelect("destroy"); //destroy the plugin
        $("select").niceSelect(); //apply again
    });
    $("#submit-booking").click(function(e) {
        e.preventDefault();
        var kasur = $("#rooms_booking").val();
        var kamar = $("#kamar1").val();
        var lama = $("#lama").val();
        var tgl = $("#date_booking").val();
        var tglCheckout = new Date(tgl);
        tglCheckout.setDate(tglCheckout.getDate() + parseInt(lama)); // Pastikan 'lama' diubah menjadi integer

        var tahun = tglCheckout.getFullYear();
        var bulan = (tglCheckout.getMonth() + 1).toString().padStart(2,
            '0'); // Tambah 1 karena indeks bulan dimulai dari 0, pad dengan '0' jika perlu
        var tanggal = tglCheckout.getDate().toString().padStart(2, '0');

        var tanggalFormat = tahun + '-' + bulan + '-' + tanggal;

        console.log(tanggalFormat);
        console.log(kasur);
        console.log(kamar);
        console.log(lama);
        console.log(tgl);
        $.ajax({
            type: "POST",
            url: "./action/input_aksi_reservasi.php", // Adjust the path
            data: {
                kasur: kasur,
                kamar: kamar,
                lama: lama,
                tgl: tgl,
                tanggalFormat: tanggalFormat
            },
            success: function(response) {
                alert(response.message);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                // console.log("AJAX Error: " + errorThrown);
            },
        });
    });
    </script>
    <script>
    // Fungsi untuk menghitung dan menampilkan hasil perkalian
    function hitungHasil() {
        // Mengambil nilai NIS dari input
        var nis = document.getElementById("lama").value;
        // Mengambil nilai jenis kasur dari input
        var kasur = document.getElementById("rooms_booking");
        var harga = kasur.options[kasur.selectedIndex].getAttribute(
            "data-harga"
        );

        // Menghitung hasil perkalian dengan harga (yang telah diambil dari PHP)
        var hasil = nis * harga;

        // Mengatur nilai input tersembunyi "hasil_kali"
        var inputElement = document.getElementById("harga");
        inputElement.placeholder = hasil;
    }
    </script>
    <script>
    $(document).ready(function() {
        $("#contact").click(function() {
            // Use jQuery to select and manipulate the elements
            var $secondTab = $("#second_tab");
            $secondTab.attr("tabindex", 1);
            $secondTab.attr("aria-selected", true);
            $secondTab.addClass("active");

            var $secondTabPane = $("#second_tab_pane");
            $secondTabPane.addClass("show");
            $secondTabPane.addClass("active");

            var $firstTab = $("#first_tab");
            $firstTab.attr("tabindex", 0);
            $firstTab.attr("aria-selected", false);
            $firstTab.removeClass("active");

            var $firstTabPane = $("#first_tab_pane");
            $firstTabPane.removeClass("show");
            $firstTabPane.removeClass("active");
        });
        $("#Book").click(function() {
            // Use jQuery to select and manipulate the elements
            var $secondTab = $("#second_tab");
            $secondTab.attr("tabindex", 0);
            $secondTab.attr("aria-selected", false);
            $secondTab.removeClass("active");

            var $secondTabPane = $("#second_tab_pane");
            $secondTabPane.removeClass("show");
            $secondTabPane.removeClass("active");

            var $firstTab = $("#first_tab");
            $firstTab.attr("tabindex", 1);
            $firstTab.attr("aria-selected", true);
            $firstTab.addClass("active");

            var $firstTabPane = $("#first_tab_pane");
            $firstTabPane.addClass("show");
            $firstTabPane.addClass("active");
        });
    });
    </script>
    <script>
    let subMenu = document.getElementById("subMenu");

    function toggleMenu() {
        subMenu.classList.toggle("open-menu");
    }
    </script>

</body>

</html>