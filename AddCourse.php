<?php session_start(); ?>
<!DOCTYPE html>
    <html>    
        <head>  
	        <meta charset="utf-8">
	        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	        <title>Add Course</title>
	        <link rel="stylesheet" href="css/bootstrap.css">
	        <link rel="stylesheet" href="css/font-awesome.min.css">
	        <link rel="stylesheet" type="text/css" href="css/bu.css">
<!--            <link href="https://fonts.googleapis.com/css?family=Anton|Gugi|Josefin+Sans|Lora|Merriweather+Sans|Poppins" rel="stylesheet">-->
        </head>    
        <body style="background: url(img/aerial-desk-device-1011329.jpg) no-repeat center center;">
              <!--Start  Navbar-->
              <!--Start  Navbar-->
              <div class="container-fluid">

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark">


        <a class="navbar-brand" href="bu.php" style="color: orange; border: 3px solid orange;padding: 7px;border-radius: 5px;">BU_Learn</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="bu.php">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Tour</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Resources</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="AddGrades.php">Add Student Activity</a>
                </li>
            </ul>
            <?php if(isset($_SESSION['username'])){
                echo '<div class="my-2 my-lg-0" id="registernav">
			      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                         
                        <div class="borderlink"></div>
                          <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  '.$_SESSION['username'].'
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="logout.php">Logout</a>
                                </div>
                        </li>
                    </ul>
                 </div>';
            }else{
                echo '<div class="my-2 my-lg-0" id="registernav">
			      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                          <li class="nav-item">
                            <a class="nav-link" href="login.php">Log In</a>
                          </li>
                        <div class="borderlink"></div>
                          <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Sign Up
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="instrsignup.php">Instructor</a>
                                  <a class="dropdown-item" href="signup.php">Student</a>
                                </div>
                        </li>
                    </ul>
                 </div>';
            }
            ?>

        </div>

    </nav>
</div>
      
                            <!--End Navbar-->
      
    
                            <!--End Navbar-->
            <section class=" log sign">
                <div class="container-fluid">
                    <h4>Add Course To<span>BU_Learn</span></h4>
                    <span>All fields are required</span>
                    <form method="GET" action="backend.php">

                        <div class="form-group">
                            <label for="formGroupExampleInput">Course Code</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" required name="ccode">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Course Name</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" required name="cname">
                          </div>
                          <div class="form-group">
                            <label for="formGroupExampleInput">level</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" required name="clevel">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">area</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" required name="carea">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">ID (Instructor ID)</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" required name="inid">
                          </div>
                     
                        <div class="form-group">
                            <button type="submit">Add</button>
                          </div>
                    </form>
                </div>
            </section>
        
            
            
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bu.js"></script> 
        </body>
</html>