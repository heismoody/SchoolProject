<?php
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if($username == 'administrator@mail.com'&& $password == 'testing'){
            header("Location: ./admindashboard.php");
        }
    }
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
    <title>Login</title>
</head>
<body>
    <?php
        include '../php/components/navigation.php';
    ?>
    
    <div class="d-flex justify-content-center w-100 py-5" style="background-color: rgb(233, 233, 233);">
        <div class="bg-white p-5 shadow" style="border-radius: 20px;">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1 font-weight-bold"><strong>E-mail address</strong></label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter email" name="username">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"><strong>Password</strong></label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                <div class="text-center">
                    <input type="submit" class="btn btn-primary w-100 rounded-pill" name="submit"></input>
                </div>
            </form>
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