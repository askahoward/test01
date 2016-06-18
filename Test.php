<?php
	date_default_timezone_set("Asia/Taipei");
	
	list($s1,$s2)=explode(' ',microtime());
    $data = date("Y-m-d H:i:s");
    $message_content_id = date('Ymd') . date('His') . substr($s1,2,6);
	
	echo date("Y/m/d H:i:s");
	echo "<br>";
	echo strtotime(date("Y/m/d H:i:s"));
	echo "<br>";
	echo strtotime("now") . substr($s1,2,3);
	echo "<br>";
	echo microtime();
	echo "<br>";
	echo substr($s1,2,6);
	
	echo "<br>";
	echo substr("9981",2,6);
?>

