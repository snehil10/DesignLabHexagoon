<?php
session_start();
include('connection.php');
$sql = "select * from teacher where username='" . $_SESSION['username'] . "'";
$res = mysqli_query($con, $sql);
if (!$res) {
    echo "Could not successfully run query ($sql) from DB: " . mysqli_error($con);
    exit;
} else {
    $row = mysqli_fetch_assoc($res);
    $teacher_id = $row['username'];
    $name = $row['name'];
    $email = $row['email_id'];
    $ph_no = $row['mobile_number'];
}
?>
<!DOCTYPE html>
<html>
    <title>Teacher Information Display</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style_display.css">
    <link rel="stylesheet" type="text/css" href="css/navbar_style.css">
          
    <body id = 'student_info' class="w3-light-grey">

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

        <!-- Page Container -->
        <div class="w3-content w3-margin-top" style="max-width:1400px; padding-top: 70px">

            <!-- The Grid -->
            <div class="w3-row-padding">

                <!-- Left Column -->
                <div class="w3-third" style='position: fixed; height: 100%'>

                    <div class="w3-white w3-text-grey w3-card-4" style='width: 300px'>
                        <div class="w3-display-container">
                            <img src="img_avatar.png" style="width:100%;" alt="Avatar">
                        </div>

                        <div class="w3-container">
                            <p><h2><?php echo $name ?></h2></p>
                            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $email ?></p>
                            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $ph_no ?></p>
                            <a href="edit_teacher.php"><p><i class="fa fa-pencil-square-o fa-fw w3-margin-right w3-large w3-text-teal"></i>Edit Your Info</p></a>
                            <hr>
                        </div>
                    </div><br>

                    <!-- End Left Column -->
                </div>

                <!-- Right Column -->
                <div class="w3-twothird" style='margin-left: 350px;' >



                    <div class="w3-container w3-card w3-white w3-margin-bottom">
                        <h2 class="w3-text-grey w3-padding-16">
                            <i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Teacher Info</h2>
                        <div id='info' class="w3-container w3-center">
                            <table class="w3-table w3-bordered">
                                <tr>
                                    <td>Name</td>
                                    <td><?php echo $name ?></td>
                                </tr>
                                <tr>
                                    <td>Teacher ID</td>
                                    <td><?php echo $teacher_id ?></td>
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
                                    <th>Course Name</th>                            
                                    <th>Upload</th>
                                    <th>View Students</th>

                                </tr>
                                <?php
                                $sql2 = "select course_id,course_name from courses where teacher_id='" . $_SESSION['username'] . "'";
                                $result2 = mysqli_query($con, $sql2);
                                if (!$result2) {
                                    echo mysqli_error($con);
                                    exit();
                                } else {
                                    while ($row = mysqli_fetch_assoc($result2)) {
                                        echo "<tr>
									<td>" . $row['course_id'] . "</td>
									<td>" . $row['course_name'] . "</td>                            
									<td><button class='w3-button w3-teal' id='" . $row['course_id'] . "' onclick=upload(this.id)>Upload Results/Attendance</button></td>  
									<td><button class='w3-button w3-teal' id='" . $row['course_id'] . "' onclick=students(this.id)>View Students</button></td>  
									
									</tr>";
                                    }
                                }
                                ?>
                            </table>
                        </div><br>
                    </div>
                    <div class="w3-container w3-card w3-white">
                        <h2 class="w3-text-grey w3-padding-16">
                            <i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Evaluation</h2>
                        <div class="w3-container">
                            <table class="w3-table w3-bordered" style="padding-bottom: 80px">
                                <tr> <td>View Evaluation From Students</td>
                                <td><button class='w3-button w3-teal' onclick="eval()">View Evaluation</button></td></tr>
                                <!-- <tr> <td>Write Message to Students</td>
                                <td><button class='w3-button w3-teal'>Write Messages</button></td></tr> -->
                            </table>
                            <br>
                        </div>
                    </div>

                    <!-- End Right Column -->
                </div>

                <!-- End Grid -->
            </div>

            <!-- End Page Container -->
        </div>

        <footer class="w3-container w3-teal w3-center w3-margin-top">

        </footer>
        <script>
            function upload(id)
            {
                var q = id;
                window.location.href = "teacher_upload.php?q=" + q;
            }
            function eval()
            {
                window.location.href = "teacher_evaluation_results.php";
            }
			function students()
            {
                window.location.href = "view_students.php";
            }
        </script>
    </body>
</html>
