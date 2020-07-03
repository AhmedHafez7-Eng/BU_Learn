<!DOCTYPE html>
    <html>    
        <head>  
	        <meta charset="utf-8">
	        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	        <title>Log In</title>
	        <link rel="stylesheet" href="css/bootstrap.css">
	        <link rel="stylesheet" href="css/font-awesome.min.css">
	        <link rel="stylesheet" type="text/css" href="css/bu.css">
<!--            <link href="https://fonts.googleapis.com/css?family=Anton|Gugi|Josefin+Sans|Lora|Merriweather+Sans|Poppins" rel="stylesheet">-->
        </head>    
        <body style="background: url(img/largeacademy-celebrate-celebration-267885.jpg) no-repeat center center;">
              <!--Start  Navbar-->
                    <?php include 'header.php'; ?>
                            <!--End Navbar-->
            <section class="log">
                <div class="container-fluid">
                    <h4>Log In To<span>BU_Learn</span></h4>
                    <h6><?php if(isset($_GET['message'])){echo $_GET['message'];} ?></h6>
                    <form action="backend.php" method="POST">
                          <div class="form-group">
                            <label for="formGroupExampleInput">Email</label>
                            <input type="email" class="form-control" id="formGroupExampleInput" placeholder="Type your email" name="loemail">
                          </div>
                          <div class="form-group">
                            <label for="formGroupExampleInput2">Password</label>
                            <input type="password" class="form-control" id="formGroupExampleInput2" name="lopass">
                          </div>
                        <div class="form-group">
                            <button type="submit">Log In</button>
                            <a href="#">Forgot your password?</a>
                          </div>
                    </form>
                </div>
            </section>
            
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bu.js"></script> 
        </body>
</html>