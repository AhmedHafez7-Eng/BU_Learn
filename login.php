<!DOCTYPE html>
    <html>    
        <head>  
	        <meta charset="utf-8">
	        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	        <title>Log In</title>
	        <link rel="icon" href="img/titleIcon.png">  <!-- To make icon in title -->
            <link rel="stylesheet" href="css/all.css">
            <link rel="stylesheet" href="css/normalize.css">
            <link rel="stylesheet" type="text/css" href="css/bu.css">
            <style type="text/css">
                @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');

                *{
                    margin: 0;
                    padding: 0;
                    font-family: 'Poppins', sans-serif;
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box;
                    -o-box-sizing: border-box;
                    box-sizing: border-box;
                }
                header{
                    background: #111;
                    padding: 20px 100px;
                }
                .registerlinks{
                    display: none;
                }
                section{
                    margin-top: 40px;
                    position: relative;
                    min-height: 100vh;
                    background: #fee648;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    padding: 20px;
                }
                section .container{
                    position: relative;
                    width: 800px;
                    height: 500px;
                    background: #FFF;
                    box-shadow: 0 15px 50px rgba(0,0,0,0.1);
                    overflow: hidden;
                }
                section .container .user{
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    display: flex;
                }
                section .container .user .imgBx{
                    position: relative;
                    width: 50%;
                    height: 100%;
                    background: #ff0;
                    transition: .5s;
                }
                section .container .user .imgBx img{
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    position: absolute;
                    top: 0;
                    left: 0;

                }
                section .container .user .formBx{
                    position: relative;
                    width: 50%;
                    height: 100%;
                    background: #FFF;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    padding: 40px;
                    transition: .5s;
                }
                section .container .user .formBx form h2{
                    font-size: 18px;
                    font-weight: 600;
                    text-transform: uppercase;
                    letter-spacing: 2px;
                    text-align: center;
                    width: 100%;
                    margin-bottom: 10px;
                    color: #555;
                }
                section .container .user .formBx form input{
                    position: relative;
                    width: 100%;
                    padding: 10px;
                    background: #f5f5f5;
                    color: #333;
                    border: none;
                    outline: none;
                    box-shadow: none;
                    margin: 8px 0;
                    font-size: 14px;
                    letter-spacing: 1px;
                    font-weight: 300;
                }
                section .container .user .formBx form input[type="submit"]{
                    max-width: 100px;
                    background: #fe5000;
                    color: #FFF;
                    cursor: pointer;
                    font-size: 14px;
                    font-weight: 500;
                    letter-spacing: 1px;
                    transition: .5s;
                }
                section .container .user .formBx form input[type="submit"]:hover{
                    box-shadow: 0 0 5px #fe5000, 0 0 20px #fe5000;
                }
                section .container .user .formBx form .signup{
                    position: relative;
                    margin-top: 10px;
                    letter-spacing: 1px;
                    color: #555;
                    text-transform: uppercase;
                    font-weight: 300;
                    margin-bottom: 7px;
                }
                section .container .user .formBx form a{
                    text-decoration: none;
                    font-size: 14px;
                    font-weight: 600;
                    color: #677eff;
                }
                @media(max-width: 841px){

                    section .container .user .imgBx{
                        display: none;
                    }
                    section .container .user .formBx{
                        width: 100%;
                    }
                }
            </style>
        </head>    
        <body>

            <!--Start  Navbar-->
                <?php include 'header.php'; ?>
            <!--End Navbar-->
            <section>
                <div class="container">
                    <div class="user signinBx">
                        <div class="imgBx">
                            <img src="img/loginImg.jpg">
                        </div>
                        <div class="formBx">
                            <form action="backend.php" method="POST" autocomplete="off">
                                <h2>Sign In</h2>
                                <h6><?php if(isset($_GET['message'])){echo $_GET['message'];} ?></h6>
                                <input type="text" name="loemail" placeholder="Email" required>
                                <input type="password" name="lopass" placeholder="Password" required>
                                <input type="submit" value="Login">
                                <p class="signup">Don't have an account ?</p>
                                <a href="instrsignup.php">Sign Up as Instructor.</a>
                                <p class="signup">Or</p>
                                <a href="signup.php">Sign Up as Student.</a>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            
        <script src="js/all.js"></script>
        <script src="js/jquery-3.5.1.min.js"></script>
        <!-- <script src="js/bootstrap.min.js"></script> -->
        <script src="js/myscript.js"></script> 
        </body>
</html>
