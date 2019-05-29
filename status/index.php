<head>
  <title> STATUS </title>

</head>
<?PHP
//get data
$jsonString = file_get_contents('status.json');
$data = json_decode($jsonString, true);
?>
<style>
body {
    font-family: 'Ubuntu', sans-serif;
  	color: black;
  	font-size: 150%;
  	margin-left: 5%;
		height: 100%;
}
h1 {
	font-size: 300%;

}
@import url('https://fonts.googleapis.com/css?family=Ubuntu&display=swap');
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #159128;
   color: white;
   text-align: center;
	 font-size: 60%;
}
body {
  height: 100%;
  font-family: 'Ubuntu', sans-serif;
}
div.polaroid {
  width: 90%;
  align-items: top;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
}

div.container {

  text-align: center;
  padding: 10px 20px;
  display: inline;

}
p {
  margin-left: 5%;
  margin-right: 5%;
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
</style>
<h1> 3D printer Status </h1>
<table style="width:100%">
  <tr>
    <td>
    <div class="polaroid" width=100%>
  <img src="anet.jpg" alt="5 Terre" style="width:100%">
  <div class="container">
  <p>Anet A8<br>
    <b>Status:</b> <?PHP $info = $data['anet'][0];
    if ($info == 'Working') {echo "<span style='color:green'>$info</span>";}
    if ($info == 'Not Working') {echo "<span style='color:red'>$info</span>";}
    if ($info == 'Half Working') {echo "<span style='color:orange'>$info</span>";}?>
    <br><br>  <?PHP
    if(isset($data['anet'][1])) {
      echo '<b>Reason: </b>'.$data['anet'][1];
    }

    ?>

    </p>
  </div>
</div>

</td><td>

  <div class="polaroid" width=100%>
<img src="me3d.jpg" alt="5 Terre" style="width:100%">
<div class="container">
<p>ME 3D<br>
<b>Status:</b> <?PHP $info = $data['ME3D'][0];
if ($info == 'Working') {echo "<span style='color:green'>$info</span>";}
if ($info == 'Not Working') {echo "<span style='color:red'>$info</span>";}
if ($info == 'Half Working') {echo "<span style='color:orange'>$info</span>";}?>
<br><br>  <?PHP
if(isset($data['ME3D'][1])) {
  echo '<b>Reason: </b>'.$data['ME3D'][1];
}

?>
</p>
</div>
</div>

</td><td>

  <div class="polaroid" width=100%>
<img src="Rep2.jpg" alt="5 Terre" style="width:100%">
<div class="container">
<p>Makerbot Rep 2<br>
<b>Status:</b> <?PHP $info = $data['REP2'][0];
if ($info == 'Working') {echo "<span style='color:green'>$info</span>";}
if ($info == 'Not Working') {echo "<span style='color:red'>$info</span>";}
if ($info == 'Half Working') {echo "<span style='color:orange'>$info</span>";}?>
<br><br> <?PHP
if(isset($data['REP2'][1])) {
  echo '<b>Reason: </b>'.$data['REP2'][1];
}

?>
</p>
</div>
</div>

</td><td>

  <div class="polaroid" width=100%>
<img src="Flashforge.jpg" alt="5 Terre" style="width:100%">
<div class="container">
<p>Flashforge<br>
<b>Status:</b> <?PHP
$info = $data['FLASH'][0];
if ($info == 'Working') {echo "<span style='color:green'>$info</span>";}
if ($info == 'Not Working') {echo "<span style='color:red'>$info</span>";}
if ($info == 'Half Working') {echo "<span style='color:orange'>$info</span>";}
?>
<br><br>  <?PHP
if(isset($data['FLASH'][1])) {
  echo '<b>Reason: </b>'.$data['FLASH'][1];
}

?>
</p>
</div>
</div>

</td>
  </tr>
<a class='sub' href='change.html'> Change Status </a>
<a class='sub' href='../admin.php'> Back</a>
