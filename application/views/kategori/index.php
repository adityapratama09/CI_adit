<div class="container-fluid">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h3 class="font-weight-bold text-dark mb-1">
                Data Kategori
            </h3>

            <p class="text-muted mb-0">
                Kelola kategori buku perpustakaan
            </p>
        </div>

        <a href="<?= site_url('kategori/tambah'); ?>"
           class="btn btn-primary shadow-sm px-4 rounded-pill">

            <i class="fas fa-plus mr-1"></i> Tambah

        </a>

    </div>

    <!-- Card -->
    <div class="card border-0 shadow rounded-lg">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle"
                       id="dataTable"
                       width="100%"
                       cellspacing="0">

                    <thead>
                        <tr style="background:#f8f9fc;">
                            <th class="border-0 text-secondary">No</th>
                            <th class="border-0 text-secondary">Nama Kategori</th>
                            <th class="border-0 text-center text-secondary">
                                Aksi
                            </th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php $no=1; foreach($kategori as $k): ?>

                        <tr>

                            <td class="align-middle font-weight-bold text-muted">
                                <?= $no++ ?>
                            </td>

                            <td class="align-middle">

                                <div class="d-flex align-items-center">

                                    <div class="bg-primary rounded-circle mr-3"
                                         style="width:10px; height:10px;">
                                    </div>

                                    <span class="font-weight-bold text-dark">
                                        <?= $k->nama_kategori; ?>
                                    </span>

                                </div>

                            </td>

                            <td class="align-middle text-center">

                                <a href="<?= site_url('kategori/edit/'.$k->id); ?>"
                                   class="btn btn-sm btn-warning text-white rounded-circle shadow-sm mr-1"
                                   style="width:35px; height:35px;">

                                    <i class="fas fa-edit"></i>

                                </a>

                                <a href="<?= site_url('kategori/hapus/'.$k->id); ?>"
                                   onclick="return confirm('Yakin ingin menghapus data ini?')"
                                   class="btn btn-sm btn-danger rounded-circle shadow-sm"
                                   style="width:35px; height:35px;">

                                    <i class="fas fa-trash"></i>

                                </a>

                            </td>

                        </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>