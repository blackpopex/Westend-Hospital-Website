<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Westend Hospital | Billing and finance department
        </title>
        <link rel="icon" type="image/x-icon" href="../img/logo/favicon.ico.png"/>
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"/>
        <meta name="description" content="We will help you with all the billing information you need including paying online and periodic update on you bills. "/>
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
                                        <input type="text" placeholder="Looking for something?" name="Search"   onkeyup="liveSearch(this.value)" id="searchInput" />
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
            <div class="section-background-image billing-and-finance">
                <div class="container">
                    <h2 class="subnavbar-color">Billing and Financial Assistance</h2>
                    <ul class="inline-block-breadcrumb subnavbar-color">
                        <li>
                            <a href="../index.php">Home</a>
                        </li>
                        <li>Billing and finance</li>
                    </ul>
                </div>
            </div>

            <section id="billing-and-fiance">
                <div
                    class="container">
                    <!--Billing and finance-->
                    <div>

                        <p>Thank you for choosing the Westend Hospital for your healthcare needs. We understand that health services billing can be confusing, so we’re here to help.</p>
                        <p>The information on this page is designed to help you understand the basics of your bills, answer common billing questions, and provide you with information if you’re having trouble paying your bills.
                        </p>
                    </div>
                    <!-- Billing topics-->
                    <div class="billing-topics-container  margin-top">
                        <h3 class="navy-blue">Billing Topics</h3>
                        <!--Accordions-->
                        <div
                            class="accordion-wrapper">
                            <!--understand your bills-->
                            <h4 class="accordion sky-blue">Understand Your Bills</h4>
                            <div class="accordion-content" id="menuDropdown">
                                <p>Hospital stays, use of facilities and equipment, special treatments and tests, and medications are among the items for which the hospital will bill you, usually for the part not covered by Medicare or Medicaid or your private or employee insurance plan. Ultimately, the patient is responsible for all charges and deductibles. Your medical insurance coverage is a contract between you and your commercial insurance company. We suggest you contact your insurance company to verify that both the hospital and the physician are contracted with your insurance provider network. Ultimately, you are responsible for your hospital account.
                                </p>
                                <p>You should expect to receive a separate bill from the specialized physicians that may have treated you or assisted in your diagnosis.</p>

                                <h5>Separate bills will come from physician(s) listed below:</h5>
                                <ul class="square-list-type" id="squareList">
                                    <li>Emergency physicians will bill you for any services you may have received in the Emergency Department.</li>
                                    <li>Radiologists will bill you for reading any X-rays that were taken while at the hospital.</li>
                                    <li>Consulting Physicians may be asked by your treating physician to review your care for any special needs. You will receive a bill from these physicians as well.</li>
                                    <li>Pathologists will bill you for any laboratory and pathology test(s) they have read while you were at the hospital.</li>
                                    <li>Anesthesiologists will bill you for services received during any surgical procedures you may have undergone while at the hospital.</li>
                                </ul>
                                <p>If you have any questions regarding medical bills please contact account department directly by calling
                                    <span class="navy-blue">+234807 420 2574</span>.</p>
                            </div>

                            <div class="light-grey-border"></div>
                            <!--How Billing Works-->
                            <h4 class="accordion sky-blue">How Billing Works</h4>
                            <div class="accordion-content" id="menuDropdown">
                                <h5>We have many payment options</h5>
                                <p>Just like we have multiple options for care within the Centura Health Network, we also provide many different ways to pay medical bills, easily and conveniently.</p>

                                <p>We are happy to provide convenient online bill payment for services at Centura Health locations.</p>

                                <p>If you are having a scheduled procedure we will make every effort to update your records and get your insurance information before you arrive. While your insurance may indeed cover some or most of your procedure, you will be asked to pay your co-pay, deductible or co-insurance at the time of your appointment. If your insurance does not cover services provided by Centura Health, your financial responsibility may be significantly higher and will be due at the time of service.</p>

                                <p>If you don’t have the exact amount due at the time, we will require a deposit. The amount of the deposit varies by the type of service you receive.</p>

                                <h5>Making a way out for uninsured patients</h5>
                                <p>Centura Health compassionately serves uninsured patients with an understanding of the financial burdens they may face. That’s why we stand wholeheartedly by a policy to provide discounted rates to our patients and our families in regards to all health systems bills. We also advocate for meaningful changes in legislation to help the uninsured gain access to affordable, quality medical care. Learn more about our commitment to charity care.</p>

                            </div>

                            <div class="light-grey-border"></div>
                            <!--Pay Your Bills Online-->
                            <h4 class="accordion sky-blue">Pay Your Bills Online</h4>
                            <div class="accordion-content" id="menuDropdown">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, soluta.</p>
                            </div>

                            <div class="light-grey-border"></div>
                            <!--Uninsured-->
                            <h4 class="accordion sky-blue">Uninsured</h4>
                            <div class="accordion-content" id="menuDropdown" style="display: none;"></div>

                            <div class="light-grey-border"></div>
                        </div>

                    </div>
                    <div class="accepted-insurance margin-top">
                        <h4 class="navy-blue">
                            <b>Accepted Insurance Plans</b>
                        </h4>
                        <p>View our current list of accepted insurance plans at Westend Hospital.</p>
                        <a href="accepted-insurance.php" class="btn white-background-sky-blue-border sky-blue">Accepted Insurance</a>
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
                        <small class="coy">&copy; <?php echo date("Y")?> Westend Hospital. All Right Reserved.
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
