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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">
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
    <?php
    if (isset($_SESSION['log'])) {
    ?>


    <a href="logout.php" class="btn">Logout</a>

    <h1 class="text-center dashboard__head">Welcome to Dashboard</h1>
    <div class="col-12 col-md-10 m-auto">

        <?php
            if (isset($_SESSION['status']) && $_SESSION != '') {
            ?>
        <div class="alert-warning alert-dismissible fade show mb-5" role="alert">
            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php
                unset($_SESSION['status']);
            }
            ?>


        <div class="accordion mb-5" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left btn__text" type="button" data-toggle="collapse"
                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h3 class="text-primary">Add Gallery Photo</h3>
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show p-3  " aria-labelledby="headingOne"
                    data-parent="#accordionExample">
                    <div class="card-body">



                        <form action="code.php" method="POST" name="save__image" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="">Student Name</label>
                                        <input type="text" name="stud_name" class="form-control"
                                            placeholder="Enter Name">
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="">Course Name</label>
                                        <input type="text" name="stud_course" class="form-control"
                                            placeholder="Enter Course">
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="">Session</label>
                                        <input type="text" name="stud_session" class="form-control"
                                            placeholder="Enter Session">
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-md-6 col-lg-6">
                                 <div class="input-group mt-md-5">
                                    <div class="input-group-prepend">
                                     <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" name="stud_image" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                      <label class="custom-file-label" for="inputGroupFile01">Choose file</label>   
                                     </div>
                                 </div>
                                    <!-- <div class="form-group">
                                        <label for="">Student Image</label>
                                        <input type="file" name="stud_image" class="form-control">
                                    </div> -->
                                </div>
                                <!-- end col -->
                            </div>
                            <button type="submit" name="save_std_image" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>





    <!-- ===================== footer ===================== -->

    <div class="footer">
        <footer class="footer">
            <div class="container footer_section">
                <div class="footer_col1">
                    <h3>About</h3>
                    <p>Addressing the requirement of the modern era, we founded an organization in 2013 that had its
                        prime focus over the various sides of technology such as software development, Website
                        Development, technical education of Students, different vocational trainings and to strengthen
                        the financial conditions of the students we provided them data entry jobs, computer hardware,
                        and troubleshooting training and handicraft training. After completing the training many of
                        those students secured various Govt. and private jobs. We are working on these sectors till date
                        also. The educational parts are being managed by Dooars School while the rest of the parts are
                        being managed by Iscool organization. Both of these organizations do possess their differently
                        respected govt. approved license. We have fully engaged ourselves in service-related works. We
                        hope and believe, we will be able to provide widespread technical support in the very near
                        future too. </p>

                    <ul class="sci">
                        <li><a href="https://wwww.facebook.com/iscoolpage/"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>


                <!-- <div class="footer_col2">
                   <h3>Quick Links</h3>
                   <ul>
                       <li><a href="./index.php">Home</a></li>
                       <li><a href="serviceCenter.php">Service Center</a></li>
                       <li><a href="artGallery.php">Painting</a></li>
                   </ul>
                   
               </div> -->

                <div class="footer_col3">
                    <h3>Contact</h3>
                    <ul>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> <a href="#">College Halt, Alipurduar,
                                West Bengal-736122</a></li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i> <a href="#">+91-9775956248</a></li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="#">iscool.olit@gmail.com</a></li>
                    </ul>

                    <div class="location_map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3570.692822022542!2d89.52539521500941!3d26.49783358330799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e257f5cbf23b61%3A0xc18c7a14b02f2c56!2sISCOOL%20Computer%20Service%20Center!5e0!3m2!1sen!2sin!4v1627274826837!5m2!1sen!2sin"
                            width="100%" height="270"
                            style="border: 0px solid #fff; border-radius: 5px; box-shadow: 5px 5px 5px rgba(0,0,0,0.5);"
                            allowfullscreen="" loading="lazy"></iframe>
                    </div>

                </div>
            </div>
        </footer>


        <footer class="footer_2nd">
            <p>&#169; 2021 iscool. All rights reserved</p>
        </footer>
    </div>

    <!-- -------------------- Sticky icon --------------------- -->
    <div class="sticky_banner">
        <a href="https://g.page/iscool-computer-service-center?share" target="_blank">
            <span>
                <i class="fa fa-map-marker"></i>
            </span>
        </a>

        <a href="https://api.whatsapp.com/send?phone=9775956248&text-Hello’" target="_blank" class="shadow">
            <span>
                <i class="fa fa-whatsapp" aria-hidden="true"></i>
            </span>
        </a>
    </div>
    <?php
    } else {
        header("Location: login.php");
    }
    ?>


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