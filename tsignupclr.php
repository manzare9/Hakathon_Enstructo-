
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
        <div id="">
        <div class="container">
           
        </div>
            </div>
    </body>
</html>


<?php

require_once './connection.php';


$username= filter_input(INPUT_POST,'username');
$password=filter_input(INPUT_POST,'password');
$email=filter_input(INPUT_POST,'email');
$address=filter_input(INPUT_POST,'address');
$grade=filter_input(INPUT_POST,'grade');
$mobile=filter_input(INPUT_POST,'mobile');

$query="insert into teacher_data (username,password,email,address,grade,mobileno) values ('$username','$password','$email','$address','$grade','$mobile')";
$rs=  mysqli_query($mysqli, $query);
if(!$rs){
   die('Error ' . mysqli_error($mysqli));
}
else
{
    ?><h2 style="position: relative; left: 50px">
        <?php echo 'Data Entered SuccessFullly! Proceed To Login';
        }?>
    
    
    <div style="position: relative;left:50px;top: 10px">
            <div class="controls">
                  <button id="login" class="btn btn-default" style="font-family:'Goudy Old Style'">Login</button>
  <script>
    var btn = document.getElementById('login');
    btn.addEventListener('click', function() {
      document.location.href = 'tloginview.php';
    });
  </script>
                </div></div>
    </h2>