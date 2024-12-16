<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/tamplates/dashboard/vendors/feather/feather.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/tamplates/dashboard/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/tamplates/dashboard/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/tamplates/dashboard/css/vertical-layout-light/style.css">
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/tamplates/dashboard/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <h4>Hello! Let's get started</h4>
                            <h6 class="font-weight-light">Sign in to continue.</h6>

                            <form class="pt-3" action="<?= base_url('auth/login') ?>" method="POST">
                                <div class="form-group">
                                    <input type="text" 
                                        class="form-control form-control-lg" 
                                        id="username" 
                                        name="username"
                                        placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" 
                                        class="form-control form-control-lg" 
                                        id="password" 
                                        name="password"
                                        placeholder="Password" required>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">MASUK</button>
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

    <script src="<?= base_url(); ?>assets/tamplates/dashboard/vendors/js/vendor.bundle.base.js"></script>
    <script src="<?= base_url(); ?>assets/tamplates/dashboard/js/off-canvas.js"></script>
    <script src="<?= base_url(); ?>assets/tamplates/dashboard/js/hoverable-collapse.js"></script>
    <script src="<?= base_url(); ?>assets/tamplates/dashboard/js/template.js"></script>
    <script src="<?= base_url(); ?>assets/tamplates/dashboard/js/settings.js"></script>
    <script src="<?= base_url(); ?>assets/tamplates/dashboard/js/todolist.js"></script>
</body>

</html>
