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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d693.2834489287158!2d110.94357230041105!3d-7.598646891703695!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwMzUnNTUuNCJTIDExMMKwNTYnMzYuMCJF!5e0!3m2!1sid!2sid!4v1701038097006!5m2!1sid!2sid" width="100%" height="290px" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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