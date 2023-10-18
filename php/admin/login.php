<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iscool || Dashboard</title>
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="../../assests/css/all.css">
    <link rel="stylesheet" href="../../assests/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="../../assests/css/bootstrap.min.css">
    <!-- material design -->
    <link rel="stylesheet" href="../../assests/css/mdb.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="../../assests/sass/style.css">
</head>

<body>
    <div class="login__container col-lg-6 col-md-5 col-sm-10 mx-auto">

        <h1 class="text-center login__head">Hi Dooars School </h1>
        <div class="row">
            <!-- <div class="col-lg-4 col-md-4 col-sm-12 mx-auto mt-5"> -->
            <div class="">
                <form action="loginConnection.php" method="POST">
                    <div class="form-group">
                        <label for="username">User Name</label>
                        <input type="text" class="form-control input" id="exampleInputEmail1" name="user" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control input" id="exampleInputPassword1" name="password">
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                    <button type="submit" class="btn btn-primary" name="loginSubmit">Submit</button>
                    <a href="../../index.php" class="badge badge-info py-2">Go to Home page</a>
                    </div>
                   

                    <?php
                    if (isset($_SESSION['error']) && $_SESSION != '') {
                    ?>
                        <small id="emailHelp" class="form-text text-muted text-danger"><?php echo $_SESSION['error'];  ?></small>

                    <?php
                        unset($_SESSION['error']);
                    }
                    ?>

                </form>
            </div>
        </div>

    </div>
</body>
<!-- jQuery -->
<script src="../../assests/js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script src="../../assests/js/popper.min.js"></script>
<!-- Bootstrap core javascript -->
<script src="../../assests/js/bootstrap.min.js"></script>
<!-- Material design Core Javascript -->
<script src="../../assests/js/mdb.min.js"></script>
<!-- Scroll Animation -->
<script src="../../assests/js/scrollreveal.min.js"></script>
<!-- custom script -->
<script src="../../assests/js/index.js"></script>
<script src="../../assests/js/sliderr.js"></script>
<script src="../../assests/js/showPopup.js"></script>
<script src="../../assests/js/sendContact.min.js"></script>
<script src="../../assests/js/slick.min.js"></script>
<script src="../../assests/js/sidebarActive.js"></script>
</body>

</html>