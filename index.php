<?php
session_start();
include "koneksi.php";
?>


<!DOCTYPE html>
<html>
    <head>
        
<!--
Tinker Template
http://www.templatemo.com/tm-506-tinker
-->

<!-- // PROFILE \\ -->
         
            <title>Web_Halimah</title>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="content-type" content="text/html; charset=utf-8" />
            <meta name="robots" content="index, follow">
            <meta name="description" content="Official website | Toko Malik">
            <meta name="keywords" content="Belanja, Toko Kelontong">
            <meta http-equiv="copyright" content="Halimah">
            <meta name="author" content="Halimah Mega So">
            <link rel="shortcut icon" href="img/package.png" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/templatemo-style.css">
        <link rel="stylesheet" href="css/lightbox.css">
        <link rel="stylesheet" href="css/style.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>

<!-- // HEADER \\ -->
    <div class="header">
        <div class="container">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                     <p class="language">Bahasa : <a href="index.php?lang=in"> Indonesia</a> | <a href="index.php?lang=en"> English</a></p>
                    <a href="#" class="navbar-brand scroll-top"><em>T</em>oko Malik</a>
                </div>
                <!--/.navbar-header-->
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#" class="scroll-top">Beranda</a></li>
                        <li><a href="#" class="scroll-link" data-id="about">Produk & Pelayanan</a></li>
                        <li><a href="#" class="scroll-link" data-id="portfolio">Galleri</a></li>
                        <li><a href="#" class="scroll-link" data-id="blog">Tentang Kami</a></li>
                        <li><a href="#" class="scroll-link" data-id="contact-us">Kontak</a></li>
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </div>
    <!--/.header-->


<!-- // WELCOME SCREEN \\ -->
    <div class="parallax-content baner-content" id="home">
        <div class="container">
            <div class="text-content">
                
                <h2><span>TOKO MALIK</span></h2>
                <p>Welcome to official website of Toko Malik <br>
<a href="www.tokomalik.com" target="_blank" style:color="white"> www.tokomalik </a></p>                <div class="primary-white-button">
                    <a href="#" class="scroll-link" data-id="about">Lihat Produk & Pelayanan Kami</a>
                </div>
            </div>
        </div>
    </div>


<!-- // SERVICES \\ -->
    <section id="about" class="page-section">
        <div class="container">
            <div class="row">
                
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="service-item">
                            <div class="icon">
                                <img src="img/payment.png" alt="">
                            </div>                         
                            <h4>Pembayaran Aman</h4>
                            <div class="line-dec"></div>
                            <p><i></i></p>
                            <p>Keamanan dan kenyamanan dalam bertransaksi secara online</p>                    </div>
                </div>
                
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="service-item">
                            <div class="icon">
                                <img src="img/delivery-truck.png" alt="">
                            </div>                         
                            <h4>Delivery Service</h4>
                            <div class="line-dec"></div>
                            <p><i></i></p>
                            <p>Layanan pengiriman yang cepat dan efisien</p>                    </div>
                </div>
                
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="service-item">
                            <div class="icon">
                                <img src="img/new.png" alt="">
                            </div>                         
                            <h4>New Item</h4>
                            <div class="line-dec"></div>
                            <p><i></i></p>
                            <p>Memastikan barang akan selalu baru</p>                    </div>
                </div>
                
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="service-item">
                            <div class="icon">
                                <img src="img/best-quality.png" alt="">
                            </div>                         
                            <h4>Best Quality</h4>
                            <div class="line-dec"></div>
                            <p><i></i></p>
                            <p>Barang kualitas terbaik</p>                    </div>
                </div>
                            </div>
        </div>
        <div class="primary-white-button" align="center">
            <br><a href="#" class="scroll-link" data-id="portfolio">lihat Galeri Kami</a>
        </div>
    </section>



<!-- // GALLERY \\ -->
    <section id="portfolio">
        <div class="content-wrapper">
            <div class="inner-container container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="section-heading">
                            <h4>Galeri</h4>
                            <div class="line-dec"></div>
                            <p>Galeri Foto Produk dan Pelayanan Kami</p>
                            <div class="filter-categories">
                                <ul class="project-filter">
                                    
                                    <li class="filter" data-filter="Galeri_1"><span>Galeri_1</span></li>
                                    <li class="filter" data-filter="Galeri_2"><span>Galeri_2</span></li>                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="projects-holder-3">
                            <div class="projects-holder">
                                <div class="row">
                                    
                                    <div class="col-sm-3 col-sm-12 project-item mix Galeri_1">
                                      <div class="thumb">
                                            <div class="image">
                                                <a href="img/Gambar WhatsApp 2024-02-21 pukul 08.53.34_4d4ec3c0.jpg" data-lightbox="image-1"><img src="img/Gambar WhatsApp 2024-02-21 pukul 08.53.34_4d4ec3c0.jpg"></a>
                                            </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-3 col-sm-12 project-item mix Galeri_2">
                                      <div class="thumb">
                                            <div class="image">
                                                <a href="img/Gambar WhatsApp 2024-02-21 pukul 09.02.54_d2b29656.jpg" data-lightbox="image-1"><img src="img/Gambar WhatsApp 2024-02-21 pukul 09.02.54_d2b29656.jpg"></a>
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


<!-- // TESTIMONIALS \\ -->
    


<!-- // ABOUT US \\ -->
    <div class="tabs-content" id="blog">
        <div class="container">
            <div class="row">
                <div class="wrapper">
                    <div class="col-md-4">
                        <div class="section-heading">
                            <h4>Sekilas Tentang Kami</h4>
                            <div class="line-dec"></div>
                            <p>Berbagai hal terkait dengan profil Toko</p>                            <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                                                        
                                    <li><a href="#tab3" class="active">Visi Misi Toko</a></li>                        
                                    <li><a href="#tab1" class="active">Profil Usaha</a></li>                             </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
          
                    <section id="first-tab-group" class="tabgroup">
                          
                            <div id="tab1">
                                <img src="img/tokomalik.jpeg" alt="">
                                <div class="text-content">
                                    <h4>Profil Usaha</h4>
                                    <hr>
                                    <p>Toko Malik merupakan salah satu UMKM yang berjalan dalam bidang kebutuhan pokok, dimana toko ini memiliki berbagai kebutuhan pokok masyarakat yang beralamat di Panongan RT 01/ RW 04, Kecamatan Panongan, Kabupaten Tangerang, Banten. Toko kelontong ini menjual berbagai barang-barang kebutuhan sehari-hari dengan kualitas terbaik dan harga yang terjangkau. Sebagai toko kelontong yang telah beroperasi dalam industri ini selama lebih dari 10 tahun. Toko kelontong ini menjual berbagai macam kebutuhan pokok seperti beras, minyak goreng, gula, tepung, mie instan, telur, dan produk-produk lainnya dengan harga yang kompetitif. Dengan mengutamakan kualitas produk dan kepuasan pelanggan, Toko Malik bekerja sama dengan supplier terpercaya untuk memastikan bahwa setiap produk yang disediakan adalah yang terbaik dan juga memahami pentingnya kemudahan berbelanja, dengan menyediakan layanan pengiriman cepat dan aman untuk memastikan produk sampai tepat waktu ke tangan pelanggan.</p>
                                </div>
                            </div>  
                            <div id="tab3">
                                <img src="img/tokomalik.jpeg" alt="">
                                <div class="text-content">
                                    <h4>Visi Misi Toko</h4>
                                    <hr>
                                    <p>Visi :<br>
                                    Menjadi mitra terpercaya dalam memenuhi kebutuhan pokok masyarakat dan menjadi pusat belanja yang inovatif dan berkelanjutan.
                                        <br> Misi : <br>
                                        1. Berusaha memenuhi ketersediaan barang sesuai kebutuhan pelanggan dan masyarakat<br> 
                                        2. Mendapatkan respon positif dari kepuasan masyarakat mengenai ketersediaan bahan-bahan pokok<br>
                                        3. Berusaha Memperoleh keuntungan dari penjualan.</p>
                                </div>
                            </div>                        
                    </section>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- // CONTACT US \\ -->
    <div id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h4>Kontak Kami</h4>
                        <div class="line-dec"></div>
                         
                            <p>Please fill your message and send by email to us for question and request, click button on below.</p>                        <div class="pop-button">
                            <h4>Kirim Pesan</h4>
                        </div>
                    </div>
                </div>
            </div>
            <?php

        if (isset($_POST['submitemail'])){
            $date_receive_inbox    = $_POST['date_receive_inbox'];
            $name    = $_POST['name'];
            $email   = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            $to      = $email;


        $query = mysqli_query($koneksi, "INSERT INTO tbl_inbox(date_receive_inbox, name_inbox, email_inbox, subject_inbox, message_inbox)
        VALUES ('$date_receive_inbox', '$name', '$email', '$subject', '$message')");
        if ($query) {
          echo '<script>alert("Berhasil Terkirim")</script>';
        } else {
          echo '<script>alert("Gagal Terkirim")</script>';
        }
      }
        ?>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="pop">
                        <span>✖</span>
                        <form id="contact" action="index.php" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" name="date_receive_inbox" id="date" value="2024-02-21 03:09:25am">  
                                  <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Nama Anda..." required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Alamat Email Anda..." required="">
                                  </fieldset>
                                </div>                                
                                <div class="col-md-12">
                                  <fieldset>
                                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Subjek..." required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-12">                                
                                  <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Isi Pesan..." required=""></textarea>
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <button type="submit" name="submitemail" id="form-submit" class="btn">Kirim Pesan</button>
                                  </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- // MAPPING \\ -->
    <div id="map">
    	<!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
        -->
                  
                <iframe src="https://www.bing.com/maps?&cp=-6.277612~106.529489&lvl=16&pi=0&osid=ca70e858-cc9c-491e-8341-da015686a271&v=2&sV=2&form=S00027" width="0%" height="0" frameborder="0" 
                style="border:0" allowfullscreen></iframe>    </div>


<!-- // FOOTER \\ -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="logo">
                        <a href="#" class="scroll-top"><em>T</em>oko Malik</a>
                       
                        <p>Copyright &copy; 2024 
                      | Theme by : <span>Halimah</span></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="location">
                        <h4>Lokasi</h4>
                        <ul>
                            <li>Kantor Pusat : 
                                 <br>Toko Malik Panongan, Kab. Tangerang, Banten</li>                                
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12">
                    <div class="contact-info">                        <h4>Informasi Lengkap</h4>
                        <ul>
                            <li><em>Telepon</em> :  +621xxxxxxx</li>
                            <li><em>Email</em> :  info@tokomalik.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12">
                    <div class="connect-us">
                        <h4>Media Sosial</h4>
                        
                        <ul>                            
                            <li><a href="" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="" target="_blank"><i class="fa fa-youtube"></i></a></li>
                        </ul>                        <html>
<head><title>Statistik Pengunjung</title></head>
<body>

<h3 hidden>Statistik Pengunjung</h3>
       <img src="counter/0.png" alt="0" hidden><img src="counter/1.png" alt="1" hidden><img src="counter/7.png" alt="7" hidden><img src="counter/2.png" alt="2" hidden><img src="counter/6.png" alt="6" hidden><img src="counter/2.png" alt="2" hidden><br><br>
    
      <img src="counter/hariini.png" hidden> <p hidden>Pengunjung hari ini : 1 </p>
      <img src="counter/total.png" hidden><p hidden> Total pengunjung    : 17262 </p>
      
      <img src="counter/hariini.png" hidden> <p hidden> Hits hari ini  :  38</p>
      <img src="counter/total.png" hidden> <p hidden>Total hits     :  55112</p>
      
      <img src="counter/online.png" hidden> <p hidden>Pengunjung Online : 1 </p> 
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        // navigation click actions 
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');         
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed){
        var offSet = 50;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }



function myFunction(imgs) {
    var expandImg = document.getElementById("expandedImg");
    var imgText = document.getElementById("imgtext");
    expandImg.src = imgs.src;
    imgText.innerHTML = imgs.alt;
    expandImg.parentElement.style.display = "block";
}


    </script>
</body>
</html>