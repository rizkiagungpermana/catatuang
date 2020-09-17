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
    <title>Forms</title>

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
                            <div class="col-lg-8 mx-auto">
                                <div class="card">
                                    <div class="card-header">Data pengeluaran</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">PENGELUARAN</h3>
                                        </div>
                                        <hr>
                                        <div class="sukses" data-sukses="<?= $this->session->flashdata('sukses'); ?>"></div>
                                            <?php if ($this->session->flashdata('sukses')) : ?>
                                            <?php endif; ?>
                                        <form action="<?= base_url('catatuang/inputPengeluaran'); ?>" method="post">
                                            <div class="form-group">
                                                <label for="jumlah" class="control-label mb-1">Jumlah</label>
                                                <input id="jumlah" name="jumlah" type="number" class="form-control" placeholder="100000" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="asal" class="control-label mb-1">Asal pengeluaran</label>
                                                <input id="asal" name="asal" type="text" class="form-control" required>
                                            </div>
                                                    <div class="form-group">
                                                        <label for="tanggal" class="control-label mb-1">Tanggal pemakaian</label>
                                                        <input id="tanggal" name="tanggal" type="date" class="form-control">
                                                    </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-check fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Submit</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                                <div class="copyright mx-auto">
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
