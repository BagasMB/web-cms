<section class="section-sm">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-bordered mb-5 d-flex align-items-center">
                    <h1 class="h4">Talk To Me Anytime :)</h1>
                    <ul class="list-inline social-icons ml-auto mr-3 d-none d-sm-block">
                        <li class="list-inline-item"><a href="<?= $konfig->no_wa; ?>" target="_blank"><i class="fa-brands fa-whatsapp fa-lg"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="<?= $konfig->instagram; ?>" target="_blank"><i class="fa-brands fa-instagram fa-lg"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="<?= $konfig->github; ?>" target="_blank"><i class="fa-brands fa-github fa-lg"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="<?= $konfig->spotify; ?>" target="_blank"><i class="fa-brands fa-spotify fa-lg"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="content mb-5">
                    <h2 id="ask-us-anything-br-or-just-say-hi">Halo semuanya</h2>
                    <p>Bisa mengirim saran, keritikan, atau mau tau lebih lanjut <br> bisa mengirim email atau mengisi form tersebut
                    </p>
                    <h4 class="mt-5">Hate Forms? Write Us Email</h4>
                    <p><i class="ti-email mr-2 text-primary"></i><a href="mailto:<?= $konfig->email; ?>"><?= $konfig->email; ?></a>
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div id="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                <div id="ngilang">
                    <?= $this->session->flashdata('pesan'); ?>
                </div>
                <form method="POST" action="<?= base_url('saran'); ?>">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" autocomplete="off">
                        <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" autocomplete="off">
                        <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="message">Message Here</label>
                        <textarea name="isi_saran" id="message" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Now</button>
                </form>
            </div>
        </div>
    </div>
</section>