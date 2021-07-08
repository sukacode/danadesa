<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Dana Surantiah</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pendapatan dana desa</h6>
            <p class="">Pendapatan dana desa Kantor wali nagari rawang gunuang malelo surantiah <a target="_blank" href="">official DataTables documentation</a>.</p>
        </div>
        <div class="card w-100">
            <div class="card-body">
                <h5 class="card-title">Desa Surantiah</h5>
                <h6 class="card-subtitle mb-3 text-muted">Nagari Rawang Gunuang</h6>

                <div class="row">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Pendapatan</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">Rp<?php $pemasukan = 0;
                                                                                                foreach ($pemasukan_dana as $pdn) {
                                                                                                    $pemasukan += $pdn['jumlah'];
                                                                                                }
                                                                                                echo number_format($pemasukan); ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Pengeluaran</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">Rp<?php $pengeluaran = 0;
                                                                                                foreach ($pengeluaran_dana as $pdn) {
                                                                                                    $pengeluaran += $pdn['jumlah'];
                                                                                                }
                                                                                                echo number_format($pengeluaran); ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Dana Saat Ini</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">Rp<?= number_format($pemasukan - $pengeluaran); ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>





            </div>

        </div>
    </div>
</div>




</div>
<!-- End of Main Content -->

<!-- Footer -->

</div>
<!-- End of Main Content -->