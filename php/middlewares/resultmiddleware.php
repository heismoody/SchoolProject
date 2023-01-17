<?php
    $filename = strval($_FILES['resultfile']['name']);
    $filetmp = $_FILES['resultfile']['tmp_name'];
    $filesize = $_FILES['resultfile']['size'];
    $fileerror = $_FILES['resultfile']['error'];

    $fileext = explode('.', $filename);
    $fileactext = strtolower(end($fileext));
    $allow = array("jpg","jpeg","png");

    if(in_array($fileactext, $allow)){
        if($fileerror === 0){
            if($filesize < 50000000){
                $filelocation = "../../uploads/resultdocs/". $filename;
                if(move_uploaded_file($filetmp, $filelocation)){
                    include '../connections/connection.php';

                    $resulttitle = $_POST['resulttitle'];
                    $resultclass = $_POST['resultclass'];

                    $sql = "insert into results (EXAM_NAME,CLASS_RESULT,RESULT_FILENAME)
                    values ('$resulttitle','$resultclass','$filename')";

                    if(mysqli_query($conn, $sql)){
                        echo 'success';
                    }else{
                        echo mysqli_error($conn);
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