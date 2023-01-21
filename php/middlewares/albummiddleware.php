<?php
    $albumname = $_POST['albumname'];
    $dirpath = "../../uploads/gallery/".$albumname;
    mkdir($dirpath);
?>