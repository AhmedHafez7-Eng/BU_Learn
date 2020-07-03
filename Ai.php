<?php session_start(); ?>
<!DOCTYPE html>
    <html>    
        <head>  
	        <meta charset="utf-8">
	        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	        <title>AI</title>
	        <link rel="stylesheet" href="css/bootstrap.css">
	        <link rel="stylesheet" href="css/font-awesome.min.css">
	        <link rel="stylesheet" type="text/css" href="css/bu.css">
<!--            <link href="https://fonts.googleapis.com/css?family=Anton|Gugi|Josefin+Sans|Lora|Merriweather+Sans|Poppins" rel="stylesheet">-->
        </head>  
        <style>
        
            .side{
                border: 0.5px solid lightgrey;
                margin-top: 69px;
                height: 90vh;
                background-color: #FAF9F7;
            }
            .side img{
                margin-top: 15px;
                margin-left: 40px;
                border-radius: 1%;
            }
            .side ul{
                list-style: none;
                font-size: 17px;
                margin-top: 20px;
                
            }
            
            .side li{
                line-height: 1.9;
                
            }
            .side a{
                color: black;
                text-decoration: none;
                font-weight: 500;
            }
            .side a:hover{
                color: orangered;
               
            }
            .content{
                
                margin-top: 78px;
            }
            .content h2 a{
                color: orangered;
                text-decoration: none;
            }
            .content h2 a:hover{
                color:orange;
                text-decoration: none;
            }
            .detail{
                margin-top: 70px;
            }
            .content details summary{
                color: orange;
                font-weight: bold;
                font-size: 17px;
            }
            .content details summary:hover{
                color: orangered;
            }
            .content details ul{
               list-style: none;
            }
            .content details li{
               line-height: 1.7;
            }
            footer{
                top: 0px;
            }
        
        
        
        
        
        
        
        </style>
    <body>  
        
                    <!--Start  Navbar-->
                    <?php include 'materialhead.php'; ?>
                            <!--End Navbar-->
        
        
        
            <div class="container-fluid">
                <div class="row">
                    <div class="side col-3">
                            
                        <img src="img/artificial-intelligence-automation-bookcase-1329068.jpg" width="250px" height="150px">
                        <ul>
                        
                            <a href="#"><li>Materials</li></a>
                            <a href="checkgrade.php"><li>Grades</li></a>
                            <a href="checkgrade.php"><li>Attendence</li></a>
                            <a href="#"><li>Members</li></a>
                        
                        </ul>
                    
                    </div>
                    
                    <div class="content col-9">
                        
                        <h2><a href="#">Artficial Inteligence, BFCI, Spring 2019: Faculty of Computers and Informatics Benha.</a></h2>
                        <hr style="border: 0.5px solid lightgrey">
                        <section class="detail">
                            <details>
                                    <summary>Text Book</summary>
                                    <ul>
                                        <li><a href="files/Ai/Artificial%20Intelligence%20A%20Modern%20Approach%20(3rd%20Edition).pdf">
                                            AI Book</a></li>
                                    </ul>
                            </details>
                            <hr>
                            
                            <details>
                                    <summary>Lectures Presentation</summary>
                                    <ul>
                                        <li>
                                            <a href="files/Ai/AI-Lecture1.pdf">
                                            Lec 1</a>
                                        </li>
                                        <li>
                                            <a href="files/Ai/AI-Lecture2.pdf">
                                            Lec 2</a>
                                        </li>
                                        <li>
                                            <a href="files/Ai/AI-Lecture3.pdf">
                                            Lec 3</a>
                                        </li>
                                        <li>
                                            <a href="files/Ai/AI-Lecture4.pdf">
                                            Lec 4</a>
                                        </li>
                                        
                                    </ul>
                            </details>
                            <hr>
                            
                            <details>
                                    <summary>Practical</summary>
                                    <ul>
                                        
                                        <li><a href="files/Ai/Homework0Solution.pdf">
                                            Assignment 1 Solution</a></li>
                                        
                                        <li><a href="files/Ai/Homework1%20Solution.pdf">
                                            Assignment 2 Solution</a></li>
                                        
                                        <li><a href="files/Ai/Homework2%20Solution.pdf">
                                            Assignment 3 solution</a></li>
                                        
                                    </ul>
                            </details>
                            <hr>
                            <details>
                                    <summary>Assignments</summary>
                                    <ul>
                                        <li><a href="files/Ai/Homework0.pdf">
                                            Assignment 1</a></li>
                                        <li><a href="files/Ai/Homework1.pdf">
                                            Assignment 2</a></li>
                                        <li><a href="files/Ai/Homework2.pdf">
                                            Assignment 3</a></li>
                                        <li><a href="files/Ai/Homework3.pdf">
                                            Assignment 4</a></li>
                                    </ul>
                            </details>
                            <hr>
                            
                        </section>
                    </div>
                </div>
         </div>
        
        
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