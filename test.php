<form method="POST" enctype="multipart/form-data" >
<input type="hidden" name="chk" value="update">
<table border="groove" cellpadding="15px">
<tr>
<td>s.no</td>
<td>Reg. No</td>
<td>name</td>
<td>Present</td>
<td>Date</td>
</tr>

<?php
include_once("./connection.php"); //add here your db config file
extract($_POST);
//After Click on Submit Call this
if(isset($btnAbsent))
{
	foreach($attend as $atn_key=>$atn_value)
	{
		if($atn_value=="present")
		{
			$upd_qry="UPDATE attendance1 SET present=present+1, date=CURDATE() where s_no='".$atn_key."'";
			mysqli_query($mysqli,$upd_qry);
		}
		elseif($atn_value=="absent")
		{
			$upd_qry="UPDATE attendance1 SET absent=absent-1, date=CURDATE() where s_no='".$atn_key."'";
			mysqli_query($mysqli,$upd_qry);
		}
	}
}


//Default call this
$check_exist_qry="select * from attendance1";
$rs=mysqli_query($mysqli,$check_exist_qry);

 while($row = mysqli_fetch_array($rs, MYSQLI_ASSOC))
{
	$id=  $row['s_no'];
	$no[]=  $row['std_reg_no'];
	echo "<tr><td>";
	echo $row['s_no']."</td><td>";  
	echo $row['std_reg_no']."</td><td>";
	echo $row['std_name']."</td><td>";
        echo $row['date']."</td>";
	echo "<td> <input type='radio' name='attend[$id]' value='present' >Present &nbsp; <input type='radio' name='attend[$id]' value='absent'>absent</td></tr>";
}

echo "</table>";
echo "<input type='submit' name='btnAbsent' value='submit'>";
?>
</form>