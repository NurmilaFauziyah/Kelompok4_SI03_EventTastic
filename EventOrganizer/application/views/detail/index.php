<!DOCTYPE html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Interior - Interior Design and Architecture Web Template</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png" type="image/png')?>">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css')?>">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/LineIcons.css')?>">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css')?>">

    <!--====== Aos css ======-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/aos.css')?>">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/slick.css')?>">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/default.css')?>">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">


</head>

<body>

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader_34">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER ENDS START ======-->

    <!--====== HEADER PART START ======-->

    <header id="home" class="header-area pt-100">

        <div class="shape header-shape-one">
            <img src="<?php echo base_url('assets/images/banner/shape/shape-1.png')?>" alt="shape">
        </div> <!-- header shape one -->

        <div class="shape header-shape-tow animation-one">
            <img src="<?php echo base_url('assets/images/banner/shape/shape-2.png')?>" alt="shape">
        </div> <!-- header shape tow -->

        <div class="shape header-shape-three animation-one">
            <img src="<?php echo base_url('assets/images/banner/shape/shape-3.png')?>" alt="shape">
        </div> <!-- header shape three -->

        <div class="shape header-shape-fore">
            <img src="<?php echo base_url('assets/images/banner/shape/shape-4.png')?>" alt="shape">
        </div> <!-- header shape three -->

        <div class="navigation-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="" href="<?php echo base_url('index.php/home')?>">
                                <img style="width:150px;" src="<?php echo base_url('assets/images/eventtastic.png')?>" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="<?php echo base_url('index.php/home/#home')?>">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="<?php echo base_url('index.php/home/#about')?>">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="<?php echo base_url('index.php/home/#service')?>">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="<?php echo base_url('index.php/home/#project')?>">Events</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="<?php echo base_url('index.php/home/#team')?>">Team</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="<?php echo base_url('index.php/home/#contact')?>">Testimoni</a>
                                    </li>
                                </ul> <!-- navbar nav -->
                            </div>
                            <div class="navbar-btn ml-20 d-none d-sm-block">
                                <a class="main-btn" href="<?php echo base_url('index.php/login/logout')?>"><i class="lni lni-close"></i> Logout</a>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navigation bar -->



        <section class="content mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                        <!-- Profile Image -->
                    <div class="card card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <?php
                                    $filegambar = base_url('/uploads/'.$event->foto_flyer);
                                    //echo $filegambar;
                                    echo '<img width="300px" class="profile-user-img img-fluid img-circle" src="'.$filegambar.'" alt="foto"/>';
                                ?>

                            </div>

                            <hr style="border: 2px solid #EB3656;">

                            <?php echo form_open('detail/save')?>        
                                <div class="form-group">
                                    <label for="kategori_peserta_id" class="col-12 col-form-label">Pilih Kategori Peserta</label> 
                                    <div class="col-12">
                                        <select id="kategori_peserta_id" name="kategori_peserta_id" class="custom-select" required="required">
                                            <option value="1">Pelajar</option>
                                            <option value="2">Mahasiswa</option>
                                            <option value="3">Karyawan Swasta</option>
                                            <option value="4">Guru/Dosen</option>
                                            <option value="5">Umum</option>
                                            <option value="6">ASN</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="alasan" class="col-12 col-form-label">Alasan</label> 
                                    <div class="col-12">
                                        <textarea id="alasan" name="alasan" cols="40" rows="5" class="form-control" required="required"></textarea>
                                    </div>
                                </div> 
                                <div class="form-group mt-2">
                                    <div class="offset col-12">
                                        <button name="submit" type="submit" class="btn btn" style="background-color:#EB3656; color:white;"><b>Submit</b></button>
                                    </div>
                                </div>
                                <input type="hidden" name="idkegiatan" value="<?= $event->id ?>">
                            <?php echo form_close(); ?>

                        </div>
                    <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header" style="background-color:#EB3656; height: 50px;">
                            <h5 class="card-title" style="color:#ffffff">Detail Event : <?=$event->judul?></h5>
                        </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fa fa-address-card"></i> Judul Kegiatan</strong>

                <p class="text-muted">
                    <td><?=$event->judul?></td>
                </p>

                <hr>

                <strong><i class="fa fa-users mr-1"></i> Kapasitas Peserta</strong>

                <p class="text-muted"><td><?=$event->kapasitas?></td></p>

                <hr>

                <strong><i class="fa fa-dollar mr-1"></i> Harga Tiket</strong>

                <p class="text-muted">
                    <td><?=$event->harga_tiket?></td>
                </p>

                <hr>

                <strong><i class="fa fa-building-o mr-1"></i> Tempat</strong>

                <p class="text-muted"><td><?=$event->tempat?></td></p>

                <hr>

                <strong><i class="fa fa-calendar mr-1"></i> Tanggal Kegiatan</strong>

                <p class="text-muted"><td><?=$event->tanggal?></td></p>

                <hr>

                <strong><i class="fa fa-comment  mr-1"></i> Narasumber</strong>

                <p class="text-muted"><td><?=$event->narasumber?></td></p>

                <hr>

                <strong><i class="fa fa-user mr-1"></i> PIC</strong>

                <p class="text-muted"><td><?=$event->pic?></td></p>
              </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== jquery js ======-->
    <script src="<?php echo base_url('assets/js/vendor/modernizr-3.6.0.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/vendor/jquery-1.12.4.min.js')?>"></script>

    <!--====== Bootstrap js ======-->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>

    <!--====== WOW js ======-->
    <script src="<?php echo base_url('assets/js/wow.min.js')?>"></script>

    <!--====== Slick js ======-->
    <script src="<?php echo base_url('assets/js/slick.min.js')?>"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="<?php echo base_url('assets/js/scrolling-nav.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.easing.min.js')?>"></script>

    <!--====== Aos js ======-->
    <script src="<?php echo base_url('assets/js/aos.js')?>"></script>


    <!--====== Main js ======-->
    <script src="<?php echo base_url('assets/js/main.js')?>"></script>

</body>

</html>
