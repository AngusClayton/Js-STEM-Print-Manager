<?PHP
$printer = $_GET['PRINTER'];
$status = $_GET['STATUS'];
$reason = $_GET['REASON'];
//get data
$jsonString = file_get_contents('status.json');
$data = json_decode($jsonString, true);
//process data
//print_r($data[$printer]);
$data[$printer][0] = $status;
if($_GET['REASON'] != "") {
  $data[$printer][1] = $reason;
}

//put new data back in

$newJsonString = json_encode($data);
file_put_contents('status.json', $newJsonString);
//
header("location: index.php")
?>
<a href='index.php'>back </a>
