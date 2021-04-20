<?php
  include_once 'require/conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- CSS only 
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">-->



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Attendance</title>
    <link rel="icon" href="img/favicon/favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <meta name="description" content="A free html template with Sketch design made with Bootstrap">
    <meta name="keywords" content="free html template, bootstrap, ui kit, sass" />
    <meta name="author" content="Codrops" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- end favicon links -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/flickity.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>


<style>
    
button {

  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: #099293; 
  color: white; 
  border: 2px solid #099293;
    border-radius: 12%;
    
}

    .button1 a{
        color: white;
    }
.button1:hover {
  background-color: #1a1a1a;
  color: white;
    border: 2px solid #1a1a1a;

}    
ul.social-list {
    padding: 0;
    margin-top: 20px;
    float: right;
}

ul.social-list li {
    display: inline-block;
    padding: 0;
}

ul.social-list li a {
    text-align: center;
    border: 1px solid white;
    width: 35px;
    height: 35px;
    display: inline-block;
    line-height: 35px;
    color: white;
    border-radius: 50%;
    -webkit-transition: all 400ms linear;
    transition: all 400ms linear;
}

ul.social-list li:nth-child(1) a:hover {
    background: #3b5998;
    border: 1px solid #3b5998;
    color:white;
}

ul.social-list li:nth-child(2) a:hover {
    background: #00aced;
    border: 1px solid #00aced;
    color:white;
}

ul.social-list li:nth-child(3) a:hover {
    background: #dd4b39;
    border: 1px solid #dd4b39;
    color:white;
}

        ul.social-list li:nth-child(4) a:hover {
    background: #3b5998;
    border: 1px solid #3b5998;
    color:white;
}
   
</style>
</head>

<body>
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Attendance</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav  ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signup.html">Sign Up</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>-->

    <div class="container-fluid">
        <div class="row">
            <div class="header-nav-wrapper">
               
                <div class="carousel-cell" style="background-image: url(img/edited2.png);">
                    <div class="logo">
                    </div>
                    <div class="primary-nav-wrapper">
                        <nav>
                            <ul class="primary-nav">
                                <li style="color:white;"><a href="student.html">Student</a></li>
                                <li><a href="teacher.html">Teacher</a></li>
                                <li><a href="#intro">About</a></li>
                                <li><a href="#get-started">Feedback</a></li>
                            </ul>
                        </nav>

                    </div>

                    <header class="hero">
                        <div>

                            <div class="hero-bg">
                                <div class="container">
                                    <div class="row"><br><br><br><br><br><br>
                                        <div class="col-md-12">
                                            <p style="font-size: 70px; color: #414a52; text-shadow: 2px 2px #6B7E7F">Smart Attendance</p><br><br>
                                             <p style="font-size: 30px; color: #414a52; text-shadow: 2px 2px #809596">Cloud Based Attendance System </p><br><br><br><br>
                                           <button class="button button1"><a href="#intro" >Learn more</a></button>
                                           
                                          
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>


                        </div>
                        <div class='mouse-container'>
                            <a href="#intro">
                                <div class='mouse'>
                                    <span class='scroll-down'></span>
                                </div>
                            </a>
                        </div>
                    </header>
                </div>
            </div>


        </div>





        <!-- SECTION: Intro -->
        <section class="collective has-padding" id="intro">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h4>About</h4>
                    </div>
                    <div class="col-md-9">
                        <p>“Cloud Based Attendance Management System” is Website developed for
                            maintaining the attendance of the student on the daily basis in the collage. Here the staffs, who
                            are handling the subjects, will be responsible to mark the attendance of the students. Each staff
                            will be given with a separate username and password based on the subject they handle. An
                            accurate report based on the student attendance is generated here. This system will also help in
                            evaluating attendance eligibility criteria of a student.</p>

                        <p>This system developed will reduce the manual work and avoid redundant data. By
                            maintaining the attendance manually, then efficient reports cannot be generated. The system
                            can generate efficient weekly, consolidate report based on the attendance. As the attendances
                            are maintained in registers it has been a tough task for admin and staff to maintain for long time.
                            Instead the software can keep long and retrieve the information when needed.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION: Get started -->
        <section class="get-started has-padding text-center" id="get-started">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 wp4">

                    </div>
                </div>
            </div>
        </section>


        <!-- SECTION: Footer -->
        <footer class="has-padding footer-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 footer-branding">

                        <h4 style="color: white">Feedback</h4>
                    </div>


                    <div class="footer-features">
                        <div class="row">
                            <div class="col-md-6">
                                <form>
                                    <div class="form-group">
                                        <input type="text" name="name name" class="form-control form-footer" placeholder="Name" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" required="" class="form-control form-footer" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control form-footer" rows="5" placeholder="Message"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-solid-state">Send Message</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <ul class="social-list">
                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>


        </footer>


    </div>


    <!--
      <button class="bubbly-button stu"><a href='student.html' alt='Broken Link' style="text-decoration:none;">Student</a></button>
      <button class="bubbly-button tea"><a href='teacher.html' alt='Broken Link' style="text-decoration:none;">Teacher</a></button>-->
    <!-- JS CDNs -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
    <script src="http://vjs.zencdn.net/5.4.6/video.min.js"></script>
    <!-- jQuery local fallback -->
    <script>
        window.jQuery || document.write('<script src="js/min/jquery-1.11.2.min.js"><\/script>')
    </script>
    <!-- JS Locals -->
    <script src="js/min/bootstrap.min.js"></script>
    <script src="js/min/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script src="js/min/retina.min.js"></script>
    <script src="js/min/jquery.waypoints.min.js"></script>
    <script src="js/min/flickity.pkgd.min.js"></script>
    <script src="js/min/scripts-min.js"></script>

    <script src="js/script.js"></script>
</body>

</html>