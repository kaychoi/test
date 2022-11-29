<?php 
$url = 'https://coronavirus-19-api.herokuapp.com/countries/world';
$json = file_get_contents($url);
$obj = json_decode($json);
echo $obj->deaths;
?>

