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

    <!-- csss baru -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url();?>assets/user/css/styles.css" rel="stylesheet" />

    <!-- owl stylesheets -->
    <link rel="stylesheet" href="<?= base_url();?>assets/home/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/home/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">


</head>
<!-- header section start -->


<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">NAIVEBAYES</a>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
			<div class="title mb-4" style="margin-top:20px;foreground:white">
                <h2 class="text-white">Prediksi probabilitas pengambilan keputusan pembelian laptop dengan Naive Bayes</h2>
            </div>
                <div class="col-lg-8 col-md-8 col-sm-8">

                    <?php if ($this->session->flashdata('msg')) : ?>
                    <div class="alert alert-info" role="alert">
                        Data <strong><?= $this->session->flashdata('msg'); ?></strong> ditambahkan.
                    </div>
                    <?php endif; ?>

                    <div class="card shadow">
                        <div class="card-header">
                            <a href="<?= base_url('home/add_dataset'); ?>" class="btn btn-primary"><i
                                    class="fa fa-plus"></i>
                                Tambah Data Latih</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-responsive" style="height: 400px;">
                                <thead>
                                    <th>No.</th>
                                    <th>Umur</th>
                                    <th>Pendapatan</th>
                                    <th>Pelajar</th>
                                    <th>Rating</th>
                                    <th>Membeli Laptop</th>
                                </thead>
                                <tbody>
                                    <?php foreach ($dataset as $num => $row) : ?>
                                    <tr>
                                        <td><?= $num + 1; ?></td>
                                        <td>
                                            <?php if ($row['umur'] == 1) {
								echo "<= 30 Tahun";
							} else if ($row['umur'] == 2) {
								echo "31 - 40 Tahun";
							} else if ($row['umur'] == 3) {
								echo "> 40 Tahun";
							}
							?>
                                        </td>
                                        <td>
                                            <?php if ($row['pendapatan'] == 1) {
								echo "Rendah";
							} else if ($row['pendapatan'] == 2) {
								echo "Menengah";
							} else if ($row['pendapatan'] == 3) {
								echo "Tinggi";
							}
							?>
                                        </td>
                                        <td><?= $row['pelajar'] == '1' ? 'Bukan' : 'Ya'; ?></td>
                                        <td><?= $row['rating'] == '1' ? 'Baik' : 'Luar Biasa'; ?></td>
                                        <td><?= $row['beli'] == '1' ? 'Tidak' : 'Ya'; ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="card shadow">
                        <div class="card-header">
                            <h3>Data Uji</h3>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('home/start'); ?>" method="post">
                                <div class="form-group">
                                    <label for="umur">Umur</label>
                                    <select name="umur" id="umur" class="form-control" required>
                                        <option value="1">
                                            <= 30 Tahun </option>
                                        <option value="2"> 31 - 40 Tahun
                                        </option>
                                        <option value="3"> > 40 Tahun </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="pendapatan">Pendapatan</label>
                                    <select name="pendapatan" id="pendapatan" class="form-control" required>
                                        <option value="1">Rendah</option>
                                        <option value="2">Menengah</option>
                                        <option value="3">Tinggi</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="pelajar">Pelajar ?</label>
                                    <select name="pelajar" id="pelajar" class="form-control" required>
                                        <option value="1">Bukan</option>
                                        <option value="2">Ya</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="rating">Rating</label>
                                    <select name="rating" id="rating" class="form-control" required>
                                        <option value="1">Baik</option>
                                        <option value="2">Luar Biasa</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="proses" class="btn btn-success">Cek Hasil</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <?php if ($this->session->flashdata('hasil')) : ?>
                    <div class="alert alert-info mt-3" role="alert">
                        Nilai posterior probabilities untuk <strong>Beli Tidak</strong> adalah :
                        <strong><?= $hasil_tidak ?></strong>, dan <strong>Beli Ya</strong> adalah :
                        <strong><?= $hasil_ya ?></strong>.<br>
                        <?= $kesimpulan; ?>.
                    </div>
                </div>
                <div class="col-md-5">
                    <table class="mt-3 table table-striped table-hover">
                        <thead>
                            <th>Umur</th>
                            <th>Pendapatan</th>
                            <th>Pelajar</th>
                            <th>Rating</th>
                            <th>Membeli</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $umur = ($umur == 1) ? "<= 30" : (($umur == 2)  ? "31 - 40" : "> 40"); ?>
                                </td>
                                <td><?= $pendapatan = ($pendapatan == 1) ? "Rendah" : (($pendapatan == 2)  ? "Menengah" : "Tinggi"); ?>
                                </td>
                                <td><?= $pelajar == 1 ? 'Bukan' : 'Ya'; ?></td>
                                <td><?= $rating == 1 ? 'Baik' : 'Luar Biasa'; ?></td>
                                <td><?= $jenis_beli == 1 ? 'Tidak' : 'Ya'; ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <?php endif; ?>
                </div>
            </div>



        </div>
    </header>


    <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2022 - Company Name</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?= base_url();?>assets/user/js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>

</html>