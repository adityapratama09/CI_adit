<div class="container-fluid">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h3 class="font-weight-bold text-dark mb-1">
                Laporan Anggota
            </h3>

            <p class="text-muted mb-0">
                Data laporan anggota perpustakaan
            </p>
        </div>

        <a href="<?= site_url('laporan/cetak_anggota'); ?>"
           target="_blank"
           class="btn btn-success shadow-sm rounded-pill px-4">

            <i class="fas fa-file-pdf mr-1"></i>
            Cetak PDF

        </a>

    </div>

    <!-- Table Card -->
    <div class="card border-0 shadow-sm rounded-lg">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead>
                        <tr style="background:#f8f9fc;">
                            <th class="border-0 text-secondary">No</th>
                            <th class="border-0 text-secondary">No Anggota</th>
                            <th class="border-0 text-secondary">Nama</th>
                            <th class="border-0 text-secondary">Alamat</th>
                            <th class="border-0 text-secondary">Telepon</th>
                            <th class="border-0 text-secondary">Email</th>
                            <th class="border-0 text-center text-secondary">Status</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php $no = 1; foreach($anggota as $a): ?>

                        <tr>
                            <td class="font-weight-bold text-muted">
                                <?= $no++; ?>
                            </td>

                            <td>
                                <span class="badge badge-light border px-3 py-2">
                                    <?= $a->nomor_anggota; ?>
                                </span>
                            </td>

                            <td class="font-weight-bold text-dark">
                                <?= $a->nama; ?>
                            </td>

                            <td class="text-muted">
                                <?= $a->alamat; ?>
                            </td>

                            <td class="text-muted">
                                <?= $a->telepon; ?>
                            </td>

                            <td class="text-muted">
                                <?= $a->email; ?>
                            </td>

                            <td class="text-center">

    <?php if(strtolower(trim($a->status)) == 'aktif'): ?>

        <span class="badge badge-success px-3 py-2">
            Aktif
        </span>

    <?php else: ?>

        <span class="badge badge-danger px-3 py-2">
            Tidak Aktif
        </span>

    <?php endif; ?>

</td>
                        </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>