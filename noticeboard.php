<?php
/*	Tiny Notice System
*@	orczhou@gmail.com
*/
$yourTNSName = "sampleTNS";
require_once("tnsSystem.class.php");
$myTNS = new tnsSystem($yourTNSName);
$myTNS->tns_checkAction();
?>
<html>
<head>
<title>Tiny Notice System</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
<h2>Welcome,Here is a Tiny Notice System </h2>
<!--<?php echo $myTNS->tipInfo;?>-->
<br/>
<?php echo $myTNS->addForm(basename(__FILE__));?>
<hr />
<?php echo $myTNS->listAdmin(basename(__FILE__));?>
</body>
</html>