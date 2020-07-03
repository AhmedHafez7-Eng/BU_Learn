<?php session_start(); ?>
<!DOCTYPE html>
    <html>    
        <head>  
	        <meta charset="utf-8">
	        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	        <title>Student Sign Up</title>
	        <link rel="stylesheet" href="css/bootstrap.css">
	        <link rel="stylesheet" href="css/font-awesome.min.css">
	        <link rel="stylesheet" type="text/css" href="css/bu.css">
<!--            <link href="https://fonts.googleapis.com/css?family=Anton|Gugi|Josefin+Sans|Lora|Merriweather+Sans|Poppins" rel="stylesheet">-->
        </head>    
        <body style="background: url(img/beverage-blog-blogger-1799342.jpg) no-repeat center center;">
             <!--Start  Navbar-->
                    <?php include 'header.php'; ?>
                            <!--End Navbar-->
            <section class=" log sign">
                <div class="container-fluid">
                    <h4>Sign Up To<span>BU_Learn</span></h4>
                    <span>All fields are required</span>
                    <form  action="backend.php" method="GET">
<!--
                        <div class="form-group">
                            <label for="formGroupExampleInput">ID (Student_ID)</label>
                            <input type="text" maxlength="14" class="form-control" id="formGroupExampleInput" required name="sid">
                          </div>
-->
                        <div class="form-group">
                            <label for="formGroupExampleInput">First Name</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" required name="sfname">
                          </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Last Name</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" required name="slname">
                          </div>
                          <div class="form-group">
                            <label for="formGroupExampleInput">Email</label>
                            <input type="email" class="form-control" id="formGroupExampleInput" required name="semail">
                          </div>
                          <div class="form-group">
                            <label for="formGroupExampleInput2">Password</label>
                            <input type="password" class="form-control" id="formGroupExampleInput2" required name="spassword">
                          </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Birthday</label>
                            <input type="date" class="form-control" id="formGroupExampleInput" required name="sbirth">
                          </div>
                        <div class="form-group">
                            <button type="submit">Submit</button>
                          </div>
                    </form>
                </div>
            </section>
        
            
            
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bu.js"></script> 
        </body>
</html>