<?PHP
$ID = $_GET['id'];
//get data
$jsonString = file_get_contents('data.json');
$data = json_decode($jsonString, true);
//process data
print_r($data[$ID]);


//add to old.json
$jsonString = file_get_contents('old.json');
$old = json_decode($jsonString, true);
$old[$ID][0] = $data[$ID][0];
echo $data[$ID][0];
$old[$ID][1] = $data[$ID][1];
$old[$ID][2] = $data[$ID][2];
$old[$ID][3] = $data[$ID][3];
$newJsonString = json_encode($old);
file_put_contents('old.json', $newJsonString);
//put new data back in
unset($data[$ID]);
$newJsonString = json_encode($data);
file_put_contents('data.json', $newJsonString);
header('location: admin.php');

?>
<a href='admin.php'>back </a>
