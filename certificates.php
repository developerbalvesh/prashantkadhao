<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="library/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="balvesh-animation/balvesh_slides_css.css">
    <script src="library/bootstrap.bundle.min.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="library/fontawesome.js"></script>
    <script src="library/jquery.min.js"></script>
    <title>Mr. Prashant Kadhao</title>
    <link rel="icon" type="image/x-icon" href="/images/pk.ico">
</head>
<body>

            <!-- loader start -->
            <div class="slideup">
                <div class="loading">
                    <img src="images/logo1.png" alt="">
                </div>
            </div>
            <!-- loader end -->
    <!-- header -->
    <div class="header">
        <img src="images/logo1.png" alt="">
        <span id="line3" class="line3"><i class="fa-solid fa-bars-staggered"></i></span>
        <ul id="mini-menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="aboutus.html">About</a></li>
            <li><a href="explore.html">Explore</a></li>
            <li><a href="certificates.php" class="act">Gallery</a></li>
            <li><a href="contactus.html">Contact Us</a></li>
        </ul>
    </div>
    <div class="go-up">
        <a href="#">
            <i class="fa-regular fa-circle-up"></i>
        </a>
    </div>
    <!-- header end -->
    <!-- banner start -->
    <div class="back-banner-about" style="background-image: url('images/psktech_back.jpeg');">
        <div class="container-fluid banner">
            <div class="row">
                <div class="col-lg-6">

                </div>
                <div class="col-lg-6">
                    <div class="about-banner">
                        <center>
                            <h3>He's</h3>
                        </center>
                        <h1>
                          Expertize and certified  In
                        </h1>
                        
                        <div class="container"  id="head-gall">
                            <div class="output" id="output">
                            <h4 class="cursor"></h4>
                            <!-- <p></p> -->
                            </div>
                        </div>
                        <!-- <h4>Director of PSK Technologies Pvt. Ltd</h4> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- tabs start -->
    <div class="menu-list-back">
        <div class="menulist">
            <!-- <a href="#head-gall"> -->
                <h5 onclick="changeMenu('all')" >All</h5>
                <h5 onclick="changeMenu('cert')">Certificate</h5>
                <h5 onclick="changeMenu('visit')">Office Visit</h5>
                <h5 onclick="changeMenu('event')">Collage Seminar</h5>
                <!-- <h5 onclick="changeMenu('tour')">Tour</h5> -->
            <!-- </a> -->
        </div>
    </div>
    <!-- tabs end -->

    <!-- certificate start -->
    <div class="container-fluid certificate-home">
        <div class="certificate">
            <h1 id="gall-head">{ All Images }</h1>
            <p id="gall-desc">
                Explore captivating moments in a visual symphony with our immersive image gallery
            </p>
        </div>
        
        <div class="row">


            <div class="col-lg-4 cert">
                <div class="items">
                    <div class="full-img" id="cert-1">
                        <h2><i class="fa-solid fa-circle-xmark cross"></i></h2>
                        <img src="images/certificates/certificacte1.jpg" alt="">
                    </div>
                    <div class="desc open" onclick="certOpen('#cert-1')">
                        <h5>
                            Sample Certificate
                        </h5>
                    </div>
                    <img class="open"  onclick="certOpen('#cert-1')" src="images/certificates/certificacte1.jpg" alt="">
                </div>
            </div>


            <div class="col-lg-4 cert">
                <div class="items">
                    <div class="full-img" id="cert-2">
                        <h2><i class="fa-solid fa-circle-xmark cross"></i></h2>
                        <img src="images/certificates/certificacte2.jpg" alt="">
                    </div>
                    <div class="desc open" onclick="certOpen('#cert-2')">
                        <h5>
                            Sample Certificate
                        </h5>
                    </div>
                    <img class="open"  onclick="certOpen('#cert-2')" src="images/certificates/certificacte2.jpg" alt="">
                </div>
            </div>

            <div class="col-lg-4 cert">
                <div class="items">
                    <div class="full-img" id="cert-3">
                        <h2><i class="fa-solid fa-circle-xmark cross"></i></h2>
                        <img src="images/certificates/certificacte3.jpg" alt="">
                    </div>
                    <div class="desc open" onclick="certOpen('#cert-3')">
                        <h5>
                            Sample Certificate
                        </h5>
                    </div>
                    <img class="open"  onclick="certOpen('#cert-3')" src="images/certificates/certificacte3.jpg" alt="">
                </div>
            </div>

            <div class="col-lg-4 visit">
                <div class="items">
                    <div class="full-img" id="cert-4">
                        <h2><i class="fa-solid fa-circle-xmark cross"></i></h2>
                        <img src="images/office_seminar/ambedkar/1.jpeg" alt="">
                    </div>
                    <div class="desc open" onclick="certOpen('#cert-4')">
                        <h5>
                            Ambedkar Collage visit at PSK Technologies Pvt. Ltd.
                        </h5>
                    </div>
                    <img class="open"  onclick="certOpen('#cert-4')" src="images/office_seminar/ambedkar/1.jpeg" alt="">
                </div>
            </div>

            <div class="col-lg-4 visit">
                <div class="items">
                    <div class="full-img" id="cert-5">
                        <h2><i class="fa-solid fa-circle-xmark cross"></i></h2>
                        <img src="images/office_seminar/ambedkar/2.jpeg" alt="">
                    </div>
                    <div class="desc open" onclick="certOpen('#cert-5')">
                        <h5>
                            Ambedkar Collage visit at PSK Technologies Pvt. Ltd.
                        </h5>
                    </div>
                    <img class="open"  onclick="certOpen('#cert-5')" src="images/office_seminar/ambedkar/2.jpeg" alt="">
                </div>
            </div>

            <div class="col-lg-4 visit">
                <div class="items">
                    <div class="full-img" id="cert-6">
                        <h2><i class="fa-solid fa-circle-xmark cross"></i></h2>
                        <img src="images/office_seminar/ambedkar/3.jpeg" alt="">
                    </div>
                    <div class="desc open" onclick="certOpen('#cert-6')">
                        <h5>
                            Ambedkar Collage visit at PSK Technologies Pvt. Ltd.
                        </h5>
                    </div>
                    <img class="open"  onclick="certOpen('#cert-6')" src="images/office_seminar/ambedkar/3.jpeg" alt="">
                </div>
            </div>

            
            <div class="col-lg-4 visit">
                <div class="items">
                    <div class="full-img" id="cert-7">
                        <h2><i class="fa-solid fa-circle-xmark cross"></i></h2>
                        <img src="images/office_seminar/ambedkar/4.jpeg" alt="">
                    </div>
                    <div class="desc open" onclick="certOpen('#cert-7')">
                        <h5>
                            Ambedkar Collage visit at PSK Technologies Pvt. Ltd.
                        </h5>
                    </div>
                    <img class="open"  onclick="certOpen('#cert-7')" src="images/office_seminar/ambedkar/4.jpeg" alt="">
                </div>
            </div>

            
            <div class="col-lg-4 visit">
                <div class="items">
                    <div class="full-img" id="cert-8">
                        <h2><i class="fa-solid fa-circle-xmark cross"></i></h2>
                        <img src="images/office_seminar/ambedkar/5.jpeg" alt="">
                    </div>
                    <div class="desc open" onclick="certOpen('#cert-8')">
                        <h5>
                            Ambedkar Collage visit at PSK Technologies Pvt. Ltd.
                        </h5>
                    </div>
                    <img class="open"  onclick="certOpen('#cert-8')" src="images/office_seminar/ambedkar/5.jpeg" alt="">
                </div>
            </div>

            
            <div class="col-lg-4 visit">
                <div class="items">
                    <div class="full-img" id="cert-9">
                        <h2><i class="fa-solid fa-circle-xmark cross"></i></h2>
                        <img src="images/office_seminar/ambedkar/6.jpeg" alt="">
                    </div>
                    <div class="desc open" onclick="certOpen('#cert-9')">
                        <h5>
                            Ambedkar Collage visit at PSK Technologies Pvt. Ltd.
                        </h5>
                    </div>
                    <img class="open"  onclick="certOpen('#cert-9')" src="images/office_seminar/ambedkar/6.jpeg" alt="">
                </div>
            </div>

            <!-- seminar start -->
            <div class="col-lg-4 event">
                <div class="items">
                    <div class="full-img" id="cert-10">
                        <h2><i class="fa-solid fa-circle-xmark cross"></i></h2>
                        <img src="images/college_seminar/JD college/1.jpg" alt="">
                    </div>
                    <div class="desc open" onclick="certOpen('#cert-10')">
                        <h5>
                            2 Certificate Of Redhat Linux
                        </h5>
                    </div>
                    <img class="open"  onclick="certOpen('#cert-10')" src="images/college_seminar/JD college/1.jpg" alt="">
                </div>
            </div>

            <div class="col-lg-4 event">
                <div class="items">
                    <div class="full-img" id="cert-11">
                        <h2><i class="fa-solid fa-circle-xmark cross"></i></h2>
                        <img src="images/college_seminar/JD college/2.jpg" alt="">
                    </div>
                    <div class="desc open" onclick="certOpen('#cert-11')">
                        <h5>
                            2 Certificate Of Redhat Linux
                        </h5>
                    </div>
                    <img class="open"  onclick="certOpen('#cert-11')" src="images/college_seminar/JD college/2.jpg" alt="">
                </div>
            </div>

            <div class="col-lg-4 event">
                <div class="items">
                    <div class="full-img" id="cert-12">
                        <h2><i class="fa-solid fa-circle-xmark cross"></i></h2>
                        <img src="images/college_seminar/JD college/3.jpg" alt="">
                    </div>
                    <div class="desc open" onclick="certOpen('#cert-12')">
                        <h5>
                            2 Certificate Of Redhat Linux
                        </h5>
                    </div>
                    <img class="open"  onclick="certOpen('#cert-12')" src="images/college_seminar/JD college/3.jpg" alt="">
                </div>
            </div>

            <div class="col-lg-4 event">
                <div class="items">
                    <div class="full-img" id="cert-13">
                        <h2><i class="fa-solid fa-circle-xmark cross"></i></h2>
                        <img src="images/college_seminar/JD college/4.jpg" alt="">
                    </div>
                    <div class="desc open" onclick="certOpen('#cert-13')">
                        <h5>
                            2 Certificate Of Redhat Linux
                        </h5>
                    </div>
                    <img class="open"  onclick="certOpen('#cert-13')" src="images/college_seminar/JD college/4.jpg" alt="">
                </div>
            </div>

            <div class="col-lg-4 event">
                <div class="items">
                    <div class="full-img" id="cert-14">
                        <h2><i class="fa-solid fa-circle-xmark cross"></i></h2>
                        <img src="images/college_seminar/JD college/5.jpg" alt="">
                    </div>
                    <div class="desc open" onclick="certOpen('#cert-14')">
                        <h5>
                            2 Certificate Of Redhat Linux
                        </h5>
                    </div>
                    <img class="open"  onclick="certOpen('#cert-14')" src="images/college_seminar/JD college/5.jpg" alt="">
                </div>
            </div>

            <div class="col-lg-4 event">
                <div class="items">
                    <div class="full-img" id="cert-15">
                        <h2><i class="fa-solid fa-circle-xmark cross"></i></h2>
                        <img src="images/college_seminar/JD college/6.jpg" alt="">
                    </div>
                    <div class="desc open" onclick="certOpen('#cert-15')">
                        <h5>
                            2 Certificate Of Redhat Linux
                        </h5>
                    </div>
                    <img class="open"  onclick="certOpen('#cert-15')" src="images/college_seminar/JD college/6.jpg" alt="">
                </div>
            </div>
            <!-- seminar end -->

            <!-- <div class="col-lg-4 event">
                <div class="items">
                    <div class="full-img" id="cert-5">
                        <h2><i class="fa-solid fa-circle-xmark cross"></i></h2>
                        <img src="images/events/event1.jpg" alt="">
                    </div>
                    <div class="desc open" onclick="certOpen('#cert-5')">
                        <h5>
                            2 Certificate Of Redhat Linux
                        </h5>
                    </div>
                    <img class="open"  onclick="certOpen('#cert-5')" src="images/events/event1.jpg" alt="">
                </div>
            </div> -->

            <!-- <div class="col-lg-4 tour">
                <div class="items">
                    <div class="full-img" id="cert-6">
                        <h2><i class="fa-solid fa-circle-xmark cross"></i></h2>
                        <img src="images/tour/1.jpg" alt="">
                    </div>
                    <div class="desc open" onclick="certOpen('#cert-6')">
                        <h5>
                            1 Certificate Of Redhat Linux
                        </h5>
                    </div>
                    <img class="open"  onclick="certOpen('#cert-6')" src="images/tour/1.jpg" alt="">
                </div>
            </div> -->


        </div>
    </div>

    <!-- certificate end -->

<!-- founder end -->
    <!-- footer start -->
    <div class="container-fluid footer">
      <div class="row">
          <div class="col-lg-3">
              <img src="images/logo1.png" alt="">
          </div>
          <div class="col-lg-2">
              <h4>Menus</h4>
              <p>
                <a href="index.html">Home</a><br>
                <a href="aboutus.html">About Us</a><br>
                <a href="explore.html">Explore</a><br>
                <a href="certificates.php">Gallery</a><br>
                <a href="contactus.html">Contact Us</a><br>
              </p>
          </div>
          <div class="col-lg-3 social">
              <h4>My Social Profiles</h4>
              <a target="_blank" href="https://www.facebook.com/prashant.kadhao"><i class="fa-brands fa-square-facebook"></i> Facebook</a>
              <a target="_blank" href="https://www.instagram.com/prashant_kadhao/"><i class="fa-brands fa-square-instagram"></i> Instagram</a>
              <a target="_blank" href="https://www.linkedin.com/in/prashant-kadhao-544600a9/"><i class="fa-brands fa-linkedin"></i> LinkedIn</a>
              <a target="_blank" href="https://www.youtube.com/@psktechnologiespvt.ltd.itc5927"><i class="fa-brands fa-square-youtube"></i> YouTube</a>
          </div>
          <div class="col-lg-4">
              <h4>Contact Details</h4>
              <p>
                <b><i class="fa-solid fa-location-dot"></i> Address: </b><br>
                <b>PSK Technologies Pvt. Ltd.</b><br>
Lower Ground Fortune Mall, <br>behind Maharashtra bank, Sitabuldi, Nagpur 
                <br><br>
                <b><i class="fa-solid fa-envelope"></i> Email: </b><br>
                help@prashantkadhao.com <br><br>
                <b><i class="fa-solid fa-phone-volume"></i> Mobile No: </b><br>
                +91 99752 88300 | +91 94221 23343 <br>
            </p>
          </div>
      </div>
  </div>
    <div class="copyr">
        <p>
            Copyright ©2024 | Developed by <a target="_blank" href="https://www.pskitservices.com/"> <i class="fa-regular fa-heart"></i> PSK Technologies Pvt.Ltd.</a> 
        </p>
    </div>
    <!-- footer end -->
    <script src="js/main_certificates.js"></script>
</body>
</html>