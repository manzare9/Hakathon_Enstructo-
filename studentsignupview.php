<?php
include('./tsignin.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
//header("location: registration.php");
}
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
                    <h2 class="section-heading">Student Performance</h2>
                    <hr class="light">
                    <p class="text-faded">Keep Check & Balance Of Home Assignments & Class Performance</p>
                    
                </div>
            </div>
            
            <div style="position: relative;left:10px;top: 0px">
            <div class="controls">
                  <button id="login" class="btn btn-success" style="font-family:'Goudy Old Style'">Home</button>
  <script>
    var btn = document.getElementById('login');
    btn.addEventListener('click', function() {
      document.location.href = 'index.php';
    });
  </script>
                </div></div>
        </div>
    </section>
        <div id="">
        <div class="container">
            <h2>Sign Up For Students:</h2>
                <form action="studentsignupclr.php" method="POST" role='form'>
                            <div class="form-body">
                            <fieldset>
                              
                             
                                 <div class='form-group'>   
                                <label>Student Name</label>
                                <input type="text" placeholder="Student Name" name="username" class="form-control"  required="">
                                 </div>
                                
                                 <div class='form-group'>  
                                <label>Email Address</label>
                                <input type="email" placeholder="Enter your E-mail ID" name="email" class="form-control"  required="">
                                </div>
                                
                                <div class='form-group'>  
                                <label>Password</label>
                                <input type="password" placeholder="Enter Password" name="password" class="form-control"  required="">
                                </div>
                                
                                <div class='form-group'>  
                                 <label>Class</label>
                                <input type="text" placeholder="Enter Class" name="grade" class="form-control"  required="">
                                </div>
                                
                                <div class='form-group'>  
                                 <label>Mobile No.</label>
                                <input type="text" placeholder="Enter Mobile" name="mobile" class="form-control" required="">
                                </div>
                                
                                <div class='form-group'>  
                                <label>Parent Mobile</label>
                                <input type="text" placeholder="Enter Parent Mobile" name="parent_mobile" class="form-control"  required="">
                                </div>
                                
                                <div class='form-group'>  
                                <label>Parent Name</label>
                                <input type="text" placeholder="Enter Parent Name" name="parent_name" class="form-control"  required="">
                                </div>
                                
                                <div class='form-group'>  
                                <label>Parent Email</label>
                                <input type="text" placeholder="Parent Email" name="parent_email" class="form-control"  required="">
                                </div>
                                
                                <div class='form-group'>  
                                <label>Address</label>
                                <input type="text" placeholder="Address" name="address" class="form-control"  required="">
                                  </div>                          
                                <button type="submit" class="btn btn-success">Sign Up</button>
                            </fieldset>
                            </div>
                            
                        </form>
        </div>
            </div>
    </body>
</html>