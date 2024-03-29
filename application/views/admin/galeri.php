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
                            <h5>Table Galeri</h5>
                            <!-- Form Modal -->
                            <button type="button" class="btn btn-sm btn-info btn-pill" data-toggle="modal" data-target="#ModalTambah">Tambah</button>
                        </div>
                        <div class="card-body table-responsive">
                            <!-- productsTable table-hover table-product-->
                            <table id="" class="table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Judul</th>
                                        <th>Foto</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $no = 1;
                                    foreach ($galeri as $value) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $value['tanggal']; ?></td>
                                            <td><?= word_limiter($value['judul'], 5); ?></td>
                                            <td>
                                                <a href="<?= base_url('assets/upload/galeri/' . $value['foto']); ?>" class="fancybox" data-fancybox="gallery">
                                                    <span class="mdi mdi-image-search-outline"> Lihat Foto</span>
                                                </a>
                                            </td>
                                            <td>
                                                <button type="button" data-toggle="modal" data-target="#modalEdit<?= $value['id_galeri']; ?>" class="text-success"><i class="mdi mdi-square-edit-outline"></i></button>
                                                <a href="<?= base_url('admin/galeri/hapus/' . $value['foto']); ?>" id="btn-hapus" class="text-danger"><i class="mdi mdi-trash-can-outline"></i></a>
                                            </td>
                                        </tr>

                                        <!-- Modal -->
                                        <div class="modal fade" id="modalEdit<?= $value['id_galeri']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalFormTitle">Edit Galeri</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <form action="<?= base_url('admin/galeri/edit'); ?>" method="post" enctype="multipart/form-data">
                                                        <div class="modal-body">
                                                            <input type="hidden" name="nama_foto" value="<?= $value['foto']; ?>">
                                                            <input type="hidden" name="id_galeri" value="<?= $value['id_galeri']; ?>">
                                                            <div class="form-group">
                                                                <label class="form-label">Judul</label>
                                                                <input type="text" class="form-control" name="judul" value="<?= $value['judul']; ?>" autocomplete="off">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label">Foto</label>
                                                                <input type="file" class="form-control" name="foto" autocomplete="off">
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
                    <h5 class="modal-title" id="exampleModalFormTitle">Tambah Galeri</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="<?= base_url('admin/galeri/tambah'); ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Foto</label>
                            <input type="file" class="form-control" name="foto" autocomplete="off">
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