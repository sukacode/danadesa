<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Ubah Pengeluaran Dana Surantiah</h1>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Ubah Pengeluaran Dana
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $pengeluaran_dana['id']; ?>">
                    <div class="form-group">
                        <label for="tgl_keluar">Tanggal Pengeluaran</label>
                        <input type="datetime" name="tgl_keluar" class="form-control" id="tgl_keluar" value="<?= $pengeluaran_dana['tgl_keluar']; ?>">
                        <small class="form-text text-danger"><?= form_error('tgl_keluar'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="bidang">Nama Bidang Pengeluaran</label>
                        <input type="text" name="bidang" class="form-control" id="bidang" placeholder="Bidang Pembiayaan" value="<?= $pengeluaran_dana['bidang']; ?>">
                        <small class="form-text text-danger"><?= form_error('bidang'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah Pengeluaran</label>
                        <input type="text" name="jumlah" class="form-control" id="jumlah" placeholder="Rp.-" value="<?= ($pengeluaran_dana['jumlah']); ?>">
                        <small class="form-text text-danger"><?= form_error('jumlah'); ?></small>
                    </div>

                    <button type="submit" class="btn btn-primary">Ubah Data</button>
                </form>

            </div>
        </div>
    </div>




</div>
<!-- End of Main Content -->


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
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->