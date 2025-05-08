<style>
  .sticky-footer {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 60px;
    background-color: #ffffff;
    border-top: 1px solid #ddd;
    box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
    z-index: 1000;
  }

  .align-items-start {
    font-size: 14px;

  }

  .footer-widget .widget-title::before {
    content: "";
    position: absolute;
    background: #4aab3d;
    width: 50px;
    height: 4px;
    left: 0;
    top: 100%;
    z-index: 1;
  }

  .phone-link {
    flex: 1;
    text-decoration: none;
    color: #a88835;
    font-size: 1rem;
    font-weight: bold;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    background-color: #f9f9f9;
    height: 100%;
  }

  .phone-link i {
    font-size: 1.2rem;
  }

  .demo-btn {
    flex: 1;
    height: 100%;
    background-color: #a88835;
    color: #ffffff;
    font-size: 14px;
    font-weight: bold;
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
    text-transform: uppercase;
  }

  .demo-btn:hover {
    background-color: #a88835;
  }

  /* Mobile Optimization */
  @media (max-width: 768px) {
    .sticky-footer {
      height: 50px;
    }

    .phone-link,
    .demo-btn {
      font-size: 0.9rem;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .cs_scrollup.cs_scrollup_show {
      bottom: 60px;
    }

    .cs_site_branding img {
      width: 75px !important;
    }
  }

  @media screen and (min-width:500px) {
    .res-dd-none {
      display: none !important;
    }
  }

  @media screen and (max-width:500px) {
    .res-mob-none {
      display: none !important;
    }
  }
</style>
<footer class="cs_footer cs_blue_bg cs_bg_filed cs_white_color" data-src="assets/img/footer_bg.jpg">
  <div class="container">
    <div class="cs_footer_row">
      <div class="cs_footer_col">
        <div class="cs_footer_highlight_col cs_accent_bg">
          <div class="cs_footer_logo">
            <img style="width: 100px;"
              src="assets/img/logo.jpg"
              alt="Logo">
          </div>
          <ul class="cs_footer_contact cs_mp_0">
           <li>
              <i class="fa-solid fa-phone"></i>
              <a href="tel:9761181199" class="text-light">

                +91-97611 81199
              </a>

            </li>
             <h5 class="widget-title text-white"> Head Office</h5>
            <li>
              <i class="fa-solid fa-location-dot"></i>
                <a href="https://www.google.com/maps?q=First+Floor+Bihari+Lal+Plaza+Near+Bus+Stand+Mathura+Pin-281001" target="_blank">
                First Floor Bihari Lal Plaza Near Bus Stand Mathura Pin-281001
                </a>
            </li>
            <h5 class="widget-title text-white">Our Branches</h5>
            
                <li class="" style=" display: flex; width: 100%; flex-wrap: wrap; gap: 4px; ">
                  <a class="d-flex align-items-start cs_iconbox_subtitle" href="https://www.google.com/maps?q=Bihari+Lal+Plaza,+Shop+No.+10,11,+1st+Floor,+Near+New+Bus+Stand,+Mathura,+281001" target="_blank">Mathura </a> |
             
                  
                  <a class="d-flex align-items-start cs_iconbox_subtitle" href="https://www.google.com/maps?q=Near+Sanjay+Park+Bus+Stand,+Market,+Bairial,+Morena,+476001" target="_blank">Morena |</a>
             
                  
                  <a class="d-flex align-items-start cs_iconbox_subtitle" href="https://www.google.com/maps?q=Ganesh+Plaza+Morar+Road+Near+Gole+ka+mandir+chauraha,+Gwalior,+474005" target="_blank">Gwalior |</a>
                

                  <a class="d-flex align-items-start cs_iconbox_subtitle" href="https://www.google.com/maps?q=Near+shanidev+mandir+kabula+pul,+Sagar,+470001" target="_blank"> Sagar |</a>
             

                  <a class="d-flex align-items-start cs_iconbox_subtitle" href="https://www.google.com/maps?q=3rd+Floor+Manchanda+House+Building+Opposite+Mahana+Petrol+Pump+Alam+Bagh+Lucknow,+Lucknow,+226001" target="_blank">Lucknow |</a>
              

                  <a class="d-flex align-items-start cs_iconbox_subtitle" href="https://www.google.com/maps?q=shop+no.43+Kisan+Bazar+Galla+Mandi+Road,+Jhansi,+284001" target="_blank">Jhansi |</a>
          
              
                  <a class="d-flex align-items-start cs_iconbox_subtitle" href="https://www.google.com/maps?q=House+no.+17/A,+80+feet+Road+Sai+Mazar,+Ashoka+Gareden,+Bhopal,+462010" target="_blank">Bhopal |</a>
             
                  <a class="d-flex align-items-start cs_iconbox_subtitle" href="https://www.google.com/maps?q=Ajmeeri+gate,+Jaipur,+302001" target="_blank">Jaipur</a>
             

                  <a class="d-flex align-items-start cs_iconbox_subtitle" href="https://www.google.com/maps?q=Hari+Parwat,+Near+police+station+Akhilesh+Tower,+Agra,+282002" target="_blank">Agra |</a>
            
              
                  <a class="d-flex align-items-start cs_iconbox_subtitle" href="https://www.google.com/maps?q=1st+Floor+62+Wave+Silver+Tower+above+Bikanerwala+Sector+18,+Noida,+201301" target="_blank">Noida |</a>
                </li>
           
          </ul>
          <div class="cs_social_btns cs_style_1">
            <a href="https://www.facebook.com/drazadayurveda" class="cs_center" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://x.com/DrAzadBeg2" class="cs_center" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="https://www.instagram.com/drazadayurvedaclinic/?hl=en" class="cs_center" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.youtube.com/channel/UCgmA63JCq6Dzqr40ob5FjNQ" class="cs_center" target="_blank"><i class="fa-brands fa-youtube"></i></a>
          </div>

        </div>
      </div>
      <div class="cs_footer_col">
        <div class="cs_footer_widget">
          <h2 class="cs_footer_widget_title">Quick Links</h2>
          <ul class="cs_footer_widget_nav_list cs_mp_0">
            <li><a href="https://sexproblemtreatment.com/index.php">Home</a></li>
            <li><a href="https://sexproblemtreatment.com/about.php">About Us</a></li>
            <li><a href="https://sexproblemtreatment.com/treatment.php">Treatments</a></li>
            <li><a href="https://sexproblemtreatment.com/clinic.php">Clinic</a></li>
            <li><a href="https://sexproblemtreatment.com/blogs.php">Blogs</a></li>
          </ul>
        </div>
      </div>
      <div class="cs_footer_col">
        <div class="cs_footer_widget">
          <h2 class="cs_footer_widget_title">Treatments & Diseases</h2>
          <ul class="cs_footer_widget_nav_list cs_mp_0">
            <li><a href='https://sexproblemtreatment.com/premature-ejaculation.php'>Premature Ejaculation</a></li>
            <li><a href='https://sexproblemtreatment.com/erectile-dysfunction.php'>Erectile Dysfunction</a></li>
            <li><a href='https://sexproblemtreatment.com/nightfall.php'>Nightfall</a></li>
            <li><a href='https://sexproblemtreatment.com/low-libido.php'>Low Libido</a></li>
            <li><a href='https://sexproblemtreatment.com/delayed-ejaculation.php'>Delayed Ejaculation</a></li>
            <li><a href='https://sexproblemtreatment.com/penis-enlargement.php'>Penis Enlargement</a></li>

          </ul>
        </div>
      </div>
      <div class="cs_footer_col">
        <div class="cs_footer_widget">
          <h2 class="cs_footer_widget_title">Treatments & Diseases</h2>
          <ul class="cs_footer_widget_nav_list cs_mp_0">
            <li><a href='https://sexproblemtreatment.com/low-sperm-count.php'>Low Sperm Count</a></li>
            <li><a href='https://sexproblemtreatment.com/diabetes.php'>Diabetes</a></li>
            <li><a href='https://sexproblemtreatment.com/anxiety-and-stress.php'>Anxiety & Stress</a></li>
            <li><a href='https://sexproblemtreatment.com/piles-treatment.php'>Piles Treatment</a>
            </li>
            <li><a href='https://sexproblemtreatment.com/phimosis-treatment.php'>Phimosis Treatment</a></li>
            <li><a href='https://sexproblemtreatment.com/hair-fall-treatment.php'>Hair Fall Treatment</a></li>

          </ul>
        </div>
      </div>
    </div>

  </div>



  <div class="cs_footer_bottom cs_primary_bg">
    <div class="container">
      <div class="cs_footer_bottom_in">
        <p class="cs_footer_copyright mb-0">Copyright © 2025 <span style='color: #ba9e5d'> Dr. Azad Sexologist Clinic</span>, All Rights Reserved.</p>
        <ul class="cs_footer_menu cs_mp_0">
          <li>Designed & Developed By: <a href="https://www.auctech.in/" class="text-warning" target="_blank">Auctech MarCom</a></li>

        </ul>
      </div>
    </div>
  </div>
</footer>