<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>login | Dulu</title>

        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
        <link href="<?= base_url('assets/mono/'); ?>plugins/material/css/materialdesignicons.min.css" rel="stylesheet" />
        <link href="<?= base_url('assets/mono/'); ?>plugins/simplebar/simplebar.css" rel="stylesheet" />

        <!-- PLUGINS CSS STYLE -->
        <link href="<?= base_url('assets/mono/'); ?>plugins/nprogress/nprogress.css" rel="stylesheet" />

        <!-- MONO CSS -->
        <link id="main-css-href" rel="stylesheet" href="<?= base_url('assets/mono/'); ?>css/style.css" />




        <!-- FAVICON -->
        <link href="<?= base_url('assets/image/smk.png'); ?>" rel="shortcut icon" />

        <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
        <script src="<?= base_url('assets/mono/'); ?>plugins/nprogress/nprogress.js"></script>
    </head>

</head>

<body class="bg-light-gray" id="body">
    <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh">
        <div class="d-flex flex-column justify-content-between">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-10">
                    <div class="card card-default mb-0">
                        <div class="card-header pb-0 mb-2">
                            <div class="app-brand w-100 d-flex justify-content-center border-bottom-0">
                                <a class="w-auto pl-0" href="<?= base_url('home') ?>">
                                    <img src="<?= base_url('assets/mono/'); ?>images/smk.png" alt="Mono" width="50">
                                    <span class="brand-name text-dark">Skandakra</span>
                                </a>
                            </div>
                        </div>
                        <div class="card-body px-5 pb-5 pt-0">
                            <h5 class="text-dark mb-2 text-center">Reset Your Password</h5>
                            <div id="ngilang">
                                <?= $this->session->flashdata('message'); ?>
                            </div>
                            <form action="<?= base_url('admin/auth/forgotPassword'); ?>" method="post">
                                <div class="row">
                                    <div class="form-group col-12 mb-4">
                                        <input type="text" class="form-control input-lg" id="email" placeholder="Email" value="<?= set_value('email') ?>" name="email" autocomplete="off">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="d-flex justify-content-center mb-3">
                                            <button type="submit" class="btn btn-info btn-pill mb-2">Reset Password</button>
                                        </div>
                                        <p>Sudah memiliki akun?
                                            <a class="text-blue" href="<?= base_url('admin/auth') ?>">Kembali Ke Login</a>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="<?= base_url('assets/mono/'); ?>plugins/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/mono/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
    $('#ngilang').delay('slow').slideDown('slow').delay(4000).slideUp(600)
</script>

</html>