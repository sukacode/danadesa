<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Anggaran Dana Surantiah</h1>
    <p class="mb-4">Kantor wali nagari rawang gunuang malelo surantiah <a target="_blank" href="">official DataTables documentation</a>.</p>
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Pengeluaran dana <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pengeluaran dana desa</h6>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <a href="<?= base_url('user/tambahpengeluaran'); ?>" class="btn btn-primary mb-3">Tambah Data</a>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Keluar</th>
                            <th>Uraian Bidang Pembiayaan</th>
                            <th>Jumlah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($pengeluaran_dana as $pdn) : ?>
                            <tr>
                                <td><?= $no; ?>.</td>
                                <td><?= $pdn['tgl_keluar']; ?></td>
                                <td><?= $pdn['bidang']; ?></td>
                                <td>Rp. <?= number_format($pdn['jumlah']); ?>.00-</td>
                                <td>
                                    <a href="<?= base_url(); ?>user/hapuspengeluaran/<?= $pdn['id']; ?>" class="badge badge-danger" onclick="return confirm('Are you sure to delete this column?');">Delete</a>
                                    <a href="<?= base_url(); ?>user/ubahpengeluaran/<?= $pdn['id']; ?>" class="badge badge-success">Ubah</a>
                                </td>
                            </tr>
                            <?php $no++; ?>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="3" class="text-center">Total</th>
                            <th>Rp. <?php $data = 0;
                                    foreach ($pengeluaran_dana as $pdn) {
                                        $data += $pdn['jumlah'];
                                    }
                                    echo number_format($data); ?>,00-
                            </th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Main Content -->


</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->