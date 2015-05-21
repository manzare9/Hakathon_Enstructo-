<?php

require_once './connection.php';


$username= filter_input(INPUT_POST,'username');
$password=filter_input(INPUT_POST,'password');
$email=filter_input(INPUT_POST,'email');
$parent_mobile=filter_input(INPUT_POST,'parent_mobile');
$parent_email=filter_input(INPUT_POST,'parent_email');
$parent_name=filter_input(INPUT_POST,'parent_name');
$address=filter_input(INPUT_POST,'address');
$grade=filter_input(INPUT_POST,'grade');
$mobile=filter_input(INPUT_POST,'mobile');

$query="insert into student_data (username,password,class,email,address,mobileno,parent_mobile,parent_email,parent_name) values ('$username','$password','$grade','$email','$address','$mobile','$parent_mobile','$parent_email','$parent_name')";
$rs=  mysqli_query($mysqli, $query);
if(!$rs){
   die('Error ' . mysqli_error($mysqli));
}

else
{
    echo 'Data Entered SuccessFullly!';
}