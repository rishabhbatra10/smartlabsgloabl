<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>SmartLabs - Contact</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="SmartLabs Contact" name="keywords">
        <meta content="SmartLabs Contact" name="description">

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
        <link href="css/contact.css" rel="stylesheet">
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
        <div class="section-contact-banner"></div>
        <div id="message_alert"></div>

        <!-- Section-2 -->
        <div class="container-fluid section-contact">
            <div class="section-contact-headers">
                <div class="section-header font-lg"> Contact Us </div>
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



            <div class="row section-contact-container">
                <div class="col-lg-6">
                    <div class="contact-left">
                        <div class="contact-header font-md-spaced">Office Location</div>
                        <div class="row">

                            <!-- <div class="col-6">
                            <div class="callus">
                                <a href="#" class="contact-icon">
                                <i class="fa fa-phone" aria-hidden="true"></i> Call Us On:
                                </a>
                                <div class="contact-content">+693631539</div>
                            </div>
                            </div> -->

                            <!-- <div class="col-6 callus">
                                <a href="#" class="contact-icon">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i> Email Us On:
                                </a>
                                <div class="contact-content">rahul@smartlabs.org</div>
                            </div> -->

                            <!-- <div class="col-6"></div> -->

                            <div class="col-12 callus">                       
                                <a href="#" class="contact-icon">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i> SmartLabs
                                </a> 
                                <div class="contact-content">SmartLabs Pte Ltd #05-03 Plus, 20 Cecil Street Singapore 049705</div>
                            </div>

                            <div class="col-12">
                                <div class="font-sm-spaced contact-map">We are here!</div>
                                <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.818203968594!2d103.849198614754!3d1.2829076990642954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da190e909e74d5%3A0xbad667094c71dba!2s1%20Raffles%20Place%2C%20Singapore%20048616!5e0!3m2!1sen!2sin!4v1615798755160!5m2!1sen!2sin" width="100%" height="226px" style="border:1px solid #00ACFF; border-radius: 4px;" allowfullscreen="" loading="lazy"></iframe></div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="col-lg-6">
                    <div class="contact-right">
                        <div class="contact-header font-md-spaced">Contact form</div>
                        <div class="my-form">
                            <form method="post" action="contact_mail.php">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputName">Name:</label>
                                    <input type="text" name="fname" class="form-control" id="inputName" placeholder="Enter Your Name Here" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputNumber">Phone Number:</label>
                                    <input type="number" name="phone" class="form-control" id="inputNumber" placeholder="Enter Your Phone No." minlength="10" maxlength="10" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Email Id:</label>
                                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Enter Your Email Id Here" required>
                            </div>
                            <div class="form-group">
                                <label for="inputComment">Comments:</label>
                                <textarea rows="5" cols="5" name="msg" class="form-control" id="inputComment" placeholder="Enter Your Comments Here"></textarea>
                            </div>
                          
                            <div class="form-group col-md-12 my-submit-btn">
                                <button class="btn btn-primary my-btn2" type="submit" name="submit">SUBMIT</button>
                            </div>
                            </form>
                        </div>
                    </div> 
                </div>
            </div>


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
       

        <!-- JavaScript Libraries -->
        <script src="lib/jquery/jquery-3.5.1.min.js"></script>
        <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script> -->
        <script src="lib/bootstrap-4.5.3/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
