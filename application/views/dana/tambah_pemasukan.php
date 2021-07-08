<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Pemasukan Dana Surantiah</h1>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Tambah Pemasukan Dana
            </div>
            <div class="card-body">


                <form action="" method="post">
                    <div class="form-group">
                        <label for="tgl_masuk">Tanggal Pemasukan</label>
                        <input type="datetime-local" name="tgl_masuk" class="form-control" id="tgl_masuk">
                        <small class="form-text text-danger"><?= form_error('tgl_masuk'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="bidang">Nama Bidang Pemasukan</label>
                        <input type="text" name="bidang" class="form-control" id="bidang" placeholder="Bidang Pembiayaan">
                        <small class="form-text text-danger"><?= form_error('bidang'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah Pemasukan</label>
                        <input type="text" name="jumlah" class="form-control" id="jumlah" placeholder="Rp.-">
                        <small class="form-text text-danger"><?= form_error('jumlah'); ?></small>
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