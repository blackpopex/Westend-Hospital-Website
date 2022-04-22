<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Westend Hospital | Accepted Insurance
        </title>
        <link rel="icon" type="image/x-icon" href="../img/logo/favicon.ico.png"/>
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"/>
        <meta name="description" content="Accepted Insurance"/>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"/>
        <link rel="stylesheet" href="../css/demo.css"/>
        <link rel="stylesheet" href="../css/slideshow.css"/>
        <link rel="stylesheet" href="../css/slick.css"/>
        <link rel="stylesheet" href="../css/slick-theme.css"/>
        <link rel="stylesheet" href="../css/style.css"/>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="http://code.jquery.com/jquery-3.1.1.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
        <script src="https://kit.fontawesome.com/12d9de5a0c.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
            <!-- start Gist JS code-->
    <script>
        (function(d,h,w){var gist=w.gist=w.gist||[];gist.methods=['trackPageView','identify','track','setAppId'];gist.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);gist.push(e);return gist;}};for(var i=0;i<gist.methods.length;i++){var c=gist.methods[i];gist[c]=gist.factory(c)}s=d.createElement('script'),s.src="https://widget.getgist.com",s.async=!0,e=d.getElementsByTagName(h)[0],e.appendChild(s),s.addEventListener('load',function(e){},!1),gist.setAppId("kk4hnrrk"),gist.trackPageView()})(document,'head',window);
    </script>
    <!-- end Gist JS code-->
    </head>
    <body>
    <div id="preLoader"></div>
        <!--header-hero section-->
        <div class="header-hero-container">
            <header
                id="myHeaderMenu">
                <!-----------TOP NAVIGATION------------->
                <div class="topNav">
                    <div class="container flex">
                        <a href="../index.php" id="wehLogo">
                            <img src="../img/logo/Westend logo blue.png" alt="Westend Hospital Logo"/>
                        </a>
                        <nav class="flex">
                            <div id="navToggler" class="hamburgerMenu" onclick="myFunction(this)">
                                <div class="bar bar1"></div>
                                <div class="bar bar2"></div>
                                <div class="bar bar3"></div>
                            </div>

                            <div class="navbar-links" id="sideNavbar">
                                <ul
                                    class="flex navBar1">
                                    <!--Medical Test & services-->
                                    <li class="dropdown">
                                        <a href="#" class="dropbtn">Medical Test & Services</a>
                                        <ul class="dropdown-content" id="menuDropdown">
                                            <li>
                                                <a href="../medical-test-and-services/A-Z-of-all-medical-test.php">A-Z of all Medical Test</a>
                                            </li>
                                            <li>
                                                <a href="../medical-test-and-services/A-Z-of-all-medical-services.php">A-Z of all Medical Services</a>
                                            </li>
                                            <li>
                                                <a href="../medical-test-and-services/department-and-services.php">Department & Services</a>
                                            </li>
                                            <li>
                                                <a href="../medical-test-and-services/patient-education.php">Patient Education</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <!--Patient and visitors-->
                                    <li class="dropdown">
                                        <a href="#" class="dropbtn">Patient & Visitors</a>
                                        <ul class="dropdown-content" id="menuDropdown">
                                            <li>
                                                <a href="../patient-and-visitors/vistors.php">Visitors</a>
                                            </li>
                                            <li>
                                                <a href="../patient-and-visitors/your-hospital-stay.php">Your Hospital Stay</a>
                                            </li>
                                            <li>
                                                <a href="../patient-and-visitors/billing-and-financial-asistance.php">Billing & Financial Asistance</a>
                                            </li>
                                            <li>
                                                <a href="../patient-and-visitors/accepted-insurance.php">Accepted Insurance</a>
                                            </li>
                                            <li>
                                                <a href="../patient-and-visitors/medical-records.php">Medical Records</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <!--Why choose us-->
                                    <li class="dropdown">
                                        <a href="#" class="dropbtn">Why Choose Us</a>
                                        <ul class="dropdown-content" id="menuDropdown">
                                            <li>
                                                <a href="../why-choose-us/our-mission-vision-and-values.php">Our Mission, Vision & Values</a>
                                            </li>
                                            <li>
                                                <a href="../why-choose-us/quality-patient-care.php">Quality Patient Care</a>
                                            </li>
                                            <li>
                                                <a href="../why-choose-us/patient-stories-testimonies.php">Patient's Stories/Testimonies</a>
                                            </li>
                                            <li>
                                                <a href="../why-choose-us/our-team.php">Our Team</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="contact-li">
                                        <a href="../contact-us.html" class="contact-us">Contact Us</a>
                                    </li>
                                </ul>
                                <!--navbar2-->
                                <ul class="flex navbar2">
                                    <li>
                                        <a href="../map-and-directions.php">Maps & Direction</a>
                                    </li>
                                    <li>
                                        <a href="../request-an-appointment.php">Request Appointment</a>
                                    </li>
                                    <li>
                                        <a href="../refer-a-patient.php">Refer a Patient</a>
                                    </li>
                                    <li>
                                        <a href="../find-a-doctor.php">Find a Doctor</a>
                                    </li>
                                    <li>
                                        <a href="#">Call Us: 0807 420 2574
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <!--search BTN-->
                            <a id="searchBTN" class="fa fa-search"></a>
                        </nav>
                    </div>
                    <!--display dropdown when search button is clicked-->
                    <div class="search-overlay" id="search-Overlay">
                        <div class="container">
                            <div class="search-content">
                                <form action="#" method="post" autocomplete="off">
                                    <div>
                                        <input type="text" placeholder="Looking for something?" name="Search" onkeyup="liveSearch(this.value)" id="searchInput"/>
                                        <button type="submit" id="searchBtn"  class="overlaySearch">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                                <!--display Ajax result from server here-->
                                <div id="searchResult" class="popular-searches">
                                    <h3>Popular Searches</h3>
                                    <ul>
                                        <li><a href="../refer-a-patient.php">Refer a patient</a></li>
                                        <li><a href="../map-and-directions.php">Maps & Directions</a></li>
                                        <li><a href="#">Treatments</a></li>
                                        <li><a href="#">Services</a></li>
                                    </ul>
                                </div>

                                  <!--replace search content with below file-->
                        <div id="searchResult2" class="popular-searches" style="display: none">
                        <h3>Popular Searches</h3>
                        <ul>
                        <li><a href="../refer-a-patient.php">Refer a patient</a></li>
                        <li><a href="../map-and-directions.php">Maps & Directions</a></li>
                        <li><a href="#">Treatments</a></li>
                        <li><a href="#">Services</a></li>
                        </ul>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>

        <!---------------------------MAIN PAGE CONTENT---------------------------------------------->
        <main>
            <div class="section-background-image medical-records">
                <div class="container">
                    <h2 class="subnavbar-color">Medical Records</h2>
                    <ul class="inline-block-breadcrumb subnavbar-color">
                        <li>
                            <a href="../index.php">Home</a>
                        </li>
                        <li>medical records</li>
                    </ul>
                </div>
            </div>

            <section id="medicalRecords">
                <div class="container align-start">
                    <div
                        class="flex">
                        <!--medical records-->
                        <div class="column-left col-30 v-border-right">
                            <h3 class="navy-blue">Medical Records</h3>
                            <ul id="squareList">
                                <li class="sky-blue">+234 (0) 807 420 2574
                                </li>
                                <li class="sky-blue">+234 (0) 807 420 2574
                                </li>
                                <li class="sky-blue">admin@thewestendhospital.com</li>
                            </ul>
                        </div>
                        <!--steps for requesting records-->
                        <div
                            class="column-right col-70">
                            <!--records by type-->
                            <div>
                                <p>The Medical Records, or Health Information Management (H.I.M.), the department is responsible for maintaining your medical record. This includes information such as:</p>
                                <ul
                                    class="square-list-type" id="squareList">
                                    <!--list style type should be square-->
                                    <li>Results of lab tests</li>
                                    <li>Radiological Reports</li>
                                    <li>Physician examination reports</li>
                                    <li>Medical treatment and medications</li>
                                </ul>
                                <p>At Westend Hospital we have a 7-year retention policy for all medical records, with the exception of delivery/birth records, which are kept until the child reaches the age of 20. X-ray films are also kept for seven years.</p>
                            </div>
                            <!--request medical records-->
                            <div class="margin-top margin-bottom">
                                <h4 class="navy-blue">Requesting Your Medical Records</h4>
                                <p>You can request copies of your medical records in any of the following ways. (For imaging requests, see the "Radiology Imaging and Reports" section below.)</p>
                                <!--list style type should be square-->
                                <ul class="square-list-type" id="squareList">
                                    <li>Complete the health information release form and mail it to the address below.
                                    </li>
                                    <li>Mail us a written request with your medical record or unit number, full name at the time of treatment and your signature to authorize release of this information</li>
                                    <li>Complete the health information release form and mail it to the address below. (Form for Spanish-speaking patients: Autorización de divulgación de información médica.)</li>
                                </ul>

                            </div>

                            <!--mail written request to -->
                            <div class="margin-bottom">
                                <h5 class="navy-blue" style="margin-bottom: 0;">Mail written requests to:</h5>
                                <div style="margin-top:0;" class="margin-bottom">
                                    <p>
                                        1, 25th Street, D.D.P.A. Housesing Estate,
                                    </p>
                                    <p>
                                        Warri,
                                    </p>
                                    <p>
                                        Delta State,
                                    </p>
                                    <p>Nigeria.
                                    </p>
                                </div>
                                <p>We will process your request within 15 days and send you the records per the method you indicated. You also may arrange to pick up your medical records in person at any of our Medical Records locations. Our office hours are 8 a.m. to 4:30 p.m., Monday to Friday.</p>
                            </div>
                            <!--processing fee-->
                            <div>
                                <h4 class="navy-blue">Processing Fee</h4>
                                <p>We charge #5000 per page to copy medical records or #2500 if using an electronic record. We will call to notify you of the total charge. You may mail us a check or pay the fee in person if you pick up your records.</p>
                            </div>


                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!---------------------------MAIN PAGE CONTENT ENDS----------------------------------------->

        <footer>
            <!--Our Affiliations-->
            <div class="our-affiliations mini-section">
                <div class="container flex flex-column">
                    <h3>
                        <span>Our</span>
                        Affiliations
                    </h3>
                    <div class="affiliation flex">
                        <img src="../img/logo/_1511456132_462_General-Electric-mobile copy 2.png" alt="General Electric logo"/><img src="../img/logo/Safari logo copy.png" alt="Safari Pharmacy logo"/><img src="../img/logo/ddccopy.png" alt="DNA diagnostic Center"/><img src="../img/logo/Fathers Heart copy.png" alt="Fathers Hearth Children Trust logo"/><img src="../img/logo/Tymed CT Scan copy.png" alt="TYMED CT Scan Center logo"/>
                    </div>
                </div>
            </div>

            <section id="main-footer">
                <div class="container">
                    <!--row 1 About, For Health Professionals, Billing and Insurance & Ways to help-->
                    <!--BACK TO TOP-->
                        <button class="scrollTopBtn flex-column" id="myTopBTN" onclick="topFunction()"> <i class="fa fa-angle-up"></i>
                        <p>Top</p>
                    </button>
                    <!--BACK TO TOP BTN ENDS-->
                    <div class="flex lg-size">
                        <div class="dropdown">
                            <h4 class="dropbtn">About Us</h4>
                            <ul class="dropdown-content footer-menu" id="menuDropdown">
                                <li>
                                    <a href="../our-history.php">History</a>
                                </li>
                                <li>
                                    <a href="../awards-and-recognition.php">Awards & Recognition</a>
                                </li>
                                <li>
                                    <a href="../map-and-directions.php">Maps & Directions</a>
                                </li>
                                <li>
                                    <a href="../report-misconduct.php">Report Misconduct</a>
                                </li>
                                <li>
                                    <a href="../contact-us.php">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <h4 class="dropbtn">For Health Professionals</h4>
                            <ul class="dropdown-content footer-menu" id="menuDropdown">
                                <li>
                                    <a href="#">Transfer a patient</a>
                                </li>
                                <li>
                                    <a href="../refer-a-patient.php">Refer a patient</a>
                                </li>
                                <li>
                                    <a href="#">For nurses</a>
                                </li>
                                <li>
                                    <a href="#">For physician</a>
                                </li>
                                <li>
                                    <a href="../request-an-appointment.php">Enquiries & appointment</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <div class="billing-insurrance dropdown">
                                <h4 class="dropbtn">Billing and Insurance</h4>
                                <ul class="dropdown-content footer-menu" id="menuDropdown">
                                    <li>
                                        <a href="../patient-and-visitors/accepted-insurance.php">Insurance Information</a>
                                    </li>
                                    <li>
                                        <a href="../patient-and-visitors/billing-and-financial-asistance.php">Pay a bill</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="ways-to-help footer-header">
                                <h4>Ways to Help</h4>
                                <p>
                                    We supports Father's Heart Children's Trust, see how you can
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      make the lives of Orphans in Delta State better.
                                </p>

                                <a href="#" class="make-donation btn rounded-white-btn">Make a Donation</a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="social-img flex">
                        <!--row 2 socials media-->
                        <div class="follow-us-align-left footer-header mini-section">
                            <h4>Follow us on Social media</h4>
                            <div class="flex">
                            <a href="https://www.facebook.com/thewestendhospital" target = "_blank" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="https://instagram.com/westendhospitalwarri" target = "_blank" class="fa fa-instagram"></a>
                            <a href="https://www.linkedin.com/company/westend-hospital" target = "_blank" class="fa fa-linkedin"></a>
                            </div>
                        </div>

                        <!--row 3 Westend Hospital Logo -->
                        <div class="footer-img-container">
                                <img
                                    src="../img/logo/Westend logo white.png"
                                    alt="Westend Hospital white logo"
                                    class="westendbluelogo"
                                    id="myImg"
                                />
                                </div>
                            </div>

                    <div class="copyright">
                        <small class="coy">&copy; <?php echo date("Y") ?> Westend Hospital. All Right Reserved.
                        </small>
                        <small class="flex">
                            <a href="../privacy-policy.php">Privacy Policy</a>
                            <a href="../terms-of-use.php">Terms & Conditions</a>
                            <a href="../patient-feedback.php">Feedback</a>
                            <a href="#">Sitemap</a>
                        </small>
                    </div>
                </div>
            </section>
        </footer>
        <script src="../js/main.js"></script>
        <script src="../js/ajax-inner-file.js"></script>
        <script src="../js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="../js/slick.js" type="text/javascript"></script>
    </body>
</html></body></html>
