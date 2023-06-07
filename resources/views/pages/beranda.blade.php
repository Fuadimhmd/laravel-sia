<!doctype html>
<!--[if lt IE 7]>
        <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="id" > <![endif]-->
<!--[if IE 7]>
        <html class="no-js lt-ie9 lt-ie8" lang="id" >        <![endif]-->
<!--[if IE 8]>
        <html class="no-js lt-ie9" lang="id" >               <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="id">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="SIASIK-2023">
    <meta name="description" content="Aplikasi sekolah berbasis digital">
    <meta name="generator" content="HubSpot">
    <title>{{ $data_lembaga->nama_lembaga }}</title>
    <link rel="icon" href="{{ $data_lembaga->getLogo() }}" type="image/x-icon">
    <link rel="shortcut icon" href="">
    <meta property="og:description" content="Aplikasi sekolah berbasis digital">
    <meta property="og:title" content="SIASIK Application">
    <meta name="twitter:description" content="Aplikasi sekolah berbasis digital">
    <meta name="twitter:title" content="SIASIK Application">

    <style>
        a.cta_button {
            -moz-box-sizing: content-box !important;
            -webkit-box-sizing: content-box !important;
            box-sizing: content-box !important;
            vertical-align: middle
        }

        .hs-breadcrumb-menu {
            list-style-type: none;
            margin: 0px 0px 0px 0px;
            padding: 0px 0px 0px 0px
        }

        .hs-breadcrumb-menu-item {
            float: left;
            padding: 10px 0px 10px 10px
        }

        .hs-breadcrumb-menu-divider:before {
            content: '›';
            padding-left: 10px
        }

        .hs-featured-image-link {
            border: 0
        }

        .hs-featured-image {
            float: right;
            margin: 0 0 20px 20px;
            max-width: 50%
        }

        @media (max-width: 568px) {
            .hs-featured-image {
                float: none;
                margin: 0;
                width: 100%;
                max-width: 100%
            }
        }

        .hs-screen-reader-text {
            clip: rect(1px, 1px, 1px, 1px);
            height: 1px;
            overflow: hidden;
            position: absolute !important;
            width: 1px
        }
    </style>

    <link rel="stylesheet" href="{{ asset('/beranda/module_39227318886_header-homepage.min.css') }}">
    <link rel="stylesheet" href="/beranda/module_70765523749_Module_Banner_Paket_-_RG_Homepage_2022_AB_Test.min.css">
    <link rel="stylesheet"
        href="/beranda/module_70765523748_Module_Section_Kejar_Cita2mu_Testimoni_Pengguna_-_RG_Homepage_2022_AB_Test.css">
    <link rel="stylesheet" href="/beranda/module_70765523755_Module_Section_Benefit_-_RG_Homepage_2022_AB_Test.min.css">
    <link rel="stylesheet"
        href="/beranda/module_70765523744_Module_Section_Perbandingan_Paket_-_RG_Homepage_2022_AB_Test.css">
    <link rel="stylesheet" href="/beranda/module_71394810234_content_homepage_RG_2021_for_2022_AB_Test_versi_B.css">
    <link rel="stylesheet" href="/beranda/module_71418200646_Module_Promo_Yang_Seru_-_RG_Homepage_2022_AB_Test.min.css">
    <link rel="stylesheet" href="/beranda/module_71421712188_Module_Paling_Baru_-_RG_Homepage_2022_AB_Test.min.css">
    <link rel="stylesheet" href="/beranda/module_62919019934_Module_SEO_Box_Opsi_2_2022.min.css">
    <link rel="stylesheet" href="/beranda/module_70869092503_Module_popup_-_Ruangguru_Homepage_AB_Test.min.css">
    <link rel="stylesheet" href="/beranda/module_39981680119_Footer-ruangguru-2021-v2.min.css">
    <meta name="publisher" content="SIASIK">
    <meta property="og:url" content="https://www.siasik.co.id">
    <meta name="twitter:card" content="summary">
    <meta http-equiv="content-language" content="id">
    <link rel="stylesheet" href="/beranda/layout.min.css">
    <link rel="stylesheet" href="/beranda/SOP_Style.min.css">
</head>

<body class="   hs-content-id-39403979750 hs-landing-page hs-page " style="">
    <div class="header-container-wrapper">
        <div class="header-container container-fluid">

            <div class="row-fluid-wrapper row-depth-1 row-number-1 ">
                <div class="row-fluid ">
                    <div class="span12 widget-span widget-type-custom_widget " style=""
                        data-widget-type="custom_widget" data-x="0" data-w="12">
                        <div id="hs_cos_wrapper_module_164015251670411"
                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style=""
                            data-hs-cos-general-type="widget" data-hs-cos-type="module">
                            <link rel="stylesheet" href="/beranda/bootstrap.min.css">


                            <nav class="ruangguru-header">
                                <div class="page-center">
                                    <div class="container-ruangguru-header">
                                        <div class="navigation__left">
                                            <div class="hamburger-icon">
                                                <img src="/beranda/image/ic_hamburger_black.svg"
                                                    alt="Dropdown Navigation Icon">
                                            </div>

                                            <a href="/">
                                                <div class="logo-header">
                                                    <img style="width:30px;10px;" src="{{ $data_lembaga->getLogo() }}">
                                                </div>
                                            </a>
                                        </div>

                                        <div class="navigation__content">
                                            <div id="produk" aria-expanded="false">
                                                <a>{{ $data_lembaga->nama_lembaga }}</a>
                                            </div>

                                            <div class="navig-link navig-link-dropdown" id="services">
                                                <a>Administrasi</a>
                                            </div>
                                            <div class="navig-dropdown-area" id="services_item" aria-expanded="false">
                                                <div class="item-services">
                                                    <a href="login">Login Admin</a>
                                                </div>
                                                <div class="item-services">
                                                    <a href="loginbendahara">Login Bendahara</a>
                                                </div>
                                                <!-- <div class="item-services">
                            <a href="loginsiswa">Login Siswa</a>
                        </div>
                        <div class="item-services">
                            <a href="loginguru">Login Guru</a>
                        </div> -->
                                                <!-- <div class="item-services">
                            <a href="loginresepsionis">Login E-Resepsionis</a>
                        </div> -->

                                                <!--<div class="item-services">
                            <a href="loginekinerja">Login E-Kinerja</a>
                        </div>-->
                                            </div>
                                            <div class="navig-link" id="program">
                                                <a href="beranda/bukutamu">Buku Tamu</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>


                            <script src="/beranda/jquery-3.5.1.slim.min.js"></script>
                            <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
                            <script src="/beranda/popper.min.js"></script>
                            <script src="/beranda/bootstrap.min.js"></script>

                            <script src="/beranda/jquery.min.js"></script>
                        </div>

                    </div>
                    <!--end widget-span -->
                </div>
                <!--end row-->
            </div>
            <!--end row-wrapper -->

        </div>
        <!--end header -->
    </div>
    <!--end header wrapper -->

    <div class="body-container-wrapper">
        <div class="body-container container-fluid">

            <div class="row-fluid-wrapper row-depth-1 row-number-1 ">
                <div class="row-fluid ">
                    <div class="span12 widget-span widget-type-custom_widget " style=""
                        data-widget-type="custom_widget" data-x="0" data-w="12">
                        <div id="hs_cos_wrapper_module_1649750487057153"
                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style=""
                            data-hs-cos-general-type="widget" data-hs-cos-type="module">
                            <link rel="stylesheet" type="text/css" href="/beranda/slick.css">
                            <link rel="stylesheet" type="text/css" href="/beranda/slick-theme.css">
                            <script src="/beranda/jquery.min.js"></script>
                            <script src="/beranda/slick.min.js"></script>
                            <script src="/beranda/axios.min.js"></script>
                            <div class="spacer-rg"></div>
                            <div class="notif-biru">
                                <div class="page-center">
                                    <div class="container-notif">
                                        <div class="text-notif">
                                            <a href="#">
                                                <p class="font-notif">
                                                    <marquee>{{ $data_lembaga->pesanberjalan }}</marquee>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="close-notif">
                                            <img id="closenotif" src="/beranda/image/ic_close_white.svg"
                                                alt="close">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hero-banner">
                                <div class="page-center">
                                    <div class="container-hero">
                                        <div class="hero__left">
                                            <p class="font-title">Layanan Sekolah berbasis digital</p>
                                            <h3 class="font-banner">Platform SIASIK Layanan Digital
                                                <b>{{ $data_lembaga->nama_lembaga }}</b>
                                            </h3>
                                            <div class="wrapping-button-hero">
                                                <a href="loginsiswa"><button class="btn-banding-paket">Login Akun
                                                        Siswa
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img
                                                            src="/beranda/image/carbon_arrow-right.svg"
                                                            alt="arrow"></button>
                                                </a>
                                                &nbsp;
                                                <a href="{{ route('guru.login') }}"><button
                                                        class="btn-banding-paket">Login Akun Guru
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img
                                                            src="/beranda/image/carbon_arrow-right.svg"
                                                            alt="arrow"></button>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="hero__right">
                                            <div class="img-hero">
                                                <img load="lazy"
                                                    src="{{ asset('storage/upload/d46e6ec320de16dea69c4dbf1a426c4f.png') }}"
                                                    alt="illustration">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="page-center">
                                <div class="box-flash-sale">

                                    <div class="promo-vutton">
                                        <div class="row-one">
                                            <div>
                                                <h2 class="card-title c-t-2 c-t-grad-2 mb-0"><img
                                                        src="/beranda/image/ic-check-red.svg" alt="Icon Check Red">
                                                    Tentang SIASIK</h2>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="promo-bottom">
                                        <div class="promo-bottom-tex col-xl-9 col-lg-12t">
                                            <p style="font-family:verdana; font-size:18px;">Aplikasi SIASIK,mewujudkan
                                                gerbang data terpusat yang dapat di kontrol dan dimonitoring serta
                                                memvalidasi kebenaran data dalam proses melakukan pengambilan keputusan
                                                dilingkungan Sekolah</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="flash-sale">
                                <div class="page-center">
                                    <div class="container-flash-sale">
                                        &nbsp;
                                    </div>
                                </div>
                            </div>

                            <!--ONREADY-->
                            <script>
                                var div_countdown = 0;
                                var theintervals = [];
                                var finished_api_count;
                                var current_api_count;
                                // var countdowns = [];
                                $(document).ready(function() {
                                    //$(".card-paket").parent().parent().attr("style", "display:none");
                                    //$(".jenjang-nav[data-jenjang='sda']").trigger("click");

                                    kliks($(".jenjang-nav[data-jenjang='sma']"));
                                    //create_interval();
                                    $(".card-paket.aktif").parent().parent().attr("style",
                                        "display:block");

                                    if ($(".promo-title").attr("style") == "display: none;") {

                                    }


                                });

                                // function stop_interval() {
                                //   //console.log("stopped");
                                //   clearInterval(theintervals[0]);
                                //   clearTimeout(theintervals[2]);
                                //   theintervals[1] = setTimeout(function () {
                                //     create_interval();
                                //   }, 3000);
                                // }



                                function initializeClockss(id, endtime, html, finishTimeWithMillisecond, currentTimeWithMillisecond) {
                                    finished_api_count = finishTimeWithMillisecond;
                                    current_api_count = currentTimeWithMillisecond;
                                    //     console.log(finishTimeWithMillisecond + " " + currentTimeWithMillisecond)
                                    iter_count = iter_count + 1;
                                    //console.log("total saat initialize " + iter_count);
                                    if (iter_count == 1) {

                                    } else {
                                        clearInterval(intervals_countdown[iter_count - 1]);
                                        //console.log("intervals cleared " + parseInt(iter_count));
                                    }
                                    $("#flashsale").html(html);
                                    total[iter_count] = finishTimeWithMillisecond - currentTimeWithMillisecond;
                                    if (document.getElementById(id)) {
                                        const clock = document.getElementById(id);
                                        const daysSpan = clock.querySelector('.days');
                                        const hoursSpan = clock.querySelector('.hours');
                                        const minutesSpan = clock.querySelector('.minutes');
                                        //const secondsSpan = clock.querySelector('.seconds');

                                        function updateClock() {
                                            //const t = getTimeRemainingss(endtime);
                                            var t = getTimeRemainingss(endtime);
                                            // const harii = t.days;
                                            // const jamm = t.hours;
                                            // const gabungg = (harii * 24) + jamm;
                                            // console.log("ini gabung " + gabungg);
                                            // console.log("ini days " + t.days);
                                            // console.log("ini hours " + t.hours);
                                            // console.log(t.gabung);
                                            daysSpan.innerHTML = ('0' + t.gabung).slice(-2) + " jam : ";
                                            hoursSpan.innerHTML = ('0' + t.minutes).slice(-2) + " menit : ";
                                            minutesSpan.innerHTML = ('0' + t.seconds).slice(-2) + " detik";
                                            //secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);


                                        }
                                        intervals_countdown[iter_count] = setInterval(updateClock, 1000);
                                        //setInterval(updateClock, 1000);

                                    }
                                }

                                // function stop_interval_long() {
                                //   //console.log("stopped long");
                                //   clearInterval(theintervals[0]);
                                //   clearTimeout(theintervals[1]);
                                //   clearTimeout(theintervals[2]);
                                //   theintervals[2] = setTimeout(function () {
                                //     create_interval();
                                //   }, 30000);
                                // }

                                //   function create_interval() {
                                //     var jenjangs = $(".jenjang-nav.aktif").attr("data-jenjang");
                                //     var card_aktif = 8;
                                //     if (card_aktif == 0) {
                                //       card_aktif = 4;
                                //     }
                                //     theintervals[0] = setInterval(function () {
                                //       card_aktif = card_aktif - 1;
                                //       //console.log(card_aktif);
                                //       if (card_aktif == 0) {
                                //         if (jenjangs == "utbk") {
                                //           kliks($(".jenjang-nav[data-jenjang='" + "sda" + "']"));
                                //         } else {
                                //           kliks($(".jenjang-nav[data-jenjang='" + jenjangs + "']").next());
                                //         }
                                //       }


                                //     }, 5000);
                                //   }
                            </script>
                            <!--CLOSE NOTIF-->
                            <script>
                                $("#closenotif").click(function() {
                                    $(".notif-biru").hide();
                                })
                            </script>
                            <!--COUNTDOWN-->
                            <script>
                                // var countdowns = [];
                                //Script Countdown 1
                                function getTimeRemainingss(endtime) {
                                    total[iter_count] = total[iter_count] - 200;
                                    var tottals = total[iter_count];
                                    //const total = Date.parse(endtime) - Date.parse(new Date());
                                    const seconds = Math.floor((tottals / 1000) % 60);
                                    const minutes = Math.floor((tottals / 1000 / 60) % 60);
                                    const hours = Math.floor((tottals / (1000 * 60 * 60)) % 24);
                                    const days = Math.floor(tottals / (1000 * 60 * 60 * 24));
                                    const gabung = hours + (days * 24);
                                    return {
                                        tottals,
                                        days,
                                        hours,
                                        gabung,
                                        minutes,
                                        seconds
                                    };
                                }
                            </script>
                            <!--SLICK ALL-->
                            <script>
                                var all_the_slick = [];
                                $(".card-paket-wrap").each(function(index) {

                                    //pengaturan slick dibagi-bagi menjadi 3 pengaturan tergantung dari width device
                                    if (window.matchMedia("(max-width: 767.5px)").matches) {
                                        var slick_inits = $("#" + $(this).attr("id")).slick({
                                            centerMode: false,
                                            initialSlide: 0,
                                            draggable: true,
                                            infinite: false,
                                            dots: false,
                                            variableWidth: true,
                                            slidesToShow: 1,
                                            slidesToScroll: 1,
                                            autoplay: false,
                                            speed: 300,
                                            arrows: true,
                                            prevArrow: `<button type="button" class="slick-prev">
          <img src="/beranda/image/prevnonaktif.svg" class="nonaktif">
          <img src="/beranda/image/prevaktif.svg" class="aktif">
          </button>`,
                                            nextArrow: `<button type="button" class="slick-next">
          <img src="/beranda/image/nextnonaktif.svg" class="nonaktif">
          <img src="/beranda/image/nextaktif.svg" class="aktif">
          </button>`,

                                        });
                                    } else if (window.matchMedia("(max-width: 1024px)").matches) {
                                        var slick_inits = $("#" + $(this).attr("id")).slick({
                                            centerMode: false,
                                            initialSlide: 0,
                                            draggable: true,
                                            infinite: false,
                                            dots: false,
                                            variableWidth: true,
                                            slidesToShow: 2,
                                            slidesToScroll: 1,
                                            autoplay: false,
                                            speed: 300,
                                            arrows: true,
                                            prevArrow: `<button type="button" class="slick-prev">
          <img src="/beranda/image/prevnonaktif.svg" class="nonaktif">
          <img src="/beranda/image/prevaktif.svg" class="aktif">
          </button>`,
                                            nextArrow: `<button type="button" class="slick-next">
          <img src="/beranda/image/nextnonaktif.svg" class="nonaktif">
          <img src="/beranda/image/nextaktif.svg" class="aktif">
          </button>`,
                                            // responsive: [{
                                            //   breakpoint: 1024.999,
                                            //   settings: {
                                            //     slidesToShow: 2,
                                            //     slidesToScroll: 1,
                                            //     arrows: false,
                                            //     variableWidth: false
                                            //   }
                                            // }, {
                                            //   breakpoint: 767.5,
                                            //   settings: {
                                            //     slidesToShow: 1,
                                            //     slidesToScroll: 1,
                                            //     arrows: false,
                                            //     variableWidth: false
                                            //   }
                                            // }]
                                        });
                                    } else {
                                        var slick_inits = $("#" + $(this).attr("id")).slick({
                                            centerMode: false,
                                            initialSlide: 0,
                                            draggable: true,
                                            infinite: false,
                                            dots: false,
                                            variableWidth: true,
                                            slidesToShow: 3,
                                            slidesToScroll: 1,
                                            autoplay: false,
                                            speed: 300,
                                            arrows: true,
                                            prevArrow: `<button type="button" class="slick-prev">
          <img src="/beranda/image/prevnonaktif.svg" class="nonaktif">
          <img src="/beranda/image/prevaktif.svg" class="aktif">
          </button>`,
                                            nextArrow: `<button type="button" class="slick-next">
          <img src="/beranda/image/nextnonaktif.svg" class="nonaktif">
          <img src="/beranda/image/nextaktif.svg" class="aktif">
          </button>`,
                                            // responsive: [{
                                            //   breakpoint: 1024.999,
                                            //   settings: {
                                            //     slidesToShow: 2,
                                            //     slidesToScroll: 1,
                                            //     arrows: false,
                                            //     variableWidth: false
                                            //   }
                                            // }, {
                                            //   breakpoint: 767.5,
                                            //   settings: {
                                            //     slidesToShow: 1,
                                            //     slidesToScroll: 1,
                                            //     arrows: false,
                                            //     variableWidth: false
                                            //   }
                                            // }]
                                        });
                                    }

                                    all_the_slick.push(slick_inits); //inisiasi slick untuk setiap jenjang dimasukkan ke dalam array
                                });
                            </script>
                            <!--KLIK KATEGORI FLASH SALE-->
                            <script>
                                $(".jenjang-nav").click(function() {
                                    //console.log("klik");
                                    kliks($(this));
                                    // setTimeout(function () {
                                    //   stop_interval_long(); //fungsi yang digunakan untuk menghentikan tab lebih lama untuk berpindah
                                    // }, 500);
                                });

                                function kliks(thiss) {
                                    $(".loading-paket").show();
                                    $(".nodata").hide();
                                    $(".jenjang-nav").removeClass("aktif");
                                    $(".card-paket").removeClass("aktif");
                                    $(".card-paket-wrap").removeClass("aktif");

                                    thiss.addClass("aktif");
                                    $(".card-paket[data-jenjang='" + thiss.attr("data-jenjang") + "']").addClass("aktif");

                                    var data = klik_show_card(thiss.attr("data-jenjang")); //memanggil fungsi untuk memanggil API

                                    // setTimeout(function () {
                                    //   stop_interval(); //fungsi untuk mereset perhitungan waktu untuk pindah tab jenjang ke tab jenjang berikutnya
                                    // }, 500);
                                }
                            </script>
                        </div>

                    </div>
                    <!--end widget-span -->
                </div>
                <!--end row-->
            </div>
            <!--end row-wrapper -->

            <div class="row-fluid-wrapper row-depth-1 row-number-2 ">
                <div class="row-fluid ">
                    <div class="span12 widget-span widget-type-custom_widget " style=""
                        data-widget-type="custom_widget" data-x="0" data-w="12">
                        <div id="hs_cos_wrapper_module_1649651296448188"
                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style=""
                            data-hs-cos-general-type="widget" data-hs-cos-type="module">
                            <style>
                            </style>

                            <link rel="stylesheet" type="text/css" href="/beranda/slick.css">
                            <link rel="stylesheet" type="text/css" href="/beranda/slick-theme.css">

                            <section id="section-kejar-cita2">
                                <div class="row px-0 pb-0 pt-c-r">
                                    <div class="col-12 pt-4 pb-4">
                                        <div class="page-center">
                                            <div class="row px-0 pt-4 pb-0">
                                                <div class="col-12 mb-4">
                                                    <div class="card bg-transparent border-0">
                                                        <div
                                                            class="card-header bg-transparent border-0 text-center px-0 my-4">
                                                            <h2 class="card-title c-t-2 c-t-grad-2 mb-0">
                                                                Video Profil Sekolah
                                                            </h2>
                                                        </div>
                                                        <div class="card-body text-center px-0">
                                                            <div
                                                                class="d-flex justify-content-center align-items-center">
                                                                <div id="target-vkc2"
                                                                    class="d-flex justify-content-center align-items-center"
                                                                    data-channel="video" data-video-url="">
                                                                    <iframe class="w-100" height="380"
                                                                        src="{{ $data_lembaga->video_profil }}"
                                                                        class="video_p"
                                                                        alt="Kejar cita-citamu bersama ruangguru"></iframe>
                                                                    <img loading="lazy"
                                                                        src="/beranda/image/img-play-btn-vkc2.png"
                                                                        class="video-ply-btn" alt="play button">
                                                                </div>
                                                            </div>

                                                            <div class="mt-4 mt-xl-0">
                                                                <div class="card c-f-kc2 border-0 text-left posit-1">
                                                                    <div class="card-body p-2">
                                                                        <p class="card-title mb-1">
                                                                            <span
                                                                                class="fpVal">{{ $count_siswa }}</span>
                                                                        </p>
                                                                        <p class="card-text">
                                                                            Peserta Didik
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="card c-f-kc2 border-0 text-left posit-2">
                                                                    <div class="card-body p-2">
                                                                        <p class="card-title mb-1">
                                                                            9.6<span>/10</span>
                                                                        </p>
                                                                        <p class="card-text">
                                                                            Tingkat kepuasan <br>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="card c-f-kc2 border-0 text-left posit-3">
                                                                    <div class="card-body p-2">
                                                                        <p class="card-title mb-1">
                                                                            <span
                                                                                class="fpVal">{{ $count_guru }}</span>
                                                                        </p>
                                                                        <p class="card-text">
                                                                            Guru Dan Tendik
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="card c-f-kc2 border-0 text-left posit-4">
                                                                    <div class="card-body p-2">
                                                                        <p class="card-title mb-1">
                                                                            90%
                                                                        </p>
                                                                        <p class="card-text">
                                                                            Siswa <br>diterima Kerja
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 pt-4 mt-4">
                                                    <div class="card bg-transparent border-0">
                                                        <div
                                                            class="card-header bg-transparent border-0 text-center px-0">
                                                            <h2 class="card-title c-t-2 mb-4 mb-md-0 c-t-c2">
                                                                Data Guru Dan Karyawan
                                                                <!--Siswa SMA yang menggunakan Ruangguru berpeluang 4x lebih tinggi diterima di PTN-->
                                                            </h2>

                                                        </div>
                                                        <div class="card-body px-0">
                                                            <div
                                                                class="row row-cols-1 row-cols-md-4-0 px-0 pb-0 slick-testimoni-vkc2 d-none">




                                                                <div class="col mt-c-3 h-100">
                                                                    <div
                                                                        class="card border-0 card-c-t-testimoni h-100">
                                                                        <!--
                                                <img src="..." class="card-img-top" alt="...">
                                                -->
                                                                        <div class="card-body">
                                                                            <div class="avatar mt-min-c">
                                                                                <!--css-build:me-->
                                                                                <img loading="lazy"
                                                                                    src="{{ asset('upload/fotoguru/foto_guru') }}"
                                                                                    width="80" height="80"
                                                                                    class="img-fluid" alt=""
                                                                                    srcset="upload/fotoguru/foto_guru; ?> 80w, upload/fotoguru/foto_guru; ?> 120w, upload/fotoguru/foto_guru; ?> 160w, upload/fotoguru/foto_guru; ?> 200w, upload/fotoguru/foto_guru; ?> 240w"
                                                                                    sizes="(max-width: 80px) 100vw, 80px">
                                                                            </div>
                                                                            <p
                                                                                class="card-title c-t-testimoni nama-testimoni mt-3">
                                                                                nama_guru; ?>
                                                                            </p>

                                                                            <p class="c-l-testimoni">
                                                                                Guru namamapel; ?>
                                                                            </p>


                                                                            <p><span data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;SIASIK Membantu saya dalam mengajar dan dapat memudahkan saya membuat materi secara digital dimanapun dan kapanpun&quot;}"
                                                                                    data-sheets-userformat="{&quot;2&quot;:1326013,&quot;3&quot;:{&quot;1&quot;:0},&quot;5&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;7&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;8&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;10&quot;:1,&quot;11&quot;:4,&quot;12&quot;:0,&quot;14&quot;:{&quot;1&quot;:3,&quot;3&quot;:1},&quot;15&quot;:&quot;Poppins&quot;,&quot;16&quot;:10,&quot;21&quot;:0,&quot;23&quot;:1}">SIASIK
                                                                                    Membantu saya dalam mengajar dan
                                                                                    dapat memudahkan saya membuat materi
                                                                                    secara digital dimanapun dan
                                                                                    kapanpun</span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>



                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>



                            <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
                            <script src="/beranda/slick.min.js"></script>
                            <script src="/beranda/modal-video.js"></script>
                            <script src="/beranda/jquery-modal-video-min.js"></script>

                            <script>
                                $j3 = jQuery.noConflict();
                            </script>
                        </div>

                    </div>
                    <!--end widget-span -->
                </div>
                <!--end row-->
            </div>
            <!--end row-wrapper -->

            <div class="row-fluid-wrapper row-depth-1 row-number-3 ">
                <div class="row-fluid ">
                    <div class="span12 widget-span widget-type-custom_widget " style=""
                        data-widget-type="custom_widget" data-x="0" data-w="12">
                        <div id="hs_cos_wrapper_module_1649651610434220"
                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style=""
                            data-hs-cos-general-type="widget" data-hs-cos-type="module">
                            <!-- section benefit -->
                            <div class="benefits">
                                <div class="page-center">
                                    <div class="container-benefits">
                                        <div class="benefits-left">
                                            <h2>
                                                Apa saja yang bisa kamu dapatkan di SIASIK?
                                            </h2>
                                            <div class="boxleft-benefits">
                                                <h3>
                                                    Konten belajar berkualitas
                                                </h3>
                                                <p class="content-boxleft-benefits">
                                                    dirancang oleh guru-guru disekolah agar kamu dapat lebih mudah
                                                    memahami materi belajar
                                                </p>
                                                <p class="text-boxleft-benefits">
                                                    Apa saja konten belajarnya?
                                                </p>
                                                <div class="boxleft-item-wrap">
                                                    <div class="boxleft-item">
                                                        <img src="/beranda/image/WEBBANNERASSETS_5.png"
                                                            alt="icon video belajar adaftif">
                                                        <p>
                                                            Video belajar adaptif
                                                        </p>
                                                    </div>
                                                    <div class="boxleft-item">
                                                        <img src="https://www.ruangguru.com/hubfs/00%20-%20Homepage%20Ruangguru%202022/Asset%20Benefit/update/WEB%20BANNER%20ASSETS_6.png"
                                                            alt="icon Kuis di tiap video">
                                                        <p>
                                                            Kuis di tiap video
                                                        </p>
                                                    </div>

                                                    <div class="boxleft-item">
                                                        <img src="https://www.ruangguru.com/hubfs/00%20-%20Homepage%20Ruangguru%202022/Asset%20Benefit/update/WEB%20BANNER%20ASSETS_7.png"
                                                            alt="icon Rangkuman &amp; infografik">
                                                        <p>
                                                            Rangkuman &amp; infografik
                                                        </p>
                                                    </div>
                                                    <div class="boxleft-item">
                                                        <img src="https://www.ruangguru.com/hubfs/00%20-%20Homepage%20Ruangguru%202022/Asset%20Benefit/update/WEB%20BANNER%20ASSETS_8.png"
                                                            alt="icon Kuis akhir di tiap subbab">
                                                        <p>
                                                            Kuis akhir di tiap subbab
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="benefits-mid">
                                            <div class="midtop-benefits">
                                                <h3>
                                                    Materi soal untuk persiapan ujian
                                                </h3>
                                                <p>
                                                    Beragam fitur latihan membantu kamu mendalami materi persiapan PTS,
                                                    PAS, dan UTBK
                                                </p>
                                                <img src="https://www.ruangguru.com/hubfs/00%20-%20Homepage%20Ruangguru%202022/Asset%20Benefit/update/WEB%20BANNER%20ASSETS_9.png"
                                                    alt="image persiapan ujian">
                                            </div>
                                            <div class="midbottom-benefits">
                                                <h3>
                                                    Materi pembelajaran digial
                                                </h3>
                                                <p>

                                                </p>
                                                <img src="https://www.ruangguru.com/hubfs/00%20-%20Homepage%20Ruangguru%202022/Asset%20Benefit/update/WEB%20BANNER%20ASSETS_11.png"
                                                    alt="image solusi soal sulitmu dengan roboguru">
                                            </div>

                                        </div>
                                        <div class="benefits-right">
                                            <div class="righttop-benefits">
                                                <h3>
                                                    Kelas online yang seru dan interaktif
                                                </h3>
                                                <p>
                                                    Belajar langsung sama <b>Guru Kelas</b> sekaligus dengan teman-teman
                                                    kelas kamu !
                                                </p>
                                                <img src="https://www.ruangguru.com/hubfs/00%20-%20Homepage%20Ruangguru%202022/Asset%20Benefit/update/WEB%20BANNER%20ASSETS_10.png"
                                                    alt="image Kelas online yang seru dan interaktif">
                                            </div>

                                            <div class="rightbottom-benefits">
                                                <h3>
                                                    Pembelajaran mengenai pengetahuan kejuruan
                                                </h3>
                                                <p>
                                                    Teknik Komputer dan Jaringan, Teknik Kendaraan Ringan dan Otomotif
                                                </p>
                                                <img src="https://www.ruangguru.com/hubfs/00%20-%20Homepage%20Ruangguru%202022/Asset%20Benefit/update/WEB%20BANNER%20ASSETS_12.png"
                                                    alt="image Simulasi UTBK dengan Tryout di ruanguji">
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--end widget-span -->
                </div>
                <!--end row-->
            </div>
            <!--end row-wrapper -->

            <div class="row-fluid-wrapper row-depth-1 row-number-4 ">
                <div class="row-fluid ">
                    <div class="span12 widget-span widget-type-custom_widget " style=""
                        data-widget-type="custom_widget" data-x="0" data-w="12">
                        <div id="hs_cos_wrapper_module_1649651718954246"
                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style=""
                            data-hs-cos-general-type="widget" data-hs-cos-type="module">
                            <link rel="stylesheet" type="text/css" href="/beranda/slick.css">
                            <link rel="stylesheet" type="text/css" href="/beranda/slick-theme.css">
                            <link rel="stylesheet" href="/beranda/modal-video-min.min.css">

                            <!-- <div class="banding-container" id="bandingkan-paket">
      <div class="page-center-banding">
        <div class="banding normalize-css">
          <div class="banding-content">
            <div class="banding-content_top">
              <div class="banding-content_title">
                <h2 class="font-title-banding">Video Pembelajaran Digital</h2>
              </div>
            </div>
            <div class="banding-content_cards">
              <div class="banding-card card-bao">
                <div class="tag-card tag-super">
                  <img src="/beranda/image/ic-super.svg" alt="Icon Thumbs Up" load="lazy">
                  <p class="font-tag">Video Belajar</p>
                </div>
                <div class="banding-card_top">
                  <div class="img-logo">
                    <img src="/assets/images/logokelulusan.png" alt="Logo Brain Academy">
                  </div>
                  <div class="banding-card_sub">
                    <p class="font-sub-banding"><b>Kumpulan Video Pembelajaran</b><br> Belajar Secara Daring Dimana Saja Dengan SmartBook</p>
                  </div>
                </div>
                <div class="banding-card_middle">
                  <div class="banding-card_video">
                    <a href="#" class="js-video-button" data-channel="video" data-video-url="https://www.youtube.com/embed/file_video; ?>?autoplay=1" rel=" noopener">
                      <div class="video-box">
                        <iframe src="https://www.youtube.com/embed/file_video; ?>" alt="Thumbnail Video" load="lazy"></iframe>
                      </div>
                    </a>
                  </div>
                  <div class="banding-card_info">
                    <div class="banding-info_paket">
                      <p class="font-sub-banding"><b style="color:black;">nama_video; ?></b></p>
                    </div>
                    <div class="banding-info_cta">
                      <a href="https://www.youtube.com/embed/file_video; ?>" target="_blank">
                        <button class="cta-paket">Tonton Video</button>
                      </a>
                    </div>
                    <div class="banding-info_notes">
                      <div class="banding-notes">
                        <div class="banding-notes_img">
                          <img src="/beranda/image/ic-check-red.svg" alt="Icon Check Red" load="lazy">
                        </div>
                        <div class="banding-notes_text">
                          <p class="font-notes-banding">kategori; ?></p>
                          <p class="font-notes-banding"><b>kelas_video; ?></b></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>


            </div>


          </div>
        </div>
      </div>
    </div> -->

                            <script src="/beranda/jquery.min.js"></script>
                            <script
                                src="https://www.ruangguru.com/hs-fs/hub/2828691/hub_generated/template_assets/10729457848/1615619794843/Templates/Custom/Page/Fadhli/All_Template_for_Marketing_Engineer/Source_Modal_Video/modal-video.js">
                            </script>
                            <script
                                src="https://www.ruangguru.com/hs-fs/hub/2828691/hub_generated/template_assets/10729457994/1615619961343/Templates/Custom/Page/Fadhli/All_Template_for_Marketing_Engineer/Source_Modal_Video/jquery-modal-video-min.js">
                            </script>
                            <script src="/beranda/slick.min.js"></script>
                        </div>

                    </div>
                    <!--end widget-span -->
                </div>
                <!--end row-->
            </div>
            <!--end row-wrapper -->

            <div class="row-fluid-wrapper row-depth-1 row-number-5 ">
                <div class="row-fluid ">
                    <div class="span12 widget-span widget-type-custom_widget " style=""
                        data-widget-type="custom_widget" data-x="0" data-w="12">
                        <div id="hs_cos_wrapper_module_165059896303580"
                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style=""
                            data-hs-cos-general-type="widget" data-hs-cos-type="module">
                            <link rel="stylesheet" type="text/css" href="/beranda/slick.css">
                            <link rel="stylesheet" type="text/css" href="/beranda/slick-theme.css">
                            <link href="/beranda/aos.css" rel="stylesheet">

                            <script src="/beranda/jquery.min.js"></script>
                            <script src="/beranda/slick.min.js"></script>
                            <script src="/beranda/aos.js"></script>
                            <script>
                                $j3C = jQuery.noConflict();
                            </script>
                        </div>

                    </div>
                    <!--end widget-span -->
                </div>
                <!--end row-->
            </div>
            <!--end row-wrapper -->




            <div class="row-fluid-wrapper row-depth-1 row-number-11 ">
                <div class="row-fluid ">
                    <div class="span12 widget-span widget-type-custom_widget " style=""
                        data-widget-type="custom_widget" data-x="0" data-w="12">
                        <div id="hs_cos_wrapper_module_164974872991380"
                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style=""
                            data-hs-cos-general-type="widget" data-hs-cos-type="module">
                            <!-- Modal -->

                            <!--end of Modal-->
                            <script src="/beranda/351jquery.min.js"></script>
                            <script src="/beranda/461bootstrap.min.js"></script>
                            <script>
                                $('.modal-custom').modal({
                                    show: true,
                                    backdrop: true,
                                    keyboard: true
                                });
                            </script>
                        </div>

                    </div>
                    <!--end widget-span -->
                </div>
                <!--end row-->
            </div>
            <!--end row-wrapper -->

        </div>
        <!--end body -->
    </div>
    <!--end body wrapper -->

    <div class="footer-container-wrapper">
        <div class="footer-container container-fluid">

            <div class="row-fluid-wrapper row-depth-1 row-number-1 ">
                <div class="row-fluid ">
                    <div class="span12 widget-span widget-type-custom_widget " style=""
                        data-widget-type="custom_widget" data-x="0" data-w="12">
                        <div id="hs_cos_wrapper_module_16401525080909"
                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style=""
                            data-hs-cos-general-type="widget" data-hs-cos-type="module">
                            <div class="footer" id="footer">
                                <div class="page-center">
                                    <div class="footer__content">
                                        <div class="footer__content--top">

                                            <div class="sec-app">
                                                <div class="sec-address">
                                                    <div class="sec-address__logo">
                                                        <a href="#">
                                                            <img style="width:30px;10px;"
                                                                src="{{ asset($data_lembaga->getLogo()) }}"
                                                                alt="Logo Smartschool">
                                                        </a>
                                                    </div>
                                                    <div class="sec-address__detail">
                                                        <p
                                                            class="font-base-footer font-white font-bold footer__title--hq">

                                                            {{ $data_lembaga->nama_lembaga }}
                                                        </p>
                                                        <p class="font-base-footer font-white">
                                                            {{ $data_lembaga->alamat_lembaga }},
                                                            {{ $data_lembaga->kota_lembaga }},
                                                            {{ $data_lembaga->provinsi_lembaga }} -
                                                            {{ $data_lembaga->notelp }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- <p class="font-base-footer font-white font-bold footer__title">Coba GRATIS Aplikasi Smartschool</p>
                        <div class="sec-app__content">
                            <div class="sec-app__content--gplay">
                                <a target="_blank" rel="nofollow" href="#">
                                    <img src="https://www.ruangguru.com/hubfs/1%20Homepage%20RG/Optimize%20V2/btn_googleplay%20(1).svg" alt="Button Google Play Footer ">
                                </a>
                            </div>
                            <div class="sec-app__content--appstore">
                                <a target="_blank" rel="nofollow" href="#">
                                    <img src="https://www.ruangguru.com/hubfs/1%20Homepage%20RG/Optimize%20V2/btn_appstore%20(1).svg" alt="Button App Store Footer ">
                                </a>
                            </div>
                            <div class="sec-app__content--huawei">
                                <a target="_blank" rel="nofollow" href="#">
                                    <img src="https://www.ruangguru.com/hubfs/1%20Homepage%20RG/Optimize%20V2/btn_huawei.svg" alt="Button AppGallery Footer " loading="lazy" class="h-auto" width="156" height="48">
                                </a>
                            </div>
                        </div> -->
                                            </div>
                                            <div class="sec-menu">
                                                <div class="sec-menu__rg">
                                                    <p class="font-base-footer font-white font-bold footer__title">
                                                        Akses Siswa</p>
                                                    <ul type="none" class="no-space">
                                                        <li><a class="font-base-footer font-white"
                                                                href="#">Dashboard Siswa</a></li>
                                                        <!-- <li><a class="font-base-footer font-white" href="#" target="_blank">E-Library</a></li> -->
                                                        <!-- <li><a class="font-base-footer font-white" href="#">E-Smartbook</a></li>
                                <li><a class="font-base-footer font-white" href="#">E-Osis</a></li>
                                <li><a class="font-base-footer font-white" href="#">E-Kelulusan</a></li> -->

                                                    </ul>
                                                </div>
                                                <div class="sec-menu__lainnya">
                                                    <p class="font-base-footer font-white font-bold footer__title">
                                                        Akses Guru</p>
                                                    <ul type="none" class="no-space">
                                                        <li><a class="font-base-footer font-white" href="#"
                                                                target="_blank">Dashboard Guru</a></li>
                                                        <!--                             <li><a class="font-base-footer font-white" href="https://www.brainacademy.id/online" target="_blank">Brain Academy Online</a></li> -->
                                                        <li>
                                                            <!-- <div class="ic-new">
                                        <a class="font-base-footer font-white" href="#" target="_blank">E-Administrasi</a>
                                    </div> -->
                                                            <!-- </li>
                                <li><a class="font-base-footer font-white" href="#" target="_blank">E-BK</a></li> -->
                                                    </ul>
                                                </div>
                                                <!-- <div class="sec-menu__bantuan">
                            <p class="font-base-footer font-white font-bold footer__title">Bantuan &amp; Panduan</p>
                            <ul type="none" class="no-space">
                                <li><a class="font-base-footer font-white" href="#">Tutorial Siswa</a></li>
                                <li><a class="font-base-footer font-white" href="#">Tutorial Guru</a></li>
                                <li><a class="font-base-footer font-white" href="#">Tutorial Admin</a></li>
                            </ul>
                        </div> -->
                                                <div class="sec-menu__contact">
                                                    <p class="font-base-footer font-white font-bold footer__title">
                                                        Hubungi Kami</p>
                                                    <div class="group-contact">
                                                        <div class="contact__container">
                                                            <div class="contact__container--img"><img
                                                                    src="https://www.ruangguru.com/hubfs/1%20Homepage%20RG/Optimize%20V2/ic-wa.svg"
                                                                    alt="Logo Whatsapp Footer"></div>
                                                            <div class="contact__container--text"><a
                                                                    class="font-base-footer font-white"
                                                                    href="https://wa.me/{{ $data_lembaga->notelp }}">{{ $data_lembaga->notelp }}
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="contact__container">
                                                            <div class="contact__container--img"><img
                                                                    src="https://www.ruangguru.com/hubfs/1%20Homepage%20RG/Optimize%20V2/ic-mail.svg"
                                                                    alt="Logo Email Footer"></div>
                                                            <div class="contact__container--text"><a
                                                                    class="font-base-footer font-white"
                                                                    href="mailto:$data_lembaga->email; ?>">{{ $data_lembaga->email }}
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="footer__content--bottom">
                    <div></div>
                    <div class="sec-follow">
                        <p class="font-base-footer font-white font-bold footer__title">Ikuti Kami</p>
                        <div class="sec-follow__content">
                            <div class="sec-follow__content--socmed">
                                <a target="_blank" href="#"> <img src="https://www.ruangguru.com/hubfs/1%20Homepage%20RG/Optimize%20V2/ic-ig.svg" alt="Logo Instagram Footer"> </a>
                                <a target="_blank" href="#"> <img src="https://www.ruangguru.com/hubfs/1%20Homepage%20RG/Optimize%20V2/ic-fb.svg" alt="Logo Facebook Footer"> </a>
                                <a target="_blank" href="#"> <img src="https://www.ruangguru.com/hubfs/1%20Homepage%20RG/Optimize%20V2/ic-twitter.svg" alt="Logo Twitter Footer"> </a>
                                <a target="_blank" href="#"> <img src="https://www.ruangguru.com/hubfs/1%20Homepage%20RG/Optimize%20V2/ic-youtube.svg" alt="Logo Youtube Footer"> </a>
                                <a target="_blank" href="#"><img src="https://www.ruangguru.com/hubfs/1%20Homepage%20RG/Optimize%20V2/ic-linkedin.svg" alt="Logo LinkedIn Footer"></a>
                                <a target="_blank" href="#"><img src="https://www.ruangguru.com/hubfs/1%20Homepage%20RG/Optimize%20V2/tiktok-ic-white-40.svg" alt="Logo TikTok Footer"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
                                        <div class="footer__year">
                                            <p class="font-base-footer font-white font-bold center">
                                                ©
                                                <script>
                                                    document.write(new Date().getFullYear());
                                                </script>
                                                SIASIK. Islamiyah Teknologi {{ $data_lembaga->nama_lembaga }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--end widget-span -->
                    </div>
                    <!--end row-->
                </div>
                <!--end row-wrapper -->

            </div>
            <!--end footer -->
        </div>
        <!--end footer wrapper -->

        <script src="/hs/hsstatic/jquery-libs/static-1.4/jquery/jquery-1.11.2.js"></script>
        <script src="/hs/hsstatic/jquery-libs/static-1.4/jquery-migrate/jquery-migrate-1.2.1.js"></script>
        <script>
            hsjQuery = window['jQuery'];
        </script>
        <script>
            (function() {
                window.addEventListener('load', function() {
                    setTimeout(function() {
                        var xhr = new XMLHttpRequest();
                        xhr.open('POST', '/_hcms/perf', true /*async*/ );
                        xhr.setRequestHeader("Content-type", "application/json");
                        xhr.onreadystatechange = function() {
                            // do nothing.
                        };
                        var connection = navigator.connection || navigator.mozConnection || navigator
                            .webkitConnection;

                        function populateNetworkInfo(name, connection, info) {
                            if (name in connection) {
                                info[name] = connection[name];
                            }
                        }
                        var networkInfo = {};
                        if (connection) {
                            ['type', 'effectiveType', 'downlink', 'rtt'].forEach(function(name) {
                                populateNetworkInfo(name, connection, networkInfo);
                            });
                        }
                        var perfData = {
                            url: location.href,
                            portal: 2828691,
                            content: 39403979750,
                            group: -1,
                            connection: networkInfo,
                            timing: performance.timing
                        };
                        xhr.send(JSON.stringify(perfData));
                    }, 3000); // Execute this 3 seconds after onload.
                });
            })();
        </script>

        <script>
            var hsVars = hsVars || {};
            hsVars['language'] = 'id';
        </script>

        <script src="/hs/hsstatic/cos-i18n/static-1.53/bundles/project.js"></script>
        <script
            src="https://www.ruangguru.com/hs-fs/hub/2828691/hub_generated/module_assets/39227318886/1648451980917/module_39227318886_header-homepage-ruangguru-2021.min.js">
        </script>
        <script
            src="https://www.ruangguru.com/hs-fs/hub/2828691/hub_generated/module_assets/70765523748/1649657479255/module_70765523748_Module_Section_Kejar_Cita2mu_Testimoni_Pengguna_-_RG_Homepage_2022_AB_Test.min.js">
        </script>
        <script
            src="https://www.ruangguru.com/hs-fs/hub/2828691/hub_generated/module_assets/71394810234/1650617129284/module_71394810234_content_homepage_RG_2021_for_2022_AB_Test_versi_B.min.js">
        </script>
        <script
            src="https://www.ruangguru.com/hs-fs/hub/2828691/hub_generated/module_assets/71418200646/1650948576673/module_71418200646_Module_Promo_Yang_Seru_-_RG_Homepage_2022_AB_Test.min.js">
        </script>
        <script
            src="https://www.ruangguru.com/hs-fs/hub/2828691/hub_generated/module_assets/62919019934/1646711963265/module_62919019934_Module_SEO_Box_Opsi_2_2022.min.js">
        </script>
        <script
            src="https://www.ruangguru.com/hs-fs/hub/2828691/hub_generated/module_assets/39981680119/1649300055142/module_39981680119_Footer-ruangguru-2021-v2.min.js">
        </script>

        <!-- Start of HubSpot Analytics Code -->
        <script type="text/javascript">
            var _hsq = _hsq || [];
            _hsq.push(["setContentType", "landing-page"]);
            _hsq.push(["setCanonicalUrl", "https:\/\/www.ruangguru.com"]);
            _hsq.push(["setPageId", "39403979750"]);
            _hsq.push(["setContentMetadata", {
                "contentPageId": 39403979750,
                "legacyPageId": "39403979750",
                "contentFolderId": null,
                "contentGroupId": null,
                "abTestId": null,
                "languageVariantId": 39403979750,
                "languageCode": "id",

                "mabData": {
                    "correlationId": "88a1863a-cece-4635-96c9-af539a388579",
                    "experimentId": 71754106765
                }

            }]);
        </script>

        <script type="text/javascript" id="hs-script-loader" async defer src="/hs/scriptloader/2828691.js?businessUnitId=0">
        </script>
        <!-- End of HubSpot Analytics Code -->


        <script type="text/javascript">
            var hsVars = {
                ticks: 1651005035727,
                page_id: 39403979750,

                content_group_id: 0,
                portal_id: 2828691,
                app_hs_base_url: "https://app.hubspot.com",
                cp_hs_base_url: "https://cp.hubspot.com",
                language: "en",
                analytics_page_type: "landing-page",
                analytics_page_id: "39403979750",
                category_id: 1,
                folder_id: 0,
                is_hubspot_user: false
            }
        </script>


        <script defer src="/hs/hsstatic/HubspotToolsMenu/static-1.128/js/index.js"></script>

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PVNLZFT" height="0" width="0"
                style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <script>
            // counter Satisfied clients
            var maxScVal = {{ $count_siswa }};
            var isc = parseInt($('.scVal').text());
            var tim;

            function run() {
                tim = setInterval(function() {
                    if (isc >= maxScVal) {
                        clearInterval(tim);
                        return;
                    }
                    $('.scVal').text(++isc);
                }, 20);
            }
            run();
            //Counters
            // counter finished Projects
            var maxfPVal = {{ $count_siswa }};
            var ifP = parseInt($('.fpVal').text());
            var timfP;

            function runfP() {
                timfP = setInterval(function() {

                    if (ifP >= maxfPVal) {
                        clearInterval(timfP);
                        return;
                    }
                    $('.fpVal').text(++ifP);

                }, 250);
            }
            runfP();
            //finished Projects

            //counter Team Members
            var maxtMVal = {{ $count_siswa }};
            var itm = parseInt($('.tMVal').text());
            var timtM;

            function runtM() {
                timtM = setInterval(function() {
                    if (itm >= maxtMVal) {
                        clearInterval(timtM);
                        return;
                    }
                    $('.tMVal').text(++itm);
                }, 600);
            }
            runtM();
            //Team Members

            //counter blog post
            var maxbPVal = {{ $count_siswa }};
            var ibP = parseInt($('.bPVal').text());
            var timbP;

            function runbP() {
                timbP = setInterval(function() {
                    if (ibP >= maxbPVal) {
                        clearInterval(timbP);
                        return;
                    }
                    $('.bPVal').text(++ibP);

                }, 300);
            }
            runbP();
            //blog post
        </script>



        <!-- Generated by the HubSpot Template Builder - template version 1.03 -->

</body>

</html>
