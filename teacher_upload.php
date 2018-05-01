<!DOCTYPE html>
<html>
    <head>
        <title>Upload Results/Attendance</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="navbar_style.css">

        <style>
            #upload {padding-top: 70px;}      
        </style>

    </head>
    <body>
        <!-- Navbar -->
        <div class="w3-top">
            <div class="w3-bar w3-teal w3-card w3-left-align w3-large">
                <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
                <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">PTSIS</a>
                <div class='navbar-right'>
                    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">View Results</a>
                    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Inbox</a>
                    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Contact Teacher</a>
                    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Log Out</a>
                </div>
            </div>

            <!-- Navbar on small screens -->
            <div id="navDemo" class="w3-bar-block w3-teal w3-hide w3-hide-large w3-hide-medium w3-large">
                <a href="#" class="w3-bar-item w3-button w3-padding-large">About</a>
                <a href="#" class="w3-bar-item w3-button w3-padding-large">Log In</a>
                <a href="#" class="w3-bar-item w3-button w3-padding-large">Contact Us</a>
                <a href="#" class="w3-bar-item w3-button w3-padding-large">Admin Corner</a>
            </div>
        </div>


        <div id="upload" class="w3-container">
            <div class="col-lg-6 w3-card">
                <header><h3 class="text-center">Upload Attendance</h3></header>
                <hr>
                <form class="w3-container" action="" method="">
                    <label><b> Department:  </b> </label>
                    <select class = 'w3-select' name="option">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="teacher">Teacher</option>
                        <option value="student">Student</option>
                        <option value="parents">Parent</option>
                    </select><br><br>

                    <label><b> Semester:  </b> </label>
                    <select class = 'w3-select' name="option">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="teacher">Teacher</option>
                        <option value="student">Student</option>
                        <option value="parents">Parent</option>
                    </select><br><br>

                    <label><b> Course:  </b> </label>
                    <select class = 'w3-select' name="option">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="teacher">Teacher</option>
                        <option value="student">Student</option>
                        <option value="parents">Parent</option>
                    </select><br><br>

                    <label><b> Section:  </b> </label>
                    <select class = 'w3-select' name="option">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="teacher">Teacher</option>
                        <option value="student">Student</option>
                        <option value="parents">Parent</option>
                    </select><br><br>

                    <div>
                        <div class="col-sm-6">
                            <label>Start Date:</label> <input type="date" class="w3-input">
                        </div>
                        <div class="col-sm-6">
                            <label>End Date:</label> <input type="date" class="w3-input"><br>
                        </div>
                    </div>

                    <label><b>Upload File: </b></label>
                    <input type="file"></input>
                    <center><button type="submit" class="w3-button w3-teal">Upload</button></center> <br><br>
                </form>
            </div>
            <div class="col-lg-6 w3-card">
                <header><h3 class="text-center">Upload Results</h3></header>
                <hr>
                <form class="w3-container" action="" method="">
                    <label><b> Department:  </b> </label>
                    <select class = 'w3-select' name="option">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="teacher">Teacher</option>
                        <option value="student">Student</option>
                        <option value="parents">Parent</option>
                    </select><br><br>

                    <label><b> Semester:  </b> </label>
                    <select class = 'w3-select' name="option">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="teacher">Teacher</option>
                        <option value="student">Student</option>
                        <option value="parents">Parent</option>
                    </select><br><br>

                    <label><b> Course:  </b> </label>
                    <select class = 'w3-select' name="option">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="teacher">Teacher</option>
                        <option value="student">Student</option>
                        <option value="parents">Parent</option>
                    </select><br><br>

                    <label><b> Exam Type:  </b> </label>
                    <select class = 'w3-select' name="option">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="teacher">Teacher</option>
                        <option value="student">Student</option>
                        <option value="parents">Parent</option>
                    </select><br><br>

                    <label><b> Section:  </b> </label>
                    <select class = 'w3-select' name="option">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="teacher">Teacher</option>
                        <option value="student">Student</option>
                        <option value="parents">Parent</option>
                    </select><br><br>

                    <label><b>Upload File: </b></label>
                    <input type="file"></input>
                    <center><button type="submit" class="w3-button w3-teal">Upload</button></center> <br><br>
                </form>
            </div>
        </div>




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
        </script>
    </body>
</html>