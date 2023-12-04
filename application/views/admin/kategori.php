    <!-- ====================================——— CONTENT WRAPPER===================================== -->
    <div class="content-wrapper">
        <div class="content">

            <div class="col-md-5" id="ngilang">
                <?= $this->session->flashdata('pesan'); ?>
            </div>
            <div id="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
            <div id="type-error" data-flashdata="<?= $this->session->flashdata('gagal'); ?>"></div>

            <!-- Table Product -->
            <div class="row">
                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-header">
                            <h5>Table Kategori Konten</h5>
                            <button type="button" class="btn btn-sm btn-info btn-pill" data-toggle="modal" data-target="#ModalTambah">Tambah</button>
                        </div>
                        <div class="card-body table-responsive">
                            <!-- productsTable table-hover table-product-->
                            <table id="" class="table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kategori Konten</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $no = 1;
                                    foreach ($kategori as $ser) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $ser['nama_kategori']; ?></td>
                                            <td colspan="2">
                                                <button type="button" data-toggle="modal" data-target="#modalEdit<?= $ser['id_kategori']; ?>" class="badge badge-success">Edit</button>
                                                <a href="<?= base_url('admin/kategori/hapus/' . $ser['id_kategori']); ?>" id="btn-hapus" class="badge badge-danger">Delete</a>
                                            </td>
                                        </tr>

                                        <!-- Modal -->
                                        <div class="modal fade" id="modalEdit<?= $ser['id_kategori']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalFormTitle">Edit Kategori Konten</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <form action="<?= base_url('admin/kategori/edit'); ?>" method="post">
                                                        <div class="modal-body">
                                                            <input type="hidden" name="id_kategori" value="<?= $ser['id_kategori']; ?>">
                                                            <div class="form-group">
                                                                <label class="form-label">Nama Kategori Konten</label>
                                                                <input type="text" class="form-control" placeholder="Nama Kategori Konten" name="nama_kategori" value="<?= $ser['nama_kategori']; ?>" autocomplete="off">
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
                    <h5 class="modal-title" id="exampleModalFormTitle">Tambah Kategori Konten</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="<?= base_url('admin/kategori/tambah'); ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="form-label">Nama Kategori Konten</label>
                            <input type="text" class="form-control" placeholder="Nama Kategori Konten" name="nama_kategori" autocomplete="off">
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