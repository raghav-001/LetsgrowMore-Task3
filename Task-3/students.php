<?php include('studentsserver.php') ?>
<html>
<head>
        <title>Menu</title>
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
        <a href="#"> Marks</a>
        <a href="#"> attendance</a>
        <a href="#"></a>
      </div>
      <div class="main">
          <center>
		  <h3><u><i>Your students</i></u></h3><br>
		  <form action="students.php" method="post">
		  <?php 
		  for($j=0;$j<$i;$j++)
		  {
			  	echo'<table border=1 height=200px width=500px>
				<tr>
				<td><h5><b>Student name</b></h5></td>
				<td><h5>';echo $classinfo[$j]['studentname'];echo '</h5></td>
				</tr>
				<tr>
				<td><h5><b>Class number</b></h5></td>
				<td><h5>';echo $classinfo[$j]['studentid'];echo '</h5></td>
				</tr>
				<td><h5><b>Course Code</b></h5></td>
				<td><h5>';echo $classinfo[$j]['coursecode']; echo'</h5></td>
				<tr>
				<td><h5><b>Course Name</b></h5></td>
				<td><h5>';echo $classinfo[$j]['coursename']; echo'</h5></td>
				</tr>
				<tr>
				<button name="stid" value='.$classinfo[$j]['studentid'].'>Click to edit marks</button>
				</tr>
				</table><br>';
		  }
		  
		  
		  ?>
		  </form>
		  </center>
      </div>
</body>
</html>