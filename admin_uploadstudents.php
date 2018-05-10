<!DOCTYPE html>
<html>
    <head>
        <title>Student Information Display</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/navbar_style.css">
        <style>
            #upload {padding-top: 70px;}
            .w3-card {height: 95%;}
        </style>
    </head>
    <body>
        <!-- Navbar -->
        <div class="w3-top">
            <div class="w3-bar w3-teal w3-card w3-left-align w3-large">
                <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
                <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-white">PTSIS</a>
                <div class='navbar-right'>
                    <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Log Out</a>
                </div>
            </div>

            <!-- Navbar on small screens -->
            <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
                <a href="logout.php" class="w3-bar-item w3-button w3-padding-large">Log Out</a>
            </div>
        </div>


        <div id="upload" class="w3-container">
            <div class="col-lg-4 w3-card">
                <header><h3 class="text-center">Upload Student Details</h3></header>
                <hr><br>
                <form class="w3-container" action="upload_students_backend.php" method="post" enctype="multipart/form-data">
                    <label> Department  </label><br>
                    <select class = 'w3-select' name="option" required>
                        <option value="" disabled selected>Choose your option</option>
                        <?php
                        session_start();
                        include('connection.php');
                        $sql = "select department_name from department";
                        $result = mysqli_query($con, $sql);
                        if (!$result) {
                            echo mysqli_error($con);
                        } else {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $department_name = $row['department_name'];
                                print " <option value='$department_name'>$department_name</option> ";
                            }
                        }
                        ?>
                    </select><br><br><br>


                    <br>
                    <label><b>Upload File: </b></label><br>
                    <input type="file" name="fileToUpload"></input><br>
                    <center><button type="submit" class="w3-button w3-teal">Upload</button></center> <br><br>
                    <br>
                </form>
            </div>

            <div class="col-lg-4 w3-card">
                <header><h3 class="text-center">Upload Teacher Details</h3></header>
                <hr>
                <br>
                <form class="w3-container" action="upload_teacher_backend.php" method="post">
                    <label>Teacher Name  </label><br>
                    <input class="w3-input w3-margin-bottom" type="text" placeholder="Enter Name" name="name" required>
                    <br>
                    <label>Teacher ID  </label><br>
                    <input class="w3-input w3-margin-bottom" type="text" placeholder="Enter Name" name="username" required>
                    <br>
                    <label>Password  </label><br>
                    <input class="w3-input w3-margin-bottom" type="text" placeholder="Enter Name" name="password" required>
                    <br>
                    <label>Email ID  </label><br>
                    <input class="w3-input w3-margin-bottom" type="text" placeholder="Enter Name" name="email_id" required>
                    <br>
                    <label>Mobile No.</label><br>
                    <input class="w3-input w3-margin-bottom" type="text" placeholder="Enter mobile no." name="phone_number" required>
                    <br><center><button type="submit" class="w3-button w3-teal" name="submit" >Upload</button></center> <br><br>
                </form>
            </div>

            <div class="col-lg-4 w3-card">
                <header><h3 class="text-center">Upload Course</h3></header>
                <hr><br>
                <form class="w3-container" action="upload_course_backend.php" method="post">
                    <label>Course No. :  </label><br>
                    <input class="w3-input w3-margin-bottom" type="text" placeholder="Enter Course Number" name="course_id" required>
                    <br>
                    <label>Course Name :</label><br>
                    <input class="w3-input w3-margin-bottom" type="text" placeholder="Enter Course Name" name="course_name" required>
                    <br>
                    <label>Teacher Id :</label><br>
                    <input class="w3-input w3-margin-bottom" type="text" placeholder="Enter Teacher Name" name="teacher_id" required>
                    <br>
                    <label> Department   </label><br>
                    <select class = 'w3-select' name="department" required>
                        <option value="" disabled selected>Choose your option</option>
                        <?php
                        $sql = "select department_id from department";
                        $result = mysqli_query($con, $sql);
                        if (!$result) {
                            echo mysqli_error($con);
                        } else {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $department_name = $row['department_id'];
                                print " <option value='$department_name'>$department_name</option> ";
                            }
                        }
                        ?>
                    </select><br><br><br>
                    <label>Semester :</label><br>
                    <input class="w3-input w3-margin-bottom" type="text" placeholder="Enter Semester" name="semester" required>
                    <br><center><button type="submit" class="w3-button w3-teal" name="submit">Upload</button></center> <br><br>
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