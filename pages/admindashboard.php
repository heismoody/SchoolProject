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
            include '../php/navigation.php';
        ?>
        <div class="d-flex justify-content-center w-100" style="background-color: rgb(233, 233, 233);">
            <div class="navwid d-flex align-items-center py-4">
                <div class="bg-white rounded-pill d-flex justify-content-center align-items-center shadow px-4 mr-5" style="width: 50px; height: 60vh;">
                    <div>
                        <div>
                            <img src="https://cdn3.iconfinder.com/data/icons/network-and-communications-8/32/network_home_house-256.png" class="iconsize my-2" alt="">
                        </div>
                        <div>
                            <img src="https://cdn1.iconfinder.com/data/icons/document-std/512/newspaper-256.png" class="iconsize my-2" alt="">
                        </div>
                        <div>
                            <img src="https://cdn0.iconfinder.com/data/icons/education-flat-icons-vol-2/96/58-256.png" class="iconsize my-2" alt="">
                        </div>
                        <div>
                            <img src="https://cdn2.iconfinder.com/data/icons/xomo-basics/128/document-06-256.png" class="iconsize my-2" alt="">
                        </div>
                        <div>
                            <img src="https://cdn0.iconfinder.com/data/icons/insurance-flat-unexpected-situations/512/Insurance_Policy-256.png" class="iconsize my-2" alt="">
                        </div>
                        <div>
                            <img src="https://cdn2.iconfinder.com/data/icons/flat-seo-web-ikooni/128/flat_seo-47-256.png" class="iconsize my-2" alt="">
                        </div>
                        <div>
                            <img src="https://cdn4.iconfinder.com/data/icons/firefighting-fire-safety-blue-line/64/445_fire-exit-emergency-escape-evacuate-256.png" class="iconsize my-2" alt="">
                        </div>
                    </div>
                </div>
                <div class="w-100">
                    <div class="row w-100 my-5" style="grid-gap: 40px;">
                        <div class="col d-flex align-items-center bg-white rounded-lg shadow news" style="width: 10rem; grid-gap: 20px;">
                            <img src="https://cdn1.iconfinder.com/data/icons/document-std/512/newspaper-256.png" style="width: 60px; height: 60px; margin: 10px 0 10px 10px;" alt="...">
                            <div class="card-body">
                                <p class="card-text"><strong>NEWS</strong></p>
                            </div>
                        </div>
                        <div class="col d-flex align-items-center bg-white rounded-lg shadow results" style="width: 10rem;">
                            <img src="https://cdn0.iconfinder.com/data/icons/education-flat-icons-vol-2/96/58-256.png" style="width: 60px; height: 60px; margin: 10px 0 10px 10px;" alt="...">
                            <div class="card-body">
                                <p class="card-text"><strong>RESULTS</strong></p>
                            </div>
                        </div>
                        <div class="col d-flex align-items-center bg-white rounded-lg shadow gallery" style="width: 10rem;">
                            <img src="https://cdn2.iconfinder.com/data/icons/xomo-basics/128/document-06-256.png" style="width: 60px; height: 60px; margin: 10px 0 10px 10px;" alt="...">
                            <div class="card-body">
                                <p class="card-text"><strong>GALLERY</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="row w-100" style="grid-gap: 40px;">
                        <div class="col d-flex align-items-center bg-white rounded-lg shadow application" style="width: 10rem;">
                            <img src="https://cdn0.iconfinder.com/data/icons/insurance-flat-unexpected-situations/512/Insurance_Policy-256.png" style="width: 60px; height: 60px; margin: 10px 0 10px 10px;" alt="...">
                            <div class="card-body">
                                <p class="card-text"><strong>APPLICATIONS</strong></p>
                            </div>
                        </div>
                        <div class="col d-flex align-items-center bg-white rounded-lg shadow" style="width: 10rem;">
                            <img src="https://cdn2.iconfinder.com/data/icons/flat-seo-web-ikooni/128/flat_seo-47-256.png" style="width: 60px; height: 60px; margin: 10px 0 10px 10px;" alt="...">
                            <div class="card-body">
                                <p class="card-text"><strong>WEB MAINTENANCE</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<script>
    $(document).ready(function() {
        $(".news").click(function() {
            $("#bodydiv").load("./pages/newsadmin.html")
        });
        $(".gallery").click(function() {
            $("#bodydiv").load("./pages/galleryadmin.php")
        });
        $(".application").click(function() {
            $("#bodydiv").load("./pages/applicationadmin.html")
        });
        $(".results").click(function() {
            $("#bodydiv").load("./pages/teacherpanel.html")
        });
    })
</script>