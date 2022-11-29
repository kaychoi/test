<?php
	
include $_SERVER['DOCUMENT_ROOT']."/board/db.php";
// 현재 시간을 Unix timestamp로 변환한다.  
date_default_timezone_set('America/Los_Angeles');
$timestamp = time();  
echo "날짜1 : ";  
echo $timestamp;  
echo "<br />"; 
  
// 특정 날짜를 Unix timestamp로 변환한다.  

$timestamp = strtotime("2021-08-20 20:09:09");  
echo "날짜2 : ";  
echo $timestamp;  
echo "<br />";  

  
// date를 이용한 날짜 출력  
echo "날짜3 : ";  
echo date();  
echo "<br />";  
  
// gmdate를 이용한 날짜 출력  
echo "날짜4 : ";  
echo date("Y-m-d H:i:s", '1629515507');  
echo "<br />"; 


echo "현재 날짜 : ". date("Y-m-d")."<br/>";
echo "현재 시간 : ". date("H:i:s")."<br/>";
echo "현재 일시 : ". date("Y-m-d H:i:s")."<br/>";


$date = date('Y-m-d h:i:s');
$timestamp = strtotime($date);   
echo $timestamp;  
echo "<br />";  



$timestamp = time(); 
$date = date('Y-m-d H:i:s');




$query = "insert into test(regdate,date) values('".$date."',UNIX_TIMESTAMP())";
$sql = mq($query);





	?>