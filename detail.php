<?php
header('Content-Type: text/html; charset=UTF-8'); 

$url = $_GET['url'];
echo $url;
include('simple_html_dom.php'); 

//$url = 'http://www.koreadaily.com/news/read.asp?page=1&branch=&source=&category=emigration&art_id=9752391'; 
$html = @file_get_html($url); 
unset($arr_result); 
$arr_result = $html->find('#article_title');


if(count($arr_result) > 0){

foreach($arr_result as $e){ 


//$e->children(2)->children(1)->plaintext.'<br/>';
$title = $e->plaintext;
$url = $e->href;
//echo $title;
//echo $url;

?>
<div><?=$title?></div>
<br>
<br>


<?php




} 
} else { 
echo "<br/><br/>"; 
} 


unset($arr_result); 
$arr_result = $html->find('#article-box > div.readpage-article-cont'); 


if(count($arr_result) > 0){

foreach($arr_result as $e){ 


//echo $e;

//echo $e->children(1)->children(0)->plaintext;
//echo $e->children(1)->children(1)->plaintext;
?>
<div class="contents">
    <?=$e?>
</div>

<?php




} 
} else { 
echo "<br/>"; 
} 
?>
<style>
    .contents img {max-width:100% !important;}
    </style>


<?php

exit; 

?>
