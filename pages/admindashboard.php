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
                <div class="w-100">
                    <div class="row w-100 my-5" style="grid-gap: 40px;">
                        <div class="col bg-white rounded-lg shadow news" style="width: 10rem; grid-gap: 20px;">
                            <a href="./newsadmin.php" class="d-flex align-items-center text-decoration-none text-dark">
                                <img src="https://cdn1.iconfinder.com/data/icons/document-std/512/newspaper-256.png" style="width: 60px; height: 60px; margin: 10px 0 10px 10px;" alt="...">
                                <div class="card-body">
                                    <p class="card-text"><strong>NEWS</strong></p>
                                </div>
                            </a>
                        </div>
                        <div class="col bg-white rounded-lg shadow results" style="width: 10rem;">
                            <a href="./teacherpanel.html" class="d-flex align-items-center text-decoration-none text-dark">
                                <img src="https://cdn0.iconfinder.com/data/icons/education-flat-icons-vol-2/96/58-256.png" style="width: 60px; height: 60px; margin: 10px 0 10px 10px;" alt="...">
                                <div class="card-body">
                                    <p class="card-text"><strong>RESULTS</strong></p>
                                </div>
                            </a>
                        </div>
                        <div class="col bg-white rounded-lg shadow gallery" style="width: 10rem;">
                            <a href="./galleryadmin.php" class="d-flex align-items-center text-decoration-none text-dark">
                                <img src="https://cdn2.iconfinder.com/data/icons/xomo-basics/128/document-06-256.png" style="width: 60px; height: 60px; margin: 10px 0 10px 10px;" alt="...">
                                <div class="card-body">
                                    <p class="card-text"><strong>GALLERY</strong></p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row w-100" style="grid-gap: 40px;">
                        <div class="col bg-white rounded-lg shadow application" style="width: 10rem;">
                            <a href="./applicationadmin.php" class="d-flex align-items-center text-decoration-none text-dark">
                                <img src="https://cdn0.iconfinder.com/data/icons/insurance-flat-unexpected-situations/512/Insurance_Policy-256.png" style="width: 60px; height: 60px; margin: 10px 0 10px 10px;" alt="...">
                                <div class="card-body">
                                    <p class="card-text"><strong>APPLICATIONS</strong></p>
                                </div>
                            </a>
                        </div>
                        <div class="col bg-white rounded-lg shadow" style="width: 10rem;">
                            <a href="#" class="d-flex align-items-center text-decoration-none text-dark">
                                <img src="https://cdn2.iconfinder.com/data/icons/flat-seo-web-ikooni/128/flat_seo-47-256.png" style="width: 60px; height: 60px; margin: 10px 0 10px 10px;" alt="...">
                                <div class="card-body">
                                    <p class="card-text"><strong>WEB MAINTENANCE</strong></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include '../php/components/footer.php';
        ?>
    </body>
</html>
<!-- <script>
    $(document).ready(function() {
        $(".news").click(function() {
            $("#bodydiv").load("./newsadmin.php")
        });
        $(".gallery").click(function() {
            $("#bodydiv").load("./galleryadmin.php")
        });
        $(".application").click(function() {
            $("#bodydiv").load("./applicationadmin.php")
        });
        $(".results").click(function() {
            $("#bodydiv").load("./teacherpanel.html")
        });
    })
</script> -->