
<!DOCTYPE html>
<head>
	<title>3DPRINT</title>
	 <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="style.css">
</head>

<style>
a {
  text-decoration: none;
  border-style: solid;
  border-color: white;
  border-radius: 10px;
  padding: 1%;
  background-color: #257ffc;
  color: #25fcb4;
}
a:hover {
  text-decoration: none;
  border-style: solid;
  border-color: white;
  border-radius: 10px;
  padding: 1%;
  background-color: #25fcb4;
  color: #257ffc;
}

body {

    font-family: 'Ubuntu', sans-serif;
  	color: white;
  	font-size: 150%;
  	margin-left: 5%;
}
h1 {
	font-size: 300%;
}
input[type=text] {
	width: 60%;
	padding:1%;
	margin: 1%;
	margin-left: 0%;
	background-color: white;
	color: black;
	border-style: solid;
	border-color: black;
	border-width: 1px;
	font-size: 150%;
	border-radius: 15px;
}
input[type=submit] {
	width: 60%;
	padding:1%;
	margin: 1%;
	margin-left: 0%;
	background-color: white;
	color: black;
	border-style: solid;
	border-color: black;
	border-width: 1px;
	font-size: 150%;
	border-radius: 15px;
}
input[type=file] {
	width: 60%;
	padding:1%;
	margin: 1%;
	margin-left: 0%;
	background-color: white;
	color: black;
	border-style: solid;
	border-color: black;
	border-width: 1px;
	font-size: 150%;
	border-radius: 15px;
}


.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element: */
}

.select-selected {
  background-color: DodgerBlue;
  	color: white;
	border-style: solid;
	border-color: black;
	border-width: 1px;
	font-size: 150%;
	border-radius: 15px;

}

/* Style the arrow inside the select element: */
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/* Point the arrow upwards when the select box is open (active): */
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/* style the items (options), including the selected item: */
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
}

/* Style items (options): */
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/* Hide the items when the select box is closed: */
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
</style>
<h1> <?PHP echo $_GET['title'];
if (isset($_GET['link'])) {
	$link = $_GET['link'];
}
else {
	$link = 'index.html';
}

?></h1>
<a href='<?PHP echo $link; ?>'><?PHP echo $_GET['back']; ?></a>
<div class="footer">
<p>Angus Clayton, St Philips Christian College 2019</p>
</div>
