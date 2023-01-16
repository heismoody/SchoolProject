<?php

$conn = new mysqli('localhost', 'Administrator', 'zero123tech','schoolproject');

if(! $conn )  
{  
    die('Could not connect: ' . mysqli_error());  
}

?>