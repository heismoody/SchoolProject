<?php
    include '../connections/connection.php';

    $newstitle = $_POST['newstitle'];
    $newsdescription = $_POST['newsdescription'];

    $sql = "insert into news (NEWS_TITLE,NEWS_DESCR)
    values ('$newstitle','$newsdescription')";

    if(mysqli_query($conn, $sql)){
        echo 'success';
    }else{
        echo mysqli_error();
    }
?>