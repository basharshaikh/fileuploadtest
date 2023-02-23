<?php



$target_dir = "uploads/"; // specify the directory where uploaded files will be stored
$target_file = $target_dir . basename($_FILES["file"]["name"]); // get the name of the uploaded file

if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    echo "The file " . basename($_FILES["file"]["name"]) . " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";
}

var_dump($_FILES["file"]);
?>
