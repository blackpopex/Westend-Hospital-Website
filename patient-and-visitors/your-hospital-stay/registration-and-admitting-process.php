<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Westend Hospital | Registration and admitting.
        </title>
        <link rel="icon" type="image/x-icon" href="../../img/logo/favicon.ico.png"/>
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"/>
        <meta name="description" content="Registration and admitting."/>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"/>
        <link rel="stylesheet" href="../../css/demo.css"/>
        <link rel="stylesheet" href="../../css/slideshow.css"/>
        <link rel="stylesheet" href="../../css/slick.css"/>
        <link rel="stylesheet" href="../../css/slick-theme.css"/>
        <link rel="stylesheet" href="../../css/style.css"/>
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
                        <a href="../../index.php" id="wehLogo">
                            <img src="../../img/logo/Westend logo blue.png" alt="Westend Hospital Logo"/>
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
                                                <a href="../../medical-test-and-services/A-Z-of-all-medical-test.php">A-Z of all Medical Test</a>
                                            </li>
                                            <li>
                                                <a href="../../medical-test-and-services/A-Z-of-all-medical-services.php">A-Z of all Medical Services</a>
                                            </li>
                                            <li>
                                                <a href="../../medical-test-and-services/department-and-services.php">Department & Services</a>
                                            </li>
                                            <li>
                                                <a href="../../medical-test-and-services/patient-education.php">Patient Education</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <!--Patient and visitors-->
                                    <li class="dropdown">
                                        <a href="#" class="dropbtn">Patient & Visitors</a>
                                        <ul class="dropdown-content" id="menuDropdown">
                                            <li>
                                                <a href="../../patient-and-visitors/vistors.php">Visitors</a>
                                            </li>
                                            <li>
                                                <a href="../../patient-and-visitors/your-hospital-stay.php">Your Hospital Stay</a>
                                            </li>
                                            <li>
                                                <a href="../../patient-and-visitors/billing-and-financial-asistance.php">Billing & Financial Asistance</a>
                                            </li>
                                            <li>
                                                <a href="../../patient-and-visitors/accepted-insurance.php">Accepted Insurance</a>
                                            </li>
                                            <li>
                                                <a href="../../patient-and-visitors/medical-records.php">Medical Records</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <!--Why choose us-->
                                    <li class="dropdown">
                                        <a href="#" class="dropbtn">Why Choose Us</a>
                                        <ul class="dropdown-content" id="menuDropdown">
                                            <li>
                                                <a href="../../why-choose-us/our-mission-vision-and-values.php">Our Mission, Vision & Values</a>
                                            </li>
                                            <li>
                                                <a href="../../why-choose-us/quality-patient-care.php">Quality Patient Care</a>
                                            </li>
                                            <li>
                                                <a href="../../why-choose-us/patient-stories-testimonies.php">Patient's Stories/Testimonies</a>
                                            </li>
                                            <li>
                                                <a href="../../why-choose-us/our-team.php">Our Team</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="contact-li">
                                        <a href="../../contact-us.php" class="contact-us">Contact Us</a>
                                    </li>
                                </ul>
                                <!--navbar2-->
                                <ul class="flex navbar2">
                                    <li>
                                        <a href="../../map-and-directions.php">Maps & Direction</a>
                                    </li>
                                    <li>
                                        <a href="../../request-an-appointment.php">Request Appointment</a>
                                    </li>
                                    <li>
                                        <a href="../../refer-a-patient.php">Refer a Patient</a>
                                    </li>
                                    <li>
                                        <a href="../../find-a-doctor.php">Find a Doctor</a>
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
                                        <button type="submit" id="searchBtn" class="overlaySearch">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                                <!--display Ajax result from server here-->
                                <div id="searchResult" class="popular-searches">
                                    <h3>Popular Searches</h3>
                                    <ul>
                                        <li><a href="../../refer-a-patient.php">Refer a patient</a></li>
                                        <li><a href="../../map-and-directions.php">Maps & Directions</a></li>
                                        <li><a href="#">Treatments</a></li>
                                        <li><a href="#">Services</a></li>
                                    </ul>
                                </div>

                                            <!--replace search content with below file-->
                            <div id="searchResult2" class="popular-searches" style="display: none">
                            <h3>Popular Searches</h3>
                            <ul>
                                <li><a href="../../refer-a-patient.php">Refer a patient</a></li>
                                <li><a href="../../map-and-directions.php">Maps & Directions</a></li>
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
            <div class="section-background-image registration-and-admitting">
                <div class="container">
                    <h2 class="subnavbar-color">Registration and admitting.</h2>
                    <ul class="inline-block-breadcrumb subnavbar-color">
                        <li>
                            <a href="../../index.php">Home</a>
                        </li>                        
                        <li>
                            <a href="../your-hospital-stay.php">your-hospital-stay</a>
                        </li>                        
                        <li>registration and admitting</li>
                    </ul>
                </div>
            </div>

            <section id="registration-and-admitting">
                <div
                    class="container align-start">
                    <div class="flex">
                        <!--steps to follow-->
                        <div class="column-left col-30 v-border-right">
                            <h3 class="navy-blue">Steps to follow</h3>
                            <ul>
                                <li><a href="../your-hospital-stay/registration-and-admitting-process.php">Registration and Admitting process</a></li>
                                <li><a href="#">What to bring with you</a></li>
                                <li><a href="#">Your room and unit</a></li>
                                <li><a href="#">Visitors information</a></li>
                                <li><a href="#">Going home/discharge</a></li>
                            </ul>
                        </div>
                        <!--registration and admitting-->
                        <div class="column-right col-70">
                            <!--registration-->
                            <div class="margin-bottom">
                                <h3 class="navy-blue">Registration</h3>
                              <p> It is important that you are registered with the hospital so that we can ensure your record and all required consents are updated for your current stay. If you have not been registered within 24 hours of admission, please contact your nurse or call <span class="sky-blue">+234 807 420 2574.</span> </p>

                              <p>During the admitting process, we will request that you review the “Registration Form” with your demographic and insurance information. We do this to ensure we have the most up-to-date information so we can contact you about your care and ensure we’re submitting a claim to the right insurance company. When information is not correct, your health plan can deny coverage and you may be responsible for the charges. After reading the statement at the bottom of the form, we also ask that you sign at each visit to allow us to submit a claim and release any relevant information to your insurer on your behalf to receive payment. </p>
                              
                            </div>
                            <!--being admitted-->
                            <div>
                                <h3 class="navy-blue">Being Admitted </h3>
                              <p> There are a number of ways in which you may be admitted to Tufts Medical Center, please read below and find the section that best describes your individual situation. </p>

                              <p>Planned admission after a surgery – You will be registered as a patient with Tufts Medical Center prior to your procedure by the surgical registration staff at check-in. </p>

                              <p>    Admission from the Tufts MC Emergency Department – While you are an Emergency Department patient, the registration staff will verify your demographic, insurance and other important information. . </p>
                              
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
                        <img src="../../img/logo/_1511456132_462_General-Electric-mobile copy 2.png" alt="General Electric logo"/><img src="../../img/logo/Safari logo copy.png" alt="Safari Pharmacy logo"/><img src="../../img/logo/ddccopy.png" alt="DNA diagnostic Center"/><img src="../../img/logo/Fathers Heart copy.png" alt="Fathers Hearth Children Trust logo"/><img src="../../img/logo/Tymed CT Scan copy.png" alt="TYMED CT Scan Center logo"/>
                    </div>
                </div>
            </div>

            <section id="main-footer">
                <div class="container">
                    <!--row 1 About, For Health Professionals, Billing and Insurance & Ways to help-->
                    <!--BACK TO TOP-->
                        <button class="scrollTopBtn flex-column" id="myTopBTN" onclick="topFunction()">        <i class="fa fa-angle-up"></i>
                            <p>Top</p>
                    </button>
                    <!--BACK TO TOP BTN ENDS-->
                    <div class="flex lg-size">
                        <div class="dropdown">
                            <h4 class="dropbtn">About Us</h4>
                            <ul class="dropdown-content footer-menu" id="menuDropdown">
                                <li>
                                    <a href="../../our-history.php">History</a>
                                </li>
                                <li>
                                    <a href="../../awards-and-recognition.php">Awards & accreditation</a>
                                </li>
                                <li>
                                    <a href="../../map-and-directions.html">Maps & Directions</a>
                                </li>
                                <li>
                                    <a href="../../report-misconduct.php">Report Misconduct</a>
                                </li>
                                <li>
                                    <a href="../../contact-us.html">Contact</a>
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
                                    <a href="../../refer-a-patient.php">Refer a patient</a>
                                </li>
                                <li>
                                    <a href="#">For nurses</a>
                                </li>
                                <li>
                                    <a href="#">For physician</a>
                                </li>
                                <li>
                                    <a href="../../request-an-appointment.php">Enquiries & appointment</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <div class="billing-insurrance dropdown">
                                <h4 class="dropbtn">Billing and Insurance</h4>
                                <ul class="dropdown-content footer-menu" id="menuDropdown">
                                    <li>
                                        <a href="../../patient-and-visitors/accepted-insurance.php">Insurance Information</a>
                                    </li>
                                    <li>
                                        <a href="../../patient-and-visitors/billing-and-financial-asistance.php">Pay a bill</a>
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
                                    src="../../img/logo/Westend logo white.png"
                                    alt="Westend Hospital white logo"
                                    class="westendbluelogo"
                                    id="myImg"
                                />
                                </div>
                            </div>

                    <div class="copyright">
                        <small class="coy">&copy; <?php echo date("Y")?> Westend Hospital. All Right Reserved.
                        </small>
                        <small class="flex">
                            <a href="../../privacy-policy.php">Privacy Policy</a>
                            <a href="../../terms-of-use.php">Terms & Conditions</a>
                            <a href="../../patient-feedback.php">Feedback</a>
                            <a href="#">Sitemap</a>
                        </small>
                    </div>
                </div>
            </section>
        </footer>
        <script src="../../js/main.js"></script>
        <script src="../../js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="../../js/slick.js" type="text/javascript"></script>
        <script>
             //LIVE SEARCH SCRIPT FOR SEARCH BAR, INTEGRATED WITH LIVE SERVER USING AJAX, PHP and XML
    function liveSearch(str) {                                     
        if (str.length == 0) {                          
        document.getElementById("searchResult").innerHTML = document.getElementById("searchResult2").innerHTML;
        return;
      }
      /**
      else {
        document.getElementById("searchResult").innerHTML = document.getElementById("searchInput").value;
    }
     */
      document.getElementById("searchBTN").onclick = function clearInput(){
      document.getElementById("searchInput").value = "";
      document.getElementById("searchResult").innerHTML = document.getElementById("searchResult2").innerHTML;
      }
    var xmlHttp = new XMLHttpRequest(); 
    xmlHttp.onreadystatechange = function () {
      if(this.readyState == 4 && this.status == 200) {
        document.getElementById("searchResult").innerHTML = this.responseText;
        document.getElementById("searchResult").style.color="#828282";
      }
    }
      xmlHttp.open("GET", "../../liveSearch.php?q="+str, true); 
      xmlHttp.send();
    }
        </script>
    </body>
</html></body></html>
