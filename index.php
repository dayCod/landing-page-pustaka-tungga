<?php
include 'env.php';
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pustaka Tungga - Page</title>
    <meta name="description" content="Free bootstrap template Atlas">
    <link rel="icon" href="assets/img/favicon.png" sizes="32x32" type="image/png">
    <!-- custom.css -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- bootstrap.min.css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<!-- font-awesome -->
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    
    <!-- AOS -->
    <link rel="stylesheet" href="assets/css/aos.css">

    <!-- Owl Carrousel -->
    <!-- <link rel="stylesheet" href="assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <!-- Styling -->
    <link rel="stylesheet" href="style.css">
    <style>
        html{
            scroll-behavior: smooth;
        }
    </style>
    <!-- Popup Modal dengan JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#myModal").modal('show');
        });
    </script>
</head>

<body>

<!-- Modal Popup -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konsultasikan kendala perpustakaan anda dengan kami</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="tambah-data.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nama" name="nama">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Pekerjaan / Instansi" name="instansi">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

    <!-- banner -->
    <div class="jumbotron jumbotron-fluid" id="banner">
        <div class="colorize">
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#" data-page="beranda">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#visimisi" data-page="visimisi">Visi dan Misi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#layanan" data-page="layanan">Layanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#event" data-page="event">Library Event</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#testimoni" data-page="testimoni">Testimoni</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact" data-page="kontak">Kontak Kami</a>
                        </li>
                    </ul>
                </div>
            </nav> <br><br>
            <!-- <div class="navbar">
                <ul>
                    <li><a href="#banner">Beranda</a></li>
                    <li><a href="#visimisi">Visi dan Misi</a></li>
                    <li><a href="#layanan">Layanan</a></li>
                    <li><a href="#event">Library Event</a></li>
                    <li><a href="#testimoni">Testimoni</a></li>
                    <li><a href="#contact">Kontak Kami</a></li>
                </ul>
            </div> -->
            <div class="container text-center text-md-left home" >
                <header>
                    <div class="row justify-content-between">
                        <div class="col-2">
                            <img src="assets/img/logo_pustaka.png" alt="logo" style="display: block; width: 120px; height: 120px; max-width: 150px; max-height: 150px;">
                        </div>
                        <div class="col-6 align-self-center text-right">
                            <!-- <a href="#" class="text-white lead">Get Early Access</a> -->
                        </div>
                    </div>
                </header>
                <div class="text">
                    <h1 data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="display-3 text-white font-weight-bold my-5" style="font-size: 50pt;">
                        PUSTAKA TUNGGA<br>
                        <p style="font-size: 30px;">GRUP MANDIRI SOLUSI INFORMATIKA</p><br>
                        <p style="font-weight: 100; font-style: italic; font-size: 30px;">"Menginspirasi, Memberi Solusi"</p>
                    </h1>
                    
                    <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-white my-5s">
                        
                        <br>
                    </p>
                </div>
                <!-- <a href="#" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="btn my-4 font-weight-bold atlas-cta cta-green">Get Started</a> -->
            </div>
        </div>
    </div> <br><br>

    <!-- Visi dan Misi -->
    <div class="container my-5 py-2 page" id="visimisi">
            <center><div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true" class="col-md-6 text-center">
                <p>PUSTAKA TUNGGA merupakan salah satu startup yang bergerak di bidang pengembangan perpustakaan dari segi Human Development pustakawan. Kami berkomitmen untuk mencetak kader pustakawan yang kreatif, inovatif, adaptif, dan religius melalui Knowledge Sharing untuk mewujudkan perpustakaan sebagai medium pengembangan ilmu pengetahuan.</p>
            </div> <br>

            <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true" class="col-md-8 text-center">
                <h4 style="color: rgb(28, 121, 71);">VISI KAMI</h4>
                <p>“Menginspirasi Pustakawan untuk Menemukan Solusi dalam Perpustakaan”</p>
            </div> <br>

            <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000" data-aos-once="true" class="col-md-6 text-center">
                <h4 style="color: rgb(28, 121, 71);">MISI KAMI</h4></center>
                <div class="misi" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000" data-aos-once="true">
                    <p>
                        1. Mencetak Kader Pustakawan yang Kreatif, Inovatif, Adaptif, dan Religius. <br>
                        2. Membudayakan Knowledge Sharing dalam Komunitas Pustakawan. <br>
                        3. Menjadikan Perpustakaan Sebagai Medium Pengembangan Ilmu Pengetahun.
                    </p>
                </div>
            </div>
    </div> <br><br><br>

    <!-- layanan kami -->
    <h2 data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="font-weight-bold text-center" id="layanan" style="color: rgb(96, 194, 55);">Layanan Kami</h2>
    <br>
    <div class="rectangle-bg">
    <br> <br>
        <div class="container">
            <div class="row">
                <div data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" class="col-md-4">
                    <img src="assets/img/layanan_1.png" alt="Take a look inside" class="mx-auto lsmm">
                    <p class="lib-event">Library Social Media Management</p>
                </div>

                <div data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" class="col-md-4 ">
                    <img src="assets/img/layanan_2.png" alt="Take a look inside" class="mx-auto leo">
                    <p class="lib-event">Library Event Organizer</p>
                </div>

                <div data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" class="col-md-4 ">
                    <img src="assets/img/layanan_3.png" alt="Take a look inside" class="mx-auto pkp">
                    <p class="lib-event">Pengolahan Koleksi Perpustakaan</p>
                </div>
            </div>
            <br> <br>
            <div class="row">
                <div data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" class="col-md-4">
                    <img src="assets/img/layanan_4.png" alt="Take a look inside" class="mx-auto lo">
                    <p class="lib-event">Libsys Online</p>
                </div>

                <div data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" class="col-md-4 ">
                    <img src="assets/img/layanan_5.png" alt="Take a look inside" class="mx-auto ptp">
                    <p class="lib-event">Pelatihan Teknis Pustakawan</p>
                </div>

                <div data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" class="col-md-4 ">
                    <img src="assets/img/layanan_6.png" alt="Take a look inside" class="mx-auto kpda">
                    <p class="lib-event">Konsultasi Akreditasi Pepustakaan</p>
                </div>
            </div>
        </div>
    </div> <br><br><br>

    <!-- acara dan informasi perpustakaan -->
    <div class="container" id="event">
        <h2 class="text-center font-weight-bold d-block mb-3" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" style="color: rgb(96, 194, 55);">Acara dan Informasi Perpustakaan</h2><br><br>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
        <div class="carousel-inner">

                    <?php
                      $count = 0;
                      $sql = mysqli_query($conn,'SELECT * from info_perpus LIMIT 5 ');
                      while($data = mysqli_fetch_array($sql)){
   
                    ?>
            <div class="carousel-item <?php if($count==0){echo "active";}?>">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="page_store_data/master_info_perpus/images/<?php echo $data['gambar']?>" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $data['judul']?></h5>
                                <p class="card-text"><?php echo $data['deskripsi'] ?></p>
                                <p class="card-text"><small class="text-muted"><?php echo $data['created_at']?></small></p>
                            </div>
                        </div>  
                    </div>
                </div>        
            </div>
                    <?php
                    $count++;
                      }
                    ?>
        </div>
    </div>
    </div> <br><br><br><br>

    <!-- testimonial -->
    <div class="container" id="testimoni">
        <h2 class="text-center font-weight-bold d-block mb-3" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" style="color: rgb(96, 194, 55);">Testimoni Kami</h2><br><br>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
        <div class="carousel-inner">
            <?php
            $count = 0;
            $sql = mysqli_query($conn,'SELECT * from data_testimoni LIMIT 5');
            while($data = mysqli_fetch_array($sql)){
            ?>
            <div class="carousel-item <?php if($count==0){echo"active";}?>">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="page_store_data/master_data_testimoni/images/<?php echo $data['gambar'];?>" class="card-img" alt="...">
                            <center>
                            <caption>
                                <?php echo $data['nama'];?> <br>
                                <?php echo $data['role'];?>
                            </caption></center>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-text"><?php echo $data['deskripsi']?></p>
                                <p class="card-text"><small class="text-muted"><?php echo $data['created_at']?></small></p>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            <?php
            $count++;
            }
            ?>
        </div>
    </div>
    </div>

    <!-- client -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                     <?php
                      $sql = mysqli_query($conn,'SELECT * from company_relation');
                      while($data = mysqli_fetch_array($sql)){
                    ?>
    
                            <div class="col-sm-4 col-md-2 py-2 align-self-center">
                                <img src="page_store_data/master_c_relation/images/<?php echo $data['gambar']?>" class="mx-auto d-block" style="width: 130px; height: 130px;">
                            </div>

                <?php
                      }
                ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact -->
    <div class="jumbotron jumbotron-fluid footer-background" id="contact">
        <div class="footer-colorize">
            <div class="container my-5">
                <div class="row justify-content-between">
                    <div class="col-md-6 text-white footer-texts">
                        <h2 class="font-weight-bold">Kontak Kami</h2>
                        <p class="my-4">
                            TIDAK ADA YANG KEBETULAN. Tuhan telah mendekatkan anda,
                            <br> Kepada Kami untuk memperjuangkan Literasi dengan,
                            <br> Membaca hingga bagian ini. Pererat Silaturahmi dan,
                            <br> Sinergi anda dalam memperjuangkan literasi bersama,
                            <br> Kami melalui kontak dibawah ini.
                            <br><br> 
                        </p>
                            Puri Kelapa gading III No. 18
                            <br> Condong Catur, Sleman, Yogyakarta 55283.
                        <ul class="list-unstyled">
                            <li>Email : -</li>
                            <li>Phone : 0274 - 4463373</li>
                            <li>Wa    : +62 896 7394 0204</li>
                        </ul>
                    </div>
                    <div class="col-md-6  footer-texts">
                        <form action="tambah-data.php" method="POST">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="message">Nama</label>
                                    <input type="text" class="form-control" name="nama" id="name" required>
                                </div> 
                                <div class="form-group col-md-6">
                                    <label for="message">Instansi / Pekerjaan</label>
                                    <input type="text" class="form-control" name="instansi" id="name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Email">Email</label>
                                <input type="email" name="email" class="form-control" id="Email" required>
                            </div>
                            <button type="submit" class="btn btn-block btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<!-- copyright -->
	<div class="jumbotron jumbotron-fluid" id="copyright" style="background: rgba(28, 121, 71, 0.9);">
        <div class="container">
            <div class="row justify-content-between">
            	<div class="col-md-6 text-white align-self-center text-center text-md-left my-2">
                    Copyright © Pustaka Tungga.
                </div>
                <div class="col-md-6 align-self-center text-center text-md-right my-2" id="social-media">
                    <a href="#" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-medium" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="assets/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <!-- AOS -->
    <script src="assets/js/aos.js"></script>
    <script>
      AOS.init({
      });
    </script>
    <!-- Carousel Testimoni -->
    <script>
    
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script>
        $("a").click(function(){
        var pageId = $(this).attr("data-page");
        $("html, body").animate({ scrollTop: $("#"+pageId).offset().top }, 1000);
        });
    </script>
</body>

</html>