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