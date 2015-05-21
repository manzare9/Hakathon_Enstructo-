<?php

require_once './connection.php';


$username= filter_input(INPUT_POST,'username');
$password=filter_input(INPUT_POST,'password');
$email=filter_input(INPUT_POST,'email');
$address=filter_input(INPUT_POST,'address');
$childname=filter_input(INPUT_POST,'childname');
$mobile=filter_input(INPUT_POST,'mobile');

$query="insert into parent_data (username,password,email,address,child_name,mobileno) values ('$username','$password','$email','$address','$childname','$mobile')";
$rs=  mysqli_query($mysqli, $query);
if(!$rs){
   die('Error ' . mysqli_error($mysqli));
}

else
{
    echo 'Data Entered SuccessFullly!';
}