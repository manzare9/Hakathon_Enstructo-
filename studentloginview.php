
<?php
include('studentloginclr.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
//header("location: adminprofile.php");
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

<body>
    
    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Admin Roles</h2>
                    <hr class="light">
                    <p class="text-faded">Managing The Enstructo Back End & All The Administration Work!</p>
                    
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
    
    
    
    
 <div class="container">   
<div id="main">
<h2>Sign In For Admin:</h2>
<div id="login">
<form action="" method="post" role="form">
    <div class="form-group">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text" class="form-control input-medium">
    </div>
    <div class="form-group">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password" class="form-control">
    </div>
<input name="submit" type="submit" value=" Login " class="btn btn-default">
<span><?php echo $error; ?></span>
</form>
</div>
</div></div>
</body>
</html>