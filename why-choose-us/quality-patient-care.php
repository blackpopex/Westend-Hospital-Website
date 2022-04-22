<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Westend Hospital | We offer quality patient care.
        </title>
        <link rel="icon" type="image/x-icon" href="../img/logo/favicon.ico.png"/>
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"/>
        <meta name="description" content="we offer the best quality services to all patient both within and outside delta state . "/>
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
                                        <a href="../contact-us.php" class="contact-us">Contact Us</a>
                                    </li>
                                </ul>
                                <!--navbar2-->
                                <ul class="flex navbar2">
                                    <li>
                                        <a href="../map-and-directions.php">Maps & Direction</a>
                                    </li>
                                    <li>
                                        <a href="../request-an-appointment.html">Request Appointment</a>
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
                                        <input type="text" placeholder="Looking for something?" name="Search" onkeyup="liveSearch(this.value)" id="searchInput" />
                                        <button type="submit" id="searchBtn" class="overlaySearch">
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
            <div class="section-background-image quality-of-patient-care">
                <div class="container">
                    <h2 class="subnavbar-color">Quality of Patient Care</h2>
                    <ul class="inline-block-breadcrumb subnavbar-color">
                        <li>
                            <a href="../index.php">Home</a>
                        </li>
                        <li>quality of patient care</li>
                    </ul>
                </div>
            </div>

            <section id="quality-of-patient-care">
                <div
                    class="container">

                    <!--Quality of patient care-->
                    <div class="margin-bottom">
                        <!--Our Patient is Our Priority-->
                        <h4 class="sky-blue">Our patient is our priority</h4>
                        <p>Going to the hospital can be stressful. Patients and their loved ones might be worried about an illness, anxious about recovery times, or concerned about what a procedure will cost. Today more than ever, patients have a great number of choices to make about the type of medical care they receive. We know that patients need to have reliable and understandable information about the level of care our hospital provides in order to make the best decisions possible.</p>
                    </div>
                    <!--What is quality?-->
                    <div class="margin-bottom"> 
                        <h4 class="sky-blue">What is quality?</h4>
                        <p>Patients and families know quality care when they experience it. A nurse's response time, a doctor's bedside manner, the hospital's atmosphere—all of these things affect how people feel about the quality of their healthcare.</p>
                        <p>When hospitals talk about quality, it is generally in reference to very specific clinical data collected and analyzed over a period of time. Quality measurement isn't always easy. Different agencies and groups have different ways of reporting clinical outcomes that can affect the way they rate a hospital on a certain quality measure. Reporting systems can also be cumbersome or costly, making ratings even more difficult to produce. Today, there are limits to the numbers of conditions, treatments, and procedures that are reported and monitored, but as data systems and methods improve, more and more information will be available.</p>
                        <p>Quality data show how well a department or institution achieves desired health outcomes for a particular procedure, often by tracking how closely clinical staff meet standards of care. At Stanford Health Care, we strive to ensure that the care we provide is:</p>
                    </div>
                    <div>

                        <p>
                            <span class="sky-blue bold-paragraph">Safe:</span>
                            Avoiding injuries to patients from the care that is intended to help them.</p>
                    </div>
                    <div>
                        <p>
                            <span class="sky-blue bold-paragraph">Effective:</span>
                            Providing services based on scientific knowledge and best practice.</p>
                    </div>
                    <div>
                        <p>
                            <span class="sky-blue  bold-paragraph">Patient-centered:</span>
                            Providing care that is respectful of and responsive to individual patient preferences, needs and values, ensuring that patients' values guide all clinical decisions.</p>
                    </div>
                    <div>
                        <p>
                            <span class="sky-blue  bold-paragraph">Timely:</span>
                            Reducing waits and sometimes harmful delays for both those who receive and provide care.</p>
                    </div>
                    <div>
                        <p>
                            <span class="sky-blue  bold-paragraph">Efficient:</span>
                            Avoiding waste, including waste of equipment, supplies, ideas and energy.</p>
                    </div>
                    <div>
                        <p>
                            <span class="sky-blue  bold-paragraph">Equitable:</span>
                            Providing care that does not vary in quality because of personal characteristics such as gender, ethnicity, geographic location, and socio-economic status.</p>
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
                        <small class="coy">&copy; <?php echo date("Y") ?>; Westend Hospital. All Right Reserved.
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
