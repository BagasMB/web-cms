<section class="section">
    <div class="container">
        <article class="row mb-4">
            <div class="mx-auto mb-4">
                <h1 class="h2 mb-2 post-title"><?= $konten->judul; ?></h1>
                <ul class="list-inline post-meta mb-3">
                    <li class="list-inline-item"><i class="ti-user mr-2"></i><?= $konten->nama; ?></li>
                    <li class="list-inline-item">Date : <?= $konten->tanggal; ?></li>
                    <li class="list-inline-item">Categories : <a href="<?= base_url('home/kategori/' . $konten->id_kategori); ?>" class="ml-1"><?= $konten->nama_kategori; ?> </a></li>
                </ul>
            </div>
            <div class="col-lg-5 mx-auto mb-3">
                <div class="post-slider">
                    <img src="<?= base_url('assets/upload/konten/' . $konten->foto); ?>" class="img-fluid" alt="post-thumb">
                </div>
            </div>
            <div class=" mx-auto">
                <div class="content">
                    <p><?= $konten->keterangan; ?></p>
                </div>
            </div>
            <div class=" mx-auto mb-4">
                <a href="<?= base_url('home' . '#konten'); ?>" class="btn btn-outline-primary">Back</a>
            </div>
        </article>
    </div>
</section>