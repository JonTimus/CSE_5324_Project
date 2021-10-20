<?php
include("classes/admin.php");
$admin = new admin;
$userd = $admin->show_users();

?>

<!doctype html>
<html lang="en">

<head>



  <!-- <link href="../online_quize/admin/bootstrap.min.css" rel="stylesheet"> -->


  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>Admin panel</title>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
  <!--  font awsome cdn -->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <style type="text/css">
    .sidebar-list {
      margin-right: -15px;

      font-family: 'Quicksand', sans-serif;
      font-size: 14px
    }

    .sidebar-list li:focus-visible {
      background-color: deepskyblue !important;
    }

    .sidebar-list li a {
      color: white;
      text-decoration: none;
    }


    .mytable2 .card {
      background: #EC6F66;
      /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, #F3A183, #EC6F66);
      /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, #F3A183, #EC6F66);
      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      border: solid 4px saddlebrown;
    }

    .card {
      overflow: hidden;
      transition: all 0.9s ease;
    }

    .card:hover {
      transform: scale(1.14);
    }

    .des {

      background: linear-gradient(#49a09d, #5f2c82)
    }

    .bg-dark-dash {
      background-color: darkslategray !important;
      font-weight: 900;
      font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
      font-size: xx-large;
      color: #e1dbdb;
    }

    .h1-LIST {
      font-weight: 900;
      font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
      font-size: xx-large;
      color: white;
    }
  </style>

</head>

<body class="des">
  <div class=" col-md-10 container-fluid">
    <div class="card-header bg-dark-dash" style="margin-right: -45px; height: 60px;">
      <b>JOBIFY ADMIN DASHBOARD</b>
      <button type="btn btn-outline-success" class="btn btn-danger float-right" style="height: 40px;"><a href="../login.php" class="text-white ">Logout</a> </button>
    </div>
    <div class="row">




      <div class="col-md-4 mt-3 ">
        <div class="card shadow bg-dark " style="width: 18rem; box-shadow: 1px 1px 1px 1px #e1dbdb; border-radius:0px; border-top-left-radius: 0px; cursor:pointer;">
          <!-- <div class="card-header">
                Your Courses
              </div> -->


          <img class="myimg" src="../uploads/file3.png" alt="Card" width="288" height="200">
          <div class="card-body">
            <p class="card-text"><a href="#" style="text-decoration: none; color: orangered">ALL COURSES <i class="fa fa-bookmark ml-3" style="color: orangered"></i></a></p>
          </div>
        </div>

      </div>


      <div class="col-md-4 mt-3">
        <div class="card shadow bg-dark" style="width: 18rem;cursor:pointer; box-shadow:1px 1px 1px 1px #e1dbdb; border-radius:0px; border-top-left-radius: 0px;">
          <!-- <div class="card-header">
                Your Courses
              </div> -->


          <img class="" src="../uploads/file4.png" alt="Card" width="288" height="200">
          <div class="card-body">
            <p class="card-text "><a href="manage_videos/manage_videos.php" style="text-decoration: none; color: orangered">ALL VIDEOS</a><i class="fa fa-video-camera ml-3" style="color: orangered"></i></p>
          </div>
        </div>

      </div>
      <div class="col-md-4 mt-3 ">
        <div class="card shadow bg-dark" style="width: 18rem;cursor:pointer; box-shadow:1px 1px 1px 1px #e1dbdb; border-radius:0px; border-top-left-radius: 0px;">
          <!-- <div class="card-header">
                Your Courses
              </div> -->


          <img class="" src="../uploads/file5.png" alt="Card" width="288" height="200">
          <div class="card-body">
            <p class="card-text "><a href="#" style="text-decoration: none; color: orangered">All QUIZZES</a><i class="fa fa-question-circle ml-3" style="color: orangered"></i></p>
          </div>
        </div>

      </div>

      <!--  no of courses and videos starts -->

      <div class=" mt-3  ">


        <table class="table table-borderless container  ">

          <tbody class="row ">
            <tr class="col">
              <td class="mytable2 ">
                <div class="card shadow border-0 " style="width: 15rem; height: 110px; box-shadow: 2px 3px #827171; border-radius:0px; border-top-left-radius: 0px;">

                  <div class="card-body">
                    <p class="card-text text-white"><b class="h1-LIST">No. Of Courses </b><br><span style="font-size: 20px;"><?php $admin->display_course_count(); ?></span></p>
                  </div>
                </div>

              </td>

            </tr>
            <tr class="col">
              <td class="mytable2">
                <div class="card shadow border-0" style="width: 15rem; height: 110px; box-shadow: 2px 2px #827171; border-radius:0px; border-top-left-radius: 0px;">

                  <div class="card-body">
                    <p class="card-text text-white"><b class="h1-LIST">No. Of Videos</b><br><span style="font-size: 20px;"><?php $admin->display_video_count(); ?></span></p>
                  </div>

              </td>

            </tr>
            <tr class="col">
              <td class="mytable2">
                <div class="card shadow border-0" style="width: 15rem; height: 110px; box-shadow: 2px 2px #827171; border-radius:0px; border-top-left-radius: 0px;">

                  <div class="card-body">
                    <p class="card-text text-white"><b class="h1-LIST">No. Of Quizzes</b><br><span style="font-size: 20px;"><?php $admin->display_quiz_count(); ?></span></p>
                  </div>

              </td>

            </tr>

          </tbody>
        </table>


      </div> <!--  no of courses and videos starts -->


    </div>

    <div class="row ">
      <!--  second row closed -->

      <div class="col-md-12">
        <!-- list of users starts -->

        <table class="table shodow pl-5 table-responsive table table-success table-striped" style="  margin: auto;
  width: 100%;
  border: 3px solid green;
  padding: 10px;height : auto;overflow-y: scroll;display: inline-block; width: 830px;">

          <!-- table stsrts  -->
          <!--  use table-responsive class -->
          <p class="ml-5  "><b class="h1-LIST">List of Users </b><br><span style="font-size: 40px;"></p>
          <thead>
            <tr>

              <th scope="col">id</th>
              <th scope="col">Username</th>
              <th scope="col">Password</th>
              <th scope="col">email id</th>
            </tr>
          </thead>
          <tbody style="">

            <?php
            foreach ($userd as $userdata) {


            ?>
              <tr>
                <th scope="row"><?php echo $userdata['id']; ?></th>
                <td><?php echo $userdata['username']; ?></td>
                <td><?php echo $userdata['password']; ?></td>
                <td><?php echo $userdata['email']; ?></td>
              </tr>

            <?php } ?>
          </tbody>
        </table>

        <!-- table ends  -->



      </div> <!-- list of users ends -->






    </div> <!--  second row closed -->




    <!--   third row starts -->





  </div>




  <!-- sidebar starts -->










  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
  </script>
  <script src="../../dist/js/bootstrap.min.js"></script>
  <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  <script src="../../assets/js/vendor/holder.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>