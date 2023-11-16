<?php
include './php/include/header.php';
include './php/include/navbar.php';
?>


<!-- ===================== Slider ===================== -->
<section class="section2 container-fluid">
    <div class="carousel">
        <div class="slider">
            <!-- <div class="banner"> -->
            <div class="banner banner_bg_training">
                <div class="banner_data">
                    <div class="banner-content">
                        <h1>Computer Training</h1>
                        <p> &nbsp;&nbsp;&nbsp;&nbsp; <span>In</span> today’s advanced world everyone must go through a
                            vocational training besides general education. While appearing in any job, those got the
                            special preference who possess educational qualification as well as certified professional
                            qualification. Keeping this in mind we tend to provide best quality vocational certification
                            training.</p>
                        <div class="content-link">
                            <a href="training_center.php" class="btn btn-primary btn-lg">Click to more details</a>
                        </div>
                    </div>
                    <div class="banner-img">
                        <img src="./assests/img/slider1.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <!-- </div> banner  -->
            <div class="banner banner_bg_img">
                <div class="banner_data2">
                    <div class="banner-content">
                        <h1>Chiplevel Repairing Center</h1>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp; <span>Right</span>&nbsp; now Technical Support is the worldwide need
                            of the hour service. It is not possible for everyone to buy a new device in exchange of a
                            faulty one where respected companies provide only a limited time of warranty. So, we are
                            stepping forward for those people by providing them satisfactory technical support. Book a
                            service call today for your device. Our certified engineers are willing to serve you at your
                            door. So, why to wait?! Book a call today.</p>
                        <div class="content-link">
                            <a href="serviceSchedule.php" class="btn btn-primary btn-lg">Click to Schedule</a>
                        </div>
                    </div>
                    <!-- <div class="banner-img">
                            <img src="./assests/img/slider2.jpg" alt="" class="img-fluid">
                        </div> -->
                </div>
            </div>
            <!-- </div> banner  -->
            <div class="banner banner_bg_img2">
                <div class="banner_data2">
                    <div class="banner-content">
                        <h1>Art Gallery</h1>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp; <span>Dooars</span> and North-East is that kind of a place where we
                            can hardly find a single art gallery to display the potential art and culture of this region
                            or to buy any. So, to preserve and to represent the ART and Culture of this region through
                            the medium of painting as well as to prioritise the value of cherishing Art in our regular
                            life we started this online art gallery. Hopefully you audience will love this Art Gallery.
                            So, to feel the joy of these paintings and to gift those to your beloved ones please visit
                            this Art Gallery.</p>
                        <div class="content-link">
                            <a href="#" class="btn btn-primary btn-lg">Go to our Gallery</a>
                        </div>
                    </div>
                    <!-- <div class="banner-img">
                            <img src="./assests/img/slider3.jpg" alt=""
                                class="img-fluid">
                        </div> -->
                </div>
            </div>
            <!-- </div> banner  -->
        </div>

        <!-- controls -->
        <div class="controls">
            <div class="arrow left"> <i class="fa fa-chevron-left" aria-hidden="true"></i> </div>
            <div class="arrow right"> <i class="fa fa-chevron-right" aria-hidden="true"></i> </div>

            <ul>
                <li class="selected"></li>
                <li></li>
                <li></li>
                <!-- <li></li> -->
            </ul>
        </div>
    </div>
</section>





<!-- ========================= cards ==================== -->
<section class="notice">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 mb-5 card_update">
                <div class="card">
                    <div class="card-header">
                        <h2>Update Activities</h2>
                    </div>
                    <div class="card-body">
                        <div class="card_slider">
                            <img src="./assests/img/cardImage1.jpg" alt="" class="img-fluid">
                            <img src="./assests/img/cardImage2.jpg" alt="" class="img-fluid">
                            <img src="./assests/img/cardImage3.jpg" alt="" class="img-fluid">
                            <img src="./assests/img/cardImage4.jpg" alt="" class="img-fluid">
                            <img src="./assests/img/cardImage5.jpg" alt="" class="img-fluid">
                            <img src="./assests/img/cardImage6.jpg" alt="" class="img-fluid">
                            <img src="./assests/img/cardImage7.jpg" alt="" class="img-fluid">
                            <img src="./assests/img/cardImage8.jpg" alt="" class="img-fluid">
                        </div>
                        <span class="btnSldier">
                            <i class="fa fa-pause" id="btnIcon"></i>
                            <i class="fa fa-play" id="btnIcon"></i>
                        </span>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-amber btn-lg">More</a>
                    </div>
                </div>
            </div>
            <!-- / <col> -->
            <div class="col-lg-6 col-md-12 col-sm-12 mb-5 notice_content">
                <div class="card">
                    <div class="card-header">
                        <h2>Notice</h2>
                    </div>
                    <!-- <marquee behavior="alternate" direction="up" onmouseover="this.stop();" onmouseout="this.start();"> -->
                    <div class="card-body">
                        <div class="notice_link1">
                            <p>
                                <b>Notice :</b> Upcoming notice
                            </p>
                        </div>
                    </div>
                    <!-- </marquee> -->
                    <div class="card-footer">
                        <a href="#" class="btn btn-indigo btn-lg">Read More</a>
                    </div>
                </div>
            </div>
            <!-- / <col> -->
        </div>
    </div>
</section>


<!-- ===================== our services ==================== -->
<section class="our_service">
    <div class="service_heading">
        <h1 class="text-center">Our Services</h1>
    </div>
    <div class="container">
        <div class="our_service_slider_container">
            <div class="row our_service_slider">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="service_heading">
                            <span>1</span>
                        </div>
                        <div class="service_title">
                            <h2>Project Co-Ordination</h2>
                        </div>
                        <div class="service_body">
                            <p>Our team will help you to keep the project and all related process running smoothly.</p>
                        </div>
                        <div class="service_footer">
                            <a href="#" class="btn btn-info btn-lg">Contact us</a>
                        </div>
                    </div>
                </div>
                <!-- / col -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="service_heading">
                            <span>2</span>
                        </div>
                        <div class="service_title">
                            <h2>Computer MNC <br> & <br> Chip Level Repairing</h2>
                        </div>
                        <div class="service_body">
                            <p>Life time maintanace services of the computer are also provided.</p>
                        </div>
                        <div class="service_footer">
                            <a href="#" class="btn btn-info btn-lg">Contact us</a>
                        </div>
                    </div>
                </div>
                <!-- / col -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="service_heading">
                            <span>3</span>
                        </div>
                        <div class="service_title">
                            <h2>Personal Software <br> & <br> Website Creation</h2>
                        </div>
                        <div class="service_body">
                            <!-- <p>Our team will help you to keep the project and all related process running smoothly.</p> -->
                        </div>
                        <div class="service_footer">
                            <a href="#" class="btn btn-info btn-lg">Contact us</a>
                        </div>
                    </div>
                </div>
                <!-- / col -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="service_heading">
                            <span>4</span>
                        </div>
                        <div class="service_title">
                            <h2>Computer Sales & Service</h2>
                        </div>
                        <div class="service_body">
                            <!-- <p>Our team will help you to keep the project and all related process running smoothly.</p> -->
                        </div>
                        <div class="service_footer">
                            <a href="#" class="btn btn-info btn-lg">Contact us</a>
                        </div>
                    </div>
                </div>
                <!-- / col -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="service_heading">
                            <span>5</span>
                        </div>
                        <div class="service_title">
                            <h2>Manpower Support </h2>
                        </div>
                        <div class="service_body">
                            <!-- <p>Our team will help you to keep the project and all related process running smoothly.</p> -->
                        </div>
                        <div class="service_footer">
                            <a href="#" class="btn btn-info btn-lg">Contact us</a>
                        </div>
                    </div>
                </div>
                <!-- / col -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="service_heading">
                            <span>6</span>
                        </div>
                        <div class="service_title">
                            <h2>Any Painting By Order <br> (Oil, Acrylic, Water etc) </h2>
                        </div>
                        <div class="service_body">
                            <!-- <p>Our team will help you to keep the project and all related process running smoothly.</p> -->
                        </div>
                        <div class="service_footer">
                            <a href="#" class="btn btn-info btn-lg">Contact us</a>
                        </div>
                    </div>
                </div>
                <!-- / col -->
            </div>
        </div>
    </div>
</section>

<!-- ===================== footer ==================== -->
<section class="iscool_linkage">
    <div class="heading">
        <h1 class="text-center">Our Training Partner</h1>
    </div>
    <div class="container linkage_container">
        <div class="linkage">
            <div class="item">
                <img src="./assests/img/aicsm.jpg" alt="">
            </div>
            <!-- / item -->
            <div class="item">
                <img src="./assests/img/BRITTI.jpg" alt="">
            </div>
            <!-- / item -->
            <div class="item">
                <img src="./assests/img/nice.JPG" alt="">
            </div>
            <!-- / item -->
            <div class="item">
                <img src="./assests/img/freed_logo.jpg" alt="">
            </div>
            <!-- / item -->
        </div>
    </div>
</section>


<!-- ===================== Our Student ===================== -->
<section class="our_student">
    <div class="student_container_head">
        <h1 class="text-center">Our Students</h1>
    </div>
    <?php
    $conn = mysqli_connect('localhost', 'iscool', 'w^oJtDavqAh6K5fwr&iE', 'iscool');
    $query = "SELECT * FROM student_gallery";

    $query_run = mysqli_query($conn, $query);

    ?>


    <div class="student_gallery_container container">

        <?php
        if (mysqli_num_rows($query_run) > 0) {
            foreach ($query_run as $row) {
        ?>
        <div class="item">
            <div class="card P-5">
                <div class="img_header">
                    <img src="./php/admin/upload/<?php echo $row['image']; ?>" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center text-capitalize">
                    <h2><?php echo $row['name']; ?></h2>
                </div>
                <div class="card-footer text-uppercase">
                    <b>Course :</b> <?php echo $row['course']; ?><br>
                    <b>Session :</b> <?php echo $row['session']; ?>
                    </p>
                </div>
            </div>
        </div>
        <!-- </> item -->

        <?php

            }
        } else {
            ?>
        <h3 class="text-center">No record available</h3>
        <?php
        }

        ?>



    </div>

</section>
</body>

<!-- ===================== footer ===================== -->

<?php
include './php/include/footer_section.php';
?>
<?php
include './php/include/footer.php';
?>

<script>
$(document).ready(function() {
    $('.student_gallery_container').slick({
        infinite: true,
        dots: false,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 1000,
        slidesToShow: 6,
        slidesToScroll: 1,

        responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    dots: false,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    dots: false,
                }
            },
            {
                breakpoint: 100,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: false,
                }
            }
        ]
    });
});
</script>