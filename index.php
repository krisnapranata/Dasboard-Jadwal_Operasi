<!DOCTYPE html>
<html lang="en"><!-- Basic -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">   

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Site Metas -->
        <title>Jadwal Operasi RSI YATOFA</title>  
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Site Icons -->
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Pogo Slider CSS -->
        <link rel="stylesheet" href="css/pogo-slider.min.css">
        <!-- Site CSS -->
        <link rel="stylesheet" href="css/style.css">    
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/custom.css">

        <link href="css/icon.css" rel="stylesheet">

        <style>
            h1,h2,p,a{
                font-family: sans-serif;
                font-weight: normal;
            }

            .jam-digital-malasngoding {
                overflow: hidden;
                /*width: 300px;*/
                /*margin: 20px auto;*/
                border: 5px solid #efefef;
            }
            .kotak{
                float: left;
                width: 110px;
                height: 100px;
                background-color: #189fff;
            }
            .jam-digital-malasngoding p {
                color: #fff;
                font-size: 36px;
                text-align: center;
                margin-top: 30px;
            }


        </style>
        <!--[if lt IE 9]>-->
          <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
          <!--<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>-->

        <!--<![endif]-->
        <script src="js/angular.min.js"></script>
    </head>
    <body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">



        <!-- LOADER -->
        <div id="preloader">
            <div class="loader">
                <img src="images/preloader.gif" alt="" />
            </div>
        </div>
        <!--end loader--> 
        <!-- END LOADER -->

        <!-- Start top bar -->
        <div class="main-top">
            <div class="row rounded-circle">

            </div>

        </div>
        <!-- End top bar -->

        <!-- Start header -->
        <header class="top-header">
            <nav class="navbar header-nav navbar-expand-md">

                <a class="navbar-brand" href="index.html"><img src="images/yatofa-logo.png" alt="image" style="width: 250px; height: 75px;"></a>
<!--                <div class="jam-digital-malasngoding">
                    <div class="kotak">
                        <p id="datetime"></p>
                    </div>
                    <div class="kotak">
                        <p id="hari"></p>
                    </div>
                    <div class="kotak">
                        <p id="jam"></p>
                    </div>
                    <div class="kotak">
                        <p id="menit"></p>
                    </div>
                    <div class="kotak">
                        <p id="detik"></p>
                    </div>
                </div>-->
                <script>
                    window.setTimeout("waktu()", 1000);
                    function waktu() {
                    const month = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Augustus", "September", "Oktober", "November", "Desember"];
                    const d = new Date();
                    let name = month[d.getMonth()];
                    const weekday = ["Ahad", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
                    const hd = new Date();
                    let hari = weekday[hd.getDay()];
                    var waktu = new Date();
                    setTimeout("waktu()", 1000);
                    document.getElementById("datetime").innerHTML = name;
                    document.getElementById("hari").innerHTML = hari;
//                    document.getElementById("jam").innerHTML = waktu.getHours();
//                    document.getElementById("menit").innerHTML = waktu.getMinutes();
//                    document.getElementById("detik").innerHTML = waktu.getSeconds();
                    }
//                    function updateDateTime() {
//                        // create a new `Date` object
//                        const now = new Date();
//
//                        // get the current date and time as a string
//                        const currentDateTime = now.toLocaleString();
//
//                        // update the `textContent` property of the `span` element with the `id` of `datetime`
//                        document.querySelector('#datetime').textContent = currentDateTime;
//                    }
//
//                    // call the `updateDateTime` function every second
//                    setInterval(updateDateTime, 1000);
                </script>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link" href=""><img src="images/bpjskes1.jpg" alt="image" style="width: 250px; height: 75px;"></a></li>
                        <li><a class="nav-link" href=""><img src="images/bpjsket1.jpg" alt="image" style="width: 250px; height: 75px;"></a></li>
                        <li><a class="nav-link" href=""><img src="images/jasaraharja1.jpg" alt="image" style="width: 250px; height: 75px;"></a></li>                            
                    </ul>
                </div>
            </nav>
        </header>
        <!-- End header -->
        <!--<hr>-->
        <!-- Start About us -->
        <div id="about" class="about-box" style="padding-top: 2px">
            <div class="about-a1" >
                <!--<div class="container">-->
                <div class="row">
                    <div class="container-fluid">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="row align-items-center about-main-info">
                                <div class="col-lg-12 col-md-12 col-sm-12 " ng-app="myApp" ng-controller="customersCtrl">
                                    </br><!-- comment -->
                                    <!--<i class="material-icons" style="font-size:36px">3d_rotation</i>-->

                                    <table class="table table-striped table-dark table-bordered"  >
                                        <thead style="font-size: 20px;">
                                            <tr align="center">
                                                <th scope="col"><b>PASIEN</b></th>
                                                <th scope="col"><b>UMUR</b></th>
                                                <!--<th scope="col"><b>J.K</b></th>-->
                                                <th scope="col"><b>MULAI</b></th>
                                                <th scope="col"><b>SELESAI</b></th>
                                                <th scope="col"><b>STATUS</b></th>
                                                <th scope="col"><b>OPERASI</b></th>
                                                <th scope="col"><b>OPERATOR</b></th>
                                            </tr>
                                        </thead>
                                        <tbody style="font-size: 28px">
                                            <tr ng-repeat="x in names">
                                                <td scope="row"><i class="material-icons" style="font-size:28px;color:aqua">hotel</i>&nbsp;<b>{{ x.nama}} </b></td>
                                                <td align="center"><i class="material-icons" style="font-size:28px;color:gold">timer</i>&nbsp; <b>{{ x.umur}}</b></td>
                                                <!--<td align="center"><i class="material-icons" style="font-size:28px;color:yellow">group</i>&nbsp;<b>{{ x.jk}}</b></td>-->
                                                <td align="center"><i class="material-icons" style="font-size:28px;color:greenyellow">access_alarm</i>&nbsp;<b>{{ x.jammulai}}</b></td>
                                                <td align="center"><i class="material-icons" style="font-size:28px;color:red">access_alarm</i>&nbsp;<b>{{ x.jamselesai}}</b></td>
                                                <td align="center"><i class="material-icons" style="font-size:28px;color:yellow">beenhere</i>&nbsp;<b>{{ x.status}}</b></td>
                                                <td><i class="material-icons" style="font-size:28px;color:greenyellow">border_color</i>&nbsp;<b>{{ x.nmperawatan}}</b></td>
                                                <td><i class="material-icons" style="font-size:28px;color:greenyellow">loupe</i>&nbsp;<b>{{ x.dokter}}</b></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <script>
                                        var app = angular.module('myApp', []);
                                        app.controller('customersCtrl', function ($scope, $http) {
                                        setInterval(function () {
                                        $http.get("getjadwaloperasi.php")
                                                .then(function (response) {
                                                $scope.names = response.data.records;
                                                });
                                        }, 1000)

                                        });
                                    </script>
                                    </br><!-- comment -->

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <!--<h2 style="font-size: 70px">INSTALASI FARMASI RSI YATOFA <br>MELAYANI ANDA ADALAH KEMULIAAN KAMI</h2>-->
                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>-->
                        <marquee bgcolor="skyblue" style="font-family: impact; font-size:50px; color:#cc0000;" >
                            JADWAL OPERASI RS ISLAM YATOFA MELAYANI ANDA ADALAH KEMULIAAN KAMI
                        </marquee>
                    </div>
                </div>
            </div>

            <!--</div>-->
        </div>
    </div>
    <!-- End About us -->



        <!--<a href="#" id="scroll-to-top" class="new-btn-d br-2"><i class="fa fa-angle-up"></i></a>-->

    <!-- ALL JS FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script> 
    <script src="js/slider-index.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/isotope.min.js"></script>	
    <script src="js/images-loded.min.js"></script>	
    <script src="js/custom.js"></script>
</body>
</html>
