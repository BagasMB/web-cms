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
                            <h5>Table Konten</h5>
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
                                        <th>Kategori</th>
                                        <th>Username</th>
                                        <th>Foto</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $no = 1;
                                    foreach ($konten as $value) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $value['tanggal']; ?></td>
                                            <td><?= word_limiter($value['judul'], 5); ?></td>
                                            <td><?= $value['nama_kategori']; ?></td>
                                            <td><?= $value['nama']; ?></td>
                                            <td>

                                                <a href="<?= base_url('assets/upload/konten/' . $value['foto']); ?>" class="fancybox" data-fancybox="gallery">
                                                    <span class="mdi mdi-image-search-outline"> Lihat Foto</span>
                                                </a>

                                            </td>
                                            <td>
                                                <button type="button" data-toggle="modal" data-target="#modalEdit<?= $value['id_konten']; ?>" class="text-success"><i class="mdi mdi-square-edit-outline"></i></button>
                                                <a href="<?= base_url('admin/konten/hapus/' . $value['foto']); ?>" onclick="return confirm('Yakin nih?')" class="text-danger"><i class="mdi mdi-trash-can-outline"></i></a>
                                            </td>
                                        </tr>

                                        <!-- Modal -->
                                        <div class="modal fade" id="modalEdit<?= $value['id_konten']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalFormTitle">Edit Konten</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <form action="<?= base_url('admin/konten/edit'); ?>" method="post" enctype="multipart/form-data">
                                                        <div class="modal-body">
                                                            <input type="hidden" name="nama_foto" value="<?= $value['foto']; ?>">
                                                            <input type="hidden" name="id_konten" value="<?= $value['id_konten']; ?>">
                                                            <div class="form-group">
                                                                <label class="form-label">Judul</label>
                                                                <input type="text" class="form-control" name="judul" value="<?= $value['judul']; ?>" autocomplete="off">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label">Tanggal</label>
                                                                <input type="date" class="form-control" name="tanggal" value="<?= $value['tanggal']; ?>" autocomplete="off">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label">Kategori</label>
                                                                <select name="id_kategori" class="form-control">
                                                                    <?php foreach ($kategori as $ten) : ?>
                                                                        <option value="<?= $ten['id_kategori']; ?>" <?php if ($ten['id_kategori'] == $value['id_kategori']) {
                                                                                                                        echo "selected";
                                                                                                                    } ?>><?= $ten['nama_kategori']; ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label">Keterangan</label>
                                                                <textarea class="form-control" id="textarea" name="keterangan" rows="7" autocomplete="off"><?= $value['keterangan']; ?></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label">Foto</label>
                                                                <input type="file" class="form-control" name="foto" accept="image/png, image/jpg, image/jpeg" autocomplete="off">
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
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalFormTitle">Tambah Konten</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="<?= base_url('admin/konten/tambah'); ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="username" value="<?= $user['username']; ?>">
                        <div class="form-group">
                            <label class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Kategori</label>
                            <select name="id_kategori" class="form-control">
                                <?php foreach ($kategori as $ten) : ?>
                                    <option value="<?= $ten['id_kategori']; ?>"><?= $ten['nama_kategori']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Keterangan</label>
                            <textarea class="form-control" id="textarea" name="keterangan" rows="4" autocomplete="off"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Foto</label>
                            <input type="file" class="form-control" name="foto" accept="image/png, image/jpg, image/jpeg" autocomplete="off">
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