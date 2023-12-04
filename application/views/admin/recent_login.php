    <!-- ====================================——— CONTENT WRAPPER===================================== -->
    <div class="content-wrapper">
        <div class="content">

            <div class="col-md-5" id="ngilang">
                <?= $this->session->flashdata('pesan'); ?>
            </div>

            <!-- Table Product -->
            <div class="row">
                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-header">
                            <h5>Table Aktivitas Login &amp; Logout</h5>
                        </div>
                        <div class="card-body table-responsive">
                            <!-- productsTable table-hover table-product-->
                            <table id="" class="table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Nama</th>
                                        <th>Jam</th>
                                        <th>Tanggal</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($recent_login as $ser) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $ser['username']; ?></td>
                                            <td><?= $ser['nama']; ?></td>
                                            <td><?= $ser['waktu']; ?></td>
                                            <td><?= $ser['tanggal']; ?></td>
                                            <td>
                                                <?php if ($ser['status'] == 'Login') : ?>
                                                    <button class="badge badge-pill badge-success"><?= $ser['status']; ?></button>
                                                <?php elseif ($ser['status'] == 'Logout') : ?>
                                                    <button class="badge badge-pill badge-danger"><?= $ser['status']; ?></button>
                                                <?php else : ?>

                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>