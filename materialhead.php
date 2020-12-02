<link rel="stylesheet" type="text/css" href="css/bu.css">
<style type="text/css">
    header{
        background-color: #111;
        color: #FFF;
        padding-top: 20px;
        padding-bottom: 20px;
    }
    header.sticky{
        background-color: #FFF;
        color: #111;
    }
</style>
<!-- Start NavBar -->
    <header>
      <a href="#" class="logo">BU Learn</a>
      <div class="toggle" onclick="togglemenu();"></div>
      <ul class="menu">
        <li class="activeColor"><a href="bu.php" onclick="togglemenu();">Home</a></li>
        <li><a href="#about" onclick="togglemenu();">About</a></li>
        <li><a href="#sponsers" onclick="togglemenu();">Sponsers</a></li>
        <li><a href="#requestDemo" onclick="togglemenu();">Request a Demo</a></li>

        <?php if(isset($_SESSION['username'])){
                echo '<li>
                        <div class="dropdown">
                          <button class="dropbtn">'.$_SESSION['username'].'
                            <i class="fa fa-caret-down"></i>
                          </button>
                          <div class="dropdown-content">
                            <a href="logout.php">Logout</a>
                          </div>
                        </div>
                      </li>';
              }else{

                echo '<li><a href="login.php" onclick="togglemenu();">Log In</a></li>
                      <li>
                            <div class="dropdown">
                              <button class="dropbtn">Sign Up
                                <i class="fa fa-caret-down"></i>
                              </button>
                              <div class="dropdown-content">
                                <a href="instrsignup.php">Instructor</a>
                                <a href="signup.php">Student</a>
                              </div>
                            </div>
                      </li>';
              }
        ?>
      </ul>
    </header>

  <!-- End NavBar -->
