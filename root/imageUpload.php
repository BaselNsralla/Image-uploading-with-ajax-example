<?php
 header('Access-Control-Allow-Origin: *');
 if (isset($_FILES["file"]["name"])) {
     $target = "uploads/".basename($_FILES["file"]["name"]);

    //$_FILES["imageName"]["tmp_name"] is the path to the file that has been uploaded to 
    //temporarly directory by php default when you submited, the file should be an image if 
    //you are a good person

    move_uploaded_file($_FILES["file"]["tmp_name"],$target);
    echo basename($_FILES["file"]["name"]);

 }else {
    echo "undefined";

 }



 ?>