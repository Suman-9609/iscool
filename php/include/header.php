<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iscool || Page</title>
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="./assests/css/all.css">
    <link rel="stylesheet" href="./assests/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="./assests/css/bootstrap.min.css">
    <!-- material design -->
    <link rel="stylesheet" href="./assests/css/mdb.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="./assests/sass/style.css">
    <link rel="stylesheet" href="./assests/css/slick.css">
    <link rel="stylesheet" href="./assests/css/slick-theme.css">
</head>

<body>
    <!-- ------------------------------Contact Form-------------------- -->

    <div class="alert" id="alert">
        <span class="fa fa-check-circle"></span>
        <span class="msg" id="successMsg">Warning: This is a warning alert</span>

        <div class="close-btn">
            <span class="fa fa-times"></span>
        </div>
    </div>

    <div id="modal_contact" class="modal">
        <div id="modal_content">
            <div id="modal_header">
                <span class="close_modal">&times;</span>
                <h2>Contact Us :</h2>
            </div>
            <div id="modal_body">
                <h3>Send us Message</h3>
                <form action="./php/submit.php" id="myForm">
                    <div class="form_group">

                        <input type="text" name="name" id="name" required autocomplete="off">
                        <label for="Enter Name">Enter Name</label>
                        <span><i class="fa fa-user"></i></span>
                        <small id="name_error_msg"></small>
                    </div>
                    <!-- </> form_group -->
                    <div class="form_group">

                        <input type="text" name="email" id="email" required autocomplete="off">
                        <label for="Enter Email">Enter Email</label>
                        <span><i class="fa fa-envelope"></i></span>
                        <small id="email_error_msg"></small>
                    </div>
                    <!-- </> form_group -->
                    <div class="form_group">

                        <input type="text" name="phone" id="phone" required autocomplete="off">
                        <label for="Enter Phone Number">Enter Phone Number</label>
                        <span><i class="fa fa-phone"></i></span>
                        <small id="phone_error_msg"></small>
                    </div>
                    <!-- </> form_group -->
                    <div class="form_group">

                        <textarea name="message" id="message" required autocomplete="off"></textarea>
                        <label for="Send Your Message" class="label2">Send Your Message</label>
                        <span><i class="fa fa-commenting"></i></span>
                        <small id="message_error_msg"></small>
                    </div>
                    <!-- </> form_group -->
                    <input type="submit" name="submit" value="Send Message" id="subBtn">
                </form>
                <!-- </> form -->
            </div>
            <!-- </> modal_body -->

        </div>
        <!-- </> modal_content -->
    </div>
    <!-- </> modal_contact -->