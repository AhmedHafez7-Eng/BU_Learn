<?php
session_start();
//checkgrade

$result;
if(isset($_POST['sidch'])){
    $connection = mysqli_connect('localhost','root','','bulearn');
    mysqli_set_charset($connection,'utf8');
    $sid=$_POST['sidch'];
    $cocode=$_POST['ccodech'];

    $query = "SELECT * FROM student_course where sid ='$sid' and ccode='$cocode'";
    $result = mysqli_query ($connection , $query);
}

?>
<!DOCTYPE html>
    <html>    
        <head>  
	        <meta charset="utf-8">
	        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	        <title>Check Grade and Attendance</title>
	        <link rel="stylesheet" href="css/bootstrap.css">
	        <link rel="stylesheet" href="css/font-awesome.min.css">
	        <link rel="stylesheet" type="text/css" href="css/bu.css">
<!--            <link href="https://fonts.googleapis.com/css?family=Anton|Gugi|Josefin+Sans|Lora|Merriweather+Sans|Poppins" rel="stylesheet">-->
        </head>
        <style>
            .grtable{
                color: aliceblue;
                margin-top: 130px;
                margin-left: 30%;
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
              <?php include 'header.php'; ?>
      
                            <!--End Navbar-->
            
            
            <section class=" log sign">
                <div class="container-fluid">
                    <h4>Check Your  Activity in any Course with<span>BU_Learn</span></h4>
                    <span>All fields are required</span>
<!--                    <h6>--><?php //if(isset($_POST['message'])){echo $_GET['message'];} ?><!--</h6>-->
                    <form method="POST" action="checkgrade.php">

                        <div class="form-group">
                            <label for="formGroupExampleInput">Student ID</label>
                            <input type="number" class="form-control" id="formGroupExampleInput" required name="sidch">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Course Code</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" required name="ccodech">
                          </div>
                     
                        <div class="form-group">
                            <button type="submit">Check</button>
                          </div>
                    </form>
                </div>
            </section>
            
            <section class="grtable">
            
                <table>
                    <tr> 
                        <th>Student ID</th> 
                        <th>Course Code</th>
                        <th>Grade</th>
                        <th>Attendance</th>
                    </tr>
                    <?php
                        if(isset($_POST['sidch'])){

                            while ($row = mysqli_fetch_array($result))
                            {
                               echo '<tr> 
                                        <td id="sid">'.$row['sid'].'</td> 
                                        <td id="ccode">'.$row['ccode'].'</td>
                                        <td id="grade">'.$row['grade'].' %</td>
                                        <td id="attend">'.$row['absence'].'</td>
                                    </tr> ';

                            }
                        }

                    ?>

                    
                </table>


            
            
            </section>
            
            
            
            
            
            
            
            
            <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bu.js"></script> 
        </body>
</html>