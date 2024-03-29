<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>404</title>

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
        <script src="<?= base_url('assets/mono/'); ?>plugins/nprogress/nprogress.js"></script>
    </head>

</head>

<body class="bg-light-gray" id="body">
    <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh">
        <div class="d-flex flex-column justify-content-between">
            <div class="row justify-content-center mt-5">
                <div class="text-center page-404">
                    <h1 class="error-title">404</h1>
                    <p class="pt-4 pb-5 error-subtitle">Looks like something went wrong.</p>
                    <a href="<?= base_url('admin/home'); ?>" class="btn btn-primary btn-pill">Back to Home</a>
                </div>
            </div>
        </div>
    </div>


</body>

</html>