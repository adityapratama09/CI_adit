<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="font-weight-bold text-dark mb-1">
                Laporan Buku
            </h3>

            <p class="text-muted mb-0">
                Data laporan buku perpustakaan
            </p>
        </div>

        <a href="<?= site_url('laporan/cetak_buku'); ?>"
           target="_blank"
           class="btn btn-success shadow-sm rounded-pill px-4">
            <i class="fas fa-file-pdf mr-1"></i>
            Cetak PDF
        </a>
    </div>

    <div class="card border-0 shadow-sm rounded-lg">
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-hover align-middle">
                    <thead>
                        <tr style="background:#f8f9fc;">
                            <th class="border-0 text-secondary">No</th>
                            <th class="border-0 text-secondary">Kode Buku</th>
                            <th class="border-0 text-secondary">Judul</th>
                            <th class="border-0 text-secondary">Kategori</th>
                            <th class="border-0 text-secondary">Penulis</th>
                            <th class="border-0 text-secondary">Penerbit</th>
                            <th class="border-0 text-secondary">Tahun</th>
                            <th class="border-0 text-center text-secondary">Stok</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no=1; foreach($buku as $b): ?>
                        <tr>
                            <td class="font-weight-bold text-muted">
                                <?= $no++; ?>
                            </td>

                            <td>
                                <span class="badge badge-light border px-3 py-2">
                                    <?= $b->kode_buku; ?>
                                </span>
                            </td>

                            <td class="font-weight-bold text-dark">
                                <?= $b->judul_buku; ?>
                            </td>

                            <td class="text-muted">
                                <?= $b->nama_kategori; ?>
                            </td>

                            <td class="text-muted">
                                <?= $b->penulis; ?>
                            </td>

                            <td class="text-muted">
                                <?= $b->penerbit; ?>
                            </td>

                            <td class="text-muted">
                                <?= $b->tahun; ?>
                            </td>

                            <td class="text-center">
                                <span class="badge badge-primary px-3 py-2">
                                    <?= $b->stok; ?>
                                </span>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>