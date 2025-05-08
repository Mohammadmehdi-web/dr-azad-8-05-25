<?php include 'check_session.php' ?>
<?php
include('../db_con.php');
include('header.php');
// Get total count of projects
$total_blog = $con->query("SELECT COUNT(*) AS total FROM blogs")->fetch_assoc()['total'];
$total_query = $con->query("SELECT COUNT(*) AS total FROM contact")->fetch_assoc()['total'];
$total_testimonials = $con->query("SELECT COUNT(*) AS total FROM add_testimonial")->fetch_assoc()['total'];
$total_apointment = $con->query("SELECT COUNT(*) AS total FROM book_appointement")->fetch_assoc()['total'];
?>
<!-- END SIDEBAR-->
<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="ibox color-white widget-stat" style="background-color: #cc842e !important;">
                    <div class="ibox-body">
                        <h2 class="m-b-5 font-strong"><?php echo $total_apointment; ?></h2>
                        <div class="m-b-5"><a href='booklist' class='text-white fw-bold'>Total Appointment</a></div><i
                            class=" widget-stat-icon"><img width="50" height="50"
                                src="https://img.icons8.com/ios-filled/50/FFFFFF/calendar--v1.png"
                                alt="google-blog-search" /></i>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="ibox bg-success color-white widget-stat">
                    <div class="ibox-body">
                        <h2 class="m-b-5 font-strong"><?php echo $total_blog; ?></h2>
                        <div class="m-b-5"><a href='blog_list' class='text-white fw-bold'>Total Blogs</a></div><i
                            class=" widget-stat-icon"><img width="50" height="50"
                                src="https://img.icons8.com/ios-filled/50/FFFFFF/google-blog-search.png"
                                alt="google-blog-search" /></i>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="ibox bg-info color-white widget-stat">
                    <div class="ibox-body">
                        <h2 class="m-b-5 font-strong"><?php echo $total_testimonials; ?></h2>
                        <div class="m-b-5"><a href='testimonials_list' class='text-white fw-bold'>Total Testimonials</a>
                        </div><i class="widget-stat-icon"><img width="50" height="50"
                                src="https://img.icons8.com/external-kmg-design-glyph-kmg-design/32/FFFFFF/external-feedback-feedback-kmg-design-glyph-kmg-design.png" /></i>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="ibox  color-white widget-stat" style="background:#1f9312f5">
                    <div class="ibox-body">
                        <h2 class="m-b-5 font-strong"><?php echo $total_query; ?></h2>
                        <div class="m-b-5"><a href='querylist' class='text-white fw-bold'>Total Query</a></div><i
                            class="widget-stat-icon"><img width="50" height="50"
                                src="https://img.icons8.com/ios-filled/50/FFFFFF/ask-question.png"
                                alt="ask-question" /></i>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include('footer.php');
    ?>