
<?php
session_start();
include('connection.php');
$sql = "select email_id,stream,enroll_id,section,ph_no,univ_roll,reg_id,name,semester,class_roll,address,year from student where username='" . $_SESSION['username'] . "'";
$res = mysqli_query($con, $sql);
if (!$res) {
    echo "Could not successfully run query ($sql) from DB: " . mysqli_error($con);
    exit;
} else {
    $row = mysqli_fetch_assoc($res);
    $name = $row['name'];
    $email = $row['email_id'];
    $univ_id = $row['univ_roll'];
    $section = $row['section'];
    $stream = $row['stream'];
    $enroll_id = $row['enroll_id'];
    $ph_no = $row['ph_no'];
    $reg_id = $row['reg_id'];
    $semester = $row['semester'];
    $class_roll = $row['class_roll'];
    $year = $row['year'];
    $address = $row['address'];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="style_display.css">
        <link rel="stylesheet" type="text/css" href="navbar_style.css">
    </head>
    <body id = 'student_info' class="w3-light-grey">

        <!-- Navbar -->
        <div class="w3-top">
            <div class="w3-bar w3-teal w3-card w3-left-align w3-large">
                <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
                <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">PTSIS</a>
                <div class='navbar-right'>
                    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">View Results</a>
                    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Inbox</a>
                    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Contact Teacher</a>
                    <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Log Out</a>
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

        <!-- Page Container -->
        <div class="w3-content w3-margin-top" style="max-width:1400px; padding-top: 70px">

            <!-- The Grid -->
            <div class="w3-row-padding">

                <!-- Left Column -->
                <div class="w3-third" style='position: fixed; height: 100%'>

                    <div class="w3-white w3-text-grey w3-card-4" style='width: 300px'>
                        <div class="w3-display-container">
                            <img src="SUBHAM2.jpg" style="width:100%;" alt="Avatar">
                        </div>

                        <div class="w3-container">
                            <p><h2><?php echo $name ?></h2></p>
                            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $email ?></p>
                            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $address ?></p>
                            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $ph_no ?></p>
                            <a href="edit_student.php"><p><i class="fa fa-pencil-square-o fa-fw w3-margin-right w3-large w3-text-teal"></i>Edit Your Info</p></a>
                            <hr>
                        </div>
                    </div><br>

                    <!-- End Left Column -->
                </div>

                <!-- Right Column -->
                <div class="w3-twothird" style='margin-left: 350px;' >



                    <div class="w3-container w3-card w3-white w3-margin-bottom">
                        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Student Info</h2>
                        <div id='info' class="w3-container w3-center">
                            <table class="w3-table w3-bordered">
                                <tr>
                                    <td>Name</td>
                                    <td><?php echo $name ?></td>
                                </tr>
                                <tr>
                                    <td>Stream</td>
                                    <td><?php echo $stream ?></td>
                                </tr>
                                <tr>
                                    <td>University Registration No.</td>
                                    <td><?php echo $reg_id ?></td>
                                </tr>
                                <tr>
                                    <td>University Roll No.</td>
                                    <td><?php echo $univ_id ?></td>
                                </tr>
                                <tr>
                                    <td>Year</td>
                                    <td><?php echo $year ?></td>
                                </tr>
                                <tr>
                                    <td>Semester</td>
                                    <td><?php echo $semester ?></td>
                                </tr>
                                <tr>
                                    <td>Section</td>
                                    <td><?php echo $section ?></td>
                                </tr>
                                <tr>
                                    <td>Class Roll No.</td>
                                    <td><?php echo $class_roll ?></td>
                                </tr>
                                <tr>
                                    <td>Mobile No.</td>
                                    <td><?php echo $ph_no ?></td>
                                </tr>
                            </table>

                        </div>
                        <br>
                    </div>

                    <div class="w3-container w3-card w3-white w3-margin-bottom">
                        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Courses</h2>
                        <div id='course' class="w3-container">
                            <table class="w3-table w3-bordered">
                                <tr>
                                    <th>Course Id</th>
                                    <th>Couse Name</th>
                                    <th>Teachers</th>
                                    <th>Teacher Evaluation</th>
                                    <th>Contact</th>
                                </tr>
                                <?php
                                $sql2 = "select t.username,t.name,c.course_name,c.course_id from student s join courses c on s.semester=c.semester and c.department_id=s.stream join teacher t on c.teacher_id=t.username where s.username='" . $_SESSION['username'] . "'";
                                $result2 = mysqli_query($con, $sql2);
                                if (!$result2) {
                                    echo mysqli_error($con);
                                    exit();
                                } else {
                                    while ($row = mysqli_fetch_assoc($result2)) {
                                        echo "<tr>
										<td>" . $row['course_id'] . "</td>
										<td>" . $row['course_name'] . "</td>
										<td>" . $row['name'] . "</td>
										<td><button class='w3-button w3-teal' id='" . $row['username'] . "' onclick='eval(this.id)'>Evaluate</button></td>
										<td><button class='w3-button w3-teal' id='" . $row['username'] . "' onclick='inbox(this.id)'>Message</button></td>
										</tr>";
                                    }
                                }
                                ?>
                            </table>
                        </div><br>
                    </div>
                    <div class="w3-container w3-card w3-white">
                        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Activities</h2>
                        <div class="w3-container">
                            <table><tr>
                                <td style="padding-right: 100px;"><button class='w3-button w3-teal'>View Examination Results</button></td>
                                <td style="padding-left: 100px;"><button class='w3-button w3-teal'>Online Polls</button></td>
                            </table>
                            <hr>
                        </div>
                    </div>

                    <!-- End Right Column -->
                </div>

                <!-- End Grid -->
            </div>

            <!-- End Page Container -->
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
            function inbox(id) {
                var q = id;
                window.location.href = "inbox.php?q=" + q;
            }
            function eval(id) {
                var q = id;
                window.location.href = "teacher_evaluation.php?q=" + q;
            }
        </script>
    </body>
</html>
