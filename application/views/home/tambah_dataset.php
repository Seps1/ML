


<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $judul; ?></title>

	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/custom.css'); ?>">

	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/home/css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/home/css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="<?= base_url();?>assets/home/css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="<?= base_url();?>assets/home/css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- fonts -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="<?= base_url();?>assets/home/css/owl.carousel.min.css">
   <link rel="stylesheet" href="<?= base_url();?>assets/home/css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">

</head>
  <!-- header section start -->
  <div class="header_section">
      <div class="header_main">
         <div class="mobile_menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo_mobile"><a href="index.html"><img src="images/logo.png"></a></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                     <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="services.html">Services</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link " href="blog.html">Blog</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link " href="contact.html">Contact</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
         <div class="container-fluid">
		 <h1 class="banner_taital" style="margin-top:10px;">NaiveBayes</h1>
         </div>
      </div>
   </div>

   <div class="container" >
        <div class="row mt-4" >
            <div class="col">
                <h1 style="margin-top:3%;"><?= $judul; ?></h1>
            </div>
        </div>

        <div class="row mt-2" >
            <div class="col-lg-12 col-md-6 col-sm-12" >

                <div class="card">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <p class="card-title">Masukkan jumlah data yang ingin ditambahkan!</p>
                                <input type="number" max="5" name="jumlah" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-req">Request</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-2">

            <div class="col-lg-12">

                <form action="<?= base_url('home/save_dataset'); ?>" method="post">

                    <div class="row">

                        <input type="hidden" class="jml-req" name="jmlReq" value="<?= $jmlReq; ?>">

                        <?php for ($i = 1; $i <= $jmlReq; $i++) : ?>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card card-data">
                                    <div class="card-header badge-success">
                                        <h1>Data - <?= $i; ?></h1>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="umur">Umur</label>
                                            <select name="umur<?= $i; ?>" id="umur" class="form-control" required>
                                                <option value="1">
                                                    <= 30 Tahun </option> <option value="2"> 31 - 40 Tahun
                                                </option>
                                                <option value="3"> > 40 Tahun </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="pendapatan">Pendapatan</label>
                                            <select name="pendapatan<?= $i; ?>" id="pendapatan" class="form-control" required>
                                                <option value="1">Rendah</option>
                                                <option value="2">Menengah</option>
                                                <option value="3">Tinggi</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="pelajar">Pelajar ?</label>
                                            <select name="pelajar<?= $i; ?>" id="pelajar" class="form-control" required>
                                                <option value="1">Bukan</option>
                                                <option value="2">Ya</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="rating">Rating</label>
                                            <select name="rating<?= $i; ?>" id="rating" class="form-control" required>
                                                <option value="1">Baik</option>
                                                <option value="2">Luar Biasa</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="beli">Beli Komputer ?</label>
                                            <select name="beli<?= $i; ?>" id="beli" class="form-control" required>
                                                <option value="1">Tidak Beli</option>
                                                <option value="2">Beli</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
            </div>
        </div>

        <div class="col-12">
            <div class="form-group btn-submit">
                <button type="submit" name="tambah_dataset" class="btn btn-primary btn-block mb-4">Simpan</button>
            </div>
        </div>
        </form>
    </div>

    <script src="<?= base_url(); ?>assets/js/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {

            var jmlReq = $('.jml-req').val();

            if (jmlReq > 0) {
                $('.card-data').css('display', 'inline');
                $('.btn-submit').css('display', 'inline');
            }

        })
    </script>
<div class="copyright_section" style="margin-top:15%;">
      <div class="container">
         <p class="copyright_text">2023 All Rights Reserved.</p>
      </div>
   </div>
   <!-- copyright section end -->
<body>

</body>

</html>