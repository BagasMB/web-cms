    <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
    <div class="content-wrapper">
        <div class="content">
            <div class="row">
                <!-- Frist box -->
                <div class="col-xl-3 col-md-6">
                    <div class="card card-default">
                        <div class="d-flex p-5 justify-content-between">
                            <div class="icon-md bg-secondary rounded-circle mr-3">
                                <i class="mdi mdi-youtube-tv"></i>
                            </div>
                            <div class="text-right">
                                <span class="h2 d-block"><?= $konten; ?></span>
                                <p>Konten</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Second box -->
                <div class="col-xl-3 col-md-6">
                    <div class="card card-default">
                        <div class="d-flex p-5 justify-content-between">
                            <div class="icon-md bg-success rounded-circle mr-3">
                                <i class="mdi mdi-image-multiple"></i>
                            </div>
                            <div class="text-right">
                                <span class="h2 d-block"><?= $galeri; ?></span>
                                <p>Galeri</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Third box -->
                <div class="col-xl-3 col-md-6">
                    <div class="card card-default">
                        <div class="d-flex p-5 justify-content-between">
                            <div class="icon-md bg-primary rounded-circle mr-3">
                                <i class="mdi mdi-message"></i>
                            </div>
                            <div class="text-right">
                                <span class="h2 d-block"><?= $saran; ?></span>
                                <p>Saran</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Fourth box -->
                <div class="col-xl-3 col-md-6">
                    <div class="card card-default">
                        <div class="d-flex p-5 justify-content-between">
                            <div class="icon-md bg-info rounded-circle mr-3">
                                <i class="mdi mdi-account-group"></i>
                            </div>
                            <div class="text-right">
                                <span class="h2 d-block"><?= $usere; ?></span>
                                <p>User</p>
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
                                    <?php foreach ($jumlah_konten as  $value) : ?>
                                        <tr>
                                            <td class="text-dark font-weight-bold"><?= $value->nama_kategori; ?></td>
                                            <td class="text-right"><?= $value->jumlah_konten; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot class="border-top">
                                    <tr>
                                        <td><a href="<?= base_url('admin/kategori'); ?>" class="text-uppercase">See All</a></td>
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