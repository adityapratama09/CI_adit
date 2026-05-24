<div class="container-fluid">

    <!-- Heading -->
    <div class="mb-4">
        <h3 class="font-weight-bold text-dark mb-1">
            Dashboard
        </h3>

        <p class="text-muted mb-0">
            Selamat datang di sistem perpustakaan
        </p>
    </div>

    <!-- Card Statistik -->
    <div class="row">

        <!-- Total Kategori -->
        <div class="col-xl-4 col-md-6 mb-4">

            <div class="card border-0 shadow-sm rounded-lg h-100">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <p class="text-muted mb-1">
                                Total Kategori
                            </p>

                            <h2 class="font-weight-bold text-dark mb-0">
                                <?= $total_kategori; ?>
                            </h2>

                        </div>

                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                             style="width:55px; height:55px;">

                            <i class="fas fa-layer-group"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Total Buku -->
        <div class="col-xl-4 col-md-6 mb-4">

            <div class="card border-0 shadow-sm rounded-lg h-100">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <p class="text-muted mb-1">
                                Total Buku
                            </p>

                            <h2 class="font-weight-bold text-dark mb-0">
                                <?= $total_buku; ?>
                            </h2>

                        </div>

                        <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center"
                             style="width:55px; height:55px;">

                            <i class="fas fa-book"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Total Anggota -->
        <div class="col-xl-4 col-md-6 mb-4">

            <div class="card border-0 shadow-sm rounded-lg h-100">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <p class="text-muted mb-1">
                                Total Anggota
                            </p>

                            <h2 class="font-weight-bold text-dark mb-0">
                                <?= $total_anggota; ?>
                            </h2>

                        </div>

                        <div class="bg-warning text-white rounded-circle d-flex align-items-center justify-content-center"
                             style="width:55px; height:55px;">

                            <i class="fas fa-users"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Chart -->
    <div class="card border-0 shadow-sm rounded-lg">

        <div class="card-body">

            <div class="d-flex justify-content-between align-items-center mb-3">

                <h5 class="font-weight-bold text-dark mb-0">
                    Statistik Perpustakaan
                </h5>

            </div>

            <canvas id="chartDashboard" height="100"></canvas>

        </div>

    </div>

</div>