<?php
    include '../php/connections/connection.php';

    $sql = 'SELECT ID, EXAM_NAME FROM results';
    $results = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/styles.css">
    <title>Document</title>
</head>
<body>
    <?php
        include '../php/components/navigation.php';
    ?>
        <div class="d-flex justify-content-center w-100" style="background-color: rgb(233, 233, 233);">
            <div class="navwid">
                <h2 class="font-weight-bold my-3">RESULTS</h2>
                <div class="w-100 py-4">
                    <ul>
                        <?php
                            while($exams =  mysqli_fetch_assoc($results)){
                        ?>
                            <li id="classresult">
                                <a href="./classresults.php?examname=<?php echo $exams["EXAM_NAME"]; ?>"><?php echo $exams["EXAM_NAME"]; $exams["ID"]?></a>
                            </li>
                        <?php
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    <?php
        include '../php/components/footer.php'
    ?>
    <?php
        include '../php/components/scripts.php'
    ?>
</body>
</html>
