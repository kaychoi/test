<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

class MyFileObject{
    private $filename; // 외부접근 허용 안함
  //  public $filename; // 외부접근 허용 함

    // 생성자 선언
    // function __construct($fname){
    //     $this->filename = $fname;
    //     if(!file_exists($this->filename)){
    //         die('no data file -'.$this->filename);
    //     }
    // }
    function isFile(){
        return is_file($this->filename);
    }
    function setName($_name){
        $this->ifEmptyDie($_name);
        $this->filename = $_name;
    }
    function getName(){
        return $this->filename;
    }
    private function ifEmptyDie($value){
        if(empty($value)){
            die('I need name');
        }
    }
}

$file = new MyFileObject();
//$file->filename = 'data.txt';
$file->setName('data.txt');
var_dump($file->isFile());
//var_dump($file->filename);
print($file->getName());
echo "<br>";
$file2 = new MyFileObject();
//$file2->filename = 'data4.txt';
$file2->setName('data2.txt');
var_dump($file2->isFile());
//var_dump($file2->filename);
print($file2->getName());

echo "<br>";

/*
php 클래스 생성자 약속
function __construct(){}
*/

/*
MyFileObject - class
$file, $file2 - instance
isFile - method
$this->filename - Instance variable,Instance field, Instance property
*/

?>

<?php 
// 상속 테스트

class Animal{
    function run(){
        print('running...<br>');
    }
    function breathe(){
        print('breathing...<br>');
    }
}
class Human extends Animal{
    function think(){
        print('thinking...<br>');
    }
}
$ani = new Animal();
$ani->run();
$human = new Human();
$human->run();
?>