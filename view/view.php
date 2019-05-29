<!DOCTYPE html>
<?php
//http://ec2-52-62-60-24.ap-southeast-2.compute.amazonaws.com/3DSPCC/view/view.php?file=Infinity_Cube_50.stl
$CURL = "../uploads/".$_GET['file'];
$ext = explode(".",$_GET['file']);
$ext = end($ext);
if ($ext != "stl") { ///CHECK IF ITS A STL, OR A THINGIVERSE LINK :)
  if ($ext != "STL") {
    $fils = $_GET['file'];
    //is it http??
    $htt = explode("//",$fils);
    print_r($htt);
    if (count($htt) == 1) {
      $fils = "http://".$fils;
    }
    header("location: $fils");
    //echo $fils;
  }

}




?>
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../style.css">
<style>

#stl_cont {

  margin: auto;
  margin-top: 1%;
  border-style: solid;
  border-color: black;
  padding: 0%;
  width:75%;
  height: 500px;

}

.db{
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
  text-decoration: none
}
.db:hover{
  width: 60%;
  padding:1%;
  margin: 1%;
  margin-left: 0%;
  background-color: grey;
  color: black;
  border-style: solid;
  border-color: black;
  border-width: 1px;
  font-size: 150%;
  border-radius: 15px;
  text-decoration: none
}


body {
 font-family: 'Ubuntu', sans-serif;
 height: 100%;

 color: white;
 font-size: 150%;
 margin-left: 5%;
}
h1 {
font-size: 300%;
}
</style>
<html>
    <head>
        <title><?PHP echo $_GET['file']; ?></title>
    </head>

    <body>
      <h1> <?PHP echo $_GET['file']; ?> </h1>
        <div id="stl_cont"></div>

        <script src="stl_viewer.min.js"></script>
        <script>
            var stl_viewer=new StlViewer
            (
                document.getElementById("stl_cont"),
                {
                    auto_rotate:true,
                    models:
                    [
                        {filename:"<?PHP echo $CURL ?>",color: "#42d7f4"}
                    ]
                }
            );
        </script><br><br>
<a href='<?PHP echo $CURL ?>' class='db' download> Download </a>
<a href='../admin.php' class='db'> back </a>
    </body>
    <div class="footer">
    <p>Angus Clayton, St Philips Christian College 2019</p>
  </div>
</html>
