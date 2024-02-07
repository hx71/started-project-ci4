<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Page Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>vendors/feather/feather.css">
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset/'); ?>js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url('asset/'); ?>images/favicon.png" />
</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_navbar.html -->
        <?= $this->include('layouts/_navbar.php'); ?>
        <!-- partial -->

        <!-- page-body-wrapper begin -->
        <div class="container-fluid page-body-wrapper">

            <!-- partial:partials/_settings-panel.html -->
            <?= $this->include('layouts/_setting_panel.php'); ?>
            <!-- partial -->

            <!-- partial:partials/_sidebar.html -->
            <?= $this->include('layouts/_sidebar.php'); ?>
            <!-- partial -->

            <!-- main-panel begin -->
            <div class="main-panel">

                <!-- content-wrapper begin -->
                <div class="content-wrapper">
                    <?= $this->renderSection('content') ?>


                </div>
                <!-- content-wrapper ends -->

                <!-- partial:partials/_footer.html -->
                <?= $this->include('layouts/_footer.php'); ?>
                <!-- partial -->

            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="<?= base_url('asset/'); ?>vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?= base_url('asset/'); ?>vendors/chart.js/Chart.min.js"></script>
    <script src="<?= base_url('asset/'); ?>vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="<?= base_url('asset/'); ?>vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="<?= base_url('asset/'); ?>js/dataTables.select.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url('asset/'); ?>js/off-canvas.js"></script>
    <script src="<?= base_url('asset/'); ?>js/hoverable-collapse.js"></script>
    <script src="<?= base_url('asset/'); ?>js/template.js"></script>
    <script src="<?= base_url('asset/'); ?>js/settings.js"></script>
    <script src="<?= base_url('asset/'); ?>js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="<?= base_url('asset/'); ?>js/dashboard.js"></script>
    <script src="<?= base_url('asset/'); ?>js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->
</body>

</html>