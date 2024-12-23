<?php 
    session_start();
    require "function/functions.php";
    
    if ( isset($_SESSION["login"]) ) {
        header("Location: dashboard.php");
        exit;
    } elseif(isset($_COOKIE['login'])) {
        header("Location: dashboard.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/icon.png">
    <title>Smart Detector Rokok - IOT</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        type="text/css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/modal.css">
    <style>
        .parallax {
            background: url(img/in.jpg);
            background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat;
        }   

        .parallax2 {
            background: url(img/bottom.jpg);
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top main-nav" id="mainNav">
        <div class="container">
            <a class="js-scroll-trigger" href="#page-top">
                <img src="img/about1.png" width="20px" style="margin-right: 10px; margin-bottom: 2px;">
            </a>
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Smart Detector Rokok</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        
                        <a href="login.php" class="nav-link">Sign in</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation -->

    <!-- header -->
    <header id="home" class="text-light parallax">
        <div class="container konten">
            <h1 style="font-size: 36pt;">Welcome to Smart Detector Rokok </h1>
            <p class="lead" style="font-size: 16pt;"> Website Smart Detector Rokok yang berbasis
                IOT dengan fitur
                Realtime Monitoring</p>
            <a href="login.php" class="btn btn-outline-light button">Get Started</a>

        </div>
    </header>
    <!-- header -->

    <!-- features -->
    <section id="features" class="bg-light">
        <div class=" container konten2">
            <div class="garis text-center">FEATURES</div>

            <div class="col-lg-12 foot-fitur">
                <h4 class="headline text-center">Smart Detector Rokok</h4>
                <p class="isi-fitur text-center">
                    Website Smart Detector Rokok adalah sebuah platform daring yang dirancang untuk membantu
                    pengguna memonitoring asap rokok di lingkungan mereka secara real-time menggunakan sensor dan IoT (Internet of Things).</p>
            </div>

            <div class="row row2">
                <div class="col-lg-6 fiturs">
                    <div class="gbr">
                        <div class="box">
                            <img src="img/realtime.jpg" class="gambar-fitur img" width="100%">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 fiturs">
                    <h4 class="headline">Monitoring Real-Time</h4>
                    <p class="isi-fitur">
                        Fitur monitoring real-time memungkinkan pengguna untuk melihat deteksi asap rokok secara langsung dan real-time. Fitur ini memuat informasi yang berkaitan dengan waktu, dan intensitas deteksi asap atau pergerakan dan memungkinkan tindakan cepat seperti memberi peringatan kepada pengguna untuk menghindari area tersebut.</p>
                </div>
            </div>

            <div class="row row2">
                <div class="col-lg-6 fiturs text-right">
                    <h4 class="headline">Visualisasi Data</h4>
                    <p class="isi-fitur">
                        Fitur visualisasi data untuk deteksi asap rokok menggunakan perangkat IoT memanfaatkan LED yang menyala, teks pada layar LCD, dan menampilkan nilai konsentrasi asap yang terdeteksi. Fitur ini memungkinkan tampilan yang lebih mudah dimengerti, pengguna dapat dengan mudah menginterpretasikan data, sehingga meningkatkan respons dan pengambilan keputusan yang lebih cepat dan tepat.</p>
                </div>
                <div class="col-lg-6 fiturs">
                    <div class="gbr">
                        <div class="box">
                            <img src="img/visualisasi.png" class="gambar-fitur img" width="100%">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row2">
                <div class="col-lg-6 fiturs">
                    <div class="gbr">
                        <div class="box">
                            <img src="img/laporan.png" class="gambar-fitur img" width="100%">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 fiturs">
                    <h4 class="headline">Laporan</h4>
                    <p class="isi-fitur">
                        Fitur laporan berkala memungkinkan pengguna menghasilkan laporan tentang jumlah deteksi asap, lokasi deteksi, dan intensitas asap dalam periode waktu tertentu. Berguna untuk evaluasi performa, analisis keamanan, atau kepatuhan terhadap peraturan terkait perokokan.</p>
                </div>
            </div>

        </div>
    </section>
    <!-- features -->

    <!-- js utama --> 
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-easing/jquery.easing.min.js"></script>

    <!-- js scrolling -->
    <script src="js/scrolling-nav.js"></script>

</body>

</html> 
saya
