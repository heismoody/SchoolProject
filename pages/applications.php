<?php
    include '../php/connections/connection.php';

    $sql = 'SELECT * FROM applications';
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
    <title>Applications</title>
</head>
<body>
    <?php
        include '../php/components/navigation.php';
    ?>
    <div class="d-flex justify-content-center w-100" style="background-color: rgb(233, 233, 233);">
        <div class="navwid">
            <h2 class="font-weight-bold my-3">APPLICATIONS</h2>
            <div class="w-100 py-4">
                <ul>
                    <?php
                        while($apps =  mysqli_fetch_assoc($results)){
                    ?>
                        <li id="classresult">
                            <a href="./pages/applicationdownload.php?applicationname=<?php echo $apps["APP_NAME"]; ?>"><?php echo $apps["APP_NAME"]; $apps["ID"]?></a>
                        </li>
                    <?php
                        }
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <?php
        include '../php/components/footer.php';
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="../Javascripts/navigations.js"></script>
</body>
</html>
