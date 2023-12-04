<div class="content-wrapper">
    <div class="content">

        <div class="col-md-5" id="ngilang">
            <?= $this->session->flashdata('pesan'); ?>
        </div>
        <div id="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <div id="type-error" data-flashdata="<?= $this->session->flashdata('gagal'); ?>"></div>

        <div class="card card-default">
            <div class="card-header">
                <h2>Password Settings</h2>
            </div>

            <div class="card-body">
                <form action="<?= base_url('admin/password'); ?>" method="post">
                    <input type="hidden" name="id_user" value="<?= $user['id_user'] ?>">
                    <div class="form-group row mb-6">
                        <label for="password" class="col-sm-4 col-lg-2 col-form-label">Password Lama</label>
                        <div class="col-sm-8 col-lg-10">
                            <input type="password" name="password_lama" class="form-control" id="password" autocomplete="off">
                            <?= form_error('password_lama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row mb-6">
                        <label for="password" class="col-sm-4 col-lg-2 col-form-label">Password Baru</label>
                        <div class="col-sm-8 col-lg-10">
                            <input type="password" name="password_baru1" class="form-control" id="password" autocomplete="off">
                            <?= form_error('password_baru1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row mb-6">
                        <label for="password" class="col-sm-4 col-lg-2 col-form-label">Konfirmasi Password</label>
                        <div class="col-sm-8 col-lg-10">
                            <input type="password" name="password_baru2" class="form-control" id="password" autocomplete="off">
                            <?= form_error('password_baru2', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mb-2 btn-pill">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>