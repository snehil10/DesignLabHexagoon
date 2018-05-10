<?php
session_start();
include('connection.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Inbox</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/navbar_style.css">
        <link rel="stylesheet" type="text/css" href="css/inbox_style.css">
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

        <div class="jumbotron">
            <div id="contacts" class="col-sm-4 w3-card">
                <header class="w3-teal w3-container">
                    <h2><center>Select Chat</center></h2>
                </header>
                <div>
                    <hr>
                    <table class="w3-table w3-bordered w3-centered w3-hoverable">
						<?php
							$sql="select distinct st.username,st.name from student as st join message as m on m.sender_id =st.username or m.receiver_id=st.username where m.message_type='chat' and m.sender_id='".$_SESSION['username']."' or m.receiver_id='".$_SESSION['username']."' order by m.status desc";
							$result=mysqli_query($con,$sql);
							if(!$result)
							{
								echo mysqli_error($con);
								exit();
							}
							else
							{
								while($row=mysqli_fetch_assoc($result))
								{
									echo "
                        <tr><td id='".$row['username']."' onclick='inbox(this.id)'>".$row['name']."</td></tr>";
								}
							}
						?>
						<?php
							$sql="select distinct st.username,st.name from parents as st join message as m on m.sender_id =st.username or m.receiver_id=st.username where m.message_type='chat' and m.sender_id='".$_SESSION['username']."' or m.receiver_id='".$_SESSION['username']."' order by m.status desc";
							$result=mysqli_query($con,$sql);
							if(!$result)
							{
								echo mysqli_error($con);
								exit();
							}
							else
							{
								while($row=mysqli_fetch_assoc($result))
								{
									echo "
                        <tr><td id='".$row['username']."' onclick='inbox(this.id)'>".$row['name']."</td></tr>";
								}
							}
						?>
                    </table>
                </div>
            </div>

            <div class="col-sm-8 w3-card">
                <header class="w3-light-grey w3-container">
                    
                </header>
                <div id='messages'>
                    <?php
					error_reporting(E_ALL & ~E_NOTICE);
						if(isset($_GET['q']))
						{
							$student_id=$_GET['q'];
							$sql="select * from message where sender_id in ('".$_SESSION['username']."','".$student_id."') and receiver_id in ('".$_SESSION['username']."','".$student_id."') and message_type='chat'";
							$result=mysqli_query($con,$sql);
							if(!$result)
							{
								echo mysqli_error($con);
								exit();
							}
							else{
								if(mysqli_num_rows($result)>0)
								{
									echo "<h2>INBOX</h2>";
									while($row=mysqli_fetch_assoc($result))
									{
										
										echo "<div class='container'>";
										  if($row['sender_id']!=$_SESSION['username'])
										  {
											echo "<div class='container_left'>
								
													<p class='time-left'>".$row['message_content']."</p>
											</div>
											</div>";
										  }
										  else{
											  echo "<div class='container_right'>
								
													<p class='time-right'>".$row['message_content']."</p>
											</div>
											</div>";
										  }
									}
								}
								else{
									echo "No messages found!";
								}
							}
						}
					?>
                </div>

                <footer class="w3-container">
                    <br>
                    <div class="col-sm-10">
                        <textarea rows="3" cols="110" placeholder="Write Message here" id="message"></textarea>
                    </div>
                    <div class="col-sm-2">
                        <button <?php echo "id='".$student_id."'"; ?> onclick="send(this.id)" class='w3-button w3-teal' style="border-radius: 0; float:right"><span style="font-size: 30px"class="glyphicon glyphicon-send glyphicon-lg"></span></button>
                    </div>
                </footer>
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
            function send(id) {
				var q=id;
                var element = document.getElementById("message");
                var message = element.value;
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        if (this.responseText != -1)
                        {
                            alert(this.responsetext);
                        } else {
                            var div = document.createElement("div");
                            var theDiv = document.getElementById("messages");
                            div.innerHTML = "<div class='container'><div class='container_right'><p class='time-right'>" + message + "</p></div></div>";
                            theDiv.appendChild(div);
                            theDiv.scrollTop = theDiv.scrollHeight;
                        }
                    }
                };
                xmlhttp.open("GET", "message_backend.php?q=" + message+"&r="+q, true);
                xmlhttp.send();


            }
			function inbox(id){
				var q=id;
				var t=document.getElementById(q).innerHTML;
				window.location.href="inbox_teacher.php?q="+q;
				
			}
        </script>

    </body>
</html>