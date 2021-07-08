<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Pengeluaran Dana Surantiah</h1>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Tambah Pengeluaran Dana
            </div>
            <div class="card-body">
                <?php if (validation_errors()) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(''); ?>
                    </div>
                <?php endif; ?>

                <form action="" method="post">
                    <div class="form-group">
                        <label for="tanggal">Tanggal Pengeluaran</label>
                        <input type="datetime-local" name="tgl_keluar" class="form-control" id="tanggal">
                    </div>
                    <div class="form-group">
                        <label for="bidang">Nama Bidang Pengeluaran</label>
                        <input type="text" name="bidang" class="form-control" id="bidang" placeholder="Bidang Pembiayaan">
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah Pengeluaran</label>
                        <input type="text" name="jumlah" class="form-control" id="jumlah" placeholder="Rp.-">
                    </div>

                    <button type="submit" class="btn btn-primary">Tambah Data</button>
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