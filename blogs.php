<!DOCTYPE html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="ThemeServices">
  <!-- Favicon Icon -->
  <link rel="icon" href="assets/img/favicon.jpg">
  <!-- Site Title -->
  <title>Sex Problem Treatment | Blogs</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/fontawesome.min.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/css/odometer.css">
  <link rel="stylesheet" href="assets/css/slick.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
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

    .cs_post.cs_style_1 .cs_post_thumbnail {
      display: inline-block;
      padding: 0 0px;
      margin-bottom: -8px;
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
  <!-- End Header Section -->
  <!-- Start Page Heading -->
  <section class="cs_page_heading cs_bg_filed cs_center" data-src="assets/img/page_heading_bg.jpg">
    <div class="container">
      <h1 class="cs_page_title">Blogs</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href='https://auctest.rf.gd/dr.azad/'>Home</a></li>
        <li class="breadcrumb-item active">Blogs</li>
      </ol>
    </div>
  </section>
  <!-- End Page Heading -->
  <!-- Start Blog Section -->
  <section>
    <div class="cs_height_110 cs_height_lg_70"></div>
    <div class="container">
      <div class="cs_section_heading cs_style_1 text-center">
        <p class="cs_section_subtitle cs_accent_color wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.25s">
          <span class="cs_shape_left"></span>OUR LARGEST BLOG<span class="cs_shape_right"></span>
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
          <h5 class="modal-title" id="exampleModalLabel" style="color:#cdb16c !important;">Book Appointment
          </h5>
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
</body>

</html>