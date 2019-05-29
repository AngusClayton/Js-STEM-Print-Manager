
<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    $uploadOk = 1;
}
// Check if file already exists
if (file_exists($target_file)) {
    //echo "Sorry, file already exists.";

    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000000) {
    //echo "Sorry, your file is too large.";
    header('location: http://ec2-52-62-60-24.ap-southeast-2.compute.amazonaws.com/3DSPCC/err.php?title=Sorry%20%your%20%file%20%was%20%too%20%large&back=Try%20%Again')
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "STL" && $imageFileType != "OBJ" && $imageFileType != "obj"
&& $imageFileType != "stl" ) {
    header('location: http://ec2-52-62-60-24.ap-southeast-2.compute.amazonaws.com/3DSPCC/err.php?title=File%20%is%20%not%20%an%20%3D%20%File&back=Try%20%Again')
    //echo "Sorry, only STL or OBJ files are allowed :(<br>";
    $uploadOk = 1;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
