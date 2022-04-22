<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Westend Hospital | We educate our patient about the need for efficient health care.
        </title>
        <link rel="icon" type="image/x-icon" href="../img/logo/favicon.ico.png"/>
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"/>
        <meta name="description" content="We offer health talks based on human life cycles such as paediatrics, pregnancy (Obstetrics) and adults. We talk on how to leave a healthy lifestyle by quitting smoking, weightloss, stress and management, labour and delivery, post natal care etc."/>
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
                                <li><a href="refer-a-patient.php">Refer a patient</a></li>
                                <li>
                                <a href="map-and-directions.php">Maps & Directions</a>
                                </li>
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
            <div class="section-background-image departments-and-services">
                <div class="container">
                    <h2 class="subnavbar-color">Patient Education</h2>
                    <ul class="inline-block-breadcrumb subnavbar-color">
                        <li>
                            <a href="../index.php">Home</a>
                        </li>
                        <li>patient education</li>
                    </ul>
                </div>
            </div>

            <section id="department-and-services">
                <div class="container align-start">
                    <div
                        class="flex">
                        <!--left column, various life cycles-->
                        <div class="column-left col-30 v-border-right">
                            <h3 class="text-uppercase navy-blue">Life cycles</h3>
                            <div>
                                <h4 class="sky-blue">Paediatric</h4>
                                <ul>
                                    <li><a href="#">Children’s health</a></li>
                                    <li><a href="#">Infant & toddler health</a></li>
                                    <li><a href="#">Adolescent Growth & 
                                                                                                                                                                                                                                                                                                                                                                                                                development</a></li>
                                    <li><a href="#">Adolescent Mental Health</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="sky-blue">Adult</h4>
                                <ul>
                                    <li><a href="#">Adult health</a></li>
                                    <li><a href="#">Woman’s health</a></li>
                                    <li><a href="#">Men’s health</a></li>
                                    <li><a href="#">Health aging</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="sky-blue">Pregnancy</h4>
                                <ul>
                                    <li><a href="#">Getting Pregnant</a></li>
                                    <li><a href="#">Pregnancy lifecycle</a></li>
                                    <li><a href="#">Labour & delivery</a></li>
                                    <li><a href="#">Ante-natal care</a></li>
                                    <li><a href="#">Post natal care</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="sky-blue">Healthy lifestyle</h4>
                                <ul>
                                    <li><a href="#">Weight loss</a></li>
                                    <li><a href="#">Quit smoking</a></li>
                                    <li><a href="#">Fitness</a></li>
                                    <li><a href="#">Nutrition</a></li>
                                    <li><a href="#">Stress & management</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--right column, links to each articles-->
                        <div class="column-right col-70">
                            <h3 class="navy-blue">Adolescent Mental Health</h3>
                            <p>There are many different mental health problems affecting adolescents that require the clinical care of a physician or other healthcare professional. Listed in the directory below are some, for which we have provided a brief overview.</p>
                            <div
                                class="article-container flex">
                                <!--set each box to 30%-->
                                <a class="article-box col-30" href="#">
                                    <img src="../img/articles-image/anxiety disorder.jpeg" alt="Anxiety Disorder">
                                    <div class="title transparent-sky-blue">
                                        <h4>Anxiety Disorders</h4>
                                    </div>
                                </a>
                                <a class="article-box col-30" href="#">
                                    <img src="../img/articles-image/anxiety disrorder 2.jpg" alt="Dysthymia">
                                    <div class="title transparent-navy-blue">
                                        <h4>Dysthymia</h4>
                                    </div>
                                </a>
                                <a class="article-box col-30" href="#">
                                    <img src="../img/articles-image/anxiety disrorder.jpg" alt="Phobias">
                                    <div class="title transparent-sky-blue">
                                        <h4>Phobias</h4>
                                    </div>
                                </a>
                                <a class="article-box col-30" href="#">
                                    <img src="../img/articles-image/anxiety disrorder 2.jpg" alt="Post-Traumatic Stress Disorder">
                                    <div class="title transparent-navy-blue">
                                        <h4>Post-Traumatic Stress Disorder</h4>
                                    </div>
                                </a>
                                <a class="article-box col-30" href="#">
                                    <img src="../img/articles-image/phobias 2.jpg" alt="Behavior Disorders">
                                    <div class="title transparent-sky-blue">
                                        <h4>Behavior Disorders</h4>
                                    </div>
                                </a>
                                <a class="article-box col-30" href="#">
                                    <img src="../img/articles-image/anxiety disorder.jpeg" alt="Behavior Disorders">
                                    <div class="title transparent-navy-blue">
                                        <h4>Behavior Disorders</h4>
                                    </div>
                                </a>
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
    </body>
</html>
