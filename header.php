<!-- Start NavBar -->
    <header>
      <a href="bu.php" class="logo">BU Learn</a>
      <div class="toggle" onclick="togglemenu();"></div>
      <ul class="menu">
        <li class="activeColor"><a href="bu.php" onclick="togglemenu();">Home</a></li>
        <li><a href="bu.php #about" onclick="togglemenu();">About</a></li>
        <li><a href="bu.php #sponsers" onclick="togglemenu();">Sponsers</a></li>
        <li><a href="bu.php #requestDemo" onclick="togglemenu();">Request a Demo</a></li>

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

                echo '<li class="registerlinks"><a href="login.php" onclick="togglemenu();">Log In</a></li>
                      <li class="registerlinks">
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
