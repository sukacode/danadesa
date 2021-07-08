<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Ubah Pemasukan Dana Surantiah</h1>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Form Ubah Pemasukan Dana
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $pemasukan_dana['id']; ?>">
                    <div class="form-group">
                        <input type="datetime" name="tgl_masuk" class="form-control" id="tgl_masuk" value="<?= $pemasukan_dana['tgl_masuk']; ?>">
                        <small class="form-text text-danger"><?= form_error('tgl_masuk'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="bidang">Nama Bidang Pemasukan</label>
                        <input type="text" name="bidang" class="form-control" id="bidang" placeholder="Bidang Pembiayaan" value="<?= $pemasukan_dana['bidang']; ?>">
                        <small class="form-text text-danger"><?= form_error('bidang'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah Pemasukan</label>
                        <input type="text" name="jumlah" class="form-control" id="jumlah" placeholder="Rp.-" value="<?= $pemasukan_dana['jumlah']; ?>">
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