
<?php 

include  $_SERVER['DOCUMENT_ROOT']."/db.php"; 
$aaa= $_GET['order'];
$total= $_GET['total'];

$aaa = explode(",", $aaa);


// $aaa= $_POST['order'];
// $total= $_POST['total'];
//$total = 13;
//echo $aaa;
$j=1;
for($i=0;$i<$total;$i++) {

    $query="update sortable1 set sort='".$j."' where id='".$aaa[$i]."'";
 //   echo $query;
    $update = mq($query);
    $j++;
 }


?>

<script type="text/javascript">alert('저장되었습니다.');</script>