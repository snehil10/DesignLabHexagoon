<!DOCTYPE html>
<html>
    <head>
        <title>Send Message</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="navbar_style.css">
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

    <center>
        <div class="w3-container w3-center" style="padding-top: 100px; max-width:700px">
            <div class="w3-container w3-card w3-text-teal" >
                <h3>Send Message</h3><br>
                <form class='w3-container'>
                    <div class="w3-section">
                        <label style="font-size: 18px"><b> Course Number </b> </label>
                        <select class = 'w3-select' name="option">
                            <option value="" disabled selected>Choose your option</option>
                            <option value="teacher">Teacher</option>
                            <option value="student">Student</option>
                            <option value="parents">Parent</option>
                        </select>
                        <br><br>

                        <label style="font-size: 18px"><b>Course Teacher</b></label>
                        <select class = 'w3-select' name="option">
                            <option value="" disabled selected>Choose your option</option>
                            <option value="teacher">Teacher</option>
                            <option value="student">Student</option>
                            <option value="parents">Parent</option>
                        </select>
                        <br><br>

                        <label style="font-size: 18px"><b>Message Type</b></label>
                        <select class = 'w3-select' name="option">
                            <option value="" disabled selected>Choose your option</option>
                            <option value="teacher">Teacher</option>
                            <option value="student">Student</option>
                            <option value="parents">Parent</option>
                        </select>
                        <br><br>

                        <label style="font-size: 18px"><b>Message</b></label>
                        <textarea class="w3-input" rows="5" cols="40" placeholder="Write your message here."></textarea>
                        <br>
                        <button id = 'submit' class="w3-button w3-block w3-teal w3-section w3-padding" type="submit">Send</button>
                        <br>
                    </div>
                </form>
                </form>
            </div>
        </div>
    </center>

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