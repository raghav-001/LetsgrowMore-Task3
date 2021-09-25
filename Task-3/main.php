<?php session_start(); ?>
<html>
<head>
        <title>login page</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">
        <style>
            .navbar:not(.top-nav-collapse)
            {
              background: rgb(0,17,43) !important;
            }
            .sidenav {
                height: 100%;
                width: 20%;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
                background-color: rgb(246,255,255);
                overflow-x: hidden;
                padding-top: 30px; padding-left: 20px;
              }

              .sidenav a {
                padding: 100px 8px 6px 16px;
                font-size: 25px;
                color: #818181;
                display: block;
              }

              .sidenav a:hover {
                color: rgb(0,17,43);
              }
              .main
              {
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                background-color:rgb(246,255,255);
                border-radius: 5px;
                height: 150%;
                width:80%;
                margin-left: 25%; margin-right: 25%;
                padding-left:100px;
              }
            body{ margin:90px; padding:10px;}
        </style>
</head>
<body style="background-color:rgb(175,178,189)">
      <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
             <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto smooth-scroll">
                    <li class="nav-item"><a class="nav-link" href="homepage1.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="" data-offset="90">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="/SELab/login2.php" data-offset="90">Logout</a></li>
            
                </ul>
              </div>
         </div>
         </nav>
      </header>
      <div class="sidenav">
        <a href="#"> Time table</a>
        <?php 
		if($_SESSION['user']=="Admin")
			echo '<a href="/SELab/main2.php"> Marks</a>';
		else
			echo '<a href="/SELab/main1.php"> Marks</a>';
			?>
        <a href="#"> Attendance</a>
        <a href="#"></a>
      </div>
      <div class="main">
          <center><br><br>
		  <h2><u>Choose the required section of your choice in the side-bar</u></h2>
		  </center>
      </div>
</body>
</html>
