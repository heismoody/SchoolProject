<?php
    $albumname = $_POST['albumname'];
    $dirpath = "../../uploads/gallery/". $albumname;
    if(mkdir($dirpath)){
        echo "folder created successful";
    }else{
        echo "There was an error in creating the folder";
    }
?>