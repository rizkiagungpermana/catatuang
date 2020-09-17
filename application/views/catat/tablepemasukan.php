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
    <title>Data Pemasukan</title>

    <?php include('headercss.php'); ?>

</head>

<body class="animsition">
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
                                    <h2 class="title-1 ml-3">Table Pemasukan</h2>
                                    <button class="au-btn au-btn-icon au-btn--blue mr-3">
                                        <i class="zmdi zmdi-plus"></i><a style="color: white" href="<?= base_url('catatuang/formpemasukan'); ?>">Tambah data</a>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30 mt-3">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Tanggal</th>
                                                <th>Jumlah</th>
                                                <th>Asal Pemasukan</th>
                                            </tr>
                                        </thead>
                                        <?php 
                                        foreach($keseluruhan->result_array() as $data):
                                                    $tanggal = $data['tanggal'];
                                                    $jumlah = $data['jumlah'];
                                                    $asal = $data['asal'];
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td><?= $tanggal; ?></td>
                                                <td><?= $jumlah; ?></td>
                                                <td><?= $asal; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <?php echo $pagination; ?>
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
        </div>

    </div>

<?php include('footer.php'); ?>

</body>

</html>
<!-- end document-->
