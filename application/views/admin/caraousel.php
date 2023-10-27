    <!-- ====================================——— CONTENT WRAPPER===================================== -->
    <div class="content-wrapper">
        <div class="content">

            <div class="col-md-5" id="ngilang">
                <?= $this->session->flashdata('pesan'); ?>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <form action="<?= base_url('admin/caraousel/tambah'); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" class="form-control" name="judul" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" class="form-control" name="foto">
                            <span class="mt-2 d-block">Pilih foto dengan ukuran(1:3).</span>
                        </div>
                        <div class="form-footer mt-6">
                            <button type="submit" class="btn btn-primary btn-pill">Submit</button>
                        </div>
                    </form>
                </div>
            </div>





            <div class="row">
                <?php foreach ($caraousel as $value) : ?>
                    <div class="col-lg-4">
                        <div class="card mb-4">
                            <a href="<?= base_url('assets/upload/caraousel/' . $value['foto']); ?>" class="fancybox" data-fancybox="gallery">
                                <img class="card-img-top" src="<?= base_url('assets/upload/caraousel/' . $value['foto']); ?>">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title"><?= $value['judul']; ?></h5>
                                <button type="button" data-toggle="modal" data-target="#modalEdit<?= $value['id_caraousel']; ?>" class="btn btn-sm btn-outline-primary btn-pill">Edit</button>
                                <a href="<?= base_url('admin/caraousel/hapus/' . $value['foto']); ?>" onclick="return confirm('Yakin nih?')" class="btn btn-sm btn-outline-danger btn-pill">Delete</a>
                            </div>
                        </div>
                    </div>


                    <div class="modal fade" id="modalEdit<?= $value['id_caraousel']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalFormTitle">Modal Title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <form action="<?= base_url('admin/caraousel/edit'); ?>" method="post" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <input type="hidden" name="nama_foto" value="<?= $value['foto']; ?>">
                                        <div class="form-group">
                                            <label class="form-label">Judul</label>
                                            <input type="text" class="form-control" placeholder="Judul" value="<?= $value['judul']; ?>" name="judul" autocomplete="off">
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
            </div>





        </div>
    </div>