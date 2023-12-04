    <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
    <div class="content-wrapper">
        <div class="content">
            <div id="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
            <div id="type-error" data-flashdata="<?= $this->session->flashdata('gagal'); ?>"></div>
            
            <div class="card card-default">
                <div class="card-header">
                    <h2>Konfigurasi</h2>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('admin/konfigurasi/update') ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Judul website</label>
                            <input type="text" class="form-control" name="judul_website" value="<?= $konfig->judul_website; ?>" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Profile Website</label>
                            <textarea class="form-control" name="profil_website" rows="3"><?= $konfig->profil_website; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Instagram</label>
                            <input type="text" class="form-control" name="instagram" value="<?= $konfig->instagram; ?>" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Twitter</label>
                            <input type="text" class="form-control" name="twitter" value="<?= $konfig->twitter; ?>" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Github</label>
                            <input type="text" class="form-control" name="github" value="<?= $konfig->github; ?>" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Spotify</label>
                            <input type="text" class="form-control" name="spotify" value="<?= $konfig->spotify; ?>" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="text" class="form-control" name="facebook" value="<?= $konfig->facebook; ?>" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="<?= $konfig->email; ?>" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="<?= $konfig->alamat; ?>" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>No Whatsapp</label>
                            <input type="text" class="form-control" name="no_wa" value="<?= $konfig->no_wa; ?>" autocomplete="off">
                        </div>
                        <div class="form-footer mt-6">
                            <button type="submit" class="btn btn-primary btn-pill">Simpan</button>
                            <button type="reset" class="btn btn-light btn-pill">Cancel</button>
                        </div>
                    </form>

                </div>
            </div>


        </div>

    </div>