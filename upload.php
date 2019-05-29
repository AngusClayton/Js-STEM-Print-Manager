<?php
$name = $_GET['name'];
$class = $_GET['class'];
$file = $_GET['thing'];
$CT = time();
$ID = $CT.$name;
echo "<br>Name:".$name;
echo "<br>Class:".$class;
echo "<br>File:".$file;
echo "<br>Time:".$CT;
echo "<br>ID:".$ID;
echo "<br>";
//get current data..
$jsonString = file_get_contents('data.json');
$data = json_decode($jsonString, true);

//$aron = array($name,$class,$file,$CT);
//$karren = array($ID=>$aron);
//print_r($karren);
//write old data
$data[$ID][0] = $name;
$data[$ID][1] = $class;
$data[$ID][2] = $file;
$data[$ID][3] = $CT;
//put new data back in
$newJsonString = json_encode($data);
file_put_contents('data.json', $newJsonString);
header('location: err.php?title=Thank you. Your file has been submitted&back=go back')
 ?>
