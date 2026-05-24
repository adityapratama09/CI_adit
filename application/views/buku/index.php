<div class="container-fluid">

    <!-- Header -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h2 class="h3 mb-1 text-gray-800 font-weight-bold">Data Buku</h2>
            <p class="text-muted mb-0">Kelola data buku perpustakaan</p>
        </div>

        <a href="<?= site_url('buku/tambah'); ?>" class="btn btn-primary shadow-sm px-4">
            <i class="fas fa-plus mr-2"></i>Tambah Buku
        </a>
    </div>

    <!-- Card -->
    <div class="card border-0 shadow-lg rounded-lg">

        <!-- Card Header -->
        <div class="card-header bg-white border-0 py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                <i class="fas fa-book mr-2"></i>Daftar Buku
            </h6>
        </div>

        <!-- Card Body -->
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-hover align-middle" id="dataTable" width="100%" cellspacing="0">

                    <thead class="bg-primary text-white">
                        <tr>
                            <th class="text-center">No</th>
                            <th>Kode Buku</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Kategori</th>
                            <th class="text-center">Stok</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no=1; foreach($buku as $b): ?>

                        <tr>
                            <td class="text-center font-weight-bold">
                                <?= $no++ ?>
                            </td>

                            <td>
                                <span class="badge badge-secondary px-3 py-2">
                                    <?= $b['kode_buku']; ?>
                                </span>
                            </td>

                            <td class="font-weight-bold text-dark">
                                <?= $b['judul_buku']; ?>
                            </td>

                            <td>
                                <?= $b['penulis']; ?>
                            </td>

                            <td>
                                <span class="badge badge-info px-3 py-2">
                                    <?= $b['nama_kategori']; ?>
                                </span>
                            </td>

                            <td class="text-center">
                                <?php if($b['stok'] > 5): ?>
                                    <span class="badge badge-success px-3 py-2">
                                        <?= $b['stok']; ?>
                                    </span>

                                <?php elseif($b['stok'] > 0): ?>
                                    <span class="badge badge-warning px-3 py-2">
                                        <?= $b['stok']; ?>
                                    </span>

                                <?php else: ?>
                                    <span class="badge badge-danger px-3 py-2">
                                        Habis
                                    </span>
                                <?php endif; ?>
                            </td>

                            <td class="text-center">

                                <a href="<?= site_url('buku/edit/'.$b['id_buku']); ?>"
                                   class="btn btn-sm btn-warning rounded-pill px-3">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <a href="<?= site_url('buku/hapus/'.$b['id_buku']); ?>"
                                   class="btn btn-sm btn-danger rounded-pill px-3"
                                   onclick="return confirm('Yakin ingin menghapus data ini?')">
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