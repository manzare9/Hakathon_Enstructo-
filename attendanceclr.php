<?php
require './connection.php';
$take_at="select * from student_data";
$studentname=array();

$j=0;
$rs=  mysqli_query($mysqli, $take_at);
if (!$rs) {
    

            die('Error: ' . mysqli_error($mysqli));
}

while($row = mysqli_fetch_array($rs, MYSQLI_ASSOC)){
    $studentname[$j]=$row['username'];
    $j++;
}
$index=0;
while($index<sizeof($studentname)){
$attend=  filter_input(INPUT_POST,'present');
$pre=  filter_input(INPUT_POST,'absent');
$id=$studentname[$index];
$query="insert into attendance (present, regno,absent) values ('$attend','$id','$pre')";
$rs1=  mysqli_query($mysqli, $query);
if (!$rs1) {
    

            die('Error: ' . mysqli_error($mysqli));
}
$index++;
}