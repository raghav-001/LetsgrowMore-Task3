<?php session_start(); ?>
<html>
<head>
        <title>Welcome</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">
        <style type="text/css">
                  /* Required for full background image */
                  html,
                  body,
                  header,
                  #intro-section
                  {
                          height: 100%;
                  }

                  .navbar:not(.top-nav-collapse)
                  {
                          background: rgb(0,17,43) !important;
                  }

                  @media (max-width: 991px)
                  {
                          .navbar:not(.top-nav-collapse)
                          {
                                  background: #563e91 !important;
                          }
                  }
                  .bg {
                          background:url("https://i.pinimg.com/originals/3c/0f/d0/3c0fd09b721a4975ec16c849e847bc55.jpg");
                          font-family: Times;
                          background-position: center;
                          background-repeat: no-repeat;
                          background-size: cover;
                    			position: relative;
                       		display: flex;
                        	align-items: center;
                        	justify-content: center;
                  }
                  img{ max-width:100%;}
        </style>
</head>
<body>
  <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
             <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto smooth-scroll">
                    <li class="nav-item"><a class="nav-link" href="#intro">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about" data-offset="90">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact" data-offset="90">Contact</a></li>
					<li class="nav-item"><a class="nav-link" href="/SELab/main.php" data-offset="90">Menu</a></li>
                </ul>
              </div>
         </div>
         </nav>
  <!-- actual header -->
  <div id="intro-section" class="view">
      <div class="mask bg d-flex justify-content-center align-items-center">
          <div class="container px-md-3 px-sm-0">
              <div class="row wow fadeIn">
                  <div class="col-md-12 mb-4 white-text text-center wow fadeIn">
                      <h3 class="display-4 font-weight-bold white-text mb-0 pt-md-5 pt-5"><?php echo "Welcome ". $_SESSION["name"];?></h3>
                        <hr class="hr-dark my-4 w-75">
                        <h4 class=" mt-2 mb-4"><u>Faculty's portal</u></h4>
                  </div>
                </div>
                <h1 style="color:white" align=center>STUDENT RESULT MANAGEMENT SYSTEM</h1>
            </div>
      </div>
  </div>
</header>
<!--Section: about-->
<section id="about" class="text-center py-5">
        <!-- Container -->
        <div class="container">
          <!-- Section heading -->
          <h2 class="h1-responsive font-weight-bold text-center mb-5">About the website</h2>
          <!-- Section description -->
          <p class="lead grey-text text-center w-responsive mx-auto mb-5">
                Student result management system is used to keep and maintain the complete record of students in the university/institute/school.
                <br>This is used to manage the records of student attendance, timetable, fee,  marks and performance reports.
                <br>The purpose of this project is to develop a website which allows Administrator of the school to be able to make changes to the student/teacher accounts,
                 Students to view their marks and performances, to view their attendance, etc. , Teachers/Faculties to upload marks, view their schedules and Parents to be able to monitor progress and activity in the website, pay fee etc.
          </p>
        </div>
</section>
<section class="text-center py-5 bg">
  <p> </p></section>
<!--Section: contact-->
<section id="contact" class="text-center py-5">
        <!-- Container -->
        <div class="container">
          <!-- Section heading -->
          <h2 class="h1-responsive font-weight-bold text-center mb-5">Contact</h2>
          <!-- Section description -->
          <p class="lead grey-text text-center w-responsive mx-auto mb-5">	
             V. Raghav Anand <br>
            @VIT Chennai
          </p>
        </div>
</section>

</html>
