<?php
session_start();
include('connection.php');
$course_id = $_GET['q'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Student Information Display</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/navbar_style.css">

        <style>
            #upload {padding-top: 70px;}      
        </style>

    </head>
    <body>
        <!-- Navbar -->
        <div class="w3-top">
            <div class="w3-bar w3-teal w3-card w3-left-align w3-large">
                <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
                <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-white">PTSIS</a>
                <div class='navbar-right'>
                    <a href="teacher_display.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Dashboard</a>
                    <a href="inbox_teacher.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Inbox</a>
                    <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Log Out</a>
                </div>
            </div>

            <!-- Navbar on small screens -->
            <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
                <a href="teacher_display.php" class="w3-bar-item w3-button w3-padding-large">Dashboard</a>
                <a href="inbox_teacher.php" class="w3-bar-item w3-button w3-padding-large">Inbox</a>
                <a href="logout.php" class="w3-bar-item w3-button w3-padding-large">Log Out</a>
            </div>
        </div>


        <div id="upload" class="w3-container">
            <div class="col-lg-6 w3-card">
                <header><h3 class="text-center">Upload Attendance</h3></header>
                <hr>
                <form class="w3-container" action="upload_attendance.php" method="post" enctype="multipart/form-data">
                    <label><b> Department:  </b> </label>
                    <select class = 'w3-select' name="department">
                        <option value="" disabled selected>Choose your option</option>
                        <?php
                        $sql = "select department_name,department_id from department";
                        $result = mysqli_query($con, $sql);
                        if (!$result) {
                            echo mysqli_error($con);
                            exit();
                        } else {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $row['department_id'] . "'>" . $row['department_name'] . "</option>";
                            }
                        }
                        ?>
                    </select><br><br>

                    <label><b> Semester:  </b> </label>
                    <select class = 'w3-select' name="semester">

                        <option value="" disabled selected>Choose your option</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">Four</option>
                        <option value="5">Five</option>
                        <option value="6">Six</option>
                        <option value="7">Seven</option>
                        <option value="8">Eight</option>
                    </select><br><br>

                    <label><b> Course:  </b> </label><br>
                    <input type="text" name="course" disabled class="w3-input"><br>
                    <label><b> Section:  </b> </label>
                    <select class = 'w3-select' name="section">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                    </select><br><br>                   
                    <label><b>Upload File: </b></label>
                    <input type="file" name="fileToUpload"></input><br>
                    <center><button type="submit" name="submit" class="w3-button w3-teal">Upload</button></center> <br><br>
                </form>
            </div>
            <div class="col-lg-6 w3-card">
                <header><h3 class="text-center">Upload Results</h3></header>
                <hr>
                <form class="w3-container" action="upload_result.php" method="post" enctype="multipart/form-data" >
                    <label><b> Department:  </b> </label>
                    <select class = 'w3-select' name="department" required>
                        <option value="" disabled selected>Choose your option</option>
                        <?php
                        $sql = "select department_name,department_id from department";
                        $result = mysqli_query($con, $sql);
                        if (!$result) {
                            echo mysqli_error($con);
                            exit();
                        } else {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $row['department_id'] . "'>" . $row['department_name'] . "</option>";
                            }
                        }
                        ?>
                    </select><br><br>

                    <label><b> Semester:  </b> </label>
                    <select class = 'w3-select' name="semester" required>
                        <option value="" disabled selected>Choose your option</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">Four</option>
                        <option value="5">Five</option>
                        <option value="6">Six</option>
                        <option value="7">Seven</option>
                        <option value="8">Eight</option>
                    </select><br><br>

                    <label><b> Course ID:  </b> </label><br/>
                    <input type="text" name="course" <?php echo"value='" . $course_id . "'"; ?> class="w3-input" />
                    <br><br>

                    <label><b> Exam Type:  </b> </label>
                    <select class = 'w3-select' name="exam_type" required>
                        <option value="" disabled selected>Choose your option</option>
                        <option value="MidsemI">Mid Semester I</option>
                        <option value="MidsemII">Mid Semester II</option>
                        <option value="Online Test I">Online Test I</option>
                        <option value="Online Test II">Online Test II</option>
                        <option value="Semester">Semester</option>                    
                    </select><br><br>

                    <label><b>Upload File: </b></label>
                    <input type="file" name="fileToUpload"></input>
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