    <section class="section-sm">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title text-center">
                        <h2 class="mb-5">Content <?= $nama_kategori; ?></h2>
                    </div>
                </div>
                <!-- <div class="widget">
                    <h5 class="widget-title"><span>Search</span></h5>
                    <form action="" method="post" class="widget-search">
                        <div class="row">
                            <input class="col-8" id="search-query" name="search" type="text" placeholder="Type &amp; Hit Enter..." autocomplete="off">
                            <input type="submit" value="Search" name="submit" class="btn btn-primary col-3">
                        </div>
                    </form>
                </div> -->
                <?php foreach ($konten as $ten) : ?>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <article class="mb-5">
                            <div class="post-slider slider-sm">
                                <a href="<?= base_url('assets/upload/konten/' . $ten['foto']); ?>" class="fancybox" data-fancybox="gallery">
                                    <img loading="lazy" src="<?= base_url('assets/upload/konten/' . $ten['foto']); ?>" class="img-fluid" alt="post-thumb">
                                </a>
                            </div>
                            <h3 class="h5"><a class="post-title" href="<?= base_url('home/artikel/' . $ten['slug']); ?>"><?= word_limiter($ten['judul'], 5);  ?>.</a></h3>
                            <ul class="list-inline post-meta mb-2">
                                <li class="list-inline-item"><i class="ti-user mr-2"></i><?= $ten['nama']; ?></li>
                                <li class="list-inline-item">Date : <?= $ten['tanggal']; ?></li>
                                <!-- <li class="list-inline-item">Categories : <a href="#!" class="ml-1"><?= $ten['nama_kategori']; ?> </a></li> -->
                            </ul>
                            <a href="<?= base_url('home/artikel/' . $ten['slug']); ?>" class="btn btn-outline-primary">Details</a>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>