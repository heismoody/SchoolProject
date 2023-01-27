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
            <div class="navwid d-flex align-items-center py-4">
                <div class="bg-white rounded-pill d-flex justify-content-center align-items-center shadow px-4 mr-5" style="width: 50px; height: 60vh;">
                    <?php
                        include '../php/components/sidenav.php';
                    ?>
                </div>
                <div class="w-100 d-flex">
                    <div class="w-50 mr-3">
                        <form action="./php/middlewares/gallerymiddleware.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1"><strong>Choose Album To Post Image In</strong></label>
                                <select class="form-control shadow" id="exampleFormControlSelect1" name="albumname">
                                    <?php
                                        $scanned = array_diff(scandir("../uploads/gallery/"), array('..','.'));
                                        foreach ($scanned as $file){
                                    ?>
                                        <option><?php echo $file?><option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1"><strong>Attach Image To Be Posted</strong></label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="imgfile">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="w-50 ml-3">
                        <form action="./php/middlewares/albummiddleware.php" method="post">
                            <div class="form-group">
                                <label for="formGroupExampleInput"><strong>Create Image Album</strong></label>
                                <input type="text" class="form-control shadow" id="formGroupExampleInput" placeholder="Name of the album to be created" name="albumname">
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