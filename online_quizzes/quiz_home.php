<?php

include("class/users.php");        //including the users class
$profile = new users;               // craeting the object of user class so that we can call show_user_profile() method 
extract($_POST);
$profile->show_users_profile($_SESSION['username']);  //calling the show_users profile() method of users class using users class object reference
// print_r($profile->data);

?>


<!DOCTYPE html>
<html>

<head>
  <title></title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  <link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet">
</head>

<style type="text/css">
  .li1 {
    float: right !important;
  }

  /* add background image with image 80% transperancy */
  body {
    background-image: url('../uploads/quiz1.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    background-position: center;
    background-color: #cccccc;
    background-blend-mode: overlay;
    /* background-opacity: 0.8; */
  }
</style>



<body class='opaque-bg'>

  <!-- ========================================================================================================================== -->

  <!-- navigation bar starts -->

  <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top position-relative">
    <!--  postion relative to align the tab content  -->
    <a class="navbar-brand text-white" href="../index.php">Jobify</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto ">
        <li class="nav-item active">
          <a class="nav-link text-white" href="../index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Our Services
          </a>
          <div class="dropdown-menu text-white fade" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../programming/android">Android Tutorials</a>
            <a class="dropdown-item" href="../programming/java">Java Tutorials</a>
            <a class="dropdown-item" href="../programming/python/python_home.html">Python Tutorials</a>
            <a class="dropdown-item" href="../video_tutorials/java/display_video_courses.php">Videos Tutorials</a>
          </div>
        </li>
        <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <!-- navigation bar ends -->
  <!-- ========================================================================================================================== -->



  <!-- tab section start -->

  <div class="container mt-4 col-md-10 position-relative">
    <h3 style="font-family: 'Catamaran', sans-serif;">Welcome <?php echo $_SESSION['username']; ?>, let's start your quiz:</h3>
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active " data-toggle="tab" href="#menu1">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#menu2" data-toggle="tab">Profile</a>
      </li>
      <li class="nav-item li1">
        <a href="../logout.php" id="our-location" class="nav-link justify-content-end">Logout</a>
        <!-- <a class="nav-link justify-content-end" href="#menu3" data-toggle="tab">Logout</a> -->
      </li>

    </ul>

    <!-- tab section ends -->

    <!-- tab content start -->

    <div class="tab-content">
      <div class="tab-pane active " id="menu1">

        <center><button type="button" class="btn btn-success mt-5" href="#myid" data-toggle="collapse">Select Language for Quiz</button></center>

        <!-- dropdown list starts -->

        <center>
          <div class="col-sm-6 mt-3">
            <div class="collapse" id="myid">
              <div class="form-group">
                <label>Select Course</label>
                <form method="POST" action="question_show.php">
                  <select class="form-control" id="exampleFormControlSelect1" name="selected_course">

                    <?php
                    $profile->show_courses();                                 // calling show_courses function from profile class
                    foreach ($profile->cat_data as $key => $course) {

                    ?>
                      <option value="<?php echo $course['id']; ?>"><?php echo $course['cat_name']; ?></option>
                    <?php
                    }

                    ?>
                  </select>
                  <button type="submit" class="btn btn-danger mt-3">Start Quiz</button>
                </form>
              </div>
            </div>
          </div>
        </center>


      </div>

      <!--  -->


    </div>
    <!-- tab section ends -->
  </div> <!-- container closed -->

</body>

</html>