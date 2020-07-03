<?php session_start(); ?>
<!DOCTYPE html>
    <html>    
        <head>  
	        <meta charset="utf-8">
	        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	        <title>Choose Page</title>
	        <link rel="stylesheet" href="css/bootstrap.css">
	        <link rel="stylesheet" href="css/font-awesome.min.css">
	        <link rel="stylesheet" type="text/css" href="css/bu.css">
<!--            <link href="https://fonts.googleapis.com/css?family=Anton|Gugi|Josefin+Sans|Lora|Merriweather+Sans|Poppins" rel="stylesheet">-->
        </head>
        <style>
            body{
             background: url(img/bookcase-books-bookshelves-159711.jpg) no-repeat center center;
            }
            .pages{
                width: 100%;
            }
            .page1{
                background: url(img/art-artist-black-and-white-265047.jpg) no-repeat center center;
                width: 40%;
                height: 300px;
                display: inline-block;
                margin-left: 50px;
                margin-top: 13%;
                border-radius: 20%;
            }
            .page2{
                background: url(img/apple-blank-data-442574.jpg) no-repeat center center;
                width: 40%;
                height: 300px;
                display: inline-block;
                border-radius: 20%;
                margin-left: 160px;
            }
            h2{
                text-align: center;
                color: orangered;
                margin-top: 20%;
                font-weight: bold;
                font-size: 35px;
            }
            
        
        
        
        </style>
        <body>
        <?php include 'header.php'; ?>

            <section class="pages">
                <div class="container-fluid">
                    
                    <a href="AddCourse.php"><div class="page1">
                        <h2>ADD Courses</h2>
                   
                    
                    </div></a>
                    
                    <a href="AddGrades.php"><div class="page2">
                    <h2>ADD Grades and Attendence</h2>
                    
                    </div></a>
                    
                </div>
            </section>
            
            
            
            
            
            
            
            
            
            
            
            
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bu.js"></script> 
        </body>
</html>