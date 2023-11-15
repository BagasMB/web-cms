    <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
    <div class="content-wrapper">
        <div class="content">
            <!-- Top Statistics -->
            <div class="row">
                <div class="col-xl-3 col-sm-6">
                    <div class="card card-default">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h2>Konten</h2>
                            </div>
                            <div class="sub-title">
                                <h1 class="mx-1"><?= $konten; ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card card-default">
                        <div class="card-header">
                            <h2>Galeri</h2>
                            <div class="sub-title">
                                <h1 class="mx-1"><?= $galeri; ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card card-default">
                        <div class="card-header">
                            <h2>User</h2>
                            <div class="sub-title">
                                <h1 class="mx-1"><?= $usere; ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card card-default">
                        <div class="card-header">
                            <h2>Saran</h2>
                            <div class="sub-title">
                                <h1 class="mx-1"><?= $saran; ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4">
                    <!-- Kategori Konten -->
                    <div class="card card-default">
                        <div class="card-header">
                            <h2>Kategori Konten</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-borderless table-thead-border">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th class="text-right">Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($kategori as  $value) : ?>
                                        <tr>
                                            <td class="text-dark font-weight-bold"><?= $value['nama_kategori']?></td>
                                            <td class="text-right"></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot class="border-top">
                                    <tr>
                                        <td><a href="<?= base_url('admin/kategori');?>" class="text-uppercase">See All</a></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                </div>
                <div class="col-xl-8">

                </div>
            </div>


        </div>

    </div>