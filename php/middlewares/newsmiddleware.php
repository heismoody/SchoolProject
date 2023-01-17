<?php
    $filename = strval($_FILES['newsfile']['name']);
    $filetmp = $_FILES['newsfile']['tmp_name'];
    $filesize = $_FILES['newsfile']['size'];
    $fileerror = $_FILES['newsfile']['error'];

    $fileext = explode('.', $filename);
    $fileactext = strtolower(end($fileext));
    $allow = array("jpg","jpeg","png");

    if(in_array($fileactext, $allow)){
        if($fileerror === 0){
            if($filesize < 50000000){
                $filelocation = "../../uploads/newsdocs/". $filename;
                if(move_uploaded_file($filetmp, $filelocation)){
                    include '../connections/connection.php';

                    $newstitle = $_POST['newstitle'];
                    $newsdescription = $_POST['newsdescription'];

                    $sql = "insert into news (NEWS_TITLE,NEWS_DESCR,NEWS_THUMBNAME)
                    values ('$newstitle','$newsdescription','$filename')";

                    if(mysqli_query($conn, $sql)){
                        echo 'success';
                    }else{
                        echo mysqli_error();
                    }
                }else{
                    echo "sorry:file was not uploaded";
                }
            }else{
                echo "file too large ";
            }
        } else {
            echo "there was an error uploading the file";
        }
    } else{
        echo "please upload a file of correct type";
    }
?>