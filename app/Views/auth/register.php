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
                            <h4>New here?</h4>
                            <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                            <form class="pt-3" action="<?= base_url('auth/register'); ?>" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="name" placeholder="Name" name="name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" id="email" placeholder="Email" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="username" placeholder="Username" name="username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" id="password" placeholder="Password" name="password">
                                </div>
                                <!-- <div class="mb-4">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input">
                                            I agree to all Terms & Conditions
                                        </label>
                                    </div>
                                </div> -->
                                <div class="mt-3">
                                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">REGISTER</button>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Already have an account? <a href="<?= base_url('auth/login'); ?>" class="text-primary">Login</a>
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
    <script src="<?= base_url('asset/'); ?>vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url('asset/'); ?>js/off-canvas.js"></script>
    <script src="<?= base_url('asset/'); ?>js/hoverable-collapse.js"></script>
    <script src="<?= base_url('asset/'); ?>js/template.js"></script>
    <script src="<?= base_url('asset/'); ?>js/settings.js"></script>
    <script src="<?= base_url('asset/'); ?>js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>