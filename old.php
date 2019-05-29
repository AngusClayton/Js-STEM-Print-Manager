<?php
$jsonString = file_get_contents('old.json');
$data = json_decode($jsonString, true);
?>
<style>
table {
  transition: 0.3s;
  border-collapse: collapse;
}

table, th, td {
  border: 1px solid black;
}
th, td {
padding: 1%;
font-family: 'Ubuntu', sans-serif;

}
.title {
background-color:red;
font-size: 125%;
color: white;
}
.title1 {
  background-color:maroon;

  color: white;
}
.prev { //Preview Image
   border-radius: 1px;

height: 100px;

}
.prev:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
h1{
font-family: 'Ubuntu', sans-serif;
font-size: 300%
color: cyan;
text-align: center;
}
form {
margin: 0 auto;
width:250px;
}
.1 {
margin: 0 auto;
width:100%px;
}
.list {
color = rgb(80, 100, 107);

text-decoration: none;

}
h3 {
  font-family: 'Ubuntu', sans-serif;
  font-size: 20px;
  font-weight: bold;
  transition: 0.3s;

}
.del {
  color:red;
  text-align:center;
  text-decoration: none;
}
.del:hover {
  color:maroon;
}
</style>
<h3> Completed STEM print Requests </h1>
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<table style="width:100%">
  <tr>
    <th class="title">Name</th>
    <th class="title">Class</th>
    <th class="title">Time</th>
    <th class="title">file</th>

  </tr>

<?php
foreach ($data as $key => $value) {
  echo "<tr>";
  echo "<td>".$data[$key][0]."</td>";
  echo "<td>".$data[$key][1]."</td>";
  $timestamp = (int)$data[$key][3];
  $timestamp = $timestamp + 60*60*10;

  echo "<td>".date('h:i A | d-M-Y',$timestamp)."</td>";
  $urrr = $data[$key][2];
  echo "<td> <a href='$urrr'>$urrr</a></td>";
  echo "</tr>";
}


?>
