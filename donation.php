<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SRI SAIDATTA MANASA PEETHAM - DAANA DHARMA GAUSHALA</title>
    <link rel="icon" href="img/fav.png" type="image/gif">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="css/slicknav.min.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <style>
        .form-control {
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="header-area">
        <div class="social-media">
            <div class="container">
                <ul>
                    <li><a href="tel:+917981756410"><i class="fa fa-phone"></i>(+91) 7981756410</a></li>
                    <li><a href="mailto:srisaidattamanasapeetham@gmail.com"><i class="fa fa-envelope-o"></i>srisaidattamanasapeetham@gmail.com</a></li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="logo">
                        <a href="index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="mainmenu-wrap">
                        <div class="row">
                            <div class="mainmenu">
                                <ul id="mainmenu">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="service.html">Services</a></li>
                                    <li><a href="recent.html">Recent Activities</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li class="active"><a href="donation.php">Donate Now</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-area slider-area-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slider-text-2 text-center about-slide-text">
                        <h2>Donation Now</h2>
                        <p><a href="index.html">Home /</a> Pages</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="donation-two-area">
        <div class="container">
            <div class="col-md-12" style="padding-bottom: 50px;display:flex;justify-content:center">
                <form method="post" action="pgRedirect.php" class="px-3">
                    <div class="m-auto">
                        <div class="text-center">
                            <img src="./img/paytm.png" alt="" style="width: 12em;">
                        </div>
                        <div class="row">
                            <div class="d-none" style="display: none;">
                                <label>ORDER_ID::*</label>
                                <input class="form-control" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo  "ORDS" . rand(10000, 99999999) ?>">
                            </div>
                            <div class="d-none" style="display: none;">
                                <label>CUSTID ::*</label>
                                <input class="form-control" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001">
                            </div>
                            <div class="d-none" style="display: none;">
                                <label>INDUSTRY_TYPE_ID ::*</label>
                                <input class="form-control" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
                            </div>
                            <div class="d-none" style="display: none;">
                                <label>Channel ::*</label>
                                <input class="form-control" id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
                            </div>
                            <div class="col-md-6" style="margin-top: 15px;">
                                <label>First Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="FName" required>
                            </div>
                            <div class="col-md-6" style="margin-top: 15px;">
                                <label>Last Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="LName" required>
                            </div>
                            <div class="col-md-6" style="margin-top: 15px;">
                                <label>Phone <span class="text-danger">*</span></label>
                                <input class="form-control" type="number" name="phn" required>
                            </div>
                            <div class="col-md-6" style="margin-top: 15px;">
                                <label>Email <span class="text-danger">*</span></label>
                                <input class="form-control" type="email" name="Email" required>
                            </div>
                            <div class="col-md-12" style="margin-top: 15px;">
                                <label>Address </label>
                                <textarea name="address" class="form-control" id="" rows="3"></textarea>
                            </div>

                            <div class="col-md-12" style="margin-top: 15px;">
                                <label for="event">Activity:</label>
                                <input class="form-control" type="text" name="event" required>
                            </div>

                            <div class="col-md-12" style="margin-top: 15px;">
                                <label>Amount <span class="text-danger">*</span></label>
                                <input type="number" name="TXN_AMOUNT" class="form-control" required>
                            </div>

                            <div class="col-md-12" style="margin-top: 10px">
                                <!-- <input value="Donate" type="submit" class="" style="width: 100%;"> -->
                                <button type="submit" class="btn btn-primary" style="width:100%;padding: 10px;">Donate</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>



            <div class="row">
                <div class="col-sm-12 bank-details">
                    <div class="bank" data-aos="fade-down" data-aos-duration="1000">
                        <img src="img/UBI-NEW-LOGO.jpg" alt="Union Bank" />
                        <h2>SRI SAI DATTA MANASA PEETHAM,DAANA DHARMA GAUSHALA</h2>
                        <div class="details">
                            <p><span>A/C.No : </span>142610100134465</p>
                            <p><span>IFSC Code : </span>UBIN0814261</p>
                        </div>
                    </div>
                    <div class="bank" data-aos="fade-down" data-aos-duration="1000">
                        <img src="img/goolepay.png" alt="Google Pay" />
                        <h2>Easy to Pay Anywhere!</h2>
                        <div class="details">
                            <p><span>Mobile No : </span>+91 7981756410</p>
                            <p><span>UPI ID : </span>srisaidattamanasapeetham@okaxis</p>
                        </div>
                    </div>
                    <div class="bank" data-aos="fade-down" data-aos-duration="1000">
                        <h2>Main Address</h2>
                        <h4>SRI SAIDATTA MANASA PEETHAM, DAANA DHARMA GAUSHALA,</h4>
                        <div class="details">
                            <p>12-126, Main Road Gandhinagar, Pendurthi, Visakhapatnam, Andhra Pradesh. Pin:-531173</p>
                            <p>Mobile No : 7981756410</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-top-area" data-aos="fade-down" data-aos-duration="1000">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="single-footer-item">
                        <div class="footer-logo">
                            <img src="img/logo-icon.png" alt="">
                            <a href="index.html">
                                <h1>SRI SAI DATTA MANASA <span>PEETHAM</span></h1>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="single-footer-item-padding-left">
                        <div class="single-footer-item footer-info">
                            <h2>Contact Us</h2>
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> 12-126, Main Road Gandhinagar, Pendurthi, Visakhapatnam, AP. Pin-531173
                            </p>
                            <p><i class="fa fa-phone"></i><a href="tel:+917981756410">(+91) 7981756410</a></p>

                            <p><i class="fa fa-envelope-o"></i><a href="mailto:srisaidattamanasapeetham@gmail.com">srisaidattamanasapeetham@gmail.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-footer-item">
                        <li style="color:orange;">
                            <a href="terms-conditions.html">Terms and conditions</a>
                        </li>
                        <li style="color:orange;">
                            <a href="disclaimer.html">Disclaimer</a>
                        </li>
                        <li style="color:orange;">
                            <a href="privacy-policy.html">Privacy-Policy</a>
                        </li>
                        <li style="color:orange;">
                            <a href="intellectual-property.html">Intellectual Property</a>
                        </li>
                        <li style="color:orange;">
                            <a href="refund-cancellationpolicy.html">Refund & cancellation policy</a>
                        </li>
                    </div><br>
                    <div class="single-footer-item">
                        <h3>Follow Us</h3>
                        <div class="footer-social-icon">
                            <a href="#"><i class="fa fa-facebook social-icon-border"></i></a>
                            <a href="#"><i class="fa fa-twitter social-icon-border"></i></a>
                            <a href="#"><i class="fa fa-youtube social-icon-border"></i></a>
                            <a href="#"><i class="fa fa-instagram social-icon-border"></i></a>
                        </div>
                        <div id="google_translate_element"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="footer-bottom-right">
                        <p>SRI SAIDATTA MANASA PEETHAM <span>&copy;</span> 2020. All right reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <audio src="img/my_audio.mp3" id="my_audio" loop="loop"></audio> -->
    <script type="text/javascript">
        // setTimeout(function(){
        //     document.getElementById("my_audio").play();
        //     console.log('sample')
        // }, 8000 )
    </script>
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script>
        AOS.init({
            disable: 'mobile'
        });
    </script>
</body>

</html>