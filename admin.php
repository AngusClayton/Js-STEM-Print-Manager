<?php
session_start();
$jsonString = file_get_contents('data.json');
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
.sub {
	width: 60%;
	padding:0.5%;
	margin: 1%;
	margin-left: 0%;
	background-color: white;
	color: black;
	border-style: solid;
	border-color: black;
	border-width: 1px;
	font-size: 150%;
  text-decoration: none;
	border-radius: 15px;
  font-size: 80%;
}
.sub:hover {
	background-color: black;
	color: white;

}
.footer {
  font-family: 'Ubuntu', sans-serif;
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #159128;
   color: white;
   text-align: center;
	 font-size: 120%;
}
body {
  margin-left: 1%;
  margin-right: 1%;
}
.top {
	position: absolute;
	top: 0;
	z-index: -1;
  margin-right: 0%;
  margin-left: 75%;
  width: 25%;
}
</style><br>
<h1> STEM Print Requests</h1><h3> <a href='old.php' class='sub'>previous requests</a> <a href='status'  class='sub'>Printer Status</a> <?PHP
if ($_SESSION["acc"] == "MrMAC") {
  echo "<a href='clearSES.php'  class='sub'>Logout</a>";
}
?></h3>
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"> <br>


<table style="width:100%">
  <tr>
    <th class="title">Name</th>
    <th class="title">Class</th>
    <th class="title">Time</th>
    <th class="title">file</th>
    <th class="title" width=5%>DEL</th>
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
  $new = explode("/",$urrr);
  if ($new[0] == 'uploads') {
    $new = end($new);
  }
  else {
    $new = $urrr;

  }
  if ($_POST['acc'] == "MrMAC") {
    $_SESSION["acc"] = "MrMAC";
    $link = 'delete.php?id='.$key;
    $mark = '✖';
  }
  elseif ($_SESSION["acc"] == "MrMAC") {
    $link = 'delete.php?id='.$key;
    $mark = '✖';
  }
  else {
    $link = 'err.php?title=Not Logged in as admin &back=back&link=admin.php';
    $mark = '🔑';
  }
  echo "<td> <a href='view/view.php?file=$new'>$new</a></td>";
    echo "<td style='color:red;text-align:center;font-size:300%;' > <a href='$link' class='del'> $mark </td>";
  echo "</tr>";
}


?>
<div class='top'>
  <img src='SPCCblack.gif' width=30% style='display:inline-block;vertical-align:top;float:right;margin-right:5%;'></img>
</div>
