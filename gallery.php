<!DOCTYPE html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Dr. Azad Sexologist Clinic">
  <!-- Favicon Icon -->
  <link rel="icon" href="assets/img/favicon.jpg">
  <!-- Site Title -->
  <title>Dr. Azad Sexologist Clinic | Gallery</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/fontawesome.min.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/css/odometer.css">
  <link rel="stylesheet" href="assets/css/slick.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.2.0/magnific-popup.css" />

  <!-- jQuery Links -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <style>
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

    .text-justify {
      text-align: justify;
    }

    span.text {
      font-size: 15px !important;
    }

    .contact-form .input-wrapper textarea {
      width: 100%;
      height: 150px;
      border: 1px solid rgb(126 126 126 / 20%);
      background: none !important;
      color: #8a8787;

    }

    textarea::placeholder {
      color: #7c8194 !important;
    }

    p {
      font-size: 16px;
      text-align: justify;
    }

    .text-wrapper-one p {
      color: #071106;
      font-size: 16px;
    }

    /* Gallery Styles */
    .gallery_container {
      max-width: 1200px;
      margin: 0 auto;
    }

    @media (min-width: 1300px) and (max-width: 2560px) {
      .popup-gallery {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 10px;
      }
    }

    @media (min-width: 700px) and (max-width: 1299px) {
      .popup-gallery {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 10px;
      }
    }

    @media (min-width: 300px) and (max-width: 699px) {
      .popup-gallery {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 5px;
      }
    }

    .gallery_item {
      margin-bottom: 5px;
      overflow: hidden;
    }

    .popup-gallery a {
      display: block;
      width: 100%;
      border: 1px solid #fff;
      overflow: hidden;
      transition: transform 0.3s ease, border-color 0.3s ease;
    }

    .popup-gallery a:hover {
      transform: scale(1.05);
      border-color: #fff;
    }

    .popup-gallery img {
      display: block;
      width: 100%;
      object-fit: cover;
      min-height: 300px;
      max-height: 300px;
      border-radius: 19px;
    }

    @media only screen and (max-width: 1000px) {
      .popup-gallery img {
        min-height: 150px;
        max-height: 150px;
      }
    }

    /* END  */

    .singicon_btn_nlf {
      position: absolute;
      top: 44%;
      bottom: 56%;
      left: 44%;
      right: 56%;
      opacity: 0;
    }

    .singicon_btn_nlf svg {
      color: #fff;
    }

    .popup-gallery a:hover .singicon_btn_nlf {
      opacity: 1;
    }

    .hover_affect_nlf:hover img {
      opacity: 0.5;
    }

    .gallery-not-found {
      margin-top: 17px !important;
      background: #ff4d4d38 !important;
      padding: 10px !important;
      color: black !important;
      font-size: 20px !important;
      font-weight: bold !important;
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
  <!-- Start Page Heading -->
  <section class="cs_page_heading cs_bg_filed cs_center" data-src="assets/img/page_heading_bg.jpg">
    <div class="container">
      <h1 class="cs_page_title">Gallery</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href='https://sexproblemtreatment.com/'>Home</a></li>
        <li class="breadcrumb-item active">Gallery</li>
      </ol>
    </div>
  </section>
  <!-- End Page Heading -->
  <!-- Start Blog Section -->
  <section>
    <div class="cs_height_120 cs_height_lg_80"></div>
    <?php
    include('db_con.php');

    $result = $con->query("SELECT image_path FROM  gallery");
    ?>
    <div class="gallery_container">
      <div class="title-style-one text-center mb-50">

        <h2 class="section-title" data-aos="fade-up" data-aos-delay="120">Our Gallery</h2>
      </div>
      <div class="popup-gallery">
        <?php if ($result->num_rows > 0): ?>
          <?php while ($row = $result->fetch_assoc()): ?>
            <div class="gallery_item">
              <a class="hover_affect_nlf position-relative" href="admin/<?php echo ($row['image_path']); ?>"
                title="Image 1">
                <img src="admin/<?php echo ($row['image_path']); ?>" alt="Thumbnail 1">
                <span class="singicon_btn_nlf">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                    <path
                      d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z" />
                  </svg>
                </span>
              </a>
            </div>
          <?php endwhile; ?>

        </div>
      <?php else: ?>

        <p class="text-center gallery-not-found w-100" style="grid-template-columns: repeat(1fr);">No Gallery Images
          found.</p>


      <?php endif; ?>
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
              <div class="cs_iconbox_icon cs_center"><img src="assets/img/icons/call_icon_1.png" alt="">
              </div>
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
            <div class="row">
              <div class="mb-1 col-lg-12">
                <label for="recipient-name" class="col-form-label">Full Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Full Name">
              </div>
            </div>
            <div class="row">
              <div class="mb-1 col-lg-6">
                <label for="recipient-name" class="col-form-label">Phone Number</label>
                <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter Phone Number"
                  pattern="\d{10}" maxlength="10" minlength="10" required title="Please enter exactly 10 digits">
              </div>
              <div class="mb-1 col-lg-6">
                <label for="recipient-name" class="col-form-label">City</label>
                <input type="text" name="city_name" class="form-control" id="city_name" placeholder="Enter Your City">
              </div>
            </div>
            <div class="row">
              <div class="mb-1 col-lg-6">
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
                  <option value="Other">Other</option>
                </select>
              </div>
              <div class="mb-1 col-lg-6">
                <label for="recipient-name" class="col-form-label">Problem</label>
                <input type="text" name="problem" class="form-control" id="problem" placeholder="Enter Your Problem">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 mb-1">
                <label class="col-form-label">Appointment Date</label>
                <input type="date" class="cs_form_field form-control" id="appointment_date" name="appointment_date"
                  placeholder="Select Date">
              </div>
              <div class="col-lg-6 mb-1">
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
  <script>

    jQuery(document).ready(function ($) {
      $(".popup-gallery").magnificPopup({
        delegate: "a",
        type: "image",
        tLoading: "Loading image #%curr%...",
        mainClass: "mfp-img-mobile",
        gallery: {
          enabled: true,
          navigateByImgClick: true,
          preload: [0, 1]
        },
        image: {
          tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
          titleSrc: function (item) {
            return item.el.attr("title") || "";
          }
        }
      });
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
                title: 'Thank You for Booking!',
                text: "We’ve received your request and will contact you shortly to confirm the details. We look forward to assisting you!",
              }).then(function () {

                  $('.bookForm')[0]
                    .reset();
                });
            } else {

              Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please fill in all Fields.',
              });
            }
          },
          error: function () {

            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Something went wrong. Please try again later.',
            });
          }
        });
      });
    });
  </script>

</body>

</html>