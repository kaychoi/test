<h1>Function</h1>

<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$a = 1;
var_dump($a);
var_dump(is_file('data.txt'));
var_dump(is_dir('data.txt'));
var_dump(file_get_contents('data.txt'));
file_put_contents('data.txt', rand(1,1000));
?>

<h1>Object</h1>

<?php
 try{
    $data = "data2.txt";
    $file = new SplFileObject($data);
    $file_w = new SplFileObject($data,"w");
    $file_w->fwrite(rand(1,100000));
    var_dump($file->isFile());
    var_dump($file->isDir());
    var_dump($file->fread($file->getSize()));
    
} catch (exception $e) {
    echo "error";
}

?>

<h1>Object</h1>
<?php 
$data = "data3.txt";
if (is_file($data) == true) {
    $file2 = new SplFileObject($data);
    var_dump($file2->isFile());
    var_dump($file2->isDir());
    $file2->fwrite(rand(1,1000));
    var_dump($file2->fread($file2->getSize()));
   
} else {
    echo "no data";
}

// class - 설계도 - SplFileObject
// method - function (함수) - isFile, isDir, fread
// instance - 객체 - 제품화 - $file, $file2
// data.txt, data2.txt - state


?>