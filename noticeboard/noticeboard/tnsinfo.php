<html>
<head>
<title>TNS Demo</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
<?php
$yourTNSName = "sampleTNS";//你的TNS的名字
require_once("tnsSystem.class.php");//包含TNS的核心文件
$myTNS = new tnsSystem($yourTNSName);//初始化你的TNS
$tnsContent = $myTNS->tns_content;//获得全部的Notice
//Notice以数组的形式存储在$tnsContent 你可能需要通过foreach来遍历他

foreach($tnsContent as $value){
        echo "$value<br/>";
}

?>
</body>
</html>
