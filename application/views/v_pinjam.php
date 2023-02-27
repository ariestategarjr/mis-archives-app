                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Pinjam</h1>
                    </div>

                    <!-- Button trigger Add Modal Akun -->
                    <a href="<?= base_url('pinjam/add_pinjam_page'); ?>" class="btn btn-success mb-3">
                        Tambah Pinjam Baru
                    </a>

                    <!-- Table Pinjam -->
                    <div class="table-responsive-sm">
                        <table class="table table-bordered table-hover" id="dataTables">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Pinjam</th>
                                <th>Id Karyawan</th>
                                <th>Nama Karyawan</th>
                                <th>File Arsip</th>
                                <th>Nama Customer</th>
                                <th>Tanggal Pinjam</th>
                                <th>Durasi (hari)</th>
                                <th>Tanggal Kembali</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php $no = 1; ?>
                            <?php foreach($pinjams as $pinjam) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $pinjam->kode_pinjam ?></td>
                                <td><?= $pinjam->id_karyawan ?></td>
                                <td><?= $pinjam->nama_karyawan ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>upload/<?= $pinjam->file_arsip ?>" target="_blank"><?= $pinjam->file_arsip ?></a>
                                </td>
                                <td><?= $pinjam->nama_customer ?></td>
                                <td><?= $pinjam->tgl_pinjam ?></td>
                                <td><?= $pinjam->durasi ?></td>
                                <td><?= $pinjam->tgl_kembali ?></td>
                                <td colspan="2">
                                    <a href="<?= base_url('pinjam/edit_pinjam_page/' . $pinjam->kode_pinjam); ?>" class="btn btn-warning btn-sm" id="editButton">Edit</a>
                                    <button type="button" class="btn btn-danger btn-sm" id="deleteButton" data-toggle="modal" data-target="#deleteModal<?= $pinjam->kode_pinjam ?>">Hapus</button>
                                </td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- Delete Modal Pinjam -->
                    <?php $no = 1; ?>
                    <?php foreach($pinjams as $pinjam) { $no++; ?>
                    <div class="modal fade" id="deleteModal<?= $pinjam->kode_pinjam ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="<?= base_url('pinjam/delete_pinjam'); ?>" method="post">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete Bisnis Unit</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" name="kode-pinjam" value="<?= $pinjam->kode_pinjam ?>">
                                    <p>Apakah Anda yakin akan menghapus data ini ?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <!-- End of Delete Modal Pinjam -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('login/log_out') ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url() ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.nav-dashboard').attr('class', 'nav-item nav-dashboard');
            $('.nav-pinjam').attr('class', 'nav-item nav-pinjam active');
        });
    </script>