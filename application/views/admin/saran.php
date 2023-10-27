    <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
    <div class="content-wrapper">
        <div class="content">


            <!-- Table Product -->
            <div class="row">
                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-header">
                            <h5>Table User</h5>
                        </div>
                        <div class="card-body table-responsive">
                            <!-- productsTable table-hover table-product-->
                            <table id="" class="table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Isi</th>
                                        <?php if ($user['level'] == 'Admin') { ?>
                                            <th>Aksi</th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $no = 1;
                                    foreach ($saran as $ser) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $ser['tanggal']; ?></td>
                                            <td><?= $ser['nama']; ?></td>
                                            <td><?= $ser['email']; ?></td>
                                            <td>
                                                <button type="button" data-toggle="modal" data-target="#modalEdit<?= $ser['id_saran']; ?>" class="text-info">
                                                    <span class="mdi mdi-comment-search-outline"></span>
                                                </button>
                                            </td>
                                            <form action="<?= base_url('admin/saran/delete'); ?>" method="post">
                                                <?php if ($user['level'] == 'Admin') { ?>
                                                    <td>
                                                        <input type="checkbox" value="<?= $ser['id_saran']; ?>" name="id[]">
                                                    </td>
                                                <?php } ?>
                                        </tr>

                                        <!-- Modal -->
                                        <div class="modal fade" id="modalEdit<?= $ser['id_saran']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalFormTitle">Pesan</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h3><?= $ser['isi_saran']; ?></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <?php endforeach; ?>


                                </tbody>
                                <tfoot>
                                    <td colspan="5"></td>
                                    <?php if ($user['level'] == 'Admin') { ?>
                                        <td>
                                            <button type="submit" onclick="return confirm('Yakin nih?')" class="btn btn-danger"><i class="mdi mdi-trash-can-outline"></i></button>
                                        </td>
                                    <?php } ?>
                                </tfoot>
                                </form>
                            </table>

                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>