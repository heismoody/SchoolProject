<?php
    $albumname = $_POST['albumname'];
    $dirpath = "../../uploads/gallery/".$albumname;
    if(mkdir($dirpath)){
       echo "done successful";
    }else{
        echo "an error occured";
    }
?>