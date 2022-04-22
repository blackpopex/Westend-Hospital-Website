<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Westend Hospital | We provide healthcare services</title>
    <link rel="icon" type="image/x-icon" href="img/logo/favicon.ico.png" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <meta name="description" content="" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/demo.css" />
    <link rel="stylesheet" href="css/slideshow.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/mobileslideshowstyle.css" />
    <link rel="stylesheet" href="css/slick.css" />
    <script src="http://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="./js/multi-animated-counter.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://kit.fontawesome.com/12d9de5a0c.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- start Gist JS code  -->
    <script>
        (function(d,h,w){var gist=w.gist=w.gist||[];gist.methods=['trackPageView','identify','track','setAppId'];gist.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);gist.push(e);return gist;}};for(var i=0;i<gist.methods.length;i++){var c=gist.methods[i];gist[c]=gist.factory(c)}s=d.createElement('script'),s.src="https://widget.getgist.com",s.async=!0,e=d.getElementsByTagName(h)[0],e.appendChild(s),s.addEventListener('load',function(e){},!1),gist.setAppId("kk4hnrrk"),gist.trackPageView()})(document,'head',window);
    </script>
  
    <!-- end Gist JS code-->
  </head>
  <body>
    <!--
    <div id="preLoader"></div>
        -->
    <!--header-hero section-->
    <div class="header-hero-container">
      <header id="myHeaderMenu">
        <!-----------TOP NAVIGATION------------->
        <div class="topNav">
          <div class="container flex">
            <a href="index.php" id="wehLogo">
              <img
                src="img/logo/Westend logo blue.png"
                alt="Westend Hospital Logo"
              />
            </a>
            <nav class="flex">
              <div
                id="navToggler"
                class="hamburgerMenu"
                onclick="myFunction(this)"
              >
                <div class="bar bar1"></div>
                <div class="bar bar2"></div>
                <div class="bar bar3"></div>
              </div>

              <div class="navbar-links" id="sideNavbar">
                <ul class="flex navBar1">
                  <!--Medical Test & services-->
                  <li class="dropdown">
                    <a href="#" class="dropbtn">Medical Test & Services</a>
                    <ul class="dropdown-content" id="menuDropdown">
                      <li>
                        <a
                          href="medical-test-and-services/A-Z-of-all-medical-test.php"
                          >A-Z of all Medical Test</a
                        >
                      </li>
                      <li>
                        <a
                          href="medical-test-and-services/A-Z-of-all-medical-services.php"
                          >A-Z of all Medical Services</a
                        >
                      </li>
                      <li>
                        <a
                          href="medical-test-and-services/department-and-services.php"
                          >Department & Services</a
                        >
                      </li>
                      <li>
                        <a
                          href="medical-test-and-services/patient-education.php"
                          >Patient Education</a
                        >
                      </li>
                    </ul>
                  </li>

                  <!--Patient and visitors-->
                  <li class="dropdown">
                    <a href="#" class="dropbtn">Patient & Visitors</a>
                    <ul class="dropdown-content" id="menuDropdown">
                      <li>
                        <a href="patient-and-visitors/vistors.html">Visitors</a>
                      </li>
                      <li>
                        <a href="patient-and-visitors/your-hospital-stay.php"
                          >Your Hospital Stay</a
                        >
                      </li>
                      <li>
                        <a
                          href="patient-and-visitors/billing-and-financial-asistance.php"
                          >Billing & Financial Asistance</a
                        >
                      </li>
                      <li>
                        <a href="patient-and-visitors/accepted-insurance.php"
                          >Accepted Insurance</a
                        >
                      </li>
                      <li>
                        <a href="patient-and-visitors/medical-records.php"
                          >Medical Records</a
                        >
                      </li>
                    </ul>
                  </li>

                  <!--Why choose us-->
                  <li class="dropdown">
                    <a href="#" class="dropbtn">Why Choose Us</a>
                    <ul class="dropdown-content" id="menuDropdown">
                      <li>
                        <a
                          href="why-choose-us/our-mission-vision-and-values.php"
                          >Our Mission, Vision & Values</a
                        >
                      </li>
                      <li>
                        <a href="why-choose-us/quality-patient-care.php"
                          >Quality Patient Care</a
                        >
                      </li>
                      <li>
                        <a href="why-choose-us/patient-stories-testimonies.php"
                          >Patient's Stories/Testimonies</a
                        >
                      </li>
                      <li>
                        <a href="why-choose-us/our-team.php">Our Team</a>
                      </li>
                    </ul>
                  </li>

                  <li class="contact-li">
                    <a href="contact-us.php" class="contact-us">Contact Us</a>
                  </li>
                </ul>
                <!--navbar2-->
                <ul class="flex navbar2">
                  <li>
                    <a href="map-and-directions.php">Maps & Direction</a>
                  </li>
                  <li>
                    <a href="request-an-appointment.php"
                      >Request Appointment</a
                    >
                  </li>
                  <li>
                    <a href="refer-a-patient.php">Refer a Patient</a>
                  </li>
                  <li>
                    <a href="find-a-doctor.php">Find a Doctor</a>
                  </li>
                  <li>
                    <a href="#">Call Us: 0807 420 2574 </a>
                  </li>
                </ul>
              </div>

              <!--search BTN-->
              <a id="searchBTN" class="fa fa-search" onclick="clearInput()"></a>
            </nav>
          </div>
          <!--display dropdown when search button is clicked-->
          <div class="search-overlay" id="search-Overlay">
            <div class="container">
              <div class="search-content">
                <form action="#" method="post" autocomplete="off">
                  <div>
                    <input
                      type="text"
                      placeholder="Looking for something?"
                      name="Search" onkeyup="liveSearch(this.value)" id="searchInput"
                    />
                    <button type="submit" id="searchBtn" class="overlaySearch">
                      <i class="fa fa-search"></i>
                    </button>

                  
                  </div>
                </form>

                <!--display Ajax result from server here-->
                <div id="searchResult" class="popular-searches">
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
      <!--Slideshows-->
      <section id="slideshow_container">
        <div class="rt-container">
          <div class="col-rt-12">
            <!-- Slider -->
            <div id="slider">
              <div class="slides">
                <div class="slider">
                  <div class="content">
                    <div class="content-txt">
                      <h2>Lab Staff & M.D.</h2>
                      <p>
                        Nam ultrices pellentesque facilisis. In semper tellus
                        mollis nisl pulvinar.
                      </p>
                    </div>
                  </div>
                  <div class="image">
                    <img
                      src="img/slideshow/slideshow 001.jpg"
                      style="width: 100%; height: auto"
                    />
                  </div>
                </div>
                  <div class="slider">
                  <div class="content">
                    <div class="content-txt">
                      <h2>Team Work</h2>
                      <p>
                        Nam ultrices pellentesque facilisis. In semper tellus
                        mollis nisl pulvinar.
                      </p>
                    </div>
                  </div>
                  <div class="image">
                    <img
                      src="img/slideshow/slideshow 004.jpg"
                      style="width: 100%; height: auto"
                    />
                  </div>
                </div>
                  <div class="slider">
                  <div class="content">
                    <div class="content-txt">
                      <h2>Gynaecology Care</h2>
                      <p>
                        Nam ultrices pellentesque facilisis. In semper tellus
                        mollis nisl pulvinar.
                      </p>
                    </div>
                  </div>
                  <div class="image">
                    <img
                      src="img/slideshow/slideshow 008.jpg"
                      style="width: 100%; height: auto"
                    />
                  </div>
                </div>
                <div class="slider">
                  <div class="content">
                    <div class="content-txt">
                      <h2>Healthy Family</h2>
                      <p>
                        Nam ultrices pellentesque facilisis. In semper tellus
                        mollis nisl pulvinar.
                      </p>
                    </div>
                  </div>
                  <div class="image">
                    <img src="img/slideshow/slideshow 006.jpg" />
                  </div>
                </div>
              </div>
              <div class="switch">
                <ul>
                  <li>
                    <div class="on"></div>
                  </li>
                  <li></li>
                  <li></li>
                  <li></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!---------------------------MAIN PAGE CONTENT---------------------------------------------->

    <!--Welcome to Westend Hospital and Image section -->
    <section id="faithful_work" style="padding-bottom: 0; margin-bottom: 0">
      <div class="container flex faithful-work">
        <!--Welcome to Westend Hospital container -->
        <div class="text-container col-60">
          <h2 class="navy-blue">Welcome to Westend Hospital</h2>
          <h5 class="black-text">
            Over 42 years of faithful work, we have built a long standing
            relationship based on trust.
          </h5>
          <div>
            <p>
              Westend Clinic started on full-time basis on January 4, 1978. Our
              Vision is to attain a level of high functionality and an
              environment that would encourage the partnering of discerning
              minds strategically aligned with our goals and committed to
              deliver the best health care service in Nigeria.
            </p>
            <p>
              Westend Clinic started on full-time basis on January 4, 1978. Our
              Vision is to attain a level of high functionality and an
              environment that would encourage the partnering of discerning
              minds strategically aligned with our goals and committed to
              deliver the best health care service in Nigeria.
            </p>
            <a
              href="our-history.php"
              class="btn white-background-rounded-navy-bordered navy-blue"
              >More About Us</a
            >
          </div>
        </div>
        <!--Image container -->
        <div class="img-blueBg-container col-40">
          <div class="img-navy-blue-box-relative">
            <div class="navy-blue-box col-50"></div>
            <div class="img-container">
              <div>
                <img
                  src="img\other photos\Westend hospital garden.jpg"
                  alt="Westend Hospital Car Park" 
                />
                <div class="img-content-box bg-blue">
                  <h5 class="text-black text-center">
                    PATIENT & VISITORS GLANCE
                  </h5>
                  <p class="text-black text-center">
                    Plan your visit to our Hospital
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
   <!--Hmo-advert-->
   <div id="hmoAvant">
      <div class="hmo-avant-clinicday-wrapper col-100 flex slides-box">
        <div class="box hmo-insurance transparent-sky-blue col-33 slide">
          <div class="box-wrapper">
            <h3 class="white-text text-center">Our Supported HMO/Insurance</h3>
            <div>
              <p class="white-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Reprehenderit, alias!Lorem ipsum dolor sit amet, consectetur
                adipisicing elit. Reprehenderit, alias!
              </p>
              <div class="more-container">
                <a
                  href="patient-and-visitors/accepted-insurance.html"
                  class="btn white-background-borderless"
                  >Know More</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="box our-avantages transparent-navy-blue col-33 slide">
          <div class="box-wrapper">
            <h3 class="white-text text-center">Our Avantages</h3>
            <ul>
              <li>
                <i class="fa fa-check"></i>
                <span>Professional Staffs</span>
              </li>
              <li>
                <i class="fa fa-check"></i>
                <span>Good Success Rating</span>
              </li>
              <li>
                <i class="fa fa-check"></i>
                <span>24/7 Hours Support</span>
              </li>
              <li>
                <i class="fa fa-check"></i>
                <span>Affordable Cost</span>
              </li>
              <li>
                <i class="fa fa-check"></i>
                <span>State of the art Technology</span>
              </li>
              <li>
                <i class="fa fa-check"></i>
                <span>Reduced Waiting Time</span>
              </li>
            </ul>
          </div>
        </div>

        <div class="box our-clinic-days col-33 slide">
          <div class="box-wrapper">
            <h3 class="sky-blue text-center">Our Clinic Days</h3>
            <table>
              <tr>
                <th class="tiny-font-weight">Monday</th>
                <td>0.9:00 - 20:00PM</td>
              </tr>
              <tr>
                <th class="tiny-font-weight">Tuesday</th>
                <td>0.9:00 - 20:00PM</td>
              </tr>
              <tr>
                <th class="tiny-font-weight">Wednesday</th>
                <td>0.9:00 - 20:00PM</td>
              </tr>
              <tr>
                <th class="tiny-font-weight">Thursday</th>
                <td>0.9:00 - 20:00PM</td>
              </tr>
              <tr>
                <th class="tiny-font-weight">Friday</th>
                <td>0.9:00 - 20:00PM</td>
              </tr>
              <tr>
                <th class="tiny-font-weight">Saturday</th>
                <td>0.9:00 - 20:00PM</td>
              </tr>
              <tr>
                <th class="tiny-font-weight">Sunday</th>
                <td>0.9:00 - 20:00PM</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </section>
    <!--42 Years of Faithful Work Ends, Our HMO/Insurance, Avantages and Clinic Days-->

    <!--Our Services-->
    <section id="Our-services">
      <!--background-grey-->
      <div class="bg-grey col-100">
        <div class="container">
          <h2 class="navy-blue">
            Our
            <span class="navy-blue">Services</span>
          </h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus
            hic nesciunt quae. Maxime reprehenderit, doloribus maiores incidunt
            amet qui sunt reiciendis quaerat. Perferendis a cumque veniam, odit
            molestias et inventore.
          </p>
        </div>
      </div>
      <!--background-grey ends-->
      <!--background-white-->
      <div class="bg-white col-100">
        <div class="container">
          <div class="absolute-container-what-we-do">
            <div class="what-we-do col-40">
              <div>
                <h3 class="white-text text-center">What We Do</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Distinctio pariatur eius voluptatem magnam at tempore.
                  Distinctio pariatur eius voluptatem magnam at tempore. Lorem
                  ipsum dolor sit amet consectetur adipisicing elit. Distinctio
                  pariatur eius voluptatem magnam at tempore. Distinctio
                  pariatur eius voluptatem magnam at tempore.
                </p>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Distinctio pariatur eius voluptatem magnam at tempore.
                  Distinctio pariatur eius voluptatem magnam at tempore. Lorem
                  ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <a href="medical-test-and-services\A-Z-of-all-medical-services.php" class="btn square-btn-bg-white"
                  >A - Z of All Our Services</a
                >
              </div>
            </div>
            <div class="service-boxes col-60">
              <div class="service-box-wrapper slick-slider-box">
                <!--first slider box-->
                <div class="absolute-box">
                  <div class="box-container">
                    <div class="box width-25">
                      <i class="fas fa-biohazard navy-blue"></i>
                      <p>
                        <b>Radiological Services</b>
                      </p>
                      <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                    <div class="box width-25">
                      <i class="fas fa-dna navy-blue"></i>
                      <p>
                        <b>Laboratory Services</b>
                      </p>
                      <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                    <div class="box width-25">
                      <i class="fas fa-viruses navy-blue"></i>
                      <p>
                        <b>Molecular PCR Services</b>
                      </p>
                      <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                    <div class="box width-25">
                      <i class="fas fa-lungs-virus navy-blue"></i>
                      <p>
                        <b>Dialysis Services</b>
                      </p>
                      <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                  </div>
                </div>

                <!--second slider box-->
                <div class="absolute-box">
                  <div class="box-container">
                    <div class="box width-25">
                      <i class="fas fa-ambulance navy-blue"></i>
                      <p>
                        <b>Ambulance Services</b>
                      </p>
                      <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                    <div class="box width-25">
                      <i class="fas fa-heartbeat navy-blue"></i>
                      <p>
                        <b>Cardiological Services</b>
                      </p>
                      <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                    <div class="box width-25">
                      <i class="fas fa-microscope navy-blue"></i>
                      <p>
                        <b>Laboratory Services</b>
                      </p>
                      <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                    <div class="box width-25">
                      <i class="fas fa-prescription navy-blue"></i>
                      <p>
                        <b>Pharmaceutical Services</b>
                      </p>
                      <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                  </div>
                </div>

                <!--third slider box-->
                <div class="absolute-box">
                  <div class="box-container">
                    <div class="box width-25">
                      <i class="fas fa-user-md navy-blue"></i>
                      <p>
                        <b>General Services</b>
                      </p>
                      <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                    <div class="box width-25">
                      <i class="fas fa-tooth navy-blue"></i>
                      <p>
                        <b>Dental Services</b>
                      </p>
                      <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                    <div class="box width-25">
                      <i class="fas fa-head-side-virus navy-blue"></i>
                      <p>
                        <b>CT Scan Services</b>
                      </p>
                      <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                    <div class="box width-25">
                      <i class="fas fa-diagnoses navy-blue"></i>
                      <p>
                        <b>Surgical Services</b>
                      </p>
                      <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                  </div>
                </div>
                <!--third slider box ends -->
              </div>
            </div>
          </div>
        </div>
        <!--background-white-->
      </div>
    </section>
    <!--Our Services ends-->

    <!--Emergency ?-->
    <section id="emergency">
      <div class="bg-img-emergency">
        <div class="transparent-bg-white col-50">
          <h2>
            <span class="navy-blue">Emergency ?</span>
          </h2>
          <h3 class="black-text sky-blue">Contact Us</h3>
          <div class="paragraph-contact-info">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas
              aspernatur amet doloribus non. Alias perferendis.
            </p>
            <div class="flex contact-info">
              <i class="fas fa-phone-alt"></i>
              <div>
                <p>Call us now</p>
                <p class="subnav-color">+234 (0) 807 420 2574</p>
              </div>
            </div>
            <div class="flex contact-info">
              <i class="fa fa-envelope"></i>
              <div>
                <p>Email us</p>
                <p class="subnav-color">medical@thewestendhospital.com</p>
              </div>
            </div>
            <div class="flex contact-info">
              <i class="fa fa-home"></i>
              <div>
                <p>Visit us at</p>
                <p class="subnav-color">
                  Westend hospital road, Off airport road, D.D.P.A. Effurun
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Emergency ends-->

    <!--Why Westend Hospital -->
    <section id="Why-Westend-Hospital">
      <div class="container">
        <h2 class="navy-blue text-center">What Makes Us Different</h2>
      </div>
      <div class="container">
        <div class="counter-container">
          <div class="flex col-100">
            <div class="col-25">
              <div class="flex" id="counters_1">
                <h2
                  class="sky-blue counter"
                  data-targetnum="2000"
                  data-easing="linear"
                  data-speed="6000"
                ></h2>
                <h3 class="navy-blue">Happy Clients</h3>
              </div>
            </div>
            <div class="col-25">
              <div class="flex" id="counters_2">
                <h2
                  class="sky-blue counter"
                  data-targetnum="645"
                  data-easing="linear"
                  data-speed="5000"
                ></h2>
                <h3 class="navy-blue">Successful Surgery</h3>
              </div>
            </div>
            <div class="col-25">
              <div class="flex" id="counters_3">
                <h2
                  class="sky-blue counter"
                  data-targetnum="200"
                  data-easing="linear"
                  data-speed="4000"
                ></h2>
                <h3 class="navy-blue">Professional Staffs</h3>
              </div>
            </div>
            <div class="col-25">
              <div class="flex" id="counters_3">
                <h2
                  class="sky-blue counter"
                  data-targetnum="100"
                  data-easing="linear"
                  data-speed="3000"
                 ></h2>
                <h3 class="navy-blue">Supported HMO/Insurrance</h3>
              </div>
            </div>
          </div>
        </div>

        <div class="advert-container">
          <div class="advert">
            <div class="text">
              <h4 class="navy-blue">
                Get a Second Heart Opinion from the Nation's Best
              </h4>
              <p class="sky-blue set-width" style="color: #012d5a">
                Westend Hospital is here for you. Call to schedule an
                appointment today!+234 (0) 807 420 2574
              </p>
              <h3 class="caring navy-blue" id="counters_3">
                Caring Since
                <span
                  class="counter"
                  data-targetnum="1978"
                  data-easing="linear"
                  data-speed="10000"
                >
                  1978
                </span>
              </h3>
            </div>
          </div>
          <img
            src="img/background-image/benyamin-bohlouli-hmVZ7StKY7I-unsplash.jpg"
            alt="Westend Nurses"
          />
        </div>
      </div>
    </section>
    <!--Why Westend Hospital ends -->

    <!--Request Call back-->
    <section id="RequestCallBack">
      <div class="request-call-back-bg-img">
        <div class="container">
          <h3 class="white-text text-center">Request a Call Back</h3>
          <p class="white-text specific-width">
            Our priority at Westend Hospital, is making sure our patients are
            always happy with our services. Are you an existing client or new to
            us? Kindly fill the form below and a customer care representative
            will get back to you shortly.
          </p>
          <form action="#" class="call-back-form" autocomplete="off">
            <input
              type="text"
              id="firstName"
              name="firstName"
              placeholder="First Name"
              required
            />
            <input
              type="text"
              id="lastName"
              name="lastName"
              placeholder="Last Name"
              required
            />
            <input
              type="tel"
              id="phoneNumber"
              name="phoneNumber"
              placeholder="Phone Number"
              required
            />
            <button type="Submit" class="square-btn-white request-call-btn">
              Send
            </button>
          </form>
        </div>
      </div>
    </section>
    <!--Request Call back end-->

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
            <img
              src="img/logo/_1511456132_462_General-Electric-mobile copy 2.png"
              alt="General Electric logo"
            /><img
              src="img/logo/Safari logo copy.png"
              alt="Safari Pharmacy logo"
            /><img
              src="img/logo/ddccopy.png"
              alt="DNA diagnostic Center"
            /><img
              src="img/logo/Fathers Heart copy.png"
              alt="Fathers Hearth Children Trust logo"
            /><img
              src="img/logo/Tymed CT Scan copy.png"
              alt="TYMED CT Scan Center logo"
            />
          </div>
        </div>
      </div>

      <section id="main-footer">
        <div class="container">
          <!--row 1 About, For Health Professionals, Billing and Insurance & Ways to help-->
          <!--BACK TO TOP-->
          <button
            class="scrollTopBtn flex-column"
            id="myTopBTN"
            onclick="topFunction()"
          >
            <i class="fa fa-angle-up"></i>
            <p>Top</p>
          </button>
          <!--BACK TO TOP BTN ENDS-->
          <div class="flex lg-size">
            <div class="dropdown">
              <h4 class="dropbtn">About Us</h4>
              <ul class="dropdown-content footer-menu" id="menuDropdown">
                <li>
                  <a href="our-history.php">History</a>
                </li>
                <li>
                  <a href="awards-and-recognition.php">Awards & recognition</a>
                </li>
                <li>
                  <a href="map-and-directions.php">Maps & Directions</a>
                </li>
                <li>
                  <a href="report-misconduct.php">Report Misconduct</a>
                </li>
                <li>
                  <a href="contact-us.php">Contact</a>
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
                  <a href="refer-a-patient.php">Refer a patient</a>
                </li>
                <li>
                  <a href="#">For nurses</a>
                </li>
                <li>
                  <a href="#">For physician</a>
                </li>
                <li>
                  <a href="request-an-appointment.php"
                    >Enquiries & appointment</a
                  >
                </li>
              </ul>
            </div>
            <div>
              <div class="billing-insurrance dropdown">
                <h4 class="dropbtn">Billing and Insurance</h4>
                <ul class="dropdown-content footer-menu" id="menuDropdown">
                  <li>
                    <a href="patient-and-visitors/accepted-insurance.php"
                      >Insurance Information</a
                    >
                  </li>
                  <li>
                    <a
                      href="patient-and-visitors/billing-and-financial-asistance.php"
                      >Pay a bill</a
                    >
                  </li>
                </ul>
              </div>
              <div class="ways-to-help footer-header">
                <h4>Ways to Help</h4>
                <p>
                  We supports Father's Heart Children's Trust, see how you can
                  make the lives of Orphans in Delta State better.
                </p>

                <a href="make-a-donation.php" class="make-donation btn rounded-white-btn"
                  >Make a Donation</a
                >
              </div>
            </div>
          </div>
          <div class="social-img flex">
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
              src="img/logo/Westend logo white.png"
              alt="Westend Hospital white logo"
              class="westendbluelogo"
              id="myImg"
            />
          </div>
          </div>

          <div class="copyright">
            <small class="coy"
              >&copy; <?php echo date("Y"); ?> Westend Hospital. All Right Reserved.
            </small>
            <small class="flex">
              <a href="privacy-policy.php">Privacy Policy</a>
              <a href="terms-of-use.php">Terms & Conditions</a>
              <a href="patient-feedback.php">Feedback</a>
              <a href="#">Sitemap</a>
            </small>
          </div>
        </div>
      </section>
    </footer>
    <script src="js/main.js"></>
    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="js/slick.min.js" type="text/javascript"></script>
    <script src="js/slideshow.js"></script>
    <script>
      // must be an array, could have only one element
      let visibilityIds = [
        '#counters_1',
        '#counters_2',
        '#counters_3',
        '#counters_4',
      ];
      // default counter class
      let counterClass = '.counter';
      // default animation speed
      let defaultSpeed = 3000;

      // slick slider control for service boxes
      $('.slick-slider-box').slick({
        dots: true,
        infinite: true,
        speed: 2000,
        slidesToShow: 1,
        centerMode: true,
        autoplay: true,
        autoplaySpeed: 6000,
        prevArrow: false,
        nextArrow: false,
        pauseOnHover: false,
      });
       // slideshow for mobile phones on advert section
       $(document).ready(function () {
        $('.slickAdvert').slideshowPlugin({
          effect: 'sliding',
          autoplay: 'true',
          delay: 8000,
          slideSpeed: 1000,
          ratio: 'keep',
        });
      });
    </script>
  </body>
</html>
