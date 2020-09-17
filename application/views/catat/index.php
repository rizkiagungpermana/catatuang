<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <?php include('headercss.php'); ?>

</head>

<body class="animsition">
<div class="pemasukan" data-pemasukan="<?= json_encode($jumlahpemasukan) ?>>"></div>
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <?php include('header.php'); ?>
        <!-- END MENU SIDEBAR-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Beranda</h2>
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i><a style="color: white" href="<?= base_url('catatuang/tablepemasukan'); ?>">Tambah Pemasukan</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-6">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                            <h2><?= $hariini; ?></h2>
                                                <span> Jam Kunjungan</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-balance-wallet"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?= $jumlahpemasukan ?></h2>
                                                <span style="font-size: 16px">Total Pemasukan</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?= $jumlahpengeluaran ?></h2>
                                                <span style="font-size: 17.2px">Total Pengeluaran</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?= $jumlahpemasukan - $jumlahpengeluaran; ?></h2>
                                                <span>Total Uang</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="col-lg-12">
                                <div class="au-card chart-percent-card">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 tm-b-5">Perbandingan pemasukan dan pengeluaran</h3>
                                        <div class="row no-gutters">
                                            <div class="col-xl-6">
                                                <div class="chart-note-wrap">
                                                    <div class="chart-note mr-0 d-block">
                                                        <span class="dot dot--blue"></span>
                                                        <span>Pemasukan</span>
                                                    </div>
                                                    <div class="chart-note mr-0 d-block">
                                                        <span class="dot dot--red"></span>
                                                        <span>Pengeluaran</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="percent-chart">
                                                    <canvas id="percent-chart"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

<?php include('footer.php'); ?>

</body>

</html>
<!-- end document-->
