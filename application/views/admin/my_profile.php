<div class="content-wrapper">
    <div class="content">

        <div id="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <div id="type-error" data-flashdata="<?= $this->session->flashdata('gagal'); ?>"></div>

        <div class="card card-default">
            <div class="card-header">
                <h2 class="mb-5">Profile Settings</h2>
            </div>

            <div class="card-body">
                <form action="<?= base_url('admin/MyProfile'); ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_user" value="<?= $user['id_user'] ?>">
                    <div class="form-group row mb-5">
                        <label for="com-name" class="col-sm-4 col-lg-2 col-form-label">Nama</label>
                        <div class="col-sm-8 col-lg-8">
                            <input type="text" class="form-control" name="nama" value="<?= $user['nama']; ?>" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group row mb-6">
                        <label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">Cover Image</label>
                        <div class="col-sm-8 col-lg-6">
                            <div class="custom-file mb-1">
                                <input type="file" class="form-control" name="image" autocomplete="off">
                            </div>
                            <span class="d-block mb-3">Upload a new cover image 1200x300</span>
                        </div>
                        <div class="col-lg-2">
                            <a href="<?= base_url('assets/upload/profile/' . $user['image']); ?>" class="fancybox" data-fancybox="gallery">
                                <img src="<?= base_url('assets/upload/profile/' . $user['image']); ?>" width="170" alt="User Image" class="img-fluid img-thumbnail rounded">
                            </a>
                        </div>
                    </div>


                    <div class="d-flex justify-content-start">
                        <button type="submit" class="btn btn-primary mb-2 btn-pill">Simpan</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>