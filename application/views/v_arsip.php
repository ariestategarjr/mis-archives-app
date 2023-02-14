                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Arsip</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                        <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Button trigger Add Modal Akun -->
                    <a href="<?= base_url('arsip/add_arsip_page'); ?>" class="btn btn-success mb-3">
                        Tambah Arsip Baru
                    </a>

                    <!-- Table Arsip -->
                    <table class="table table-responsive" id="dataTables">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Arsip</th>
                            <th>Nama Customer</th>
                            <th>Bisnis Unit</th>
                            <th>Tanggal Arsip</th>
                            <th>File Arsip</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php $no = 1; ?>
                        <?php foreach($arsips as $arsip) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $arsip->kode_arsip ?></td>
                            <td><?= $arsip->nama_customer ?></td>
                            <td><?= $arsip->bisnis_unit ?></td>
                            <td><?= $arsip->tgl_arsip ?></td>
                            <td>
                                <a href="<?= base_url(); ?>file_upload/<?= $arsip->file_arsip ?>" download><?= $arsip->file_arsip ?></a>
                            </td>
                            <td colspan="2">
                                <a href="<?= base_url('arsip/edit_arsip_page/' . $arsip->kode_arsip); ?>" class="btn btn-warning" id="editButton">Edit</a>
                                <button type="button" class="btn btn-danger" id="deleteButton" data-toggle="modal" data-target="#deleteModal<?= $arsip->kode_arsip ?>">Hapus</button>
                            </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>

                   <!-- Delete Modal Arsip -->
                   <?php $no = 1; ?>
                    <?php foreach($arsips as $arsip) { $no++; ?>
                    <div class="modal fade" id="deleteModal<?= $arsip->kode_arsip ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="<?= base_url('arsip/delete_arsip'); ?>" method="post">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete Bisnis Unit</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" name="kode-arsip" value="<?= $arsip->kode_arsip ?>">
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
                    <!-- End of Delete Modal Bisnis Unit -->


         
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
            $('.nav-arsip').attr('class', 'nav-item nav-arsip active');
        });
    </script>
