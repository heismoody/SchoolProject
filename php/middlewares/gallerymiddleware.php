<?php
    $albumfile = $_POST['albumname'];
    $filename = strval($_FILES['imgfile']['name']);
    $filetmp = $_FILES['imgfile']['tmp_name'];
    $filesize = $_FILES['imgfile']['size'];
    $fileerror = $_FILES['imgfile']['error'];

    $fileext = explode('.', $filename);
    $fileactext = strtolower(end($fileext));
    $allow = array("jpg","jpeg","png","pdf","txt");

    if(in_array($fileactext, $allow)){
        if($fileerror === 0){
            if($filesize < 50000000){
                $filelocation = "../../uploads/gallery/$albumfile/". $filename;
                if(move_uploaded_file($filetmp, $filelocation)){
                    include '../connections/connection.php';

                    $sql = "insert into gallery (ALBUM_NAME,IMG_FILENAME)
                    values ('$albumfile','$filename')";
                    
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