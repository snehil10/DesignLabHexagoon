<?php
session_start();
include('connection.php');
if (isset($_COOKIE['user'])) {
    $x = explode('_', $_COOKIE['user']);
    echo $x[0];
    $_SESSION['username'] = $_COOKIE['user'];
    if ($x[0] == 'st')
        header('location:student_display.php');
    if ($x[0] == 't')
        header('location:teacher_display.php');
    if ($x[0] == 'pt')
        header('location:parent_display.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PTSIS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/navbar_style.css">

    </head>
    <body onload="afunction()">
        <!-- Navbar -->
        <div class="w3-top">
            <div class="w3-bar w3-teal w3-card w3-left-align w3-large">
                <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
                <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-white">PTSIS</a>
                <div class='navbar-right'>
                    <a href="#about" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About</a>
                    <a href="#login_modal" onclick="document.getElementById('login_modal').style.display = 'block'" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Log In</a>
                    <a href="#admin_modal" onclick="document.getElementById('admin_modal').style.display = 'block'" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Admin Corner</a>
                </div>
            </div>

            <!-- Navbar on small screens -->
            <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
                <a href="#about" class="w3-bar-item w3-button w3-padding-large">About</a>
                <a href="#login_modal" onclick="document.getElementById('login_modal').style.display = 'block'" class="w3-bar-item w3-button w3-padding-large">Log In</a>
                <a href="#admin_modal" onclick="document.getElementById('admin_modal').style.display = 'block'" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Admin Corner</a>
            </div>
        </div>

        <!-- Header -->
        <div id='headerMain'>
            <header id="main_page_header" class="w3-container w3-teal w3-center" style="padding:128px 16px">
                <h1 class="w3-margin w3-jumbo">Welcome!</h1>
                <p class="w3-xlarge">Let's get started.</p>
                <button class="w3-button w3-teal w3-padding-large w3-large w3-margin-top" 
                        onclick="document.getElementById('login_modal').style.display = 'block'" >Get Started</button>
            </header>
        </div>

        <!-- User Login Modal -->
        <div id="login_modal" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
                <div class="w3-center"><br>
                    <span onclick="document.getElementById('login_modal').style.display = 'none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">x</span>
                    <img src="img_avatar.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
                </div>

                <form class="w3-container" action="login_backend.php" method="post">
                    <div class="w3-section">
                        <label><b> I'm a: </b> </label>
                        <select class = 'w3-select' name="option">
                            <option value="" disabled selected>Choose your option</option>
                            <option value="teacher">Teacher</option>
                            <option value="student">Student</option>
                            <option value="parents">Parent</option>
                        </select>

                        <br><br><label><b>Username</b></label>
                        <input class="w3-input w3-margin-bottom" type="text" placeholder="Enter Username" name="username" required>
                        <label><b>Password</b></label>
                        <input class="w3-input " type="password" placeholder="Enter Password" name="psw" required>
                        <input class="w3-check w3-margin-top" type="checkbox" name="remmember" checked="checked"> Remember me
                        <button id = 'login' class="w3-button w3-block w3-teal w3-section w3-padding" name="submit" type="submit">Login</button>
                    </div>
                </form>

                <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                    <button id = 'cancel' onclick="document.getElementById('login_modal').style.display = 'none'" type="button" class="w3-button w3-red">Cancel</button>
                    <span class="w3-right w3-padding w3-hide-small"><a href="forgotpassword.php">Forgot password?</a></span>
                </div>
            </div>
        </div>

        <!-- Admin Modal -->
        <div id="admin_modal" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
                <div class="w3-center"><br>
                    <span onclick="document.getElementById('admin_modal').style.display = 'none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">x</span>
                    <img src="img_avatar.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
                </div>

                <form class="w3-container" action="admin_login_bckend.php" method="post">
                    <div class="w3-section">
                        <label><b>Username</b></label>
                        <input class="w3-input w3-margin-bottom" type="text" placeholder="Enter Username" name="username" required>
                        <label><b>Password</b></label>
                        <input class="w3-input " type="password" placeholder="Enter Password" name="psw" required>
                        <input class="w3-check w3-margin-top" type="checkbox" name="remmember" checked="checked"> Remember me
                        <button id = 'admin_login' class="w3-button w3-block w3-teal w3-section w3-padding" name="submit" type="submit">Login</button>
                    </div>
                </form>

                <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                    <button id = 'cancel' onclick="document.getElementById('admin_modal').style.display = 'none'" type="button" class="w3-button w3-red">Cancel</button>
                    <span class="w3-right w3-padding w3-hide-small"><a href="forgotpassword.php">Forgot password?</a></span>
                </div>
            </div>
        </div>

        <!-- First Grid -->
        <div class="w3-row-padding w3-padding-64 w3-container" id="about">
            <div class="w3-content">
                <div class="w3-twothird">
                    <h1>Talk to Teachers Directly</h1>
                    <h5 class="w3-padding-32">We know how difficult it is to know about your child's performance in college. Therefore we bring you a website to do so. Now you can 
                        talk to your child's teachers while comfortably resting on your ikea.</h5>
                    <hr>
                    <p class="w3-text-grey">Don't let the distance between you and your child hamper your concern for their studies.
                        Keep close eyes on the performance of your child. All you have to do is log in to the system using the username and password
                        provided, and you are good to go.</p>
                </div>

                <div class="w3-third w3-center">
                    <i class="far fa-comments w3-padding-64 w3-text-teal fa-10x"></i>
                </div>
            </div>
        </div>

        <!-- Second Grid -->
        <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
            <div class="w3-content">
                <div class="w3-third w3-center">
                    <i class="fas fa-file-alt w3-padding-64 w3-text-teal w3-margin-right fa-10x"></i>
                </div>

                <div class="w3-twothird">
                    <h1>View Results</h1>
                    <h5 class="w3-padding-32">Did you know that your child gives up to 25 exams per semester on an average? Do you get all the results at once?
                        Or do you never get any?</h5>

                    <p class="w3-text-grey">Now get all the updates of your child's exam performance in one place. You can see all the exam results of your 
                        child. You also get an update of their attendance in college, and know whether they really spend most of their time studying. All you have to do is log in to the website and view them.</p>
                </div>
            </div>
        </div>




        <!-- Footer -->
        <footer class="w3-container w3-padding-32 w3-center w3-grey w3-text-white">  
            <center>
                <div class="w3-padding-32" style="max-width: 900px;">
                    <div class="row"><p>Project Manager - Sudhanshu Singh<p></div>
                    <div class="row">
                        <p class="col-sm-4">Lead Developer - Snehil Santhalia</p>
                        <p class="col-sm-4">Developer I - Shubham Saurav</p>
                        <p class="col-sm-4">Developer II - Shubham Gupta</p>
                    </div>
                    <div class="row">
                        <p class="col-sm-6">Quality Assuarance Manager - Shubham Kumar</p>
                        <p class="col-sm-6">Quality Assuarance Engineer - Subham Sah</p>
                    </div>
                </div>
            </center>
        </footer>

        <script>
            // Used to toggle the menu on small screens when clicking on the menu button
            function myFunction() {
                var x = document.getElementById("navDemo");
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                } else {
                    x.className = x.className.replace(" w3-show", "");
                }
            }
            function afunction() {
<?php
if (isset($_SESSION['loginstatus'])) {
    if ($_SESSION['loginstatus'] == 1) {
        print "alert('Login unsuccessful Please check credentials!');";
        session_destroy();
    }
    if ($_SESSION['loginstatus'] == 0) {
        print "alert('Please select login type');";
        session_destroy();
    }
}
?>
            }
        </script>

    </body>
</html>
