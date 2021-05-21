
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>SmartLabs - Careers</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="SmartLabs Careers" name="keywords">
        <meta content="SmartLabs Careers" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;900&display=swap" rel="stylesheet"> -->
        
        <!-- CSS Libraries -->
        <link href="lib/bootstrap-4.5.3/css/bootstrap.min.css" rel="stylesheet">
        <link href="lib/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="lib/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css" rel="stylesheet">
        <link rel="stylesheet" href="lib/animate/animate_4.1.1.min.css"/>

        <!-- Template Stylesheet -->
        <link href="css/global.css" rel="stylesheet">
        <link href="css/careers.css" rel="stylesheet">
    </head>


    <body>
        <div class="wrapper">
        
        <!-- Header Start -->
            <div class="header">
                <nav class="navbar navbar-expand-lg my-navbar section-padding">
                    <div class="logo-container">
                        <a class="navbar-brand" href="index.html">
                            <img class="header-logo" src="img/homepage/bpt-header 1.png">
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <i class="fa fa-bars color-primary" aria-hidden="true" style="font-size: 30px;"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav font-md-spaced">
                            <li class="nav-item active header-links">
                                <a class="nav-link my-nav-link nav-current" href="index.html#about-section">About Us</a>
                            </li>
                            <li class="nav-item header-links">
                                <a class="nav-link my-nav-link" href="careers.php">Careers</a>
                            </li>
                            <li class="nav-item header-links">
                                <a class="nav-link my-nav-link" href="contact.php">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        <!-- Header End -->

        <!-- banner Start -->
        <!-- Section-1 -->
        <div class="section-career-banner"></div>
        <div id="message_alert"></div>

        <!-- Section-2 -->
        <div class="section-career">
            <div class="section-career-headers">
                <div class="section-header font-lg"> Careers </div>
                <div class="section-subheader font-xs"> SmartLabs is a technology innovation lab dedicated for developing smart solutions to empower global trade </div>
            </div>

            <div>
                <?php
                    if(isset($_GET["success_message"]) && $_GET["success_message"] == 1) {
                        echo('<div class="alert alert-success container" role="alert">
                        Sent Successfully! We will contact you shortly!
                    </div>');
                    } elseif(isset($_GET["success_message"]) && $_GET["success_message"] == 2) {
                        echo('<div class="alert alert-danger container" role="alert">
                        Something went wrong, try again later
                    </div>');
                    }
                ?>       
            </div>

            <div class="container-fluid section-form">
                <div class="my-form">
                <form method="post" action="career_mail.php" enctype="multipart/form-data">
                    <div class="form-header font-form-header"> Please Fill The Form </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="font-my-label" for="inputName">Full Name:</label>
                            <input name="fname" type="text" class="form-control" id="inputName" placeholder="Enter Your Full Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="font-my-label" for="inputNumber">Mobile No.:</label>
                            <input name="phone" type="number" class="form-control" id="inputNumber" placeholder="Enter Cell Phone No." minlength="10" maxlength="10" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="font-my-label" for="inputEmail">Email Id:</label>
                            <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Enter your Email Id" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="font-my-label" for="inputLocation">Location:</label>
                            <input name="location" type="text" class="form-control" id="inputLocation" placeholder="Enter your current location" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="font-my-label" for="inputLocation">Applying for:</label>
                            <select name="position" class="form-control" id="exampleFormControlSelect1" required>
                              <option value="">Select the position applying for</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>

                        </div>
                        <div class="form-group col-md-6">
                            <label class="font-my-label" for="inputLocation">Date of Birth:</label>
                            <input name="dob" type="date" class="form-control" id="inputLocation" placeholder="Enter your current location" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="font-my-label" for="uploaded_file">Attach Resume:</label>
                            <input name="uploaded_file" type="file" class="form-control-file" id="resume">
                        </div>
                        <div class="form-group col-12 col-md-6 my-submit-btn">
                            <button class="btn btn-primary my-btn2" type="submit" name="submit">SUBMIT</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <!-- banner End -->

        <!-- Footer Start -->
            <footer class="my-footer container-fluid">
                <div class="row">
                    <div class="col-lg-3 footer-logo">
                        <img class="footer-logo-img" src="img/homepage/bpt-header 1.png">
                    </div>
                    <div class="col-lg-6 footer-contents">
                        <div class="footer-nav">
                        <div class="footer-content-block"> <a href="index.html#about-section"> ABOUT US </a></div>
                        <div class="footer-content-block"> <a href="careers.php"> CAREERS </a></div>
                        <div class="footer-content-block"> <a href="contact.php"> CONTACT US </a></div>
                        </div>
                        <div class="footer-content-4">
                            <!-- All product and service names appearing on this site are registered or licensed trademarks of SmartLab Pvt. Ltd.  -->
                        </div>
                        <div class="footer-content-5 font-xxs">
                            <i class="fa fa-registered" aria-hidden="true"></i>
                            2021 SmartLabs. All rights reserved.
                        </div>
                    </div>
                    <div class="col-lg-3 footer-all-icons">
                        <a href="#" class="footer-icon-container">
                            <i class="fa fa-facebook logo" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="footer-icon-container">
                            <i class="fa fa-instagram logo" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="footer-icon-container">
                            <i class="fa fa-linkedin logo" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="footer-icon-container">
                            <i class="fa fa-twitter logo" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="footer-icon-container">
                            <i class="fa fa-youtube-play logo" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </footer>
        <!-- Footer end -->  
            
            
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="lib/jquery/jquery-3.5.1.min.js"></script>
        <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script> -->
        <script src="lib/bootstrap-4.5.3/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
