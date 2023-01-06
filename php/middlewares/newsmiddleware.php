<?php
    include '../connections/connection.php';

    $newstitle = $_POST['newstitle'];
    $newsdescription = $_POST['newsdescription'];

    $sql = "insert into NEWS (TITLE_NEWS,NEWS_DESC)
    values ('$newstitle','$newsdescription')";

    if(mysqli_query($conn, $sql)){
        echo 'success';
    }else{
        echo mysqli_error();
    }
?>