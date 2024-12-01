<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="img/android-icon-48x48.png" type="image/x-icon" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>NPIT Solutions|Rooms</title>

    <!-- Icon css link -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="vendors/stroke-icon/style.css" rel="stylesheet">
    <link href="vendors/flat-icon/flaticon.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Rev slider css -->
    <link href="vendors/revolution/css/settings.css" rel="stylesheet">
    <link href="vendors/revolution/css/layers.css" rel="stylesheet">
    <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
    <link href="vendors/animate-css/animate.css" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="vendors/magnify-popup/magnific-popup.css" rel="stylesheet">
    <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="vendors/bootstrap-selector/bootstrap-select.css" rel="stylesheet">
    <link href="vendors/lightbox/simpleLightbox.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->


    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            '../connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1257673967966242');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1257673967966242&amp;ev=PageView&amp;noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->


</head>

<body>
    <?php
    include "side_icon.php";
    ?>
    <!--================Header Area =================-->
    <?php
    include "header.php";
    ?>
    <?php include "pelanggan.php"; ?>
    <!--================Header Area =================-->
    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_inner_content">
                <h3>Portofolio</h3>
                <ul>
                    <li class="active"><a href="index-2.php">Rooms</a></li>
                    <li><a href="#">Portfolio</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Banner Area =================-->

    <!--================Introduction Area =================-->
    <!-- Mulai Perulangan -->
    <?php foreach ($rumah as $index => $data) : ?>
        <section class="room introduction_area <?= ($index + 1) % 2 == 0 ? 'grey-background' : ''; ?>">
            <div class="container">
                <div class="row introduction_inner">
                    <div class="col-md-7">
                        <div class="introduction_left_text">
                            <div class="intro_title">
                                <h2>Rumah Bapak <?= $data['nama']; ?></h2>
                                <h5><?= $data['alamat']; ?></h5>

                                <table>
                                    <tr>
                                        <th>Luas Tanah</th>
                                        <td><?= $data['tanah']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Luas Bangunan</th>
                                        <td><?= $data['bangunan']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kamar Tidur</th>
                                        <td><?= $data['tidur']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kamar Mandi</th>
                                        <td><?= $data['mandi']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kapasitas Mobil</th>
                                        <td><?= $data['mobil']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kapasitas Pendukung</th>
                                        <td><?= $data['att']; ?></td>
                                    </tr>
                                </table>
                            </div>
                            <a class="enquiry about_btn_b" href="#" data-toggle="modal" data-target="#myModal">Enquiry</a>
                            <a class="book-now about_btn_b" href="#" data-toggle="modal" data-target="#myModal1">Book Now</a>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="introduction_img">
                            <img src="img/home-slider/<?= $data['gambar']; ?>" alt="Foto <?= $data['nama']; ?>">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endforeach; ?>
    <!-- Selesai Perulangan -->
    <!--================End Introduction Area =================-->
    <!--================Introduction Area =================-->
    <!-- <section class=" room introduction_area">
            <div class="container">
                <div class="row introduction_inner">
                    <div class="col-md-7">
                        <div class="introduction_left_text">
                            <div class="intro_title">
                                <h2>Villa  </h2>
                               
                            </div>
                           <h4><span class="color"><del>Rs. 7000</del></span>&nbsp;&nbsp;Rs. 5000 /- Day</h4>
                           <h5>Extra Person Rs. 700</h5><br>
                            <p>Experience the feeling of home in one of the most luxurious resort in Junnar. Every room and suite in Shivneri Fort Valley Resort has been designed with the utmost respect for Nature, combining high-end comfort. Choose your ideal room and start your holiday with us in Junnar.</p>-->
    <!-- <a class="about_btn_b" href="#" >Book Now</a><a class="enquiry about_btn_b" href="#" data-toggle="modal" data-target="#myModal">Enquiry</a> <a class="book-now about_btn_b" href="#" data-toggle="modal" data-target="#myModal3">Book Now</a>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="introduction_img">
                            <img src="img/new-img/room/r6.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
    <!--================End Introduction Area =================-->



    <!--================Footer Area =================-->
    <?php
    include "footer.php";
    ?>
    <!--================End Footer Area =================-->

    <!--================Search Box Area =================-->
    <div class="search_area zoom-anim-dialog mfp-hide" id="test-search">
        <div class="search_box_inner">
            <h3>Search</h3>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><i class="icon icon-Search"></i></button>
                </span>
            </div>
        </div>
    </div>
    <!--================End Search Box Area =================-->
    <section class="android-call-button hidden-md hidden-lg visible-xs visible-sm   ">
        <div class="row">
            <div class="col-xs-4 "><a href="tel:9325756647" class=""><i class="fa fa-phone" aria-hidden="true"></i><strong>
                        Call Now</strong></a></div>
            <div class="col-xs-4 "><a href="https://api.whatsapp.com/send?phone=919325756647" class=""><i
                        class="fa fa-whatsapp" aria-hidden="true"></i><strong>
                        Whatsapp</strong></a></div>
            <div class="col-xs-4 "><a href="mailto:info@shivnerifortvalley.com" class=""><i class="fa fa-envelope"
                        aria-hidden="true"></i>
                    <strong>Enquiry</strong></a></div>
        </div>
    </section>




    <!--================End Footer Area =================-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.2.4.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Rev slider js -->
    <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>

    <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope.pkgd.min.js"></script>
    <script src="vendors/counterup/waypoints.min.js"></script>
    <script src="vendors/counterup/jquery.counterup.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="vendors/bootstrap-selector/bootstrap-select.js"></script>
    <!--        <script src="vendors/lightbox/js/lightbox.min.js"></script>-->
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>

    <!-- instafeed-->
    <script type="text/javascript" src="vendors/instafeed/instafeed.min.js"></script>
    <script type="text/javascript" src="vendors/instafeed/script.js"></script>

    <script src="js/theme.js"></script>

</body>

<div class="container book-now">


    <!-- Modal -->
    <div class="modal " id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" data-toggle="modal" data-target="#myModal">Enquire Now</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                    placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="exampleInputEmail1">Phone Number</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                    placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="exampleInputPassword1">Message</label>
                                <textarea class="form-control" rows="4" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="col-md-7">
                                    <button type="submit" class="btn">Send</button>
                                </div>
                                <div class="col-md-5">
                                    <ul style="text-align:right">
                                        <li style="display:inline;padding:10px"><a
                                                href="https://api.whatsapp.com/send?phone=919325756647"><i class="fa fa-whatsapp"
                                                    style="font-size:30px;color:#4d1b00;margin-left:5px"></i></a></li>
                                        <li style="display:inline"><a href="tel:9325756647" class=""><i class="fa fa-phone"
                                                    style="font-size:30px;color:#4d1b00"></i></a></li>
                                    </ul>
                                </div>


                            </div>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>



    <div class="modal " id="myModal1" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" data-toggle="modal" data-target="#myModal1">Booking Now</h4>
                </div>
                <div class="modal-body">
                    <form action="https://www.shivnerifortvalley.com/payment.php" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" required>
                                <input type="hidden" class="form-control" name="amount" id="amount" value="2400" />
                                <input type="hidden" name="extraamount" class="form-control" id="extraamount" value="299">
                                <input type="hidden" name="room" id="room" class="form-control" class="form-control" value="Valley">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="exampleInputEmail1">Phone Number</label>
                                <input type="text" class="form-control" name="phone" id="phone" aria-describedby="emailHelp"
                                    maxlength="10" required>
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Arrival Date</label>
                                <div class="form-group">
                                    <div class='input-group date datetimepicker'>
                                        <input type='text' name="arrival_date" id="arrival_date" class="form-control" / required>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class='col-md-6'>
                                <label for="exampleInputEmail1">Departure Date</label>
                                <div class="form-group">
                                    <div class='input-group date datetimepicker'>
                                        <input type='text' name="departure_date" id="departure_date" class="form-control" / required>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="">Adults</label>
                                <select name="adults" id="adults" class="form-control" required>
                                    <option value="">Select Adults</option>
                                    <option value="1">Adults</option>
                                    <option value="2">Adults Two</option>
                                    <option value="3">Adults Three</option>
                                </select>
                            </div>


                            <div class="col-md-6">
                                <label for="">Children</label>
                                <select name="children" id="children" class="form-control" required>
                                    <option value="">Select Children</option>
                                    <option value="1">Children</option>
                                    <option value="2">Children Two</option>
                                    <option value="3">Children Three</option>
                                </select>
                            </div>

                        </div>

                        <button type="submit" class="btn">Book Now</button>
                    </form>
                </div>

            </div>

        </div>
    </div>
    <div class="modal " id="myModal2" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" data-toggle="modal" data-target="#myModal1">Booking Now</h4>
                </div>
                <div class="modal-body">
                    <form action="https://www.shivnerifortvalley.com/payment.php" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" required>
                                <input type="hidden" class="form-control" name="amount" id="amount" value="1999" />
                                <input type="hidden" name="extraamount" id="extraamount" value="299" />
                                <input type="hidden" name="room" id="room" class="form-control" value="Lawn">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="exampleInputEmail1">Phone Number</label>
                                <input type="text" class="form-control" name="phone" id="phone" aria-describedby="emailHelp"
                                    maxlength="10" required>
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Arrival Date</label>
                                <div class="form-group">
                                    <div class='input-group date datetimepicker'>
                                        <input type='text' name="arrival_date" id="arrival_date" class="form-control" / required>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class='col-md-6'>
                                <label for="exampleInputEmail1">Departure Date</label>
                                <div class="form-group">
                                    <div class='input-group date datetimepicker'>
                                        <input type='text' name="departure_date" id="departure_date" class="form-control" / required>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="">Adults</label>
                                <select name="adults" id="adults" class="form-control" required>
                                    <option value="">Select Adults</option>
                                    <option value="1">Adults</option>
                                    <option value="2">Adults Two</option>
                                    <option value="3">Adults Three</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="">children</label>
                                <select name="children" id="children" class="form-control" required>
                                    <option value="">Select Children</option>
                                    <option value="1">Children</option>
                                    <option value="2">Children Two</option>
                                    <option value="3">Children Three</option>
                                </select>
                            </div>

                        </div>


                        <button type="submit" class="btn">Book Now</button>
                    </form>
                </div>

            </div>

        </div>
    </div>
    <div class="modal " id="myModal3" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" data-toggle="modal" data-target="#myModal1">Booking Now</h4>
                </div>
                <div class="modal-body">
                    <form action="https://www.shivnerifortvalley.com/payment.php" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" required>
                                <input type="hidden" class="form-control" name="amount" id="amount" value="4000" />
                                <input type="hidden" name="extraamount" id="extraamount" value="299" />
                                <input type="hidden" name="room" id="room" class="form-control" value="Villa">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="exampleInputEmail1">Phone Number</label>
                                <input type="text" class="form-control" name="phone" id="phone" aria-describedby="emailHelp"
                                    maxlength="10" required>
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Arrival Date</label>
                                <div class="form-group">
                                    <div class='input-group date datetimepicker'>
                                        <input type='text' name="arrival_date" id="arrival_date" class="form-control" / required>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class='col-md-6'>
                                <label for="exampleInputEmail1">Departure Date</label>
                                <div class="form-group">
                                    <div class='input-group date datetimepicker'>
                                        <input type='text' name="departure_date" id="departure_date" class="form-control" / required>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="">Adults</label>
                                <select name="adults" id="adults" class="form-control" required>
                                    <option value="">Select Adults</option>
                                    <option value="1">Adults</option>
                                    <option value="2">Adults Two</option>
                                    <option value="3">Adults Three</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="">children</label>
                                <select name="children" id="children" class="form-control" required>
                                    <option value="">Select Children</option>
                                    <option value="1">Children</option>
                                    <option value="2">Children Two</option>
                                    <option value="3">Children Three</option>
                                </select>
                            </div>

                        </div>

                        <button type="submit" class="btn">Book Now</button>
                    </form>
                </div>

            </div>

        </div>
    </div>

</div>
<script type="text/javascript">
    $(function() {
        $('.datetimepicker').datetimepicker();
    });
</script>

</html>