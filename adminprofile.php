<?php
include('adminsession.php');
?>
<!doctype html>
<html>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Enstructo</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

    <body id="page-top">
        <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Admin Roles</h2>
                    <hr class="light">
                    <p class="text-faded">Managing The Enstructo Back End & All The Administration Work!</p>
                    
                    
                </div>
            </div>
        </div>
    </section>
<div id="profile">
    Admin:
<b id="welcome"> <i><?php echo $login_session; ?></i></b>
<b id="logout"><a style="position: relative;left: 800px" href="adminlogout.php">Log Out</a></b>
</div>
        <div class="container">
         
            
            <div style="position: relative;left:px;top: 10px">
            <div class="controls">
                  <button id="register" class="btn btn-success">Register Class</button>
  <script>
    var btn = document.getElementById('register');
    btn.addEventListener('click', function() {
      document.location.href = 'registerclass.php';
    });
  </script>
                </div></div>
            
            <div style="position: relative;left:px;top: 20px">
            <div class="controls">
                  <button id="timetable" class="btn btn-success">Update Time Table</button>
  <script>
    var btn = document.getElementById('timetable');
    btn.addEventListener('click', function() {
      document.location.href = 'updatetimetable.php';
    });
  </script>
                </div></div>
            
            
            <div style="position: relative;left:px;top: 30px">
            <div class="controls">
                  <button id="discusion" class="btn btn-success">Discussion Forum</button>
  <script>
    var btn = document.getElementById('discusion');
    btn.addEventListener('click', function() {
      document.location.href = 'discussion.php';
    });
  </script>
                </div></div>
            
            
            
            <div style="position: relative;left:px;top: 40px">
            <div class="controls">
                  <button id="noticeboard" class="btn btn-success">Update Notice Board</button>
  <script>
    var btn = document.getElementById('noticeboard');
    btn.addEventListener('click', function() {
      document.location.href = 'TNS_admin.php';
    });
  </script>
                </div></div>
        
        
        </div>
</body>
</html>