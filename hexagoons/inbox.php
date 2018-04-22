<!DOCTYPE html>
<html>
    <head>
        <title>Student Information Display</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="inbox_style.css">
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
            <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
                <a href="#" class="w3-bar-item w3-button w3-padding-large">About</a>
                <a href="#" class="w3-bar-item w3-button w3-padding-large">Log In</a>
                <a href="#" class="w3-bar-item w3-button w3-padding-large">Contact Us</a>
                <a href="#" class="w3-bar-item w3-button w3-padding-large">Admin Corner</a>
            </div>
        </div>
        
        <div class="jumbotron">
            <div class="col-sm-4 w3-card">
                <header class="w3-teal w3-container">
                    <h2><center>Select Teacher</center></h2>
                </header>
                <div>
                    <hr>
                    <table class="w3-table w3-bordered w3-centered w3-hoverable">
                    <tr><td>Ee-kian Wong</td></tr>
                    <tr><td>Ee-kian Wong</td></tr>
                    <tr><td>Ee-kian Wong</td></tr>
                    <tr><td>Ee-kian Wong</td></tr>
                    <tr><td>Ee-kian Wong</td></tr>
                    <tr><td>Ee-kian Wong</td></tr>
                    <tr><td>Ee-kian Wong</td></tr>
                    <tr><td>Ee-kian Wong</td></tr>
                </table>
                </div>
            </div>

            <div class="col-sm-8 w3-card">
                <header class="w3-light-grey w3-container">
                    <h2>Ee-kian Wong</h2>
                </header>
                <div id="messages">
                    <div class="container">
                        <div class="container_left">
                            
                            <p class="time-left">Hello. How are you today?</p>
                            <span class="time-right">11:00</span>
                            </div>
                    </div>
                    
                    <div class="container">
                        <div class="container_right">
                            
                            <p class="time-right">Hello. How are you today?</p>
                            <span class="time-left">11:00</span>
                            </div>
                    </div>
                    <div class="container">
                        <div class="container_left">
                            
                            <p class="time-left">Hello. How are you today?</p>
                            <span class="time-right">11:00</span>
                            </div>
                    </div>
                    
                    <div class="container">
                        <div class="container_right">
                            
                            <p class="time-right">Hello. How are you today?</p>
                            <span class="time-left">11:00</span>
                            </div>
                    </div>
                    <div class="container">
                        <div class="container_left">
                            
                            <p class="time-left">Hello. How are you today?</p>
                            <span class="time-right">11:00</span>
                            </div>
                    </div>
                    
                    <div class="container">
                        <div class="container_right">
                            
                            <p class="time-right">Hello. How are you today?</p>
                            <span class="time-left">11:00</span>
                            </div>
                    </div>
                    <div class="container">
                        <div class="container_left">
                            
                            <p class="time-left">Hello. How are you today?</p>
                            <span class="time-right">11:00</span>
                            </div>
                    </div>
                    
                    <div class="container">
                        <div class="container_right">
                            
                            <p class="time-right">Hello. How are you today?</p>
                            <span class="time-left">11:00</span>
                            </div>
                    </div>
                </div>
                
                <footer class="w3-container">
                    <br>
                    <div class="col-sm-10">
                        <textarea rows="3" cols="110" placeholder="Write Message here"></textarea>
                    </div>
                    <div class="col-sm-2">
                        <button id="send" class='w3-button w3-teal' style="border-radius: 0; float:right"><span style="font-size: 30px"class="glyphicon glyphicon-send glyphicon-lg"></span></button>
                    </div>
                </footer>
            </div>
        </div>
        
    </body>
</html>