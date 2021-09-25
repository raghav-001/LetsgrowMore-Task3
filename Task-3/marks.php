<?php include('marksserver.php'); ?>
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
		  <h3><?php echo $classrow['studentname']; ?>'s Marks</h3>
		  <form action="marks.php" method="post">
		  <?php 
			  	echo'<table border=1 height=200px width=500px>
				<tr>
				<td><h5><b>Mid term test</b></h5></td>
				<td><input type="text" name="mark1" value='.$classrow['marks1'].' ></td>
				</tr>
				<tr>
				<td><h5><b>Half yearly exam</b></h5></td>
				<td><input type="text" name="mark2" value='.$classrow['mark2'].' ></td>
				</tr>
				<td><h5><b>Final Assessment</b></h5></td>
				<td><input type="text" name="mark3" value='.$classrow['mark2'].' ></td>
				<tr><td colspan=2 align=center>
				<button name="mark" >Update marks</button>
				</td></tr>
				</table>';
		  
		  
		  ?>
		  </form>
		  </center>
      </div>
</body>
</html>