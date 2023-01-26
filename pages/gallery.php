<?php
    $scanned = array_diff(scandir("../uploads/gallery/"), array('..','.'));
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
            <section class="navwid" id="imagediv">
                <h4 class="text-center font-weight-bold">LET'S HAVE A LOOK ON WILLIAM BRANHAM</h4>
                <h6 class="text-center">Moments That Were Captured On Camera Can Last Forever</h6>
                <div>
                    <div class="row">
                        <?php
                            foreach ($scanned as $file){
                        ?>
                        <div class="col my-3" id="toimages">
                            <div class="card" style="width: 18rem;">
                                <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text"><a href="./pages/images.php?album=<?php echo $file; ?>"><?php echo $file?></a></p>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                        
                    </div>
                </div>
            </section>
        </div>
        <?php
            include '../php/components/footer.php';
        ?>
        <?php
            include '../php/components/scripts.php';
        ?>
    </body>
</html>

<!-- <script>
    $(document).ready(function () {
         $("#toimages").click(function () {
            $("#imagediv").load("./pages/images.html")
        });
    })
</script> -->