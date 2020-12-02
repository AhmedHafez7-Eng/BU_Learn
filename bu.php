<?php session_start(); ?>
<!DOCTYPE html>
    <html>    
        <head>

            <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- For Responsive -->
            <meta charset="utf-8">
            <title>BU Learn</title>
            <link rel="icon" href="img/titleIcon.png">  <!-- To make icon in title -->
            <link rel="stylesheet" href="css/all.css">
            <link rel="stylesheet" href="css/normalize.css">
            <link rel="stylesheet" type="text/css" href="css/bu.css">
        </head>    
    <body>  
        
    <!--Start  Navbar-->
        <header>
      <a href="#" class="logo">BU Learn</a>
      <div class="toggle" onclick="togglemenu();"></div>
      <ul class="menu">
        <li class="activeColor"><a href="#" onclick="togglemenu();">Home</a></li>
        <li><a href="#about" onclick="togglemenu();">About</a></li>
        <li><a href="#sponsers" onclick="togglemenu();">Sponsers</a></li>
        <li><a href="#requestDemo" onclick="togglemenu();">Request a Demo</a></li>

        <?php if(isset($_SESSION['username'])){
                echo '<li>
                        <div class="dropdown">
                          <button class="dropbtn">'.$_SESSION['username'].'
                            <i class="fa fa-caret-down"></i>
                          </button>
                          <div class="dropdown-content">
                            <a href="logout.php">Logout</a>
                          </div>
                        </div>
                      </li>';
              }else{

                echo '<li class="registerlinks"><a href="login.php" onclick="togglemenu();">Log In</a></li>
                      <li class="registerlinks">
                            <div class="dropdown">
                              <button class="dropbtn">Sign Up
                                <i class="fa fa-caret-down"></i>
                              </button>
                              <div class="dropdown-content">
                                <a href="instrsignup.php">Instructor</a>
                                <a href="signup.php">Student</a>
                              </div>
                            </div>
                      </li>';
              }
        ?>
      </ul>
    </header>
    <!--End Navbar-->

    <!-- Start Side Navigation -->


    <!-- End Side Navigation -->

    <!-- Start Banner -->
        <section class="banner" id="home">
            <div class="textBx">
                <h2><span>Advance What's<br>Possible!.</span></h2>
                <h3>BU_Learn brings together the best K-12 learning management system with assessment management to improve student performance, foster collaboration, and personalize learning.</h3>
                <a href="#about" class="btn">About Us</a>
            </div>
        </section>
    <!-- End Banner -->

    <!-- Start About -->
        <section class="about" id="about">
            <div class="heading">
                <h2>What Makes BU Learn Great</h2>
                <!-- <p>Fields where I have an experience and knowledge</p> -->
            </div>
            <div class="content">
                <div class="aboutBx">
                    <img src="img/focused-on-k-12-schools-and-districts.png">
                    <h2>Focused on K-12 schools just like yours</h2>
                    <p>Elementary students don’t learn the same way as college students or adults. BU_Learn was designed for all students—from kindergarten through 12th grade—to be fully engaged with their learning.</p>
                </div>
                <div class="aboutBx">
                    <img src="img/district-wide-communication-and-collaboration.png">
                    <h2>Designed for district success</h2>
                    <p>BU_Learn has spent the last 10 years learning from our 1,600+ customers and more than 20 million users about what products and services classrooms, schools, and entire districts need to be successful.</p>
                </div>
                <div class="aboutBx">
                    <img src="img/community-lms.png">
                    <h2>Bring your community together</h2>
                    <p>Learning is not just about teachers and students. BU_Learn allows you to bring everyone together—students, teachers, coaches, parents, administrators—with one communication and collaboration platform.</p>
                </div>
            </div>
            <div class="heading">
                <button class="btn show-more">Learn More</button>
            </div>
        </section>
    <!-- End About -->

    <!-- Start Sponsers -->
        <section class="sponsers" id="sponsers">
            <div class="content">
                <div class="contentBx w50">
                    <img src="img/lms-integrations.png" class="headimg">
                    <h3>200+ educational tools and platform integrations.</h3>
                    <p>BU_Learn has every tool your classroom needs and comes pre-integrated with more than 200+ tools, student information systems (SIS), and education platforms.</p>
                    <!-- <div class="heading">
                        <button onclick="readMore()" id="readMoreBtn" class="btn">Read more</button>
                    </div> -->
                </div>
                <div class="w50 our-sponsers">
                    <img src="img/google-drive-schoology-learning-management-system.png">
                    <img src="img/microsoft-onedrive-schoology-learning-management-system.png">
                    <img src="img/nearpod-schoology-lms.png">
                    <img src="img/syward-sis-schoology-lms.png">
                    <img src="img/brainpop-schoology-lms.png">
                    <img src="img/aeries-sis-schoology-lms_0.png">
                    <img src="img/infinite_campus_logo.png">
                    <img src="img/khan-academy-schoology-lms.jpg">
                </div>
            </div>

            <div class="heading">
                <button class="btn">See All Integrations</button>
               <!--  <form method="get" action="files/Ahmed Hafez-CV.pdf" target="blank">
                    <button class="btn downloadCv">See All Integrations <i class="fas fa-download"></i></button>
                </form> -->
            </div>
        </section>
    <!-- End Sponsers -->

    <!-- Start Request Demo -->
        <section class="requestDemo" id="requestDemo">
            <div class="content">
                <div class="contentBx w50">
                    <img src="img/learn-more-about-schoology.png" class="headimg">
                    <h3>Are you ready to advance what's possible in education?</h3>
                    <p>Talk with one of BU_Learn’s edtech specialists to learn how you can transform the learning experience at your school or district.</p>
                    <!-- <div class="heading">
                        <button onclick="readMore()" id="readMoreBtn" class="btn">Read more</button>
                    </div> -->
                </div>
                <div class="w50">
                    <img src="img/schoology-learning-and-assessment-management.png" class="specialImg">
                </div>
            </div>

            <div class="heading">
                <button class="btn">Request A Demo</button>
               <!--  <form method="get" action="files/Ahmed Hafez-CV.pdf" target="blank">
                    <button class="btn downloadCv">See All Integrations <i class="fas fa-download"></i></button>
                </form> -->
            </div>
        </section>
    <!-- End Request Demo -->

    <!-- Start Contact -->
        <section class="contact" id="contact">
            <div class="heading white">
                <h2>Related Topics</h2>
            </div>
            <div class="content">
                    <div class="contactInfoBx">
                        <div class="box">
                            <div class="text">
                                <h3><a href="#">Resources</a></h3>
                                <ul>
                                    <li><a href="#">Video</a></li>
                                    <li><a href="#">Webinars</a></li>
                                    <li><a href="#">Presentations</a></li>
                                    <li><a href="#">Best Practices</a></li>
                                    <li><a href="#">Product Info</a></li>
                                    <li><a href="#">Research</a></li>
                                    <li><a href="#">Stories</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="box">
                            <div class="text">
                                <h3><a href="#">About</a></h3>
                                <ul>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Team</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="box">
                            <div class="text">
                                <h3><a href="#">Tour</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    <!-- End Contact -->

    <!-- Start Footer -->
        <div class="copyright">
            <p>Copyright &copy; 2020 Ahmed Hafez. All Rights Reserved.</p>
        </div>
    <!-- End Footer -->

    <!-- Start Dark Mode BUTTON -->
        <div class="dark-light" title="Switch Light & Dark Modes"><i class="fas fa-lightbulb fa-lg fa-fw" title="Switch Light & Dark Modes"></i></div>
    <!-- End Dark Mode BUTTON -->

    <!-- Start TO TOP BUTTON -->
            <div id='toTop'><i class="fas fa-chevron-up fa-lg totop-icon"></i></div>
    <!-- End TO TOP BUTTON -->




        
        <script src="js/all.js"></script>
        <script src="js/jquery-3.5.1.min.js"></script>
        <!-- <script src="js/bootstrap.min.js"></script> -->
        <script src="js/myscript.js"></script>
    </body>    
</html>
