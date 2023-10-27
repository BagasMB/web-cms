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
                            <h5>Table User</h5>
                            <!-- Form Modal -->
                            <button type="button" class="btn btn-sm btn-info btn-pill" data-toggle="modal" data-target="#ModalTambah">Tambah</button>
                        </div>
                        <div class="card-body table-responsive">
                            <!-- productsTable table-hover table-product-->
                            <table id="" class="table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Nama</th>
                                        <th>Level</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $no = 1;
                                    foreach ($data_user as $ser) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $ser['username']; ?></td>
                                            <td><?= $ser['nama']; ?></td>
                                            <td><?= $ser['level']; ?></td>
                                            <td>
                                                <button type="button" data-toggle="modal" data-target="#modalEdit<?= $ser['id_user']; ?>" class="badge badge-success">Edit</button>
                                                <?php if ($user['username'] != $ser['username']) : ?>
                                                    <a href="<?= base_url('admin/user/hapus/' . $ser['id_user']); ?>" onclick="return confirm('Yakin nih?')" class="badge badge-danger">Delete</a>
                                                <?php endif; ?>
                                            </td>
                                        </tr>

                                        <!-- Modal -->
                                        <div class="modal fade" id="modalEdit<?= $ser['id_user']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalFormTitle">Edit User</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <form action="<?= base_url('admin/user/edit'); ?>" method="post">
                                                        <div class="modal-body">
                                                            <input type="hidden" name="id_user" value="<?= $ser['id_user']; ?>">
                                                            <input type="hidden" name="level" value="<?= $ser['level']; ?>">
                                                            <div class="form-group">
                                                                <label class="form-label">Username</label>
                                                                <input type="text" class="form-control" placeholder="Username" name="username" value="<?= $ser['username']; ?>" autocomplete="off" readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label">Nama</label>
                                                                <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?= $ser['nama']; ?>" autocomplete="off">
                                                            </div>
                                                            <?php if ($user['username'] != $ser['username']) : ?>
                                                                <div class="form-group">
                                                                    <label class="form-label">Level User</label>
                                                                    <select class="form-control" name="level">
                                                                        <option <?php if ($ser['level'] == 'Kontributor') {
                                                                                    echo "selected";
                                                                                } ?> value="Kontributor">Kontributor</option>
                                                                        <option <?php if ($ser['level'] == 'Admin') {
                                                                                    echo "selected";
                                                                                } ?> value="Admin">Admin</option>
                                                                    </select>
                                                                </div>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close" class="close">Close</button>
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    <?php endforeach; ?>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="ModalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalFormTitle">Tambah User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="<?= base_url('admin/user/tambah'); ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" placeholder="Username" name="username" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" placeholder="Nama" name="nama" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" name="password" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Level User</label>
                            <select class="form-control" name="level">
                                <option value="Admin">Admin</option>
                                <option value="Kontributor">Kontributor</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close" class="close">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>