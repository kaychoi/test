<h1>Function Style</h1>



<?php
$adata = array('a','b','c');
$adata1 = ['a','b','c'];
array_push($adata1, 'd');
//count();
foreach($adata as $item) {
    echo $item.'<br>';
}
foreach($adata1 as $item) {
    echo $item.'<br>';
}

var_dump(count($adata1));
echo "<br>".count($adata1);
?>



<h1>Object Style</h1>
<?php
$adata1 = ['a','b','c'];
$odata = new ArrayObject($adata1);
$odata->append('e');
foreach($odata as $item) {
    echo $item.'<br>';
}

var_dump($odata->count());
?>