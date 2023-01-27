<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/styles.css">
    <title>Document</title>
</head>

<body>
    <?php
        include '../php/components/navigation.php';
    ?>
        <div class="d-flex justify-content-center w-100" style="background-color: rgb(233, 233, 233);">
            <div class="navwid d-flex align-items-center py-4">
                <div class="bg-white rounded-pill d-flex justify-content-center align-items-center shadow px-4 mr-5" style="width: 50px; height: 60vh;">
                    <?php
                        include '../php/components/sidenav.php';
                    ?>
                </div>
                <div class="w-100">
                    <div class="w-50">
                        <form action="./php/middlewares/appmiddleware.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="formGroupExampleInput"><strong>Name Of The Application Form</strong></label>
                                <input type="text" class="form-control shadow" id="formGroupExampleInput" placeholder="Applicaton Name" name="apptitle">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1"><strong>Attach Applicaton Form</strong></label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="appfile">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php
        include '../php/components/footer.php';
    ?>
</body>
</html>