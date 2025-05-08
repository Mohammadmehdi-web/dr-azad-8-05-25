<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Dr. Azad Sexologist Clinic, Best Sexologist">
  <!-- Favicon Icon -->
  <link rel="icon" href="assets/img/logo.jpg">
  <!-- Site Title -->
  <title>Dr. Azad Sexologist Clinic | Home Best Sexologist</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/fontawesome.min.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/css/odometer.css">
  <link rel="stylesheet" href="assets/css/slick.min.css">
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


  <style>
    [type="button"]:not(:disabled),
    [type="reset"]:not(:disabled),
    [type="submit"]:not(:disabled),
    button:not(:disabled) {
      cursor: pointerm !important;
    }

    .card {
      border: none;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
      border-radius: 16px;
      overflow: hidden;
      transition: transform 0.2s ease;
      padding: 10px;
      border: 1px solid #cdb16c;
      margin-top: 5px;
      background: white;
    }

    .carousel-inner img {
      height: 200px;
      object-fit: cover;
    }

    .gap-3 {
      font-size: 13px;
      color: black;
    }

    .card:hover {
      transform: translateY(-4px);
    }

    .image-swiper img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-top-left-radius: 16px;
      border-top-right-radius: 16px;
      background-color: #f1f1f1;
    }

    .clinic-title {
      font-weight: 600;
      font-size: 18px;
      margin-bottom: 6px;
      color: #212529;
    }

    .card-body {
      padding: 16px;
    }

    .address {
      font-size: 14px;
      color: #555;
      margin-bottom: 8px;
    }

    .timing {
      font-size: 14px;
      color: #333;
      margin-left: 8px;
    }

    .footer-info {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 12px 16px;
      border-top: 1px solid #eee;
      background-color: #f9f9f9;
    }

    .doctor-name {
      color: #007bff;
      font-weight: 500;
      font-size: 14px;
    }

    .book-btn {
      background: #cdb16c;
      color: white;
      padding: 8px 16px;
      font-size: 0.85rem;
      border-radius: 25px;
      border: none;
      transition: all 0.3s ease;
      font-size: 12px;
    }

    .book-btn:hover {
      background-color: #e0a800;
      color: #fff;
      cursor: pointer;
    }

    .text-info {
      background: #cdb16c;
      padding: 7px 15px;
      border-radius: 25px;
      color: white !important;
      font-size: 12px;
    }

    .text-dark {
      --bs-text-opacity: 1;
      color: rgb(0 3 6) !important;
    }

    .text-info:hover {
      background-color: #e0a800;
      color: #fff;
    }

    .icon-text {
      display: flex;
      align-items: center;
      margin-bottom: 6px;
      font-size: 14px;
      color: #444;
    }

    .icon-text i {
      color: green;
      margin-right: 6px;
    }

    .image-swiper {
      width: 100%;
      height: 200px;
    }

    .image-swiper img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .card-body {
      padding: 15px;
    }

    .card-body h5 {
      margin-bottom: 10px;
      font-weight: bold;
    }

    .btn-group .btn {
      font-size: 0.875rem;
      padding: 6px 12px;
      margin-right: 5px;
      margin-top: 8px;
    }

    /* Pagination Dots Customization */
    .swiper-pagination {
      text-align: center;
      margin-top: 20px;
    }

    .swiper-pagination-bullet {
      background-color: #007bff;
      opacity: 0.6;
    }

    .swiper-pagination-bullet-active {
      background-color: #0056b3;
      opacity: 1;
    }

    .swiper-pagination {
      position: relative;
      bottom: 8px;
      left: 0;
      width: 100%;
      text-align: center;
      z-index: 10;
    }

    .swiper-pagination-bullet {
      background: #007bff;
      opacity: 0.5;
    }

    .swiper-pagination-bullet-active {
      opacity: 1;
    }

    .d-inline-block {
      display: inline-block !important;
      font-size: 13px;
      border: 1px solid gray;
      padding: 4px 12px;
      border-radius: 19px;
    }

    .mb-3 {
      margin-bottom: 2rem !important;
    }

    .address-name {
      font-size: 15px;
      text-align: justify;
      min-height: 65px;
    }




    .cs_about.cs_style_1 .cs_experience_box {
      background-color: #6c911e;
    }

    .cs_iconbox.cs_style_3 .cs_iconbox_icon img {
      filter: brightness(50) invert(1);
    }

    .cs_iconbox.cs_style_2 .cs_iconbox_icon img {
      position: relative;
      z-index: 1;
      height: 40px;
      width: 40px;
    }

    .cs_hero.cs_style_1 .cs_hero_title span::before {
      height: 3px;
      width: 96%;
      left: 2px;
      bottom: 0px;
    }

    .cs_about.cs_style_1 .cs_about_text {
      max-width: 595px;
      margin-bottom: 30px;
      text-align: justify;
    }

    @media (max-width: 991px) {
      .cs_hero.cs_style_1 .cs_hero_title {
        font-size: 30px;
        line-height: 35px;
      }

      .book-btn {
        background: #56931C;
        color: white;
        padding: 5px 9px;
        font-size: 0.85rem !important;
        border-radius: 25px;
        border: none;
        transition: all 0.3s ease;
      }

      .text-info {
        background: #56931c;
        padding: 5px 4px;
        border-radius: 19px;
        color: white !important;
        font-size: 15px;
      }

      .address-name {
        font-size: 15px;
        text-align: justify;
        min-height: 48px;
      }
    }

    @media (min-width:1000px) {
      .desk-none {
        display: none;
      }
    }

    .blog-not-fount {
      margin-top: 17px;
      background: #ff4d4d38;
      padding: 8px;
      color: black;
      font-size: 15px;
      font-weight: bold;
      color: black;
    }

    .cs_post.cs_style_1 .cs_posted_by {
      width: 140px;
      height: 42px;
    }

    .cs_post.cs_style_1 .cs_post_thumbnail {
      display: inline-block;
      padding: 0 0px;
      margin-bottom: -8px;
    }

    .cs_iconbox.cs_style_1 .cs_iconbox_subtitle {
      max-width: 302px;
      text-align: justify;
    }

    .text-justify {
      text-align: justify;
    }

    .mobile-banner {
      border: 3px solid #a88836;
    }

    @media (max-width:1000px) {
      .cs_section_heading.cs_style_1 .cs_section_title {
        font-size: 30px;
      }
    }

    .cs_iconbox.cs_style_2 .cs_iconbox_title {
      font-size: 17px;

    }

    .cs_pagination.cs_style_2.cs_flex_left {

      justify-content: center;
    }

    .form-control {
      line-height: 1.90;
      border: var(--bs-border-width) solid #cdb16c;
    }

    .btn-primary {
      --bs-btn-color: #fff;
      --bs-btn-bg: #cdb16c;
      --bs-btn-border-color: #cdb16c;
      --bs-btn-hover-color: #fff;
      --bs-btn-hover-bg: #8d680ce0;
      --bs-btn-hover-border-color: #8d680ce0;
    }

    .cs_form_field {
      border: 1px solid #cdb16c;
      background-color: #fff;
    }

    .modal-header {
      border-bottom: var(--bs-modal-header-border-width) solid #c5a75d;
    }

    .modal-footer {
      border-top: 0px;
    }

    .modal-content {
      padding: 10px;
    }

    .swiper-horizontal>.swiper-pagination-bullets,
    .swiper-pagination-bullets.swiper-pagination-horizontal,
    .swiper-pagination-custom,
    .swiper-pagination-fraction {
      bottom: var(--swiper-pagination-bottom, -7px) !important;
    }




    .cs_iconbox_4_wrap {
      position: relative;
      z-index: 10;
      margin-top: 100px;
    }

    .cs_iconbox.cs_style_4 {

      padding: 50px 22px;

    }

    .cs_iconbox.cs_style_4 {
      padding: 37px 22px;
    }

    .cs_iconbox.cs_style_4 .cs_iconbox_title {
      font-size: 25px;
    }


    .cs_iconbox.cs_style_4 .cs_iconbox_icon {
      height: 88px;
      width: 88px;
    }

    .list-unstyled li a:hover {
      color: var(--accent-color) !important;
    }
  </style>
</head>

<body>

  <?php
  include('header.php');
  ?>
  <!-- Start Hero Section -->
  <img src="assets/img/banner-mob.jpg" alt="Mobile Banner" class="mobile-banner res-dd-none">
  <section class="position-relative">
    <div class="cs_hero_slider_thumb slick-slider">

      <div class="cs_hero_slider_thumb_item res-mob-none">
        <div class="cs_hero cs_style_1 cs_center cs_bg_filed" data-src="assets/img/hero_slider_3.jpg">
          <div class="container">
            <div class="cs_hero_text ">
              <div class="cs_hero_text_in">
                <h2 class="cs_hero_title "> <span>Expert Solution </span> for Sexual Problems!</h2>
                <p class="cs_hero_subtitle"><strong> Dr. Azad,</strong> a top sexologist, specializes in <b><span
                      style="color:#6c911e">Ayurvedic Treatments</span></b>
                  for all sexual health issues, offering safe, natural, and side-effect-free solutions.</p>
                <div class="cs_hero_info">
                  <h3>Book a Consultation.</h3>
                  <a href="tel:9761181199">
                    <p><i class="fa-solid fa-phone"></i> Call Us: +91-9761181199</p>
                  </a>
                </div>

              </div>
              <div class="cs_hero_shape">
                <img src="assets/img/icons/hero_icon.png" alt="Icon" class="cs_spinner_img">
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </section>
  <!-- End Hero Section -->
  <!-- Start CTA Section -->
  <section class="cs_cta cs_style_1 cs_blue_bg position-relative overflow-hidden  res-mob-none">
    <div class="container">
      <div class="cs_cta_in">
        <div class="cs_cta_left">
          <div class="cs_cta_thumb wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.25s">
            <img src="assets/img/cta_img_1.jpg" alt="">
          </div>
          <div class="cs_cta_info">
            <h2 class="cs_cta_title">Struggling with Sexual Problems? Get Help Now! </h2>
            <p class="cs_cta_subtitle">Expert advice and safe treatment are just a call away—contact us
              today!</p>
          </div>
        </div>
        <div class="cs_cta_right">
          <a class="cs_btn cs_style_1 cs_color_3" href="https://sexproblemtreatment.com/contact.php">
            <span>Contact Now </span>
            <i class="fa-solid fa-angles-right"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="cs_cta_shape"></div>
  </section>
  <!-- End CTA Section -->
  <!-- Start About Section -->
  <section class="cs_about cs_style_1 position-relative">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
      <div class="row align-items-center cs_gap_y_40" style="flex-wrap: wrap-reverse;">
        <div class="col-lg-6">
          <div class="cs_about_thumb">
            <div class="cs_about_thumb_1">
              <img src="assets/img/about_img_1.jpg" alt="">

            </div>
            <div class="cs_about_thumb_2">
              <img src="assets/img/about_img_2.jpg" alt="About Image">
              <img src="assets/img/icons/about_shape_1.png" alt="Shape Image" class="cs_about_thumb_shape_2">
            </div>
            <div class="cs_experience_box cs_center">
              <p class="cs_experience_box_number">100%</p>
              <p class="cs_experience_box_title">Ayurvedic</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="0.25s">
          <div class="cs_about_content">
            <div class="cs_section_heading cs_style_1">
              <p class="cs_section_subtitle cs_accent_color">
                <span class="cs_shape_left"></span>
                ABOUT US
              </p>
              <h2 class="cs_section_title">We Provide <span style="color:#6c911e">Ayurvedic</span> Solutions for
                Complete Sexual Wellness</h2>
            </div>
            <p class="cs_about_text text-justify">At our clinic, we treat all kinds of sexual health problems using
              <b>Ayurvedic Medicine</b>. Our experienced doctors provide treatments that are safe, natural, and free
              from side effects. We believe in healing the body from within by addressing the root cause of your health
              issues. Sexual health problems can impact confidence, relationships, and overall well-being. The good news
              is that Ayurveda offers a holistic and natural solution without any harmful side effects. It not only
              treats the physical symptoms but also balances the mind and body, promoting overall wellness and vitality.
            </p>
            <div class="row cs_gap_y_30">
              <div class="col-sm-6">
                <div class="cs_iconbox cs_style_1">
                  <div class="cs_iconbox_head">
                    <div class="cs_iconbox_icon cs_center">
                      <img src="https://img.icons8.com/ios-filled/283b6a/so-so.png" alt="">
                    </div>
                    <h3 class="cs_iconbox_title m-0">Say Goodbye to Sexual Worries!</h3>
                  </div>
                  <p class="cs_iconbox_subtitle mb-0">Safe, Natural, and Effective Ayurvedic Treatments for Sexual
                    Health. Regain Confidence, Restore Happiness, and Live Fully with Ayurveda.
                  </p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="cs_iconbox cs_style_1">
                  <div class="cs_iconbox_head">
                    <div class="cs_iconbox_icon cs_center">
                      <img src="https://img.icons8.com/pastel-glyph/283b6a/health-shield--v2.png" alt="">
                    </div>
                    <h3 class="cs_iconbox_title m-0">Stronger Health, Happier Life!</h3>
                  </div>
                  <p class="cs_iconbox_subtitle mb-0">Experience Natural Healing with Ayurveda. Safe, Effective
                    Treatments for Sexual Health Issues.</p>
                </div>
              </div>
            </div>

            <a class="cs_btn cs_style_1 cs_color_1" href="https://sexproblemtreatment.com/about.php">
              <span>Read More </span>
              <i class="fa-solid fa-angles-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="cs_section_img"><img src="assets/img/about_section_img_1.png" alt=""></div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </section>
  <!-- End About Section -->
  <section class="cs_cta cs_style_1 cs_blue_bg position-relative overflow-hidden  res-dd-none">
    <div class="container">
      <div class="cs_cta_in">
        <div class="cs_cta_left">
          <div class="cs_cta_thumb wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.25s">
            <img src="assets/img/cta_img_1.jpg" alt="">
          </div>
          <div class="cs_cta_info">
            <h2 class="cs_cta_title">Struggling with Sexual Problems? Get Help Now! </h2>
            <p class="cs_cta_subtitle">Expert advice and safe treatment are just a call away—contact us
              today!</p>
          </div>
        </div>
        <div class="cs_cta_right">
          <a class="cs_btn cs_style_1 cs_color_3" href="https://sexproblemtreatment.com/contact.php">
            <span>Contact Now </span>
            <i class="fa-solid fa-angles-right"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="cs_cta_shape"></div>
  </section>

  <!-- Start Blog Section -->
  <section>

    <div class="container">
      <div class="cs_section_heading cs_style_1 text-center">
        <p class="cs_section_subtitle cs_accent_color wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.25s">
          <span class="cs_shape_left"></span>Awards Gallery<span class="cs_shape_right"></span>
        </p>
        <h2 class="cs_section_title">A Glimpse of Our Glory</h2>
      </div>
      <div class="cs_height_50 cs_height_lg_50"></div>
      <div class="cs_slider cs_style_1 cs_slider_gap_24">
        <div class="cs_slider_container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0"
          data-variable-width="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2"
          data-md-slides="3" data-lg-slides="3" data-add-slides="3">
          <div class="cs_slider_wrapper">
            <div class="cs_slide">
              <article class="cs_post cs_style_1">

                <img src="assets/img/1.png" alt="post Thumbnail">
                <!--<div class="cs_post_category position-absolute">Medical</div>-->

              </article>
            </div>
            <div class="cs_slide">
              <article class="cs_post cs_style_1">

                <img src="assets/img/2.png" alt="post Thumbnail">
                <!--<div class="cs_post_category position-absolute">Medical</div>-->

              </article>
            </div>
            <div class="cs_slide">
              <article class="cs_post cs_style_1">

                <img src="assets/img/3.png" alt="post Thumbnail">
                <!--<div class="cs_post_category position-absolute">Medical</div>-->

              </article>
            </div>


            <div class="cs_slide">
              <article class="cs_post cs_style_1">

                <img src="assets/img/5.png" alt="post Thumbnail">
                <!--<div class="cs_post_category position-absolute">Medical</div>-->

              </article>
            </div>
          </div>
        </div>
        <div class="cs_pagination cs_style_2"></div>
      </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </section>
  <!-- End Blog Section -->
  <!-- Start Counter -->
  <div class="cs_counter_area cs_gray_bg">
    <div class="container">
      <div class="cs_counter_content cs_blue_bg">
        <div class="cs_counter_shape position-absolute">
          <img src="assets/img/counter_shape.png" alt="Shape">
        </div>
        <div class="cs_counter_1_wrap">
          <div class="cs_counter cs_style_1">
            <div class="cs_counter_icon cs_center">
              <img
                src="https://img.icons8.com/external-others-pike-picture/50/2ea6f7/external-agreement-health-insurance-care-others-pike-picture-26.png"
                alt="Icon">
            </div>
            <div class="cs_counter_nmber"><span data-count-to="22355" class="odometer"></span>+</div>
            <p class="cs_counter_title mb-0">Happy Patients</p>
          </div>
          <div class="cs_counter cs_style_1">
            <div class="cs_counter_icon cs_center">
              <img
                src="https://img.icons8.com/external-tal-revivo-regular-tal-revivo/50/2ea6f7/external-hospital-location-with-blood-bank-in-same-facility-hospital-regular-tal-revivo.png"
                alt="Icon">
            </div>
            <div class="cs_counter_nmber"><span data-count-to="6" class="odometer"></span></div>
            <p class="cs_counter_title mb-0">Visit Days</p>
          </div>
          <div class="cs_counter cs_style_1">
            <div class="cs_counter_icon cs_center">
              <img src="https://img.icons8.com/ios/50/2ea6f7/caduceus.png" alt="Icon">
            </div>
            <div class="cs_counter_nmber"><span data-count-to="15" class="odometer"></span>+</div>
            <p class="cs_counter_title mb-0">Years Of Experience</p>
          </div>
          <div class="cs_counter cs_style_1">
            <div class="cs_counter_icon cs_center">
              <img src="https://img.icons8.com/carbon-copy/2ea6f7/guarantee.png" alt="Icon">
            </div>
            <div class="cs_counter_nmber"><span data-count-to="100" class="odometer"></span>%</div>
            <p class="cs_counter_title mb-0">Confidential Consultations</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Counter -->
  <!-- Start Service Section -->
  <section class="cs_gray_bg">
    <div class="cs_height_110 cs_height_lg_70"></div>
    <div class="container">
      <div class="cs_section_heading cs_style_1 cs_type_1">
        <div class="cs_section_heading_left">
          <p class="cs_section_subtitle cs_accent_color wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.25s">
            <span class="cs_shape_left"></span>
            TREATMENTS
          </p>
          <h2 class="cs_section_title">We Heal Sexual Health Issues Naturally with <span
              style="color:#6c911e">Ayurvedic</span></h2>
        </div>
        <div class="cs_section_heading_right">We help in the treatment and cure of all the problems related to
          one’s
          sexual life. We observe the symptoms, diagnose & understand the root-causes, and advise the best
          remedies to
          the patients sexual disorders.</div>
      </div>
      <div class="cs_height_50 cs_height_lg_50"></div>
      <div class="row cs_row_gap_30 cs_gap_y_30">

        <div class="col-xl-3 col-lg-4 col-sm-6">
          <a href="https://sexproblemtreatment.com/premature-ejaculation.php">
            <div class="cs_iconbox cs_style_2 cs_radius_15 cs_hover_layer_2">
              <div class="cs_iconbox_overlay cs_bg_filed" data-src="assets/img/service_bg.jpg"></div>
              <div class="cs_iconbox_shape"></div>
              <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
                <div class="cs_iconbox_icon cs_center">
                  <img src="assets/img/Icons-treat/Premature-Ejaculation.png" alt="Service Icon">
                </div>
                <h3 class="iconbox_index">01</h3>
              </div>
              <h3 class="cs_iconbox_title"><a href="https://sexproblemtreatment.com/premature-ejaculation.php">Premature
                  Ejaculation (शीघ्रपतन)</a></h3>
              <p class="cs_iconbox_subtitle m-0">Regain control and last longer naturally.</p>
            </div>
          </a>
        </div>

        <div class="col-xl-3 col-lg-4 col-sm-6">
          <a href="https://sexproblemtreatment.com/erectile-dysfunction.php">
            <div class="cs_iconbox cs_style_2 cs_radius_15">
              <div class="cs_iconbox_overlay cs_bg_filed" data-src="assets/img/service_bg.jpg"></div>
              <div class="cs_iconbox_shape"></div>
              <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
                <div class="cs_iconbox_icon cs_center">
                  <img src="assets/img/Icons-treat/Erectile-Dysfunction.png" alt="Service Icon">
                </div>
                <h3 class="iconbox_index">02</h3>
              </div>
              <h3 class="cs_iconbox_title"><a href="https://sexproblemtreatment.com/erectile-dysfunction.php">Erectile
                  Dysfunction (नपुंसकता)</a></h3>
              <p class="cs_iconbox_subtitle m-0">Restore strength and confidence in your intimate life.</p>
            </div>
          </a>
        </div>

        <div class="col-xl-3 col-lg-4 col-sm-6">
          <a href="https://sexproblemtreatment.com/nightfall.php">
            <div class="cs_iconbox cs_style_2 cs_radius_15">
              <div class="cs_iconbox_overlay cs_bg_filed" data-src="assets/img/service_bg.jpg"></div>
              <div class="cs_iconbox_shape"></div>
              <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
                <div class="cs_iconbox_icon cs_center">
                  <img src="assets/img/Icons-treat/nightfall.png" alt="Service Icon">
                </div>
                <h3 class="iconbox_index">03</h3>
              </div>
              <h3 class="cs_iconbox_title"><a href="https://sexproblemtreatment.com/nightfall.php">Nightfall
                  (स्वप्नदोष)</a></h3>
              <p class="cs_iconbox_subtitle m-0">Say goodbye to unwanted discharge and sleepless nights.</p>
            </div>
          </a>
        </div>


        <div class="col-xl-3 col-lg-4 col-sm-6">
          <a href="https://sexproblemtreatment.com/low-libido.php">
            <div class="cs_iconbox cs_style_2 cs_radius_15">
              <div class="cs_iconbox_overlay cs_bg_filed" data-src="assets/img/service_bg.jpg"></div>
              <div class="cs_iconbox_shape"></div>
              <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
                <div class="cs_iconbox_icon cs_center">
                  <img src="assets/img/Icons-treat/Low-Libido.png" alt="Service Icon">
                </div>
                <h3 class="iconbox_index">04</h3>
              </div>
              <h3 class="cs_iconbox_title"><a href="https://sexproblemtreatment.com/low-libido.php">Low Libido (कामेच्छा
                  की कमी)</a></h3>
              <p class="cs_iconbox_subtitle m-0"> Revive your passion and boost your desire.</p>
            </div>
          </a>
        </div>


        <div class="col-xl-3 col-lg-4 col-sm-6">
          <a href="https://sexproblemtreatment.com/delayed-ejaculation.php">
            <div class="cs_iconbox cs_style_2 cs_radius_15">
              <div class="cs_iconbox_overlay cs_bg_filed" data-src="assets/img/service_bg.jpg"></div>
              <div class="cs_iconbox_shape"></div>
              <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
                <div class="cs_iconbox_icon cs_center">
                  <img src="assets/img/Icons-treat/Delayed-Ejaculation.png" alt="Service Icon">
                </div>
                <h3 class="iconbox_index">05</h3>
              </div>
              <h3 class="cs_iconbox_title"><a href="https://sexproblemtreatment.com/delayed-ejaculation.php">Delayed
                  Ejaculation (विलंबित स्खलन)</a></h3>
              <p class="cs_iconbox_subtitle m-0">Struggling to finish? Overcome delays and enjoy satisfying
                intimacy with
                the right care!</p>
            </div>
          </a>
        </div>

        <div class="col-xl-3 col-lg-4 col-sm-6">
          <a href="https://sexproblemtreatment.com/penis-enlargement.php">
            <div class="cs_iconbox cs_style_2 cs_radius_15">
              <div class="cs_iconbox_overlay cs_bg_filed" data-src="assets/img/service_bg.jpg"></div>
              <div class="cs_iconbox_shape"></div>
              <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
                <div class="cs_iconbox_icon cs_center">
                  <img src="assets/img/Icons-treat/Penis-Enlargement.png" alt="Service Icon">
                </div>
                <h3 class="iconbox_index">06</h3>
              </div>
              <h3 class="cs_iconbox_title"><a href="https://sexproblemtreatment.com/penis-enlargement.php">Penis
                  Enlargement (लिंग वृद्धि)</a></h3>
              <p class="cs_iconbox_subtitle m-0">Enhance your size, confidence, and performance.</p>
            </div>
          </a>
        </div>


        <div class="col-xl-3 col-lg-4 col-sm-6">
          <a href="https://sexproblemtreatment.com/low-sperm-count.php">
            <div class="cs_iconbox cs_style_2 cs_radius_15">
              <div class="cs_iconbox_overlay cs_bg_filed" data-src="assets/img/service_bg.jpg"></div>
              <div class="cs_iconbox_shape"></div>
              <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
                <div class="cs_iconbox_icon cs_center">
                  <img src="assets/img/Icons-treat/Low-Sperm-Count.png" alt="Service Icon">
                </div>
                <h3 class="iconbox_index">07</h3>
              </div>
              <h3 class="cs_iconbox_title"><a href="https://sexproblemtreatment.com/low-sperm-count.php">Low Sperm Count
                  (शुक्राणुओं की कमी)</a></h3>
              <p class="cs_iconbox_subtitle m-0">Improve fertility and increase your chances of fatherhood.
              </p>
            </div>
          </a>
        </div>

        <div class="col-xl-3 col-lg-4 col-sm-6">
          <a href="https://sexproblemtreatment.com/diabetes.php">
            <div class="cs_iconbox cs_style_2 cs_radius_15">
              <div class="cs_iconbox_overlay cs_bg_filed" data-src="assets/img/service_bg.jpg"></div>
              <div class="cs_iconbox_shape"></div>
              <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
                <div class="cs_iconbox_icon cs_center">
                  <img src="assets/img/Icons-treat/Diabetes.png" alt="Service Icon">
                </div>
                <h3 class="iconbox_index">08</h3>
              </div>
              <h3 class="cs_iconbox_title"><a href="https://sexproblemtreatment.com/diabetes.php">Diabetes (मधुमेह)</a>
              </h3>
              <p class="cs_iconbox_subtitle m-0">Manage sugar levels and live a healthier life.</p>
            </div>
          </a>
        </div>


        <div class="col-xl-3 col-lg-4 col-sm-6">
          <a href="https://sexproblemtreatment.com/anxiety-and-stress.php">
            <div class="cs_iconbox cs_style_2 cs_radius_15">
              <div class="cs_iconbox_overlay cs_bg_filed" data-src="assets/img/service_bg.jpg"></div>
              <div class="cs_iconbox_shape"></div>
              <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
                <div class="cs_iconbox_icon cs_center">
                  <img src="assets/img/Icons-treat/Anxiety-&-Stress.png" alt="Service Icon">
                </div>
                <h3 class="iconbox_index">09</h3>
              </div>
              <h3 class="cs_iconbox_title"><a href="https://sexproblemtreatment.com/anxiety-and-stress.php">Anxiety &
                  Stress ( चिंता / तनाव)</a></h3>
              <p class="cs_iconbox_subtitle m-0">Find peace and balance in your daily life.</p>
            </div>
          </a>
        </div>


        <div class="col-xl-3 col-lg-4 col-sm-6">
          <a href="https://sexproblemtreatment.com/piles-treatment.php">
            <div class="cs_iconbox cs_style_2 cs_radius_15">
              <div class="cs_iconbox_overlay cs_bg_filed" data-src="assets/img/service_bg.jpg"></div>
              <div class="cs_iconbox_shape"></div>
              <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
                <div class="cs_iconbox_icon cs_center">
                  <img src="assets/img/Icons-treat/Piles-Treatment.png" alt="Service Icon">
                </div>
                <h3 class="iconbox_index">10</h3>
              </div>
              <h3 class="cs_iconbox_title"><a href="https://sexproblemtreatment.com/piles-treatment.php">Piles Treatment
                  (बवासीर का इलाज)</a></h3>
              <p class="cs_iconbox_subtitle m-0">Get relief from pain and discomfort naturally.</p>
            </div>
          </a>
        </div>


        <div class="col-xl-3 col-lg-4 col-sm-6">
          <a href="https://sexproblemtreatment.com/phimosis-treatment.php">
            <div class="cs_iconbox cs_style_2 cs_radius_15">
              <div class="cs_iconbox_overlay cs_bg_filed" data-src="assets/img/service_bg.jpg"></div>
              <div class="cs_iconbox_shape"></div>
              <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
                <div class="cs_iconbox_icon cs_center">
                  <img src="assets/img/Icons-treat/Phimosis-Treatment.png" alt="Service Icon">
                </div>
                <h3 class="iconbox_index">11</h3>
              </div>
              <h3 class="cs_iconbox_title"><a href="https://sexproblemtreatment.com/phimosis-treatment.php">Phimosis
                  Treatment (फीमोसिस का इलाजफीमोसिस का इलाज)</a></h3>
              <p class="cs_iconbox_subtitle m-0">Safe and effective solutions for a pain-free life.</p>
            </div>
          </a>
        </div>


        <div class="col-xl-3 col-lg-4 col-sm-6">
          <a href="https://sexproblemtreatment.com/hair-fall-treatment.php">
            <div class="cs_iconbox cs_style_2 cs_radius_15">
              <div class="cs_iconbox_overlay cs_bg_filed" data-src="assets/img/service_bg.jpg"></div>
              <div class="cs_iconbox_shape"></div>
              <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
                <div class="cs_iconbox_icon cs_center">
                  <img src="assets/img/Icons-treat/Hair-Fall-Treatment.png" alt="Service Icon">
                </div>
                <h3 class="iconbox_index">12</h3>
              </div>
              <h3 class="cs_iconbox_title"><a href="https://sexproblemtreatment.com/hair-fall-treatment.php">Hair Fall
                  Treatment (बाल झड़ने का इलाज)</a></h3>
              <p class="cs_iconbox_subtitle m-0">Regrow stronger, healthier, and fuller hair.</p>
            </div>
          </a>
        </div>
      </div>
      <div class="cs_service_footer">
        <div class="cs_service_footer_icon">
          <img src="assets/img/icons/service_footer_icon_1.png" alt="Icon">
        </div>
        <div class="cs_service_footer_text cs_medium">
          Experience expert care with proven solutions – your wellness starts here!<a href="https://wa.me/919761181199"
            target="_blank"><img width="18" height="18"
              src="https://img.icons8.com/pastel-glyph/128/56931c/whatsapp--v2.png" alt="whatsapp--v2" class='mt-0' />
            &nbsp;Contact<span>
              <i class="fa-solid fa-angles-right"></i></span></a>
        </div>
      </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </section>
  <!-- End Service Section -->
  <!-- Start Blog Section -->
  <section>
    <div class="cs_height_110 cs_height_lg_70"></div>
    <div class="container">
      <div class="cs_section_heading cs_style_1 text-center">
        <p class="cs_section_subtitle cs_accent_color wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.25s">
          <span class="cs_shape_left"></span>OUR CLINIC<span class="cs_shape_right"></span>
        </p>
        <h2 class="cs_section_title">Our clinics</h2>
      </div>
      <div class="cs_height_50 cs_height_lg_50"></div>
      <div class="cs_slider cs_style_1 cs_slider_gap_24">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">

            <!-- Repeat this block 10 times for 10 cards -->
            <!-- Card 1 -->
            <div class="swiper-slide col-12 col-sm-6 col-md-6 col-lg-4 mb-4">
              <div class="card">
                <div id="slider1" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner rounded">
                    <div class="carousel-item active">
                      <img src="assets/img/clinic/mathura.jpg" class="d-block w-100" alt="Clinic">
                    </div>
                    <div class="carousel-item">
                      <img src="assets/img/clinic/mathura1.jpg" class="d-block w-100" alt="Clinic">
                    </div>
                  </div>

                  <!-- Prev Button -->
                  <button class="carousel-control-prev" type="button" data-bs-target="#slider1" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>

                  <!-- Next Button -->
                  <button class="carousel-control-next" type="button" data-bs-target="#slider1" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>

                <div class="card-body">
                  <h5 class="clinic-title mb-4 mt-2">Dr. Azad Sexologist Clinic | Mathura</h5>

                  <p class="address-text mb-4 d-flex align-items-start">
                    <img src="https://img.icons8.com/ios-filled/50/56931c/place-marker--v1.png" width="18" height="18"
                      alt="location-icon" class="me-2 mt-1" />
                    <span class='address-name'>
                      Bihari Lal Plaza, Shop No. 10 1st Floor, near new Bus stand, Mathura, Uttar Pradesh 281001
                    </span>
                  </p>
                  <div class="flex-wrap align-items-center justify-content-between gap-3">
                    <!-- Doctor Name -->
                    <a class="d-flex align-items-center gap-2 text-decoration-none fw-bold text-dark mb-2">
                      <img width="20" height="20"
                        src="https://img.icons8.com/external-nawicon-glyph-nawicon/64/1A1A1A/external-doctor-medical-nawicon-mixed-nawicon-2.png" />
                      Dr. Azad, Dr. Deepak, Dr. Waseem, Dr. Irfan
                    </a>

                    <!-- Timing -->
                    <a class="d-flex align-items-center gap-2 text-decoration-none text-dark">
                      <img width="20" height="20" src="https://img.icons8.com/ios-filled/50/1A1A1A/clock--v1.png"
                        alt="clock--v1" />
                      MON-SUN: 10:00am - 6:45pm
                    </a>
                  </div>


                  <div class="card-footer-custom border-top pt-3 d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center text-info">
                      <a href="https://maps.app.goo.gl/BEbyuLs1gM2qLMbQ7" target="_blank"
                        class="get-direction-btn text-white">
                        <img width="20" height="20" src="https://img.icons8.com/color/48/google-maps-new.png"
                          alt="google-maps-new" /> Get Direction
                      </a>
                    </div>

                    <button class="book-btn d-flex align-items-center" type="button" class="btn btn-primary"
                      data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">
                      <img width="15" height="15" src="https://img.icons8.com/ios-filled/50/FFFFFF/calendar--v1.png"
                        alt="calendar--v1" />
                      &nbsp;&nbsp;Book Appointment
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Repeat till Card 10 -->
            <div class="swiper-slide col-lg-4">
              <div class="card">
                <div id="slider2" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner rounded">
                    <div class="carousel-item active">
                      <img src="assets/img/clinic/mo1.jpg" class="d-block w-100" alt="Clinic">
                    </div>
                    <div class="carousel-item">
                      <img src="assets/img/clinic/mathura1.jpg" class="d-block w-100" alt="Clinic">
                    </div>
                  </div>

                  <!-- Prev Button -->
                  <button class="carousel-control-prev" type="button" data-bs-target="#slider2" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>

                  <!-- Next Button -->
                  <button class="carousel-control-next" type="button" data-bs-target="#slider2" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <div class="card-body">
                  <h5 class="clinic-title mb-4 mt-2">Dr. Azad Sexologist Clinic | Morena</h5>

                  <p class="address-text mb-4 d-flex align-items-start">
                    <img src="https://img.icons8.com/ios-filled/50/56931c/place-marker--v1.png" width="18" height="18"
                      alt="location-icon" class="me-2 mt-1" />
                    <span class='address-name'>
                      Bus Stand, Near, Agra National Hwy, H B Colony, Morena, Madhya Pradesh 476001
                    </span>
                  </p>
                  <div class="flex-wrap align-items-center gap-3">
                    <!-- Doctor Name -->
                    <a class="d-flex  align-items-center gap-2 text-decoration-none fw-bold text-dark mb-2">
                      <img width="20" height="20"
                        src="https://img.icons8.com/external-nawicon-glyph-nawicon/64/1A1A1A/external-doctor-medical-nawicon-mixed-nawicon-2.png" />
                      Dr. Azad, Dr. Irfan
                    </a>

                    <!-- Timing -->
                    <a class="d-flex  align-items-center gap-2 text-decoration-none text-dark">
                      <img width="20" height="20" src="https://img.icons8.com/ios-filled/50/1A1A1A/clock--v1.png"
                        alt="clock--v1" />
                      SATURDAY: 10:00am - 5:00pm
                    </a>
                  </div>

                  <div class="card-footer-custom border-top pt-3 d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center text-info">
                      <a href="https://maps.app.goo.gl/gcHXUSN6Jb4RGYoE8" target="_blank"
                        class="get-direction-btn text-white">
                        <img width="20" height="20" src="https://img.icons8.com/color/48/google-maps-new.png"
                          alt="google-maps-new" /> Get Direction
                      </a>
                    </div>

                    <button class="book-btn d-flex align-items-center" type="button" class="btn btn-primary"
                      data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">
                      <img width="15" height="15" src="https://img.icons8.com/ios-filled/50/FFFFFF/calendar--v1.png"
                        alt="calendar--v1" />
                      &nbsp;&nbsp;Book Appointment
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide col-lg-4">
              <div class="card">
                <div id="slider3" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner rounded">
                    <div class="carousel-item active">
                      <img src="assets/img/clinic/g1.jpg" class="d-block w-100" alt="Clinic">
                    </div>
                    <div class="carousel-item">
                      <img src="assets/img/clinic/g2'.jpg" class="d-block w-100" alt="Clinic">
                    </div>
                  </div>

                  <!-- Prev Button -->
                  <button class="carousel-control-prev" type="button" data-bs-target="#slider3" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>

                  <!-- Next Button -->
                  <button class="carousel-control-next" type="button" data-bs-target="#slider3" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <div class="card-body">
                  <h5 class="clinic-title mb-4 mt-2">Dr. Azad Sexologist Clinic | Gwalior</h5>

                  <p class="address-text mb-4 d-flex align-items-start">
                    <img src="https://img.icons8.com/ios-filled/50/56931c/place-marker--v1.png" width="18" height="18"
                      alt="location-icon" class="me-2 mt-1" />
                    <span class='address-name'>
                      First Floor Ganesh Plaza, Opposite Post office, Morar Road, Gole Ka Mandir Rd, Gwalior, Madhya
                      Pradesh 474005
                    </span>
                  </p>
                  <div class="flex-wrap align-items-center gap-3">
                    <!-- Doctor Name -->
                    <a class="d-flex  align-items-center gap-2 text-decoration-none fw-bold text-dark mb-2">
                      <img width="20" height="20"
                        src="https://img.icons8.com/external-nawicon-glyph-nawicon/64/1A1A1A/external-doctor-medical-nawicon-mixed-nawicon-2.png" />
                      Dr.Suneel Rawat, Dr. Azad, Dr. Irfan
                    </a>

                    <!-- Timing -->
                    <a class="d-flex  align-items-center gap-2 text-decoration-none text-dark">
                      <img width="20" height="20" src="https://img.icons8.com/ios-filled/50/1A1A1A/clock--v1.png"
                        alt="clock--v1" />
                      MON-SUN: 10:00am - 6:45pm
                    </a>
                  </div>

                  <div class="card-footer-custom border-top pt-3 d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center text-info">
                      <a href="https://maps.app.goo.gl/ancRKjcfMA4yG38g9" target="_blank"
                        class="get-direction-btn text-white">
                        <img width="20" height="20" src="https://img.icons8.com/color/48/google-maps-new.png"
                          alt="google-maps-new" /> Get Direction
                      </a>
                    </div>

                    <button class="book-btn d-flex align-items-center" type="button" class="btn btn-primary"
                      data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">
                      <img width="15" height="15" src="https://img.icons8.com/ios-filled/50/FFFFFF/calendar--v1.png"
                        alt="calendar--v1" />
                      &nbsp;&nbsp;Book Appointment
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide col-lg-4">
              <div class="card">
                <div id="slider4" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner rounded">
                    <div class="carousel-item active">
                      <img src="assets/img/clinic/d1.jpg" class="d-block w-100" alt="Clinic">
                    </div>
                    <div class="carousel-item">
                      <img src="https://knot9prod.s3.amazonaws.com/thumbnails/122021/hover_122021022.jpg"
                        class="d-block w-100" alt="Clinic">
                    </div>
                  </div>

                  <!-- Prev Button -->
                  <button class="carousel-control-prev" type="button" data-bs-target="#slider4" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>

                  <!-- Next Button -->
                  <button class="carousel-control-next" type="button" data-bs-target="#slider4" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <div class="card-body">
                  <h5 class="clinic-title mb-4 mt-2">Dr. Azad Sexologist Clinic | Sagar</h5>

                  <p class="address-text mb-4 d-flex align-items-start">
                    <img src="https://img.icons8.com/ios-filled/50/56931c/place-marker--v1.png" width="18" height="18"
                      alt="location-icon" class="me-2 mt-1" />
                    <span class='address-name'>
                      VR76+78W, Sagar, Makroniya, Madhya Pradesh 470004
                    </span>
                  </p>
                  <div class="flex-wrap align-items-center gap-3">
                    <!-- Doctor Name -->
                    <a class="d-flex  align-items-center gap-2 text-decoration-none fw-bold text-dark mb-2">
                      <img width="20" height="20"
                        src="https://img.icons8.com/external-nawicon-glyph-nawicon/64/1A1A1A/external-doctor-medical-nawicon-mixed-nawicon-2.png" />
                      Dr keshav manjhi
                    </a>

                    <!-- Timing -->
                    <a class="d-flex  align-items-center gap-2 text-decoration-none text-dark">
                      <img width="20" height="20" src="https://img.icons8.com/ios-filled/50/1A1A1A/clock--v1.png"
                        alt="clock--v1" />
                      MON-SUN: 10:00am - 6:45pm
                    </a>
                  </div>

                  <div class="card-footer-custom border-top pt-3 d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center text-info">
                      <a href="https://maps.app.goo.gl/tRQQc5VQ8d5YsHg39" target="_blank"
                        class="get-direction-btn text-white">
                        <img width="20" height="20" src="https://img.icons8.com/color/48/google-maps-new.png"
                          alt="google-maps-new" /> Get Direction
                      </a>
                    </div>

                    <button class="book-btn d-flex align-items-center" type="button" class="btn btn-primary"
                      data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">
                      <img width="15" height="15" src="https://img.icons8.com/ios-filled/50/FFFFFF/calendar--v1.png"
                        alt="calendar--v1" />
                      &nbsp;&nbsp;Book Appointment
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide col-lg-4">
              <div class="card">
                <div id="slider5" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner rounded">
                    <div class="carousel-item active">
                      <img src="assets/img/clinic/d2.jpg" class="d-block w-100" alt="Clinic">
                    </div>
                    <div class="carousel-item">
                      <img src="assets/img/clinic/jh1.jpg" class="d-block w-100" alt="Clinic">
                    </div>
                  </div>

                  <!-- Prev Button -->
                  <button class="carousel-control-prev" type="button" data-bs-target="#slider5" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>

                  <!-- Next Button -->
                  <button class="carousel-control-next" type="button" data-bs-target="#slider5" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <div class="card-body">
                  <h5 class="clinic-title mb-4 mt-2">Dr. Azad Sexologist Clinic | Jhansi</h5>

                  <p class="address-text mb-4 d-flex align-items-start">
                    <img src="https://img.icons8.com/ios-filled/50/56931c/place-marker--v1.png" width="18" height="18"
                      alt="location-icon" class="me-2 mt-1" />
                    <span class='address-name'>
                      shop no, Kisan bazar, 49, New Galla Mandi Rd, Jhansi, Uttar Pradesh 284002
                    </span>
                  </p>
                  <div class="flex-wrap align-items-center gap-3">
                    <!-- Doctor Name -->
                    <a href="#" target="_blank"
                      class="d-flex align-items-center gap-2 text-decoration-none fw-bold text-dark mb-2">
                      <img width="20" height="20"
                        src="https://img.icons8.com/external-nawicon-glyph-nawicon/64/1A1A1A/external-doctor-medical-nawicon-mixed-nawicon-2.png" />
                      Dr Shivam chauhan, Dr. Irfan
                    </a>

                    <!-- Timing -->
                    <a class="d-flex  align-items-center gap-2 text-decoration-none text-dark">
                      <img width="20" height="20" src="https://img.icons8.com/ios-filled/50/1A1A1A/clock--v1.png"
                        alt="clock--v1" />
                      TUESDAY: 10:00am - 6:45pm
                    </a>
                  </div>

                  <div class="card-footer-custom border-top pt-3 d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center text-info">
                      <a href="https://maps.app.goo.gl/qM89j9LRCPuNvxj47" target="_blank"
                        class="get-direction-btn text-white">
                        <img width="20" height="20" src="https://img.icons8.com/color/48/google-maps-new.png"
                          alt="google-maps-new" /> Get Direction
                      </a>
                    </div>

                    <button class="book-btn d-flex align-items-center" type="button" class="btn btn-primary"
                      data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">
                      <img width="15" height="15" src="https://img.icons8.com/ios-filled/50/FFFFFF/calendar--v1.png"
                        alt="calendar--v1" />
                      &nbsp;&nbsp;Book Appointment
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide col-lg-4">
              <div class="card">
                <div id="slider6" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner rounded">
                    <div class="carousel-item active">
                      <img src="assets/img/clinic/d1.jpg" class="d-block w-100" alt="Clinic">
                    </div>
                    <div class="carousel-item">
                      <img src="assets/img/clinic/bho2.jpg" class="d-block w-100" alt="Clinic">
                    </div>
                  </div>

                  <!-- Prev Button -->
                  <button class="carousel-control-prev" type="button" data-bs-target="#slider6" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>

                  <!-- Next Button -->
                  <button class="carousel-control-next" type="button" data-bs-target="#slider6" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <div class="card-body">
                  <h5 class="clinic-title mb-4 mt-2">Dr. Azad Sexologist Clinic | Bhopal</h5>

                  <p class="address-text mb-4 d-flex align-items-start">
                    <img src="https://img.icons8.com/ios-filled/50/56931c/place-marker--v1.png" width="18" height="18"
                      alt="location-icon" class="me-2 mt-1" />
                    <span class='address-name'>
                      House No, 17/A, 80 Feet Rd, Near Sai Mandir, Ashoka Garden, Bhopal, Madhya Pradesh 462010
                    </span>
                  </p>
                  <div class="flex-wrap align-items-center gap-3">
                    <!-- Doctor Name -->
                    <a class="d-flex  align-items-center gap-2 text-decoration-none fw-bold text-dark mb-2">
                      <img width="20" height="20"
                        src="https://img.icons8.com/external-nawicon-glyph-nawicon/64/1A1A1A/external-doctor-medical-nawicon-mixed-nawicon-2.png" />
                      Dr keshav manjhi
                    </a>

                    <!-- Timing -->
                    <a class="d-flex  align-items-center gap-2 text-decoration-none text-dark">
                      <img width="20" height="20" src="https://img.icons8.com/ios-filled/50/1A1A1A/clock--v1.png"
                        alt="clock--v1" />
                      MON-SUN: 10:00am - 6:45pm
                    </a>
                  </div>

                  <div class="card-footer-custom border-top pt-3 d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center text-info">
                      <a href="https://maps.app.goo.gl/m1JAW6s3HDyMczUE6" target="_blank"
                        class="get-direction-btn text-white">
                        <img width="20" height="20" src="https://img.icons8.com/color/48/google-maps-new.png"
                          alt="google-maps-new" /> Get Direction
                      </a>
                    </div>

                    <button class="book-btn d-flex align-items-center" type="button" class="btn btn-primary"
                      data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">
                      <img width="15" height="15" src="https://img.icons8.com/ios-filled/50/FFFFFF/calendar--v1.png"
                        alt="calendar--v1" />
                      &nbsp;&nbsp;Book Appointment
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide col-lg-4">
              <div class="card">
                <div id="slider7" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner rounded">
                    <div class="carousel-item active">
                      <img src="assets/img/clinic/lo1.jpg" class="d-block w-100" alt="Clinic">
                    </div>
                    <div class="carousel-item">
                      <img src="assets/img/clinic/lo2.jpg" class="d-block w-100" alt="Clinic">
                    </div>
                  </div>

                  <!-- Prev Button -->
                  <button class="carousel-control-prev" type="button" data-bs-target="#slider7" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>

                  <!-- Next Button -->
                  <button class="carousel-control-next" type="button" data-bs-target="#slider7" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <div class="card-body">
                  <h5 class="clinic-title mb-4 mt-2">Dr. Azad Sexologist Clinic | Lucknow</h5>

                  <p class="address-text mb-4 d-flex align-items-start">
                    <img src="https://img.icons8.com/ios-filled/50/56931c/place-marker--v1.png" width="18" height="18"
                      alt="location-icon" class="me-2 mt-1" />
                    <span class='address-name'>
                      3rd Floor, Manchanda House, Bus Stand, opp. Mahana Petrol Pump, near Alambagh, Sardari Khera,
                      Railway Colony, Alambagh, Lucknow, Uttar Pradesh 226005
                    </span>
                  </p>
                  <div class="flex-wrap align-items-center gap-3">
                    <!-- Doctor Name -->
                    <a class="d-flex  align-items-center gap-2 text-decoration-none fw-bold text-dark mb-2">
                      <img width="20" height="20"
                        src="https://img.icons8.com/external-nawicon-glyph-nawicon/64/1A1A1A/external-doctor-medical-nawicon-mixed-nawicon-2.png" />
                      Dr. MF Khan
                    </a>

                    <!-- Timing -->
                    <a class="d-flex  align-items-center gap-2 text-decoration-none text-dark">
                      <img width="20" height="20" src="https://img.icons8.com/ios-filled/50/1A1A1A/clock--v1.png"
                        alt="clock--v1" />
                      MON-SUN: 10:00am - 6:45pm
                    </a>
                  </div>

                  <div class="card-footer-custom border-top pt-3 d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center text-info">
                      <a href="https://maps.app.goo.gl/sCznN3sC9b4DWP7z7" target="_blank"
                        class="get-direction-btn text-white">
                        <img width="20" height="20" src="https://img.icons8.com/color/48/google-maps-new.png"
                          alt="google-maps-new" /> Get Direction
                      </a>
                    </div>

                    <button class="book-btn d-flex align-items-center" type="button" class="btn btn-primary"
                      data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">
                      <img width="15" height="15" src="https://img.icons8.com/ios-filled/50/FFFFFF/calendar--v1.png"
                        alt="calendar--v1" />
                      &nbsp;&nbsp;Book Appointment
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide col-lg-4">
              <div class="card">
                <div id="slider8" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner rounded">
                    <div class="carousel-item active">
                      <img src="assets/img/clinic/ja1.jpg" class="d-block w-100" alt="Clinic">
                    </div>
                    <div class="carousel-item">
                      <img src="assets/img/clinic/ja2.jpg" class="d-block w-100" alt="Clinic">
                    </div>
                  </div>

                  <!-- Prev Button -->
                  <button class="carousel-control-prev" type="button" data-bs-target="#slider8" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>

                  <!-- Next Button -->
                  <button class="carousel-control-next" type="button" data-bs-target="#slider8" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <div class="card-body">
                  <h5 class="clinic-title mb-4 mt-2">Dr. Azad Sexologist Clinic | Jaipur</h5>

                  <p class="address-text mb-4 d-flex align-items-start">
                    <img src="https://img.icons8.com/ios-filled/50/56931c/place-marker--v1.png" width="18" height="18"
                      alt="location-icon" class="me-2 mt-1" />
                    <span class='address-name'>
                      Ajmeeri gate, Jaipur, 302001
                    </span>
                  </p>
                  <div class=" flex-wrap align-items-center gap-3">
                    <!-- Doctor Name -->
                    <a class="d-flex  align-items-center gap-2 text-decoration-none fw-bold text-dark mb-2">
                      <img width="20" height="20"
                        src="https://img.icons8.com/external-nawicon-glyph-nawicon/64/1A1A1A/external-doctor-medical-nawicon-mixed-nawicon-2.png" />
                      Dr. Afzal
                    </a>

                    <!-- Timing -->
                    <a class="d-flex  align-items-center gap-2 text-decoration-none text-dark">
                      <img width="20" height="20" src="https://img.icons8.com/ios-filled/50/1A1A1A/clock--v1.png"
                        alt="clock--v1" />
                      MON-SUN: 10:00am - 6:45pm
                    </a>
                  </div>

                  <div class="card-footer-custom border-top pt-3 d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center text-info">
                      <a href="https://www.google.com/maps?q=Ajmeeri+gate,+Jaipur,+302001" target="_blank"
                        class="get-direction-btn text-white">
                        <img width="20" height="20" src="https://img.icons8.com/color/48/google-maps-new.png"
                          alt="google-maps-new" /> Get Direction
                      </a>
                    </div>

                    <button class="book-btn d-flex align-items-center" type="button" class="btn btn-primary"
                      data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">
                      <img width="15" height="15" src="https://img.icons8.com/ios-filled/50/FFFFFF/calendar--v1.png"
                        alt="calendar--v1" />
                      &nbsp;&nbsp;Book Appointment
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide col-lg-4">
              <div class="card">
                <div id="slider9" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner rounded">
                    <div class="carousel-item active">
                      <img src="assets/img/clinic/aa1.jpg" class="d-block w-100" alt="Clinic">
                    </div>
                    <div class="carousel-item">
                      <img src="assets/img/clinic/aa2.jpg" class="d-block w-100" alt="Clinic">
                    </div>
                  </div>

                  <!-- Prev Button -->
                  <button class="carousel-control-prev" type="button" data-bs-target="#slider9" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>

                  <!-- Next Button -->
                  <button class="carousel-control-next" type="button" data-bs-target="#slider9" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <div class="card-body">
                  <h5 class="clinic-title mb-4 mt-2">Dr. Azad Sexologist Clinic | Agra</h5>

                  <p class="address-text mb-4 d-flex align-items-start">
                    <img src="https://img.icons8.com/ios-filled/50/56931c/place-marker--v1.png" width="18" height="18"
                      alt="location-icon" class="me-2 mt-1" />
                    <span class='address-name'>
                      Akhilesh tower, Police station, B6, near Hariparwat, Civil Lines, Agra, Uttar Pradesh 282003
                    </span>
                  </p>
                  <div class="flex-wrap align-items-center gap-3">
                    <!-- Doctor Name -->
                    <a class="d-flex  align-items-center gap-2 text-decoration-none fw-bold text-dark mb-2">
                      <img width="20" height="20"
                        src="https://img.icons8.com/external-nawicon-glyph-nawicon/64/1A1A1A/external-doctor-medical-nawicon-mixed-nawicon-2.png" />
                      Dr. Vishal
                    </a>

                    <!-- Timing -->
                    <a class="d-flex  align-items-center gap-2 text-decoration-none text-dark">
                      <img width="20" height="20" src="https://img.icons8.com/ios-filled/50/1A1A1A/clock--v1.png"
                        alt="clock--v1" />
                      MON-SUN: 10:00am - 6:45pm
                    </a>
                  </div>

                  <div class="card-footer-custom border-top pt-3 d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center text-info">
                      <a href="https://maps.app.goo.gl/7r6f3HgcQNh8Y9dy9" target="_blank"
                        class="get-direction-btn text-white">
                        <img width="20" height="20" src="https://img.icons8.com/color/48/google-maps-new.png"
                          alt="google-maps-new" /> Get Direction
                      </a>
                    </div>

                    <button class="book-btn d-flex align-items-center" type="button" class="btn btn-primary"
                      data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">
                      <img width="15" height="15" src="https://img.icons8.com/ios-filled/50/FFFFFF/calendar--v1.png"
                        alt="calendar--v1" />
                      &nbsp;&nbsp;Book Appointment
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide col-lg-4">
              <div class="card">
                <div id="slider10" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner rounded">
                    <div class="carousel-item active">
                      <img src="assets/img/clinic/d1.jpg" class="d-block w-100" alt="Clinic">
                    </div>
                    <div class="carousel-item">
                      <img src="assets/img/clinic/n2.jpg" class="d-block w-100" alt="Clinic">
                    </div>
                  </div>

                  <!-- Prev Button -->
                  <button class="carousel-control-prev" type="button" data-bs-target="#slider10" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>

                  <!-- Next Button -->
                  <button class="carousel-control-next" type="button" data-bs-target="#slider10" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <div class="card-body">
                  <h5 class="clinic-title mb-4 mt-2">Dr. Azad Sexologist Clinic | Noida</h5>

                  <p class="address-text mb-4 d-flex align-items-start">
                    <img src="https://img.icons8.com/ios-filled/50/56931c/place-marker--v1.png" width="18" height="18"
                      alt="location-icon" class="me-2 mt-1" />
                    <span class='address-name'>
                      3rd floor, Bhawani Market, Delhi Metro Blue Line, Noida Sector 18, Atta Market, Pocket E, Sector
                      18, Noida, Uttar Pradesh 201301
                    </span>
                  </p>
                  <div class=" flex-wrap align-items-center gap-3">
                    <!-- Doctor Name -->
                    <a class="d-flex  align-items-center gap-2 text-decoration-none fw-bold text-dark mb-2">
                      <img width="20" height="20"
                        src="https://img.icons8.com/external-nawicon-glyph-nawicon/64/1A1A1A/external-doctor-medical-nawicon-mixed-nawicon-2.png" />
                      Dr. Azad, Dr. Irfan, Dr. Waseem
                    </a>

                    <!-- Timing -->
                    <a class="d-flex  align-items-center gap-2 text-decoration-none text-dark">
                      <img width="20" height="20" src="https://img.icons8.com/ios-filled/50/1A1A1A/clock--v1.png"
                        alt="clock--v1" />
                      MON-SUN: 10:00am - 6:45pm
                    </a>
                  </div>

                  <div class="card-footer-custom border-top pt-3 d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center text-info">
                      <a href="https://maps.app.goo.gl/r6gwBS3P6sR4KUX66" target="_blank"
                        class="get-direction-btn text-white">
                        <img width="20" height="20" src="https://img.icons8.com/color/48/google-maps-new.png"
                          alt="google-maps-new" /> Get Direction
                      </a>
                    </div>

                    <button class="book-btn d-flex align-items-center" type="button" class="btn btn-primary"
                      data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">
                      <img width="15" height="15" src="https://img.icons8.com/ios-filled/50/FFFFFF/calendar--v1.png"
                        alt="calendar--v1" />
                      &nbsp;&nbsp;Book Appointment
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide col-lg-4">
              <div class="card">
                <div id="slider9" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner rounded">
                    <div class="carousel-item active">
                      <img src="assets/img/clinic/aa1.jpg" class="d-block w-100" alt="Clinic">
                    </div>
                    <div class="carousel-item">
                      <img src="assets/img/clinic/aa2.jpg" class="d-block w-100" alt="Clinic">
                    </div>
                  </div>

                  <!-- Prev Button -->
                  <button class="carousel-control-prev" type="button" data-bs-target="#slider9" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>

                  <!-- Next Button -->
                  <button class="carousel-control-next" type="button" data-bs-target="#slider9" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <div class="card-body">
                  <h5 class="clinic-title mb-4 mt-2">Dr. Azad Sexologist Clinic | Lalitpur</h5>

                  <p class="address-text mb-4 d-flex align-items-start">
                    <img src="https://img.icons8.com/ios-filled/50/56931c/place-marker--v1.png" width="18" height="18"
                      alt="location-icon" class="me-2 mt-1" />
                    <span class='address-name'>
                      Rajghat Rd, Pisnari Tiraha, Lalitpur, Uttar Pradesh 284403
                    </span>
                  </p>
                  <div class="flex-wrap align-items-center gap-3">
                    <!-- Doctor Name -->
                    <a class="d-flex  align-items-center gap-2 text-decoration-none fw-bold text-dark mb-2">
                      <img width="20" height="20"
                        src="https://img.icons8.com/external-nawicon-glyph-nawicon/64/1A1A1A/external-doctor-medical-nawicon-mixed-nawicon-2.png" />
                      Dr. Azad
                    </a>

                    <!-- Timing -->
                    <a class="d-flex  align-items-center gap-2 text-decoration-none text-dark">
                      <img width="20" height="20" src="https://img.icons8.com/ios-filled/50/1A1A1A/clock--v1.png"
                        alt="clock--v1" />
                      Wednesday: 10:00am - 6:45pm
                    </a>
                  </div>

                  <div class="card-footer-custom border-top pt-3 d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center text-info">
                      <a href="https://maps.app.goo.gl/BvHEX2WLENZnRaNQA" target="_blank"
                        class="get-direction-btn text-white">
                        <img width="20" height="20" src="https://img.icons8.com/color/48/google-maps-new.png"
                          alt="google-maps-new" /> Get Direction
                      </a>
                    </div>

                    <button class="book-btn d-flex align-items-center" type="button" class="btn btn-primary"
                      data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">
                      <img width="15" height="15" src="https://img.icons8.com/ios-filled/50/FFFFFF/calendar--v1.png"
                        alt="calendar--v1" />
                      &nbsp;&nbsp;Book Appointment
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide col-lg-4">
              <div class="card">
                <div id="slider9" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner rounded">
                    <div class="carousel-item active">
                      <img src="assets/img/clinic/aa1.jpg" class="d-block w-100" alt="Clinic">
                    </div>
                    <div class="carousel-item">
                      <img src="assets/img/clinic/aa2.jpg" class="d-block w-100" alt="Clinic">
                    </div>
                  </div>

                  <!-- Prev Button -->
                  <button class="carousel-control-prev" type="button" data-bs-target="#slider9" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>

                  <!-- Next Button -->
                  <button class="carousel-control-next" type="button" data-bs-target="#slider9" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <div class="card-body">
                  <h5 class="clinic-title mb-4 mt-2">Dr. Azad Sexologist Clinic | Bharatpur</h5>

                  <p class="address-text mb-4 d-flex align-items-start">
                    <img src="https://img.icons8.com/ios-filled/50/56931c/place-marker--v1.png" width="18" height="18"
                      alt="location-icon" class="me-2 mt-1" />
                    <span class='address-name'>
                      Biharilal Plaza, Opposite Brijwasi Hotel, New Bus Stand, Mathura 281001, Bharatpur HO-321001
                    </span>
                  </p>
                  <div class="flex-wrap align-items-center gap-3">
                    <!-- Doctor Name -->
                    <a class="d-flex  align-items-center gap-2 text-decoration-none fw-bold text-dark mb-2">
                      <img width="20" height="20"
                        src="https://img.icons8.com/external-nawicon-glyph-nawicon/64/1A1A1A/external-doctor-medical-nawicon-mixed-nawicon-2.png" />
                      Dr. Azad
                    </a>

                    <!-- Timing -->
                    <a class="d-flex  align-items-center gap-2 text-decoration-none text-dark">
                      <img width="20" height="20" src="https://img.icons8.com/ios-filled/50/1A1A1A/clock--v1.png"
                        alt="clock--v1" />
                      MON-SUN: 10:00am - 6:45pm
                    </a>
                  </div>

                  <div class="card-footer-custom border-top pt-3 d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center text-info">
                      <a href="https://maps.app.goo.gl/UTWpKMd5V9NynRom7" target="_blank"
                        class="get-direction-btn text-white">
                        <img width="20" height="20" src="https://img.icons8.com/color/48/google-maps-new.png"
                          alt="google-maps-new" /> Get Direction
                      </a>
                    </div>

                    <button class="book-btn d-flex align-items-center" type="button" class="btn btn-primary"
                      data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">
                      <img width="15" height="15" src="https://img.icons8.com/ios-filled/50/FFFFFF/calendar--v1.png"
                        alt="calendar--v1" />
                      &nbsp;&nbsp;Book Appointment
                    </button>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="swiper-pagination mt-4 text-center"></div>
        </div>
      </div>
      <div class="cs_pagination cs_style_2"></div>
    </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </section>
  <!-- End Blog Section -->

  <!-- Start Why Choose Us Section -->
  <section class="cs_gray_bg cs_bg_filed" data-src="assets/img/service_bg_2.jpg">
    <div class="cs_height_110 cs_height_lg_70"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="cs_section_heading cs_style_1">
            <p class="cs_section_subtitle cs_accent_color wow fadeInLeft" data-wow-duration="0.9s"
              data-wow-delay="0.25s"><span class="cs_shape_left"></span> WHY CHOOSE US</p>
            <h2 class="cs_section_title">We Treat the Root Cause of All Sexual Health Problems Naturally</h2>
          </div>
          <div class="cs_height_50 cs_height_lg_50"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-xxl-7 col-xl-8 col-lg-9">
          <div class="cs_service_wrapper">
            <div class="cs_service_list">
              <div class="cs_iconbox cs_style_3">
                <div class="cs_iconbox_icon cs_center cs_radius_5">
                  <img src="assets/img/Icons-whyC/Expert-Ayurvedic.png" alt="Icon">
                </div>
                <div class="cs_iconbox_text">
                  <h3 class="cs_iconbox_title">Expert Ayurvedic Care for Sexual Wellness</h3>
                  <p class="cs_iconbox_subtitle">Holistic and natural Ayurvedic solutions for all sexual health
                    concerns.</p>
                </div>
              </div>
              <div class="cs_iconbox cs_style_3">
                <div class="cs_iconbox_icon cs_center cs_radius_5">
                  <img src="assets/img/Icons-whyC/Personalized-Ayurvedic.png" alt="Icon">
                </div>
                <div class="cs_iconbox_text">
                  <h3 class="cs_iconbox_title">Personalized Ayurvedic Treatment Plans</h3>
                  <p class="cs_iconbox_subtitle">Customized herbal therapies to restore vitality and balance.</p>
                </div>
              </div>
              <div class="cs_iconbox cs_style_3">
                <div class="cs_iconbox_icon cs_center cs_radius_5">
                  <img src="assets/img/Icons-whyC/Confidential.png" alt="Icon">
                </div>
                <div class="cs_iconbox_text">
                  <h3 class="cs_iconbox_title">100% Confidential Consultation</h3>
                  <p class="cs_iconbox_subtitle">Your privacy is our priority. All consultations are discreet and
                    secure.</p>
                </div>
              </div>
              <div class="cs_iconbox cs_style_3">
                <div class="cs_iconbox_icon cs_center cs_radius_5">
                  <img src="assets/img/Icons-whyC/Safe-Natural.png" alt="Icon">
                </div>
                <div class="cs_iconbox_text">
                  <h3 class="cs_iconbox_title">Safe & Natural Herbal Remedies</h3>
                  <p class="cs_iconbox_subtitle">Pure Ayurvedic herbs for long-term sexual health with no side effects.
                  </p>
                </div>
              </div>
              <div class="cs_iconbox cs_style_3">
                <div class="cs_iconbox_icon cs_center cs_radius_5">
                  <img src="assets/img/Icons-whyC/Restore-Energy.png" alt="Icon">
                </div>
                <div class="cs_iconbox_text">
                  <h3 class="cs_iconbox_title">Restore Energy & Strength Naturally</h3>
                  <p class="cs_iconbox_subtitle">Ayurvedic therapies to boost stamina and improve performance.</p>
                </div>
              </div>
              <div class="cs_iconbox cs_style_3">
                <div class="cs_iconbox_icon cs_center cs_radius_5">
                  <img src="assets/img/Icons-whyC/Revitalize.png" alt="Icon">
                </div>
                <div class="cs_iconbox_text">
                  <h3 class="cs_iconbox_title">Revitalize Your Intimacy with Ayurveda</h3>
                  <p class="cs_iconbox_subtitle">Enhance your relationship with holistic Ayurvedic treatments.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </section>
  <!-- End Why Choose Us Section -->



  <!-- Start Testimonial Section -->
  <section class="cs_testimonial_area" data-src="assets/img/testomonial_bg_1.png">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
      <div class="cs_section_heading cs_style_1 text-center">
        <p class="cs_section_subtitle cs_accent_color wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.25s">
          <span class="cs_shape_left"></span>Our Testimonials<span class="cs_shape_right"></span>
        </p>
        <h2 class="cs_section_title">Our Happy Patients</h2>
      </div>
      <div class="cs_height_50 cs_height_lg_50"></div>
      <div class="row cs_gap_y_50 align-items-center">
        <div class="col-lg-12">
          <div class="cs_slider cs_style_1 cs_slider_gap_24 position-relative">
            <div class="cs_slider_container" data-autoplay="1" data-loop="1" data-speed="600" data-center="0"
              data-variable-width="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="1"
              data-md-slides="1" data-lg-slides="1" data-add-slides="1">
              <div class="cs_slider_wrapper">
                <?php
                include('db_con.php');
                $result = $con->query("SELECT name, review, designation, url, image_path FROM add_testimonial");
                while ($row = $result->fetch_assoc()):
                  ?>
                  <div class="cs_slide">
                    <div class="row cs_gap_y_50 align-items-center">
                      <!-- Video section -->
                      <div class="col-lg-5 wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.25s">
                        <div class="cs_testimonial_thumbnail">
                          <iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php echo $row['url']; ?>"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                          </iframe>
                        </div>
                      </div>

                      <!-- Text Section -->
                      <div class="col-lg-7">
                        <div class="cs_testimonial_content">
                          <div class="cs_testimonial cs_style_1">
                            <div class="cs_testimonial_info">
                              <div class="cs_rating_container">
                                <div class="cs_rating" data-rating="5">
                                  <div class="cs_rating_percentage"></div>
                                </div>
                              </div>
                              <p class="cs_testimonial_subtitle"><?php echo $row['review']; ?></p>
                            </div>
                            <div class="cs_avatar cs_style_1">
                              <div class="cs_avatar_thumbnail cs_center">
                                <img src="admin/<?php echo $row['image_path']; ?>" alt="Avatar">
                              </div>
                              <div class="cs_avatar_info">
                                <h3 class="cs_avatar_title"><?php echo $row['name']; ?></h3>
                                <p class="cs_avatar_subtitle mb-0"><?php echo $row['designation']; ?></p>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>

                    </div> <!-- row end -->
                  </div> <!-- cs_slide end -->
                <?php endwhile; ?>
              </div> <!-- cs_slider_wrapper -->
            </div>
            <div class="cs_pagination cs_style_2 cs_accent_color cs_flex_left"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </section>

  <!-- End Testimonial Section -->

  <!-- Start Medical Solution Section -->
  <section class="cs_contact">
    <div class="cs_height_110 cs_height_lg_70"></div>
    <div class="container">
      <div class="row cs_gap_y_30">
        <div class="col-lg-6">
          <div class="cs_section_heading cs_style_1">
            <p class="cs_section_subtitle cs_accent_color wow fadeInLeft" data-wow-duration="0.9s"
              data-wow-delay="0.25s">
              <span class="cs_shape_left"></span>CONTACT US
            </p>
            <h2 class="cs_section_title">Get in Touch for Expert <span style="color:#6c911e">Ayurvedic</span> Guidance
            </h2>
          </div>
          <div class="cs_height_25 cs_height_lg_25"></div>
          <form class="cs_contact_form row cs_gap_y_30" method="POST" action="save_contact.php" id="enquiryForm">
            <div class="col-md-12">
              <input type="text" class="cs_form_field" name="name" placeholder="Full Name">
            </div>
            <div class="col-md-6">
              <input type="email" class="cs_form_field" name="email" placeholder="Your Email">
            </div>
            <div class="col-md-6">
              <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter Phone Number"
                pattern="\d{10}" maxlength="10" minlength="10" required title="Please enter exactly 10 digits">

            </div>
            <div class="col-md-6">
              <input type="text" class="cs_form_field" name="city" placeholder="City">
            </div>
            <div class="col-md-6">
              <select name="type" class="cs_form_field">
                <option value="choose-service" disabled selected>Choose Service</option>
                <option value="premature_ejaculation">Premature Ejaculation</option>
                <option value="erectile_dysfunction">Erectile Dysfunction</option>
                <option value="night_fall">Night Fall</option>
                <option value="low_libido">Low Libido</option>
                <option value="delayed_ejaculation">Delayed Ejaculation</option>
                <option value="penis_enlargement">Penis Enlargement</option>
                <option value="low_sperm_count">Low Sperm Count</option>
                <option value="diabetes">Diabetes</option>
                <option value="anxiety_stress">Anxiety and Stress</option>
                <option value="piles_treatment">Piles Treatment</option>
                <option value="phimosis_treatment">Phimosis Treatment</option>
                <option value="hair_fall_treatment">Hair Fall Treatment</option>

              </select>
            </div>
            <div class="col-lg-12">
              <textarea rows="5" class="cs_form_field" name="message" id="message"
                placeholder="Your comments"></textarea>
              <small id="wordCountMsg" style="color: red;"></small>

            </div>

            <div class="col-lg-12">
              <button type="submit" name="submit" class="cs_btn cs_style_1 cs_color_1">Submit</button>
            </div>
          </form>
        </div>
        <div class="col-lg-6">
          <div class="cs_contact_thumbnail cs_pl-40">
            <div class="cs_teeth_shape">
              <img src="assets/img/icons/hero_shape_3.png" alt="Image" class="cs_spinner_img">
            </div>
            <div class="cs_contact_img">
              <img src="assets/img/contact.png" alt="Image">
            </div>
            <div class="cs_contact_bg_shape">
              <div class="cs_white_bg_shape"></div>
              <div class="cs_iconbox cs_style_4">
                <div class="cs_iconbox_icon cs_center"><img src="https://img.icons8.com/3d-fluency/whatsapp-logo.png"
                    alt="Icon"></div>
                <div class="cs_iconbox_right">
                  <h3 class="cs_iconbox_title"><a target="_blank" href="https://wa.me/919761181199">+91-97611 81199</a>
                  </h3>
                  <p class="cs_iconbox_subtitle mb-0">Let’s Talk! Tap to WhatsApp Us Directly </p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </section>
  <!-- End Medical Solution Section -->
  <!-- Start Blog Section -->
  <section>
    <div class="cs_height_110 cs_height_lg_70"></div>
    <div class="container">
      <div class="cs_section_heading cs_style_1 text-center">
        <p class="cs_section_subtitle cs_accent_color wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.25s">
          <span class="cs_shape_left"></span>OUR LATEST BLOG<span class="cs_shape_right"></span>
        </p>
        <h2 class="cs_section_title">Latest Blogs</h2>
      </div>
      <div class="cs_height_50 cs_height_lg_50"></div>
      <div class="cs_slider cs_style_1 cs_slider_gap_24">
        <div class="cs_slider_container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0"
          data-variable-width="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2"
          data-md-slides="3" data-lg-slides="3" data-add-slides="3">
          <div class="cs_slider_wrapper">
            <?php
            include('db_con.php');
            $sql = "SELECT blogs.blog_heading AS heading, 
                            blogs_images.image, 
                            blogs.blog_url,
                            blogs.created_at
                            FROM blogs
                            INNER JOIN blogs_images ON blogs.id = blogs_images.blog_id
                            GROUP BY blogs.id  
                            ORDER BY blogs.created_at";
            $result = $con->query($sql);
            if ($result->num_rows > 0)
            {
              while ($row = $result->fetch_assoc())
              {
                $heading = $row['heading'];
                $image = $row['image'];
                $blog_url = $row['blog_url'];
                $created_at = $row['created_at'];
                $formatted_date = date("j F Y", strtotime($created_at));
                ?>
                <div class="cs_slide">
                  <article class="cs_post cs_style_1">
                    <a class="cs_post_thumbnail position-relative" href="blog/<?php echo $blog_url; ?>">
                      <img src="blog/blog_uploads/<?php echo $image; ?>" alt="post Thumbnail">
                      <!--<div class="cs_post_category position-absolute">Medical</div>-->
                    </a>
                    <div class="cs_post_content position-relative">
                      <div class="cs_post_meta_wrapper">
                        <div class="cs_posted_by cs_center position-absolute"><?php echo $formatted_date; ?></div>
                        <div class="cs_post_meta_item">
                          <img src="assets/img/icons/post_user_icon.png" alt="Icon">
                          <span>By: Dr. Azad</span>
                        </div>

                      </div>
                      <h3 class="cs_post_title"><a href="blog/<?php echo $blog_url; ?>"><?php echo $heading; ?>
                        </a>
                      </h3>

                      <a class="cs_post_btn" href="blog/<?php echo $blog_url; ?>">
                        <span>Read More</span>
                        <span><i class="fa-solid fa-angle-right"></i></span>
                      </a>
                      <div class="cs_post_shape position-absolute"></div>
                    </div>
                  </article>
                </div>
                <?php
              }
            } else
            {

              echo "<p class='text-black mt-2 text-center blog-not-fount mt-4'>No blog found for today</p>";
            }
            ?>
          </div>
        </div>
        <div class="cs_pagination cs_style_2"></div>
      </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </section>
  <!-- End Blog Section -->

  <!-- Start Hero Section -->
  <section>
    <div class="cs_iconbox_4_wrap">
      <div class="container">
        <div class="row cs_gap_y_30">
          <div class="col-lg-4">
            <div class="cs_iconbox cs_style_4">
              <div class="cs_iconbox_icon cs_center"><img src="assets/img/icons/call_icon_1.png" alt=""></div>
              <div class="cs_iconbox_right">
                <h3 class="cs_iconbox_title">Mobile Number</h3>
                <a href="tel:+91 9761181199">
                  <p class="cs_iconbox_subtitle">+91-9761181199</p>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_iconbox cs_style_4">
              <div class="cs_iconbox_icon cs_center"><img
                  src="https://img.icons8.com/pastel-glyph/128/FFFFFF/whatsapp--v2.png" alt=""></div>
              <div class="cs_iconbox_right">
                <h3 class="cs_iconbox_title">WhatsApp Number</h3>
                <a href="https://wa.me/919761181199" target="_blank">
                  <p class="cs_iconbox_subtitle">+91-9761181199</p>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cs_iconbox cs_style_4 p-20" style='height:170px'>
              <div class="cs_iconbox_icon cs_cente"><img
                  src="https://img.icons8.com/external-yogi-aprelliyanto-basic-outline-yogi-aprelliyanto/64/FFFFFF/external-calender-time-and-date-yogi-aprelliyanto-basic-outline-yogi-aprelliyanto.png"
                  alt="" /></div>
              <div class="cs_iconbox_right">

                <p class="cs_iconbox_subtitle"> <a class="cs_btn cs_style_1 cs_color_1" data-bs-toggle="modal"
                    data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap" style="cursor:pointer;">
                    <span>Book Appointment </span>
                    <i class="fa-solid fa-angles-right"></i>
                  </a></p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </section>
  <!-- End Hero Section -->
  <!-- Start Footer -->
  <?php
  include('footer.php');
  ?>
  <!-- End Footer -->
  <!-- Start Scroll Up Button -->
  <span class="cs_scrollup">
    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 10L1.7625 11.7625L8.75 4.7875V20H11.25V4.7875L18.225 11.775L20 10L10 0L0 10Z" fill="currentColor" />
    </svg>
  </span>
  <!-- End Scroll Up Button -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel" style="color:#cdb16c !important;">Book Appointment</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="book_appointment.php" class="bookForm">
          <div class="modal-body">

            <div class="mb-1">
              <label for="recipient-name" class="col-form-label">Full Name</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Enter Full Name">
            </div>
            <div class="mb-1">
              <label for="recipient-name" class="col-form-label">Phone Number</label>
              <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter Phone Number"
                pattern="\d{10}" maxlength="10" minlength="10" required title="Please enter exactly 10 digits">


            </div>
            <div class="mb-1">
              <label for="disease" class="col-form-label">Select Disease</label>
              <select class="form-control" id="disease" name="disease">
                <option value="" disabled selected>-- Select a Disease --</option>
                <option value="Premature Ejaculation">Premature Ejaculation</option>
                <option value="Erectile Dysfunction">Erectile Dysfunction</option>
                <option value="Nightfall">Nightfall</option>
                <option value="Low Libido">Low Libido</option>
                <option value="Delayed Ejaculation">Delayed Ejaculation</option>
                <option value="Penis Enlargement">Penis Enlargement</option>
                <option value="Low Sperm Count">Low Sperm Count</option>
                <option value="Diabetes">Diabetes</option>
                <option value="Anxiety & Stress">Anxiety & Stress</option>
                <option value="Piles Treatment">Piles Treatment</option>
                <option value="Phimosis Treatment">Phimosis Treatment</option>
                <option value="Hair Fall Treatment">Hair Fall Treatment</option>
              </select>
            </div>
            <div class="mb-1">
              <label for="recipient-name" class="col-form-label">Problem</label>
              <input type="text" name="problem" class="form-control" id="problem" placeholder="Enter Your Problem">
            </div>

            <div class="mb-1">
              <label for="recipient-name" class="col-form-label">City</label>
              <input type="text" name="city_name" class="form-control" id="city_name" placeholder="Enter Your City">
            </div>


            <div class="col-lg-12 mb-1">
              <label class="col-form-label">Appointment Date</label>


              <input type="date" class="cs_form_field form-control" id="appointment_date" name="appointment_date"
                placeholder="Select Date">
            </div>

            <div class="col-lg-12 mb-1">
              <label class="col-form-label">Appointment Time</label>

              <select class="cs_form_field form-control" name="appointment_time" id="appointment_time">
                <option value="" disabled selected>Select Time</option>
                <option value="09:00 AM-10:00 AM">09:00 AM - 10:00 AM</option>
                <option value="10:00 AM-11:00 AM">10:00 AM - 11:00 AM</option>
                <option value="11:00 AM-12:00 PM">11:00 AM - 12:00 PM</option>
                <option value="12:00 PM-01:00 PM">12:00 PM - 01:00 PM</option>
                <option value="02:00 PM-03:00 PM">02:00 PM - 03:00 PM</option>
                <option value="03:00 PM-04:00 PM">03:00 PM - 04:00 PM</option>
                <option value="04:00 PM-05:00 PM">04:00 PM - 05:00 PM</option>
                <option value="05:00 PM-06:00 PM">05:00 PM - 06:00 PM</option>
              </select>
            </div>
            <div class="mb-1">
              <label for="consultation-fee" class="col-form-label">Consultation Fees (₹)</label>
              <input type="text" name="fees" class="form-control" id="consultation_fee" value="99" readonly>

            </div>

          </div>
          <div class="modal-footer" style="justify-content:center;">

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <!-- Script -->
  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/jquery.slick.min.js"></script>
  <script src="assets/js/odometer.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#enquiryForm').submit(function (e) {
        e.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
          url: 'save_contact.php',
          type: 'POST',
          data: formData,
          success: function (response) {
            if (response == 'success') {

              Swal.fire({
                icon: 'success',
                title: 'Thank you!',
                text: 'Your message has been successfully sent.',
              }).then(function () {

                $('#enquiryForm')[0]
                  .reset();
              });
            } else {

              Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please fill All Fields.',
              });
            }
          },
          error: function () {

            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Please fill All Fields.',
            });
          }
        });
      });
    });
  </script>
  <script>
    $(document).ready(function () {
      $('.bookForm').submit(function (e) {
        e.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
          url: 'book_appointment.php',
          type: 'POST',
          data: formData,
          success: function (response) {
            if (response == 'success') {

              Swal.fire({
                icon: 'success',
                title: 'Thank you!',
                text: 'Your appointment has been successfully booked. We look forward to seeing you at the scheduled time. If you need to have any questions, feel free to contact us.',
              }).then(function () {

                $('.bookForm')[0]
                  .reset();
              });
            } else {

              Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please fill All Fields.',
              });
            }
          },
          error: function () {

            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Please fill All Fields.',
            });
          }
        });
      });
    });
  </script>

  <script>
    var swiper = new Swiper(".mySwiper", {
      loop: true,
      spaceBetween: 30,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        576: {
          slidesPerView: 2,
        },
        992: {
          slidesPerView: 2,
        },
        1200: {
          slidesPerView: 3,
        }
      }
    });

  </script>
  <style>
    .swiper-pagination-bullet {
      background: #6c911e;
      opacity: 0.5;
      width: 10px;
      height: 10px;
      margin: 0 5px;
      border-radius: 50%;
      transition: all 0.3s ease;
    }

    .swiper-pagination-bullet-active {
      opacity: 1;
      background: #2f4907;
    }
  </style>
  <script>
    document.getElementById("message").addEventListener("input", function () {
      const textarea = this;
      const words = textarea.value.trim().split(/\s+/);
      const wordCount = textarea.value.trim() === "" ? 0 : words.length;

      if (wordCount > 300) {
        // Limit to first 300 words
        textarea.value = words.slice(0, 300).join(" ");
        document.getElementById("wordCountMsg").textContent = "Maximum 300 words allowed.";
      } else {
        document.getElementById("wordCountMsg").textContent = "";
      }
    });
  </script>
</body>

</html>