<?php session_start(); ?>
<!DOCTYPE html>
    <html>    
        <head>  
	        <meta charset="utf-8">
	        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	        <title>BU_Learn</title>
	        <link rel="stylesheet" href="css/bootstrap.css">
	        <link rel="stylesheet" href="css/font-awesome.min.css">
	        <link rel="stylesheet" type="text/css" href="css/bu.css">
<!--            <link href="https://fonts.googleapis.com/css?family=Anton|Gugi|Josefin+Sans|Lora|Merriweather+Sans|Poppins" rel="stylesheet">-->
        </head>    
    <body>  
        
                    <!--Start  Navbar-->
                    <?php include 'header.php'; ?>
      
    
                            <!--End Navbar-->
                            <!-- Start Intro -->
        
        <section class="intro">
            <div class="overlay">
            <div class="container-fluid">
                    <h2 class="head1">Advance What's<br>Possible!</h2>
                    <p class="p1">BU_Learn brings together the best K-12 learning<br>management system with assessment management to<br>improve student performance, foster collaboration, and<br> personalize learning.</p>
                
                    <a href="signup.php"><button class="but1">Register Now!</button></a>
                </div>
            </div>
        </section>
        
<!--    End Intro    -->
<!--    Start Site Uses    -->
        <section class="uses">
            <div class="container-fluid">
                <h4 class="head2 text-center">What makes BU_Learn great</h4>
                <div class="uses3">
                    <img src="img/focused-on-k-12-schools-and-districts.png">
                    <h4 class="text-center">Focused on K-12 schools just like yours</h4>
                    <p>Elementary students don’t learn the same way as college students or adults. BU_Learn was designed for all students—from kindergarten through 12th grade—to be fully engaged with their learning.</p>
                </div>
                <div class="uses3">
                 <img src="img/district-wide-communication-and-collaboration.png">
                    <h4 class="text-center">Designed for district<br>success</h4>
                    <p>BU_Learn has spent the last 10 years learning from our 1,600+ customers and more than 20 million users about what products and services classrooms, schools, and entire districts need to be successful.</p>
                </div>
                <div class="uses3">
                     <img src="img/community-lms.png">
                    <h4 class="text-center">Bring your community together</h4>
                    <p>Learning is not just about teachers and students. BU_Learn allows you to bring everyone together—students, teachers, coaches, parents, administrators—with one communication and collaboration platform.</p>   
                </div>
                <button class="but2">Learn More</button>
            </div>
        </section>
<!--    End Site Uses    -->
<!--    Start Sponsers section     -->
        <section class="sponsers">
            <div class="container-fluid">
                <div class="tools1">
                    <img src="img/lms-integrations.png">
                    <h3>200+ educational tools and platform integrations</h3>
                    <p>BU_Learn has every tool your classroom needs and comes pre-integrated with more than 200+ tools, student information systems (SIS), and education platforms.</p>
                
                </div>
                <div class="tools2">
                    <img src="img/google-drive-schoology-learning-management-system.png">
                    <img src="img/microsoft-onedrive-schoology-learning-management-system.png">
                    <img src="img/nearpod-schoology-lms.png">
                    <img src="img/syward-sis-schoology-lms.png">
                    <img src="img/brainpop-schoology-lms.png">
                    <img src="img/aeries-sis-schoology-lms_0.png">
                    <img src="img/infinite_campus_logo.png">
                    <img src="img/khan-academy-schoology-lms.jpg">
                </div>
                <button class="but3">See All Integrations</button>
            </div>
        </section>
<!--    End Sponsers Section    -->
<!--    Start request demo section    -->
        <section class="reqdemo">
            <div class="container-fluid">
                <div class="tools3">
                    <img src="img/learn-more-about-schoology.png">
                    <h3>Are you ready to advance what's possible in education?</h3>
                    <p>Talk with one of BU_Learn’s edtech specialists to learn how you can transform the learning experience at your school or district.</p>
                
                </div>
                <div class="tools4">
                    <img src="img/schoology-learning-and-assessment-management.png">
                </div>
                <button class="but4">Request A Demo</button>
            </div>
        </section>
        <!--    End request demo section    -->
        <!--    Start Footer   -->
        
        <footer>
            <div class="container-fluid">
                <div class="social">
                    <ul>
                        <span><li><a href="#">TOUR</a></li></span>
                    </ul>
                </div>
                <div class="social">
                    <ul>
                        <span><li><a href="#">RESOURCES</a></li></span>
                        <li><a href="#">Video</a></li>
                        <li><a href="#">Webinars</a></li>
                        <li><a href="#">Presentations</a></li>
                        <li><a href="#">Best Practices</a></li>
                        <li><a href="#">Product Info</a></li>
                        <li><a href="#">Research</a></li>
                        <li><a href="#">Stories</a></li>
                    </ul>
                    </div>
                <div class="social">
                    <ul>
                        <span><li><a href="#">ABOUT</a></li></span>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <hr style=" border: 0.5px solid white;">
              
                    <span style="color: aliceblue;font-size: 18px;margin-left: 38%;font-family: monospace;">2019 BU_Learn.All Rights Reserved.</span>
                    <span></span>
            </div>
        </footer> 
        <!--    End Footer   -->
        
      	<script src="js/jquery-3.3.1.min.js"> </script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bu.js"></script> 
    </body>    
</html>