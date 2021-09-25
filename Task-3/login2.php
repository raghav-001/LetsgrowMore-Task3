<?php include('login2server.php'); ?>
<html>
<head>
        <title>Login page</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">
</head>
<body style="background-color:rgb(0,17,43)">
  <center>
<section id="contact" class="py-5">
      <div class="container" style="color:white">
      <h2 class="h1-responsive font-weight-bold text-center mb-5" style="color:white"><u>STUDENT RESULT MANAGEMENT SYSTEM</u></h2>
          <p class="text-center w-responsive mx-auto mb-5" style="color:white">
            Login to access the system's features
                <div class="row">
                        <div class="col-md-9 mb-md-0 mb-5">
                                <form action="login2.php" method="post">
                                        <div class="row">
                                                <div class="col-md-6">
                                                        <div class="md-form mb-0">
                                                                <input type="text" id="userid" name="userid" class="form-control"/>
                                                                <label for="name">Your name</label>
                                                        </div>
                                                        </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                                <div class="col-md-12">
                                                        <div class="md-form mb-0">
                                                                <input type="radio" id="Admin" name="Admin" value="Admin" class="form-control">
                                                                <label for="Admin">Faculty</label>
                                                        </div>
                                                        <div class="md-form mb-0">
                                                                <input type="radio" id="User" name="Admin" value="User" class="form-control">
                                                                <label for="Admin">Student</label>
                                                        </div>

                                                </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                                <div class="col-md-12">
                                                        <div class="md-form">
                                                                <input type="password" name="password" id="pass" class="form-control "/>
                                                                <label for="pass">Your password</label>
                                                        </div>
                                                </div>
                                        </div>
                                        <input class="btn btn-white btn-md" value="Login" name="Submit" type="submit"/>
                                        <a href="homepage2.php">
                                          <button class="btn btn-white btn-md" type= button>Back</button>
                                        </a>
                                </form>
                        </div>
                        <div class="col-md-3 text-center">
                        <img src="https://fcw.com/-/media/GIG/FCWNow/Topics/Cybersecurity/shield_security.jpg" width="80%" height="80%">
                        </div>
                </div>
        </div>
</section>
</center>
</body>
</html>
