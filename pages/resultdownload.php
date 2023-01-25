<?php
    include '../php/connections/connection.php';
    $exams = $_GET['exam'];
    $getclass = $_GET['class'];
    $getfile = "SELECT * FROM results WHERE EXAM_NAME='$exams' AND CLASS_RESULT='$getclass'";
    $result = mysqli_query($conn, $getfile);
    $grabfile = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $file_url = '../uploads/resultdocs/'.$grabfile['RESULT_FILENAME'];  
        header("Cache-Control: public"); 
        header("Content-Description: File Transfer"); 
        header("Content-Disposition: attachment; filename=$file_url"); 
        header("Content-Type: application/msword"); 
        header("Content-Transfer-Encoding: binary"); 
     
        // Read the file 
        readfile($file_url);
    ?> 
</body>
</html>