
<?php 

include  $_SERVER['DOCUMENT_ROOT']."/db.php"; 
$aaa= $_GET['order'];
$total= $_GET['total'];
$id= $_GET['id'];
$table= $_GET['table'];


echo "order : ".$aaa[1];
echo "<Br>";
$ccc = count($aaa);

//$aaa = explode(",", $aaa);


$query="update sortable set tabletype='".$table."' where id='".$id."'";
echo $query;
$update = mq($query);

// $aaa= $_POST['order'];
// $total= $_POST['total'];
//$total = 13;
echo "id : ".$id;
echo "<Br>";
echo "table : ".$table;
echo "<Br>";
echo "total : ".$ccc;
$j=1;
for($i=0;$i<$ccc;$i++) {

    $query="update sortable set orderby='".$j."' where id='".$aaa[$i]."'";
    echo $query;
    $update = mq($query);
    $j++;
 }


?>

<!-- <script type="text/javascript">alert('저장되었습니다.');</script> -->