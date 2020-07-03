<?php 

//student sign up and go to access code
session_start();

if(isset($_GET['sfname'])){
    
$connection = mysqli_connect('localhost','root','','bulearn');
mysqli_set_charset($connection,'utf8'); 
    
    
    $fname=$_GET['sfname'];
    $lname=$_GET['slname'];
    $email=$_GET['semail'];
    $pass= $_GET['spassword'];
    $birth=$_GET['sbirth'];
$query = "INSERT INTO student(fname,lname,email,password,birth) VALUES('$fname','$lname','$email','$pass','$birth')";
$data = mysqli_query($connection , $query);

header("location:accesscode.php");
}

//verifying access code

if(isset($_GET['acccode'])){
    
$connection = mysqli_connect('localhost','root','','bulearn');
mysqli_set_charset($connection,'utf8'); 
$accecode=$_GET['acccode'];

$query = "SELECT * FROM course where ccode ='$accecode'";
$result = mysqli_query ($connection , $query);

while ($row = mysqli_fetch_array($result))
{
   echo $row['cname'];
  if($row['cname'] == 'Artficial Intelligence'){
      header("location:Ai.php");
      die('exit');
  }
    else if($row['cname'] == 'System Analysis'){
      header("location:sys.php");
      die('exit');
    }
    else if($row['cname'] == 'Data Base'){
      header("location:Database.php");
      die('exit');
    }
    else if($row['cname'] == 'Computer Graphics'){
      header("location:Computer Graphics.php");
      die('exit');
    }
}
  header("location:accesscode.php?message=course not found");
}

//instructor sign up and go to addCourse page

if(isset($_GET['ifname'])){
    
$connection = mysqli_connect('localhost','root','','bulearn');
mysqli_set_charset($connection,'utf8'); 
    $iid=$_GET['iid'];
    $ifname=$_GET['ifname'];
    $ilname=$_GET['ilname'];
    $iemail=$_GET['iemail'];
    $ipass= $_GET['ipassword'];
    $icity=$_GET['icity'];
    $icountry=$_GET['icountry'];
    $ibirth=$_GET['ibirth'];
    $izipcode=$_GET['izipcode'];
$query = "INSERT INTO instructor(iid,fname,lname,email,password,birth,city,country,zipcode) VALUES($iid,'$ifname','$ilname','$iemail','$ipass','$ibirth','$icity','$icountry','$izipcode')";
$data = mysqli_query($connection , $query);

header("location:choose.php");
}

// Add Course 

if(isset($_GET['cname'])){
    
$connection = mysqli_connect('localhost','root','','bulearn');
mysqli_set_charset($connection,'utf8'); 
    $ccode=$_GET['ccode'];
    $cname=$_GET['cname'];
    $clevel=$_GET['clevel'];
    $carea= $_GET['carea'];
    $inid= $_GET['inid'];
    $query = "INSERT INTO course(ccode,cname,clevel,carea,issn) 
    VALUES('$ccode','$cname','$clevel','$carea','$inid')";
    $data = mysqli_query($connection , $query);

header("location:bu.php");
}


//login

if(isset($_POST['loemail'])){

    $connection = mysqli_connect('localhost','root','','bulearn');
    mysqli_set_charset($connection,'utf8');
    $emal=$_POST['loemail'];
    $pass=$_POST['lopass'];
    $query = "SELECT * FROM student where email ='$emal' and password='$pass'";
    $result = mysqli_query ($connection , $query);

    while ($row = mysqli_fetch_array($result))
    {
            $_SESSION['username']=$row['fname'].' '.$row['lname'];
            header("location:accesscode.php");
            die('exit');
    }

    $connection = mysqli_connect('localhost','root','','bulearn');
    mysqli_set_charset($connection,'utf8');

    $query = "SELECT * FROM instructor where email ='$emal' and password='$pass'";
    $result = mysqli_query ($connection , $query);

    while ($row = mysqli_fetch_array($result))
    {
        $_SESSION['username']=$row['fname'].' '.$row['lname'];
        header("location:choose.php");
        die('exit');
    }

    header("location:login.php?message=email or password invalid");
}

// Add Grade 

if(isset($_GET['ccodegr'])){
    
$connection = mysqli_connect('localhost','root','','bulearn');
mysqli_set_charset($connection,'utf8'); 
    $sidgr=$_GET['sidgr'];
    $ccodegr=$_GET['ccodegr'];
    $grade=$_GET['grade'];
    $attend= $_GET['attend'];
    $query = "INSERT INTO student_course(sid,ccode,grade,absence) 
    VALUES('$sidgr','$ccodegr','$grade','$attend')";
    $data = mysqli_query($connection , $query);

header("location:AddGrades.php?message=Grades Added Successfully");
}

//check grade
    









?>