<?php
	session_start();
	header('Content-Type: text/html; charset=utf-8'); // utf-8인코딩 (한글깨짐방지)

	// $db = new mysqli("localhost","yywbwfmy_appskin","asdb1213324@@","yywbwfmy_appskin");
	$db = new mysqli("localhost","root","root","test");
	$db->set_charset("utf8");

	function mq($sql)
	{
		global $db;
		return $db->query($sql);
	}

?>