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
        <div class="w-100 d-flex">
            <div class="w-50 mr-3">
                <form action="./php/middlewares/gallerymiddleware.php" method="post" enctype="multipart/form-data">
                    <div class=" form-group">
                        <label for="exampleFormControlSelect1 "><strong>Choose Album To Post Image In</strong></label>
                        <select class="form-control shadow " id="exampleFormControlSelect1" name="albumname">
                          <option>Name of the album to post in</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                    </div>
                    <?php
                    $scanned = scandir("../uploads/gallery/");
                    print_r($scanned);
                    ?>
                    <div class="form-group ">
                        <label for="exampleFormControlFile1 "><strong>Attach Image To Be Posted</strong></label>
                        <input type="file " class="form-control-file " id="exampleFormControlFile1 ">
                    </div>
                    <button type="submit " class="btn btn-primary ">Submit</button>
                </form>
            </div>
            <div class="w-50 ml-3 ">
                <form action="./php/middlewares/albummiddleware.php " method="post ">
                    <div class="form-group ">
                        <label for="formGroupExampleInput "><strong>Create Image Album</strong></label>
                        <input type="text " class="form-control shadow " id="formGroupExampleInput " placeholder="Name of the album to be created " name="albumname ">
                    </div>
                    <button type="submit " class="btn btn-primary ">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>