<?php
session_start();
//checkgrade

$result;
//if(isset($_POST['sidch'])){
    $connection = mysqli_connect('localhost','root','','bulearn');
    mysqli_set_charset($connection,'utf8');
//    $sid=$_POST['sidch'];
//    $cocode=$_POST['ccodech'];

    $query = "SELECT * FROM student";
    $result = mysqli_query ($connection , $query);
//}

?>
<!DOCTYPE html>
    <html>    
        <head>  
	        <meta charset="utf-8">
	        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	        <title>Add Grade and Attendance</title>
	        <link rel="stylesheet" href="css/bootstrap.css">
	        <link rel="stylesheet" href="css/font-awesome.min.css">
	        <link rel="stylesheet" type="text/css" href="css/bu.css">
<!--            <link href="https://fonts.googleapis.com/css?family=Anton|Gugi|Josefin+Sans|Lora|Merriweather+Sans|Poppins" rel="stylesheet">-->
        </head>
        <style>
            .grtable{
                color: aliceblue;
                margin-top: 150px;
                margin-left: 35%;
            }
            .grtable table{
                border: 1px solid black;
                
            }
            .grtable table th{
               color: orange;
                
            }
            .grtable table td,.grtable table th{
                border: 1px solid white;
                padding: 10px;
            }
        
        </style>
        <body style="background: url(img/blackboard-chalk-chalkboard-40382.jpg) no-repeat center center;">
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
                    <a class="nav-link" href="AddCourse.php">New Course</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#view">View Students</a>
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
          
            <section class=" log sign">
                <div class="container-fluid">
                    
                    <h4>ADD Student Activity with<span>BU_Learn</span></h4>
                    <span>All fields are required</span>
                    <h6><?php if(isset($_GET['message'])){echo $_GET['message'];} ?></h6>
                    <form method="GET" action="backend.php">

                        <div class="form-group">
                            <label for="formGroupExampleInput">Student ID</label>
                            <input type="number" class="form-control" id="formGroupExampleInput" required name="sidgr">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Course Code</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" required name="ccodegr">
                          </div>
                          <div class="form-group">
                            <label for="formGroupExampleInput">Grade</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" required name="grade">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Attendance</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" required name="attend">
                        </div>
                     
                        <div class="form-group">
                            <button type="submit">Add</button>
                            
                          </div>
                    </form>
                </div>
            </section>
            
            <section class="grtable" id="view">
            
                <table>
                    <tr> 
                        <th>Student ID</th> 
                        <th>First Name</th>
                        <th>Last Name</th>
                        
                    </tr>
                    <?php
//                        if(isset($_POST['sidch'])){

                            while ($row = mysqli_fetch_array($result))
                            {
                               echo '<tr> 
                                        <td id="sid">'.$row['id'].'</td> 
                                        <td id="sfname">'.$row['fname'].'</td>
                                        <td id="slname">'.$row['lname'].' </td>
                                    </tr> ';

                            }
//                        }

                    ?>
                </table>
            </section>
            
            
            
            
            
            
            
            
            <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bu.js"></script> 
        </body>
</html>