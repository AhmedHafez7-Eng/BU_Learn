<?php session_start(); ?>
<!DOCTYPE html>
    <html>    
        <head>  
	        <meta charset="utf-8">
	        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	        <title>Course Code</title>
	        <link rel="stylesheet" href="css/bootstrap.css">
	        <link rel="stylesheet" href="css/font-awesome.min.css">
	        <link rel="stylesheet" type="text/css" href="css/bu.css">
<!--            <link href="https://fonts.googleapis.com/css?family=Anton|Gugi|Josefin+Sans|Lora|Merriweather+Sans|Poppins" rel="stylesheet">-->
        </head>    
        <body style="background: url(img/design-desk-eyewear-313690.jpg) no-repeat center center;">
            
                     <!--Start  Navbar-->
        <?php include 'header.php'; ?>
      
    
                            <!--End Navbar-->
            
            
            <section class="log">
                <div class="container-fluid">
                    <h4>Enter Course Access Code</h4>
                    <h6><?php if(isset($_GET['message'])){echo $_GET['message'];} ?></h6>
                    <form action="backend.php" method="GET">
                          <div class="form-group">
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Access Code" name="acccode">
                          </div>
                        <div class="form-group">
                            <button type="submit" style="margin-left: 30%;">OK</button>
                          </div>
                    </form>
                </div>
            </section>
            
        <script src="js/jquery-3.3.1.min.js"> </script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bu.js"></script> 
        </body>
</html>