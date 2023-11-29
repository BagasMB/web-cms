    <div class="home-slider owl-carousel js-fullheight">
        <?php foreach ($caraousel as $sel) : ?>
            <div class="slider-item js-fullheight" style="background-image:url(<?= base_url('assets/upload/caraousel/' . $sel['foto']); ?>);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                        <div class="col-md-12 ftco-animate">
                            <div class="text w-100 text-center">
                                <!-- <h2>Best Place to Travel</h2> -->
                                <h1 class="mb-3"><?= $sel['judul']; ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <section class="section" id="konten">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title text-center">
                        <h2 class="mb-5">Content</h2>
                    </div>
                </div>
                <div class="col-lg-8 mb-t mb-lg-0">
                    <article class="row mb-5">
                        <?php if ($konten == null) : ?>
                            <p class="text-center"><em>Maaf Konten <strong><?= $yangdicari; ?></strong> Yang Ada Cari Tidak Ada</em> </p>
                        <?php else : ?>
                            <?php foreach ($konten as $ten) : ?>
                                <div class="col-md-4 mb-md-0">
                                    <div class="post-slider slider-sm">
                                        <a href="<?= base_url('assets/upload/konten/' . $ten['foto']); ?>" class="fancybox" data-fancybox="gallery">
                                            <img loading="lazy" src="<?= base_url('assets/upload/konten/' . $ten['foto']); ?>" class="img-fluid" alt="post-thumb">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h3 class="h5">
                                        <a class="post-title" href="<?= base_url('home/artikel/' . $ten['slug']); ?>"><?= word_limiter($ten['judul'], 5); ?></a>
                                    </h3>
                                    <ul class="list-inline post-meta mb-2">
                                        <li class="list-inline-item"><i class="ti-user mr-2"></i><?= $ten['nama']; ?>
                                        </li>
                                        <li class="list-inline-item">Date : <?= date('d F Y', strtotime($ten['tanggal'])); ?></li>
                                        <li class="list-inline-item">Categories : <?= $ten['nama_kategori']; ?>
                                        </li>
                                    </ul>
                                    <p><?= word_limiter($ten['keterangan'], 15); ?>
                                        <!-- class="btn btn-outline-primary" -->
                                        <a href="<?= base_url('home/artikel/' . $ten['slug']); ?>">Baca Selengkapnya</a>
                                    </p>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </article>
                    <?= $this->pagination->create_links(); ?>
                </div>

                <aside class="col-lg-4">
                    <!-- Search -->
                    <div class="widget">
                        <h5 class="widget-title"><span>Search</span></h5>
                        <form action="<?= base_url('home'); ?>" method="post" class="widget-search">
                            <div class="row">
                                <input class="col-8" id="search-query" name="search" type="text" placeholder="Type &amp; Hit Enter..." autocomplete="off">
                                <!-- <button type="submit" name="submit"><i class="ti-search"></i></button> -->
                                <input type="submit" value="Search" name="submit" class="btn btn-primary col-3">
                            </div>
                        </form>
                    </div>
                    <!-- categories -->
                    <div class="widget">
                        <h5 class="widget-title"><span>Categories</span></h5>
                        <ul class="list-unstyled widget-list">
                            <?php foreach ($jumlah_konten as $key) { ?>
                                <li>
                                    <a href="<?= base_url('home/kategori/' . $key->id_kategori); ?>" class="d-flex"><?= $key->nama_kategori; ?>
                                        <small class="ml-auto">(<?= $key->jumlah_konten; ?>)</small>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <!-- latest post -->
                    <div class="widget">
                        <h5 class="widget-title"><span>Latest Article</span></h5>
                        <!-- post-item -->
                        <?php foreach ($konten2 as $ten) : ?>
                            <ul class="list-unstyled widget-list">
                                <li class="media widget-post align-items-center">
                                    <a href="<?= base_url('home/artikel/' . $ten['slug']); ?>">
                                        <img loading="lazy" class="mr-3" src="<?= site_url('assets/upload/konten/' . $ten['foto']); ?>">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="h6 mb-0">
                                            <a href="<?= base_url('home/artikel/' . $ten['slug']); ?>"><?= word_limiter($ten['judul'], 5); ?></a>
                                        </h5>
                                        <small><?= date('d F Y', strtotime($ten['tanggal'])); ?></small>
                                    </div>
                                </li>
                            </ul>
                        <?php endforeach; ?>
                    </div>
                </aside>
            </div>
        </div>
    </section>