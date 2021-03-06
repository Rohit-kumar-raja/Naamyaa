<?php
include './Backend/database.inc.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $massege = $_POST['message'];
    $insert_contact = "INSERT INTO `Contact`(`name`, `email`, `about`) VALUES ('$name','$email','$massege')";
    $result = mysqli_query($connection, $insert_contact);

    echo '
    <script>
    window.location.replace("../../naamyaa/pages/thankyou.php");
    </script>';

    // here to retriving the data from the database for contact 


}
$contact_data = "SELECT * FROM `contact_data` WHERE 1";
$contact_result = mysqli_query($connection, $contact_data);
$contact_row = mysqli_fetch_array($contact_result);
$location = $contact_row['location'];
$email = $contact_row['email'];
$phone = $contact_row['phone'];
$location_link = $contact_row['location_link'];
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>Contact us | Naamyaa</title>
    <?php include './naamaya.inc/head.php'; ?>
</head>

<body>

    <!-- Header One Start-->
    <?php include './naamaya.inc/header.php'; ?>
    <!-- Header One End-->
    <!-- slide-bar start -->

    <!-- Sidebar for Mobile -->
    <?php include './naamaya.inc/mobile_slider.php'; ?>


    <!-- Sidebar for Laptop -->
    <?php include './naamaya.inc/laptop_slider.php'; ?>
    <!-- slide-bar end -->

    <!-- Main Area Start-->
    <main>
        <!--breadcrumb area start-->

        <section class="breadcrumb_area breadcrumb_overlay" data-background="assets/img/banners/Contactus.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb_section">
                            <ul class="breadcrumb-list volunteer_breadcrumb">
                                <li class="bhas_border"><a href="index.php">Home</a></li>
                                <li><span class="active">Contact</span></li>
                            </ul>
                            <div class="breadcrumb_title">
                                <h2>&nbsp;</h2>
                                <!-- <h2>Get In Touch</h2> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--breadcrumb area end-->

        <!--get_intouch area start -->
        <div class="get_intouch_area pt-120 pb-120" data-background="assets/img/bg/contact_map.png">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-7 order-1 order-lg-0">
                        <div class="contact_section contact_contact bottom_radius0">
                            <form action="#" method="POST">
                                <div class="row">
                                    <div class="col-xxl-6 col-sm-6">
                                        <input name="name" type="text" placeholder="Enter full name">
                                    </div>
                                    <div class="col-xxl-6 col-sm-6">
                                        <input name="email" type="email" placeholder="Enter email address">
                                    </div>
                                    <div class="col-xxl-12">
                                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Enter Message"></textarea>
                                    </div>
                                    <div class="col-xxl-12">
                                        <button name="submit" type="submit" class="contact_btn">Get A Quote</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-5 order-0 order-lg-1">
                        <div class="contact_location_section pl-50 mb-50">
                            <div class="section_title mb-40">
                                <a href="contact.php" class="sub_title sub_title_2">Contact Us</a>
                                <h3 class="title">Get In Touch</h3>
                            </div>
                            <div class="contact_location_wrapper">
                                <div class="single_contact_location theme-6">
                                    <a href="#" class="icon"><i class="far fa-map-marker-alt"></i></a>
                                    <div class="contact_location_text">
                                        <span>Location</span>
                                        <h5 class="contact_address_title"><?php echo $location; ?></h5>
                                    </div>
                                </div>
                                <div class="single_contact_location theme-1">
                                    <a href="/cdn-cgi/l/email-protection#d4bdbab2bb94a3b1b6b1acb5b9a4b8b1fab7bbb9" class="icon"><i class="fal fa-envelope"></i></a>
                                    <div class="contact_location_text">
                                        <span>Email</span>
                                        <a href="mailto:<?php echo $email; ?>" class="contact_address_title"><span class="__cf_email__" data-cfemail="fdb4939b92bd8a989f98859c908d9198d39e9290"><?php echo $email; ?></span></a>


                                    </div>
                                </div>
                                <div class="single_contact_location theme-2">
                                    <a href="tel:789.765.741.69" class="icon"><i class="fal fa-phone"></i></a>
                                    <div class="contact_location_text">
                                        <span>Phone</span>
                                        <a href="tel:<?php $phone; ?>" class="contact_address_title"><?php echo $phone; ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- get_intouch area end -->

        <!--google map area start -->

        <div class="contact_map_area">
            <div class="container-fluid g-0">
                <div class="contact_map">
                    <?php echo $location_link;  ?>
                </div>
            </div>
        </div>

        <!--google map area end -->

    </main>

    <!-- Main Area End-->


    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    <!-- Footer Area Start -->
    <?php include './naamaya.inc/footer.php'; ?>
    <!-- Footer Area End -->

    <?php include './naamaya.inc/foot.php'; ?>

</body>

</html> 