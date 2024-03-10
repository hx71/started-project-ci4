<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skydash Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>vendors/feather/feather.css">
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url('asset/'); ?>images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="<?= base_url('asset/'); ?>images/logo.svg" alt="logo">
                            </div>
                            <h4>Silahkan Login</h4>
                            <!-- <h6 class="font-weight-light">Sign in to continue.</h6> -->
                            <form class="pt-3" action="<?= base_url('auth/login'); ?>" method="POST">
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control form-control-lg" id="" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-lg" id="" placeholder="Password">
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Masuk</button>
                                </div>
                                <!-- <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input">
                                            Keep me signed in
                                        </label>
                                    </div>
                                    <a href="#" class="auth-link text-black">Forgot password?</a>
                                </div> -->
                                <div class="text-center mt-4 font-weight-light">
                                    Sudah Punya Akun? <a href="<?= base_url('auth/register'); ?>" class="text-primary">Daftar</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <!-- <script src="<?= base_url('asset/'); ?>vendors/js/vendor.bundle.base.js"></script> -->
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <!-- <script src="<?= base_url('asset/'); ?>js/off-canvas.js"></script> -->
    <!-- <script src="<?= base_url('asset/'); ?>js/hoverable-collapse.js"></script> -->
    <!-- <script src="<?= base_url('asset/'); ?>js/template.js"></script> -->
    <!-- <script src="<?= base_url('asset/'); ?>js/settings.js"></script> -->
    <!-- <script src="<?= base_url('asset/'); ?>js/todolist.js"></script> -->
    <!-- endinject -->
</body>

</html>